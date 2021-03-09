  <footer class="footer">
    <div class="wrapper footer__wrapper">
      <div class="footer__buttonWrapper">
        <div class="footer__button">
          <?php
            wp_nav_menu(
              array(
              'depth' => 1,
              'theme_location' => 'global',
              'container' => 'false',
              'menu_class' => 'header-list',
              )
            );
          ?>
        </div><!-- /.footer__button -->
      </div><!-- /.footer__buttonWrapper -->
    </div><!-- /.wrapper -->
  </footer><!-- /.footer -->  

  <div class="footBar">
  </div><!-- /.footBar -->
</div><!-- /.body -->

  <?php wp_footer(); ?>
  <script src="https://kit.fontawesome.com/59f9f0717a.js" crossorigin="anonymous"></script>
</body>
</html>