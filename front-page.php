<!-- ヘッダーの読み込み -->
<?php get_header(); ?>

<!-- セレクション記事を3つ掲載する -->
<section class="selected">
  <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
      <?php if(function_exists('bcn_display')) {bcn_display(); }?>
  </div>
  <div class="selected__ttl">
    <span>Pickup Posts</span>
  </div>
  <ul class="selected__list">
    <li class="selected__item">
      <a href="<?php $permalink =  get_permalink('techacademy-webdesign-course/'); ?>">
        <div class="item__thumb">
          <?php if( has_post_thumbnail() ): ?>
            <?php the_post_thumbnail( 'medium' ); ?>
          <?php endif; ?>
        </div>
        <h2 class="item__ttl"><span><?php the_title(); ?></span></h2>
        <div class="item__postinfo">
          <time class="item__date" datetime="<?php echo get_the_date('Y-m-d'); ?>">
              <?php echo get_the_date('Y.m.d'); ?>
          </time>
          <span class="item__category">
              <?php the_category(','); ?>
          </span>
        </div>
      </a>
    </li>

    <li class="selected__item">
      <a href="<?php $permalink =  get_permalink('techacademy-webdesign-course/', true); ?>">
        <div class="item__thumb">
          <?php if( has_post_thumbnail() ): ?>
            <?php the_post_thumbnail( 'medium' ); ?>
          <?php endif; ?>
        </div>
        <h2 class="item__ttl"><span><?php the_title(); ?></span></h2>
        <div class="item__postinfo">
          <time class="item__date" datetime="<?php echo get_the_date('Y-m-d'); ?>">
              <?php echo get_the_date('Y.m.d'); ?>
          </time>
          <span class="item__category">
              <?php the_category(','); ?>
          </span>
        </div>
      </a>
    </li>

    <li class="selected__item">
      <a href="<?php $permalink =  get_permalink('techacademy-webdesign-course/'); ?>">
        <div class="item__thumb">
          <?php if( has_post_thumbnail() ): ?>
            <?php the_post_thumbnail( 'medium' ); ?>
          <?php endif; ?>
        </div>
        <h2 class="item__ttl"><span><?php the_title(); ?></span></h2>
        <div class="item__postinfo">
          <time class="item__date" datetime="<?php echo get_the_date('Y-m-d'); ?>">
              <?php echo get_the_date('Y.m.d'); ?>
          </time>
          <span class="item__category">
              <?php the_category(','); ?>
          </span>
        </div>
      </a>
    </li>
  </ul>
</section>

<!-- コンテンツ -->
<div class="wrapper">
  <section class="main">
    <div class="contents">
      <div class="contents__new-post">
        <span>New Posts</span>
      </div>
      <div class="contents__list">
          <?php if( is_category() ): ?>
            <p class="archive-title">
                <?php single_cat_title(); ?>
            </p>
         <?php endif; ?>

          <?php if(is_month() ): ?>
          <h2 class="archive-title">
              <?php echo get_the_date('Y年n月'); ?>
          </h2>
          <?php endif; ?>

          <?php if(have_posts()): while(have_posts()):
          the_post(); ?>

          <article class="contents__item" <?php post_class(); ?>>
            <a href="<?php the_permalink(); ?>">
              <div class="item__thumb">
                <?php if( has_post_thumbnail() ): ?>
                  <?php the_post_thumbnail( 'medium' ); ?>
                <?php endif; ?>
              </div>
              <h2 class="item__ttl"><span><?php the_title(); ?></span></h2>
              <div class="item__postinfo">
                  <time class="item__date" datetime="<?php echo get_the_date('Y-m-d'); ?>">
                      <?php echo get_the_date('Y.m.d'); ?>
                  </time>
                  <span class="item__category">
                      <?php the_category(','); ?>
                  </span>
              </div>
            </a>
          </article>
          <?php endwhile; endif; ?>
      </div>
      <div class="pager">
        <?php if(function_exists('wp_pagenavi')) {wp_pagenavi();} ?>
      </div>
    </div><!--contents-->
  </section>
  <!-- サイドバーの読み込み -->
  <?php get_sidebar(); ?>
</div>


<!-- フッターの読み込み -->
<?php get_footer(); ?>
