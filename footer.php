<footer>
  <div class="footer-category">
    <div class="container">
        <aside>
           <ul><?php dynamic_sidebar('フッター１'); ?></ul>
           <ul><?php dynamic_sidebar('フッター2'); ?></ul>
        <ul><?php dynamic_sidebar('フッター3'); ?></ul>
       </aside>
    </div>
  </div>
    <div class="footer_bar">
    <div class="container">
         <div id="footer-menu">
          <?php wp_nav_menu( array ( 'theme_location' => 'footer-menu' ) ); ?>
        </div>
           <small>Copyright &copy; <?php bloginfo('name'); ?>. All Rights Reserved.</small>
      </div>
    </div>
</footer>
<!-- スクリプトの読み込み -->
<script src="dist/js/bundle.js"></script>
<?php wp_footer(); ?>
</body>
</html>
