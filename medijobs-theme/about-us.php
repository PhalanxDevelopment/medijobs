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
        <div class="mj-grid hide-on-desktop">
            <div class="grid__item width-19/24">
                <div class="sub_section">CHECKOUT OUR LOVELY OFFICES</div>
            </div>
            <div class="grid__item width-4/24">
            </div>
        </div>
    </div>
</div>
<div id="section_2" class="section section_about-us_2">
    <div class="mj-container">
        <div class="mj-grid reverse_order">
            <div class="grid__item width-1/24 hide-on-mobile"></div>
            <div class="grid__item width-6/24">
                <p class="about_us_text--bigger">MEDIjobs este cea mai mare platformă de recrutare medicală pentru personal medical din România, care conectează specialiști medicali cu oportunitățile de carieră din țară.</p>
                <p class="about_us_text--normal">Este locul unde profesioniștii medicali își dezvoltă cariera atât prin identificarea viitoarelor oportunități, cât și prin accesarea resurselor gratuite precum sfaturi de carieră, evenimente medicale sau interviuri cu personalități.</p>
                <p class="about_us_text--blue">MEDIjobs ajută clinicile și spitalele din România să își construiască echipe puternice, formate din personal medical calificat. Folosim tehnologia pentru a optimiza procesele de recrutare din industrie și conectăm companiile cu specialiștii medicali din țară.</p>
            </div>
            <div class="grid__item width-2/24 hide-on-mobile"></div>
            <div class="grid__item width-15/24">
                <img class="hide-on-mobile" src="<?php echo get_template_directory_uri(); ?>/images/about-us/about_us_images_desktop.png" alt="">
                <img class="hide-on-desktop about_us_image" src="<?php echo get_template_directory_uri(); ?>/images/about-us/about_us_images_mobile.png" alt="">
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
                        <div class="about_us_map_adress-field about_us_map_adress-field--last">
                            <div class="about_us_map_adress-field__label">Email</div>
                            <div class="about_us_map_adress-field__value"><a href="mailto:office@medijobs.ro">office@medijobs.ro</a></div>
                        </div>
                    </div>
                    <div class="about_us_map__google_map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2848.8654091934554!2d26.102565315381632!3d44.43592297910228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b202686650489f%3A0x1e5613281b2edb6f!2sMedijobs%20Romania!5e0!3m2!1sen!2sro!4v1580395412857!5m2!1sen!2sro" width="100%" height="472" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="section_3" class="section section_about-us_3">
    <div class="mj-container">
        <div class="mj-grid">
        <div class="grid__item width-2/24 hide-on-mobile"></div>
        <div class="grid__item width-20/24">
            <div class="team_glossary">
                <div class="team_glossary__header">
                    <div class="team_glossary__person team_glossary__person--manager">
                        <div class="team_glossary__person-image"><img src="<?php echo get_template_directory_uri(); ?>/images/about-us/catrinel.png" alt=""></div>
                        <div class="team_glossary__person-name">Catrinel Hagivreta</div>
                        <div class="team_glossary__person-position">CEO & Co-Founder Medijobs Romania</div>
                        <div class="team_glossary__person-link"><a href="#">Linkedin</a></div>
                    </div>
                    <h2>Meet <br> the <br> Team.</h2>
                    <div class="team_glossary__person team_glossary__person--manager">
                    <div class="team_glossary__person-image"><img src="<?php echo get_template_directory_uri(); ?>/images/about-us/george.png" alt=""></div>
                        <div class="team_glossary__person-name">GEORGE Hagivreta</div>
                        <div class="team_glossary__person-position">CEO & Co-Founder Medijobs Romania</div>
                        <div class="team_glossary__person-link"><a href="#">Linkedin</a></div>
                    </div>
                </div>
                <div class="team_glossary__body">
                    <div class="team_glossary__person">
                        <div class="team_glossary__person-image"><img src="<?php echo get_template_directory_uri(); ?>/images/about-us/generic_image.png" alt=""></div>
                        <div class="team_glossary__person-name">GEORGE Hagivreta</div>
                        <div class="team_glossary__person-position">Lawyer</div>
                        <div class="team_glossary__person-link"><a href="#">Linkedin</a></div>
                    </div>
                    <div class="team_glossary__person">
                        <div class="team_glossary__person-image"><img src="<?php echo get_template_directory_uri(); ?>/images/about-us/generic_image2.png" alt=""></div>
                        <div class="team_glossary__person-name">GEORGE Hagivreta</div>
                        <div class="team_glossary__person-position">Lawyer</div>
                        <div class="team_glossary__person-link"><a href="#">Linkedin</a></div>
                    </div>
                    <div class="team_glossary__person">
                        <div class="team_glossary__person-image"><img src="<?php echo get_template_directory_uri(); ?>/images/about-us/generic_image3.png" alt=""></div>
                        <div class="team_glossary__person-name">GEORGE Hagivreta</div>
                        <div class="team_glossary__person-position">Lawyer</div>
                        <div class="team_glossary__person-link"><a href="#">Linkedin</a></div>
                    </div>
                    <div class="team_glossary__person">
                        <div class="team_glossary__person-image"><img src="<?php echo get_template_directory_uri(); ?>/images/about-us/generic_image4.png" alt=""></div>
                        <div class="team_glossary__person-name">GEORGE Hagivreta</div>
                        <div class="team_glossary__person-position">Lawyer</div>
                        <div class="team_glossary__person-link"><a href="#">Linkedin</a></div>
                    </div>
                    <div class="team_glossary__person">
                        <div class="team_glossary__person-image"><img src="<?php echo get_template_directory_uri(); ?>/images/about-us/generic_image.png" alt=""></div>
                        <div class="team_glossary__person-name">GEORGE Hagivreta</div>
                        <div class="team_glossary__person-position">Lawyer</div>
                        <div class="team_glossary__person-link"><a href="#">Linkedin</a></div>
                    </div>
                    <div class="team_glossary__person">
                        <div class="team_glossary__person-image"><img src="<?php echo get_template_directory_uri(); ?>/images/about-us/generic_image2.png" alt=""></div>
                        <div class="team_glossary__person-name">GEORGE Hagivreta</div>
                        <div class="team_glossary__person-position">Lawyer</div>
                        <div class="team_glossary__person-link"><a href="#">Linkedin</a></div>
                    </div>
                    <div class="team_glossary__person">
                        <div class="team_glossary__person-image"><img src="<?php echo get_template_directory_uri(); ?>/images/about-us/generic_image3.png" alt=""></div>
                        <div class="team_glossary__person-name">GEORGE Hagivreta</div>
                        <div class="team_glossary__person-position">Lawyer</div>
                        <div class="team_glossary__person-link"><a href="#">Linkedin</a></div>
                    </div>
                    <div class="team_glossary__person">
                        <div class="team_glossary__person-image"><img src="<?php echo get_template_directory_uri(); ?>/images/about-us/generic_image4.png" alt=""></div>
                        <div class="team_glossary__person-name">GEORGE Hagivreta</div>
                        <div class="team_glossary__person-position">Lawyer</div>
                        <div class="team_glossary__person-link"><a href="#">Linkedin</a></div>
                    </div>
                    <div class="team_glossary__person">
                        <div class="team_glossary__person-image"><img src="<?php echo get_template_directory_uri(); ?>/images/about-us/generic_image.png" alt=""></div>
                        <div class="team_glossary__person-name">GEORGE Hagivreta</div>
                        <div class="team_glossary__person-position">Lawyer</div>
                        <div class="team_glossary__person-link"><a href="#">Linkedin</a></div>
                    </div>
                    <div class="team_glossary__person">
                        <div class="team_glossary__person-image"><img src="<?php echo get_template_directory_uri(); ?>/images/about-us/generic_image2.png" alt=""></div>
                        <div class="team_glossary__person-name">GEORGE Hagivreta</div>
                        <div class="team_glossary__person-position">Lawyer</div>
                        <div class="team_glossary__person-link"><a href="#">Linkedin</a></div>
                    </div>
                    <div class="team_glossary__person">
                        <div class="team_glossary__person-image"><img src="<?php echo get_template_directory_uri(); ?>/images/about-us/generic_image3.png" alt=""></div>
                        <div class="team_glossary__person-name">GEORGE Hagivreta</div>
                        <div class="team_glossary__person-position">Lawyer</div>
                        <div class="team_glossary__person-link"><a href="#">Linkedin</a></div>
                    </div>
                    <div class="team_glossary__person">
                        <div class="team_glossary__person-image"><img src="<?php echo get_template_directory_uri(); ?>/images/about-us/generic_image4.png" alt=""></div>
                        <div class="team_glossary__person-name">GEORGE Hagivreta</div>
                        <div class="team_glossary__person-position">Lawyer</div>
                        <div class="team_glossary__person-link"><a href="#">Linkedin</a></div>
                    </div>
                </div>
                <div class="team_glossary__footer">
                    <h3>ALATURA-TE ECHIPEI NOASTRE</h3>
                </div>
            </div>
        </div>
        <div class="grid__item width-2/24 hide-on-mobile"></div>
        </div>
    </div>
</div>
<div id="section_4" class="section section_about-us_4">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-1/24 hide-on-mobile"></div>
            <div class="grid__item width-6/24">
                <h3>Work with us.</h3>
                <p>Suntem un start-up care crește rapid și punem pasiune în ceea ce facem.</p>
                <p>Ne dorim ca membri echipei noastre să fie deschiși la schimbări și să își dorească să învețe în fiecare zi, să aibă o motivație puternică și să manifeste responsabilitate.</p>
                <p>Facem angajări pentru echipa noastră cu aceeași grijă cu care o facem pentru clienții noștri.</p>
                <button class="mj-btn mj-btn--secondary mj-btn--alt--2">VEZI TOATE POSTURILE DESCHISE</button>
            </div>
            <div class="grid__item width-2/24 hide-on-mobile"></div>
            <div class="grid__item width-14/24">
                <div class="mj-jobs">
                    <div class="mj-jobs__item">
                        <div class="mj-jobs__item-position">
                            Marketing Specialist
                        </div>
                        <div class="mj-jobs__item-location">
                            BUCURESTI, RO
                        </div>
                        <div class="mj-jobs__item-department">
                            Department Name
                        </div>
                        <div class="mj-jobs__item-type">
                            FULL-TIME
                        </div>
                    </div>
                    <div class="mj-jobs__item">
                        <div class="mj-jobs__item-position">
                            Marketing Specialist
                        </div>
                        <div class="mj-jobs__item-location">
                            BUCURESTI, RO
                        </div>
                        <div class="mj-jobs__item-department">
                            Department Name
                        </div>
                        <div class="mj-jobs__item-type">
                            FULL-TIME
                        </div>
                    </div>
                    <div class="mj-jobs__item">
                        <div class="mj-jobs__item-position">
                            Marketing Specialist
                        </div>
                        <div class="mj-jobs__item-location">
                            BUCURESTI, RO
                        </div>
                        <div class="mj-jobs__item-department">
                            Department Name
                        </div>
                        <div class="mj-jobs__item-type">
                            FULL-TIME
                        </div>
                    </div>
                    <div class="mj-jobs__item">
                        <div class="mj-jobs__item-position">
                            Marketing Specialist
                        </div>
                        <div class="mj-jobs__item-location">
                            BUCURESTI, RO
                        </div>
                        <div class="mj-jobs__item-department">
                            Department Name
                        </div>
                        <div class="mj-jobs__item-type">
                            FULL-TIME
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid__item width-1/24 hide-on-mobile"></div>
        </div>
    </div>
</div>
<div id="section_5" class="section section_about-us_5">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-1/24 hide-on-mobile"></div>
            <div class="grid__item width-23/24">
                <div class="about-us_boxes">
                    <div class="about-us_box about-us_box--left">
                        <p>MEDIjobs este cea mai mare platformă de recrutare medicală pentru personal medical din România. Credem că responsabilitatea noastră față de îmbunătățirea serviciilor medicale din țară este ceea ce ne motivează în fiecare zi să aducem cei mai pregătiți și talentați specialiști medicali alături de centrele medicale. Prin intermediul tehnologiei și inovației găsim mereu soluții pentru a rezolva problemele companiilor. </p>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/about-us/about_us_square_1.png" alt="">
                    </div>
                    <div class="about-us_box">
                        <p>Participăm activ la îmbunătățirea serviciilor medicale din România. Prin intermediul platformei sute de medici, asistenți medicali și alte tipuri de specialiști și-au găsit oportunitatea de carieră ideală. Satisfacția este cu atât mai mare știind că acești oameni ajută și salvează pacienții români. </p>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/about-us/about_us_square_2.png" alt="">
                    </div>
                    <div class="about-us_box about-us_box--left">
                        <p>Într-un start-up care se află într-o creștere continuă, oamenii sunt cei mai importanți. Învățăm în fiecare zi, de aceea susținem dezvoltarea oamenilor din echipa noastră prin planuri de carieră, precum și prin programe de training care ajută la îmbunătățirea abilităților și cunoștințelor. Suntem pasionați de ceea ce facem și muncim să o facem din ce în ce mai bine, zi dupa zi, pas cu pas</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/about-us/about_us_square_3.png" alt="">
                    </div>
                    <div class="about-us_box about-us_box--last">
                        <p>Susținem dezvoltarea profesioniștilor medicali prin implicarea activă în comunitate. Anual organizăm conferința Leaders in Heatlhcare unde ne propunem să continuăm educarea specialiștilor medicali.</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/about-us/about_us_square_4.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="section_6" class="section section_blog_company section section_about-us_6">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-1/24"> </div>
            <div class="grid__item width-23/24">
                <div class="company_bg our_investors hide-on-mobile">
                    <div class="company_box mj-form our_investors">
                        <h3>Our <br/>Investors.</h3>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/about-us/Enayati-Group-Transparent_BG_logo.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/about-us/techstars-logo.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/about-us/logo-gapminder.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="section_7" class="section section_about-us_7">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-24/24">
                <div class="mj-feeds">
                    <div class="mj-feed facebook">
                        <div class="fb-page" data-href="https://www.facebook.com/medijobsromania/" data-tabs="timeline" data-width="448" data-height="704" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/medijobsromania/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/medijobsromania/">MEDIjobs Romania</a></blockquote></div>
                    </div>
                    <div class="mj-feed instagram">
                            <?php echo do_shortcode('[instagram-feed heightunit=px height=704 widthunit=px width=448 cols=1]');?>
                    </div>
                    <div class="mj-feed linkedin">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>