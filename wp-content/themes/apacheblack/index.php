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


  <a href="<?php the_permalink() ?>" class="latest-post-image">
    <div class="latest-post-text">
      <h3><?php the_title(); ?> ></h3>
    </div>
    <img src="<?php echo get_field('background_image')['url'] ?>">
  </a>

  <?php endwhile; wp_reset_query(); ?>

  <div class="container-fluid featured">
    <div class="row">
      <?php $featured_query = new WP_Query( "posts_per_page=3&tag='featured'" ); ?>
      <?php while ($featured_query -> have_posts()) : $featured_query -> the_post(); ?>
      <div class="col-md-4 feature">
        <h5><a href="<?php the_permalink() ?>"><?php the_title(); ?> ></a></h5>
        <a href="<?php the_permalink() ?>"><img src="<?php echo get_field('featured_thumbnail')['url'] ?>"></a>
      </div>
      <?php endwhile; wp_reset_query(); ?>
    </div>
  </div>

<?php get_footer(); ?>