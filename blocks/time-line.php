<?php
 
use Carbon_Fields\Block;
use Carbon_Fields\Field;
 
add_action( 'after_setup_theme', 'casa-do-estudante' );
 
function casa_do_estudante_time_line() {
	Block::make( 'Linha do tempo' )
		->add_fields( array(
			Field::make('text', 'title', 'Título'),
			Field::make('complex', 'anos', 'Anos')
			  ->add_fields(array(
			    Field::make('rich_text', 'ano', 'Ano'),
			    Field::make('rich_text', 'text', 'Descrição'),
			    Field::make('image', 'img', 'Imagem'),
			    Field::make('image', 'figure', 'Imagem com descrição'),
			    Field::make('rich_text', 'figcaption', 'Legenda'),
			  ))
		) )
		->set_render_callback( function ( $blocks ) {
 
			// ob_start();
			?>
 
			<div class="time-line">
				<h2 class="time-line__title"> <?php echo $blocks['title']; ?></h2>
				<?php foreach ($blocks['anos'] as $block) : ?>
				<div class="time-line__content">
					<div class="time-line__content-year">
						<div class="time-line__content-year__year">
							<span class="decoration decoration-bg"></span>
							<div>
								<?php echo $block['ano']  ?>							
							</div>
						</div>
						<div class="time-line__content-year__decoration">
							<span class="decoration-height"></span>
						</div>
					</div>
					<div class="time-line__content-description">
						<div class="time-line__content-description__text">
							<?php echo $block['text']; ?>
						</div>
						<?php if ($block['img']) :  ?>
						<div class="time-line__content-description__img">
							<img src="<?php echo wp_get_attachment_image_src($block['img'], 'ap_image_desktop_full_no_crop')[0]; ?>">
						</div>
						<?php endif;?>
						<?php if ($block['figure']) :  ?>
						<div class="time-line__content-description__figure">
							<img src="<?php echo wp_get_attachment_image_src($block['figure'], 'ap_carousel_image_desktop_full_no_crop')[0]; ?>">
							<div>
								<?php echo $block['figcaption']; ?>
							</div>
						</div>
						<?php endif;?>
					</div>
				</div>
				<?php endforeach;  ?>
			</div>
			<?php
 
			// return ob_get_flush();
		} );
}
add_action( 'carbon_fields_register_fields', 'casa_do_estudante_time_line' );