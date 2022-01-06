<?php 

  function add_theme_scripts() {
    wp_enqueue_style( 'style', get_template_directory_uri() .'/style.css', array(), null, 'all' );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array(), null, true);
  }

  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
  add_theme_support('title-tag');

  add_theme_support( 'post-thumbnails' );

  function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
  add_filter('upload_mimes', 'cc_mime_types');

  // Remove p tags from category description
  remove_filter('term_description','wpautop');
  function register_my_menus(){
    register_nav_menus(
      array(
        'main-left' => 'Main Left',
        'main-right' => 'Main Right',
        'footer-menu' => 'Footer Menu'
      )
    );
  }
  add_action('init','register_my_menus');
   
  function get_page_intro_by_path($path) {
    $post = get_page_by_path($path);
    $title = apply_filters('the_title', $post->post_title);
    $content = apply_filters('get_the_content', $post->post_content);
    return array($title,$content);
  }
  function get_yt_video_thumbnail($video_url){
    $yt_url = $video_url;
    $yt_params = explode("=", $yt_url);
    $yt_id = explode("&", $yt_params[1]);
    return "https://i.ytimg.com/vi/".$yt_id[0]."/maxresdefault.jpg";
  }
  function get_yt_video_id($video_url){
    $yt_url = $video_url;
    $yt_params = explode("=", $yt_url);
    $yt_id = explode("&", $yt_params[1]);
    return $yt_id[0];
  }
?>
