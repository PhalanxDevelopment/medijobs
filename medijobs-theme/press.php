<?php
/**
 * Template Name: Press Page
 * Description: First page of the site
 *
 * @package WordPress
 * @subpackage Medijobs
 */
get_header();
?>
<div class="mj-container">
    <div id="form" class="mj-register_form mj-form job-form">
        <div id="close-form" class="close hide-on-desktop"></div>
        <h3><?php the_field('form_title');?></h3>
        <p><?php the_field('form_text'); ?></p>
        <?php
            $formId = get_field('hubspot_id');
            $portalId = get_field('portal_id');
        ?>
        <?php echo do_shortcode('[hubspot type=form portal='.$portalId.' id='.$formId.']'); ?>
    </div>
</div>
<div id="section_1" class="section section_1 section--press">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-1/24 hide-on-mobile"></div>
            <div class="grid__item width-9/24">
                <div class="above_headline"><?php the_field('above_header'); ?></div>
                <h1 class="headline uppercase"><?php the_field('title'); ?></span></h1>
            </div>
        </div>
        <div class="mj-grid">
            <div class="grid__item width-1/24 hide-on-mobile"></div>
            <div class="grid__item width-9/24">
                <?php the_field('text'); ?>
                <p style="font-size:16px; color:#808285;margin-top:35px;"><?php the_field('grey_text'); ?></p>
                <div class="sub_section hide-on-mobile"><?php the_field('hero_link_text'); ?></div>
            </div>
        </div>
    </div>
</div>
<div id="section_2" class="section section_2_press">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-1/24"></div>
            <div class="grid__item width-13/24">
                <h2 class="headline light"><?php the_field('press_release_title');?></h2>
                <?php
                    $args = array(
                        'post_status' => 'publish',
                        'posts_per_page' => 2,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'post_tag',
                                'field'=> 'slug',
                                'operator'=> 'IN',
                                'terms'    => array(get_field('press_release_tag')),
                            ),
                        ),
                    );

                    $loop = new WP_Query( $args );

                    while ( $loop->have_posts() ) : $loop->the_post();  ?>
                    <div class="press_release_box">
                        <div class="press_release_box__title">
                            <h3><?php the_title(); ?></h3>
                        </div>
                        <div class="press_release_box__date">
                            <span>Publicat pe</span> <br>
                                <?php the_date(); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="mj-btn mj-btn--secondary">
                            Citeste tot
                        </a>
                    </div>
                    <?php endwhile;
                        wp_reset_postdata();
                    ?>
                    <a href="<?php echo get_home_url(); ?>/etichete/<?php echo get_field('press_release_tag')?>" class="mj-btn mj-btn--secondary mj-btn--alt">
                        Vedeti toate articolele
                    </a>
            </div>
        </div>
    </div>
</div>

<div id="section_2" class="section section_2_press">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-1/24"></div>
            <div class="grid__item width-13/24">
                <h2 class="headline uppercase"><?php the_field('press_kit_title'); ?></h2>
                <?php the_field('press_kit_text'); ?>
                <div class="press_info">
                    <div class="press_info_box">
                        <h4> <?php the_field('our_logo_title'); ?></h4>
                        <p> <?php the_field('our_logo_text'); ?></p>
                        <img  src=" <?php the_field('our_logo_image'); ?>" alt="">
                    </div>
                    <div class="press_info_box">
                        <h4> <?php the_field('leadership_title'); ?></h4>
                        <p><?php the_field('leadership_text'); ?></p>
                        <div class="leadership_boxes">
                        <?php $leadershipBox1 = get_field('leadership_box_1');
                            if($leadershipBox1['name']) { ?>
                                <div class="leadership_box">
                                    <img class="leadership__image" src="<?php echo $leadershipBox1['image']; ?>" alt="">
                                    <h3 class="learship__name"><?php echo $leadershipBox1['name']; ?></h3>
                                    <h6 class="learship__position"><?php echo $leadershipBox1['position']; ?></h6>
                                    <p class="leadership__quote"><?php echo $leadershipBox1['description']; ?></p>
                                </div>
                            <?php } ?>
                            <?php $leadershipBox2 = get_field('leadership_box_2');
                            if($leadershipBox2['name']) { ?>
                                <div class="leadership_box">
                                    <img class="leadership__image" src="<?php echo $leadershipBox2['image']; ?>" alt="">
                                    <h3 class="learship__name"><?php echo $leadershipBox2['name']; ?></h3>
                                    <h6 class="learship__position"><?php echo $leadershipBox2['position']; ?></h6>
                                    <p class="leadership__quote"><?php echo $leadershipBox2['description']; ?></p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="press_info_box">
                        <h4><?php the_field('photo_title'); ?></h4>
                        <p><?php the_field('photo_text'); ?></p>
                        <div class="ofice_pictures">
                            <img  src="<?php the_field('photo_image_1'); ?>" alt="">
                            <img  src="<?php the_field('photo_image_2'); ?>" alt="">
                            <img  src="<?php the_field('photo_image_3'); ?>" alt="">
                            <img  src="<?php the_field('photo_image_4'); ?>" alt="">
                        </div>
                    </div>
                    <div class="press_info_box">
                        <h4><?php the_field('video_title'); ?></h4>
                        <?php the_field('videos_text'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
 function getWidth() {
        return Math.max(
            document.body.scrollWidth,
            document.documentElement.scrollWidth,
            document.body.offsetWidth,
            document.documentElement.offsetWidth,
            document.documentElement.clientWidth
            );
    }
    if(getWidth() > 1400) {
        window.addEventListener("scroll", function(e) {
            var form = document.getElementById("form");
            var limit = document.body.offsetHeight - window.innerHeight;
            if( window.scrollY > (limit - 600)) {
                form.className = 'mj-register_form mj-form job-form absolute';
                form.style = 'top: ' + (limit - 600) + 'px';
            } else {
                form.className = 'mj-register_form mj-form job-form';
                form.style = '';
            }
        });
    }
</script>
<?php get_footer(); ?>
