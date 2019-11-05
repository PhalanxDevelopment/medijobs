
<!--
Copyright 2017
Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at
     http://www.apache.org/licenses/LICENSE-2.0
Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
Author: Eric Bidelman (@ebidel)
-->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
<meta name="author" content="Eric Bidelman @ebidel">
<title>position: sticky events</title>
<link rel="stylesheet" type="text/css" media="screen" href="style.css">
<style>
* {
  box-sizing: border-box;
}
:root {
  --default-padding: 0px;
  --header-height: 96px;
  --sticky-pos: 0px;
}

#container {
  overflow: auto;
  will-change: transform; /* make overflow fast on non-retina */
  padding: var(--default-padding);
  background-color: #ECEFF1;
  scroll-behavior: smooth;
}
aside {
    display:none;
}


[data-lorem] {
  margin-bottom: calc(var(--default-padding) * 2);
  text-align: justify;
  padding: var(--default-padding);
  position: relative; /* contain the sentinels */
  background-color: #fff;
}
[data-lorem] h2 {
  color: #fff;
}



main {
  display: flex;
  height: 100vh;
}
.sticky_sentinel {
    background: yellow;
    position: absolute;
    left: 0;
    right: 0; /* needs dimensions */
}
.sticky_sentinel--top {
    /* Adjust the height and top values based on your on your sticky top position.
    e.g. make the height bigger and adjust the top so observeHeaders()'s
    IntersectionObserver fires as soon as the bottom of the sentinel crosses the
    top of the intersection container. */
    height: 100px;
    top: -24px;
}
.sticky_sentinel--bottom {
    bottom: 0;
    /* Height should match the top of the header when it's at the bottom of the
    intersection container. */
    height: 96px;
}
</style>

</head>
<body>
<div class="mj-container">
        <div id="form" class="mj-register_form mj-form">
            <div id="close-form" class="close hide-on-desktop"></div>
            <a href="#" class="login">REGISTERED ALREADY? LOGIN</a>
            <h3>We Bring Job Offers to You</h3>
            <p>Join thousands of people who’ve found their dream job using Medijobs.</p>
            <input class="mj-input" type="text" placeholder="Default State" >
            <input class="mj-input" type="text" placeholder="Default State" >
            <p class="extra-small policy">
            By signing up you agree to Medijobs’s <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>, which outline your rights and obligations with respect to your use of the Service & processing of your data.
            </p>
            <button class="mj-btn mj-btn--primary mj-btn--alt--2 uppercase">
                create an account
            </button>
            <p class="mj-align--center mj-font--small">Are you a company? <a href="#">Create a profile here.</a></p>
        </div>
    </div>
<div class="mj-quick_links hide-on-mobile">
        <ul>
            <li id="ql_section_1" class="quick_link" data-section="1">
                BINE AI VENIT PE MEDIJOBS
            </li>
            <li id="ql_section_2" class="quick_link" data-section="2">
                Beneficii
            </li>
            <li id="ql_section_3" class="quick_link" data-section="3">
                CHECKOUT
            </li>
            <li id="ql_section_4" class="quick_link" data-section="4">
                UNDE SUNTEM ACTIVI
            </li>
            <li id="ql_section_5" class="quick_link" data-section="5">
                Peste 1200 companii
            </li>
            <li id="ql_section_6" class="quick_link" data-section="6">
                Pentru angajator
            </li>
            <li id="ql_section_7" class="quick_link" data-section="7">
                PROCESUL NOSTRU
            </li>
            <li id="ql_section_8" class="quick_link" data-section="8">
                WHERE WE’RE ACTIVE
            </li>
            <li class="quick_link" id="ql_section_10" data-section="9">
                PRESS QUOTES
            </li>
        </ul>
    </div>
<main>
  <div id="container">
    <template>
      <div data-lorem="p">
      <header class="mj-header sticky">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-4/24">
                    <a href="/" class="mj-logo"></a>
                    <div class="hide-on-desktop">
                        <div class="mj-search"></div>
                        <div class="mj-lang-switcher btn-group" id="langSwitcher">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="http://cst-soft.com/medijobs/images/RO-Flag.png">
                                <span class="glyphicon glyphicon-chevron-down"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#" title="Select this language"><img src="http://cst-soft.com/medijobs/images/RO-Flag.png" style="margin-left:11px;"></a>
                                </li>
                                <li>
                                    <a href="#" title="Select this language"><img src="http://cst-soft.com/medijobs/images/RO-Flag.png" style="margin-left:11px;"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="grid__item width-9/24">
                    <div id="menuToggle">
                        <input type="checkbox" />
                        <span></span>
                        <span></span>
                        <span></span>
                        <ul id="menu" class="mj-meniu">
                            <li class="meniu__item meniu__item__has_submeniu">
                                <a href="#">For Canditates</a>
                                <ul class="meniu__submeniu">
                                    <li class="submeniu__item">
                                        <a href="#">First link</a>
                                    </li>
                                    <li class="submeniu__item">
                                        <a href="#">Second longer sublink</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="meniu__item meniu__item__has_submeniu">
                                <a href="#">For Companies</a>
                                <ul class="meniu__submeniu ">
                                    <li class="submeniu__item">
                                        <a href="#">First link</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="meniu__item">
                                <a href="#">Resources</a>
                            </li>
                            <div class="hide-on-desktop">
                                <a href="tel:+40749099291" class="mj-call_to_action">
                                    <p class="call_to_action__text">Get in touch with us</p>
                                    <p class="call_to_action__link" >+4 0749 099291</p>
                                </a>
                                <button class="mj-btn mj-btn--secondary mj-btn--alt--2">Get a free account</button>
                                <a href="#" class="mobile_login">
                                    Log into your account
                                </a>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="grid__item width-3/24 hide-on-mobile"></div>
                <div class="grid__item width-3/24 hide-on-mobile">
                    <a href="tel:+40749099291" class="mj-call_to_action">
                        <p class="call_to_action__text">Get in touch with us</p>
                        <p class="call_to_action__link">+4 0749 099291</p>
                    </a>
                </div>
                <div class="grid__item width-4/24 hide-on-mobile">
                    <button class="mj-btn mj-btn--secondary mj-btn--alt--2">Get a free account</button>
                </div>
                <div class="grid__item width-1/24 hide-on-mobile">
                    <a href="#" class="pull-right">
                        <img src="http://cst-soft.com/medijobs/images/Login.png" alt="Link Logo">
                    </a>
                </div>
            </div>
        </div>
    </header>
  
    
    <div id="section_1" class="section section_1">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24 hide-on-mobile"></div>
                <div class="grid__item width-9/24">
                    <div class="above_headline">BINE AI VENIT PE MEDIJOBS!</div>
                    <h1 class="headline uppercase">Noi îți aducem <span>ofertele de muncă</span></h1>
                </div>
                <div class="grid__item width-6/24 hide-on-mobile">
                    <div class="secton_bg_image">
                        <img src="http://cst-soft.com/medijobs/images/section_1_bg.png" alt="">
                    </div>
                </div>
            </div>
            <div class="mj-grid">
                <div class="grid__item width-1/24 hide-on-mobile"></div>
                <div class="grid__item width-7/24">
                    <p>Alătură-te miilor de oameni care și-au găsit un loc de muncă prin MEDIjobs</p>
                </div>
            </div>
            <div class="mj-grid">
                <div class="grid__item width-10/24">
                    <div class="sub_section">DE CE SA TE ALATURI CELOR <span>26448+</span> CANDIDATI</div>
                    <button id="open-form" class="mj-btn mj-btn--primary hide-on-desktop">
                        Sign up for free
                    </button>
                    <p class="mj-align--center mj-font--small hide-on-desktop">Are you a company? <a href="#">Create a profile here.</a></p>
                </div>
            </div>
            <div class="mj-grid hide-on-mobile">
                <div class="grid__item width-1/24 hide-on-mobile"></div>
                <div class="grid__item width-10/24">
                    <div class="hide-on-mobile">
                        <div class="mj-images">
                            <img src="http://cst-soft.com/medijobs/images/LU8HRJ.png" alt="">
                            <img src="http://cst-soft.com/medijobs/images/ABq5rg.png" alt="">
                            <img src="http://cst-soft.com/medijobs/images/O8OVQR.png" alt="">
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="section_2" class="section section_2">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24"></div>
                <div class="grid__item width-10/24">
                    <div class="above_headline">Beneficii</div>
                    <h1 class="headline light">3 motive pentru care o să iubești MEDIjobs </h1>
                    <ul class="mj-list">
                        <li class="mj-list__item">
                            Companiile aplică pentru tine, nu invers 
                        </li>
                        <li class="mj-list__item">
                            Contul este gratuit, iar informațiile tale sunt confidențiale
                        </li>
                        <li class="mj-list__item">
                            Primești oferte personalizate în funcție de nevoile tale 
                        </li>
                        <li class="mj-list__item">
                            <a href="">Creează-ți contul</a> pe MEDIjobs și fii pregătit să primești oferte de muncă!
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="section_3" class="section section_3">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24"></div>
                <div class="grid__item width-13/24">
                    <div class="above_headline">CHECKOUT</div>
                    <h1 class="headline light">Cele mai populare oferte de muncă acum în Medijobs.ro:</h1>
                    <ul class="mj-simple-list">
                        <li class="mj-simple-list">
                            Contract - Physical Therapist
                        </li>
                        <li class="mj-simple-list">
                            Desktop Technician
                        </li>
                        <li class="mj-simple-list">
                            Addiction Medicine Physician DEA-X
                        </li>
                        <li class="mj-simple-list">
                            Behavioral Health Therapist
                        </li>
                        <li class="mj-simple-list">
                            Bilingual LPN
                        </li>
                        <li class="mj-simple-list">
                            Clinical Director
                        </li>
                        <li class="mj-simple-list">
                            Clinical Supervisor - Home Health
                        </li>
                        <li class="mj-simple-list">
                            Complex Case Manager RN
                        </li>
                        <li class="mj-simple-list">
                            Executive Director - Home Health
                        </li>
                        <li class="mj-simple-list">
                            Family Medicine Physican
                        </li>
                        <li class="mj-simple-list">
                            Field Nurse - Behavioral Health
                        </li>
                        <li class="mj-simple-list">
                            General Surgery Physican
                        </li>
                        <div class="clearfix"></div>
                    </ul>
                    <a class="mj-icon-link" href="#">
                        SEE MORE ACTIVE JOBS THAT WE ARE LOOKING FOR.
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="section_4" class="section section_4">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24"></div>
                <div class="grid__item width-10/24">
                    <div class="above_headline">UNDE SUNTEM ACTIVI</div>
                    <h1 class="headline light">And we are covering more & more ground.</h1>
                    <div class="mj-cols">
                        <div class="mj-col">
                            <p>Târgul Mureș</p>
                            <p>Galați</p>
                            <p>Timișoara</p>
                            <p>București</p>
                            <p>Craiova</p>
                            <p>Constanța</p>
                        </div>
                        <div class="mj-col">
                            <p>Suceava</p>
                            <p>Iași</p>
                            <p>Cluj-Napoca</p>
                        </div>
                    </div>
                    <div class="mj-image">
                        <img src="http://cst-soft.com/medijobs/images/harta_mobile.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="section_5" class="section section_5">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24"></div>
                <div class="grid__item width-13/24">
                    <div class="above_headline">Peste</div>
                    <h1 class="headline uppercase"><span>1200 de companii</span></h1>
                    <h1 class="headline light" style="margin-top:-10px;">Au apelat la MEDIjobs pentru a angaja cu succes specialisti medical.</h1>
                    <div class="mj-image">
                        <img src="http://cst-soft.com/medijobs/images/companies_mockup.png" alt="">
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
                        <div class="above_headline">Pentru angajatori</div>
                        <h1 class="headline light uppercase">Angajează personal medical în termen de 30 de zile lucrătoare.</h1>
                        <p>Noi facem treaba in locul tau! Iti potrivim ofertele cu candidati relevanti.</p>
                    </div>
                </div>
                <div class="mj-grid">
                    <div class="grid__item width-2/24"></div>
                    <div class="grid__item width-10/24">
                        <button class="mj-btn mj-btn--primary mj-btn--alt">
                            REQUEST A DEMO
                        </button>
                    </div>
                    <div class="grid__item width-2/24"></div>
                    <div class="grid__item width-10/24">
                        <p class="mj-align--center mj-font--small "><a href="#">Find out more about our process.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="section_7" class="section section_7">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24"></div>
                <div class="grid__item width-6/24">
                    <div class="above_headline">PROCESUL NOSTRU &</div>
                    <h1 class="headline light">Cum functioneaza platforma</h1>
                    <div class="section_icon hide-on-mobile">
                        <img src="http://cst-soft.com/medijobs/images/icon_section_7.png" alt="">
                    </div>
                </div>
                <div class="grid__item width-1/24"></div>
                <div class="grid__item width-7/24">
                    <ul class="mj-steps">
                        <li id="step_1" class="mj-step active">
                            <div class="step_nr">.01</div>
                            <div class="step_title">Creează un cont gratuit:</div>
                            <div class="step_content">Este șansa ta sa ne spui ce îți dorești în continuare. Creează-ți un cont în mai puțin de 2 minute!</div>
                        </li>
                        <li id="step_2" class="mj-step">
                            <div class="step_nr">.02</div>
                            <div class="step_title">Primește oferte de muncă</div>
                            <div class="step_content">Îți conectăm profilul cu oferte bazate pe experiența ta de muncă, salariul dorit și locația de interes.</div>
                        </li>
                        <li id="step_3" class="mj-step">
                            <div class="step_nr">.03</div>
                            <div class="step_title">Alege oferta care ți se potrivește</div>
                            <div class="step_content">Și programează interviuri cu angajatorii preferați.</div>
                        </li>
                        <li id="step_4" class="mj-step">
                            <div class="step_nr">.04</div>
                            <div class="step_title">Angajează-te!</div>
                            <div class="step_content">Bucură-te de un nou loc de muncă, recomandă colegilor MEDIjobs și primește un bonus!</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="section_8" class="section section_8">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24"></div>
                <div class="grid__item width-6/24">
                    <div class="above_headline">WHERE WE’RE ACTIVE</div>
                    <h1 class="headline light">Ce spun candidatii despre noi.</h1>
                </div>
            </div>
            <div class="mj-grid">
                <div class="grid__item width-1/24"></div>
                <div class="grid__item width-6/24">
                    <div class="mj-testimonials">
                        <div class="mj-testimonial">
                            <div class="mj-testimonial__rating">
                                <span></span><span></span><span></span><span></span><span></span>
                            </div>
                            <div class="mj-testimonial__content">
                                <p>
                                Bună, sunt Laura, și m-am angajat prin intermediul MediJobs la o clinică de cardiologie în cadrul căreia mă simt foarte bine! Medijobs și-a făcut datoria într-un mod foarte frumos, ba chiar după angajare o consultantă m-a sunat să se intereseze cum mă simt la noul loc de muncă, dacă sunt mulțumită și dacă am semnat contractul. Într-adevăr sunt mulțumită și de locul de muncă și de Medijobs.
                                </p>
                            </div>
                            <div class="mj-testimonial__author">
                                <div class="mj-testimonial__author__image">
                                    <img src="http://cst-soft.com/medijobs/images/testimonial_1.png" alt="">
                                </div>
                                <div class="mj-testimonial__author__name">
                                    Laura Kovacs
                                </div>
                                <div class="mj-testimonial__author__position">
                                    Asistent medical generalist
                                </div>
                            </div>
                        </div>
                        <div class="mj-testimonial">
                            <div class="mj-testimonial__rating">
                                <span></span><span></span><span></span><span></span><span></span>
                            </div>
                            <div class="mj-testimonial__content">
                                <p>
                                    Mulțumesc echipei Medijobs pentru promptitudine :)
                                </p>
                                <p> 
                                    Cu ajutorul lor am găsit foarte repede un job part time ce mă avantajează la momentul de față și pe această cale vreau să le mulțumesc încă o dată pentru profesionalismul de care au dat dovadă! Mult succes în continuare și cu siguranță ținem legătura.
                                </p>
                            </div>
                            <div class="mj-testimonial__author">
                                <div class="mj-testimonial__author__image">
                                    <img src="http://cst-soft.com/medijobs/images/testimonial_2.png" alt="">
                                </div>
                                <div class="mj-testimonial__author__name">
                                    Aly Alina
                                </div>
                                <div class="mj-testimonial__author__position">
                                    ASISTENT MEDICAL GENERALIST
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="grid__item width-1/24"></div>
                <div class="grid__item width-6/24">
                    <div class="mj-testimonials">
                        <div class="mj-testimonial">
                            <div class="mj-testimonial__rating">
                                <span></span><span></span><span></span><span></span><span></span>
                            </div>
                            <div class="mj-testimonial__content">
                                <p>
                                Cu ajutorul site-ului Medijobs m-am angajat la actualul loc de muncă. Nu mă așteptam să se întâmple așa repede, dar a ajutat foarte mult că m-am înscris pe acest site, nu cred că aș fi găsit de muncă așa repede dacă nu foloseam Medijobs.
                                </p>
                                <p> 
                                Sunt foarte mulțumită de acest site și aș vrea să le mulțumesc pentru ajutorul depus. Ceea ce mă încântă la acest site este faptul că, așa cum probabil s-a mai spus, față de alte site-uri persoanele din spatele Medijobs chiar se implică în a te ajuta să-ți găsești un loc de muncă sau cu orice alte probleme sau nelămuriri ai avea. Aș recomanda acest site oricui își caută de muncă în sistemul de sănătate.
                                </p>
                            </div>
                            <div class="mj-testimonial__author">
                                <div class="mj-testimonial__author__image">
                                    <img src="http://cst-soft.com/medijobs/images/testimonial_2.png" alt="">
                                </div>
                                <div class="mj-testimonial__author__name">
                                    Gabriela Podolan
                                </div>
                                <div class="mj-testimonial__author__position">
                                    ASISTENT MEDICAL GENERALIST
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="section_9" class="section section_9">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24"></div>
                <div class="grid__item width-6/24">
                    <ul class="mj-list">
                        <li class="mj-list__item">
                            Alegerea unei cariere in domeniul medical tocmai a devenit mai usoara.
                        </li>
                        <li class="mj-list__item">
                            Descopera noi oportunitati chiar langa tine.
                        </li>
                        <li class="mj-list__item">
                            Decizia este a ta!
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
                    <div class="above_headline">PRESS QUOTES</div>
                    <h1 class="headline light">Ce se scrie in presa despre noi.</h1>
                </div>
            </div>
            <div class="mj-grid">
                <div class="grid__item width-1/24"></div>
                <div class="grid__item width-14/24">
                    <div class="quote">
                        <img src="http://cst-soft.com/medijobs/images/cnbc.png" alt="">
                        <p>
                            Dr. Wargha Enayati: „Cea mai mare platformă de recrutare medicală din România"
                        </p>
                    </div>
                    <div class="quote">
                        <img src="http://cst-soft.com/medijobs/images/wallstreet.png" alt="">
                        <p>
                            Companiile reușesc să ocupe posturile vacante de cinci ori mai rapid decât dacă ar utiliza alte platforme de recrutare”, a declarat George Hagivreta, co-fondator si COO al MEDIjobs.
                        </p>
                    </div>
                    <div class="quote">
                        <img src="http://cst-soft.com/medijobs/images/biz.png" alt="">
                        <p>
                            MEDIjobs reușește să răspundă nevoilor unei piețe cu cel mai rapid nivel de creștere în ocuparea forței de muncă. 
                        </p>
                    </div>
                    <div class="quote">
                        <img src="http://cst-soft.com/medijobs/images/money.png" alt="">
                        <p>
                            Platforma care scade timpul de recrutare a unui medic de la mai mult de 3 luni la doar 72 de ore
                        </p>
                    </div>
                    <div class="quote">
                        <img src="http://cst-soft.com/medijobs/images/br.png" alt="">
                        <p>
                            Noua ta carieră poate începe aici – locuri de muncă în toate domeniile, în toate județele
                        </p>
                    </div>
                    <div class="quote">
                        <img src="http://cst-soft.com/medijobs/images/galenus.png" alt="">
                        <p>
                            Noua ta carieră poate începe aici – locuri de muncă în toate domeniile, în toate județele
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mj-footer">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24"> </div>
                <div class="grid__item width-4/24">
                    <div class="mj-logo">
                        <a href="/">
                            <img src="http://cst-soft.com/medijobs/images/logo-footer.png" alt="Medijobs Logo">
                        </a>
                    </div>
                    <p>
                        La MEDIjobs credem că puține lucruri sunt mai interesante decât construirea propriei cariere.
                    </p>
                    <div class="social__links hide-on-desktop">
                        <a href="#" class="social__link facebook__link"></a>
                        <a href="#" class="social__link instagram__link"></a>
                        <a href="#" class="social__link linkedin__link"></a>
                        <a href="#" class="social__link youtube__link"></a>
                    </div>
                    <div class="footer__call-to-action hide-on-desktop">
                        <a href="#">Get in touch with us</a>
                    </div>
                    <p class="hide-on-mobile">Pentru că nu e vorba despre a aplica la un job, ci despre oamenii pe care îi întâlnești și lucrurile noi pe care la afli.</p>
                </div>
                <div class="grid__item width-2/24"></div>
                <div class="grid__item width-3/24 width-mobile-12/24">
                    <div class="footer__links">
                        <h5 class="footer__links_header">About Us</h5>
                        <ul class="footer__menu">
                            <li><a href="/">Press</a></li>
                            <li class="submenu__item"><a href="#">— In the press</a></li>
                            <li class="submenu__item"><a href="#">— For the press</a></li>
                            <li><a href="/">Work for us</a></li>
                            <li><a href="/">For Investors</a></li>
                            <li><a href="/">For Coaching</a></li>
                            <li><a href="/">Write for us</a></li>
                            <li><a href="/">Affiliates FAQs</a></li>
                            <li class="submenu__item"><a href="#">— For candidates</a></li>
                            <li class="submenu__item"><a href="#">— For companies</a></li>
                        </ul>
                    </div>
                </div>
                <div class="grid__item width-2/24 hide-on-mobile"></div>
                <div class="grid__item width-4/24 width-mobile-12/24">
                    <div class="footer__links">
                        <h5 class="footer__links_header">Community</h5>
                        <ul class="footer__menu">
                            <li><a href="/">Blog</a></li>
                            <li class="mobile_smaller_distance"><a href="/" >Leaders in Healthcare Romania Conference</a></li>
                            <li class="mobile_smaller_distance"><a href="/">Explore Jobs</a></li>
                            <li class="mobile_smaller_distance"><a href="/">Explore Companies</a></li>
                        </ul>
                    </div>
                    <div class="social__links hide-on-mobile">
                        <a href="#" class="social__link facebook__link"></a>
                        <a href="#" class="social__link instagram__link"></a>
                        <a href="#" class="social__link linkedin__link"></a>
                        <a href="#" class="social__link youtube__link"></a>
                    </div>
                </div>
                <div class="grid__item width-2/24"></div>
                <div class="grid__item width-4/24 absolute_footer">
                    <div class="footer__links">
                        <h5 class="footer__links_header">Our Product</h5>
                        <ul class="footer__menu">
                            <li><a href="/">For candidate (tutorials)</a></li>
                            <li><a href="/">For company (tutorials)</a></li>
                            <li><a href="/">Pricing</a></li>
                        </ul>
                    </div>
                    <div class="footer__call-to-action hide-on-mobile">
                        <a href="#">Get in touch with us</a>
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
                            <img src="http://cst-soft.com/medijobs/images/RO-Flag.png">
                            <span class="glyphicon glyphicon-chevron-down"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#" title="Select this language"><img src="http://cst-soft.com/medijobs/images/RO-Flag.png" style="margin-left:11px;"></a>
                            </li>
                            <li>
                                <a href="#" title="Select this language"><img src="http://cst-soft.com/medijobs/images/RO-Flag.png" style="margin-left:11px;"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="grid__item width-2/24"></div>
                <div class="grid__item width-3/24">
                    <a href="">Terms & Conditions</a>
                </div>
                <div class="grid__item width-2/24"></div>
                <div class="grid__item width-4/24">
                    <a href="">Confidentiality Agreements</a>
                </div>
                <div class="grid__item width-2/24"></div>
                <div class="grid__item width-4/24">
                    <a href="">Sitemap</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    </template>
  </div>
  <aside id="toc">
    <h3 class="toc-title">Table of contents</h3>
    <ul>
      <template>
        <li class="toc-item">
          <a href="#" onclick="scrollToHeader(this)"></a>
          <ul>
            <li>One</li>
            <li>Two</li>
            <li>Three</li>
          </ul>
        </li>
      </template>
    </ul>
  </aside>
</main>

<script>
(function() {
'use strict';
let DEBUG = false;
/**
 * Returns true if the element's computed style is `position: sticky`.
 * @param {!Element} el
 * @return {boolean}
 */
function isSticky(el) {
  return getComputedStyle(el).position.match('sticky') !== null;
}
/**
 * Dispatches a `sticky-event` custom event on the element.
 * @param {boolean} stuck
 * @param {!Element} target Target element of event.
 */
function fire(stuck, target) {
  const evt = new CustomEvent('sticky-change', {detail: {stuck, target}});
  document.dispatchEvent(evt);
}
/**
 * @param {!Element} container
 */
function generatePage(container) {
  const MSGS = [
    'No',
  ];
  const t = container.querySelector('template');
  const toc = document.querySelector('#toc > ul');
  const t2 = toc.querySelector('template');
  MSGS.forEach((msg, i) => {
    const clone = t.content.cloneNode(true);
    const h2 = clone.querySelector('h2');
    //h2.textContent = msg;
    //h2.id = normalizeTitle(msg);
    container.appendChild(clone);
    const tocClone = t2.content.cloneNode(true);
    const a = tocClone.querySelector('a');
    a.textContent = msg;
    a.href = `#${normalizeTitle(msg)}`;
    toc.appendChild(tocClone);
  });
}
/**
 * @param {!Element} container
 * @param {string} className
 */
function addSentinels(container, className) {
  return Array.from(container.querySelectorAll('.sticky')).map(el => {
    const sentinel = document.createElement('div');
    sentinel.classList.add('sticky_sentinel', className);
    return el.parentElement.appendChild(sentinel);
  });
}
/**
 * Sets up an intersection observer to notify when elements with the class
 * `.sticky_sentinel--top` become visible/invisible at the top of the container.
 * @param {!Element} container
 */
function observeHeaders(container) {
  const observer = new IntersectionObserver((records, observer) => {
    for (const record of records) {
      const targetInfo = record.boundingClientRect;
      const stickyTarget = record.target.parentElement.querySelector('.sticky');
      const rootBoundsInfo = record.rootBounds;
      if (targetInfo.bottom < rootBoundsInfo.top) {
          console.log('x')
        fire(true, stickyTarget);
      }
      if (targetInfo.bottom >= rootBoundsInfo.top &&
          targetInfo.bottom < rootBoundsInfo.bottom) {
       fire(false, stickyTarget);
      }
    }
  }, {
    // rootMargin: '-16px',
    threshold: [0],
    root: container
  });
  // Add the bottom sentinels to each section and attach an observer.
  const sentinels = addSentinels(container, 'sticky_sentinel--top');
  sentinels.forEach(el => observer.observe(el));
}
/**
 * Sets up an intersection observer to notify when elements with the class
 * `.sticky_sentinel--bottom` become visible/invisible at the botton of the
 * container.
 * @param {!Element} container
 */
function observeFooters(container) {
  const observer = new IntersectionObserver((records, observer) => {
    for (const record of records) {
      const targetInfo = record.boundingClientRect;
      const stickyTarget = record.target.parentElement.querySelector('.sticky');
      const rootBoundsInfo = record.rootBounds;
      const ratio = record.intersectionRatio;
      if (targetInfo.bottom > rootBoundsInfo.top && ratio === 1) {
        console.log('aici');
        fire(true, stickyTarget);
      }
      if (targetInfo.top < rootBoundsInfo.top &&
          targetInfo.bottom < rootBoundsInfo.bottom) {
        fire(false, stickyTarget);
      }
    }
  }, {
    // rootMargin: '16px',
    // Get callback slightly before element is 100% visible/invisible.
    threshold: [1],
    root: container
  });
  // Add the bottom sentinels to each section and attach an observer.
  const sentinels = addSentinels(container, 'sticky_sentinel--bottom');
  sentinels.forEach(el => observer.observe(el));
}
/**
 * Notifies when elements that have the class `sticky` begin to stick or not.
 * Note: these should be children of the `container` element.
 */
function notifyWhenStickyHeadersChange(container) {
  observeHeaders(container);
  observeFooters(container);
}
function normalizeTitle(title) {
  return title.replace(/[\s!]/g, '-');
}
function scrollToHeader(el) {
  event.preventDefault();
  const target = document.querySelector(`#${normalizeTitle(el.textContent)}`);
  const parent = target.parentElement.parentElement;
  // Slight px offset so IntersectionObserver triggers.
  // Note: Smooth scroll is taken care of. Container has scroll-behavior: smooth.
  container.scrollTo({left: 0, top: parent.offsetTop + 2});
}
function toggleDebugMode() {
  DEBUG = !DEBUG;
  document.body.classList.toggle('debug', DEBUG);
  const sentinels = Array.from(document.querySelectorAll('.sticky_sentinel'));
  sentinels.forEach(el => {
    el.textContent = el.className;
  });
}
const container = document.querySelector('#container');
generatePage(container);
// Feature detect warning after page content is generated.
if (!isSticky(document.querySelector('.sticky')) || !window.IntersectionObserver) {
  document.querySelector('.nosupport').style.display = 'block';
} else  {
  notifyWhenStickyHeadersChange(container);
}
const whoIsSticky = document.querySelector('.who_is_sticky label');
const allTocsItems = Array.from(document.querySelectorAll('#toc .toc-item'));
document.addEventListener('sticky-change', e => {
  // Update sticking header title.
  const [header, stuck] = [e.detail.target, e.detail.stuck];
  header.classList.toggle('shadow', stuck);
  const str = stuck ? header.textContent : '--';
  
  // Update TOC selected item.
  allTocsItems.map(el =>  {
    const match = (el.firstElementChild.getAttribute('href').slice(1) ==
        header.firstElementChild.id);
    el.classList.toggle('active', match);
  });
});
if (location.search.includes('embed')) {
  document.body.classList.add('embed');
}
window.toggleDebugMode = toggleDebugMode;
window.scrollToHeader = scrollToHeader;
// // TODO: benchmark against checking position using scroll events.
// const stickyHeaders = Array.from(document.querySelectorAll('.sticky'));
// const containerTop = container.getBoundingClientRect().top;
// containers.onscroll = function(e) {
//   const visibleHeaders = stickyHeaders.filter(header => {
//     const headerTop = header.getBoundingClientRect().top;
//     console.log(headerTop, containerTop)
//   });
// };
})();

</script>
</body>
</html>
