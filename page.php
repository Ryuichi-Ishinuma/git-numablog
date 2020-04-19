<?php get_header(); ?>


<div class="wrapper">
	<div class="main">
		<div class="contents is-singlepage">

			<?php if(have_posts()): while(have_posts()):
			the_post(); ?>

			<article class="singlepage" <?php post_class(); ?>>
				<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
				<?php if(function_exists('bcn_display'))
				{
				bcn_display();
				}?>
				</div>
				<h1 class="pagetitle"><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</article>

			<?php endwhile; endif; ?>
		</div>
	</div>
	<!-- サイドバーの読み込み -->
  <?php get_sidebar(); ?>

</div>


<?php get_footer(); ?>
