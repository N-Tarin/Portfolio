<?php

function my_script_init() {
  // CSSの読み込み
  wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css', array(), '1.0.0', 'all');

  wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');

  wp_enqueue_style('animation', get_template_directory_uri() . '/css/animation.css', array(), '1.0.0', 'all');

  //JSの読み込み 
  wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '1.0.0', true);

  wp_enqueue_script('animation', get_template_directory_uri() . '/js/animation.js', array( 'jquery' ), '1.0.0', true);
  
  wp_enqueue_script('snowfall', get_template_directory_uri() . '/js/snowfall.jquery.min.js', array( 'jquery' ), '1.0.0', true);
  
}
add_action('wp_enqueue_scripts', 'my_script_init');

// GoogleFontの読み込み
function add_google_fonts() {
  // ヘッダーなどの
  wp_enqueue_style( 'googleFont1', 'https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap', false );

  // 手書き風
  wp_enqueue_style( 'googleFont2', 'https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap">', false );

  // ふち付き
  wp_enqueue_style( 'googleFont3', 'https://fonts.googleapis.com/css2?family=Bungee+Shade&display=swap">', false );

}
add_action( 'wp_enqueue_scripts', 'add_google_fonts' );


// ヘッダー
function my_menu_init()
{
register_nav_menus(
array(
'global' => 'ヘッダーメニュー',
'drawer' => 'ドロワーメニュー',
)
);
}
add_action('init', 'my_menu_init');




