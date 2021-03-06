<?php
/*
Template Name: Página de Contacto
*/

get_header();


?>
<div class="page-banner">
    <div class="page-banner__bg-image" style="opacity: 1; background-image: url(<?php echo get_theme_file_uri('/img/poster.jpg') ?>);"> </div>
    <div class="page-banner__content container container--narrow">
        <h4 class="page-banner__title"></h4>
        <div class="page-banner__intro">
          <p style="color: white;"></p>
        </div>
    </div>  
</div>

<main id="holder id_main">
        <section class="containerY">
            <div class="section-container">
                <div class="container1" id="id_container">
                    <div class="main-formulario">
                        <h1 style="color: #185ea6; margin: auto; line-height: 60px; font-size: 40px; text-align: center;">Contáctanos</h1>
                        <br>
                        <div class="columna-left">
                            <h2 class="h2h3" style="color: #e86000;">¿Necesitas contactarnos?</h2>
                            <br>
                            <p style="text-align: left; font-size: 18px;">Si deseas saber más sobre nuestros servicios y de como podemos ayudar a tu negocio, escríbenos a info@dcmarketingsolutions.net o llámanos / escríbenos al: +54 911 2831 0850 (Buenos Aires), +507 6085 5475 (Panamá), +34 640 87 8511 (Barcelona). También puedes completar el siguiente formulario. Independientemente del método que elijas para contactarnos, nosotros te responderemos de inmediato. ¡Gracias!</p>
                        </div>
                        <div class="columna-right">
                            <h2 class="h2h3" style="color: #e86000;">Formulario de Contacto</h2>
                            <!-- <br> -->
                            <!-- formulario de contacto -->

                                <form action="<?php echo admin_url( 'admin-post.php' ) ?>" method="post" class="form-consulta"> 
                                    <label>Nombre y apellido: <span>*</span>
                                        <input type="text" name="nombre" id="name" placeholder="Nombre y apellido" class="campo-form" required>
                                    </label>
                                    
                                    <label>Email: <span>*</span>
                                        <input type="email" name="email" id="email" placeholder="Email" class="campo-form" required>
                                    </label>
                                    
                                    <label>Mensaje: <span>*</span>
                                        <textarea name="mensaje" id="mensaje" placeholder="Mensaje" class="campo-form" required></textarea>
                                    </label>
                                    <input type="hidden" name="action" value="process_form">
                                    <input type="submit" name="submit" value="Enviar" class="btn-form">
                                    <br>
                                    <?php
                                        
                                        if ( isset($_GET['sent']) ){
                                            if ( $_GET['sent'] == '1'){
                                                echo "<p style='color: blue;'>✔ Formulario enviado correctamente</p><br>";
                                            }
                                            else {
                                                echo "<p style='color: red;'>Hubo un error al enviar</p><br>";
                                            }
                                        }
                                    ?>
                                </form>

                            <!-- formulario -->

                        </div>
                    </div>
                </div>   
            </div>
        </section>
    </main>

   
<?php 

get_footer();

?>
