<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/images/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-16x16.png">
<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/images/favicon/manifest.json">
<?php if ( is_page( array( 'Blog', 'Recent', 'Trending', 'Popular' ) ) || is_category() || is_single() ) { ?>"
    <link href="https://fonts.googleapis.com/css?family=Noticia+Text|Poppins:500,700&display=swap" rel="stylesheet">
<?php } ?>
<meta name="msapplication-TileColor" content="#00C1DE">
<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/images/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#00C1DE">
<?php wp_head(); ?>
</head>
<body  id="body" <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<header id="header" class="mj-header <?php if ( is_page( array( 'Blog', 'Recent', 'Trending', 'Popular' ) ) || is_category() || is_single() ) echo 'blog'; ?>">
    <div class="mj-container">
        <ul id="menu" class="mj-meniu blog_menu hide-on-mobile">
        <?php 
            if ( is_page( array( 'Blog', 'Recent', 'Trending', 'Popular' ) ) || is_category() || is_single() ) {
                wp_list_categories(array(
                    'hierarchical'        => true,
                    'title_li' => ''
                ));
            }
        ?>
        </ul>
        <div class="mj-grid">
            <div class="grid__item width-4/24">
                <a href="/" class="mj-logo"></a>
            </div>
            <div class="grid__item width-11/24">
                <div id="menuToggle">
                    <input type="checkbox" />
                    <span></span>
                    <span></span>
                    <span></span>
                    <?php wp_nav_menu( array(  'container' => 'ul', 'menu_class' => 'mj-meniu',  'theme_location' => 'main-menu' ) ); ?>
                </div>
            </div>
            <div class="grid__item width-1/24 hide-on-mobile"></div>
            <div class="grid__item width-3/24 hide-on-mobile">
                <a href="tel:+40749099291" class="mj-call_to_action">
                    <p class="call_to_action__text">Contactează-ne</p>
                    <p class="call_to_action__link">+4 0749 099291</p>
                </a>
            </div>
            <div class="grid__item width-4/24 hide-on-mobile">
                <button class="mj-btn mj-btn--secondary mj-btn--alt--2">Înregistrează-te</button>
            </div>
            <div class="grid__item width-1/24 hide-on-mobile">
                <a href="https://app.medijobs.ro/login" class="pull-right">
                    Login
                </a>
            </div>
        </div>
    </div>
</header>
<div class="mj-container">
    <div id="cookie_notifier" class="cookie_notifier <?php if ( is_single() ) echo 'blog'; ?>">
        <span id="dismiss" class="cookie_notifier__dismiss"></span>
        <span class="cookie_notifier__content">
            Utilizăm cookie-uri pentru a îmbunătăți experiența dvs. de navigare. Acestea ne permit să ne amintim detaliile de autentificare, să îmbunătățim securitatea, să colectăm statistici, să optimizăm funcționalitatea site-ului și să livrăm conținut adaptat intereselor dvs. Prin continuarea navigării pe site-ul web sunteți de acord cu utilizarea noastră de astfel de cookie-uri conform <a href="<?php echo esc_url( get_page_link( 9106 ) ); ?>">Politicii noastre de confidențialitate</a>.
        </span>
    </div>
</div>
<div id="container">