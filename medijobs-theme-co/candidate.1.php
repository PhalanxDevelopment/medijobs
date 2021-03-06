<?php
/**
 * Template Name: Candidate Page
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
            <li id="ql_section_9" class="quick_link" data-section="9">
                The decision
            </li> 
            <li id="ql_section_10" class="quick_link" data-section="9">
                In the press
            </li>       
        </ul>
    </div>
    <div class="mj-container">
        <form id="form" action="https://app.medijobs.co/register/candidate" method="post" class="mj-register_form mj-form">
            <div id="close-form" class="close hide-on-desktop"></div>
            <a href="https://app.medijobs.co/login" class="login">REGISTERED ALREADY? LOGIN</a>
            <h3 style="text-transform:uppercase;">Skip the applications and let employers find you directly</h3>
            <p>Create a free, confidential profile to avoid wasting time on job boards.</p>
            <input class="mj-input" name="name" type="text" placeholder="Full name" >
            <input class="mj-input" name="email" type="email" placeholder="Email" >
            <button type="submit" class="mj-btn mj-btn--primary mj-btn--alt--2 uppercase">
                Create a Profile
            </button>
            <p class="mj-align--center mj-font--small">Are you a company? <a href="https://app.medijobs.co/register/company">Create a profile here.</a></p>
        </div>
    </div>
    <div id="section_1" class="section section_1">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24 hide-on-mobile"></div>
                <div class="grid__item width-9/24">
                    <h1 class="headline" style="font-size:40px;line-height:45px;">The leading permanent job platform for outpatient healthcare and dental professionals.</h1>
                </div>
                <div class="grid__item width-6/24 hide-on-mobile">
                    <div class="secton_bg_image">
                        <?php $randomNumber = rand(1,7);  ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/subject_image_<?php echo $randomNumber; ?>.png" alt="">
                    </div>
                </div>
            </div>
            <div class="mj-grid">
                <div class="grid__item width-1/24 hide-on-mobile"></div>
                <div class="grid__item width-7/24">
                    <p><a href="https://app.medijobs.co/register/candidate" >Create a free profile</a> to let actively hiring employers match with you.</p>
                </div>
            </div>
            <div class="mj-grid">
                <div class="grid__item width-10/24">
                    <div id="open-form" class="mj-btn mj-btn--primary hide-on-desktop" style="font-weight: bold;padding-top: 13px;">
                        Sign up for free
                    </div>
                    <p class="mj-align--center mj-font--small hide-on-desktop">Are you a company? <a href="https://app.medijobs.co/register/company">Create a profile here.</a></p>
                </div>
            </div>
            <div class="mj-grid hide-on-mobile">
                <div class="grid__item width-1/24 hide-on-mobile"></div>
                <div class="grid__item width-10/24">
                    <div class="hide-on-mobile">
                        <div class="mj-images" style="margin-top:300px">
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
    <div id="section_2" class="section section_2" style="background-position: left -80px bottom -120px;padding-bottom: 130px;">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24"></div>
                <div class="grid__item width-6/24">
                    <div class="above_headline">Benefits</div>
                    <h1 class="headline light">The easy way for healthcare professionals to get hired. </h1>
                </div>
                <div class="grid__item width-7/24">
                    <ul class="mj-list">
                        <li class="mj-list__item">
                            No applications, companies choose you.
                        </li>
                        <li class="mj-list__item">
                            No fee, candidates join for free.
                        </li>
                        <li class="mj-list__item">
                            No secrets, compensation shared upfront.
                        </li>
                    </ul>
                    <!--<p><a class="mj-icon-link" href="https://app.medijobs.co/register/candidate">
                        Create your MEDIjobs account</a> <br/> and be prepared to receive job offers!</p> -->
                </div>
            </div>
        </div>
    </div>
    <div id="section_7" class="section section_7">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24"></div>
                <div class="grid__item width-6/24">
                    <div class="above_headline">HOW IT WORKS</div>
                    <h1 class="headline light">Three easy steps.</h1>
                    <div id="section_icon" class="section_icon step_1 hide-on-mobile"></div>
                </div>
                <div class="grid__item width-1/24"></div>
                <div class="grid__item width-7/24">
                    <ul class="mj-steps">
                        <li id="step_1" class="mj-step active">
                            <div class="step_nr">1.</div>
                            <div class="step_title">CREATE A FREE PROFILE:</div>
                            <div class="step_content">Tell us who you are and what you want in your next job.</div>
                        </li>
                        <li id="step_2" class="mj-step active">
                            <div class="step_nr">2.</div>
                            <div class="step_title">BROWSE JOB OFFERS: </div>
                            <div class="step_content"> Interested practices make you an offer based on your location, skills, and desired salary.</div>
                        </li>
                        <li id="step_3" class="mj-step active">
                            <div class="step_nr">3.</div>
                            <div class="step_title">MEET YOUR MATCH: </div>
                            <div class="step_content">Interview with as many practices as you like until you choose your dream job.</div>
                        </li>
                        <!-- <li id="step_4" class="mj-step active">
                            <div class="step_nr">4.</div>
                            <div class="step_title">Get engaged!</div>
                            <div class="step_content">Enjoy a new job, recommend MEDIjobs to colleagues and receive a bonus!</div>
                        </li> -->
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
                    <h1 class="headline light">Our open roles with the highest demand:</h1>
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
                    <!--  <a class="mj-icon-link" href="#">
                            SEE MORE ACTIVE JOBS <br> THAT WE ARE LOOKING FOR.
                        </a>
                    -->
                </div>
            </div>
        </div>
    </div>
    <div id="section_4" class="section section_4">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24"></div>
                <div class="grid__item width-16/24">
                    <div class="above_headline">HIRING NOW</div>
                    <h1 class="headline light"> Get job offers in these highly active locations.</h1>
                    <div class="mj-cols hide-on-desktop">
                        <div class="mj-col">
                            <p>New York</p>
                            <p>Jersey City</p>
                        </div>
                    </div>
                    <div class="mj-image romania-map hide-on-mobile" style="margin-bottom: -210px">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/map_usa.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="section_6" class="section section_6">
        <div class="mj-container">
            <div class="mj-box">
                <div class="mj-grid">
                    <div class="grid__item width-2/24"></div>
                    <div class="grid__item width-22/24">
                        <div class="above_headline"> For Companies</div>
                        <h1 class="headline light uppercase">Hire Skilled Healthcare Professionals Fast</h1>
                        <p> Empower your practice by streamlining recruiting.</p>
                    </div>
                </div>
                <div class="mj-grid">
                    <div class="grid__item width-2/24"></div>
                    <div class="grid__item width-10/24">
                        <a href="https://app.medijobs.co/register/company" class="mj-btn mj-btn--primary mj-btn--alt">
                            Request a demo.
                        </a>
                    </div>
                    <div class="grid__item width-2/24"></div>
                    <div class="grid__item width-10/24">
                        <!-- <p class="mj-align--center mj-font--small "><a href="#">Find out more <br> about our process.</a></p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
