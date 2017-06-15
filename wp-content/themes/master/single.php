<?php get_header(); ?>
<div class="container text-center">
	<?php while ( have_posts() ) : the_post(); ?>
		<div><?php the_post_thumbnail('full'); ?></div>
		<h1><?php the_title(); ?></h1>
		<div class="content"><?php the_content(); ?></div>
	<?php endwhile; ?>
</div>

<?php get_footer() ?>