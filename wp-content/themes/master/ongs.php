<?php /*Template Name: Ongs*/ ?>
<?php get_header(); ?>
<div class="container text-center">
	<?php while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
		<div class="content">
			<?php the_content(); ?>
		</div>
		<div class="row">
		<?php $logos = CFS()->get('lista');
		if ( $logos ):
			$i = 1;
			foreach ($logos as $ong) { ?>
				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
					<a href="<?php echo $ong['link']; ?>"><img width="200" src="<?php echo $ong['icono']; ?>"></a>
				</div>
			<?php if($i % 4 == 0) : ?>
				</div><div class="row">
			<?php endif; ?>
			<?php $i++;
			}
		endif; ?>
		</div>
	<?php endwhile; ?>
</div>
<?php get_footer() ?>