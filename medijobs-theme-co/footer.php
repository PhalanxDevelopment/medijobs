</div>
<div class="mj-footer">
    <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24"> </div>
                <div class="grid__item width-4/24">
                    <div class="mj-logo">
                        <a href="/">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/Logo-nou.png" alt="Medijobs Logo">
                        </a>
                    </div>
                </div>
                <div class="grid__item width-2/24"> </div>
                <div class="grid__item width-4/24">
                    <p class="no_links">
                        At MEDIjobs we believe that few things are more interesting than building your own career.
                    </p>
                </div>
                <div class="grid__item width-2/24"> </div>
                <div class="grid__item width-4/24">
                    <p class="no_links">
                        It's not about applying for a job, but about the people you meet and the new things you learn.
                    </p>
                </div>
                <div class="grid__item width-2/24"> </div>
                <div class="grid__item width-4/24">
                    <div class="social__links no_footer_links">
                        <a href="https://www.facebook.com/MEDIjobsUSA" target="_blank" class="social__link facebook__link"></a>
                        <a href="https://www.instagram.com/medijobsusa/" target="_blank" class="social__link instagram__link"></a>
                        <a href="http://www.linkedin.com/company/medijobs-us" target="_blank" class="social__link linkedin__link"></a>
                    </div>
                    <div class="footer__call-to-action no_footer_links">
                        <a href="mailto:office@medijobs.co">Get in touch with us</a>
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
                        © 2019 Medijobs Inc.
                    </p>
                </div>
                <div class="grid__item width-2/24"></div>
                <div class="grid__item width-4/24">
                    <a href="<?php echo esc_url( get_page_link( 9104 ) ); ?>">Terms and Conditions</a>
                </div>
                <div class="grid__item width-2/24"></div>
                <div class="grid__item width-4/24">
                    <a href="<?php echo esc_url( get_page_link( 9106 ) ); ?>">Privacy Policy</a>
                </div>
                <div class="grid__item width-2/24"></div>
                <div class="grid__item width-4/24">
                   
                </div>
            </div>
        </div>
    </div>
    <?php 
        if ( is_page( array( 'For Candidates', 'For Companies') )) {
        ?>
        <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
        <?php } else { ?>
            <script src="<?php echo get_template_directory_uri(); ?>/js/main-blog.js"></script>
        <?php }
        wp_footer();
    ?>
</body>
</html>