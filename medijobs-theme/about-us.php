<?php
/**
 * Template Name: About us Page
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
    </div>
</div>
<div id="section_2" class="section section_about-us_2">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-1/24 hide-on-mobile"></div>
            <div class="grid__item width-6/24">
                <p class="about_us_text--bigger">MEDIjobs este cea mai mare platformă de recrutare medicală pentru personal medical din România, care conectează specialiști medicali cu oportunitățile de carieră din țară.</p>
                <p class="about_us_text--normal">Este locul unde profesioniștii medicali își dezvoltă cariera atât prin identificarea viitoarelor oportunități, cât și prin accesarea resurselor gratuite precum sfaturi de carieră, evenimente medicale sau interviuri cu personalități.</p>
                <p class="about_us_text--blue">MEDIjobs ajută clinicile și spitalele din România să își construiască echipe puternice, formate din personal medical calificat. Folosim tehnologia pentru a optimiza procesele de recrutare din industrie și conectăm companiile cu specialiștii medicali din țară.</p>
            </div>
            <div class="grid__item width-2/24 hide-on-mobile"></div>
            <div class="grid__item width-15/24">
                <img src="<?php echo get_template_directory_uri(); ?>/images/about-us/about_us_images_desktop.png" alt="">
            </div>
        </div>
    </div>
</div>
<div id="section_3" class="section section_about-us_3">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-1/24 hide-on-mobile"></div>
            <div class="grid__item width-23/24">
                <div class="about_us_map">
                    <div class="about_us_map__label">
                        <h3>Get in touch.</h3>
                    </div>
                    <div class="about_us_map__adress">
                        <div class="about_us_map_adress-field">
                            <div class="about_us_map_adress-field__label">Adress</div>
                            <div class="about_us_map_adress-field__value">Bulevardul Carol I 26, Etaj 2</div>
                        </div>
                        <div class="about_us_map_adress-field">
                            <div class="about_us_map_adress-field__label">Phone</div>
                            <div class="about_us_map_adress-field__value">+4 0749 099 291</div>
                        </div>
                        <div class="about_us_map_adress-field">
                            <div class="about_us_map_adress-field__label">Email</div>
                            <div class="about_us_map_adress-field__value"><a href="mailto:office@medijobs.ro">office@medijobs.ro</a></div>
                        </div>
                    </div>
                    <div class="about_us_map__google_map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2848.8654091934554!2d26.102565315381632!3d44.43592297910228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b202686650489f%3A0x1e5613281b2edb6f!2sMedijobs%20Romania!5e0!3m2!1sen!2sro!4v1580395412857!5m2!1sen!2sro" width="1288" height="472" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>