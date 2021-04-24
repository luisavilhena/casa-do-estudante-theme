<?php

get_header(); ?>
<?php while (have_posts()) : the_post(); ?>

<main class="template-casa-do-estudante">
	<h1 class="template-casa-do-estudante__title"><?php the_title(); ?></h1>
	<?php the_content(); ?>

</main>
<?php endwhile; ?>

<?php
get_footer();
