  <div class="container footer">
    <ul>
      <?php 
        if(is_page('archive')) { ?>
        <li><a href="<?php echo home_url(); ?>">Home</a></li>
       <?php } else { ?>
      <li><a href="/index.php/archive">Archive</a></li>
      <?php } ?>
      <li><a href="https://instagram.com/apacheblackblog/" target="_blank">Instagram</a></li>
      <li><a href="https://twitter.com/apacheblackblog" target="_blank">Twitter</a></li>
      <li><a href="mailto:apacheblack@outlook.com">Email</a></li>
    </ul>
    <p>Created by <a href='https://twitter.com/kayraalat' target="_blank">Kayra Alat</a></p>
  </div>

  <?php wp_footer(); ?>
</body>
</html>