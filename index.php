<?php get_header(); ?>
  <header class="index-header">
  </header>


  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <!-- <header class="index-header">
    <div class="container">
      <h1><?php bloginfo('name') ?></h1>
      <h2><?php bloginfo('description') ?></h2>
      <p>This is the blog of a twenty something web developer poorly articulating his experiences as he travels, eats too much, and subsequently tries to work off the weight. <span class="mobile"> Here’s hoping a few people can benefit from reading about the mistakes I’ll inevitably make along the way.</span></p>
    </div>
  </header>

  <?php $recent_query = new WP_Query( 'showposts=1' ); ?>
  <?php while ($recent_query -> have_posts()) : $recent_query -> the_post(); ?>


  <a href="<?php the_permalink() ?>" class="latest-post-image">
    <div class="latest-post-text">
      <h3 class="sliding-middle-out"><?php the_title(); ?> ></h3>
    </div>
    <?php if(!is_mobile()) { ?>
    <img src="<?php echo get_field('background_image')['url'] ?>">
    <?php } elseif (is_mobile()) { ?>
      <img src="<?php echo get_field('featured_thumbnail')['url'] ?>">
    <?php } ?>
  </a>

  <?php endwhile; wp_reset_query(); ?>

  <div class="container-fluid featured">
    <div class="row">
      <?php $featured_query = new WP_Query( "posts_per_page=3&category_name='featured'" ); ?>
      <?php while ($featured_query -> have_posts()) : $featured_query -> the_post(); ?>
      <div class="col-md-4 feature">
        <a href="<?php the_permalink() ?>">
          <div class="featured-post-text">
            <h5 class="sliding-middle-out"><?php the_title(); ?> ></h5>
          </div>
          <?php if(!is_mobile()) { ?>
          <img src="<?php echo get_field('featured_thumbnail')['url'] ?>">
          <?php } elseif (is_mobile()) { ?>
            <img src="<?php echo get_field('background_image')['url'] ?>">
          <?php } ?>
        </a>
      </div>
      <?php endwhile; wp_reset_query(); ?>
    </div>
  </div>

<?php get_footer(); ?>
 -->
