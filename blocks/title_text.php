<?php
/**
 * Plugin Name: Filmes
 * Text Domain: filmes
 */
 
use Carbon_Fields\Block;
use Carbon_Fields\Field;
 
add_action( 'after_setup_theme', 'casa-do-estudante' );
 
function casa_do_estudante_title_text() {
	Block::make( 'Título e texto' )
		->add_fields( array(
			Field::make( 'text', 'title', 'Título' ),
			Field::make( 'rich_text', 'text', 'Texto' ),

		) )
		->set_render_callback( function ( $block ) {
 
			// ob_start();
			?>
 			<div class="title-text">
 				<div class="title-text__title">
 					<?php if($block['title']) : ?>
 					<div class="highlight-title">
 						<div class="">
 							<h2><?php echo  $block['title']; ?></h2>
 						</div>
 					</div>
 				<?php endif;  ?>
 				</div>
 				<div class="title-text__text">
 					<?php echo  $block['text']; ?>
 				</div>
 			</div>
 
			<?php
 
			// return ob_get_flush();
		} );
}
add_action( 'carbon_fields_register_fields', 'casa_do_estudante_title_text' );