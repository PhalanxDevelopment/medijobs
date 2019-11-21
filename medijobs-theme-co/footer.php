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
                        La MEDIjobs credem că puține lucruri sunt mai interesante decât construirea propriei cariere.
                    </p>
                </div>
                <div class="grid__item width-2/24"> </div>
                <div class="grid__item width-4/24">
                    <p class="no_links">
                        Pentru că nu e vorba despre a aplica la un job, ci despre oamenii pe care îi întâlnești și lucrurile noi pe care la afli.
                    </p>
                </div>
                <div class="grid__item width-2/24"> </div>
                <div class="grid__item width-4/24">
                    <div class="social__links no_footer_links">
                        <a href="https://www.facebook.com/medijobsromania" target="_blank" class="social__link facebook__link"></a>
                        <a href="https://instagram.com/medijobsromania" target="_blank" class="social__link instagram__link"></a>
                        <a href="https://www.linkedin.com/company/medijobs" target="_blank" class="social__link linkedin__link"></a>
                        <a href="https://www.youtube.com/channel/UCjVIzvRIjpAKDytRioKRb-w" target="_blank" class="social__link youtube__link"></a>
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
                    <div class="mj-lang-switcher hide-on-mobile btn-group" id="langSwitcher" style="float: right;margin-top: -33px;">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/RO-Flag.png">
                            <span class="glyphicon glyphicon-chevron-down"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#" title="Select this language"><img src="<?php echo get_template_directory_uri(); ?>/images/RO-Flag.png" style="margin-left:11px;"></a>
                            </li>
                            <li>
                                <a href="#" title="Select this language"><img src="<?php echo get_template_directory_uri(); ?>/images/RO-Flag.png" style="margin-left:11px;"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="grid__item width-2/24"></div>
                <div class="grid__item width-4/24">
                    <a href="<?php echo esc_url( get_page_link( 9104 ) ); ?>">Termeni şi condiţii</a>
                </div>
                <div class="grid__item width-2/24"></div>
                <div class="grid__item width-4/24">
                    <a href="<?php echo esc_url( get_page_link( 9106 ) ); ?>">Politica de confidentialitate</a>
                </div>
                <div class="grid__item width-2/24"></div>
                <div class="grid__item width-4/24">
                    <a href="">Sitemap</a>
                </div>
            </div>
        </div>
    </div>
    <?php 
        if ( is_page( array( 'Candidati', 'Companii') )) {
        ?>
        <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
        <?php } else { ?>
            <script src="<?php echo get_template_directory_uri(); ?>/js/main-blog.js"></script>
        <?php }
        wp_footer();
    ?>
</body>
</html>