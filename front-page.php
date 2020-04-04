<!-- ヘッダーの読み込み -->
<?php get_header(); ?>

<!-- コンテンツ -->
<div class="wrapper">
  <div class="main">
    <div class="contents">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
            <?php if(function_exists('bcn_display')) {bcn_display(); }?>
        </div>
        
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
        <article <?php post_class(); ?>>
            <?php if( is_single() ): ?>
            <h2 class="article-title"><?php the_title(); ?></h2>
            <?php else: ?>
            <h2 class="article-title"><a href="<?php the_permalink(); ?>">
                <?php the_title(); ?></a></h2>
            <?php endif; ?>

            <div class="postinfo">
                <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
                    <?php echo get_the_date('Y/m/d'); ?>
                </time>

                <span class="postcat">
                    <?php the_category(','); ?>
                </span>

                <span class="postcom">
                    <i class="fa fa-comment"></i>
                    <a href="<?php comments_link(); ?>">
                        <?php comments_number(
    'コメント',
    'コメント(１件)',
    'コメント(%件)'
); ?>
                    </a>
                </span>
            </div>

            <?php if( is_single() ): ?>
            <?php the_content(); ?>
            <?php else: ?>
            <div class="excerpt">
                <?php if( has_post_thumbnail() ): ?>
                <p><?php the_post_thumbnail( 'medium' ); ?></p>
                <?php endif; ?>
            </div>
            <p class="more"><a href="<?php the_permalink(); ?>"><i class="fa fa-chevron-right"></i>READ MORE</a></p>

            <?php endif; ?>

            <?php comments_template(); ?>
        </article>

        <?php endwhile; endif; ?>

        <div class="pager">
            <?php if(function_exists('wp_pagenavi')) {
    wp_pagenavi();
} ?>
        </div>

    </div><!--contents-->
  </div>
  <!-- サイドバーの読み込み -->
  <?php get_sidebar(); ?>
</div>


<!-- フッターの読み込み -->
<?php get_footer(); ?>
