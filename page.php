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

<?php if(have_posts()): while(have_posts()):
the_post(); ?>

<article class="singlepage" <?php post_class(); ?>>

<h2 class="pagetitle"><?php the_title(); ?></h2>

<?php the_content(); ?>

</article>

<?php endwhile; endif; ?>

</div><!--contents-->
</div><!--container-->
</div><!--main-->
<?php get_footer(); ?>