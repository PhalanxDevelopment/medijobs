<?php
/**
 * Template Name: Listing Directory Page
 * Description: First page of the site
 *
 * @package WordPress
 * @subpackage Medijobs
 */
get_header();
?>

<div id="section_1_blog" class="section section_1">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24 hide-on-mobile"></div>
                <div class="grid__item width-9/24">
                    <div class="above_headline"><?php the_field('above_headline'); ?></div>
                    <h1 class="headline uppercase"><?php the_field('title'); ?></h1>
                    <p><?php the_field('text'); ?></p>
                </div>
                <div class="grid__item width-1/24 hide-on-mobile"></div>
                <div class="grid__item width-13/24">
                    <div class="secton_bg_image about_us">
                        <img src="<?php the_field('feature_image') ;?>" alt="<?php the_field('title'); ?>" />
                    </div>
                </div>
            </div>
        </div>
</div>
<?php $section1 = get_field('section_1'); 
if($section1['title']) { ?>
<div class="section section_blog" style="margin: 0 auto;">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-1/24 hide-on-mobile"></div>
            <div class="grid__item width-23/24 mj-form">
                <h2><?php echo $section1['title'] ?></h2>
                <div class="mj-articles">
                    <?php if($section1['post_id_1']) { ?>
                    <div class="mj-article">
                        <div class="mj-article__image">
                            <a href="<?php echo get_permalink($section1['post_id_1']); ?>">
                                <?php echo get_the_post_thumbnail($section1['post_id_1'], 'full'); ?>
                            </a>
                        </div>
                        <h3 class="mj-article__title"><a href="<?php echo get_permalink($section1['post_id_1']); ?>"><?php echo get_the_title($section1['post_id_1']  ); ?></a></h3>
                        <a href="<?php echo get_permalink($section1['post_id_1']); ?>" class="mj-article__link">Vezi mai mult</a>
                    </div>
                    <?php } ?>
                    <?php if($section1['post_id_2']) { ?>
                    <div class="mj-article">
                        <div class="mj-article__image">
                            <a href="<?php echo get_permalink($section1['post_id_2']); ?>">
                                <?php echo get_the_post_thumbnail($section1['post_id_2'], 'full'); ?>
                            </a>
                        </div>
                        <h3 class="mj-article__title"><a href="<?php echo get_permalink($section1['post_id_2']); ?>"><?php echo get_the_title($section1['post_id_2']  ); ?></a></h3>
                        <a href="<?php echo get_permalink($section1['post_id_2']); ?>" class="mj-article__link">Vezi mai mult</a>
                    </div>
                    <?php } ?>
                    <?php if($section1['post_id_3']) { ?>
                    <div class="mj-article">
                        <div class="mj-article__image">
                            <a href="<?php echo get_permalink($section1['post_id_3']); ?>">
                                <?php echo get_the_post_thumbnail($section1['post_id_3'], 'full'); ?>
                            </a>
                        </div>
                        <h3 class="mj-article__title"><a href="<?php echo get_permalink($section1['post_id_3']); ?>"><?php echo get_the_title($section1['post_id_3']  ); ?></a></h3>
                        <a href="<?php echo get_permalink($section1['post_id_3']); ?>" class="mj-article__link">Vezi mai mult</a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<?php $section2 = get_field('section_2'); 
if($section2['title']) { ?>
<div class="section section_blog" style="margin: 0 auto;">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-1/24 hide-on-mobile"></div>
            <div class="grid__item width-23/24 mj-form">
                <h2><?php echo $section2['title'] ?></h2>
                <div class="mj-articles">
                 <?php if($section2['post_id_1']) { ?>    
                    <div class="mj-article">
                        <div class="mj-article__image">
                            <a href="<?php echo get_permalink($section2['post_id_1']); ?>">
                                <?php echo get_the_post_thumbnail($section2['post_id_1'], 'full'); ?>
                            </a>
                        </div>
                        <h3 class="mj-article__title"><a href="<?php echo get_permalink($section2['post_id_1']); ?>"><?php echo get_the_title($section2['post_id_1']  ); ?></a></h3>
                        <a href="<?php echo get_permalink($section2['post_id_1']); ?>" class="mj-article__link">Vezi mai mult</a>
                    </div>
                        <?php } ?>
                     <?php if($section2['post_id_2']) { ?>
                    <div class="mj-article">
                        <div class="mj-article__image">
                            <a href="<?php echo get_permalink($section2['post_id_2']); ?>">
                                <?php echo get_the_post_thumbnail($section2['post_id_2'], 'full'); ?>
                            </a>
                        </div>
                        <h3 class="mj-article__title"><a href="<?php echo get_permalink($section2['post_id_2']); ?>"><?php echo get_the_title($section2['post_id_2']  ); ?></a></h3>
                        <a href="<?php echo get_permalink($section2['post_id_2']); ?>" class="mj-article__link">Vezi mai mult</a>
                    </div>
                    <?php } ?>
                     <?php if($section2['post_id_3']) { ?>
                    <div class="mj-article">
                        <div class="mj-article__image">
                            <a href="<?php echo get_permalink($section2['post_id_3']); ?>">
                                <?php echo get_the_post_thumbnail($section2['post_id_3'], 'full'); ?>
                            </a>
                        </div>
                        <h3 class="mj-article__title"><a href="<?php echo get_permalink($section2['post_id_3']); ?>"><?php echo get_the_title($section2['post_id_3']  ); ?></a></h3>
                        <a href="<?php echo get_permalink($section2['post_id_3']); ?>" class="mj-article__link">Vezi mai mult</a>
                    </div>
                    <?php } ?>
                </div>
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
<?php $section3 = get_field('section_3'); 
if($section3['title']) { ?>
<div class="section section_blog" style="margin: 0 auto;">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-1/24 hide-on-mobile"></div>
            <div class="grid__item width-23/24 mj-form">
                <h2><?php echo $section3['title'] ?></h2>
                <div class="mj-articles">
                 <?php if($section3['post_id_1']) { ?>    
                <div class="mj-article">
                        <div class="mj-article__image">
                            <a href="<?php echo get_permalink($section3['post_id_1']); ?>">
                                <?php echo get_the_post_thumbnail($section3['post_id_1'], 'full'); ?>
                            </a>
                        </div>
                        <h3 class="mj-article__title"><a href="<?php echo get_permalink($section3['post_id_1']); ?>"><?php echo get_the_title($section3['post_id_1']  ); ?></a></h3>
                        <a href="<?php echo get_permalink($section3['post_id_1']); ?>" class="mj-article__link">Vezi mai mult</a>
                    </div>
                    <?php } ?>
                     <?php if($section3['post_id_2']) { ?>
                    <div class="mj-article">
                        <div class="mj-article__image">
                            <a href="<?php echo get_permalink($section3['post_id_2']); ?>">
                                <?php echo get_the_post_thumbnail($section3['post_id_2'], 'full'); ?>
                            </a>
                        </div>
                        <h3 class="mj-article__title"><a href="<?php echo get_permalink($section3['post_id_2']); ?>"><?php echo get_the_title($section3['post_id_2']  ); ?></a></h3>
                        <a href="<?php echo get_permalink($section3['post_id_2']); ?>" class="mj-article__link">Vezi mai mult</a>
                    </div>
                    <?php } ?>
                     <?php if($section3['post_id_3']) { ?>
                    <div class="mj-article">
                        <div class="mj-article__image">
                            <a href="<?php echo get_permalink($section3['post_id_3']); ?>">
                                <?php echo get_the_post_thumbnail($section3['post_id_3'], 'full'); ?>
                            </a>
                        </div>
                        <h3 class="mj-article__title"><a href="<?php echo get_permalink($section3['post_id_3']); ?>"><?php echo get_the_title($section3['post_id_3']  ); ?></a></h3>
                        <a href="<?php echo get_permalink($section3['post_id_3']); ?>" class="mj-article__link">Vezi mai mult</a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<?php $section4 = get_field('section_4'); 
if($section4['title']) { ?>
<div class="section section_blog" style="margin: 0 auto;">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-1/24 hide-on-mobile"></div>
            <div class="grid__item width-23/24 mj-form">
                <h2><?php echo $section4['title'] ?></h2>
                <div class="mj-articles">
                 <?php if($section4['post_id_1']) { ?>    
                <div class="mj-article">
                        <div class="mj-article__image">
                            <a href="<?php echo get_permalink($section4['post_id_1']); ?>">
                                <?php echo get_the_post_thumbnail($section4['post_id_1'], 'full'); ?>
                            </a>
                        </div>
                        <h3 class="mj-article__title"><a href="<?php echo get_permalink($section4['post_id_1']); ?>"><?php echo get_the_title($section4['post_id_1']  ); ?></a></h3>
                        <a href="<?php echo get_permalink($section4['post_id_1']); ?>" class="mj-article__link">Vezi mai mult</a>
                    </div>
                    <?php } ?>
                     <?php if($section4['post_id_2']) { ?>
                    <div class="mj-article">
                        <div class="mj-article__image">
                            <a href="<?php echo get_permalink($section4['post_id_2']); ?>">
                                <?php echo get_the_post_thumbnail($section4['post_id_2'], 'full'); ?>
                            </a>
                        </div>
                        <h3 class="mj-article__title"><a href="<?php echo get_permalink($section4['post_id_2']); ?>"><?php echo get_the_title($section4['post_id_2']  ); ?></a></h3>
                        <a href="<?php echo get_permalink($section4['post_id_2']); ?>" class="mj-article__link">Vezi mai mult</a>
                    </div>
                    <?php } ?>
                     <?php if($section4['post_id_3']) { ?>
                    <div class="mj-article">
                        <div class="mj-article__image">
                            <a href="<?php echo get_permalink($section4['post_id_3']); ?>">
                                <?php echo get_the_post_thumbnail($section4['post_id_3'], 'full'); ?>
                            </a>
                        </div>
                        <h3 class="mj-article__title"><a href="<?php echo get_permalink($section4['post_id_3']); ?>"><?php echo get_the_title($section4['post_id_3']  ); ?></a></h3>
                        <a href="<?php echo get_permalink($section4['post_id_3']); ?>" class="mj-article__link">Vezi mai mult</a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<?php $section5 = get_field('section_5'); 
if($section5['title']) { ?>
<div class="section section_blog" style="margin: 0 auto;">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-1/24 hide-on-mobile"></div>
            <div class="grid__item width-23/24 mj-form">
                <h2><?php echo $section5['title'] ?></h2>
                <div class="mj-articles">
                 <?php if($section5['post_id_1']) { ?>    
                <div class="mj-article">
                        <div class="mj-article__image">
                            <a href="<?php echo get_permalink($section5['post_id_1']); ?>">
                                <?php echo get_the_post_thumbnail($section5['post_id_1'], 'full'); ?>
                            </a>
                        </div>
                        <h3 class="mj-article__title"><a href="<?php echo get_permalink($section5['post_id_1']); ?>"><?php echo get_the_title($section5['post_id_1']  ); ?></a></h3>
                        <a href="<?php echo get_permalink($section5['post_id_1']); ?>" class="mj-article__link">Vezi mai mult</a>
                    </div>
                    <?php } ?>
                     <?php if($section5['post_id_2']) { ?>
                    <div class="mj-article">
                        <div class="mj-article__image">
                            <a href="<?php echo get_permalink($section5['post_id_2']); ?>">
                                <?php echo get_the_post_thumbnail($section5['post_id_2'], 'full'); ?>
                            </a>
                        </div>
                        <h3 class="mj-article__title"><a href="<?php echo get_permalink($section5['post_id_2']); ?>"><?php echo get_the_title($section5['post_id_2']  ); ?></a></h3>
                        <a href="<?php echo get_permalink($section5['post_id_2']); ?>" class="mj-article__link">Vezi mai mult</a>
                    </div>
                    <?php } ?>
                     <?php if($section5['post_id_3']) { ?>
                    <div class="mj-article">
                        <div class="mj-article__image">
                            <a href="<?php echo get_permalink($section5['post_id_3']); ?>">
                                <?php echo get_the_post_thumbnail($section5['post_id_3'], 'full'); ?>
                            </a>
                        </div>
                        <h3 class="mj-article__title"><a href="<?php echo get_permalink($section5['post_id_3']); ?>"><?php echo get_the_title($section5['post_id_3']  ); ?></a></h3>
                        <a href="<?php echo get_permalink($section5['post_id_3']); ?>" class="mj-article__link">Vezi mai mult</a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<?php $section6 = get_field('section_6'); 
if($section6['title']) { ?>
<div class="section section_blog" style="margin: 0 auto;">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-1/24 hide-on-mobile"></div>
            <div class="grid__item width-23/24 mj-form">
                <h2><?php echo $section6['title'] ?></h2>
                <div class="mj-articles">
                 <?php if($section6['post_id_1']) { ?>    
                <div class="mj-article">
                        <div class="mj-article__image">
                            <a href="<?php echo get_permalink($section6['post_id_1']); ?>">
                                <?php echo get_the_post_thumbnail($section6['post_id_1'], 'full'); ?>
                            </a>
                        </div>
                        <h3 class="mj-article__title"><a href="<?php echo get_permalink($section6['post_id_1']); ?>"><?php echo get_the_title($section6['post_id_1']  ); ?></a></h3>
                        <a href="<?php echo get_permalink($section6['post_id_1']); ?>" class="mj-article__link">Vezi mai mult</a>
                    </div>
                    <?php } ?>
                     <?php if($section6['post_id_2']) { ?>
                    <div class="mj-article">
                        <div class="mj-article__image">
                            <a href="<?php echo get_permalink($section6['post_id_2']); ?>">
                                <?php echo get_the_post_thumbnail($section6['post_id_2'], 'full'); ?>
                            </a>
                        </div>
                        <h3 class="mj-article__title"><a href="<?php echo get_permalink($section6['post_id_2']); ?>"><?php echo get_the_title($section6['post_id_2']  ); ?></a></h3>
                        <a href="<?php echo get_permalink($section6['post_id_2']); ?>" class="mj-article__link">Vezi mai mult</a>
                    </div>
                    <?php } ?>
                     <?php if($section6['post_id_3']) { ?>
                    <div class="mj-article">
                        <div class="mj-article__image">
                            <a href="<?php echo get_permalink($section6['post_id_3']); ?>">
                                <?php echo get_the_post_thumbnail($section6['post_id_3'], 'full'); ?>
                            </a>
                        </div>
                        <h3 class="mj-article__title"><a href="<?php echo get_permalink($section6['post_id_3']); ?>"><?php echo get_the_title($section6['post_id_3']  ); ?></a></h3>
                        <a href="<?php echo get_permalink($section6['post_id_3']); ?>" class="mj-article__link">Vezi mai mult</a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<?php $section7 = get_field('section_7'); 
if($section7['title']) { ?>
<div class="section section_blog" style="margin: 0 auto;">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-1/24 hide-on-mobile"></div>
            <div class="grid__item width-23/24 mj-form">
                <h2><?php echo $section7['title'] ?></h2>
                <div class="mj-articles">
                 <?php if($section7['post_id_1']) { ?>    
                <div class="mj-article">
                        <div class="mj-article__image">
                            <a href="<?php echo get_permalink($section7['post_id_1']); ?>">
                                <?php echo get_the_post_thumbnail($section7['post_id_1'], 'full'); ?>
                            </a>
                        </div>
                        <h3 class="mj-article__title"><a href="<?php echo get_permalink($section7['post_id_1']); ?>"><?php echo get_the_title($section7['post_id_1']  ); ?></a></h3>
                        <a href="<?php echo get_permalink($section7['post_id_1']); ?>" class="mj-article__link">Vezi mai mult</a>
                    </div>
                    <?php } ?>
                     <?php if($section7['post_id_2']) { ?>
                    <div class="mj-article">
                        <div class="mj-article__image">
                            <a href="<?php echo get_permalink($section7['post_id_2']); ?>">
                                <?php echo get_the_post_thumbnail($section7['post_id_2'], 'full'); ?>
                            </a>
                        </div>
                        <h3 class="mj-article__title"><a href="<?php echo get_permalink($section7['post_id_2']); ?>"><?php echo get_the_title($section7['post_id_2']  ); ?></a></h3>
                        <a href="<?php echo get_permalink($section7['post_id_2']); ?>" class="mj-article__link">Vezi mai mult</a>
                    </div>
                    <?php } ?>
                     <?php if($section7['post_id_3']) { ?>
                    <div class="mj-article">
                        <div class="mj-article__image">
                            <a href="<?php echo get_permalink($section7['post_id_3']); ?>">
                                <?php echo get_the_post_thumbnail($section7['post_id_3'], 'full'); ?>
                            </a>
                        </div>
                        <h3 class="mj-article__title"><a href="<?php echo get_permalink($section7['post_id_3']); ?>"><?php echo get_the_title($section7['post_id_3']  ); ?></a></h3>
                        <a href="<?php echo get_permalink($section7['post_id_3']); ?>" class="mj-article__link">Vezi mai mult</a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<?php $section8 = get_field('section_8'); 
if($section8['title']) { ?>
<div class="section section_blog" style="margin: 0 auto;">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-1/24 hide-on-mobile"></div>
            <div class="grid__item width-23/24 mj-form">
                <h2><?php echo $section8['title'] ?></h2>
                <div class="mj-articles">
                 <?php if($section8['post_id_1']) { ?>    
                <div class="mj-article">
                        <div class="mj-article__image">
                            <a href="<?php echo get_permalink($section8['post_id_1']); ?>">
                                <?php echo get_the_post_thumbnail($section8['post_id_1'], 'full'); ?>
                            </a>
                        </div>
                        <h3 class="mj-article__title"><a href="<?php echo get_permalink($section8['post_id_1']); ?>"><?php echo get_the_title($section8['post_id_1']  ); ?></a></h3>
                        <a href="<?php echo get_permalink($section8['post_id_1']); ?>" class="mj-article__link">Vezi mai mult</a>
                    </div>
                    <?php } ?>
                     <?php if($section8['post_id_2']) { ?>
                    <div class="mj-article">
                        <div class="mj-article__image">
                            <a href="<?php echo get_permalink($section8['post_id_2']); ?>">
                                <?php echo get_the_post_thumbnail($section8['post_id_2'], 'full'); ?>
                            </a>
                        </div>
                        <h3 class="mj-article__title"><a href="<?php echo get_permalink($section8['post_id_2']); ?>"><?php echo get_the_title($section8['post_id_2']  ); ?></a></h3>
                        <a href="<?php echo get_permalink($section8['post_id_2']); ?>" class="mj-article__link">Vezi mai mult</a>
                    </div>
                    <?php } ?>
                     <?php if($section8['post_id_3']) { ?>
                    <div class="mj-article">
                        <div class="mj-article__image">
                            <a href="<?php echo get_permalink($section8['post_id_3']); ?>">
                                <?php echo get_the_post_thumbnail($section8['post_id_3'], 'full'); ?>
                            </a>
                        </div>
                        <h3 class="mj-article__title"><a href="<?php echo get_permalink($section8['post_id_3']); ?>"><?php echo get_the_title($section8['post_id_3']  ); ?></a></h3>
                        <a href="<?php echo get_permalink($section8['post_id_3']); ?>" class="mj-article__link">Vezi mai mult</a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<?php $section9 = get_field('section_9'); 
if($section9['title']) { ?>
<div class="section section_blog" style="margin: 0 auto;">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-1/24 hide-on-mobile"></div>
            <div class="grid__item width-23/24 mj-form">
                <h2><?php echo $section9['title'] ?></h2>
                <div class="mj-articles">
                 <?php if($section9['post_id_1']) { ?>    
                <div class="mj-article">
                        <div class="mj-article__image">
                            <a href="<?php echo get_permalink($section9['post_id_1']); ?>">
                                <?php echo get_the_post_thumbnail($section9['post_id_1'], 'full'); ?>
                            </a>
                        </div>
                        <h3 class="mj-article__title"><a href="<?php echo get_permalink($section9['post_id_1']); ?>"><?php echo get_the_title($section9['post_id_1']  ); ?></a></h3>
                        <a href="<?php echo get_permalink($section9['post_id_1']); ?>" class="mj-article__link">Vezi mai mult</a>
                    </div>
                    <?php } ?>
                     <?php if($section9['post_id_2']) { ?>
                    <div class="mj-article">
                        <div class="mj-article__image">
                            <a href="<?php echo get_permalink($section9['post_id_2']); ?>">
                                <?php echo get_the_post_thumbnail($section9['post_id_2'], 'full'); ?>
                            </a>
                        </div>
                        <h3 class="mj-article__title"><a href="<?php echo get_permalink($section9['post_id_2']); ?>"><?php echo get_the_title($section9['post_id_2']  ); ?></a></h3>
                        <a href="<?php echo get_permalink($section9['post_id_2']); ?>" class="mj-article__link">Vezi mai mult</a>
                    </div>
                    <?php } ?>
                    <?php if($section9['post_id_3']) { ?>
                    <div class="mj-article">
                        <div class="mj-article__image">
                            <a href="<?php echo get_permalink($section9['post_id_3']); ?>">
                                <?php echo get_the_post_thumbnail($section9['post_id_3'], 'full'); ?>
                            </a>
                        </div>
                        <h3 class="mj-article__title"><a href="<?php echo get_permalink($section9['post_id_3']); ?>"><?php echo get_the_title($section9['post_id_3']  ); ?></a></h3>
                        <a href="<?php echo get_permalink($section9['post_id_3']); ?>" class="mj-article__link">Vezi mai mult</a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<?php $section10 = get_field('section_10'); 
if($section10['title']) { ?>
<div class="section section_blog" style="margin: 0 auto;">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-1/24 hide-on-mobile"></div>
            <div class="grid__item width-23/24 mj-form">
                <h2><?php echo $section10['title'] ?></h2>
                <div class="mj-articles">
                 <?php if($section10['post_id_1']) { ?>    
                <div class="mj-article">
                        <div class="mj-article__image">
                            <a href="<?php echo get_permalink($section10['post_id_1']); ?>">
                                <?php echo get_the_post_thumbnail($section10['post_id_1'], 'full'); ?>
                            </a>
                        </div>
                        <h3 class="mj-article__title"><a href="<?php echo get_permalink($section10['post_id_1']); ?>"><?php echo get_the_title($section10['post_id_1']  ); ?></a></h3>
                        <a href="<?php echo get_permalink($section10['post_id_1']); ?>" class="mj-article__link">Vezi mai mult</a>
                    </div>
                    <?php } ?>
                     <?php if($section10['post_id_2']) { ?>
                    <div class="mj-article">
                        <div class="mj-article__image">
                            <a href="<?php echo get_permalink($section10['post_id_2']); ?>">
                                <?php echo get_the_post_thumbnail($section10['post_id_2'], 'full'); ?>
                            </a>
                        </div>
                        <h3 class="mj-article__title"><a href="<?php echo get_permalink($section10['post_id_2']); ?>"><?php echo get_the_title($section10['post_id_2']  ); ?></a></h3>
                        <a href="<?php echo get_permalink($section10['post_id_2']); ?>" class="mj-article__link">Vezi mai mult</a>
                    </div>
                    <?php } ?>
                     <?php if($section10['post_id_3']) { ?>
                    <div class="mj-article">
                        <div class="mj-article__image">
                            <a href="<?php echo get_permalink($section10['post_id_3']); ?>">
                                <?php echo get_the_post_thumbnail($section10['post_id_3'], 'full'); ?>
                            </a>
                        </div>
                        <h3 class="mj-article__title"><a href="<?php echo get_permalink($section10['post_id_3']); ?>"><?php echo get_the_title($section10['post_id_3']  ); ?></a></h3>
                        <a href="<?php echo get_permalink($section10['post_id_3']); ?>" class="mj-article__link">Vezi mai mult</a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>

<?php get_footer(); ?>