<?php
/**
 * Template Name: Conference Page
 * Description: First page of the site
 *
 * @package WordPress
 * @subpackage Medijobs
 */
get_header();
?>
<div id="section_1" class="section section--conference" style="background-image: url(<?php the_field('hero_background'); ?>)">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-1/24 hide-on-mobile"></div>
            <div class="grid__item width-2/24">
                <img class="conference_logo" src="<?php the_field('confrence_logo'); ?>" alt="">
            </div>
            <div class="grid__item width-1/24 hide-on-mobile"></div>
            <div class="grid__item width-7/24">
                <h1 class="headline uppercase"><?php the_field('hero_title_purple'); ?> <br> <span><?php the_field('hero_title_blue'); ?></span></h1>
                <h3 class="conference_location"><?php the_field('location'); ?></h3>
                <p><?php the_field('hero_text'); ?></p>
            </div>
        </div>
        <div class="mj-grid">
            <div class="grid__item width-1/24 hide-on-mobile"></div>
            <div class="grid__item width-14/24">
                <input type="hidden" id="date_of_conference" value="<?php the_field('conference_date'); ?>">
                <div class="conference_boxes">
                    <div class="conference_box conference_box--purple">
                        <div class="conference_box__value"><span id="days">0</span></div>
                        <div class="conference_box__label">days</div>
                    </div>
                    <div class="conference_box conference_box--purple">
                        <div class="conference_box__value"><span id="hours">0</span></div>
                        <div class="conference_box__label">hours</div>
                    </div>
                    <div class="conference_box conference_box--purple">
                        <div class="conference_box__value"><span id="minutes">0</span></div>
                        <div class="conference_box__label">minutes</div>
                    </div>
                    <div class="conference_box conference_box--purple">
                        <div class="conference_box__value"><span id="seconds">0</span></div>
                        <div class="conference_box__label">seconds</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mj-grid">
            <div class="grid__item width-1/24 hide-on-mobile"></div>
            <div class="grid__item width-13/24">
                <div class="subscribe__row">
                <?php
                    $formId = get_field('hubspot_portal_id');
                    $portalId = get_field('hubspot_form_id');
                ?>
                <?php echo do_shortcode('[hubspot type=form portal='.$portalId.' id='.$formId.']'); ?>
                </div>
            </div>
        </div>
        <div class="mj-grid">
            <div class="grid__item width-1/24 hide-on-mobile"></div>
            <div class="grid__item width-13/24">
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
        </div>
    </div>
</div>
<!--
<div id="section_4" class="section  section_4--community">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-1/24 hide-on-mobile"></div>
            <div class="grid__item width-4/24">
                <h1 class="headline light"><?php the_field('confrence_title'); ?></h1>
                <p><?php the_field('confrence_text'); ?></p>
                <div class="community_social_links">
                    <a style="max-width:200px; margin: 0 auto;" href="<?php the_field('confrence_button_link'); ?>" class="mj-btn mj-btn--secondary mj-btn--alt">
                        <?php the_field('confrence_button_text'); ?>
                    </a>
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
<div class="section section_statistics">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-23/24">
                <div class="statistics_box">
                    <h2><?php the_field('statistics_title'); ?></h2>

                    <div class="conference_boxes">
                        <?php $box1 = get_field('statistic_box_1');
                            if($box1['number']) {
                        ?>
                            <div class="conference_box">
                                <div class="conference_box__value"><?php echo $box1['number']; ?></div>
                                <div class="conference_box__label"><?php echo $box1['label']; ?></div>
                            </div>
                        <?php } ?>
                        <?php $box2 = get_field('statistic_box_2');
                            if($box2['number']) {
                        ?>
                            <div class="conference_box">
                                <div class="conference_box__value"><?php echo $box2['number']; ?></div>
                                <div class="conference_box__label"><?php echo $box2['label']; ?></div>
                            </div>
                        <?php } ?>
                        <?php $box3 = get_field('statistic_box_3');
                            if($box3['number']) {
                        ?>
                            <div class="conference_box">
                                <div class="conference_box__value"><?php echo $box3['number']; ?></div>
                                <div class="conference_box__label"><?php echo $box3['label']; ?></div>
                            </div>
                        <?php } ?>
                        <?php $box4 = get_field('statistic_box_4');
                            if($box4['number']) {
                        ?>
                            <div class="conference_box">
                                <div class="conference_box__value"><?php echo $box4['number']; ?></div>
                                <div class="conference_box__label"><?php echo $box4['label']; ?></div>
                            </div>
                        <?php } ?>
                        <?php $box5 = get_field('statistic_box_5');
                            if($box5['number']) {
                        ?>
                            <div class="conference_box">
                                <div class="conference_box__value"><?php echo $box5['number']; ?></div>
                                <div class="conference_box__label"><?php echo $box5['label']; ?></div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="section_5" class="section section_5--community" >
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-24/24">
                <h1 class="headline biggest center"><?php the_field('last_section_title'); ?></h1>
                <p class="center"><?php the_field('last_section_text'); ?>.</p>
                <a style="max-width:200px; margin: 0 auto;" href="<?php the_field('last_section_link'); ?>" class="mj-btn mj-btn--secondary mj-btn--alt">
                    <?php the_field('last_section_button_text'); ?>
                </a>
            </div>
        </div>
    </div>
    <img src="<?php the_field('last_section_image'); ?>" alt="">
</div>
-->
<script>
    function calculateTimeUntilConference() {
        var conferenceDate = new Date(document.getElementById('date_of_conference').value);
        var one_day=1000*60*60*24;
        var today=new Date();
        var daysLeft = Math.ceil((conferenceDate.getTime()-today.getTime())/(one_day));
        var hoursLeft = 0;
        if (conferenceDate.getHours() >= today.getHours()) {
            hoursLeft = Math.ceil((conferenceDate.getHours()-today.getHours()));
        } else {
            daysLeft = daysLeft - 1;
            hoursLeft = 24 - Math.ceil((today.getHours()-conferenceDate.getHours()));;
        }
        var minutesLeft = 0;

        if (conferenceDate.getMinutes() >= today.getMinutes()) {
            minutesLeft = Math.ceil((conferenceDate.getMinutes()-today.getMinutes()));
        } else {
            hoursLeft = hoursLeft - 1;
            minutesLeft = 60 - Math.ceil((today.getMinutes()-conferenceDate.getMinutes()));;
        }

        var secondsLeft = 0;

        if (conferenceDate.getSeconds() >= today.getSeconds()) {
            secondsLeft = Math.ceil((conferenceDate.getSeconds()-today.getSeconds()));
        } else {
            minutesLeft = minutesLeft - 1;
            secondsLeft = 60 - Math.ceil((today.getSeconds()-conferenceDate.getSeconds()));;
        }

        document.getElementById('days').innerHTML = daysLeft;
        document.getElementById('hours').innerHTML = hoursLeft;
        document.getElementById('minutes').innerHTML = minutesLeft;
        document.getElementById('seconds').innerHTML = secondsLeft;
    }
    setInterval(calculateTimeUntilConference, 1000);

</script>
<?php get_footer(); ?>
