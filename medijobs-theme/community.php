<?php
/**
 * Template Name: Community Page
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
            <div class="grid__item width-8/24">
                <div class="above_headline"><?php the_field('hero_above_headline'); ?></div>
                <h1 class="headline uppercase"><?php the_field('hero_title'); ?></span></h1>
                <p><?php the_field('hero_text'); ?></p>
                <div class="sub_section hide-on-mobile" style="margin-top:100px; margin-bottom:100px;"><?php the_field('hero_link_text'); ?></div>
            </div>
            <div class="grid__item width-15/24">
                <div class="secton_bg_image community">
                    <?php $heroCollage = get_field('hero_collage');  ?>
                    <div class="mj-collage mj-collage-three">
                        <img class="mj-collage__img mj-collage__img--portrait" src="<?php echo $heroCollage['portrait_image']?>" alt="">
                        <img class="mj-collage__img mj-collage__img--landscape-small" src="<?php echo $heroCollage['lanscape_image_small']?>" alt="">
                        <img class="mj-collage__img mj-collage__img--lanscape-big" src="<?php echo $heroCollage['landscape_image_big']?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="section_2" class="section section_2_community">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-1/24"></div>
            <div class="grid__item width-23/24">
                <h2 class="headline light"><?php the_field('when_you_join_title'); ?></h2>
            </div>
        </div>
        <div class="mj-grid">
            <div class="grid__item width-24/24">
                <div class="mj-group">
                    <div class="mj-group__box">
                        <img class="mj-group-image" src="<?php the_field('group_image'); ?>" alt="">
                        <div class="mj-group-title">
                            <img class="mj-group-logo" src="<?php the_field('group_logo'); ?>" alt="">
                            <h3><?php the_field('group_title'); ?>.</h3>
                        </div>
                        <div class="mj-group-content">
                            <div class="mj-group-content__column mj-group-content__column--big">
                                <p><?php the_field('when_you_join_text_left'); ?> </p>
                            </div>
                            <div class="mj-group-content__column">
                                <p><?php the_field('when_you_join_text_right'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="mj-group__logos">
                    <?php $logos = get_field('logos'); ?>
                        <a  class="mj-group-logo" href="<?php echo $logos['logo_link_1']?>"><img  src="<?php echo $logos['logo_1']?>" alt=""></a>
                        <a  class="mj-group-logo" href="<?php echo $logos['logo_link_2']?>"><img  src="<?php echo $logos['logo_2']?>" alt=""></a>
                        <a  class="mj-group-logo" href="<?php echo $logos['logo_link_3']?>"><img  src="<?php echo $logos['logo_3']?>" alt=""></a>
                        <a  class="mj-group-logo" href="<?php echo $logos['logo_link_4']?>"><img  src="<?php echo $logos['logo_4']?>" alt=""></a>
                        <a  class="mj-group-logo" href="<?php echo $logos['logo_link_5']?>"><img  src="<?php echo $logos['logo_5']?>" alt=""></a>
                        <a  class="mj-group-logo" href="<?php echo $logos['logo_link_6']?>"><img  src="<?php echo $logos['logo_6']?>" alt=""></a>
                        <a  class="mj-group-logo" href="<?php echo $logos['logo_link_7']?>"><img  src="<?php echo $logos['logo_7']?>" alt=""></a>
                        <a  class="mj-group-logo" href="<?php echo $logos['logo_link_8']?>"><img  src="<?php echo $logos['logo_8']?>" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="section_3" class="section section_1 section_1--community">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-1/24 hide-on-mobile"></div>
            <div class="grid__item width-8/24">
                <h2 class="headline light"><?php the_field('facebook_groups_title'); ?></h2>
                <p class="hide-on-mobile"><?php the_field('facebook_groups_text'); ?>.</p>
                <div class="sub_section hide-on-mobile" style="margin-top:300px"><?php the_field('facebook_groups_link_text'); ?></div>
            </div>
            <div class="grid__item width-15/24">
                <div class="facebook_groups">
                    <?php $facebookBox1 = get_field('facebook_box_1');
                    if($facebookBox1['text']) { ?>
                    <div class="facebook_groups__box">
                        <div class="facebook_groups__box-icon">
                            <img src="<?php echo $facebookBox1['image']; ?>" alt="">
                        </div>
                        <div class="facebook_groups__box-text">
                            <h3><?php echo $facebookBox1['text']; ?></h3>
                        </div>
                        <div class="facebook_groups__box-link">
                            <a href="<?php echo $facebookBox1['button_link'];?>" class="mj-btn mj-btn--secondary mj-btn--alt--2">
                                <?php echo $facebookBox1['button_text']; ?>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                    <?php $facebookBox2 = get_field('facebook_box_2');
                    if($facebookBox2['text']) { ?>
                    <div class="facebook_groups__box">
                        <div class="facebook_groups__box-icon">
                            <img src="<?php echo $facebookBox2['image']; ?>" alt="">
                        </div>
                        <div class="facebook_groups__box-text">
                            <h3><?php echo $facebookBox2['text']; ?></h3>
                        </div>
                        <div class="facebook_groups__box-link">
                            <a href="<?php echo $facebookBox2['button_link'];?>" class="mj-btn mj-btn--secondary mj-btn--alt--2">
                                <?php echo $facebookBox2['button_text']; ?>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="section_4" class="section  section_4--community">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-1/24 hide-on-mobile"></div>
            <div class="grid__item width-4/24">
                <img class="leaders_image" src="<?php the_field('confrence_logo'); ?>" alt="">
                <h2 class="headline light"><?php the_field('confrence_title'); ?></h2>
                <p><?php the_field('confrence_text'); ?></p>
                <div class="community_social_links">
                    <?php $social1 = get_field('social_link_1');
                    if($social1['link']) { ?>
                        <a href="<?php echo $social1['link']; ?>"><img src="<?php echo $social1['logo']; ?>" alt=""></a>
                    <?php } ?>
                    <?php $social2 = get_field('social_link_2');
                    if($social2['link']) { ?>
                        <a href="<?php echo $social2['link']; ?>"><img src="<?php echo $social2['logo']; ?>" alt=""></a>
                    <?php } ?>
                    <?php $social3 = get_field('social_link_3');
                    if($social3['link']) { ?>
                        <a href="<?php echo $social3['link']; ?>"><img src="<?php echo $social3['logo']; ?>" alt=""></a>
                    <?php } ?>
                </div>
            </div>
            <div class="grid__item width-1/24 hide-on-mobile"></div>
            <div class="grid__item width-18/24">
                    <div class="mj-collage mj-collage-four">
                        <img style="border-color:#950079" class="mj-collage__img mj-collage__img--portrait-big" src="<?php the_field('image_4'); ?>" alt="">
                        <img style="border-color:#950079" class="mj-collage__img mj-collage__img--portrait-small" src="<?php the_field('image_3'); ?>" alt="">
                        <img style="border-color:#950079" class="mj-collage__img mj-collage__img--landscape-small" src="<?php the_field('image_1'); ?>" alt="">
                        <img style="border-color:#950079" class="mj-collage__img mj-collage__img--lanscape-big" src="<?php the_field('image_2'); ?>" alt="">
                    </div>
            </div>
        </div>
    </div>
</div>
<?php $companies = get_field('companies'); ?>
<?php if($companies['title']) { ?>
<div id="section_6" class="section section_blog_company section section_about-us_6">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-1/24"> </div>
            <div class="grid__item width-23/24">
                <div class="company_bg our_investors" style="height: auto;">
                    <div class="company_box mj-form our_investors our_partners">
                        <h3><?php echo $companies['title']; ?></h3>
                        <img src="<?php echo $companies['company_logo_1']; ?>" alt="">
                        <img src="<?php echo $companies['company_logo_2']; ?>" alt="">
                        <img src="<?php echo $companies['company_logo_3']; ?>" alt="">
                        <img src="<?php echo $companies['company_logo_4']; ?>" alt="">
                        <img src="<?php echo $companies['company_logo_5']; ?>" alt="">
                        <img src="<?php echo $companies['company_logo_6']; ?>" alt="">
                        <img src="<?php echo $companies['company_logo_7']; ?>" alt="">
                        <img src="<?php echo $companies['company_logo_8']; ?>" alt="">
                        <img src="<?php echo $companies['company_logo_9']; ?>" alt="">
                        <img src="<?php echo $companies['company_logo_10']; ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<?php if(get_field('last_section_title')) { ?>
<div id="section_5" class="section section_5--community" >
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-24/24">
                <h2 class="headline biggest center"><?php the_field('last_section_title'); ?></h2>
                <p class="center"><?php the_field('last_section_text'); ?>.</p>
                <a style="max-width:200px; margin: 0 auto;" href="<?php the_field('last_section_link'); ?>" class="mj-btn mj-btn--secondary mj-btn--alt">
                    <?php the_field('last_section_button_text'); ?>
                </a>
            </div>
        </div>
    </div>
    <img src="<?php the_field('last_section_image'); ?>" alt="">
</div>
<?php } ?>
<?php get_footer(); ?>
