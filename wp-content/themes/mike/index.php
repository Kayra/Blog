<?php get_header(); ?>
<div class="container-fluid intro-effect-push modify" id="container">
        <div class="title">
            <h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>
        </div>
        <article class="content" id="post-<?php the_ID(); ?>">
            <div class="col-md-6 col-md-offset-3">

                <?php get_template_part('loop'); ?>
                <?php get_template_part('pagination'); ?>
            </div>
        </article>
<?php get_footer(); ?>