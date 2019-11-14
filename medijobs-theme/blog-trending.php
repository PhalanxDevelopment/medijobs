<?php
/**
 * Template Name: Blog Trending Articles Page
 * Description: First page of the site
 *
 * @package WordPress
 * @subpackage Medijobs
 */
get_header();
?>

<div id="section_1_blog" class="section section_1 section_1--blog">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24 hide-on-mobile"></div>
                <div class="grid__item width-12/24">
                    <div class="above_headline">WELCOME</div>
                    <h1 class="headline uppercase">Bun venit pe Blogul MEDIjobs.</h1>
                    <p>Vrem să te ajutăm să îți construiești cariera medicală la care ai visat! Află cum să realizezi un CV pentru a-ți găsi un loc de muncă, cum să îți negociezi salariul, sfaturi practice pentru îmbunătățirea comunicării cu pacienții și echipa medicală, dar și multe altele.</p>

                </div>
                <div class="grid__item width-3/24 hide-on-mobile"></div>
                <div class="grid__item width-8/24">
                    <div id="blog-form" class="mj-register_form mj-form blog-form">
                        <div id="close-form" class="close hide-on-desktop"></div>
                        <h3>Newsletter săptămânal</h3>
                        <p>Nu pierde nici un articol, săptămânal îți trimitem o recapitulare cu cele mai noi publicări.</p>
                        <input class="mj-input" type="text" placeholder="Enter email" >
                        <div class="mj-grid">
                            <div class="grid__item width-12/24">
                                <button class="mj-btn mj-btn--primary mj-btn--alt--2 uppercase">
                                    Abonează-te
                                </button>
                            </div>
                            <div class="grid__item width-12/24 hide-on-mobile">
                                <div class="newsletter_logo"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section_blog section_blog_recent">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24"> </div>
                <div class="grid__item width-23/24">
                    <div class="above_headline">BLOG</div>
                    <h1 class="headline light">Cele mai citite articole.</h1>
                    <?php
                        if ( function_exists('wpp_get_mostpopular') ) {
                        
                            $args = array(
                                'range' => 'weekly',
                                'order_by'=> 'views',
                                'limit' => 60,
                                'freshness' => 1,
                                'stats_author' => 1,
                                'post_type' => 'post',
                            );
                            wpp_get_mostpopular( $args );
                        
                        }
                    ?>
                </div>
            </div>
        </div>  
    </div>
<?php get_footer(); ?>