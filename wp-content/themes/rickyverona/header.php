<?php
/**
 * @package RickyVerona
 */
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Ricky Verona - Salon de Belleza</title>
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <meta name="viewport" content="width=device-width">
    <script src="<?php bloginfo( 'template_url' ); ?>/bower_components/modernizr/modernizr.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>   
    <header id="main-header" class="main-header">
        <nav class="navbar navbar-default normal">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand hidden-xs" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                        <img src="<?php bloginfo( 'template_url' ); ?>/img/rickyverona-perruquers-logo.jpg" alt="Ricky Verona Perruquers Logo" class="normal-img wow bounceInDown">
                    </a>
                </div>
				<?php
					wp_nav_menu( array(
						'menu'              => 'primary',
						'theme_location'    => 'primary',
						'depth'             => 2,
						'container'         => 'div',
						'container_class'   => 'collapse navbar-collapse',
						'container_id'      => 'main-nav',
						'menu_class'        => 'nav navbar-nav navbar-right',
						'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						'walker'            => new wp_bootstrap_navwalker())
					);
				?>
               
<!--                 <div class="collapse navbar-collapse" id="main-nav">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#home">Inicio</a></li>
                        <li><a href="#salon">Salón</a></li>
                        <li><a href="#tendencias">Tendencias</a></li>
                        <li><a href="#productos">Productos</a></li>
                        <li><a href="#equipo">Equipo</a></li>
                        <li><a href="#contactar">Contactar</a></li>
                    </ul>
                </div> -->
            </div><!-- /.container-fluid -->
        </nav><!-- /.navbar-default -->
    </header><!-- /.main-header -->

    <div class="container visible-xs">
        <img src="<?php bloginfo( 'template_url' ); ?>/img/rickyverona-perruquers-logo.jpg" class="img-responsive wow bounceInDown" alt="Ricky Verona Perruquers Logo">
    </div><!-- /.container -->    