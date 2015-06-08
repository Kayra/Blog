<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title><?php bloginfo('name') ?></title>
  <meta name="description" content="Personal Blog">
  <meta name="author" content="Kayra Alat">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

  <!-- Wordpress stuff
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <?php wp_head(); ?>

</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <header>
    <div class="container">
      <h1><?php bloginfo('name') ?></h1>
      <h2><?php bloginfo('description') ?></h2>
      <p>This is the blog of a twenty something web developer traveling the world and eating whatever I can get my hands on. 
      Don’t be fooled, the fitness part is literally just so I can eat without needing to buy more clothes.</p>
    </div>
  </header>

  <div class="container">
    <h3>MOST RECENT POST</h3>
  </div>  

  <?php $recent_query = new WP_Query( 'showposts=1' ); ?>
  <?php while ($recent_query -> have_posts()) : $recent_query -> the_post(); ?>

  <div class="image" style="background: url(<?php echo get_field('background_image')['url'] ?>) no-repeat center center; ">
    <div class="container">
          <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?> ></a></h4>
    </div>  
  </div>

  <?php endwhile; wp_reset_query(); ?>

  <div class="container">
    <h3>FEATURED POSTS</h3>
  </div>  

  <div class="featured">

    <?php $featured_query = new WP_Query( 'posts_per_page=3&cat=2'); ?>
    <?php while ($featured_query -> have_posts()) : $featured_query -> the_post(); ?>
      <div class="col-md-4 feature">
        <h5><a href="<?php the_permalink() ?>"><?php the_title(); ?> ></a></h5>
        <img src="<?php echo get_field('featured_thumbnail')['url'] ?>">
      </div>
    <?php endwhile; wp_reset_query(); ?>


  <div class="container footer">
    <ul>
      <li><a href="#">Archive</a></li>
      <li><a href="#">Instagram</a></li>
      <li><a href="#">Twitter</a></li>
      <li><a href="#">Email</a></li>
    </ul>
    <p>Created by Kayra Alat</p>
  </div>  

  <?php wp_footer(); ?>

</body>
</html>
