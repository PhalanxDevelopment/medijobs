<?php
get_header();
?>
<style>
.mj-header .mj-meniu.blog_menu {
    display: none !important;
}
</style>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div id="section_1" class="section section_1">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-1/24 hide-on-mobile"></div>
            <div class="grid__item width-8/24">
                <img style="margin-top:72px;" src="<?php the_field('company_logo'); ?>" alt="<?php the_title(); ?>">
                <p> <?php the_content(); ?></p>
                <div class="sub_section sub_section--location">
                    <?php the_field('information_hq'); ?> <br> <br>
                    <?php the_field('information_locations'); ?>
                </div>
                <div class="sub_section sub_section--info">
                    <?php
                        $id = get_field('company_id');
                        $foundedText = get_field('founded_text');
                        $employeeText = get_field('employee_text');
                        $websiteText = get_field('website_text');
                        apply_filters('company_info', $id, $foundedText, $employeeText, $websiteText);
                    ?>
                </div>
                <div class="sub_section sub_section--tags">
                <span class="tags_title">Tags:</span>
                <?php $tags = explode(",", get_field('company_tags')); ?>
                    <?php foreach($tags as $tag) { ?>
                        <div class="tag">
                            <?php echo $tag; ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="grid__item width-2/24 hide-on-mobile"></div>
            <div class="grid__item width-13/24">
                <div class="secton_bg_image community secton_bg_image--company" style="margin-bottom: -62px;">
                    <?php
                        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                            the_post_thumbnail( 'full', [ 'alt' => esc_html ( get_the_title() ) ] );
                        }
                    ?>
                    <?php echo do_shortcode('[modula id="'.get_field('gallery_id').'"]') ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $keyEmployees = get_field('key_employees'); if($keyEmployees) { ?>
<div id="section_2" class="section section_jobs">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-1/24 hide-on-mobile"></div>
            <div class="grid__item width-23/24">
                <h1 class="headline light">
                    <?php the_field('key_employees_title'); ?>
                </h1>
                <div class="team_glossary">
                    <div class="team_glossary__body">

                        <?php if($keyEmployees['key_employee_1']['key_employee_1_name']) { ?>
                        <div class="team_glossary__person team_glossary__person--singleCompanies">
                            <div class="team_glossary__person-image"><img src="<?php echo $keyEmployees['key_employee_1']['key_employee_1_image'] ?>" alt=""></div>
                            <div class="team_glossary__person-name"><?php echo $keyEmployees['key_employee_1']['key_employee_1_name'] ?></div>
                            <div class="team_glossary__person-position"><?php echo $keyEmployees['key_employee_1']['key_employee_1_position'] ?></div>
                            <div class="team_glossary__person-link"><?php echo $keyEmployees['key_employee_1']['key_employee_1_text'] ?></div>
                        </div>
                        <?php } ?>
                        <?php if($keyEmployees['key_employee_2']['key_employee_2_name']) { ?>
                        <div class="team_glossary__person team_glossary__person--singleCompanies">
                            <div class="team_glossary__person-image"><img src="<?php echo $keyEmployees['key_employee_2']['key_employee_2_image'] ?>" alt=""></div>
                            <div class="team_glossary__person-name"><?php echo $keyEmployees['key_employee_2']['key_employee_2_name'] ?></div>
                            <div class="team_glossary__person-position"><?php echo $keyEmployees['key_employee_2']['key_employee_2_position'] ?></div>
                            <div class="team_glossary__person-link"><?php echo $keyEmployees['key_employee_2']['key_employee_2_text'] ?></div>
                        </div>
                        <?php } ?>
                        <?php if($keyEmployees['key_employee_3']['key_employee_3_name']) { ?>
                        <div class="team_glossary__person team_glossary__person--singleCompanies">
                            <div class="team_glossary__person-image"><img src="<?php echo $keyEmployees['key_employee_3']['key_employee_3_image'] ?>" alt=""></div>
                            <div class="team_glossary__person-name"><?php echo $keyEmployees['key_employee_3']['key_employee_3_name'] ?></div>
                            <div class="team_glossary__person-position"><?php echo $keyEmployees['key_employee_3']['key_employee_3_position'] ?></div>
                            <div class="team_glossary__person-link"><?php echo $keyEmployees['key_employee_3']['key_employee_3_text'] ?></div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<div id="section_5" class="section section_single_companies">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-1/24 hide-on-mobile"></div>
            <div class="grid__item width-23/24">
                <div class="about-us_boxes about-us_boxes--companies">
                    <div class="about-us_box about-us_box--left">
                        <h2 class="headline"> <?php the_field('information_title'); ?> </h2>
                        <div class="information_content">
                            <?php the_field('information_content'); ?>
                        </div>
                        <img src=" <?php the_field('information_image'); ?>" alt="<?php the_field('information_title');; ?>">
                    </div>
                    <?php if(get_field('information_2_title')) { ?>
                        <div class="about-us_box about-us_box--right">
                            <div class="information_content">
                                <?php the_field('information_2_content'); ?>
                            </div>
                            <h2 class="headline"> <?php the_field('information_2_title'); ?> </h2>
                            <img src=" <?php the_field('information_2_image'); ?>" alt="<?php the_field('information_2_title');; ?>">
                        </div>
                    <?php } ?>
                    <?php if(get_field('information_3_title')) { ?>
                        <div class="about-us_box about-us_box--left">
                            <h2 class="headline"> <?php the_field('information_3_title'); ?> </h2>
                            <div class="information_content">
                                <?php the_field('information_3_content'); ?>
                            </div>
                            <img src=" <?php the_field('information_3_image'); ?>" alt="<?php the_field('information_3_title');; ?>">
                        </div>
                    <?php } ?>
                    <?php if(get_field('information_4_title')) { ?>
                        <div class="about-us_box about-us_box--right">
                            <div class="information_content">
                                <?php the_field('information_4_content'); ?>
                            </div>
                            <h2 class="headline"> <?php the_field('information_4_title'); ?> </h2>
                            <img src=" <?php the_field('information_4_image'); ?>" alt="<?php the_field('information_4_title');; ?>">
                        </div>
                    <?php } ?>
                    <?php if(get_field('information_5_title')) { ?>
                        <div class="about-us_box about-us_box--left">
                            <h2 class="headline"> <?php the_field('information_5_title'); ?> </h2>
                            <div class="information_content">
                                <?php the_field('information_5_content'); ?>
                            </div>
                            <img src=" <?php the_field('information_5_image'); ?>" alt="<?php the_field('information_5_title');; ?>">
                        </div>
                    <?php } ?>
                    <?php if(get_field('information_6_title')) { ?>
                        <div class="about-us_box about-us_box--right">
                            <div class="information_content">
                                <?php the_field('information_6_content'); ?>
                            </div>
                            <h2 class="headline"> <?php the_field('information_6_title'); ?> </h2>
                            <img src=" <?php the_field('information_6_image'); ?>" alt="<?php the_field('information_6_title');; ?>">
                        </div>
                    <?php } ?>
                    <?php if(get_field('information_7_title')) { ?>
                        <div class="about-us_box about-us_box--left">
                            <h2 class="headline"> <?php the_field('information_7_title'); ?> </h2>
                            <div class="information_content">
                                <?php the_field('information_7_content'); ?>
                            </div>
                            <img src=" <?php the_field('information_7_image'); ?>" alt="<?php the_field('information_7_title');; ?>">
                        </div>
                    <?php } ?>
                    <?php if(get_field('information_8_title')) { ?>
                        <div class="about-us_box about-us_box--right">
                            <div class="information_content">
                                <?php the_field('information_8_content'); ?>
                            </div>
                            <h2 class="headline"> <?php the_field('information_8_title'); ?> </h2>
                            <img src=" <?php the_field('information_8_image'); ?>" alt="<?php the_field('information_8_title');; ?>">
                        </div>
                    <?php } ?>
                    <?php if(get_field('information_9_title')) { ?>
                        <div class="about-us_box about-us_box--left">
                            <h2 class="headline"> <?php the_field('information_9_title'); ?> </h2>
                            <div class="information_content">
                                <?php the_field('information_9_content'); ?>
                            </div>
                            <img src=" <?php the_field('information_9_image'); ?>" alt="<?php the_field('information_9_title');; ?>">
                        </div>
                    <?php } ?>
                    <?php if(get_field('information_10_title')) { ?>
                        <div class="about-us_box about-us_box--right">
                            <h2 class="headline"> <?php the_field('information_10_title'); ?> </h2>
                            <div class="information_content">
                                <?php the_field('information_10_content'); ?>
                            </div>
                            <img src=" <?php the_field('information_10_image'); ?>" alt="<?php the_field('information_10_title');; ?>">
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php if(get_field('dualzone')) { ?>
  <div class="section section_blog section_blog_recent">
        <div class="mj-container">
            <div class="mj-grid">
              <div class="grid__item width-1/24 hide-on-mobile"></div>
              <div class="grid__item width-11/24 mj-form">
                <h2> <?php the_field('articles_title'); ?> </h2>
                <div class="mj-articles">
                <?php
                $recent_posts = wp_get_recent_posts(array(
                    'numberposts' => 3, // Number of recent posts thumbnails to display
                    'post_status' => 'publish',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'post_tag',
                            'field'=> 'name',
                            'terms'    => array(get_field('articles_tag')),
                            'operator'=> 'IN'
                        ),
                    ), //
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
                        <div class="mj-article__author">
                            <?php $author_id= get_post_field( 'post_author', $post['ID'] ); ?>
                            <span>SCRIS DE </span>
                            <h5 class="mj-article__author__name"><?php echo the_author_meta( 'display_name' , $author_id ); ?></h5>
                            <?php echo get_avatar( $author_id , 50, '', 'avatar', array('class' => 'mj-article__author__image')); ?>
                        </div>
                  </div>

              <?php endforeach; wp_reset_query(); ?>
              </div>
              <a href="<?php echo get_home_url(); ?>/etichete/<?php echo get_field('articles_tag')?>" class="mj-btn mj-btn--secondary mj-btn--alt">
                  Vedeti toate articolele
              </a>
            </div>
            <div class="grid__item width-12/24">
                <div class="mj-feeds" style="margin-top: 100px;">
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
                        <div class="after_content instagram"> <?php the_field('instagram_button'); ?></div>
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
<?php } else { ?>
<div class="section section_blog section_blog_recent">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24 hide-on-mobile"></div>
                <div class="grid__item width-23/24 mj-form">
                    <h2> <?php the_field('articles_title'); ?> </h2>
                    <div class="mj-articles">
                    <?php
                    $recent_posts = wp_get_recent_posts(array(
                        'numberposts' => 3, // Number of recent posts thumbnails to display
                        'post_status' => 'publish',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'post_tag',
                                'field'=> 'name',
                                'terms'    => array(get_field('articles_tag')),
                                'operator'=> 'IN'
                            ),
                        ), //
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
                            <div class="mj-article__author">
                                <?php $author_id= get_post_field( 'post_author', $post['ID'] ); ?>
                                <span>SCRIS DE </span>
                                <h5 class="mj-article__author__name"><?php echo the_author_meta( 'display_name' , $author_id ); ?></h5>
                                <?php echo get_avatar( $author_id , 50, '', 'avatar', array('class' => 'mj-article__author__image')); ?>
                            </div>
                        </div>

                    <?php endforeach; wp_reset_query(); ?>
                    </div>
                    <a href="<?php echo get_home_url(); ?>/etichete/<?php echo get_field('articles_tag')?>" class="mj-btn mj-btn--secondary mj-btn--alt">
                        Vedeti toate articolele
                    </a>
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
                        <div class="after_content instagram"> <?php the_field('instagram_button'); ?></div>
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
<?php } ?>
<?php if(get_field('jobs_section_title')) { ?>
<div id="section_4" class="section section_about-us_4">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-1/24 hide-on-mobile"></div>
            <div class="grid__item width-6/24">
                <h3><?php the_field('jobs_section_title'); ?> </h3>
                <p> <?php the_field('jobs_section_text'); ?></p>
                <a href="https://app.medijobs.ro/register/candidate"  class="mj-btn mj-btn--secondary mj-btn--alt--2">
                    <?php the_field('jobs_section_button'); ?>
                </a>
            </div>
            <div class="grid__item width-2/24 hide-on-mobile"></div>
            <div class="grid__item width-14/24">
                <?php
                    $id = get_field('company_id');
                    apply_filters('company_jobs', $id);
                ?>
            </div>
            <div class="grid__item width-1/24 hide-on-mobile"></div>
        </div>
    </div>
</div>
<?php } ?>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
