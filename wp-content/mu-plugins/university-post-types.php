<?php

function university_post_types(){
  //Event Post Type
register_post_type('event',array(
  'show_in_rest' => true,
    'supports' => array('title','editor','excerpt'),
   'rewrite' => array('slug' => 'events'),
   'has_archive' => true,
   'public' => true,
   'labels' => array(
     'name' => 'Events',
     'add_new_item' => 'Add New Event',
     'edit_item' =>'Edit Event',
     'all_items' => 'All Events',
     'singular_name' => 'Event'
   ),
   'menu_icon' => 'dashicons-calendar'
    
));

 //Programs Post Type
 register_post_type('program',array(
  'show_in_rest' => true,
    'supports' => array('title','editor'),
   'rewrite' => array('slug' => 'programs'),
   'has_archive' => true,
   'public' => true,
   'labels' => array(
     'name' => 'Programs',
     'add_new_item' => 'Add New Programs',
     'edit_item' =>'Edit Program',
     'all_items' => 'All Programs',
     'singular_name' => 'Program'
   ),
   'menu_icon' => 'dashicons-awards'
    
));

//Professors Post Type
register_post_type('professor',array(
    'supports' => array('title','editor','thumbnail'),
   'public' => true,
   'labels' => array(
     'name' => 'Professors',
     'add_new_item' => 'Add New Professor',
     'edit_item' =>'Edit professor',
     'all_items' => 'All professors',
     'singular_name' => 'Professor'
   ),
   'menu_icon' => 'dashicons-welcome-learn-more'
    
));

//Campus Post Type
register_post_type('Campus',array(
  'show_in_rest' => true,
  'supports' => array('title','editor','excerpt'),
 'rewrite' => array('slug' => 'campuses'),
 'has_archive' => true,
 'public' => true,
 'labels' => array(
   'name' => 'Campuses',
   'add_new_item' => 'Add New Campus',
   'edit_item' =>'Edit Campus',
   'all_items' => 'All Campuss',
   'singular_name' => 'Campus'
 ),
 'menu_icon' => 'dashicons-welcome-learn-more'
  
));
}
add_action('init','university_post_types');

?>