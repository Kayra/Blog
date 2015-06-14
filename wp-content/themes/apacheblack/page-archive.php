<?php
/*
Template Name: Archive
*/
?>

<?php get_header(); ?>

<h1>Archive</h1>

<?php 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array( 'post_type' => 'post', 'posts_per_page' => 10, 'paged' => $paged );
$wp_query = new WP_Query($args);
while ( have_posts() ) : the_post(); ?>
    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?> <?php the_time('j F, Y'); ?></a></h2>
<?php endwhile; wp_reset_query(); ?>

<!-- then the pagination links -->
<?php next_posts_link( '&larr; Older posts', $wp_query ->max_num_pages); ?>
<?php previous_posts_link( 'Newer posts &rarr;' ); ?>

<?php get_footer(); ?>