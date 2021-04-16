<?php
 
use Carbon_Fields\Block;
use Carbon_Fields\Field;
 
add_action( 'after_setup_theme', 'casa-do-estudante' );
 
function casa_do_estudante_contact() {
	Block::make( 'Contato' )
	->add_fields(array(
		Field::make( 'text', 'title', 'Título' ),
		Field::make( 'text', 'link', 'Link' ),
		Field::make( 'text', 'text_link', 'Texto do link' ),
		Field::make( 'rich_text', 'address', 'Endereço' ),
	  Field::make('complex', 'contact', 'Contatos')
	    ->add_fields(array(
	      Field::make('text', 'social', 'Rede Social'),
	      Field::make('text', 'link', 'Link'),
	      Field::make('image', 'icon', 'Ícone')
	    ))
	    ->set_layout('tabbed-horizontal')
	    ->set_header_template('<%- $_index + 1 %> <% if (social) { %>- <%- social %><% } %>'),
	))
		->set_render_callback( function ( $block ) {
 
			// ob_start();
			?>
 
			<div class="contact">
				<div class="contact-item contact-item--1">
					<h2><?php echo $block['title'] ?></h2>
					<span></span>
					<?php foreach ($block['contact'] as $contact) : ?>
					<a class="contact-item__social" target="_blank" href="<?php echo $contact['link']; ?>">
						<img src="<?php echo wp_get_attachment_image_src($contact['icon'])[0]; ?>">
						<?php echo $contact['social']; ?>
					</a>
					<?php endforeach;  ?>
				</div>	
				<div class="contact-item contact-item--2">
					<a  class="contact-item__link" href="<?php echo $block['link']; ?>"><?php echo $block['text_link']; ?></a>
					<span></span>
					<address><?php echo  $block['address']; ?></address>
				</div>
			</div>
 
			<?php
 
			// return ob_get_flush();
		} );
}
add_action( 'carbon_fields_register_fields', 'casa_do_estudante_contact' );