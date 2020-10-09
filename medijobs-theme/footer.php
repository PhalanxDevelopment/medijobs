</div>
<?php $frontpage_id = (int)get_option( 'page_on_front' ); ?>
<div class="mj-footer">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24"> </div>
                <div class="grid__item width-4/24">
                    <div class="mj-logo">
                        <a href="/">
                            <img src="<?php the_field('logo', $frontpage_id); ?>" alt="Medijobs Logo">
                        </a>
                    </div>
                    <?php the_field('footer_text', $frontpage_id); ?>
                </div>
                <div class="grid__item width-2/24"></div>
                <div class="grid__item width-3/24">
                    <div class="footer__links">
                        <h5 class="footer__links_header">
                            <a href="<?php the_field('first_column_link', $frontpage_id); ?>">
                                <?php the_field('first_column_heading', $frontpage_id); ?>
                            </a>
                        </h5>
                        <?php wp_nav_menu( array(  'container' => 'ul', 'menu_class' => 'footer__menu',  'theme_location' => 'about-menu' ) ); ?>
                    </div>
                </div>
                <div class="grid__item width-2/24 hide-on-mobile"></div>
                <div class="grid__item width-4/24">
                    <div class="footer__links">
                        <h5 class="footer__links_header">
                            <a href="<?php the_field('second_column_link', $frontpage_id); ?>">
                                <?php the_field('second_column_heading', $frontpage_id); ?>
                            </a>
                        </h5>
                        <ul class="footer__menu">
                            <?php wp_nav_menu( array(  'container' => 'ul', 'menu_class' => 'footer__menu',  'theme_location' => 'community-menu' ) ); ?>
                        </ul>
                    </div>
                    <div class="social__links">
                        <a href=" <?php the_field('facebook_link', $frontpage_id); ?>" target="_blank" class="social__link facebook__link" style="background:url(<?php the_field('social_media_logo_1', $frontpage_id); ?>);"></a>
                        <a href=" <?php the_field('instagram_link', $frontpage_id); ?>" target="_blank" class="social__link instagram__link" style="background:url(<?php the_field('social_media_logo_2', $frontpage_id); ?>);"></a>
                        <a href=" <?php the_field('linkedin_link', $frontpage_id); ?>" target="_blank" class="social__link linkedin__link" style="background:url(<?php the_field('social_media_logo_3', $frontpage_id); ?>);"></a>
                        <a href=" <?php the_field('youtube_link', $frontpage_id); ?>" target="_blank" class="social__link youtube__link" style="background:url(<?php the_field('social_media_logo_4', $frontpage_id); ?>);"></a>

                        <?php if(get_field('pinterest_link', $frontpage_id)) { ?>
                            <a href=" <?php the_field('pinterest_link', $frontpage_id); ?>" target="_blank" class="social__link youtube__link" style="background:url(<?php the_field('social_media_logo_5', $frontpage_id); ?>);"></a>
                        <?php } ?>

                        <?php if(get_field('twitter_link', $frontpage_id)) { ?>
                            <a href=" <?php the_field('twitter_link', $frontpage_id); ?>" target="_blank" class="social__link youtube__link" style="background:url(<?php the_field('social_media_logo_6', $frontpage_id); ?>);"></a>
                        <?php } ?>

                    </div>
                </div>
                <div class="grid__item width-2/24"></div>
                <div class="grid__item width-4/24">
                    <div class="footer__links">
                        <h5 class="footer__links_header">
                            <a href="<?php the_field('third_column_link', $frontpage_id); ?>">
                                <?php the_field('third_column_heading', $frontpage_id); ?>
                            </a>
                        </h5>
                        <?php wp_nav_menu( array(  'container' => 'ul', 'menu_class' => 'footer__menu',  'theme_location' => 'product-menu' ) ); ?>
                    </div>
                    <div class="footer__call-to-action">
                    <a href="<?php the_field('get_in_touch_link', $frontpage_id); ?>"><?php the_field('get_in_touch_text', $frontpage_id); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mj-sub-footer">
        <div class="mj-container">
            <div class="mj-grid">
            <div class="grid__item width-1/24"> </div>
                <div class="grid__item width-4/24">
                    <p>
                        © <?php echo date("Y"); ?> <?php the_field('copyright', $frontpage_id); ?>
                    </p>
                    <div class="mj-lang-switcher hide-on-mobile btn-group" id="langSwitcher" style="float: right;margin-top: -33px;">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/RO-Flag.png">
                            <span class="glyphicon glyphicon-chevron-down"></span>
                        </button>
                    </div>
                </div>
                <div class="grid__item width-2/24"></div>
                <div class="grid__item width-16/24">
                    <?php wp_nav_menu( array(  'container' => 'ul', 'menu_class' => 'sub_menu_footer',  'theme_location' => 'footer-sub-menu' ) ); ?>
                </div>
            </div>
        </div>
    </div>
    <?php 
        if ( is_page_template( 'candidate.php' ) || is_page_template( 'company.php' ) ) { ?>
            <script src="<?php echo get_template_directory_uri(); ?>/js/main.js?ver=5"></script>
        <?php } else { ?>
            
            <script src="<?php echo get_template_directory_uri(); ?>/js/main-blog.js?ver=2"></script>
        <?php }
        wp_footer();
    ?>
    
</body>
</html>