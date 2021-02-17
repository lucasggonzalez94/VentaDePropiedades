<?php
    $inicio = true;

    include 'includes/templates/header.php';
?>
<!-- <!DOCTYPE php>
<php lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="Bienes Raices">
    <title>Bienes Raíces</title>
    <link rel="stylesheet" href="./build/css/app.css">
</head>
<body>
    
    <header class="header inicio">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="index.php"><img src="./build/img/logo.svg" alt="logo de bienes raices" class="logo"></a>

                <div class="mobile-menu">
                    <img src="build/img/barras.svg" alt="icono menu responsive">
                </div>

                <div class="derecha">
                    <img src="build/img/dark-mode.svg" alt="Boton modo oscuro" class="dark-mode-btn">
                    <nav class="navegacion">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contacto</a>
                    </nav>
                </div>
            </div>

            <h2>Venta de Casas y Departamentos Exclusivos de Lujo</h2>
        </div>
    </header> -->

    <main class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe voluptate vitae in magni voluptatem reiciendis, libero sunt voluptatum ad eum eligendi impedit praesentium? Ducimus animi labore nesciunt quia quam voluptates.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe voluptate vitae in magni voluptatem reiciendis, libero sunt voluptatum ad eum eligendi impedit praesentium? Ducimus animi labore nesciunt quia quam voluptates.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="icono tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe voluptate vitae in magni voluptatem reiciendis, libero sunt voluptatum ad eum eligendi impedit praesentium? Ducimus animi labore nesciunt quia quam voluptates.</p>
            </div>
        </div>
    </main>

    <section class="seccion contenedor">
        <h2>Casas y Departamentos en Venta</h2>

        <div class="contenedor-anuncios">
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio1.webp" type="image/webp">
                    <source srcset="build/img/anuncio1.jpg" type="image/jpeg">
                    <img src="build/img/anuncio1.jpg" alt="anuncio" loading="lazy">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa de Lujo en el Lago</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio.</p>
                    <p class="precio">$3.000.000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" src="build/img/icono_wc.svg" alt="icono wc" loading="lazy">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" loading="lazy">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono habitaciones" loading="lazy">
                            <p>4</p>
                        </li>
                    </ul>

                    <a href="anuncio.php" class="btn-amarillo-block">Ver Propiedad</a>
                </div>
            </div>

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio2.webp" type="image/webp">
                    <source srcset="build/img/anuncio2.jpg" type="image/jpeg">
                    <img src="build/img/anuncio2.jpg" alt="anuncio" loading="lazy">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa Terminados de Lujo</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio.</p>
                    <p class="precio">$3.000.000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" src="build/img/icono_wc.svg" alt="icono wc" loading="lazy">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" loading="lazy">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono habitaciones" loading="lazy">
                            <p>4</p>
                        </li>
                    </ul>

                    <a href="anuncio.php" class="btn-amarillo-block">Ver Propiedad</a>
                </div>
            </div>

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio3.webp" type="image/webp">
                    <source srcset="build/img/anuncio3.jpg" type="image/jpeg">
                    <img src="build/img/anuncio3.jpg" alt="anuncio" loading="lazy">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa con Piscina</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio.</p>
                    <p class="precio">$3.000.000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" src="build/img/icono_wc.svg" alt="icono wc" loading="lazy">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" loading="lazy">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono habitaciones" loading="lazy">
                            <p>4</p>
                        </li>
                    </ul>

                    <a href="anuncio.php" class="btn-amarillo-block">Ver Propiedad</a>
                </div>
            </div>
        </div>

        <div class="alinear-derecha">
            <a href="anuncios.php" class="btn-verde">Ver Todas</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>Llena el formulario de contacto y un asesor se pondrá en contacto con vos a la brevedad.</p>
        <a href="contacto.php" class="btn-amarillo">Contáctanos</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img/blog1.jpg" type="image/jpeg">
                        <img src="build/img/blog1.jpg" alt="texto entrada blog" loading="lazy">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
                        <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero</p>
                    </a>
                </div>
            </article>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <source srcset="build/img/blog2.jpg" type="image/jpeg">
                        <img src="build/img/blog2.jpg" alt="texto entrada blog" loading="lazy">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Guía para la decoración de tu hogar</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
                        <p>Maximiza el espacio en tu hogar con esta guía, aprende a combinar muebles y colores para darle vida a tu espacio</p>
                    </a>
                </div>
            </article>
        </section>

        <section class="testimoniales">
            <h3>Testimoniales</h3>
            <div class="testimonial">
                <blockquote>
                    El personal se comportó de una excelente forma, muy buena atención y la casa que me ofrecieron cumple con todas mis expectativas.
                </blockquote>
                <p>- Lucas Gonzalez</p>
            </div>
        </section>
    </div>
    
<?php
    include 'includes/templates/footer.php';
?>