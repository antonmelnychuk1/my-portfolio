<?php

add_filter('show_admin_bar', '__return_false');

add_action('wp_enqueue_scripts', 'site_scripts');
function site_scripts() {
  $version = '0.0.0.0';

  // Styles
  
  wp_enqueue_style('google_fonts', 'https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap', [], $version);
  wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css',  [], $version);
  wp_enqueue_style('swiper', 'https://unpkg.com/swiper@7/swiper-bundle.min.css',  [], $version);

  wp_enqueue_style('reset', get_template_directory_uri() . '/assets/styles/reset.css', [], $version);
  wp_enqueue_style('style', get_template_directory_uri() . '/assets/styles/style.css', [], $version);
  wp_enqueue_style('portfolio', get_template_directory_uri() . '/assets/styles/portfolio.css', [], $version);
  wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/styles/responsive.css', [], $version);
  wp_enqueue_style('print', get_template_directory_uri() . '/assets/styles/print.css', [], $version);
  wp_enqueue_style('cv', get_template_directory_uri() . '/assets/styles/cv.css', [], $version);
  
  // Scripts

  wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', [], $version, true);
  wp_enqueue_script('swiper', 'https://unpkg.com/swiper@7/swiper-bundle.min.js', [], $version, true);
  wp_enqueue_script('lang', get_template_directory_uri() . '/assets/js/lang.js', [], $version, true);
  wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.js', [], $version, true);

}


function sanitize_pagination($content) {
  // Remove h2 tag
  $content = preg_replace('#<h2.*?>(.*?)<\/h2>#si', '', $content);
  return $content;
}
add_action('navigation_markup_template', 'sanitize_pagination');


 