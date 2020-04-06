<!-- 404.php -->
<?php get_header(); ?>

<div class="not-found">
  <div class="not-found__box">
    <div class="not-found__ttl">
      <h2>404 Not Found</h2>
      <p>ページが見つかりませんでした</p>
    </div>
    <div class="not-found__txt">
      <p>お探しのページは、移動または削除された可能性があります。</p>
      <p>下記、ボタンからTOPページへ戻ってください。</p>
    </div>

    <a href="<?php echo home_url(); ?>">
      <div class="not-found__btn">
        <span class="btn__txt">TOP Page</span>
      </div>
    </a>
  </div>
</div>

<?php get_footer(); ?>
