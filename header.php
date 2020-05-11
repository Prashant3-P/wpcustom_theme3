<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>
       <?php echo get_the_title(); ?> |
	   <?php bloginfo('name') ?>
    </title>
    <?php wp_head(); ?>      
</head>
<body>
	

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  	<div class="container">
  			<div class="row m-auto">
  				<div class="col-12 w-100 text-center">
  					<a class="navbar-brand w-100" href="http://localhost/parikh_wp/wordpress/"><?php bloginfo('name'); ?></a>
			      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			        <span class="oi oi-menu"></span> Menu
			      </button>
  				</div>
  				<div class="col-12 w-100 text-center">

  						<?php 
                             wp_nav_menu( array(
                                   'menu'              => 'primary',
                                   'theme_location'    => 'primary',
                                   'container'         => 'div',
                                   'container_class'   => 'collapse navbar-collapse',
                                   'container_id'      => 'ftco-nav',
                                   'menu_class'        => 'navbar-nav m-auto',
                                   'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                   'walker'            =>  new wp_bootstrap_navwalker())
                               );
                        ?> 
			           
  				</div>

  			</div>
  	</div>
</nav>

