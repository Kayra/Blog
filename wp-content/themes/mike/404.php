<?php get_header(); ?>
<div class="container-fluid" id="container">
	<article class="content" id="post-<?php the_ID(); ?>">
		<div class="col-md-6 col-md-offset-3">
			<h1 class="white">404</h1>
			<h2 class="white">oh noes...</h2>
		</div>
	</article>
	<script>
		jQuery.backstretch( "<?php bloginfo('template_url'); ?>/img/cat.jpg");
	</script>
<?php get_footer(); ?>