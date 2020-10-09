<?php
/**
 * Template Name: Company Page
 * Description: First page of the site
 *
 * @package WordPress
 * @subpackage Medijobs
 */
get_header();
?>
<style>
    .mj-list .mj-list__item {
        background-size: 6%;
        background-position: left 20px top 50px;
    }

</style>
    <div class="mj-quick_links hide-on-mobile">
    <ul>
            <li id="ql_section_1" class="quick_link" data-section="1">
                Welcome to Medijobs
            </li>
            <li id="ql_section_2" class="quick_link" data-section="2">
                Benefits
            </li>
            <li id="ql_section_3" class="quick_link" data-section="3">
                Checkout
            </li>
            <li id="ql_section_4" class="quick_link" data-section="4">
                Where we're active
            </li>
            <li id="ql_section_6" class="quick_link" data-section="6">
                For Employer
            </li>
            <li id="ql_section_7" class="quick_link" data-section="7">
                Our Process
            </li>
        </ul>
    </div>
    <div id="isCompany" class="mj-container">
        <form id="form" action="https://app.medijobs.co/register/company" method="post" class="mj-register_form mj-form">
            <div id="close-form" class="close hide-on-desktop"></div>
            <a href="https://app.medijobs.co/login" class="login">REGISTERED ALREADY? LOGIN</a>
            <h3>FILL OPEN ROLES WITHIN 30 DAYS</h3>
            <p>Only interview ideal candidates pre-qualified for your role.</p>
            <input class="mj-input" name="name"  type="text" placeholder="Full name" >
            <input class="mj-input" name="email"  type="email" placeholder="Email" >
            <button type="submit" class="mj-btn mj-btn--primary mj-btn--alt--2 uppercase">
                Create a Profile
            </button>
            <p class="mj-align--center mj-font--small">Are you a candidate? <a href="https://app.medijobs.co/register/candidate">Create a profile here.</a></p>
        </form>
    </div>
    <div id="section_1" class="section section_1">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24 hide-on-mobile"></div>
                <div class="grid__item width-9/24">
                    <h1 class="headline" style="font-size:40px;line-height:45px;">An exclusive network matching healthcare practices with their ideal new colleagues. </h1>
                </div>
                <div class="grid__item width-6/24 hide-on-mobile">
                    <div class="secton_bg_image company">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/company_section_1.png" alt="">
                    </div>
                </div>
            </div>
            <div class="mj-grid">
                <div class="grid__item width-1/24 hide-on-mobile"></div>
                <div class="grid__item width-7/24">
                    <p>Join the MEDIjobs community to find your next ideal colleague.</p>
                </div>
            </div>
            <div class="mj-grid">
                <div class="grid__item width-10/24">
                    <div id="open-form" class="mj-btn mj-btn--primary hide-on-desktop" style="font-weight: bold;padding-top: 13px;">
                        Sign up for free
                    </div>
                    <p class="mj-align--center mj-font--small hide-on-desktop">Are you a candidate? <a href="https://app.medijobs.co/register/candidate">Create a profile here.</a></p>
                </div>
            </div>
            <div class="mj-grid hide-on-mobile">
                <div class="grid__item width-1/24 hide-on-mobile"></div>
                <div class="grid__item width-10/24">
                    <div class="hide-on-mobile">
                        <div class="mj-images" style="margin-top: 180px;">
                        <img style="height: 40px;margin-top: -5px;" class="greyscale" src="<?php echo get_template_directory_uri(); ?>/images/press/cnbc.png" alt="">
                            <img style="height: 35px;" class="greyscale" src="<?php echo get_template_directory_uri(); ?>/images/press/wallstreet.png" alt="">
                            <img style="height: 40px;margin-top: -5px;" class="greyscale" src="<?php echo get_template_directory_uri(); ?>/images/press/biz-transparent.png" alt="">
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="section_2" class="section section_2 section_2--us">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24"></div>
                <div class="grid__item width-8/24">
                    <div class="above_headline">Benefits</div>
                    <h1 class="headline light"> The easy way to hire healthcare professionals.  </h1>
                    <ul class="mj-list">
                        <li class="mj-list__item">
                            Review pre-qualified candidates exclusively.
                        </li>
                        <li class="mj-list__item">
                            Reduce hiring time by 66%
                        </li>
                        <li class="mj-list__item">
                            Retain talent longer
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="section_7" class="section section_7">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24"></div>
                <div class="grid__item width-13/24">
                    <div class="above_headline">HOW IT WORKS</div>
                    <h1 class="headline light"> Four easy steps.</h1>
                    
                </div>
            </div>
            <div class="mj-grid">
                <div class="grid__item width-1/24"></div>
                <div class="grid__item width-7/24">
                    <div id="section_icon" class="section_icon step_1 hide-on-mobile"></div>
                </div>
                <div class="grid__item width-7/24">
                    <ul class="mj-steps" style="margin-top: 85px;">
                        <li id="step_1" class="mj-step active">
                            <div class="step_nr">1.</div>
                            <div class="step_title">  CREATE A FREE PROFILE:</div>
                            <div class="step_content"> Register fast with your practice name and email.</div>
                        </li>
                        <li id="step_2" class="mj-step active">
                            <div class="step_nr">2.</div>
                            <div class="step_title">SHARE WHAT YOU NEED:</div>
                            <div class="step_content">Briefly tell us about your practice and ideal new colleagues.</div>
                        </li>
                        <li id="step_3" class="mj-step active">
                            <div class="step_nr">3.</div>
                            <div class="step_title">REVIEW QUALIFIED CANDIDATES:</div>
                            <div class="step_content">  Interview a curated batch of high-quality candidates.</div>
                        </li>
                        <li id="step_4" class="mj-step active">
                            <div class="step_nr">4.</div>
                            <div class="step_title">WELCOME YOUR NEW COLLEAGUE:</div>
                            <div class="step_content">Pay a small fee when the contract is signed, and enjoy a 60-day guarantee.</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="section_10" class="section section_10">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24"></div>
                <div class="grid__item width-14/24">
                    <div class="above_headline"> PRESS</div>
                    <h1 class="headline light">MEDIjobs is reinventing healthcare recruitment.</h1>
                </div>
            </div>
            <div class="mj-grid">
                <div class="grid__item width-1/24"></div>
                <div class="grid__item width-10/24">
                    <div class="quote us">
                        <img style="height: 50px; margin-top: -18px;" src="<?php echo get_template_directory_uri(); ?>/images/press/cnbc.png" alt="">
                        <p>
                            "A growing need for health care services"
                        </p>
                    </div>
                    <div class="quote us">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/press/wallstreet.png" alt="">
                        <p>
                            "Dedicated exclusively to medical recruitment"
                        </p>
                    </div>
                    <div class="quote us">
                        <img style="height: 60px;margin-top: 20px;margin-bottom: 36px;" src="<?php echo get_template_directory_uri(); ?>/images/press/biz-transparent.png" alt="">
                        <p>
                            "Innovation in recruitment"
                        </p>
                    </div>
                    <div class="quote us">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/press/br.png" style="height:100px;" alt="">
                        <p>
                            "Shortening the time needed for finding a job and avoiding unsuitable applications."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="section_3" class="section section_3">
        <div class="mj-container">
            <div class="background_title hide-on-mobile">
                OUR Key
                positions
            </div>
            <div class="mj-grid">
                <div class="grid__item width-1/24"></div>
                <div class="grid__item width-13/24">
                    <div class="above_headline">TRENDING</div>
                    <h1 class="headline light">The most popular titles in our candidate network. </h1>
                    <ul class="mj-simple-list">
                        <li class="mj-simple-list">
                            Dental Assistant
                        </li>
                        
                        <li class="mj-simple-list">
                            Dentist
                        </li>
                        <li class="mj-simple-list">
                            Doctor
                        </li>
                        <li class="mj-simple-list">
                            Hygienist
                        </li>
                        <li class="mj-simple-list">
                            Medical Assistant
                        </li>
                        <li class="mj-simple-list">
                            Nurse Practitioner
                        </li>
                        <li class="mj-simple-list">
                            Registered Nurse
                        </li>
                        <div class="clearfix"></div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="section_4" class="section section_4">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24"></div>
                <div class="grid__item width-14/24">
                    <div class="above_headline">HIRING NOW</div>
                    <h1 class="headline light">Find the perfect candidate in these highly active locations.</h1>
                    <div class="mj-cols hide-on-desktop">
                        <div class="mj-col">
                            <p>New York</p>
                            <p>Jersey City</p>
                        </div>
                    </div>
                    <div class="mj-image romania-map hide-on-mobile" style="margin-bottom: -250px">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/map_usa.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div id="section_6" class="section section_6 section_6_company">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24"></div>
                <div class="grid__item width-14/24">
                    <div class="above_headline">Companies</div>
                    <h1 class="headline light">Save time.</h1>
                </div>
            </div>
            <div class="mj-grid">
                <div class="grid__item width-15/24">
                    <div class="mj-boxes mj-boxes--us">
                        <div class="mj-arrow-box mj-arrow-box--bigText">
                            <p>Fill your vacant positions up to five times faster.</p>
                        </div>
                        <div class="mj-arrow-box mj-arrow-box--bigText">
                            <p>No more rescheduling your clients appointments because you are understaffed.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="section_9" class="section section_9 company">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24"></div>
                <div class="grid__item width-6/24">
                    <ul class="mj-list">
                        <li class="mj-list__item">
                            Qualified candidates
                        </li>
                        <li class="mj-list__item">
                            Our technology identify the most relevant candidates for your company.
                        </li>
                        <li class="mj-list__item">
                            Interview pre-qualified candidate and hire them under 30 days.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    -->

<?php get_footer(); ?>