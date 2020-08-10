<?php

  get_header();

  while(have_posts()) {
    the_post(); ?>
    
    <div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/img/ocean.jpg') ?>);"> </div>
      <div class="page-banner__content containerX container--narrow">
        <h1 class="page-banner__title"><?php the_title(); ?></h1>
        <div class="page-banner__intro">
          <p style="color: white;">DONT FORGET TO REPLACE ME LATER</p>
        </div>
      </div>  
    </div>

  <div class="containerX container--narrow page-section">
    
    <?php
      $theParent = wp_get_post_parent_id(get_the_ID());
      if ($theParent) { ?>
        <div class="metabox metabox--position-up metabox--with-home-link">
          <p>
            <a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent); ?>">
              <i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($theParent); ?>
            </a> 
            <span class="metabox__main"><?php the_title(); ?></span>
          </p>
        </div>
    <?php } ?>
    
    <?php 
      $testArray = get_pages(array(
        'child_of' => get_the_ID()
      ));

      if ($theParent or $testArray) { ?>
        <div class="page-links">
          <h2 class="page-links__title" style="border-radius: 0; padding: 8px 0 9px 0"><a style="display: block;" href="<?php echo get_permalink($theParent); ?>"><?php echo get_the_title($theParent); ?></a></h2>
          <ul class="min-list">
    <?php
          if ($theParent) {
            $findChildrenOf = $theParent;
          } else {
            $findChildrenOf = get_the_ID();
          }

          wp_list_pages(array(  //para crear el menu sidebar
            'title_li' => NULL, //para anular la palabra pages
            'child_of' => $findChildrenOf,
            'sort_column' => 'menu_order' //para cambiar el orden de las child pages
          )); ?>
          </ul>
        </div>
    <?php } ?>
    

      <div class="generic-content">
        <?php the_content(); ?>
      </div>

    </div>
    
<?php }

  get_footer();

?>