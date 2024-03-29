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
	<meta name="viewport" content="width=device-width">
	<meta name="viewport" content="initial-scale=1">
	<meta name="viewport" content="maximum-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,400;0,500;0,700;1,300&display=swap" rel="stylesheet">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <title>Casa do Estudante</title>

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
      CASA DO ESTUDANTE
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
      <?php
      if(is_front_page()):
      ?>
      <div class="text-fixed">
        Conheça a moradia para estudantes hipossuficientes da Faculdade de Direito da USP e nossa campanha de financiamento
      </div>
      <?php 
      endif;
      ?>
    </nav>
    
    <div class="header-menu-social">
    	<div>
    		<a target="_blank" href="<?php echo carbon_get_theme_option('facebook'); ?>">
    			<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M0 15C0 6.71573 6.71573 0 15 0C23.2843 0 30 6.71573 30 15C30 23.2843 23.2843 30 15 30C6.71573 30 0 23.2843 0 15ZM16.5635 23.8197V15.6589H18.8162L19.1147 12.8466H16.5635L16.5673 11.4391C16.5673 10.7056 16.637 10.3126 17.6905 10.3126H19.0988V7.5H16.8457C14.1395 7.5 13.1869 8.86425 13.1869 11.1585V12.8469H11.5V15.6592H13.1869V23.8197H16.5635Z" fill="black"/>
          </svg>

    		</a>
    		<a target="_blank" href="<?php echo carbon_get_theme_option('instagram'); ?>">
    			<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M0 15C0 6.71573 6.71573 0 15 0C23.2843 0 30 6.71573 30 15C30 23.2843 23.2843 30 15 30C6.71573 30 0 23.2843 0 15ZM15.0007 7C12.8281 7 12.5554 7.0095 11.702 7.04833C10.8504 7.08733 10.269 7.22217 9.76036 7.42C9.23419 7.62434 8.78785 7.89768 8.34318 8.34251C7.89818 8.78719 7.62484 9.23352 7.41984 9.75953C7.2215 10.2684 7.0865 10.8499 7.04817 11.7012C7.01 12.5546 7 12.8274 7 15.0001C7 17.1728 7.00967 17.4446 7.04833 18.298C7.0875 19.1496 7.22234 19.731 7.42 20.2396C7.62451 20.7658 7.89784 21.2121 8.34268 21.6568C8.78718 22.1018 9.23352 22.3758 9.75936 22.5802C10.2684 22.778 10.8499 22.9128 11.7014 22.9518C12.5547 22.9907 12.8272 23.0002 14.9998 23.0002C17.1726 23.0002 17.4444 22.9907 18.2978 22.9518C19.1495 22.9128 19.7315 22.778 20.2405 22.5802C20.7665 22.3758 21.2121 22.1018 21.6567 21.6568C22.1017 21.2121 22.375 20.7658 22.58 20.2398C22.7767 19.731 22.9117 19.1495 22.9517 18.2981C22.99 17.4448 23 17.1728 23 15.0001C23 12.8274 22.99 12.5547 22.9517 11.7014C22.9117 10.8497 22.7767 10.2684 22.58 9.7597C22.375 9.23352 22.1017 8.78719 21.6567 8.34251C21.2116 7.89751 20.7666 7.62417 20.24 7.42C19.73 7.22217 19.1483 7.08733 18.2966 7.04833C17.4433 7.0095 17.1716 7 14.9983 7H15.0007Z" fill="black"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M14.2831 8.44168C14.4961 8.44135 14.7337 8.44168 15.0007 8.44168C17.1368 8.44168 17.3899 8.44935 18.2334 8.48768C19.0135 8.52335 19.4368 8.65368 19.7188 8.76319C20.0921 8.90819 20.3583 9.08152 20.6381 9.36152C20.9181 9.64153 21.0915 9.9082 21.2368 10.2815C21.3463 10.5632 21.4768 10.9865 21.5123 11.7665C21.5507 12.6099 21.559 12.8632 21.559 14.9983C21.559 17.1333 21.5507 17.3866 21.5123 18.2299C21.4767 19.01 21.3463 19.4333 21.2368 19.715C21.0918 20.0883 20.9181 20.3541 20.6381 20.634C20.3581 20.914 20.0923 21.0873 19.7188 21.2323C19.4371 21.3423 19.0135 21.4723 18.2334 21.508C17.3901 21.5463 17.1368 21.5547 15.0007 21.5547C12.8646 21.5547 12.6114 21.5463 11.7681 21.508C10.988 21.472 10.5647 21.3416 10.2825 21.2321C9.9092 21.0871 9.64253 20.9138 9.36252 20.6338C9.08252 20.3538 8.90919 20.0878 8.76385 19.7143C8.65435 19.4326 8.52385 19.0093 8.48835 18.2293C8.45002 17.3859 8.44235 17.1326 8.44235 14.9963C8.44235 12.8599 8.45002 12.6079 8.48835 11.7646C8.52402 10.9845 8.65435 10.5612 8.76385 10.2792C8.90885 9.90586 9.08252 9.63919 9.36252 9.35919C9.64253 9.07919 9.9092 8.90585 10.2825 8.76052C10.5645 8.65052 10.988 8.52052 11.7681 8.48468C12.5061 8.45135 12.7921 8.44135 14.2831 8.43968V8.44168ZM19.2711 9.77003C18.7411 9.77003 18.3111 10.1995 18.3111 10.7297C18.3111 11.2597 18.7411 11.6897 19.2711 11.6897C19.8011 11.6897 20.2311 11.2597 20.2311 10.7297C20.2311 10.1997 19.8011 9.77003 19.2711 9.77003ZM15.0007 10.8917C12.7319 10.8917 10.8924 12.7312 10.8924 15.0001C10.8924 17.2689 12.7319 19.1076 15.0007 19.1076C17.2696 19.1076 19.1085 17.2689 19.1085 15.0001C19.1085 12.7312 17.2696 10.8917 15.0007 10.8917Z" fill="black"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M15.0008 12.3334C16.4734 12.3334 17.6674 13.5272 17.6674 15.0001C17.6674 16.4728 16.4734 17.6668 15.0008 17.6668C13.5279 17.6668 12.3341 16.4728 12.3341 15.0001C12.3341 13.5272 13.5279 12.3334 15.0008 12.3334Z" fill="black"/>
          </svg>
    		</a>
    	</div>
    	<a target="_blank" href="<?php echo carbon_get_theme_option('email'); ?>">Fale conosco</a>
    </div>
	  
	</header>
