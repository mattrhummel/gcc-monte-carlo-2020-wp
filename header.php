<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Monte_Carlo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="http://78bbm3rv7ks4b6i8j3cuklc1-wpengine.netdna-ssl.com/wp-content/uploads/germanna-logo-white.svg" alt="germanna white logo" height="60" width="200">
        </a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link text-center" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-center" href="#sponsorships">Sponsorships</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-center" href="#sponsors">Sponsors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-center" href="#volunteer">Volunteer</a>
            </li>
            <li class="nav-item">
              <button type="button" class="btn btn-light mx-auto" data-toggle="modal" data-target=".bd-example-modal-lg">Become a Sponsor</button>
            </li>
          </ul>
        </div>
      </div>
    </nav>

