<?php

function dcms_post_types() {
    // register_post_type('contacto', array(
    //   'show_in_rest' => true,
    //   'supports' => array('title', 'editor', 'excerpt'),
    //   'rewrite' => array('slug' => 'contacto'),
    //   'has_archive' => true,
    //   'public' => true,
    //   'show_in_admin_bar' => false,
    //   'show_in_menu' => false,
    //   'labels' => array(
    //     'name' => 'Contacto',
    //     'add_new_item' => 'Add New Contacto',
    //     'edit_item' => 'Edit Contacto',
    //     'all_items' => 'All Contacts',
    //     'singular_name' => 'Contacto'
    //   ),
    //   'menu_icon' => 'dashicons-calendar'
    // ));
    
    register_post_type('nosotros', array(
      'show_in_rest' => true,
      'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
      'rewrite' => array('slug' => 'nosotros'),
      'has_archive' => true,
      'public' => true,
      'show_in_admin_bar' => false,
      'show_in_menu' => false,
      'labels' => array(
        'name' => 'Nosotros',
        'add_new_item' => 'Add New Nosotros',
        'edit_item' => 'Edit Nosotros',
        'all_items' => 'All Nosotros',
        'singular_name' => 'Nosotros'
      ),
      'menu_icon' => 'dashicons-calendar'
    ));
    
    register_post_type('servicios', array(
      'show_in_rest' => true,
      'supports' => array('title', 'editor', 'excerpt'),
      'rewrite' => array('slug' => 'servicios'),
      'has_archive' => true,
      'public' => true,
      'show_in_admin_bar' => false,
      'show_in_menu' => false,
      'labels' => array(
        'name' => 'Servicios',
        'add_new_item' => 'Add New Servicios',
        'edit_item' => 'Edit Servicios',
        'all_items' => 'All Servicios',
        'singular_name' => 'Servicios'
      ),
      'menu_icon' => 'dashicons-calendar'
    ));
    
    register_post_type('politica-privacidad', array(
      'show_in_rest' => true,
      'supports' => array('title', 'editor', 'excerpt'),
      'rewrite' => array('slug' => 'politica-privacidad'),
      'has_archive' => true,
      'public' => true,
      'show_in_admin_bar' => false,
      'show_in_menu' => false,
      'labels' => array(
        'name' => 'Politica de Privacidad',
        'add_new_item' => 'Add New Politica de Privacidad',
        'edit_item' => 'Edit Politica de Privacidad',
        'all_items' => 'All Politica de Privacidad',
        'singular_name' => 'Politica de Privacidad'
      ),
      'menu_icon' => 'dashicons-calendar'
    ));  
  }
  
  add_action('init', 'dcms_post_types');