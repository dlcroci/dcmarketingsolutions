<?php
/*
Template Name: Página Nosotros
*/

get_header();


?>
<div class="page-banner" style="padding: 80px 0 25px 0;">
    <div class="page-banner__bg-image" style="opacity: 1; background-image: url(<?php echo get_theme_file_uri('/img/poster.jpg') ?>);"> </div>
    <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"></h1>
        <div class="page-banner__intro">
          <p style="color: white;"></p>
        </div>
    </div>  
</div>

<main id="id_main" style="opacity: 1;">         
  <section class="containerY">
    <div class="hero-slider">
      <div data-glide-el="track" class="glide__track">
        <div class="glide__slides">
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/img/slide1.jpg'); ?>);">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Profesionalismo</h2>
                <p class="t-center" style="color: white"> Más de 20 años de experiencia nos avalan.</p>
                <p class="t-center no-margin"><a href=""<?php echo site_url('/servicios') ?>"" class="btn btn--blue">Conoce más</a></p>
              </div>
            </div>
          </div>
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/img/slide2.jpg'); ?>);">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Pasión</h2>
                <p class="t-center" style="color: white">Queremos ayudarte a crecer.</p>
                <p class="t-center no-margin"><a href=""<?php echo site_url('/blog') ?>"" class="btn btn--blue">Conoce más</a></p>
              </div>
            </div>
          </div>
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/img/slide3.jpg'); ?>);">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Dedicación</h2>
                <p class="t-center" style="color: white">Nuestro objetivo es tu éxito.</p>
                <p class="t-center no-margin"><a href=""<?php echo site_url('/servicios') ?>"" class="btn btn--blue">Conoce más</a></p>
              </div>
            </div>
          </div>
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/img/slide4.jpg'); ?>);">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Análisis</h2>
                <p class="t-center" style="color: white">Nuestro consejos estan basados <br>en un riguroso análisis.</p>
                <p class="t-center no-margin"><a href=""<?php echo site_url('/blog') ?>"" class="btn btn--blue">Conoce más</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="slider__bullets glide__bullets" data-glide-el="controls[nav]">
        </div>
      </div>
    </div>
    <div class="section-container">
      <div class="container1" id="id_container">    
        <div id="id_nosotros"> 
          <h2 id="id_6">Quienes Somos</h2>
          <div class="grid-container6 conocenos" id="nosotros">
            <div class="item_22 container-photo-grupo">
              <div class="photo-grupo">
              </div>
            </div>
            <div class="item_23 container-texto-conocenos">
              <a style="text-decoration: none" href=" ">
                <h3 class="meetUs">Conócenos</h3>
              </a>  
              <div style="text-align:left;">
                <h1 style="display:inline;" class="clase_p">Contamos con profesionales que acreditan <strong>más de 20 años de experiencia en el área de Marketing</strong>.</h1> Nos especializamos en:
              </div>
              <ul class="font-bold-grey">
                <li>Social Media Marketing</li>
                <li>Diseño de páginas web</li>
                <li>Inbound Marketing</li>
                <li>Ecommerce</li>
                <li>Planes de Marketing 4.0</li>
              </ul>
              <p style="text-align: justify;">Ofrecemos asesoramiento profesional en el desarrollo y en la implementación de Proyectos y Negocios, desde la gestación de la idea, la evaluación de riesgos hasta su implementación y puesta en marcha. Brindamos management y la
              gestión necesaria para mejorar, posibilitando una administración eficiente de los recursos. Detectamos oportunidades de negocios, basadas en análisis de información estadística y estudios especiales. Participamos de las decisiones
              de negocios que toman nuestros clientes, y acompañamos su crecimiento.</p>
              <p style="text-align: justify;">
              Te ofrecemos ayudarte y acompañarte para que puedas aplicar todo estas herramientas a tu negocio: <Strong style="color: DarkBlue;">Desarrollo de Páginas Web, <a href="https://dcmarketingsolutions.net/2020/08/02/seo-search-engine-optimization/">SEO</a>, Inbound Marketing, Social Media Marketing y Ecommerce</Strong>. Solo llámanos o escríbenos para concretar una cita y te contaremos las características de nuestras herramientas de <strong style="color: DarkBlue;">Planeación Estratégica</strong> y de <strong style="color: DarkBlue;">Marketing Digital</strong>.
              <br><br id="id_6">Llámanos / Escríbenos al: +54 911 2831 0850 (Buenos Aires), +507 6085 5475 (Panamá), +34 640 87 8511 (Barcelona).
              </p>
              <br class="altura">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

   
<?php 

get_footer();

?>
