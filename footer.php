<footer class="footer">
  <div class="footer__contact">
    <div class="footer__box">
      <h4>Contact</h4>
      <p class="contact__txt">ご意見、ご相談、お仕事のご依頼などお気軽にお問い合わせください。</p>
      <a href="<?php echo home_url(); ?>/form/">
        <div class="contact__btn">
          <span class="btn__txt">Contact Form</span>
        </div>
      </a>
    </div>
  </div>
  <div class="footer__sns">
    <ul class="sns__list">
      <li>
        <a href="https://twitter.com/ryu_webdesi31" target="_blank">
          <i class="fab fa-twitter"></i>
        </a>
      </li>
      <li>
        <a href="https://www.facebook.com/ryuichi.ishinuma" target="_blank">
          <i class="fab fa-facebook-f"></i>
        </a>
      </li>
      <li>
        <a href="https://github.com/Ryuichi-Ishinuma" target="_blank">
          <i class="fab fa-github"></i>
        </a>
      </li>
    </ul>
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
<!-- webpack bundle.js -->
<script src="<?php echo get_template_directory_uri(); ?>/dist/js/bundle.js"></script>
<!-- JQuery CDN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<?php wp_footer(); ?>
</body>
</html>
