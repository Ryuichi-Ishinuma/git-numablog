<section class="sidebar">
  <div class="sidebar__searchform">
    <?php get_search_form(); ?>
  <div>
  <div class="sidebar__list">
    <div class="sidebar__list-item">
      <div class="profile">
        <div class="profile__thumb"><img src="/dist/images/"></div>
        <p class="profile__name">numa</p>
        <p class="profile__role">Webデザイナー</p>
        <div class="profile__intro">デジタルエージェンシーのWebデザイナーとして働いています。<br>
          主にWebデザインやプログラミング、Web関連の情報を発信しています。<br>
          <br>
          現在はフロントエンドエンジニアとしてスキルアップを目指し、JavaScript/Vue.jsを学習中。<br>
          趣味は映画・写真・旅。<br>
          好きなウイスキーはラフロイグ。</div>
      </div>


      <ul class="sidebar__widget">
          <?php dynamic_sidebar(); ?>
      </ul>
    </div>
  </div>
</section><!--blogmenu-->
