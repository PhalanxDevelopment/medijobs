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
    <form id="form" action="https://app.medijobs.ro/register/candidate" method="post" class="mj-register_form mj-form press-form">
        <div id="close-form" class="close hide-on-desktop"></div>
        <h3>Press Kit.</h3>
        <p>Receive our Press kit when you sign up to receive our latest press release.</p>
        <input class="mj-input" name="name" type="text" placeholder="Your Full Name">
        <input class="mj-input" name="email" type="email" placeholder="Your Email" >
        <button type="submit" class="mj-btn mj-btn--primary mj-btn--alt--2 uppercase">
            SUBMIT 
        </button>
    </form>
</div>
<div id="section_1" class="section section_1 section--press">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-1/24 hide-on-mobile"></div>
            <div class="grid__item width-9/24">
                <div class="above_headline">This is the press section</div>
                <h1 class="headline uppercase">Press.</span></h1>
            </div>
        </div>
        <div class="mj-grid">
            <div class="grid__item width-1/24 hide-on-mobile"></div>
            <div class="grid__item width-9/24">
                <p>Our press loves working with journalists to share compelling and unique stories. If you are a member of the media and would like to talk, please get in touch with our team  <a href="mailto:press@medijobs.ro">press@medijobs.ro</a></a>
                <p>If you are looking for some Medijobs media content, please <a href="#">download our Press Kit.</a> </p>
                <p class="grey">Only media inquiries will receive a response. If you are a candidate or a company and have questions about the site, please visit medijobs.ro/FAQ</p>
                <div class="sub_section hide-on-mobile">CHECKOUT OUR LATEST PUBLICATION</div>
            </div>
        </div>
    </div>
</div>
<div id="section_2" class="section section_2_press">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-1/24"></div>
            <div class="grid__item width-13/24">
                <h1 class="headline light">Our latest press release.</h1>

                <div class="press_release_box">
                    <div class="press_release_box__image">
                        <img  src="<?php echo get_template_directory_uri(); ?>/images/press/press_release.png" alt="">  
                    </div>
                    <div class="press_release_box__title">
                        <h3>Platforma românilor care scade timpul de recrutare a unui medic de la mai mult de 3 luni la doar 72 de ore.</h3>
                    </div>
                    <div class="press_release_box__date">
                        <span>PUBLISHED ON</span> <br>
                            September 25, 2019
                    </div>
                    <a href="#" class="mj-btn mj-btn--secondary">
                        READ THE FULL ARTICLE
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="section_2" class="section section_2_press">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-1/24"></div>
            <div class="grid__item width-13/24">
                <h1 class="headline uppercase">Press KIT.</h1>
                <p>Please browse below what our fully packed press & media kit will offer you and what it contains.</p>
                <p class="grey">To download all of the below please fill out the form on the right.</p>
                <div class="press_info">
                    <div class="press_info_box">
                        <h3>Our Logo</h3>
                        <p>And all its instances for all your needs, from web usage to ready for print materials.</p>
                        <img  src="<?php echo get_template_directory_uri(); ?>/images/press/logos.png" alt="">  
                    </div>
                    <div class="press_info_box">
                        <h3>Leadership Information</h3>
                        <p>For all your needs, from web usage, print and also television.</p>
                        <div class="leadership_boxes">
                            <div class="leadership_box">
                                <img class="leadership__image" src="<?php echo get_template_directory_uri(); ?>/images/about-us/catrinel.png" alt="">
                                <h3 class="learship__name">Catrinel Hagivreta</h3>
                                <h6 class="learship__position">CEO-Cofounder</h6>
                                <p class="leadership__quote">În mai 2015 am început să lucrăm la dezvoltarea platformei. Am reușit să atragem alături de noi un tech partner și am pornit compania cu 3 oameni si câțiva colaboratori.</p>
                            </div>
                            <div class="leadership_box">
                                <img class="leadership__image" src="<?php echo get_template_directory_uri(); ?>/images/about-us/george.png" alt="">
                                <h3 class="learship__name">George Hagivreta</h3>
                                <h6 class="learship__position">COO-Cofounder</h6>
                                <p class="leadership__quote">În martie 2016 am lansat platforma îmbunătățită, care a fost mult mai bine primită de o comunitate deja bine formată de câteva mii de specialiști și companii medicale.</p>
                            </div>
                        </div>
                    </div>
                    <div class="press_info_box">
                        <h3>Office Photography</h3>
                        <p>For all your needs, from web usage to ready for print materials.</p>
                        <img  src="<?php echo get_template_directory_uri(); ?>/images/press/office_photography.png" alt="">  
                    </div>
                    <div class="press_info_box">
                        <h3>Introductionary Video (in the future)</h3>
                        <p>For all your needs, from web usage to television.</p>
                        <img  src="<?php echo get_template_directory_uri(); ?>/images/press/video.png" alt="">  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>