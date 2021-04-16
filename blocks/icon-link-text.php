<?php
 
use Carbon_Fields\Block;
use Carbon_Fields\Field;
 
add_action( 'after_setup_theme', 'casa-do-estudante' );
 
function casa_do_estudante_icon_link_text() {
	Block::make( 'Ícone com texto de link' )
		->add_fields( array(
			Field::make('complex', 'contact', 'Contatos')
			  ->add_fields(array(
			    Field::make('text', 'text', 'Texto de link'),
			    Field::make('text', 'link', 'Link'),
			    Field::make('image', 'icon', 'Ícone')
			  ))
		) )
		->set_render_callback( function ( $block ) {
 
			// ob_start();
			?>
 
			<div class="icon-link-text">
				<?php foreach ($block['contact'] as $contact) : ?>
				<a target="_blank" href="<?php echo $contact['link']; ?>">
					<img src="<?php echo wp_get_attachment_image_src($contact['icon'])[0]; ?>">
					<?php echo $contact['text']; ?>
				</a>
				<?php endforeach;  ?>
			</div>
			<?php
 
			// return ob_get_flush();
		} );
}
add_action( 'carbon_fields_register_fields', 'casa_do_estudante_icon_link_text' );