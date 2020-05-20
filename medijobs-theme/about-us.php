<?php
/**
 * Template Name: About us Page
 * Description: First page of the site
 *
 * @package WordPress
 * @subpackage Medijobs
 */
get_header();
?>
<div id="section_1" class="section section_1">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-1/24 hide-on-mobile"></div>
            <div class="grid__item width-4/24">
                <h1 class="headline uppercase"><?php the_field('hero_title'); ?></h1>
            </div>
            <div class="grid__item width-19/24">
                <div class="secton_bg_image about_us">
                    <?php
                        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                            the_post_thumbnail( 'full', [ 'alt' => esc_html ( get_the_title() ) ] ); 
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="mj-grid hide-on-desktop">
            <div class="grid__item width-19/24">
                <div class="sub_section">CHECKOUT OUR LOVELY OFFICES</div>
            </div>
            <div class="grid__item width-4/24">
            </div>
        </div>
    </div>
</div>
<div id="section_2" class="section section_about-us_2">
    <div class="mj-container">
        <div class="mj-grid reverse_order">
            <div class="grid__item width-1/24 hide-on-mobile"></div>
            <div class="grid__item width-6/24">
                <div class="about_us_text--bigger">
                    <?php the_field('about_us_text'); ?>
                </div>
                <div class="about_us_text--blue">
                    <?php the_field('about_us_blue_texy'); ?>
                </div>
            </div>
            <div class="grid__item width-2/24 hide-on-mobile"></div>
            <div class="grid__item width-15/24">
                <div class="mj-collage mj-collage-four">
                    <img class="mj-collage__img mj-collage__img--portrait-big" src="<?php the_field('image_4'); ?>" alt="">
                    <img class="mj-collage__img mj-collage__img--portrait-small" src="<?php the_field('image_3'); ?>" alt="">
                    <img class="mj-collage__img mj-collage__img--landscape-small" src="<?php the_field('image_1'); ?>" alt="">
                    <img class="mj-collage__img mj-collage__img--lanscape-big" src="<?php the_field('image_2'); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
$adress = get_field('adress'); 
if($adress) { ?>
<div id="section_3" class="section section_about-us_3">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-1/24 hide-on-mobile"></div>
            <div class="grid__item width-23/24">
                <div class="about_us_map">
                    <div class="about_us_map__label">
                        <h3><?php echo $adress['title']?></h3>
                    </div>
                    <div class="about_us_map__adress">
                        <div class="about_us_map_adress-field">
                            <div class="about_us_map_adress-field__label"><?php echo $adress['adress_title']?></div>
                            <div class="about_us_map_adress-field__value"><?php echo $adress['adress']?></div>
                        </div>
                        <div class="about_us_map_adress-field">
                            <div class="about_us_map_adress-field__label"><?php echo $adress['phone_title']?></div>
                            <div class="about_us_map_adress-field__value"><a href="tel:<?php echo $adress['phone'] ?>"><?php echo $adress['phone']?></a></div>
                        </div>
                        <div class="about_us_map_adress-field about_us_map_adress-field--last">
                            <div class="about_us_map_adress-field__label"><?php echo $adress['email_title']?></div>
                            <div class="about_us_map_adress-field__value"><a href="mailto:<?php echo $adress['email']?>"><?php echo $adress['email']?></a></div>
                        </div>
                    </div>
                    <div class="about_us_map__google_map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2848.8654091934554!2d26.102565315381632!3d44.43592297910228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b202686650489f%3A0x1e5613281b2edb6f!2sMedijobs%20Romania!5e0!3m2!1sen!2sro!4v1580395412857!5m2!1sen!2sro" width="100%" height="472" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<div id="section_3" class="section section_about-us_3">
    <div class="mj-container">
        <div class="mj-grid">
        <div class="grid__item width-2/24 hide-on-mobile"></div>
        <div class="grid__item width-20/24">
            <?php $meetTheTeam = get_field('meet_the_team_box');?>
            <div class="team_glossary">
                <div class="team_glossary__header">
                    <div class="team_glossary__person team_glossary__person--manager">
                        <div class="team_glossary__person-image"><img src="<?php echo $meetTheTeam['first_person_image'] ?>" alt="<?php echo $meetTheTeam['first_person_name'] ?>"></div>
                        <div class="team_glossary__person-name"><?php echo $meetTheTeam['first_person_name'] ?></div>
                        <div class="team_glossary__person-position"><?php echo $meetTheTeam['first_person_position'] ?></div>
                        <div class="team_glossary__person-link"><a href="<?php echo $meetTheTeam['first_person_linkedin'] ?>">Linkedin</a></div>
                    </div>
                    <h2>  
                        <?php echo $meetTheTeam['title'] ?>
                    </h2>
                    <div class="team_glossary__person team_glossary__person--manager">
                        <div class="team_glossary__person-image"><img src="<?php echo $meetTheTeam['second_person_image'] ?>" alt="<?php echo $meetTheTeam['second_person_name'] ?>"></div>
                        <div class="team_glossary__person-name"><?php echo $meetTheTeam['second_person_name'] ?></div>
                        <div class="team_glossary__person-position"><?php echo $meetTheTeam['second_person_position'] ?></div>
                        <div class="team_glossary__person-link"><a href="<?php echo $meetTheTeam['second_person_linkedin'] ?>">Linkedin</a></div>
                </div>
                </div>
                <div class="team_glossary__body">
                <?php 
                    $args = array(  
                        'post_type' => 'team-member',
                        'post_status' => 'publish',
                        'posts_per_page' => -1, 
                    );

                    $loop = new WP_Query( $args ); 
                        
                    while ( $loop->have_posts() ) : $loop->the_post();  ?>
                    <div class="team_glossary__person">
                        <div class="team_glossary__person-image team_glossary__person-image--has_hover">
                            <img class="default_image" src="<?php the_field('profile_image') ?>">
                            <img class="hover_image" src="<?php the_field('hover_image') ?>">
                        </div>
                        <div class="team_glossary__person-name"><?php the_title() ?></div>
                        <div class="team_glossary__person-position"><?php the_content(); ?></div>
                        <div class="team_glossary__person-link"><a href="<?php the_field('linkedin_url') ?>">Linkedin</a></div>
                    </div>
                    <?php endwhile;

                    wp_reset_postdata(); 
                    ?>
                </div>
                <div class="team_glossary__footer">
                    <div class="clearfix"></div>
                    <h3><?php the_field('join_our_team_text'); ?></h3>
                </div>
            </div>
        </div>
        <div class="grid__item width-2/24 hide-on-mobile"></div>
        </div>
    </div>
</div>
<?php if(get_field('work_with_us_title')) { ?>
<div id="section_4" class="section section_about-us_4">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-1/24 hide-on-mobile"></div>
            <div class="grid__item width-6/24">
                <h3><?php the_field('work_with_us_title'); ?></h3>
                    <?php the_field('work_with_us_text'); ?>
                <a href="<?php the_field('work_with_us_button_link'); ?>" class="mj-btn mj-btn--secondary mj-btn--alt--2"><?php the_field('work_with_us_button_text'); ?></a>
            </div>
            <div class="grid__item width-2/24 hide-on-mobile"></div>
            <div class="grid__item width-14/24">
                <div class="mj-jobs">
                <?php 
                    $args = array(  
                        'post_type' => 'cariere',
                        'post_status' => 'publish',
                        'posts_per_page' => 4, 
                    );

                    $loop = new WP_Query( $args ); 
                        
                    while ( $loop->have_posts() ) : $loop->the_post();  ?>
                    <a href="<?php the_permalink(); ?>" class="mj-jobs__item">
                        <div class="mj-jobs__item-position">
                            <?php the_title(); ?>
                        </div>
                        <div class="mj-jobs__item-location">
                            <?php the_field('location'); ?>
                        </div>
                        <div class="mj-jobs__item-department">
                            <?php the_field('department'); ?>
                        </div>
                        <div class="mj-jobs__item-type">
                            <?php the_field('type'); ?>
                        </div>
                    </a>
                    <?php endwhile;
                        wp_reset_postdata(); 
                    ?>
                </div>
            </div>
            <div class="grid__item width-1/24 hide-on-mobile"></div>
        </div>
    </div>
</div>
<?php } ?>
<div id="section_5" class="section section_about-us_5">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-1/24 hide-on-mobile"></div>
            <div class="grid__item width-23/24">
                <h3><?php the_field('company_values_title'); ?></h3>
                <div class="about-us_boxes">
                    <div class="about-us_box about-us_box--left">
                        <?php $box1 = get_field('blue_box_1'); ?> 
                        <p><?php echo $box1['text']; ?> </p>
                        <img src="<?php echo $box1['image']; ?> " alt="">
                    </div>
                    <div class="about-us_box">
                        <?php $box2 = get_field('blue_box_2'); ?> 
                        <p><?php echo $box2['text']; ?> </p>
                        <img src="<?php echo $box2['image']; ?> " alt="">
                    </div>
                    <div class="about-us_box about-us_box--left">
                        <?php $box3 = get_field('blue_box_3'); ?> 
                        <p><?php echo $box3['text']; ?> </p>
                        <img src="<?php echo $box3['image']; ?> " alt="">
                    </div>
                    <div class="about-us_box">
                        <?php $box4 = get_field('blue_box_4'); ?> 
                        <p><?php echo $box4['text']; ?> </p>
                        <img src="<?php echo $box4['image']; ?> " alt="">
                    </div>
                    <?php 
                        $box5 = get_field('blue_box_5');
                        if($box5['text']) { ?>
                        <div class="about-us_box about-us_box--left">
                            <p><?php echo $box5['text']; ?> </p>
                            <img src="<?php echo $box5['image']; ?> " alt="">
                        </div>
                    <?php } ?>
                    <?php 
                        $box6 = get_field('blue_box_6');
                        if($box6['text']) { ?>
                        <div class="about-us_box">
                            <p><?php echo $box6['text']; ?> </p>
                            <img src="<?php echo $box6['image']; ?> " alt="">
                        </div>
                    <?php } ?>
                    <?php 
                        $box7 = get_field('blue_box_7');
                        if($box7['text']) { ?>
                        <div class="about-us_box about-us_box--left">
                            <p><?php echo $box7['text']; ?> </p>
                            <img src="<?php echo $box7['image']; ?> " alt="">
                        </div>
                    <?php } ?>
                    <?php 
                        $box8 = get_field('blue_box_8');
                        if($box8['text']) { ?>
                        <div class="about-us_box">
                            <p><?php echo $box8['text']; ?> </p>
                            <img src="<?php echo $box8['image']; ?> " alt="">
                        </div>
                    <?php } ?>
                    <?php 
                        $box9 = get_field('blue_box_9');
                        if($box9['text']) { ?>
                        <div class="about-us_box about-us_box--left">
                            <p><?php echo $box9['text']; ?> </p>
                            <img src="<?php echo $box9['image']; ?> " alt="">
                        </div>
                    <?php } ?>
                    <?php 
                        $box10 = get_field('blue_box_10');
                        if($box10['text']) { ?>
                        <div class="about-us_box">
                            <p><?php echo $box10['text']; ?> </p>
                            <img src="<?php echo $box10['image']; ?> " alt="">
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="section_6" class="section section_blog_company section section_about-us_6">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-1/24"> </div>
            <div class="grid__item width-23/24">
                <div class="company_bg our_investors">
                    <div class="company_box mj-form our_investors">
                        <?php $companies = get_field('companies'); ?> 
                        <h3><?php echo $companies['title']; ?></h3>
                        <img src="<?php echo $companies['company_logo_1']; ?>" alt="">
                        <img src="<?php echo $companies['company_logo_2']; ?>" alt="">
                        <img src="<?php echo $companies['company_logo_3']; ?>" alt="">
                        <img src="<?php echo $companies['company_logo_4']; ?>" alt="">
                        <img src="<?php echo $companies['company_logo_5']; ?>" alt="">
                        <img src="<?php echo $companies['company_logo_6']; ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="section_7" class="section section_about-us_7">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-24/24">
            <div class="mj-feeds">
                    <?php if(get_field('facebook_url')) { ?>
                    <div class="mj-feed companies">
                        <div class="after_content facebook"> <?php the_field('facebook_text'); ?></div>
                        <div class="twitter_inner">
                            <div class="fb-page" data-href=" <?php the_field('facebook_url'); ?>" data-tabs="timeline" data-width="448" data-height="704" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/medijobsromania/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/medijobsromania/">MEDIjobs Romania</a></blockquote></div>
                        </div>
                    </div>
                    <?php } ?>
                    <?php if(get_field('instagram_username')) { ?>
                    <div class="mj-feed companies">
                        <div class="after_content instagram"> <?php the_field('instagram_text'); ?></div>
                        <div class="twitter_inner">
                            <?php echo do_shortcode('[instagram-feed user="'. get_field('instagram_username') .'" heightunit=px height=704 widthunit=px width=448 cols=1]');?>
                        </div>
                    </div>
                    <?php } ?>
                    <?php if(get_field('twitter_url')) { ?>
                    <div class="mj-feed companies" >
                        <div class="after_content twitter"> <?php the_field('twitter_text'); ?></div>
                        <div class="twitter_inner">
                            <a class="twitter-timeline" href=" <?php the_field('twitter_url'); ?>?ref_src=twsrc%5Etfw"></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>