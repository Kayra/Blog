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
			<p class='subtitle'><?php the_field('subtitle'); ?></p>
			<p>Posted in <strong><?php the_category(', '); ?></strong> on <strong><?php the_time('F j, Y'); ?></strong></p>
		</div>

		<article class="content">
			<div class="utility-margin-top col-md-6 col-md-offset-3">
				<div class="content-text">
					<?php the_content(); ?>
				</div>
				<hr/>

				<!-- Editing the comments form -->

				<?php $comments_args = array(

					'fields' => apply_filters('comment_form_default_fields', array(
						'author' => '<input id="author" name="author" type="text" placeholder ="Name" value="' . 
        							esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />',
						'email' => '<input id="email" name="email" type="text" placeholder="Email (won\'t appear)" value="' . 
									esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />',
						'url' => '',
						)),
					'comment_field' => '<textarea id="comment" name="comment" placeholder="Comment" cols="45" rows="8" 
										aria-required="true"></textarea>',
					'label_submit' => 'Publish comment',
        			'comment_notes_after' => '',

				) ?>

				<?php comment_form($comments_args); ?>
			</div>
		</article>
	</div>

<?php endwhile; endif; ?>


<?php get_footer(); ?>
