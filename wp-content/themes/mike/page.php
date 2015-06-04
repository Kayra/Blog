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
			<h1><img src="https://0.gravatar.com/avatar/92dbe1aa0235cd19aa66a42a5e9fe0ba?s=150" class="img-responsive center-block img-circle"/></h1>
		</div>
		<article class="content" id="post-<?php the_ID(); ?>">
			<div class="col-md-6 col-md-offset-3">

				<?php the_content(); // Dynamic Content ?>
				<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
			</div>
		</article>
	<?php endwhile; ?>
	<?php endif; ?>
<?php get_footer(); ?>