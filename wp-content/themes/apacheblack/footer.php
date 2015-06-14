  <div class="container footer">
    <ul>
      <?php 
        $page_id = get_queried_object_id();
        global $post; var_dump($post->ID);
        if(is_page($page_id)) { ?>
        <li><a href="<?php home_url(); ?>">Home</a></li>
       <?php } else { ?>
      <li><a href="/index.php/archive">Archive</a></li>
      <?php } ?>
      <li><a href="#">Instagram</a></li>
      <li><a href="#">Twitter</a></li>
      <li><a href="#">Email</a></li>
    </ul>
    <p>Created by Kayra Alat</p>
    <?php 
    $pagename = $wp_query->post->post_title; ?>
      <h1><?php $page_id; ?></h1>
  </div>  

  <?php 
    if(is_page('archive')) {
      echo '<h1>WHATS UP</h1>';
    }
  ?>
  <?php wp_footer(); ?>
</body>
</html>