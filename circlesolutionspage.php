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
        >>>>>>> 541ecbea067f3a7e5d09eed896a5420131696095







































































































































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