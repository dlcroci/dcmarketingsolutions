<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="DC Marketing Solutions es una agencia especializada en Marketing Digital, Social Media Marketing, Inbound Marketing, SEO, Ecommerce y Diseño de Páginas Web.">
    <meta name="keywords" content="marketing, marketing digital, SEO, social media marketing, community manager, ecommerce, diseño de páginas web">
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
        <div class="holder grid-container1">
            <header class="item_1">
                <a href="<?php echo site_url() ?>">
                    <picture>
                        <source srcset="<?php echo get_theme_file_uri('/img/Logo_Header--large.jpf 500w');?>, <?php echo get_theme_file_uri('/img/Logo_Header--large-hi-dpi.jpf 1000w');?>">
                        <source srcset="<?php echo get_theme_file_uri('/img/Logo_Header--medium.jpf 360w');?>, <?php echo get_theme_file_uri('/img/Logo_Header--medium-hi-dpi.jpf 720w');?>">
                        <source srcset="assets/images/hero--small.jpg 259w, assets/images/hero--small-hi-dpi.jpg 1980w" media="(min-width: 519px">
                        <img srcset="assets/images/hero--smaller.jpg 167w, assets/image-hero--smaller-hi-dpi.jpg 337w" alt="DC Marketing Solutions Logo - Agencia de Marketing Digital" class="logo_dc">
                    </picture>

                <!-- <img src="<?php echo get_theme_file_uri('/img/Logo-Final-Marketing-Solutions-Sin-Sombra.jpg') ?>"
                class="logo_dc" alt="DC Marketing Solutions Logo - Agencia de Marketing Digital"></ -->
                
                a>
            </header>
            <nav class="item_2">
                <ul>
                    <li><a <?php if (get_permalink() == 'http://localhost/dcmarketingsolutions/') {echo 'class="activo item"';} else {echo 'class="item"';} ?> id="menuInicio" href="<?php echo site_url() ?>">INICIO</a></li>
                    <li><a <?php if (home_url( add_query_arg( array(), $wp->request ) ) == 'http://localhost/dcmarketingsolutions/nosotros') {echo 'class="activo item"';} else {echo 'class="item"';} ?> id="menuNosotros" href="<?php echo site_url('/nosotros') ?>">NOSOTROS</a></li>
                    <li><a <?php if (home_url( add_query_arg( array(), $wp->request ) ) == 'http://localhost/dcmarketingsolutions/servicios') {echo 'class="activo item"';} else {echo 'class="item"';} ?> id="menuServicios" href="<?php echo site_url('/servicios') ?>">SERVICIOS</a></li>
                    <li><a <?php if (home_url( add_query_arg( array(), $wp->request ) ) == 'http://localhost/dcmarketingsolutions/blog') {echo 'class="activo item"';} else {echo 'class="item"';} ?> id="menuBlog" href="<?php echo site_url('/blog') ?>">BLOG</a></li>
                    <li><a <?php if (home_url( add_query_arg( array(), $wp->request ) ) == 'http://localhost/dcmarketingsolutions/contacto') {echo 'class="activo item"';} else {echo 'class="item"';} ?> href="<?php echo site_url('/contacto') ?>">CONTÁCTANOS</a></li>
                    <li><a class="item ocultar" href="<?php echo site_url('/politica-privacidad') ?>">POLÍTICA DE PRIVACIDAD</a></li>
                </ul>
            </nav>
        </div>


        