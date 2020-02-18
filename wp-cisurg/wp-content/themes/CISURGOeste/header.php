<!DOCTYPE html>
<html lang="pt-br">


  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url');?>">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.css">
    <!--FONT-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,600" rel="stylesheet">

    <title><?php bloginfo( 'name' ); ?><?php wp_title(); ?></title>

    <?php wp_head(); ?>

  </head>


  <body>

    <!--HEADER BEGIN-->
    <header class="header ">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-2">
            <a href="<?php bloginfo( 'home' ) ?>">
              <img class="img-fluid mx-auto d-block logo" src="<?php echo get_theme_mod( 'm1_logo' ); ?>  " alt="Logo CIS-URG Oeste" title="Logo CIS-URG Oeste"/>
            </a>
          </div>
          <div class="col-md-8">
            <?php get_search_form(); ?>
          </div>
          <div class="col-md-2 login-header form-row">

            <div class="dropdown">
              <button class="btn btn-info btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-display="static" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Acesso restrito
              </button>
              <div class="dropdown-menu p-4" aria-labelledby="dropdownMenuButton">
                <?php
                  if(is_active_sidebar('sidebar-login')){
                    dynamic_sidebar('sidebar-login');
                  }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--MENU-->
      <div class="container-fluid bg-samu">
        <div class="container">
          <div class="col-md-12">
            <!--MENU BEGIN-->
            <nav class="navbar navbar-expand-xl navbar-dark " role="navigation">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
              </button>

              <!--MENU DINAMICO BEGIN-->
              <?php

              wp_nav_menu( array(
              	'theme_location'  => 'primary',
              	'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
              	'container'       => 'div',
              	'container_class' => 'collapse navbar-collapse',
              	'container_id'    => 'conteudoNavbarSuportado',
              	'menu_class'      => 'navbar-nav mr-auto',
              	'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
              	'walker'          => new WP_Bootstrap_Navwalker(),
              ) );

              ?>
              <!--MENU DINAMICO END-->

            </nav>
            <!--MENU END-->
          </div>
        </div>
      </div>
    </header>
    <!--HEADER END-->
