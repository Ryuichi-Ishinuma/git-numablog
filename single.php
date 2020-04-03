<?php get_header(); ?>


<div class="main">
<div class="container">
    <div class="contents">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
            <?php if(function_exists('bcn_display'))
{
bcn_display();
}?>
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

        <?php if(have_posts()): while(have_posts()):
the_post(); ?>

        <article class="singlepage" <?php post_class(); ?>>
            <?php if( is_single() ): ?>
            <h1 class="pagetitle"><?php the_title(); ?></h1>
            <?php else: ?>
            <h1><a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?></a></h1>
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

            <?php the_content(); ?>

            <?php comments_template(); ?>
        </article>

        <?php endwhile; endif; ?>

    </div>
    <!--contents-->

    <div class="blogmenu">
        <ul>
            <?php dynamic_sidebar(); ?>
        </ul>
    </div>
    <!--blogmenu-->

</div>
<!--container-->
</div><!--main-->


<?php get_footer(); ?>
