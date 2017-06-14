<?php /*Template Name: Wall*/ ?>
<?php get_header(); ?>
<div class="container">
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="col-lg-2"><?php the_title(); ?></div>
	<?php endwhile; ?>
</div>
<?php get_footer() ?>