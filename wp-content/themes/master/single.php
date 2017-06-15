<?php get_header(); ?>
<div class="container text-center">
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="col-lg-6 text-right">
			<h1><?php the_title(); ?></h1>
			<div class="content">
				<p><?php echo CFS()->get('edad').". ".CFS()->get('ciudad');?></p>
				<p><?php echo CFS()->get('fecha_nac');?></p>
				<?php the_content(); ?>
			</div>
		</div>
		<div class="col-lg-6 pic">
			<div><?php the_post_thumbnail('full'); ?></div>
		</div>
	<?php endwhile; ?>
</div>

<?php get_footer() ?>