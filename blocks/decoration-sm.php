<?php
/**
 * Plugin Name: Filmes
 * Text Domain: filmes
 */
 
use Carbon_Fields\Block;
use Carbon_Fields\Field;
 
add_action( 'after_setup_theme', 'casa-do-estudante' );
 
function casa_do_estudante_decoration_sm() {
	Block::make( 'Adorno pequeno' )
		->set_render_callback( function ( $block ) {
 
			// ob_start();
			?>
 
			<div class="decoration decoration-sm">
			</div>
 
			<?php
 
			// return ob_get_flush();
		} );
}
add_action( 'carbon_fields_register_fields', 'casa_do_estudante_decoration_sm' );