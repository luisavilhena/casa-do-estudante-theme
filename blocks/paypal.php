<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;
 
add_action( 'after_setup_theme', 'casa-do-estudante' );
 
function casa_do_estudante_paypal() {
	Block::make( 'Paypal' )
		->add_fields( array(
			Field::make( 'text', 'title_1', 'Título linha 1' ),
			Field::make( 'text', 'title_2', 'Título linha 2' ),
			Field::make( 'rich_text', 'description', 'Descrição' ),
			Field::make( 'radio', 'radio', 'Tirar adorno amarelo?')
				->set_options( array(
					'1' => 'sim',
					'2' => 'não',
				) )
		) )
		->set_render_callback( function ( $block ) {
						// ob_start();
			?>
 
			<div class="title-text-button">
				<div class="title-text-button__title">
					<span class="title-text-button__decoration <?php if($block['radio'] === '1') : ?> title-text-button__decoration__none <?php endif; ?>"></span>
					<h2><?php echo $block['title_1']  ?> </h2>
					<h2><?php echo $block['title_2']  ?> </h2>
				</div>
				<div class="title-text-button__content">
					<span class="title-text-button__decoration <?php if($block['radio'] === '1') : ?> title-text-button__decoration__none <?php endif; ?>"></span>
					<div class="title-text-button__content-description">
						<?php echo $block['description'];  ?>
					</div>
                    <form class="title-text-button__content-btn" action="https://www.paypal.com/donate" method="post" target="_top">
					<input type="hidden" name="hosted_button_id" value="AYXKL3G67YGNG" />
					<input type="image" src="https://www.casadoestudante.org/wp-content/uploads/2023/08/Captura-de-Tela-2023-08-24-as-17.24.40.png" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Faça doações com o botão do PayPal" />
					</form>
				</div>
			</div>
 
			<?php

			// return ob_get_flush();
 		} );
}
add_action( 'carbon_fields_register_fields', 'casa_do_estudante_paypal' );