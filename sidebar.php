<section class="sidebar">
  <div class="sidebar__searchform">
    <?php get_search_form(); ?>
  </div>
  <div class="profile">
    <div class="profile__thumb">
      <img src="<?php echo get_template_directory_uri(); ?>/dist/images/profile_150×150.png">
    </div>
    <p class="profile__name">numa</p>
    <p class="profile__role">Webデザイナー</p>
    <div class="profile__intro">デジタルエージェンシーのWebデザイナーとして働いています。<br>
      主にWebデザインやプログラミング、Web関連の情報を発信しています。<br>
      <br>
      現在はフロントエンドエンジニアとしてスキルアップを目指し、JavaScript/Vue.jsを学習中。<br>
      趣味は映画・写真・旅。<br>
      好きなウイスキーはラフロイグ。</div>
  </div>

  <div class="sidebar__popular">
    <div class="sidebar__header">
      <h4 class="header__ttl">Popular</h4>
    </div>
    <?php
    // views post metaで記事のPV情報を取得する
    setPostViews(get_the_ID());

    // ループ処理開始
    query_posts("meta_key=post_views_count&orderby=meta_value_num&posts_per_page=5order=DESC");
    while(have_posts()) : the_post(); ?>
    <?php
      $custom_key = "custom_popular_ranking";

      $args = array(
        "cat" => $cat_common_id,
        "posts_per_page" => 5,
        "meta_key" => $custom_key,
        "orderby" => "meta_value_num",
        "order" => "DESC"
      );

      $my_query = new WP_Query($args);

      $ranking_counter = 0;
      ?>
      <dl class="sidebar__popular-item">
        <dt class="popular-list__thumb">
          <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail("thumbnail"); ?></a>
        </dt>
        <dt class="popular-list__txt">
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </dt>
      </dl>
      <?php endwhile; ?>
  </div>


  <ul class="sidebar__widget">
    <?php dynamic_sidebar(); ?>
 </ul>
</section><!--blogmenu-->
