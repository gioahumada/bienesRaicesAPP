<?php
    include 'includes/templates/headeralt.php';
?>

        <main class="contenedor seccion">
            <h1>Casa en Venta frente al bosque</h1>

            <picture class="borde">
                <source srcset="build/img/anuncio1.webp" type="image/webp">
                <source srcset="build/img/anuncio1.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio">
            </picture>

            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium, repellat corrupti explicabo sequi dolores autem pariatur veritatis inventore minima illo rem recusandae dolore repellendus blanditiis dolorum ab impedit possimus. Doloribus.
            Repellendus error dignissimos rerum debitis ut architecto commodi tempora repellat dicta molestiae nulla voluptatum, impedit aut magni itaque maiores laborum, ea iure natus non tenetur possimus. Magnam blanditiis tenetur saepe!
            Laborum cupiditate nihil rem ut, laudantium dolorum maiores dignissimos eos assumenda ipsam reprehenderit amet nobis facilis consequuntur doloribus praesentium voluptatum modi! Odio, ex nemo deleniti quae adipisci eligendi ea enim!</p>

            <div class="resumen-propiedad">
                <p class="precio">$3,000,000</p>
                <ul class="iconos-caracteristicas">
                    <li>
                        <img src="build/img/icono_wc.svg" alt="icono wc" loading="lazy">
                        <p>3</p>
                    </li>
                    <li>
                        <img src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" loading="lazy">
                        <p>3</p>
                    </li>
                    <li>
                        <img src="build/img/icono_dormitorio.svg" alt="icono habitaciones" loading="lazy">
                        <p>4</p>
                    </li>
                </ul>
            </div>
            
        </main>

<?php
    include 'includes/templates/footer.php';
?>