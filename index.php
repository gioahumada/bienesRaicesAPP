<?php
    require 'includes/funciones.php';

    incluirTemplate('header');
?>

    <main class="contenedor seccion">
            <h1>Mas sobre nosotros</h1>

            <div class="iconos-nosotros">
                <div class="icono">
                    <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                    <h3>Seguridad</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit maxime doloremque nisi in, quis quos corporis laudantium aspernatur, placeat officiis voluptatum commodi aut numquam delectus expedita perferendis perspiciatis laborum facilis!</p>
                </div>
                <div class="icono">
                    <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy">
                    <h3>Precio</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit maxime doloremque nisi in, quis quos corporis laudantium aspernatur, placeat officiis voluptatum commodi aut numquam delectus expedita perferendis perspiciatis laborum facilis!</p>
                </div>
                <div class="icono">
                    <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy">
                    <h3>Tiempo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit maxime doloremque nisi in, quis quos corporis laudantium aspernatur, placeat officiis voluptatum commodi aut numquam delectus expedita perferendis perspiciatis laborum facilis!</p>
                </div>
            </div>
        </main>

        <section class="seccion contenedor">
            <h2>Casas y Departamentos en venta</h2>

            <div class="contenedor-anuncios">
                <div class="anuncio">
                    <picture>
                        <source srcset="build/img/anuncio1.webp" type="image/webp">
                        <source srcset="build/img/anuncio1.jpg" type="image/jpg">
                        <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio">
                    </picture>
                    <div class="contenido-anuncio">
                        <h3>Casa en el lago</h3>
                        <p>Casa en el lago, con una muy buena vista, con acabados de lujo.</p>
                        <p class="precio">$3.000.000 USD</p>

                        <ul class="iconos-caracteristicas">
                            <li>
                                <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono_wc">
                                <p>3</p>
                            </li>

                            <li>
                                <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono icono_estacionamiento">
                                <p>3</p>
                            </li>

                            <li>
                                <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono_dormitorio">
                                <p>4</p>
                            </li>

                        </ul>
                        <a href="anuncio.html" class="boton-amarillo-block">Ver Propiedad</a>
                    </div>
                </div> <!-- Anuncio -->

                <div class="anuncio">
                    <picture>
                        <source srcset="build/img/anuncio3.webp" type="image/webp">
                        <source srcset="build/img/anuncio3.jpg" type="image/jpg">
                        <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio">
                    </picture>
                    <div class="contenido-anuncio">
                        <h3>Casa con piscina</h3>
                        <p>Casa en el lago, con una muy buena vista, con acabados de lujo.</p>
                        <p class="precio">$3.000.000 USD</p>

                        <ul class="iconos-caracteristicas">
                            <li>
                                <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono_wc">
                                <p>3</p>
                            </li>

                            <li>
                                <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono icono_estacionamiento">
                                <p>3</p>
                            </li>

                            <li>
                                <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono_dormitorio">
                                <p>4</p>
                            </li>

                        </ul>
                        <a href="anuncio.html" class="boton-amarillo-block">Ver Propiedad</a>
                    </div>
                </div> <!-- Anuncio -->

                <div class="anuncio">
                    <picture>
                        <source srcset="build/img/anuncio2.webp" type="image/webp">
                        <source srcset="build/img/anuncio2.jpg" type="image/jpg">
                        <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio">
                    </picture>
                    <div class="contenido-anuncio">
                        <h3>Casa de lujo</h3>
                        <p>Casa en el lago, con una muy buena vista, con acabados de lujo.</p>
                        <p class="precio">$3.000.000 USD</p>

                        <ul class="iconos-caracteristicas">
                            <li>
                                <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono_wc">
                                <p>3</p>
                            </li>

                            <li>
                                <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono icono_estacionamiento">
                                <p>3</p>
                            </li>

                            <li>
                                <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono_dormitorio">
                                <p>4</p>
                            </li>

                        </ul>
                        <a href="anuncio.html" class="boton-amarillo-block">Ver Propiedad</a>
                    </div>
                </div> <!-- Anuncio -->

            </div> 

            <div class="alinear-derecha">
                <a href="anuncios.html" class="boton boton-verde">Ver todas</a>
            </div>
        </section>

        <section class="imagen-contacto">
            <h2>Encuentra la casa de tus sueños</h2>
            <p>Llena el formulario de contacto y un asesor se pondra en contacto contigo en la brevedad.</p>
            <a href="contacto.html" class="boton-amarillo">Contactanos</a>
        </section>

        <div class="contendor seccion seccion-inferior">
            <section class="blog">
                <h3>Nuestro blog</h3>

                <article class="entrada-blog">
                    <div class="imagen">
                        <picture>
                            <source srcset="build/img/blog1.webp" type="image/webp">
                            <source srcset="build/img/blog1.jpg" type="image/jpg">
                            <img loading="lazy" src="build/img/blog1.jpg" alt="Texto entrada Blog">
                        </picture>
                    </div>

                    <div class="texto-entrada">
                        <a href="entrada.html">
                            <h4>Terraza en el techo de tu casa</h4>
                            <p>Escrito el: <span>20/10/2021</span> por <span>Admin</span></p>

                            <p>
                                Consejos para construir una terraza al en el techo de tu casa con los mejores materiales ahorrando materiales
                            </p>
                        </a>
                    </div>
                </article> <!-- fin article -->

                <article class="entrada-blog">
                    <div class="imagen">
                        <picture>
                            <source srcset="build/img/blog2.webp" type="image/webp">
                            <source srcset="build/img/blog2.jpg" type="image/jpg">
                            <img loading="lazy" src="build/img/blog2.jpg" alt="Texto entrada Blog">
                        </picture>
                    </div>

                    <div class="texto-entrada">
                        <a href="entrada.html">
                            <h4>Guia para la decoracion de tu hogar</h4>
                            <p>Escrito el: <span>20/10/2021</span> por <span>Admin</span></p>

                            <p>
                                Maximiza tu espacio en tu hogar con esta guia, aprende a combinar muebles y
                                colores para darle vida a tu espacio
                            </p>
                        </a>
                    </div>
                </article> <!-- Fin article -->

            </section>

            <section class="testimoniales">
                <h3>Testimonial</h3>

                <div class="testimonial">
                    <blockquote>
                        El personal se comporto de una excelente forma, muy buena atencion a casa.
                    </blockquote>
                    <p>- Giovanni del Boom</p>
                </div>
            </section>
        </div>

<?php
    include 'includes/templates/footer.php';
?>