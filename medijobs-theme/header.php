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
<?php if ( is_page( array( 'Blog', 'Recent', 'Trending', 'Popular' ) ) || is_category() || is_single() ) { ?>
    <link href="https://fonts.googleapis.com/css?family=Noticia+Text|Poppins:500,700&display=swap" rel="stylesheet">
<?php } ?>
<meta name="msapplication-TileColor" content="#00C1DE">
<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/images/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#00C1DE">
<?php wp_head(); ?>
<!-- Facebook Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '598475776995322');
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=598475776995322&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-65341808-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-65341808-1');
</script>
</head>
<body  id="body" <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<header id="header" class="mj-header <?php if ( is_page( array( 'Blog', 'Recent', 'Trending', 'Popular' ) ) || is_category() || is_single() ) echo 'blog'; ?> <?php if ( is_page( array( 'Conference') )) echo 'conference'; ?>">
    <div class="mj-container">
        <ul id="menu" class="mj-meniu blog_menu hide-on-mobile">
            <?php 
                if ( is_page( array( 'Blog', 'Recent', 'Trending', 'Popular' ) ) || is_category() || is_singular('post') ) {
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
                <a href="https://app.medijobs.ro/register" class="mj-btn mj-btn--secondary mj-btn--alt--2" style="font-weight: bold;padding-top: 13px;">Înregistrează-te</a>
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