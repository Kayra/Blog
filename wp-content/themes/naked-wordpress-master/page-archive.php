<?php 
/**
 * 	Template Name: Archive
 *
 *	This page template has a sidebar built into it, 
 * 	and can be used as a home page, in which case the title will not show up.
 *
*/
get_header(); // This fxn gets the header.php file and renders it ?>


<div class="main-fluid"><!-- start the page containter -->
	<div id="primary" class="row-fluid">
		<div id="content" role="main" class="span8 offset2">
			<?php if ( have_posts() ) : // Do we have any posts/pages in the databse that match our query? ?>

				<?php while ( have_posts() ) : the_post(); // If we have a page to show, start a loop that will display it ?>

					<article class="post">

						<h1 class="title"><?php the_title(); ?></h1>

						<?php get_search_form(); ?>

						<ul>
							<?php wp_get_archives('type=postbypost'); ?>
						</ul> 	


					</article>

				<?php endwhile; // OK, let's stop the post loop once we've displayed it ?>

			<?php else : // Well, if there are no posts to display and loop through, let's apologize to the reader (also your 404 error) ?>
				
				<article class="post error">
					<h1 class="404">Nothing has been posted like that yet</h1>
				</article>

			<?php endif; // OK, I think that takes care of both scenarios (having a post or not having a post to show) ?>

		</div><!-- #content .site-content -->
	<!--	<div id="sidebar" role="sidebar" class="span4">
			<?php get_sidebar(); // This will display whatever we have written in the sidebar.php file, according to admin widget settings ?>
		</div><!-- #sidebar -->
	</div><!-- #primary .content-area -->
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>