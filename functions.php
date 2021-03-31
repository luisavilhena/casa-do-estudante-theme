<?php

	function xi_script_enqueue(){
		wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
		wp_enqueue_script('customjs',  get_template_directory_uri() . '/js/index.js', array(), '1.0.0', true );
	}

add_action('wp_enqueue_scripts', 'xi_script_enqueue');


// use Carbon_Fields\Container;
// use Carbon_Fields\Field;

// add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
// function crb_attach_theme_options() {
//     Container::make( 'theme_options', __( 'Theme Options', 'crb' ) )
//         ->add_fields( array(
//             Field::make( 'text', 'crb_text', 'Text Field' ),
//         ) );
// }

// add_action( 'after_setup_theme', 'crb_load' );
// function crb_load() {
//     require_once( 'vendor/autoload.php' );
//     \Carbon_Fields\Carbon_Fields::boot();
// }

// use Carbon_Fields\Container;
// use Carbon_Fields\Field;

// add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
// function crb_attach_theme_options() {
//     Container::make( 'theme_options', __( 'Theme Options', 'crb' ) )
//         ->add_fields( array(
//             Field::make( 'text', 'crb_text', 'Text Field' ),
//         ) );
// }

// add_action( 'after_setup_theme', 'crb_load' );
// function crb_load() {
//     require_once('vendor/autoload.php');
//     \Carbon_Fields\Carbon_Fields::boot();
// }

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    Container::make( 'theme_options', __( 'Theme Options', 'crb' ) )
        ->add_fields( array(
            Field::make( 'text', 'crb_text', 'Text Field' ),
        ) );
}

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
	//define o caminho para o carbon-fields
	define(
		'Carbon_Fields\URL',
		get_template_directory_uri() . '/vendor/htmlburger/carbon-fields'
	);
    require_once( 'vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}







