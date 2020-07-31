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

                                <form action="<?php enviar(); ?>" method="post" class="form-consulta"> 
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
                                    <br>
                                    <spam Class="ocultar" style="color: blue;"> &nbsp &nbsp &nbsp Mensaje enviado con éxito</spam>
                                </form>

                            <!-- formulario -->

                        </div>
                    </div>
                </div>   
            </div>
        </section>
    </main>
<?php
    function enviar() {
    $remitente = $_POST['email'];
    $destinatario = 'dlcroci@hotmail.com'; // en esta línea va el mail del destinatario.
    $asunto = 'Consulta para DC Marketing Solutions'; // acá se puede modificar el asunto del mail
    if (!$_POST){
    
    }else{
        
        $cuerpo = "Nombre y apellido: " . $_POST["nombre"] . "\r\n"; 
        $cuerpo .= "Email: " . $_POST["email"] . "\r\n";
        $cuerpo .= "Consulta: " . $_POST["consulta"] . "\r\n";
        //las líneas de arriba definen el contenido del mail. Las palabras que están dentro de $_POST[""] deben coincidir con el "name" de cada campo. 
        // Si se agrega un campo al formulario, hay que agregarlo acá.

        $headers  = "MIME-Version: 1.0\n";
        $headers .= "Content-type: text/plain; charset=utf-8\n";
        $headers .= "X-Priority: 3\n";
        $headers .= "X-MSMail-Priority: Normal\n";
        $headers .= "X-Mailer: php\n";
        $headers .= "From: \"".$_POST['nombre']." ".$_POST['apellido']."\" <".$remitente.">\n";

        mail($destinatario, $asunto, $cuerpo, $headers);
        
        $mensaje = "si";
    }
    };
?>
<script>
    var mensaje = '<php? echo $mensaje; ?>'
    if (mensaje = "si") { document.querySelector("mostrar").setAttribute('class','mostrar')};
</script>

<?php get_footer();

?>