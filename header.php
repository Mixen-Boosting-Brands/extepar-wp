<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo("charset"); ?>">
		<title><?php
  wp_title("");
  if (wp_title("", false)) {
      echo " : ";
  }
  bloginfo("name");
  ?></title>

		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo(
      "name",
  ); ?>" href="<?php bloginfo("rss2_url"); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo("description"); ?>">

    	 <link
                rel="icon"
                type="image/png"
                href="<?php echo esc_url(
                    get_template_directory_uri(),
                ); ?>/favicon-96x96.png"
                sizes="96x96"
        />
        <link rel="icon" type="image/svg+xml" href="<?php echo esc_url(
            get_template_directory_uri(),
        ); ?>/favicon.svg" />
        <link rel="shortcut icon" href="<?php echo esc_url(
            get_template_directory_uri(),
        ); ?>/favicon.ico" />
        <link
            rel="apple-touch-icon"
            sizes="180x180"
            href="<?php echo esc_url(
                get_template_directory_uri(),
            ); ?>/apple-touch-icon.png"
        />
        <meta name="apple-mobile-web-app-title" content="Extepar" />
        <link rel="manifest" href="<?php echo esc_url(
            get_template_directory_uri(),
        ); ?>/site.webmanifest" />

        <link rel="stylesheet" href="<?php echo esc_url(
            get_template_directory_uri(),
        ); ?>/assets/css/styles.css" />

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
 <body>
        <!-- ── Backdrop ─────────────────────────────────────────── -->
        <div id="backdrop"></div>

        <!-- ── Side menu ────────────────────────────────────────── -->
        <div class="menu">
            <a id="cerrar-menu" href="javascript:void(0)">
                <i class="fas fa-times"></i>
            </a>
            <div class="menu-contenido">
                <a class="anchor" id="btn-logo" href="<?php echo esc_url(
                    home_url(),
                ); ?>">
                    <img
                        class="logo img-fluid"
                        alt="Extepar"
                        src="<?php echo esc_url(
                            get_template_directory_uri(),
                        ); ?>/assets/images/logo-light.png"
                    />
                </a>
                <nav>
                    <?php wp_nav_menu( [
                        'theme_location' => 'header-menu',
                        'container'      => false,
                        'menu_id'        => 'navmenu',
                        'menu_class'     => 'list-unstyled mb-0',
                        'depth'          => 1,
                        'fallback_cb'    => false,
                    ] ); ?>
                </nav>
                <div id="contacto-menu">
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:contacto@extepar.com"
                                >contacto@extepar.com</a
                            >
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <a href="tel:+525558762020">55 5876 2020</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- ── Navbar ────────────────────────────────────────────── -->
        <header id="navbar">
            <div class="navbar-inner">
                <a href="<?php echo esc_url(
                    home_url(),
                ); ?>" class="navbar-brand-link">
                    <img
                        id="logo-navbar"
                        class="logo img-fluid"
                        alt="Extepar"
                        src="<?php echo esc_url(
                            get_template_directory_uri(),
                        ); ?>/assets/images/logo-light.png"
                    />
                </a>
                <nav id="nav-desktop" class="d-none d-lg-block">
                    <?php
                    $add_inline_item = function( $classes ) {
                        $classes[] = 'list-inline-item';
                        return $classes;
                    };
                    add_filter( 'nav_menu_css_class', $add_inline_item );
                    wp_nav_menu( [
                        'theme_location' => 'header-menu',
                        'container'      => false,
                        'menu_class'     => 'list-inline mb-0',
                        'depth'          => 1,
                        'fallback_cb'    => false,
                    ] );
                    remove_filter( 'nav_menu_css_class', $add_inline_item );
                    ?>
                </nav>
                <div class="navbar-actions">
                    <a
                        href="#talento"
                        class="btn-nav-cta d-none d-lg-inline-flex"
                        >Talento</a
                    >
                    <a
                        href="#contacto"
                        class="btn-nav-cta d-none d-lg-inline-flex"
                        >Evaluar proyecto</a
                    >
                    <a id="mburger" href="javascript:void(0)" class="d-lg-none">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
            </div>
        </header>
