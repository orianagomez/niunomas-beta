<?php /*Template Name: Wall*/ ?>
<?php get_header(); ?>
<div class="container wall">
	<div class="row">
	<?php 
	$args = array(
		'post_type' => 'post',
		'post_status'    =>  'publish'
	);

	$names = new WP_Query( $args );
	if ( $names->have_posts() ) :
		$i = 1;
		while ( $names->have_posts() ) : $names->the_post(); ?>
			<div class="col-lg-2">
				<a href="<?php the_permalink(); ?>"><?php the_title();?></a>		
			</div>
			<?php if($i % 6 == 0) : ?>
				</div><div class="row">
			<?php endif; ?>

		<?php $i++; endwhile; ?>
	<?php endif; ?>
	</div>
	<?php wp_reset_postdata(); ?>	
</div>
<?php get_footer() ?>