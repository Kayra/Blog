<?php get_header(); ?>

<!-- Primary Page Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="title">
		<h1><?php the_title(); ?></h1>
	</div>
	<div class="col-md-6 col-md-offset-3">

	</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>