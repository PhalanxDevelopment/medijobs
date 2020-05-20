<?php
/* Template Name: Custom Search */        
get_header(); ?> 
<div id="section_1" class="section section_1 section_1--faq">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-1/24 hide-on-mobile"></div>
            <div class="grid__item width-7/24">
                <h1 class="headline light"><?php the_field('hero_title', 9121); ?></h1>
                <p class="hide-on-mobile"><?php the_field('normal_text', 9121); ?></p>
                <div class="sub_section hide-on-mobile" style="margin-top:300px"><?php the_field('bottom_link_text', 9121); ?></div>
            </div>
            <div class="grid__item width-2/24 hide-on-mobile"></div>
            <div class="grid__item width-14/24">
                <div class="facebook_groups">
                    <div class="facebook_groups__box">
                        <div class="facebook_groups__box-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/faq/candidate_icon.png" alt="">
                        </div>
                        <div class="facebook_groups__box-text">
                            <h3><?php the_field('first_box_title', 9121); ?></h3>
                        </div>
                        <div class="facebook_groups__box-link">
                            <a href="<?php the_field('first_box_button_link', 9121); ?>" class="mj-btn mj-btn--secondary mj-btn--alt--2">
                            <?php the_field('first_box_button_text', 9121); ?>
                            </a>
                        </div>
                    </div>
                    <div class="facebook_groups__box">
                        <div class="facebook_groups__box-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/faq/company_icon.png" alt="">
                        </div>
                        <div class="facebook_groups__box-text">
                            <h3><?php the_field('second_box_title', 9121); ?></h3>
                        </div>
                        <div class="facebook_groups__box-link">
                            <a href="<?php the_field('second_box_button_link', 9121); ?>" class="mj-btn mj-btn--secondary mj-btn--alt--2">
                                <?php the_field('second_box_button_text', 9121); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>            
<div id="section_2" class="section section_2--faq">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-10/24"></div>
            <div class="grid__item width-14/24">
                <div class="faq_group">
                    <h3 class="faq_group__title">Search Result for : <?php echo "$s"; ?></h3>
                    <div class="faq_group__list">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="faq_group__item">
                            <h3 class="faq_group__item-title"><?php the_title(); ?></h3>
                            <div class="faq_group__item-content">
                            <?php the_content(); ?>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var elements = document.querySelectorAll('.faq_group__item');
    elements.forEach(el => {
        el.onclick = function() {
        el.classList.toggle('active');
    }
    })
</script>
<?php get_footer(); ?>