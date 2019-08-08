<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
	<?php wp_head(); ?>
</head>
<body>
	<header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <?php 
              	wp_nav_menu( array( 
              		'theme_location' => 'main-nav',
              		'menu_class' => 'list-inline',
              	) );
              ?>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contact</h4>
              <ul class="list-inline">
                <li class="list-inline-item"><a href="#" class="text-white"><i class="fab fa-facebook-f"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-white"><i class="fab fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-white"><i class="fab fa-youtube"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="<?php echo home_url(); ?>" class="navbar-brand d-flex align-items-center">
            <i class="fas fa-fire mr-1"></i>
            <strong>Flame</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>
