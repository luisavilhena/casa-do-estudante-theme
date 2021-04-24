<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;
 
add_action( 'after_setup_theme', 'casa-do-estudante' );
 
function casa_do_estudante_faq() {
	Block::make( 'FAQ' )
		->add_fields( array(
			Field::make('complex', 'faq', 'FAQ')
			  ->add_fields(array(
			    Field::make('text', 'title', 'Título'),
			    Field::make( 'radio', 'radio', 'Tirar adorno amarelo?')
			    	->set_options( array(
			    		'1' => 'sim',
			    		'2' => 'não',
			    	) ),
			    Field::make('complex', 'item', 'Item')
			    ->add_fields(array(
			    	Field::make('text', 'subtitle', 'Subtítulo'),
			    	Field::make('rich_text', 'description', 'Descrição'),
			    	Field::make('text', 'anchor', 'Âncora'),
			    	Field::make( 'radio', 'radio_description', 'Tirar adorno amarelo?')
			    		->set_options( array(
			    			'1' => 'sim',
			    			'2' => 'não',
			    		) ),
			    ))
			  ))
			))
		->set_render_callback( function ( $block ) {
						// ob_start();
			?>
	 	<div class="faq">
	 		<div class="faq__title-content">
	 		<?php foreach ($block['faq'] as $faq_items) : ?>
	 			<span class="faq__title__title-decoration <?php if($faq_items['radio'] === '1') : ?> faq__title__title-decoration__none <?php endif; ?>"></span>
		 			<div class="faq__title">
		 				<h2 class="faq__title__title">
		 					<?php echo $faq_items['title'] ?>
		 				</h2>
		 				<div class="faq__title__subtitle">
		 					<?php foreach ($faq_items['item'] as $faq_item) : ?>
	 							<a class="faq__title__subtitle-anchor" href="#<?php echo $faq_item['anchor'] ?>">
	 								<h3><?php echo $faq_item['subtitle'] ?></h3>
	 							</a>
		 					<?php endforeach ?>
		 				</div>
		 			</div>
	 		<?php endforeach; ?>
	 		</div>
	 		<?php foreach ($block['faq'] as $faq_items) : ?>
	 			<span class="faq__description-content-decoration"></span>
	 			<div class="faq__description">
 					<?php foreach ($faq_items['item'] as $faq_item) : ?>
 					<div id="<?php echo $faq_item['anchor'] ?>" class="faq__description__item"> 			
 						<h2 class="faq__description__item__title faq__description-decoration-margin <?php if($faq_item['radio_description'] === '1') : ?> faq__description-decoration-margin-none <?php endif; ?>">
 							<?php echo $faq_item['subtitle'] ?>
 						</h2>
 						<div class="faq__description__item__description">
 							<span class="faq__description-decoration <?php if($faq_item['radio_description'] === '1') : ?> faq__description-decoration-none <?php endif; ?>"></span>
 							<?php echo $faq_item['description'] ?>
 						</div>
 					</div>
 					<?php endforeach ?>
	 			</div>
	 		<?php endforeach ?>
	 	</div>
			
 
			<?php

			// return ob_get_flush();
 		} );
}
add_action( 'carbon_fields_register_fields', 'casa_do_estudante_faq' );