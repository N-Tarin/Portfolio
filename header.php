<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <title>Karin's portfolio</title>
</head>
<body>
  <div class="body">

    <header class="header">
  
      <div class="wrapper header__wrapper">
        <ul class="header__items">
          <li class="header__item">
            <a href="#about">
              About
              <span>私について</span>
            </a>
          </li><!-- /.header__item -->
          
          <li class="header__item">
            <a href="#skills">
              Skill
              <span>能力</span>
            </a>
          </li><!-- /.header__item -->
  
          <li class="header__item">
            <a href="#portfolio">
              Portfolio
              <span>作品</span>
            </a>
          </li><!-- /.header__item -->
  
          <li class="header__item">
<<<<<<< HEAD
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
=======
            <a href="#contact">
              Contact
              <span>お問い合わせ</span>
            </a>
>>>>>>> 17ebaa51ed93232ba6701698bd68ea6caca7a91e
          </li><!-- /.header__item -->
  
        </ul><!-- /.header__items -->
      </div><!-- /.header__wrapper -->
    </header><!-- /.header -->
