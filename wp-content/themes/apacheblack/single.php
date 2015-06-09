<?php get_header(); ?>

<!-- Primary Page Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="container-fluid intro-effect-push post" id="container">

		<header class="header">
			<div class="bg-img row">
				<img src="<?php echo get_field('background_image')['url'] ?>">
			</div>
			<div class="title">
				<h1><?php the_title(); ?></h1>
			</div>
		</header>
		<button class="trigger"><span>Trigger</span></button>
		<div class="title">
			<h1><?php the_title(); ?></h1>
			<h5 class="quote"><?php the_field('subtitle'); ?></h5>
			<p>by <strong><?php the_author(); ?></strong> &#8212; Posted in <strong><?php the_category(', '); ?></strong> on <strong><?php the_time('F j, Y'); ?></strong></p>
		</div>

		<article class="content" ?>">
			<div class="col-md-6 col-md-offset-3">
				<?php the_content(); ?>
				<hr/>
				<?php comments_template(); ?>
			</div>
		</article>
	</div>

<?php endwhile; endif; ?>


<?php get_footer(); ?>