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
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-11698249-9"></script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T2KLMW');</script>
<!-- End Google Tag Manager -->

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T2KLMW"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</head>

<body <?php body_class(); ?>>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">   
      <div class="container">
        <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
          <img src="https://78bbm3rv7ks4b6i8j3cuklc1-wpengine.netdna-ssl.com/wp-content/uploads/germanna-logo-white.svg" alt="germanna white logo" height="60" width="200">
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
              <a class="nav-link text-center" href="#prize-donations">Prize Donations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-center" href="#volunteer">Volunteer</a>
            </li>
            <li class="nav-item mx-auto">
              <button type="button" class="btn btn-light mx-auto ml-md-3" data-toggle="modal" data-target=".bd-example-modal-lg">Become a Sponsor</button>
            </li>
          </ul>
        </div>
      </div>
    </nav>

