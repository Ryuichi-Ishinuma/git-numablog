<?php get_header(); ?>
<div class="wrapper">
  <div class="main">
    <div class="contents is-singlepage">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
            <?php if(function_exists('bcn_display')){bcn_display(); }?>
        </div>

        <!--カテゴリー名の表示-->
        <?php if( is_category() ): ?>
        <h2 class="category__ttl">
          <?php single_cat_title(); ?>
        </h2>
        <?php endif; ?>

        <?php if(is_month() ): ?>
        <h2 class="archive__ttl">
            <?php echo get_the_date('Y年n月'); ?>
        </h2>
        <?php endif; ?>

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
          <?php if(function_exists('wp_pagenavi')) {
              wp_pagenavi();
            }
          ?>
        </div>

    </div>
    <!--contents-->

  </div>

  <!-- サイドバーの読み込み -->
  <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
