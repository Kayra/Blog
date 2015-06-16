<?php get_header(); ?>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <header class="index-header">
    <div class="container">
      <h1><?php bloginfo('name') ?></h1>
      <h2><?php bloginfo('description') ?></h2>
      <p>This is the blog of a twenty something web developer traveling the world and eating whatever I can get my hands on, then 
      working out so I don't have to buy any new clothes. Let me share my lessons with you.</p>
    </div>
  </header>

  <?php $recent_query = new WP_Query( 'showposts=1' ); ?>
  <?php while ($recent_query -> have_posts()) : $recent_query -> the_post(); ?>

  <div class="image" style="background: url(<?php echo get_field('background_image')['url'] ?>) no-repeat center center; ">
    <div class="container">
          <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?> ></a></h4>
    </div>  
  </div>

  <?php endwhile; wp_reset_query(); ?>

  <div class="featured">

    <?php $featured_query = new WP_Query("posts_per_page=3&tag='featured'"); ?>
    <?php while ($featured_query -> have_posts()) : $featured_query -> the_post(); ?>
    <div class="col-md-4 feature">
      <h5><a href="<?php the_permalink() ?>"><?php the_title(); ?> ></a></h5>
      <a href="<?php the_permalink() ?>"><img src="<?php echo get_field('featured_thumbnail')['url'] ?>"></a>
    </div>
    <?php endwhile; wp_reset_query(); ?>

  </div>

<?php get_footer(); ?>