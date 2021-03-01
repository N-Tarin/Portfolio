<?php

function my_script_init() {
  // CSSの読み込み
  wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css', array(), '1.0.0', 'all');
  wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');

  // JSの読み込み 
  wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');

// GoogleFontの読み込み
function add_google_fonts() {
  // ポップなやつ
  wp_enqueue_style( 'googleFont', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap', false );

  // かっこいいやつ
  wp_enqueue_style( 'googleFont2', 'https://fonts.googleapis.com/css2?family=Oswald&display=swap">', false );

  // 手書き風
  wp_enqueue_style( 'googleFont3', 'https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap">', false );

}
add_action( 'wp_enqueue_scripts', 'add_google_fonts' );



