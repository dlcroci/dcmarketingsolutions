<footer class="holder">
            <div class="grid-container7 container-footer">
                <div class="item_24 logo-footer">
                <a href="<?php echo site_url() ?>"><img src="<?php echo get_theme_file_uri('/img/Logo-Final-Marketing-Solutions-Sin-Sombra.png')?>;" alt="DC Marketing Solutions Logo"></a>
                </div>
                <div class="item_25">
                <ul class="container-menu-footer">
                        <li><a <?php if (get_permalink() == 'http://localhost/dcmarketingsolutions/') {echo 'class="activo item1"';} else {echo 'class="item1"';} ?> id="menuInicioFooter" href="<?php echo site_url() ?>">INICIO</a></li>
                        <li><a <?php if (home_url( add_query_arg( array(), $wp->request ) ) == 'http://localhost/dcmarketingsolutions/nosotros') {echo 'class="activo item1"';} else {echo 'class="item1"';} ?> href="<?php echo site_url('/nosotros') ?>">NOSOTROS</a></li>
                        <li><a <?php if (home_url( add_query_arg( array(), $wp->request ) ) == 'http://localhost/dcmarketingsolutions/servicios') {echo 'class="activo item1"';} else {echo 'class="item1"';} ?> href="<?php echo site_url('/servicios') ?>">SERVICIOS</a></li>
                        <!-- <li><a class="item1" href="novedades.html">NOVEDADES</a></li> -->
                        <li><a <?php if (home_url( add_query_arg( array(), $wp->request ) ) == 'http://localhost/dcmarketingsolutions/blog') {echo 'class="activo item1"';} else {echo 'class="item1"';} ?> href="<?php echo site_url('/blog') ?>">BLOG</a></li>
                        <li><a <?php if (home_url( add_query_arg( array(), $wp->request ) ) == 'http://localhost/dcmarketingsolutions/contacto') {echo 'class="activo item1"';} else {echo 'class="item1"';} ?> href="<?php echo site_url('/contacto') ?>">CONTÁCTANOS</a></li>
                        <li><a <?php if (home_url( add_query_arg( array(), $wp->request ) ) == 'http://localhost/dcmarketingsolutions/politica-privacidad') {echo 'class="activo item1"';} else {echo 'class="item1"';} ?> href="<?php echo site_url('/politica-privacidad') ?>">POLÍTICAS DE PRIVACIDAD</a></li>
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