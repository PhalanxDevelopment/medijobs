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
                        <h3><?php the_field('form_title'); ?></h3>
                        <p><?php the_field('form_text'); ?></p>
                        <?php
                            $formId = get_field('hubspot_form_id');
                            $portalId = get_field('hubspot_portal_id');
                        ?>
                        <?php echo do_shortcode('[hubspot type=form portal='.$portalId.' id='.$formId.']'); ?>
                        <div class="mj-grid">
                            <div class="grid__item width-12/24">
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
                            );
                            wpp_get_mostpopular( $args );
                        
                        }
                    ?>
                </div>
            </div>
        </div>  
    </div>
<?php get_footer(); ?>