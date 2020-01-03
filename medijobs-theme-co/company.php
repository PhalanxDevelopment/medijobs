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
            <h3>HIRE NURSES WITHIN 30 DAYS.</h3>
            <p>Get matched with pre-qualified nurses who are interested in working with you.</p>
            <input class="mj-input" name="name"  type="text" placeholder="Full name" >
            <input class="mj-input" name="email"  type="email" placeholder="Email" >
            <button type="submit" class="mj-btn mj-btn--primary mj-btn--alt--2 uppercase">
                create an account
            </button>
            <p class="mj-align--center mj-font--small">Are you a candidate? <a href="https://app.medijobs.co/register/candidate">Create a profile here.</a></p>
        </form>
    </div>
    <div id="section_1" class="section section_1">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24 hide-on-mobile"></div>
                <div class="grid__item width-9/24">
                    <div class="above_headline"> Welcome to Medijobs</div>
                    <h1 class="headline uppercase">Healthcare recruiter at your service. </h1>
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
                    <p>Fill vacancies within 30 working days.</p>
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
                    <h1 class="headline light"> Save Time </h1>
                    <ul class="mj-list">
                        <li class="mj-list__item">
                            Stop going through hundreds of un-qualified resumes
                        </li>
                        <li class="mj-list__item">
                            Shorten your recruitment time from 90 to 30 days
                        </li>
                    </ul>
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
                    <div class="above_headline">CHECKOUT</div>
                    <h1 class="headline light">Some of the most popular candidates we can help you with: </h1>
                    <ul class="mj-simple-list">
                    <li class="mj-simple-list">
                            Doctor
                        </li>
                        <li class="mj-simple-list">
                            Registered Nurse
                        </li>
                        <li class="mj-simple-list">
                            Nurse Practitioner
                        </li>
                        <li class="mj-simple-list">
                            Medical Assistant
                        </li>
                        <li class="mj-simple-list">
                            Dental Assistant
                        </li>
                        <li class="mj-simple-list">
                            Hygienist
                        </li>
                        <li class="mj-simple-list">
                            Dentist
                        </li>
                        <li class="mj-simple-list">
                            And many more
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
                <div class="grid__item width-16/24">
                    <div class="above_headline">We work with companies</div>
                    <h1 class="headline light">  In the New York metropolitan area</h1>
                    <div class="mj-cols hide-on-desktop">
                        <div class="mj-col">
                            <p>New York</p>
                            <p>Jersey City</p>
                        </div>
                    </div>
                    <div class="mj-image romania-map hide-on-mobile" style="margin-bottom: -250px">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/map_ny_2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="section_6" class="section section_6 section_6_company">
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
    <div id="section_7" class="section section_7">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24"></div>
                <div class="grid__item width-13/24">
                    <div class="above_headline">OUR PROCESS &</div>
                    <h1 class="headline light">How we work? </h1>
                    
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
                            <div class="step_nr">.01</div>
                            <div class="step_title"> Create an account</div>
                            <div class="step_content">Registration is FREE & FAST (takes under 2 minutes) </div>
                        </li>
                        <li id="step_2" class="mj-step active">
                            <div class="step_nr">.02</div>
                            <div class="step_title">Fill out your recruitment needs.</div>
                            <div class="step_content"> Get matched with qualified candidates</div>
                        </li>
                        <li id="step_3" class="mj-step active">
                            <div class="step_nr">.03</div>
                            <div class="step_title">Receive relevant candidates</div>
                            <div class="step_content"> Interview candidates that fit your requirements.</div>
                        </li>
                        <li id="step_4" class="mj-step active">
                            <div class="step_nr">.04</div>
                            <div class="step_title">Hire!</div>
                            <div class="step_content">Pay only when you hire a candidate.</div>
                        </li>
                    </ul>
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
    <div id="section_10" class="section section_10">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24"></div>
                <div class="grid__item width-7/24">
                    <div class="above_headline"> In the press</div>
                    <h1 class="headline light">What the press is saying about us</h1>
                </div>
            </div>
            <div class="mj-grid">
                <div class="grid__item width-1/24"></div>
                <div class="grid__item width-10/24">
                    <div class="quote us">
                        <img style="height: 50px; margin-top: -18px;" src="<?php echo get_template_directory_uri(); ?>/images/press/cnbc.png" alt="">
                        <p>
                            A growing need for health care services
                        </p>
                    </div>
                    <div class="quote us">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/press/wallstreet.png" alt="">
                        <p>
                            Dedicated exclusively to medical recruitment
                        </p>
                    </div>
                    <div class="quote us">
                        <img style="height: 60px;margin-top: 20px;margin-bottom: 36px;" src="<?php echo get_template_directory_uri(); ?>/images/press/biz-transparent.png" alt="">
                        <p>
                            Innovation in recruitment
                        </p>
                    </div>
                    <div class="quote us">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/press/br.png" style="height:100px;" alt="">
                        <p>
                            Shortening the time needed for finding a job and avoiding unsuitable applications.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>