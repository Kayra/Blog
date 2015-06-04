<?php get_header(); ?>
<div class="container-fluid intro-effect-push" id="container">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<header class="header">
			<div class="bg-img row">
				<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				<?php endif; ?>
			</div>
			<div class="title">
				<h1><?php the_title(); ?></h1>
			</div>
		</header>
		<button class="trigger" data-info="See more"><span>Trigger</span></button>
		<div class="title">
			<h1><?php the_title(); ?></h1>
			<h2><?php the_field('subtitle'); ?></h2>
			<h4>by <strong><?php the_author(); ?></strong> &#8212; Posted in <strong><?php the_category(', '); ?></strong> on <strong><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></strong></h4>
		</div>
		<article class="content" id="post-<?php the_ID(); ?>">
			<div class="col-md-6 col-md-offset-3">
				<?php the_content(); // Dynamic Content ?>
				<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
				<hr/>
				<?php comments_template(); ?>
			</div>
		</article>

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	<footer class="row" role="contentinfo">
		<div class="col-md-6 col-md-offset-3">
		<hr/>
			<p class="copyright"><small>
				&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>.
			</small></p>
		</div>
	</footer>
<?php get_footer(); ?>
