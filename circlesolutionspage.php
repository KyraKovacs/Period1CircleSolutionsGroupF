<?php
    function validateInput() {
        $name = filter_input(INPUT_POST, "name");
        $company = filter_input(INPUT_POST, "company");
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        $message = filter_input(INPUT_POST, "message");
        $privacy = filter_input(INPUT_POST, "privacy");

        $errors = array();

        if(empty($name) || strlen($name) < 2) {
            array_push($errors, '<div class="error">
            <img class="error-dot" src="images/_WINDOWS/8-contact us/dot.png">
            Please enter your full name.
            </div>');
        }
        if(empty($email)) {
            array_push($errors, '<div class="error">
            <img class="error-dot" src="images/_WINDOWS/8-contact us/dot.png">
            Please enter a valid email address.
            </div>');
        }
        if(strlen($message) < 10) {
            array_push($errors, '<div class="error">
            <img class="error-dot" src="images/_WINDOWS/8-contact us/dot.png">
            Please enter your message (at least 10 characters).
            </div>');
        }
        if($privacy != "on") {
            array_push($errors, '<div class="error">
            <img class="error-dot" src="images/_WINDOWS/8-contact us/dot.png">
            You must agree to the privacy policy to continue.
            </div>');
        }
        if (empty($errors)) {
            array_push($errors, '<p class="message-success">Your message has been sent successfully.</p>');
        }
        return $errors;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circle Solutions</title>
    <link rel="stylesheet" href="circlesolutionspage.css">
    <link rel="stylesheet" href="elo.css">
</head>

<body>
    <!-- main div containing all of the blue bkg color items -->
    <div class="bluehomepage">
        <!-- navbar -->
        <div class="navbar">
            <img class="logo" src="images\logo\logo\circle solutions_logo_01(bluetext_blank background).png" alt="logo">
            <a href="language"> <img class="language" src="images\_WINDOWS\1-homepage\language select icon.png"
                    alt="languageselect">EN</a>
            <a href="contactus">contact us</a>
            <a href="whatwebuild">what we build</a>
            <a href="aboutus">about us</a>
            <a href="home">home</a>
        </div>
        <!-- text left side -->
        <div class="welcometext">
            <div class="textleftside">
                <h1 class="px180"><b>software</b></h1>
                <h2 class="px150"><b>solutions</b></h2>
                <h3 class="px70">serving worldwide</h3>
                <h4 class="px50">just connect the dots</h4>
            </div>
            <!-- trusted across borders section -->
            <div>
                <h4 class="px30"><b>trusted across borders</b></h4>
                <!-- card divclasses are for the white little cards -->
                <div class="card">
                    <img class="quote" src="images\_WINDOWS\1-homepage\quotation.png" alt="quotation">
                    <p class="px16">“circle solutions provides really good, dedicated talents that posses a strong work
                        ethic.”</p>
                    <img class="CEO" src="images\_WINDOWS\1-homepage\1-Jinyi Guo.png" alt="jinyiguo">
                    <p class="px18"><b>Jinyi Guo</b></p>
                    <img class="company" src="images\_WINDOWS\1-homepage\Luckin Coffee.png" alt="luckincoffee">
                    <p class="px12">CEO | Luckin Coffee, China</p>
                    <img class="flag" src="images\_WINDOWS\1-homepage\1-China flag.png" alt="chinaflag">
                </div>
                <div class="card">
                    <img class="quote" src="images\_WINDOWS\1-homepage\quotation.png" alt="quotation">
                    <p class="px16">“always understanding our requirements to the detail, designing and developing
                        high-quality software.”</p>
                    <img class="CEO" src="images\_WINDOWS\1-homepage\2-Andy Jassy.png" alt="andyjassy">
                    <p class="px18"><b>Andy Jassy</b></p>
                    <img class="company" src="images\_WINDOWS\1-homepage\Amazon.png" alt="amazon">
                    <p class="px12">CEO | Amazon, USA</p>
                    <img class="flag" src="images\_WINDOWS\1-homepage\2-US flag.png" alt="usflag">
                </div>
                <div class="card">
                    <img class="quote" src="images\_WINDOWS\1-homepage\quotation.png" alt="quotation">
                    <p class="px16">“this plugin has been great to work with. It has some really advanced functionality
                        and easy to modify”</p>
                    <img class="CEO" src="images\_WINDOWS\1-homepage\3-Oliver Zipse.png" alt="oliverzipse">
                    <p class="px18"><b>Oliver Zipse</b></p>
                    <img class="company" src="images\_WINDOWS\1-homepage\BMW.png" alt="bmw">
                    <p class="px12">CEO | BMW, Germany</p>
                    <img class="flag" src="images\_WINDOWS\1-homepage\3-Germany flag.png" alt="usflag">
                </div>
                <a href="globalreach"><img class="globalreach"
                        src="images\_WINDOWS\1-homepage\explore global reach button.png" alt=""></a>
            </div>
        </div>
        <div class="whitehomepage">
            <div class="firstrow">
                <img class="reviews" src="images\_WINDOWS\1-homepage\Clutch Review.png" alt="clutchreview">
                <div>
                    <p class="px45"><b>15</b></p>
                    <p class="px30"><b>years</b></p>
                    <p class="px20">proven on track</p>
                </div>
                <div>
                    <p class="px45"><b>2000+</b></p>
                    <p class="px30"><b>projects</b></p>
                    <p class="px20">successfully delivered</p>
                </div>
                <div>
                    <p class="px45"><b>250+</b></p>
                    <p class="px30"><b>experts</b></p>
                    <p class="px20">on board</p>
                </div>
                <div>
                    <p class="px45"><b>30+</b></p>
                    <p class="px30"><b>countries</b></p>
                    <p class="px20">on our delivery map</p>
                </div>
            </div>
            <p class="px35">trusted by 200+ leading brands worldwide</p>
            <div class="trusted companies">
                








            </div>
        </div>











    <div class="golden-circle-section">

    <h1 class="gc-heading">about us</h1>
    <h2 class="gc-subtitle">golden circle</h2>
    <p class="gc-author">- by Simon Sinek -</p>

    <div class="gc-container">
        <div class="gc-item">
        <img src="images/_WINDOWS/3-about us/what.jpeg" alt="What" class="gc-image">
        <p class="gc-desc">software solutions<span class="next">that fit the individual company</span></p>
        </div>

        <div class="gc-item">
        <img src="images/_WINDOWS/3-about us/how.jpeg" alt="How" class="gc-image">
        <p class="gc-desc">developing software<span class="next">that make life easier</span></p>
        </div>

        <div class="gc-item">
        <img src="images/_WINDOWS/3-about us/why.jpeg" alt="Why" class="gc-image">
        <p class="gc-desc">tasks should be no hassle</p>
        </div>
    </div>
    </div>

    <!-- Spacer Between Sections -->
    <div class="section-divider"></div>

    <!-- Vision & Mission Section -->
    <div class="vision-mission">
    <div class="vision-section">
        <div class="left-side">
        <h1 class="vm-title">vision</h1>
        </div>
        <div class="right-side">
        <img src="images/_WINDOWS/3-about us/circle.jpeg" alt="circle" class="circle-img">
        <div class="text-area">
            <h2>vision</h2>
            <p>we love to keep things simple, no big gestures,<span class="next">no theatre or promising utopias.</span></p>
        </div>
        </div>
    </div>

    <div class="mission-section">
        <div class="left-side">
        <h1 class="vm-title">&amp; mission</h1>
        </div>
        <div class="right-side">
        <img src="images/_WINDOWS/3-about us/circle.jpeg" alt="circle" class="circle-img">
        <div class="text-area">
            <h2>mission</h2>
            <p>to develop software that fit the individual qualities<span class="next">of individual needs</span></p><br>
            <p class="vision">to empowering people and business<span class="next">with software solutions</span></p>
        </div>
        </div>
    </div>
    </div>










































        <main>
            <h1 class="white">our global reach</h1>
            <div class="bluegrey">trusted worldwide across 30+ countries</div>
            <img class="worldmap" src="images/_WINDOWS/4-global presence/world map.png" alt="world map">






        </main>
























        <!--section-values-->

        <section class="values-section">
            <div class="values-section-left">
                <h1>values</h1>
            </div>

            <div class="values-section-right">
                <img src="img-about us/values.png" alt="values">
            </div>
        </section>


        <!--section - executive team-->

        <section class="team-section">
            <h1>our executive team</h1>

            <div class="team-container">
                <div class="team-member">
                    <img src="img-about us/Pieter Bakker.png" alt="Pieter Bakker">
                    <h2>Pieter Bakker</h2>
                    <p>chief executive officer</p>
                    <button class="team-button" data-member="1">view profile</button>
                </div>

                <div class="values-section-right">
                    <img src="images/_WINDOWS/3-about us/values.png" alt="values">
                    <div class="team-member">
                        <img src="img-about us/William Wisser.png" alt="William Wisser">
                        <h2>William Wisser</h2>
                        <p>chief technology officer</p>
                        <button class="team-button" data-member="2">view profile</button>
                    </div>

                    <div class="team-member">
                        <img src="img-about us/Jan van Dijk.png" alt="Jan van Dijk">
                        <h2>Jan van Dijk</h2>
                        <p>chief commercial officer</p>
                        <button class="team-button" data-member="3">view profile</button>
                    </div>

                    <!--section - executive team-->

                    <section class="team-section">
                        <h1>our executive team</h1>

                        <div class="team-container">
                            <div class="team-member">
                                <img src="images/_WINDOWS/3-about us/pieter bakker.png" alt="Pieter Bakker">
                                <h2>Pieter Bakker</h2>
                                <p>chief executive officer</p>
                                <button class="team-button" data-member="1">view profile</button>
                            </div>

                            <div class="team-member">
                                <img src="images/_WINDOWS/3-about us/william wisser.png" alt="William Wisser">
                                <h2>William Wisser</h2>
                                <p>chief technology officer</p>
                                <button class="team-button" data-member="2">view profile</button>
                            </div>

                            <div class="team-member">
                                <img src="images/_WINDOWS/3-about us/jan van dijk.png" alt="Jan van Dijk">
                                <h2>Jan van Dijk</h2>
                                <p>chief commercial officer</p>
                                <button class="team-button" data-member="3">view profile</button>
                            </div>

                            <div class="team-member">
                                <img src="images/_WINDOWS/3-about us/sarah kleinn.png" alt="Sarah Kleinn">
                                <h2>Sarah Kleinn</h2>
                                <p>chief application officer</p>
                                <button class="team-button" data-member="4">view profile</button>
                            </div>
                        </div>
                    </section>
                    <div class="team-member">
                        <img src="img-about us/Sarah Kleinn.png" alt="Sarah Kleinn">
                        <h2>Sarah Kleinn</h2>
                        <p>chief application officer</p>
                        <button class="team-button" data-member="4">view profile</button>
                    </div>
                </div>
        </section>


        <!-- Modal -->
        <div id="modal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <div id="profileDetails"></div>
            </div>
        </div>

        <!-- Hidden Profiles -->
        <div id="memberProfiles" style="display:none;">
            <div class="modal-content">
                <div data-member="1">
                    <img class="data-member-img" src="img-about us/Pieter Bakker.png" alt="Pieter Bakker">
                    <h2>Pieter Bakker</h2>
                    <h3><strong>chief executive officer</strong></h3><br>
                    <p>Pieter Bakker has over 30 years of experience in digital strategy and enterprise transformation.
                        Before founding Circle Solutions in 2010, he served as Regional Director at a leading European
                        consulting firm,
                        managing IT and operations projects across 10 countries. Under his leadership,
                        Circle Solutions has delivered solutions in more than 30 countries with over 2,000 projects
                        across sectors such as finance, energy, e-commerce, and education.
                        His vision is to establish Circle Solutions as a trusted global partner—developing software that
                        simplifies complexity and drives sustainable digital growth.</p>
                </div>
            </div>

            <div data-member="2">
                <img class="data-member-img" src="img-about us/William Wisser.png" alt="William Wisser">
                <h2>William Wissen</h2>
                <h3><strong>chief technology officer</strong></h3><br>
                <p>William Wissen brings over 15 years of experience in software architecture, cloud engineering,
                    and enterprise systems integration. Before joining Circle Solutions in 2015, he led technology
                    innovation
                    at a major IT services company, overseeing the development of scalable digital platforms for global
                    clients.
                    At Circle Solutions, William drives the company's technology strategy, focusing on performance,
                    security, and sustainable innovation. His leadership ensures that every solution is built on
                    reliable,
                    future-ready technology that empowers businesses to grow efficiently.</p>
            </div>

            <div data-member="3">
                <img class="data-member-img" src="img-about us/Jan van Dijk.png" alt="Jan van Dijk">
                <h2>Jan van Dijk</h2>
                <h3><strong>chief commercial officer</strong></h3><br>
                <p>Jan van Dijk has more than 20 years of experience in international business development and client
                    relations. Prior to joining Circle Solutions in 2011, he managed strategic partnerships across
                    Europe and
                    America for a multinational consultancy, expanding its market presence and revenue growth. At Circle
                    Solutions,
                    Jan leads the global commercial strategy, building long-term relationships with clients and
                    partners.
                    His goal is to strengthen Circle Solutions's position as a trusted and quality-driven brand in the
                    global digital market.</p>
            </div>

            <div data-member="4">
                <img class="data-member-img" src="img-about us/Sarah Kleinn.png" alt="Sarah Kleinn">
                <h2>Sarah Kleinn</h2>
                <h3><strong>chief application officer</strong></h3><br>
                <p>Sarah Klein has over 20 years of experience in software development, UX design, and enterprise
                    application management. Before joining Circle Solutions in 2014, she directed application strategy
                    at
                    a leading European tech firm, delivering high-performance solutions for industries such as finance,
                    logistics, and retail. At Circle Solutions, Sarah oversees the design and delivery of all
                    client applications—ensuring that every product is intuitive,
                    user-friendly, and aligned with the company’s values of simplicity and quality.</p>
            </div>
        </div>

        <script>
            // Modal logic
            const modal = document.getElementById('modal');
            const profileDetails = document.getElementById('profileDetails');
            const closeBtn = document.querySelector('.close');

            document.querySelectorAll('.team-button').forEach(btn => {
                btn.addEventListener('click', () => {
                    const memberId = btn.dataset.member;
                    const content = document.querySelector(`#memberProfiles [data-member="${memberId}"]`).innerHTML;
                    profileDetails.innerHTML = content;
                    modal.classList.add('show');
                });
            });

            closeBtn.addEventListener('click', () => {
                modal.classList.remove('show');
            });

            window.addEventListener('click', (e) => {
                if (e.target === modal) modal.classList.remove('show');
            });
        </script>
        <!--Global reach-->
    <section>
    <div class="GlobalReachBox">
        <h1 class="whitetext">our global reach</h1>
        <div class="bluegrey">trusted worldwide across 30+ countries</div>
        <img class="worldmap" src="images/_WINDOWS/4-global presence/world map.png" alt="world map">
        <div class="whitebox">
            <div class="projects-text">
                    <h1>2000+ <b class="projects">projects</b></h1> 
                    <h3 class="small-projects-text">succesfully delivered</h3>
            </div>
            <div class="vertical-line"></div>
                <div class="brands-text">
                <h1>200+<b class="brands">brands</b></h1>
                <h3 class="small-brands-text">trusted worldwide</h3>
            </div>
            <div class="vertical-line1"></div>
            <div class="countries-text">
                <h1>30+<b class="countries">countries</b></h1>
                <h3 class="small-countries-text">on our delivery map</h3>
            </div>
             <div class="vertical-line2"></div>
             <div class="country-flags">
                <img src="images/_WINDOWS/4-global presence/1-US flag.png" alt="US flag">
                <img src="images/_WINDOWS/4-global presence/2-China flag.png" alt="China flag">
                <img src="images/_WINDOWS/4-global presence/3-Germany flag.png" alt="Germany flag">
                <img src="images/_WINDOWS/4-global presence/4-France flag.png" alt="France flag">
                <img src="images/_WINDOWS/4-global presence/5-India flag.png" alt="India flag">
                <img class="japan-flag" src="images/_WINDOWS/4-global presence/7-Japan flag.png" alt="Japan flag">
                <img src="images/_WINDOWS/4-global presence/6-UK flag.png" alt="UK flag">
                <img src="images/_WINDOWS/4-global presence/8-Hungary flag.png" alt="Hungary flag">
                <img src="images/_WINDOWS/4-global presence/9-Thailand flag.png" alt="Thailand">
                <img src="images/_WINDOWS/4-global presence/10-Poland flag.png" alt="Poland flag">
                <img src="images/_WINDOWS/4-global presence/11-Iran flag.png" alt="Iran flag">
                <img src="images/_WINDOWS/4-global presence/12-Sierra Leone.png" alt="Sierra Leone">
             </div>
        </div>
     </div>
     </section>

     <!--What We Build Page-->
     <section>
        <div class="WhatWeBuildBox">
            <div class="WhatWeBuildBox-title">what we build</div>
            <div class="WhatWeBuildBox-subtitle">explore how our solutions foster growth and digital discovery of your unique business</div>
                <div class="circles-box">
                    <img src="images/_WINDOWS/5-what we build/API.png" alt="API">
                    <img src="images/_WINDOWS/5-what we build/cloud_dev.png" alt="cloud dev">  
                    <img src="images/_WINDOWS/5-what we build/hire_developer.png" alt="hire developer">  
                    <img src="images/_WINDOWS/5-what we build/mobileapp.png" alt="mobile app">  
                    <img src="images/_WINDOWS/5-what we build/product_dev.png" alt="product dev">  
                    <img src="images/_WINDOWS/5-what we build/software_testing.png" alt="software testing">  
                    <img src="images/_WINDOWS/5-what we build/UX_UI.png" alt="UX/UI">  
                    <img src="images/_WINDOWS/5-what we build/web_dev.png" alt="web dev">   
                </div>
        </div>
     </section>







































































































































 <!-- section : 404 page -->

<section class="page404-section">
    <h1>404</h1>
    <p>page not found</p>
    <button class="button-page404">go back home</button>
</section>




<!-- FAQ PAGE -->
    <div class="faq-questions-container px30">
        <div class="help-section-header px80">frequently asked questions</div>
        <details>
            <summary class="faq-question">What does Circle Solutions do?</summary>
            <p class="faq-text">
                We design and develop custom software that helps organizations work more efficiently.
                Every solution is built around real needs — no unnecessary features, no clutter.
                Just what's needed to make things work smoothly.
            </p>
        </details>
        <details>
            <summary class="faq-question">What types of software do you build?</summary>
            <p class="faq-text">
                Our work ranges from internal tools and workflow platforms to
                data dashboards and integration systems. We build solutions that simplify daily operations
                — especially for teams in business, logistics, and IT.
            </p>
        </details>
        <details>
            <summary class="faq-question">How do you approach new projects?</summary>
            <p class="faq-text">
                We start by understanding how your organization works and where things can be improved.
                From there, we design and develop software that fits — not the other way around.
                Throughout the process, you'll have one clear point of contact.
            </p>
        </details>
        <details>
            <summary class="faq-question">What makes Circle Solutions different?</summary>
            <p class="faq-text">
                Simplicity. We don't add complexity where it's not needed. Our software is clean,
                functional, and reliable — focused on usability and long-term value.
            </p>
        </details>
        <details>
            <summary class="faq-question">Do you offer off-the-shelf products?</summary>
            <p class="faq-text">
                No. Every solution we create is custom-built for the client's specific context and goals.
                This ensures that your software fits your processes — instead of forcing your processes to fit the
                software.
            </p>
        </details>
        <details>
            <summary class="faq-question">How do you ensure quality and reliability?</summary>
            <p class="faq-text">
                We follow a clear, structured development process with built-in testing at every step.
                Our code is maintainable, well-documented, and ready to grow with your organization.
            </p>
        </details>
        <details>
            <summary class="faq-question">What happens after delivery?</summary>
            <p class="faq-text">
                After launch, we stay available for support and further development.
                Many of our clients continue working with us to refine or expand their systems as their needs
                evolve.
            </p>
        </details>
        <details>
            <summary class="faq-question">How can we get started?</summary>
            <p class="faq-text">
            Simply reach out via the contact form below or send us an email at hi@circlesolutions.com. 
            We'll plan a short call to discuss your needs and explore what kind of software could help your team work more efficiently.
            </p>
        </details>
    </div>
<!-- CONTACT US PAGE -->
    <div class="contact-us-container px30">
        <div class="contact-us-left-section">
            <div class="contact-us-header-container">
                <div class="help-section-header px72">contact us</div>
                <div class="help-section-slogan">just connect the dots.</div>
            </div>
            <div class="contact-methods-downloads-container">
                <div class="contact-methods">
                    <div class="contact-method">
                        <img class="contact-method-icon" src="images/_WINDOWS/8-contact us/website.png">
                        <div class="contact-method-text">www.circlesolutions.com</div>
                    </div>
                    <div class="contact-method">
                        <img class="contact-method-icon" src="images/_WINDOWS/8-contact us/e-mail.png">
                        <div class="contact-method-text">hi@circlesolutions.com</div>
                    </div>
                    <div class="contact-method">
                        <img class="contact-method-icon" src="images/_WINDOWS/8-contact us/tel.png">
                        <div class="contact-method-text">+316 12 34 56 78</div>
                    </div>
                </div>
                <div class="downloads">
                    <div class="download-bold-text">download</div>
                    <div class="downloads-container">
                        <a class="download-lorem" href="lorem.txt" target="_blank" download="whitepaper">
                            <img class="download-icon" src="images/_WINDOWS/8-contact us/download.png">
                            <div class="download-option-text">
                                whitepaper
                            </div>
                        </a>
                        <div class="vertical-divider"></div>
                        <a class="download-lorem" href="lorem.txt" target="_blank" download="brochure">
                            <img class="download-icon" src="images/_WINDOWS/8-contact us/download.png">
                            <div class="download-option-text">
                                brochure
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <section class="contact-us-right-section" id="contact-form">
            <form class="contact-form" action="<?php echo $_SERVER["PHP_SELF"] ?>#contact-form" method="POST">
                <label class="form-label" for="name">name</label>
                <input class="form-input" type="text" name="name" id="name">
                <label class="form-label" for="company">company name</label>
                <input class="form-input" type="text" name="company" id="company">
                <label class="form-label" for="email">e-mail</label>
                <input class="form-input" type="email" name="email" id="email">
                <label class="form-label-message" for="message">how can we help?</label>
                <textarea class="message" name="message" id="message" rows="5" cols="50"></textarea>
                <div class="attach-container">
                    <label class="attach-label" for="file">
                        <img class="attach-img" src="images/_WINDOWS/8-contact us/attach file.png">
                        <span>attach file</span>
                        <div class="tooltip-container">
                            <img class="tooltip-img" src="images/_WINDOWS/8-contact us/information.png">
                            <div class="tooltip-text">Upload relevant documents or images from your device.</div>
                        </div>
                    </label>
                    <input type="file" id="file">
                </div>
                <div class="privacy-submit">
                    <div class="privacy-policy-container">
                        <input type="checkbox" name="privacy" id="privacy">
                        <label class="form-label" for="privacy">i accept <u>privacy policy</u></label>
                    </div>
                    <input class="submit-img" type="image" src="images/_WINDOWS/8-contact us/connect.png">
                </div>
            </form>
            <?php
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $output = validateInput();


                foreach($output as $error)
                {
                    echo $error;
                }
            }
            
            ?>
        </section>
    </div>

    <!-- FOOTER -->
    <div class="footer-container">
        <div class="footer-flex">
            <div class="footer-left-section">
                <div class="footer-company-title">circle solutions</div>
                <div class="footer-socials">
                    <img class="footer-social-img" src="images/_WINDOWS/9-footer/instagram.png">
                    <img class="footer-social-img" src="images/_WINDOWS/9-footer/X.png">
                    <img class="footer-social-img" src="images/_WINDOWS/9-footer/facebook.png">
                </div>
            </div>
            <div class="footer-right-section">
                <div class="footer-column">
                    <div class="footer-title">company</div>
                    <a class="footer-option" href="">about us</a>
                    <a class="footer-option" href="">what we build</a>
                    <a class="footer-option" href="">global reach</a>
                    <a class="footer-option" href="">contact us</a>
                </div>
                <div class="footer-column">
                    <div class="footer-title">legal</div>
                    <a class="footer-option" href="">privacy policy</a>
                    <a class="footer-option" href="">terms of use</a>
                </div>
                <div class="footer-column">
                    <div class="footer-title">contact</div>
                    <div class="footer-option">www.circlesolutions.com</div>
                    <div class="footer-option">hi@circlesolutions.com</div>
                    <div class="footer-option">+316 12 34 56 78</div>
                </div>
            </div>
        </div>
        <div class="footer-reserved-rights-container">
            <hr class="footer-divider">
            <div class="copyright">
                2025 cirlce solutions. All rights reserved.
                <img class="copyright-img" src="images/_WINDOWS/9-footer/copyright-white.png">
            </div>
        </div>
    </div>
    
<!-- cookie banner -->
        <?php if (!isset($_COOKIE[$cookie_name])): ?>
        <div class="cookie-banner">
            <h1>we use cookies</h1>
            <p>our website uses cookies to improve your browsing experience. by continuing, we assume your permission to
                deploy cookies as detailed in our privacy policy.</p>
            </p>
            <form method="POST" style="display:inline;">
                <button type="submit" name="accept_cookie" class="accept-btn">Accept all cookies</button>
                <button type="submit" name="reject_cookie" class="reject-btn">Reject all</button>
            </form>
        </div>
        <?php endif; ?>

        <!-- CHECK : Cookie Consent Banner with Accept / Reject-->
         
        <?php
         
// Start PHP before *any* HTML is sent!
$cookie_name = "user_cookie_consent";
$cookie_time = 30 * 24 * 60 * 60; // 30 days

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['accept_cookie'])) {
        setcookie($cookie_name, "accepted", time() + $cookie_time, "/");
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }

    if (isset($_POST['reject_cookie'])) {
        setcookie($cookie_name, "rejected", time() + $cookie_time, "/");
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
}
?>
        <!-- END of cookie banner -->
</body>

</html>