<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
<?php wp_head(); ?>
</head>
<body  id="body" <?php body_class(); ?>>
    <div class="mj-container">
        <div id="cookie_notifier" class="cookie_notifier">
            <span id="dismiss" class="cookie_notifier__dismiss"></span>
            <span class="cookie_notifier__content">
                We use cookies to improve your browsing experience as they enable us to remember log-in details, improve security, collect statistics, optimize site functionality and deliver content tailored to your interests. By continuing your navigation on this website, you are consenting to our use of such cookies or other plotters per our <a href="#">Privacy Policy.</a>
            </span>
        </div>
    </div>
<div id="wrapper" class="hfeed">
<header id="header" class="mj-header">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-4/24">
                <a href="/" class="mj-logo"></a>
                <div class="hide-on-desktop">
                    <div class="mj-search"></div>
                    <div class="mj-lang-switcher btn-group" id="langSwitcher">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/RO-Flag.png">
                            <span class="glyphicon glyphicon-chevron-down"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#" title="Select this language"><img src="<?php echo get_template_directory_uri(); ?>/images/RO-Flag.png" style="margin-left:11px;"></a>
                            </li>
                            <li>
                                <a href="#" title="Select this language"><img src="<?php echo get_template_directory_uri(); ?>/images/RO-Flag.png" style="margin-left:11px;"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="grid__item width-9/24">
                <div id="menuToggle">
                    <input type="checkbox" />
                    <span></span>
                    <span></span>
                    <span></span>
                    <?php wp_nav_menu( array(  'container' => 'ul', 'menu_class' => 'mj-meniu',  'theme_location' => 'main-menu' ) ); ?>
                </div>
            </div>
            <div class="grid__item width-3/24 hide-on-mobile"></div>
            <div class="grid__item width-3/24 hide-on-mobile">
                <a href="tel:+40749099291" class="mj-call_to_action">
                    <p class="call_to_action__text">Get in touch with us</p>
                    <p class="call_to_action__link">+4 0749 099291</p>
                </a>
            </div>
            <div class="grid__item width-4/24 hide-on-mobile">
                <button class="mj-btn mj-btn--secondary mj-btn--alt--2">Get a free account</button>
            </div>
            <div class="grid__item width-1/24 hide-on-mobile">
                <a href="#" class="pull-right">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Login.png" alt="Link Logo">
                </a>
            </div>
        </div>
    </div>
</header>
<div id="container">