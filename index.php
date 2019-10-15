<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MediJobs StyleGuide</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="fonts/styles.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
</head>
<body>
    <header class="mj-header">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-4/24">
                    <a href="/" class="mj-logo">
                        <img src="images/logo.png" alt="MediJobs Logo">
                    </a>
                </div>
                <div class="grid__item width-9/24">
                    <ul class="mj-meniu">
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
                    </ul>
                </div>
                <div class="grid__item width-3/24"></div>
                <div class="grid__item width-3/24">
                    <div class="mj-call_to_action">
                        <p class="call_to_action__text">Get in touch with us</p>
                        <a class="call_to_action__link" href="tel:">+4 0749 099291</a>
                    </div>
                </div>
                <div class="grid__item width-4/24">
                    <button class="mj-btn mj-btn--secondary mj-btn--alt--2">Get a free account</button>
                </div>
                <div class="grid__item width-1/24">
                    <a href="#" class="pull-right">
                        <img src="images/Login.png" alt="Link Logo">
                    </a>
                </div>
            </div>
        </div>
    </header>
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-1/24"></div>
            <div class="grid__item width-10/24">
                <h1 class="headline">Large title style.</h1>
            </div>
        </div>
        <div class="mj-grid">
            <div class="grid__item width-1/24"></div>
            <div class="grid__item width-2/24">
                <h1>H1</h1>
                <h2>H2</h2>
                <h3>H3</h3>
                <h4>H4</h4>
                <h5>H5</h5>
            </div>
            <div class="grid__item width-1/24"></div>
            <div class="grid__item width-10/24">
                <p style="margin-top:50px;"><span class="mj-bold">PARAGRAPH LARGE STYLE</span> - Medical specialists, physicians and nurses alike, have a noble professional trajectory. They adhere to the <a href="#">inline link</a> or deontological rules, and swear to take care of patients as best they can <a href="#">inline link hover</a> in service of medicine  meaningful job, and the other is income.</p>
                <p>A medical professional shouldn’t define his or hers success by the number of zeros in their account. Still, it  and swear to take care of patients as best they in service of medicine  meaningful job, and the other is income can does help with their hectic […]</p>
            </div>
        </div>
        <div class="mj-grid mj-form">
            <div class="grid__item width-1/24"></div>
            <div class="grid__item width-13/24">
                <input class="mj-input" type="text" placeholder="Default State" >
                <input class="mj-input has_error" type="text" placeholder="Error State" >
                <input class="mj-input disabled" readonly type="text" placeholder="Disabled State" >

                
            </div>
            <div class="grid__item width-1/24"></div>
            <div class="grid__item width-7/24">
                <textarea class="mj-textarea" placeholder="Textarea placeholder"></textarea>
            </div>
        </div>
        <div class="mj-grid mj-form">
            <div class="grid__item width-1/24"></div>
            <div class="grid__item width-6/24">
                <div class="mj-select">
                    <select>
                        <option value="0">Select:</option>
                        <option value="1">First Select Option</option>
                        <option value="2">Second Select Option</option>
                        <option value="3">Third Select Option</option>
                    </select>
                </div>
            </div>
            <div class="grid__item width-1/24"></div>
            <div class="grid__item width-6/24">
            <div class="mj-select disabled">
                    <select>
                        <option value="0">Select Disabled</option>
                        <option value="1">First Select Option</option>
                        <option value="2">Second Select Option</option>
                        <option value="3">Third Select Option</option>
                    </select>
                </div>
            </div>
            <div class="grid__item width-1/24"></div>
            <div class="grid__item width-3/24">
                <button class="mj-btn mj-btn--secondary">
                    Secondary Default
                </button>
                <button class="mj-btn mj-btn--secondary mj-btn--disabled">
                    Secondary Disabled
                </button>
            </div>
            <div class="grid__item width-1/24"></div>
            <div class="grid__item width-4/24">
                <button class="mj-btn mj-btn--secondary mj-btn--alt">
                    Secondary Alternative
                </button>
                <button class="mj-btn mj-btn--secondary mj-btn--alt mj-btn--disabled">
                    Alternative Disabled
                </button>
            </div>
        </div>
        <div class="mj-grid mj-form">
            <div class="grid__item width-1/24"></div>
            <div class="grid__item width-7/24">
                <button class="mj-btn mj-btn--primary">
                    Primary Default
                </button>
                <button class="mj-btn mj-btn--primary mj-btn--alt">
                    Primary Alternative 1
                </button>
                <button class="mj-btn mj-btn--primary mj-btn--alt--2">
                    Primary Alternative 2
                </button>
            </div>
            <div class="grid__item width-1/24"></div>
            <div class="grid__item width-7/24">
                <button class="mj-btn mj-btn--primary mj-btn--disabled">
                    Primary Disabled
                </button>
                <button class="mj-btn mj-btn--primary mj-btn--alt mj-btn--disabled">
                    Primary Alternative Disabled
                </button>
                <button class="mj-btn mj-btn--primary mj-btn--alt--2 mj-btn--disabled">
                    Primary Alternative 2 Disabled
                </button>
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
                            <img src="images/logo-footer.png" alt="Medijobs Logo">
                        </a>
                    </div>
                    <p>
                    La MEDIjobs credem că puține lucruri sunt mai interesante decât construirea propriei cariere.
                    </p>
                    <p>Pentru că nu e vorba despre a aplica la un job, ci despre oamenii pe care îi întâlnești și lucrurile noi pe care la afli.</p>
                </div>
                <div class="grid__item width-2/24"></div>
                <div class="grid__item width-3/24">
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
                <div class="grid__item width-2/24"></div>
                <div class="grid__item width-4/24">
                    <div class="footer__links">
                        <h5 class="footer__links_header">Community</h5>
                        <ul class="footer__menu">
                            <li><a href="/">Blog</a></li>
                            <li><a href="/">Leaders in Healthcare Romania</a></li>
                            <li><a href="/"> Conference</a></li>
                            <li><a href="/">Explore Jobs</a></li>
                            <li><a href="/">Explore Companies</a></li>
                        </ul>
                    </div>
                    <div class="social__links">
                        <a href="#" class="social__link facebook__link"></a>
                        <a href="#" class="social__link instagram__link"></a>
                        <a href="#" class="social__link linkedin__link"></a>
                        <a href="#" class="social__link youtube__link"></a>
                    </div>
                </div>
                <div class="grid__item width-2/24"></div>
                <div class="grid__item width-4/24">
                    <div class="footer__links">
                        <h5 class="footer__links_header">Our Product</h5>
                        <ul class="footer__menu">
                            <li><a href="/">For candidate (tutorials)</a></li>
                            <li><a href="/">For company (tutorials)</a></li>
                            <li><a href="/">Pricing</a></li>
                        </ul>
                    </div>
                    <div class="footer__call-to-action">
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
                    <p>© 2019 Medijobs Inc.</p>
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
    <script src="js/main.js"></script>
</body>
</html>