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
                <div class="above_headline">Join Romania largest</div>
                <h1 class="headline uppercase">Medical Community.</span></h1>
                <div class="sub_section hide-on-mobile" style="margin-top:300px">COME JOIN US AT <br> MEDIJOBS</div>
            </div>
            <div class="grid__item width-15/24 hide-on-mobile">
                <div class="secton_bg_image community">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/community/hero_image_desktop.png" alt="">
                </div>
            </div>
            <div class="grid__item width-15/24 hide-on-desktop">
                <div class="secton_bg_image community">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/community/hero_image_mobile.png" alt="">
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
                <h1 class="headline light">When you join MEDIjobs, you also join:</h1>
            </div>
        </div>
        <div class="mj-grid">
            <div class="grid__item width-24/24">
                <div class="mj-group">
                    <div class="mj-group__box">
                        <img class="mj-group-image" src="<?php echo get_template_directory_uri(); ?>/images/community/enayati_group.png" alt="">
                        <div class="mj-group-title">
                            <img class="mj-group-logo" src="<?php echo get_template_directory_uri(); ?>/images/community/enviaty_group_header.png" alt="">
                            <h3>Inovație în sănătate pentru o cauză înaltă.</h3>
                        </div>
                        <div class="mj-group-content">
                            <div class="mj-group-content__column mj-group-content__column--big">
                                <p>The Enayati group was created by Dr. Wargha Enayati, the founder of the Regina Maria network in Romania. Its purpose is to innovate and improve the healthcare sector in Romania. </p>
                            </div>
                            <div class="mj-group-content__column">
                                <p>When you join MEDIjobs, you also benefit from our relationship with our business partners.</p>
                            </div>
                        </div>
                    </div>
                    <div class="mj-group__logos">
                        <img class="mj-group-logo" src="<?php echo get_template_directory_uri(); ?>/images/community/enviaty_logo.png" alt="">
                        <img class="mj-group-logo" src="<?php echo get_template_directory_uri(); ?>/images/community/fundatia_rm_logo.png" alt="">
                        <img class="mj-group-logo" src="<?php echo get_template_directory_uri(); ?>/images/community/intermedicas-logo-fb.png" alt="">
                        <img class="mj-group-logo" src="<?php echo get_template_directory_uri(); ?>/images/community/ami_logo.png" alt="">

                        <img class="mj-group-logo" src="<?php echo get_template_directory_uri(); ?>/images/community/medihub_logo.png" alt="">
                        <img class="mj-group-logo" src="<?php echo get_template_directory_uri(); ?>/images/community/docbook_logo.png" alt="">
                        <img class="mj-group-logo" src="<?php echo get_template_directory_uri(); ?>/images/community/viata-medicala logo.png" alt="">
                        <img class="mj-group-logo" src="<?php echo get_template_directory_uri(); ?>/images/community/mediamed_logo.png" alt="">
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
                <h1 class="headline light">Our Facebook <br/> Groups.</h1>
                <p class="hide-on-mobile">Meet and greet fellow professionals in your field.</p>
                <div class="sub_section hide-on-mobile" style="margin-top:300px">CHECKOUT OUR <br> CONFERENCE</div>
            </div>
            <div class="grid__item width-15/24">
                <div class="facebook_groups">
                    <div class="facebook_groups__box">
                        <div class="facebook_groups__box-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/community/facebook_group_icon.png" alt="">
                        </div>
                        <div class="facebook_groups__box-text">
                            <h3>Asistenti Medicali - MEDIjobs Romania</h3>
                        </div>
                        <div class="facebook_groups__box-link">
                            <a class="mj-btn mj-btn--secondary mj-btn--alt--2">
                                JOIN THE GROUP
                            </a>
                        </div>
                    </div>
                    <div class="facebook_groups__box">
                        <div class="facebook_groups__box-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/community/facebook_group_icon.png" alt="">
                        </div>
                        <div class="facebook_groups__box-text">
                            <h3>Asistenti Medicali - MEDIjobs Romania</h3>
                        </div>
                        <div class="facebook_groups__box-link">
                            <a class="mj-btn mj-btn--secondary mj-btn--alt--2">
                                JOIN THE GROUP
                            </a>
                        </div>
                    </div>
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
                <img class="leaders_image" src="<?php echo get_template_directory_uri(); ?>/images/community/leaders_image.png" alt="">
                <h1 class="headline light">Leaders in Healthcare Romania.</h1>
                <p>A conference for medical professionals.</p>
                <div class="community_social_links">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/community/web.png" alt=""></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/community/facebook.png" alt=""></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/community/instagram.png" alt=""></a>
                </div>
            </div>
            <div class="grid__item width-1/24 hide-on-mobile"></div>
            <div class="grid__item width-18/24">
                <img class="hide-on-mobile" src="<?php echo get_template_directory_uri(); ?>/images/community/leaders_colaj_desktop.png" alt="">
                <img class="hide-on-desktop leaders_image_2" src="<?php echo get_template_directory_uri(); ?>/images/community/leaders_colaj_mobile.png" alt="">
            </div>
        </div>
    </div>
</div>
<div id="section_5" class="section  section_5--community">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-24/24">
                <h1 class="headline biggest center">Meet your future <br> employers.</h1>
                <p class="center">Discover what it’s like to work at your favorite <br> brands before you even start.</p>
            </div>
        </div>  
    </div>  
    <img class="hide-on-mobile" src="<?php echo get_template_directory_uri(); ?>/images/community/section_6_bg.png" alt="">
    <img class="hide-on-desktop" src="<?php echo get_template_directory_uri(); ?>/images/community/section_5_mobile.png" alt="">
</div>
<?php get_footer(); ?>