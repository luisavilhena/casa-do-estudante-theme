<?php

get_header(); ?>
<?php while (have_posts()) : the_post(); ?>

<main class="template-index">
	<h1>teste</h1>
	<?php the_content(); ?>

</main>
<?php endwhile; ?>

<?php
get_footer();
