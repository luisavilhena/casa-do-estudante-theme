<?php

get_header(); ?>
<?php while (have_posts()) : the_post(); ?>

<main class="template-home">
	<img
      src="<?php echo get_template_directory_uri() ?>/resources/img/page_principal.jpeg"
  />
  <div class="template-home__contents">
    <div>
    	
    </div>
  </div>
</main>

<?php endwhile; ?>

<?php
get_footer();