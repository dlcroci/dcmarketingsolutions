<?php
  
  get_header();

  while(have_posts()) {
    the_post(); ?>
    <div class="page-banner" style="padding: 120px 0 40px 0">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/img/slide1.jpg') ?>);"> </div>
      <div class="page-banner__content containerX container--narrow">
        <h1 class="page-banner__title"><?php the_title(); ?></h1>
        <div class="page-banner__intro">
          <p style="color: white;">Manténgase al día con nuestras últimas noticias</p>
        </div>
      </div>  
    </div>

    <div class="containerX container--narrow page-section">
      <div class="post-item">
        <div class="metabox metabox--position-up metabox--with-home-link">
            <p>
              <a class="metabox__blog-home-link" href="<?php echo site_url('/blog'); ?>">
                <i class="fa fa-home" aria-hidden="true"></i> Blog Home</a> 
              <span class="metabox__main">Posted by <?php the_author_posts_link(); ?> on <?php the_time('n.j.y') ?> in <?php echo get_the_category_list(', '); ?></span>
            </p>
        </div>
      
        <div class= "generic-content">
          <div class="row grup">
            <div style="display: flex; align-items: center; justify-content: center;">
                <?php the_post_thumbnail('photoLandscape'); ?>
            </div>    
            <div>
            <?php the_content(); ?>
            </div>
          </div> 
        </div>
      </div>
    </div>
    
  <?php }

  get_footer();

?>

