<?php get_header(); ?>

<?php
/*
Template Name: お問い合わせ
*/
?>

<section class="que">
  <div class="wrapper">
  <?php
    wp_nav_menu(
    //.header-listを置き換えて、PC用メニューを動的に表示する
    array(
    'depth' => 1,
    'theme_location' => 'global', //グローバルメニューをここに表示すると指定
    'container' => 'false',
    'menu_class' => 'header-list',
    )
    );
    ?>

  </div><!-- /.wrapper -->
</section><!-- /.que -->


<?php get_footer(); ?>
