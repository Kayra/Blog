<?php get_header(); ?>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <header class="front-page">
    <div class="container">
      <h1><?php bloginfo('name') ?></h1>
      <h2><?php bloginfo('description') ?></h2>
      <p>This is the blog of a twenty something web developer traveling the world and eating whatever I can get my hands on. 
      Don’t be fooled, the fitness part is literally just so I can eat without needing to buy more clothes.</p>
    </div>
  </header>

<!--   <div class="container">
    <h3>MOST RECENT POST</h3>
  </div>   -->

  <?php $recent_query = new WP_Query( 'showposts=1' ); ?>
  <?php while ($recent_query -> have_posts()) : $recent_query -> the_post(); ?>

  <div class="image" style="background: url(<?php echo get_field('background_image')['url'] ?>) no-repeat center center; ">
    <div class="container">
          <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?> ></a></h4>
    </div>  
  </div>

  <?php endwhile; wp_reset_query(); ?>

<!--   <div class="container">
    <h3>FEATURED POSTS</h3>
  </div>   -->

  <div class="featured">

    <?php $featured_query = new WP_Query( 'posts_per_page=3&cat=2'); ?>
    <?php while ($featured_query -> have_posts()) : $featured_query -> the_post(); ?>
    <div class="col-md-4 feature">
      <h5><a href="<?php the_permalink() ?>"><?php the_title(); ?> ></a></h5>
      <img src="<?php echo get_field('featured_thumbnail')['url'] ?>">
    </div>
    <?php endwhile; wp_reset_query(); ?>

  </div>

<?php get_footer(); ?>