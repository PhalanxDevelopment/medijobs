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
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-65341808-2"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-65341808-2');
</script>
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
    fbq('init', '348883185969842');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=348883185969842&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
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
                <a href="/" class="mj-logo co"></a>
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
                <a href="tel:+9177174356" class="mj-call_to_action">
                    <p class="call_to_action__text">Get in touch with us</p>
                    <p class="call_to_action__link">+917-717-4356</p>
                </a>
            </div>
            <div class="grid__item width-4/24 hide-on-mobile">
                <a href="https://app.medijobs.co/register" class="mj-btn mj-btn--secondary mj-btn--alt--2" style="font-weight: bold;padding-top: 13px;">Sign up</a>
            </div>
            <div class="grid__item width-1/24 hide-on-mobile">
                <a href="https://app.medijobs.co/login" class="pull-right">
                    Login
                </a>
            </div>
        </div>
    </div>
</header>
<div class="mj-container">
    <div id="cookie_notifier" class="cookie_notifier">
        <span id="dismiss" class="cookie_notifier__dismiss"></span>
        <span class="cookie_notifier__content">
            We use cookies to improve your browsing experience as they enable us to remember log-in details, improve security, collect statistics, optimize site functionality and deliver content tailored to your interests. By continuing your navigation on this website, you are consenting to our use of such cookies or other plotters per our <a href="<?php echo esc_url( get_page_link( 3 ) ); ?>">Privacy Policy.</a>
        </span>
    </div>
</div>
<div id="container">