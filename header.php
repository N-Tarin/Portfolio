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

    <div class="headBar">
    </div><!-- /.headBar -->
    <header class="header">
      <div class="header__logoWrapper">
        <img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="">
      </div><!-- /.header__logoWrapper -->

      <nav class="nav">
        <ul class="nav__items">

          <li class="nav__item">
            <a href="#about">
              私について
            </a>
          </li><!-- /.nav__item -->

          <li class="nav__item">
            <a href="#skill">
              スキル
            </a>
          </li><!-- /.nav__item -->

          <li class="nav__item">
            <a href="#portfolio">
              作品
            </a>
          </li><!-- /.nav__item -->

          <li class="nav__item">
            <a href="#contact">
              お問い合わせ
            </a>
          </li><!-- /.nav__item -->
        </ul><!-- /.nav__items -->

        <ul class="nav__sns__items">
          <li class="nav__sns__item">
            <a href="https://twitter.com/nakanuxxx">
              <i class="fab fa-twitter"></i>          
            </a>
          </li><!-- /.nav__item -->

          <li class="nav__sns__item">
            <a href="https://note.com/nakanuxxx">
              <i class="-note far fa-file"></i>
            </a>
          </li><!-- /.nav__item -->

          <li class="nav__sns__item">
            <a href="https://github.com/N-Tarin">
              <i class="fab fa-github"></i>          
            </a>
          </li><!-- /.nav__item -->


        </ul><!-- /.nav__sns__items -->
      </nav><!-- /.nav -->
    </header><!-- /.header -->
