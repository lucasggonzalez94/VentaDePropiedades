<?php include 'includes/templates/header.php'; ?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta Frente al Bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img src="build/img/destacada.jpg" alt="imagen de la propiedad" loading="lazy">
        </picture>

        <div class="resumen-propiedad">
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

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi est ipsa itaque delectus deleniti quibusdam esse ut accusantium, tempora nemo eum omnis laudantium eveniet consequuntur reiciendis ipsum veritatis quos magni. Accusamus eaque animi repellendus quasi quos, tempora voluptatibus ex sunt impedit vero iste dignissimos. Commodi illo vero quisquam corporis nobis quibusdam perferendis at nam, asperiores error debitis quam dolorem beatae aut optio. Quibusdam nobis quisquam nostrum illo, tenetur vitae vero delectus, quo, ex quis ullam deleniti ipsum molestias alias velit.</p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, fugit perferendis. Delectus recusandae iure quod blanditiis saepe dolorum praesentium, est autem esse veniam odio repudiandae veritatis. Culpa rem eaque nihil soluta recusandae libero alias cum suscipit nisi harum. Consectetur dignissimos error eos consequatur eveniet magni, voluptates recusandae iusto eligendi quia.</p>
        </div>
    </main>

<?php
    include 'includes/templates/footer.php';
?>