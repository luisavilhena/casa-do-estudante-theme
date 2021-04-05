<?php
use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make('Lista de logo')
  ->set_category($cc_blocks__config->themeId)
  ->add_fields(array(
    Field::make('complex', 'logo_list', 'Lista de Logos')
      ->add_fields(array(
        Field::make('text', 'title', 'Título'),
        Field::make('image', 'logo', 'Logo')
      ))
      ->set_layout('tabbed-horizontal')
      ->set_header_template('<%- $_index + 1 %> <% if (title) { %>- <%- title %><% } %>'),
  ))
  ->set_render_callback(function ($block) {
    ?>
    <ul class="logo-list">
      <?php foreach ($block['logo_list'] as $logolist) : ?>
      <li class="logo-list__item">
        <div class="">
          <img
            class="width-60"
            src="<?php echo wp_get_attachment_image_src($logolist['logo'], 'full')[0]; ?>"
            alt="<?php echo $logolist['title']; ?>">
        </div>
      </li>
      <?php endforeach; ?>
    </ul>
    <?php
  });