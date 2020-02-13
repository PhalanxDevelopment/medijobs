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
            <div class="grid__item width-9/24">
                <div class="above_headline">Join Romania largest</div>
                <h1 class="headline uppercase">Medical Community.</span></h1>
            </div>
            <div class="grid__item width-6/24 hide-on-mobile">
                <div class="secton_bg_image about_us">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/community/hero_image_desktop.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>