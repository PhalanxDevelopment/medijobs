<?php
/**
 * Template Name: Blog Tag Page
 * Description: First page of the site
 *
 * @package WordPress
 * @subpackage Medijobs
 */
get_header();
get_sidebar();
?>

<div id="section_1_blog" class="section section_1 section_1--blog">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24 hide-on-mobile"></div>
                <div class="grid__item width-12/24">
                    <div class="above_headline"><?php the_field('above_headline'); ?></div>
                    <h1 class="headline uppercase"><?php the_field('title'); ?></h1>
                    <p><?php the_field('text'); ?></p>

                </div>
                <div class="grid__item width-3/24 hide-on-mobile"></div>
                <div class="grid__item width-8/24">
                    <div id="blog-form" class="mj-register_form mj-form blog-form open">
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
    <?php if(get_field('recent_articles_title')) { ?>
    <div class="section section_blog section_blog_recent">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24 hide-on-mobile"></div>
                <div class="grid__item width-23/24 mj-form">
                    <h2><?php the_field('recent_articles_title'); ?></h2>
                    <div class="mj-articles">
                    <?php
                    $recent_posts = wp_get_recent_posts(array(
                        'numberposts' => 6, // Number of recent posts thumbnails to display
                        'post_status' => 'publish',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'post_tag',
                                'field'=> 'slug',
                                'operator'=> 'IN',
                                'terms'    => array(get_field('blog_tag')),
                            ),
                        ), // Show only the published posts
                    ));

                    foreach($recent_posts as $post) : ?>
                        <div class="mj-article">
                            <div class="mj-article__image">
                                <a href="<?php echo get_permalink($post['ID']); ?>">
                                    <?php echo get_the_post_thumbnail($post['ID'], 'full'); ?>
                                </a>
                            </div>
                            <div class="mj-article__category">
                            <?php $post_categories = get_post_primary_category($post['ID'], 'category');
                                    echo $post_categories['primary_category']->name;
                            ?>
                            </div>
                            <h3 class="mj-article__title"><a href="<?php echo get_permalink($post['ID']); ?>"><?php echo $post['post_title']; ?></a></h3>
                            <a href="<?php echo get_permalink($post['ID']); ?>" class="mj-article__link">Citeste Articolul</a>
                            <?php if(get_field('sponsored', $post['ID'])) { ?>
                                <div class="mj-article__author">
                                    <span>SPONSORIZAT DE </span>
                                    <img class="mj-article__author__image" src="<?php the_field('sponsor_logo', $post['ID']) ?>" alt="">
                                </div>
                            <?php } else { ?>
                                <div class="mj-article__author">
                                    <?php $author_id= get_post_field( 'post_author', $post['ID'] ); ?>
                                    <span>SCRIS DE </span>
                                    <h5 class="mj-article__author__name"><?php echo the_author_meta( 'display_name' , $author_id ); ?></h5>
                                    <?php echo get_avatar( $author_id , 50, '', 'avatar', array('class' => 'mj-article__author__image')); ?>
                                </div>
                            <?php } ?>
                        </div>

                    <?php endforeach; wp_reset_query(); ?>
                    </div>
                    <a href="<?php echo get_home_url(); ?>/blog/recent" class="mj-btn mj-btn--secondary mj-btn--alt">
                        Vedeti toate articolele
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <?php $box = get_field('call_to_action_box');
    if($box['title']) { ?>
    <div class="section section_blog_company">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24"> </div>
                <div class="grid__item width-23/24">
                    <div class="company_bg">
                        <div class="company_box mj-form">
                            <div class="mj-grid">
                                <div class="grid__item width-12/24">
                                    <h3><?php echo $box['title']; ?></h3>
                                    <p><?php echo $box['text']; ?></p>
                                </div>
                                <div class="grid__item width-2/24 hide-on-mobile">
                                </div>
                                <div class="grid__item width-10/24">
                                    <a href="<?php echo $box['link']; ?>" target="_blank" class="mj-btn mj-btn--primary">
                                        <?php echo $box['button_text']; ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>

    <?php if(get_field('most_read_title')) { ?>
    <div class="section section_blog">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24"> </div>
                <div class="grid__item width-23/24">
                    <div class="above_headline"><?php the_field('most_read_above_title'); ?></div>
                    <h2 class="headline light"><?php the_field('most_read_title'); ?></h2>
                    <?php
                        if ( function_exists('wpp_get_mostpopular') ) {

                            $args = array(
                                'range' => 'all',
                                'order_by'=> 'views',
                                'limit' => 6,
                                'stats_author' => 1,
                            );
                            wpp_get_mostpopular( $args );

                        }
                    ?>
                    <a href="<?php echo get_home_url(); ?>/blog/popular" class="mj-btn mj-btn--secondary mj-btn--alt">
                        Vedeti toate articolele
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php }?>
    <?php if(get_field('most_popular_title')) { ?>
    <div class="section section_blog">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24"> </div>
                <div class="grid__item width-23/24">
                <div class="above_headline"><?php the_field('most_popular_above_title'); ?></div>
                    <h2 class="headline light"><?php the_field('most_popular_title'); ?></h2>
                    <?php
                        if (function_exists('wpp_get_mostpopular')) {
                            $args = array(
                                'range' => 'last30days',
                                'order_by'=> 'views',
                                'limit' => 9,
                                'freshness' => 1,
                                'stats_author' => 1,
                            );
                            wpp_get_mostpopular($args);
                        }
                    ?>
                    <a href="<?php echo get_home_url(); ?>/blog/trending" class="mj-btn mj-btn--secondary mj-btn--alt">
                        Vedeti toate articolele
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<?php get_footer(); ?>
