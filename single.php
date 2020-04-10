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
          <ul class="socialBtn">
          	<li><a class="twitter icon-twitter" href="//twitter.com/intent/tweet?text=<?php echo urlencode(the_title("","",0)); ?>&<?php echo urlencode(get_permalink()); ?>&url=<?php echo urlencode(get_permalink()); ?>" target="_blank" title="Twitterでシェアする"><i class="fab fa-twitter"></i></a></li>
          	<li><a class="facebook icon-facebook" href="//www.facebook.com/sharer.php?u=<?php echo urlencode(get_permalink()); ?>&t=<?php echo urlencode(the_title("","",0)); ?>" target="_blank" title="facebookでシェアする"><i class="fab fa-facebook-f"></i></a></li>
          	<li><a class="pocket icon-pocket" href="//getpocket.com/edit?url=<?php echo urlencode(get_permalink()); ?>" target="_blank" title="Pocketであとで読む"><i class="fab fa-get-pocket"></i></a></li>
          	<!-- <li><a class="hatena icon-hatena" href="//b.hatena.ne.jp/add?mode=confirm&url=<?php echo urlencode(get_permalink()); ?>&title=<?php echo urlencode(the_title("","",0)); ?>" target="_blank" data-hatena-bookmark-title="<?php the_permalink(); ?>" title="このエントリーをはてなブックマークに追加する">はてブ</a></li> -->
          	<li><a class="line icon-line" href="//timeline.line.me/social-plugin/share?url=<?php echo urlencode(get_permalink()); ?>" target="_blank" title="LINEでシェアする"><i class="fab fa-line"></i></a></li>
          	<li><a class="rss icon-feed" href="<?php echo urlencode(bloginfo('rss2_url')); ?>" target="_blank" title="RSSで購読する"><i class="fas fa-rss"></i></a></li>
          </ul>

          <?php comments_template(); ?>
      </article>
      <?php endwhile; endif; ?>
    </div>
  </section>
  <!-- サイドバーの読み込み -->
  <?php get_sidebar(); ?>
</div>


<?php get_footer(); ?>
