<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;
 
add_action( 'after_setup_theme', 'casa-do-estudante' );
 
function casa_do_estudante_number_text_item() {
	Block::make( 'Item com texto e número' )
		->add_fields( array(
			Field::make('text', 'number', 'Número'),
			Field::make( 'text', 'title', 'Título' ),
			Field::make( 'rich_text', 'description', 'Descrição' ),
		) )
		->set_render_callback( function ( $block ) {
						// ob_start();
			?>
 
			<div class="number-text-item">
				<div class="number-text-item__number">
					<span></span>
					<p class="number-text-item__number__only-mobile">
						<?php echo $block['number'];  ?>
					</p>
					<div class="number-text-item__number__only-desktop">
						<p>
							<?php echo $block['number'];  ?>.
						</p>
						<h3><?php echo  $block['title']; ?></h3>
					</div>
		
				</div>
				<div class="number-text-item__text">
					<span></span>
					<h3><?php echo  $block['title']; ?></h3>
					<div><?php echo  $block['description']; ?></div>
				</div>
			</div>
 
			<?php

			// return ob_get_flush();
 		} );
}
add_action( 'carbon_fields_register_fields', 'casa_do_estudante_number_text_item' );