<?php
/**
 * Plugin Name: Filmes
 * Text Domain: filmes
 */
 
use Carbon_Fields\Block;
use Carbon_Fields\Field;
 
add_action( 'after_setup_theme', 'casa-do-estudante' );
 
function casa_do_estudante_highlight_title() {
	Block::make( 'Título Destacado' )
		->add_fields( array(
			Field::make( 'text', 'title_1', 'Título 1' ),
			Field::make( 'text', 'title_2', 'Título 2' ),
		) )
		->set_render_callback( function ( $block ) {
 
			// ob_start();
			?>
 
			<div class="highlight-title">
				<div>
					<h2><?php echo  $block['title_1']; ?></h2>
					<h2><?php echo  $block['title_2']; ?></h2>
				</div>
			</div>
 
			<?php
 
			// return ob_get_flush();
		} );
}
add_action( 'carbon_fields_register_fields', 'casa_do_estudante_highlight_title' );