<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package project-name
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,400;0,500;0,700;1,300&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>
  data-component="class-toggle"
  data-class-toggle-target-class="menu-open">
	<!-- <div id="mobile-menu-overlay"></div> -->
	<header
    id="main-header"
    class="active"
    data-component="collapsible-header">
    <a
      id="logo-anchor"
      class="header-logo"
      href="<?php echo get_home_url(); ?>">
      DOE POR UMA NOVA CASA
    </a>

    <button
      id="mobile-menu-trigger"
      data-component="trigger"
      data-trigger-target="body">
      <span></span>
      <span></span>
      <span></span>
    </button>

    <nav
    	class="header-menu-container"
    	id="main-menu-container"
    	data-component="menu">
      <?php
        wp_nav_menu(array(
          'theme_location' => 'main-menu',
          'menu_id'        => 'main-menu',
        ));
      ?>

      <a
        class="cc-menu-search link link--icon-lg"
        href="<?php echo get_home_url(); ?>?s=">
  
      </a>
    </nav>
    <div class="header-menu-social">
    	<div>
    		<a target="_blank" href="<?php echo carbon_get_theme_option('facebook'); ?>">
    			<?php echo require('resources/icons/facebook.svg'); ?>
    		</a>
    		<a target="_blank" href="<?php echo carbon_get_theme_option('instagram'); ?>">
    			<?php echo require('resources/icons/instagram.svg'); ?>
    		</a>
    	</div>
    	<a target="_blank" href="mailto:<?php echo carbon_get_theme_option('email'); ?>">Fale conosco</a>
    </div>
	  
	</header>
