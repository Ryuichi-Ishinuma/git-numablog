<footer class="footer">
  <div class="footer__contents">
    <div class="container">
        <aside class="footer__aside">
           <ul>
             <?php dynamic_sidebar('フッター１'); ?>
           </ul>
           <ul>
             <?php dynamic_sidebar('フッター2'); ?>
           </ul>
        <ul>
          <?php dynamic_sidebar('フッター3'); ?>
        </ul>
       </aside>
    </div>
  </div>
  <div class="footer__contact">
    <div class="footer__box">
      <h4>CONTACT</h4>
      <p class="contact__txt">ご意見、ご相談、お仕事のご依頼などお気軽にお問い合わせください。</p>
      <a href="/form/">
        <div class="contact__btn">
          <span class="btn__txt">CONTACT FORM</span>
        </div>
      </a>
    </div>
  </div>
  <div class="footer__bar">
    <div class="inner">
       <div class="footer__menu">
        <?php wp_nav_menu( array ( 'theme_location' => 'footer__menu' ) ); ?>
      </div>
      <small>Copyright &copy; 2019-2020&nbsp;<?php bloginfo('name'); ?>&nbsp;All Rights Reserved.</small>
    </div>
  </div>
</footer>
<!-- スクリプトの読み込み -->
<script src="<?php echo get_template_directory_uri(); ?>/dist/js/bundle.js"></script>
<?php wp_footer(); ?>
</body>
</html>
