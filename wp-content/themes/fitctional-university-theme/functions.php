<?php 

require get_theme_file_path('/inc/like-route.php');

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
function my_scripts_method(){
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery.js');
	wp_enqueue_script( 'jquery' );
}

function pageBanner($args = NULL){
   if (!$args['title']) {
      $args['title'] = get_the_title();
   }
   if(!$args['subtitle']) {
      $args['subtitle'] =  get_field('page_banner_subttile');
      }
   ?>

  <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php $pageBannerImage = get_field('page_banner_background_image');
    echo $pageBannerImage['url']; ?>)"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php echo $args['title']; ?></h1>
      <div class="page-banner__intro">
        <p><?php echo the_field('page_banner_subtitle');?></p>
      </div>
    </div>  
  </div>
   <?php
}

function university_files() {

   wp_register_script('main-university-js', get_template_directory_uri() . '/bundled-assets/scripts.2c7b61f1ef0877543933.js');
   wp_enqueue_script( 'main-university-jss', 'http://localhost:3000/bundled.js', NULL, '1.0', true );
   wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
   wp_enqueue_style('university_main_styles', get_stylesheet_uri());
   wp_localize_script('main-university-jss', 'universityData', array(
      'root_url' => get_site_url(),
      'nonce' => wp_create_nonce('wp_rest')
   ));
}


add_action( 'wp_enqueue_scripts', 'university_files');

function university_features() {
   add_theme_support('title-tag');
   add_theme_support('post-thumbnails');
   add_image_size('professorLandscape', 400, 260, true);
   add_image_size('professorPortrait', 480, 650, true);
   add_image_size('professorBanner', 1500, 350, true);


}

add_action( 'after_setup_theme', 'university_features');

function university_adjust_queries($query) {

   if(!is_admin() AND is_post_type_archive('program') AND is_main_query()) {
      $query -> set('orderby', 'title');
      $query -> set('order', 'ASC');
      $query -> set('posts_per_page', -1);
      }

   if (!is_admin() AND is_post_type_archive('event') AND $query -> is_main_query()){
   $today = date('Ymd');
   $query -> set('meta_key', 'event_date');
   $query -> set('orderby', 'meta_value_num');
   $query -> set('order', 'ASC');
   $query -> set('meta_query', array(
      'key' => 'event_date',
      'compare' => '>=',
      'value' => $today,
      'type' => 'numeric'
   ));
   }
}

add_action('pre_get_posts', 'university_adjust_queries');

add_filter('login_headerurl', 'ourHeaderUrl');

function ourHeaderUrl() {
   return esc_url(site_url('/'));
}

add_action( 'login_enqueue_scripts', 'ourLoginCSS'); 

function ourLoginCSS() {
   wp_enqueue_style( 'our-main-styles', get_theme_file_uri('/bundled-assets/undefined'));
}