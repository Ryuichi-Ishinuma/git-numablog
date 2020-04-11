<?php get_header(); ?>

<div class="wrapper">
  <section class="main">
    <div class="contents">
      <article class="singlepage" <?php post_class(); ?>>
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
            <?php if(function_exists('bcn_display')){ bcn_display(); }?>
        </div>
        <?php if( is_category() ): ?>
        <h2 class="archive-title">
            <?php single_cat_title(); ?>
        </h2>
        <?php endif; ?>

        <?php if(is_month() ): ?>
        <h1 class="archive-title">
            <?php echo get_the_date('Y年n月'); ?>
        </h1>
        <?php endif; ?>

        <?php if(have_posts()): while(have_posts()): the_post(); ?>
          <?php if( is_single() ): ?>
          <h1 class="singlepage__ttl"><?php the_title(); ?></h1>
          <?php else: ?>
          <h1><a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?></a></h1>
          <?php endif; ?>

          <!-- SNSシェアボタン -->
          <?php get_template_part('sns-share'); ?>

          <div class="singlepage__postinfo">
              <time class="postinfo__date" datetime="<?php echo get_the_date('Y-m-d'); ?>">
                  <?php echo get_the_date('Y/m/d'); ?>
              </time>
              <span class="postinfo__category">
                  <?php the_category(','); ?>
              </span>
          </div>
          <?php the_content(); ?>

          <!-- SNSシェアボタン -->
          <?php get_template_part('sns-share'); ?>

          <?php comments_template("/comments.php"); ?>
      </article>
      <?php endwhile; endif; ?>
    </div>
  </section>
  <!-- サイドバーの読み込み -->
  <?php get_sidebar(); ?>
</div>


<?php get_footer(); ?>
