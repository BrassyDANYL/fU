<?php

function university_files() {
   wp_enqueue_script ('main-university-js', get_theme_file_uri('/js/index.js'), NULL, '1.0', true) ;
   wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
   wp_enqueue_style('university_main_styles', get_stylesheet_uri())
}

add_action( 'wp_enqueue_scripts', 'university_files');