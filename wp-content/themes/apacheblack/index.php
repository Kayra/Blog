<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
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
      <div class="row">
        <div class="twelve columns">
          <h1><?php bloginfo('name') ?></h1>
          <h2><?php bloginfo('description') ?></h2>
          <p>A twenty something web developer traveling the world and eating whatever I can get my hands on. 
          Don’t be fooled, the fitness part is literally just so I can eat without needing to buy more clothes.</p>
        </div>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="row">
      <div class="twelve columns">
        <h3>MOST RECENT POST</h3>
      </div>
    </div>
  </div>  

  <div class="image">
    <div class="container">
       <div class="row">
        <div class="twelve columns">
          <h4>Why I fucking love to eat ></h4>
        </div>
      </div>
    </div>  
  </div>

  <div class="container">
    <div class="row">
      <div class="twelve columns">
        <h3>FEATURED POSTS</h3>
      </div>
    </div>
  </div>  

  <div class="container">
    <div class="row">
      <div class="one-third column">
        <h5>Dat alcoholism ></h5>
      </div>
    </div>
  </div>  

  <div class="container">
    <div class="row">
      <div class="one-third column">
        <h5>Time to get shrekt ></h5>
      </div>
    </div>
  </div>  

  <div class="container">
    <div class="row">
      <div class="one-third column">
        <h5>Chroist I'm a hipster ></h5>
      </div>
    </div>
  </div>  

  <div class="container">
    <div class="row">
      <div class="twelve columns">
        <ul class="footer">
          <li><a href="#">Archive</a></li>
          <li><a href="#">Instagram</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Email</a></li>
        </ul>
        <p>Created by Kayra Alat</p>
      </div>
    </div>
  </div>  

  <?php wp_footer(); ?>

</body>
</html>
