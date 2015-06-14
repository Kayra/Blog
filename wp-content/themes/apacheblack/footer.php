  <div class="container footer">
    <ul>
      <?php 
        if(is_page('archive')) { ?>
        <li><a href="<?php echo home_url(); ?>">Home</a></li>
       <?php } else { ?>
      <li><a href="/index.php/archive">Archive</a></li>
      <?php } ?>
      <li><a href="#">Instagram</a></li>
      <li><a href="#">Twitter</a></li>
      <li><a href="#">Email</a></li>
    </ul>
    <p>Created by Kayra Alat</p>
  </div>

  <?php wp_footer(); ?>
</body>
</html>