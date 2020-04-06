
<form action="<?php echo home_url('/'); ?>" method="get" class="searchform">
  <input type="search" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="search...">
  <button type="submit" id="searchSubmit"><i class="fas fa-search"></i></button>
</form>
