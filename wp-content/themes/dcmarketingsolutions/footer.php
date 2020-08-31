<footer class="holder">
            <div class="grid-container7 container-footer">
                <div class="item_24">
                    <a href="<?php echo site_url() ?>">
                        <picture>
                        <source srcset="<?php echo get_theme_file_uri('/img/Logo_Footer--large-hi-dpi.jpg 604w')?>" media="(min-width: 1380px)">    
                        <source srcset="<?php echo get_theme_file_uri('/img/Logo_Footer--large.jpg 302w')?>" media="(min-width: 1200px)">
                        <img srcset="<?php echo get_theme_file_uri('/img/Logo_Footer--medium.jpg 218w')?>, <?php echo get_theme_file_uri('/img/Logo_Footer--medium-hi-dpi.jpg 435w')?>" media="(min-width: 640px)" alt="DC Marketing Solutions Logo - Agencia de Marketing Digital" class="logo_footer">
                        </picture>
                    </a>
                </div>
                <div class="item_25">
                <ul class="container-menu-footer">
                        <li><a <?php if (is_page( 'Home' )) {echo 'class="item1 activo"';} else {echo 'class="item1"';} ?> id="menuInicioFooter" href="<?php echo site_url() ?>">INICIO</a></li>
                        <li><a <?php if (is_page( 'Nosotros' )) {echo 'class="item1 activo"';} else {echo 'class="item1"';} ?> href="<?php echo site_url('/nosotros') ?>">NOSOTROS</a></li>
                        <li><a <?php if (is_page( 'Servicios' )) {echo 'class="activo item1"';} else {echo 'class="item1"';} ?> href="<?php echo site_url('/servicios') ?>">SERVICIOS</a></li>
                        <li><a <?php if (get_post_type() == 'post') {echo 'class="item1 activo"';} else {echo 'class="item1"';} ?> href="<?php echo site_url('/blog') ?>">BLOG</a></li>
                        <li><a <?php if (is_page( 'Contacto' )) {echo 'class="item1 activo"';} else {echo 'class="item1"';} ?> href="<?php echo site_url('/contacto') ?>">CONTÁCTANOS</a></li>
                        <li><a <?php if (is_page( 'Política de Privacidad' )) {echo 'class="activo item1"';} else {echo 'class="item1"';} ?> href="<?php echo site_url('/politica-privacidad') ?>">POLÍTICAS DE PRIVACIDAD</a></li>
                    </ul>
                </div>
                <div class="item_26 container-footer-right">
                    <a class="item2" href="https://www.facebook.com/dcmarketingsolutions.net" target="_blank"><img src="<?php echo get_theme_file_uri('img/facebook.svg')?>;" alt="Logo Facebook"></a>
                    <!-- <a class="item2" href="https://www.twitter.com/" target="_blank"><img src="<?php echo get_theme_file_uri('img/twitter.svg')?>;" alt="Logo Twitter"></a>
                    <a class="item2" href="https://www.youtube.com/" target="_blank"><img src="<?php echo get_theme_file_uri('img/youtube.svg')?>;" alt="Logo Youtube"></a> -->
                    <a class="item2" href="https://www.instagram.com/dcmarketingsolutions" target="_blank"><img src="<?php echo get_theme_file_uri('img/instagram.svg')?>;" alt="Logo Instagram"></a>
                </div>
                <div class="item_27 copy">
                    <p style="color: white">Copyright 2019 © DC MARKETING SOLUTIONS</p>
                </div>
            </div>
        </footer>

<?php wp_footer(); ?>
</body>
</html>