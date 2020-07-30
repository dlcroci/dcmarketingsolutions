<?php

get_header();
?>

<main id="holder id_main">
        <section class="container">
            <div class="section-container">
                <div class="container1" id="id_container">
                    <div class="main-formulario">
                        <h2 style="color: #185ea6; margin: auto; line-height: 60px; font-size: 40px; text-align: center;">Contáctanos</h2>
                        <br>
                        <div class="columna-left">
                            <h2 style="color: #e86000;">¿Necesitas contactarnos?</h2>
                            <br>
                            <p style="text-align: left; font-size: 18px;">Si deseas saber más sobre nuestros servicios y de como podemos ayudar a tu negocio, escríbenos a info@dcmarketingsolutions.net o llámanos al +54 911 2831 0850. También puedes completar el siguiente formulario. Independientemente del método que elijas para contactarnos, nosotros te responderemos de inmediato. ¡Gracias!</p>
                        </div>
                        <div class="columna-right">
                            <h2 style="color: #e86000;">Formulario de Contacto</h2>
                            <!-- <br> -->
                            <!-- formulario de contacto -->

                                <form action="/envia.php" method="post" class="form-consulta"> 
                                    <label>Nombre y apellido: <span>*</span>
                                        <input type="text" name="nombre" placeholder="Nombre y apellido" class="campo-form" required>
                                    </label>
                                    
                                    <label>Email: <span>*</span>
                                        <input type="email" name="email" placeholder="Email" class="campo-form" required>
                                    </label>
                                    
                                    <label>Consulta:
                                        <textarea name="consulta" class="campo-form"></textarea>
                                    </label>

                                    <input type="submit" value="Enviar" class="btn-form">
                                </form>

                            <!-- formulario -->

                        </div>
                    </div>
                </div>   
            </div>
        </section>
    </main>
    
<?php get_footer();

?>