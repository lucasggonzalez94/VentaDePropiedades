<?php

    // Importar la conexion
    require '../includes/config/database.php';
    $db = conectarDB();

    // Escribir el query
    $query = "SELECT * FROM propiedades";

    // Consultar la bbdd
    $resultadoQuery = mysqli_query($db, $query);

    // Muestra el mensaje condicional
    $resultado = $_GET['resultado'] ?? null;

    // Incluye un template
    require "../includes/funciones.php";
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Administrador de Bienes Raíces</h1>

        <?php if(intval($resultado) === 1): ?>
            <p class="alerta exito">Publicación creada correctamente</p>
        <?php elseif(intval($resultado) === 2): ?>
            <p class="alerta exito">Publicación actualizada correctamente</p>
        <?php endif; ?>

        <a href="/admin/propiedades/crear.php" class="btn btn-verde">Nueva Propiedad</a>

        <table class="propiedades">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Imágen</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                <!-- Mostrar los resultados -->
                <?php while($propiedad = mysqli_fetch_assoc($resultadoQuery)): ?>
                <tr>
                    <td><?php echo $propiedad['id']; ?></td>
                    <td><?php echo $propiedad['titulo']; ?></td>
                    <td><img src="/imagenes/<?php echo $propiedad['imagen']; ?>" alt="" class="imagen-tabla"></td>
                    <td>$ <?php echo $propiedad['precio']; ?></td>
                    <td>
                        <a href="#" class="btn-rojo-block">Eliminar</a>
                        <a href="/admin/propiedades/actualizar.php?id=<?php echo $propiedad['id']; ?>" class="btn-amarillo-block">Actualizar</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </main>

<?php

    // Cerrar la conexion
    mysqli_close($db);

    incluirTemplate('footer');
?>