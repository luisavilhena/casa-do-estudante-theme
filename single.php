<?php

get_header(); ?>
<?php while (have_posts()) : the_post(); ?>

<main class="template-casa-do-estudante blog">
  <h1 class="template-casa-do-estudante__title">BLOG</h1>
  <span class="decoration decoration-bg"></span>
  <h2><?php the_title(); ?></h2>
  <?php the_content(); ?>
</main>
<?php endwhile; ?>

<?php
get_footer();