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
        <div class="container grid-container1">
            <header class="item_1">
                <a href="<?php echo site_url() ?>">
                    <picture>
                    <source srcset="<?php echo get_theme_file_uri('/img/Logo_Header--large.jpg 500w')?>, <?php echo get_theme_file_uri('/img/Logo_Header--large-hi-dpi.jpg 1000w')?>" media="(min-width: 1380px)">
                    <source srcset="<?php echo get_theme_file_uri('/img/Logo_Header--medium.jpg 360w')?>, <?php echo get_theme_file_uri('/img/Logo_Header--medium-hi-dpi.jpg 720w')?>" media="(min-width: 990px)">
                    <source srcset="<?php echo get_theme_file_uri('/img/Logo_Header--small.jpg 259w')?>, <?php echo get_theme_file_uri('/img/Logo_Header--small-hi-dpi.jpg 519w')?>" media="(min-width: 640px)">
                    <img srcset="<?php echo get_theme_file_uri('/img/Logo_Header--smaller.jpg 167w')?>, <?php echo get_theme_file_uri('/img/Logo_Header--smaller-hi-dpi.jpg 337w')?>" alt="DC Marketing Solutions Logo - Agencia de Marketing Digital" class="logo_dc">
                    </picture>
                </a>

                <div class="container site-header">
                    <a href="<?php echo esc_url(site_url('/search')); ?>" class="js-search-trigger site-header__search-trigger" style="color: #185ea6;"><i class="fa fa-search" aria-hidden="true"></i></a>
                    <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true" style="color: #185ea6;"></i>
                </div>
            </header>

            <div class="item_2 site-header__menu group" style="color: #185ea6; display: flex;">
            <div class="grid-container-nav">
            <nav class="navigator main-navigation" style="color: #185ea6;">
                <ul class="">
                    <li><a <?php if (get_permalink() == 'http://localhost/dcmarketingsolutions/') {echo 'class="activo item"';} else {echo 'class="item"';} ?> id="menuInicio" href="<?php echo site_url() ?>">INICIO</a></li>
                    <li><a <?php if (home_url( add_query_arg( array(), $wp->request ) ) == 'http://localhost/dcmarketingsolutions/nosotros') {echo 'class="activo item"';} else {echo 'class="item"';} ?> id="menuNosotros" href="<?php echo site_url('/nosotros') ?>">NOSOTROS</a></li>
                    <li><a <?php if (home_url( add_query_arg( array(), $wp->request ) ) == 'http://localhost/dcmarketingsolutions/servicios') {echo 'class="activo item"';} else {echo 'class="item"';} ?> id="menuServicios" href="<?php echo site_url('/servicios') ?>">SERVICIOS</a></li>
                    <li><a <?php if (home_url( add_query_arg( array(), $wp->request ) ) == 'http://localhost/dcmarketingsolutions/blog') {echo 'class="activo item"';} else {echo 'class="item"';} ?> id="menuBlog" href="<?php echo site_url('/blog') ?>">BLOG</a></li>
                    <li><a <?php if (home_url( add_query_arg( array(), $wp->request ) ) == 'http://localhost/dcmarketingsolutions/contacto') {echo 'class="activo item"';} else {echo 'class="item"';} ?> href="<?php echo site_url('/contacto') ?>">CONTÁCTANOS</a></li>
                </ul>
            </nav>
            <div class="lupa site-header__util" style="display: flex; justify-content: center;
                align-items: center; font-size: 30px; float: none;">
                <a href="<?php echo esc_url(site_url('/search')); ?>" class="search-trigger js-search-trigger" style="margin-left: 0px; position: static;"><i class="fa fa-search lupa" aria-hidden="true" style="color: #185ea6; font-size: 30px;"></i></a>
            </div>
            </div>
            </div>
        </div>

<!-- <meta name="description" content="DC Marketing Solutions es una agencia especializada en Marketing Digital, Social Media Marketing, Inbound Marketing, SEO, Ecommerce y Diseño de Páginas Web."> -->
<!-- <meta name="keywords" content="marketing, marketing digital, SEO, inbound marketing, social media marketing, community manager, ecommerce, diseño de páginas web, Panama, Buenos Aires, Barcelona, Argentina, España, Cataluña, agencia digital panama, agencia, digital"> -->


        