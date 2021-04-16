<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;
 
add_action( 'after_setup_theme', 'casa-do-estudante' );
 
function casa_do_estudante_title_text_button_g() {
	Block::make( 'Título, texto, botão, versão G' )
		->add_fields( array(
			Field::make( 'text', 'title_1', 'Título linha 1' ),
			Field::make( 'text', 'title_2', 'Título linha 2' ),
			Field::make('text', 'link', 'Link'),
			Field::make('text', 'button', 'Texto do botão'),
			Field::make( 'rich_text', 'description', 'Descrição' ),
			Field::make( 'rich_text', 'text', 'Texto longo' ),
		) )
		->set_render_callback( function ( $block ) {
						// ob_start();
			?>
 
			<div class="title-text-button-G">
				<span class="title-text-button-G__decoration"></span>
				<div class="title-text-button-G__columns">
					<div class="title-text-button-G__column-1">
						<div class="title-text-button-G__column-1__title">
							<h2><?php echo $block['title_1']  ?> </h2>
							<h2><?php echo $block['title_2']  ?> </h2>
						</div>
						<div class="title-text-button-G__column-1__description">
							<?php echo $block['description'];  ?>
						</div>
						<a class="title-text-button-G__column-1__btn" href="<?php echo $block['link'];  ?>">
							<?php echo $block['button'];  ?>
						</a>
					</div>
					<div class="title-text-button-G__column-2">
						<div class="title-text-button-G__content-G">
							<?php echo $block['text'];  ?>
						</div>
					</div>
				</div>
			</div>
 
			<?php

			// return ob_get_flush();
 		} );
}
add_action( 'carbon_fields_register_fields', 'casa_do_estudante_title_text_button_g' );