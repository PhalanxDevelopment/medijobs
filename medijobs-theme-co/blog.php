<?php
/**
 * Template Name: Blog Page
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
                <div class="grid__item width-1/24 hide-on-mobile"></div>
                <div class="grid__item width-23/24 mj-form">
                    <h2>Our Latest Articles.</h2>
                    <div class="mj-articles">
                    <?php
                    $recent_posts = wp_get_recent_posts(array(
                        'numberposts' => 6, // Number of recent posts thumbnails to display
                        'post_status' => 'publish' // Show only the published posts
                    ));
                    foreach($recent_posts as $post) : ?>
                        <div class="mj-article">
                            <div class="mj-article__image">
                                <a href="<?php echo get_permalink($post['ID']); ?>">
                                    <?php echo get_the_post_thumbnail($post['ID'], 'full'); ?>
                                </a>
                            </div>
                            <div class="mj-article__category">
                                <?php  $categories = get_the_category($post['ID']);
                                    echo $categories[0]->cat_name;
                                ?>
                            </div>
                            <h3 class="mj-article__title"><a href="<?php echo get_permalink($post['ID']); ?>"><?php echo $post['post_title']; ?></a></h3>
                            <a href="<?php echo get_permalink($post['ID']); ?>" class="mj-article__link">READ ON</a>
                            <div class="mj-article__author">
                                <?php $author_id= get_post_field( 'post_author', $post['ID'] ); ?>
                                <span>WRITEN BY </span>
                                <h5 class="mj-article__author__name"><?php echo the_author_meta( 'display_name' , $author_id ); ?></h5>
                                <?php echo get_avatar( $author_id , 50, '', 'avatar', array('class' => 'mj-article__author__image')); ?>
                            </div>
                        </div>
                        
                    <?php endforeach; wp_reset_query(); ?>
                    </div>
                    <a href="<?php echo get_home_url(); ?>/blog/recent" class="mj-btn mj-btn--secondary mj-btn--alt">
                        VIEW ALL ARTICLES
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="section section_blog_company">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24"> </div>
                <div class="grid__item width-23/24">
                    <div class="company_bg">
                        <div class="company_box mj-form">
                            <div class="mj-grid">
                                <div class="grid__item width-12/24">
                                    <h3>ARE YOU A COMPANY OR A CANDIDATE?</h3>
                                    <p>Companiile medicale din toata Romania au apelat la MEDIjobs pentru a angaja cu succes specialisti medicali.</p>
                                </div>
                                <div class="grid__item width-2/24 hide-on-mobile">
                                </div>
                                <div class="grid__item width-10/24">
                                    <a href="https://app.medijobs.co/register/" target="_blank" class="mj-btn mj-btn--primary">
                                        GET YOUR FREE ACCOUNT
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--
    <div class="section section_blog section_dual">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24"> </div>
                <div class="grid__item width-23/24">
                    <div class="above_headline">BLOG</div>
                    <h1 class="headline light">Checkout Our Resources.</h1>
                    <div class="mj-articles">
                        <div class="mj-article">
                            <div class="mj-article__image">
                                <img src="http://cst-soft.com/medijobs/images/blog_1.png" alt="">
                            </div>
                            <h3 class="mj-article__title">Healthcare subspecialties where you can work as a registered nurse – Part 4</h3>
                            <a href="#" class="mj-article__link mj-article__link--download">Download Ebook</a>
                            <div class="mj-article__author">
                                <span>WRITTEN BY</span>
                                <h5 class="mj-article__author__name">Otilia Dobos</h5>
                                <img src="http://cst-soft.com/medijobs/images/blog_1_author.png" class="mj-article__author__image" alt="Otilia Dobos Image">
                            </div>
                        </div>
                        <div class="mj-article">
                            <div class="mj-article__image">
                                <img src="http://cst-soft.com/medijobs/images/blog_2.png" alt="">
                            </div>
                            <h3 class="mj-article__title">Actele necesare pentru eliberarea Certificatului de Membru de OAMGMAMR […]</h3>
                            <a href="#" class="mj-article__link mj-article__link--download">Download Ebook</a>
                            <div class="mj-article__author">
                                <span>WRITTEN BY</span>
                                <h5 class="mj-article__author__name">Alexandra Grigorescu</h5>
                                <img src="http://cst-soft.com/medijobs/images/blog_1_author.png" class="mj-article__author__image" alt="Otilia Dobos Image">
                            </div>
                        </div>
                        <div class="mj-article">
                            <div class="mj-article__image">
                                <img src="http://cst-soft.com/medijobs/images/blog_1.png" alt="">
                            </div>
                            <h3 class="mj-article__title">Responsabilitatea unui specialist în resurse umane, ȋn procesul de recrutare a personalului medical</h3>
                            <a href="#" class="mj-article__link mj-article__link--download">Download Ebook</a>
                            <div class="mj-article__author">
                                <span>WRITTEN BY</span>
                                <h5 class="mj-article__author__name">Roxana Ruscior</h5>
                                <img src="http://cst-soft.com/medijobs/images/blog_1_author.png" class="mj-article__author__image" alt="Otilia Dobos Image">
                            </div>
                        </div>
                    </div>
                    <button href="#" class="mj-btn mj-btn--secondary mj-btn--alt">
                        View all recent Resources
                    </button>
                </div>
            </div>
        </div>  
    </div>
    -->
    <div class="section section_blog">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24"> </div>
                <div class="grid__item width-23/24">
                    <div class="above_headline">BLOG</div>
                    <h1 class="headline light">All Time Favorites.</h1>
                    <?php
                        if ( function_exists('wpp_get_mostpopular') ) {
                        
                            $args = array(
                                'range' => 'all',
                                'order_by'=> 'views',
                                'limit' => 6,
                                'stats_author' => 1,
                                'post_type' => 'post',
                            );
                            wpp_get_mostpopular( $args );
                        
                        }
                    ?>
                    <a href="<?php echo get_home_url(); ?>/blog/popular" class="mj-btn mj-btn--secondary mj-btn--alt">
                        VIEW ALL ARTICLES
                    </a>
                </div>
            </div>
        </div>  
    </div>
    <div class="section section_blog">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24"> </div>
                <div class="grid__item width-23/24">
                    <div class="above_headline">BLOG</div>
                    <h1 class="headline light"> Trending Articles.</h1>
                    <?php
                        if (function_exists('wpp_get_mostpopular')) {
                            $args = array(
                                'range' => 'last30days',
                                'order_by'=> 'views',
                                'limit' => 9,
                                'freshness' => 1,
                                'stats_author' => 1,
                                'post_type' => 'post',
                            );
                            wpp_get_mostpopular($args);
                        }
                    ?>
                    <a href="<?php echo get_home_url(); ?>/blog/trending" class="mj-btn mj-btn--secondary mj-btn--alt">
                        VIEW ALL ARTICLES
                    </a>
                </div>
            </div>
        </div>  
    </div>
<?php get_footer(); ?>