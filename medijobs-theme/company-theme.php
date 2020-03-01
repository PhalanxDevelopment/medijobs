<?php
/**
 * Template Name: Company Theme Page
 * Description: First page of the site
 *
 * @package WordPress
 * @subpackage Medijobs
 */
get_header();
?>
<div id="quick_links" class="mj-quick_links hide-on-mobile">
    <ul>
        <li id="about_us_section_1" class="quick_link" data-section="1">
            HELLO THERE.
        </li>
    </ul>
</div>
<div id="section_1" class="section section_1">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-1/24 hide-on-mobile"></div>
            <div class="grid__item width-4/24">
                <h1 class="headline uppercase">HELLO THERE<span class="headline__blue">.</span> </h1>
            </div>
            <div class="grid__item width-19/24">
                <div class="secton_bg_image about_us">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/about-us/about-us_headline.png" alt="">
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
<?php get_footer(); ?>