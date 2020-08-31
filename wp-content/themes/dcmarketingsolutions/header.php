<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-154738663-2"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-154738663-2');
        </script>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header class="site-header">       
            <div class="container">
                <div class="grid-container1">
                    <div class="item_1">
                        <a href="<?php echo site_url() ?>" style="width: 0">
                            <picture>
                            <source srcset="<?php echo get_theme_file_uri('/img/Logo_Header--large.png 500w')?>, <?php echo get_theme_file_uri('/img/Logo_Header--large-hi-dpi.png 1000w')?>" media="(min-width: 1380px)">
                            <source srcset="<?php echo get_theme_file_uri('/img/Logo_Header--medium.png 360w')?>, <?php echo get_theme_file_uri('/img/Logo_Header--medium-hi-dpi.png 720w')?>" media="(min-width: 990px)">
                            <source srcset="<?php echo get_theme_file_uri('/img/Logo_Header--medium-hi-dpi.png 720w')?>" media="(max-width: 1025px) and(min-width: 1023px)">
                            <source srcset="<?php echo get_theme_file_uri('/img/Logo_Header--small.png 259w')?>, <?php echo get_theme_file_uri('/img/Logo_Header--small-hi-dpi.png 519w')?>" media="(min-width: 640px)">
                            <img srcset="<?php echo get_theme_file_uri('/img/Logo_Header--smaller.png 300w')?>, <?php echo get_theme_file_uri('/img/Logo_Header--smaller-hi-dpi.png 400w')?>" alt="DC Marketing Solutions Logo - Agencia de Marketing Digital" class="logo_dc">
                            </picture>
                        </a>

                        <div class="">
                            <a href="<?php echo esc_url(site_url('/search')); ?>" class="js-search-trigger site-header__search-trigger" ><i class="fa fa-search" aria-hidden="true"></i></a>
                            <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true" ></i>
                        </div>
                    </div>

                    <div class="item_2" style="color: #185ea6;">
                        <div class="site-header__menu group" style="float: none;">
                            <div class="grid-container-nav">
                                <div class="navigator">
                                    <nav class="main-navigation" style="color: #185ea6;">
                                        <ul class="">
                                            <li><a <?php if (get_permalink() == 'http://localhost/dcmarketingsolutions/') {echo 'class="item activo"';} else {echo 'class="item"';} ?> id="menuInicio" href="<?php echo site_url() ?>">INICIO</a></li>
                                            <li><a <?php if (home_url( add_query_arg( array(), $wp->request ) ) == 'http://localhost/dcmarketingsolutions/nosotros') {echo 'class="activo item"';} else {echo 'class="item"';} ?> id="menuNosotros" href="<?php echo site_url('/nosotros') ?>">NOSOTROS</a></li>
                                            <li><a <?php if (home_url( add_query_arg( array(), $wp->request ) ) == 'http://localhost/dcmarketingsolutions/servicios') {echo 'class="activo item"';} else {echo 'class="item"';} ?> id="menuServicios" href="<?php echo site_url('/servicios') ?>">SERVICIOS</a></li>
                                            <li><a <?php if (home_url( add_query_arg( array(), $wp->request ) ) == 'http://localhost/dcmarketingsolutions/blog') {echo 'class="activo item"';} else {echo 'class="item"';} ?> id="menuBlog" href="<?php echo site_url('/blog') ?>">BLOG</a></li>
                                            <li class="ocultar"><a <?php if (home_url( add_query_arg( array(), $wp->request ) ) == 'http://localhost/dcmarketingsolutions/politica-privacidad') {echo 'class="activo item"';} else {echo 'class="item"';} ?> href="<?php echo site_url('/politica-privacidad') ?>">POLÍTICA DE PRIVACIDAD</a></li>
                                            <li><a <?php if (home_url( add_query_arg( array(), $wp->request ) ) == 'http://localhost/dcmarketingsolutions/contacto') {echo 'class="activo item"';} else {echo 'class="item"';} ?> href="<?php echo site_url('/contacto') ?>">CONTÁCTANOS</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="lupa" style="margin: 0; padding: 0;">
                                    <div class="site-header__util" style="margin: 0; padding: 0;">
                                        <a href="<?php echo esc_url(site_url('/search')); ?>" class="search-trigger js-search-trigger" style="margin-left: 0px; position: static;"><i style="font-size: 30px;" class="fa fa-search lupa main-navigation" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>   
        </header>  
        