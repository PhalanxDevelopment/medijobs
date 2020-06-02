<?php
/**
 * Template Name: Companies Listing Page
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
                    <div class="above_headline"><?php the_field('above_headline'); ?></div>
                    <h1 class="headline uppercase"><?php the_field('title'); ?></h1>
                    <p><?php the_field('text'); ?></p>

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
                <div class="grid__item width-1/24 hide-on-mobile"></div>
                <div class="grid__item width-23/24 mj-form">
                    <h2><?php the_field('recent_articles_title'); ?></h2>
                    <div class="mj-articles">
                    <?php
                    $recent_posts = wp_get_recent_posts(array(
                        'numberposts' => -1, // Number of recent posts thumbnails to display
                        'post_status' => 'publish', // Show only the published posts
                        'post_type' => 'companies'
                    ));
                    foreach($recent_posts as $post) : ?>
                        <div class="mj-article">
                            <div class="mj-article__image">
                                <a href="<?php echo get_permalink($post['ID']); ?>">
                                    <?php echo get_the_post_thumbnail($post['ID'], 'full'); ?>
                                </a>
                            </div>
                            <h3 class="mj-article__title"><a href="<?php echo get_permalink($post['ID']); ?>"><?php echo $post['post_title']; ?></a></h3>
                            <a href="<?php echo get_permalink($post['ID']); ?>" class="mj-article__link">Vezi mai mult</a>
                        </div>
                        
                    <?php endforeach; wp_reset_query(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
<?php get_footer(); ?>