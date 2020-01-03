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
                    <div class="above_headline">Welcome to</div>
                    <h1 class="headline uppercase">Medijobs Blog</h1>
                    <p>Whether you are starting your medical career or are a seasoned professional, we help you build and grow the medical career you desire. Discover how to write your CV, prepare for your interviews, negotiate your salary, improve communication with your patients and many other tips on our blog.</p>

                </div>
                <div class="grid__item width-3/24 hide-on-mobile"></div>
                <div class="grid__item width-8/24">
                <div id="blog-form" class="mj-register_form mj-form blog-form">
                        <div id="close-form" class="close hide-on-desktop"></div>
                        <h3>GET WEEKLY UPDATES.</h3>
                        <p>Never miss an update, we send a weekly recap of all our articles published.</p>
                        <?php echo do_shortcode('[hubspot type=form portal=5748888 id=edd3916d-4059-4981-986e-36889b6b1681]'); ?>
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
                    <h1 class="headline light">Trending Articles</h1>
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