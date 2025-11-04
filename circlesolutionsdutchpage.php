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
            Vul uw volledige naam in.
            </div>');
        }
        if(empty($email)) {
            array_push($errors, '<div class="error">
            <img class="error-dot" src="images/_WINDOWS/8-contact us/dot.png">
            Voer een geldig e-mailadres in.
            </div>');
        }
        if(empty($message) || strlen($message) < 10) {
            array_push($errors, '<div class="error">
            <img class="error-dot" src="images/_WINDOWS/8-contact us/dot.png">
            Uw bericht moet minimaal 10 tekens bevatten.
            </div>');
        }
        if($privacy != "on") {
            array_push($errors, '<div class="error">
            <img class="error-dot" src="images/_WINDOWS/8-contact us/dot.png">
            U moet akkoord gaan met het privacybeleid om door te gaan.
            </div>');
        }
        if (empty($errors)) {
            array_push($errors, '<p class="message-success">Je bericht is succesvol verstuurd.</p>');
        }
        return $errors;
    }
        
// COOKIE SETUP
$cookie_name = "user_cookie_consent";
$cookie_time = 30 * 24 * 60 * 60; // 30 days

// Handle POST request - COOKIE

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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circle Solutions</title>
    <link rel="stylesheet" href="circlesolutionspage.css">
</head>

<body>
    <!-- main div containing all of the blue bkg color items -->
    <div class="bluehomepage">
        <!-- navbar -->
        <div class="navbar">
            <img class="logonav" src="images\logo\logo\circle solutions_logo_01(bluetext_blank background).png" alt="logo">
            <a href="#home">start</a>
            <a href="#aboutus">over ons</a>
            <a href="#what-we-build">wat we bouwen</a>
            <a href="#contact-us-page">contact ons</a>
            <a href="blogdutch.html">blog</a>
            <a href="circlesolutionspage.php"> <img class="language" src="images\_WINDOWS\1-homepage\language select icon.png" alt="languageselect">NL</a>
        </div>
        <!-- text left side -->
        <div id="home" class="welcometext">
            <div class="textleftside">
                <h1 class="px180 bigspacewelc"><b>software</b></h1>
                <h2 class="px150 bigspacewelc"><b>oplossingen</b></h2>
                <h3 class="px70 littlespacewelc">wereldwijd actief</h3>
                <h4 class="px50 littlespacewelc">verbind gewoon de punten</h4>
            </div>
            <!-- trusted across borders section -->
            <div class="bluerightsidewelc">
                <h4 class="px40 trustedwelc"><b>vertrouwd over de grenzen heen</b></h4>
                <!-- card divclasses are for the white little cards -->
                <div class="card-collection"> 
                    <div class="cardwelc">
                        <img class="quote" src="images\_WINDOWS\1-homepage\quotation.png" alt="quotation">
                        <p class="px16">“Circle Solutions levert zeer goede, toegewijde talenten met een sterke werkethiek.”</p>
                        <img class="CEO" src="images\_WINDOWS\1-homepage\1-Jinyi Guo.png" alt="jinyiguo">
                        <p class="px18"><b>Jinyi Guo</b></p>
                        <img class="company" src="images\_WINDOWS\1-homepage\Luckin Coffee.png" alt="luckincoffee">
                        <p class="px12">CEO | Luckin Coffee, China</p>
                        <img class="flag" src="images\_WINDOWS\1-homepage\1-China flag.png" alt="chinaflag">
                    </div>
                    <div class="cardwelc">
                        <img class="quote" src="images\_WINDOWS\1-homepage\quotation.png" alt="quotation">
                        <p class="px16">“altijd onze vereisten tot in detail begrijpen, hoogwaardige software ontwerpen en ontwikkelen.”</p>
                        <img class="CEO" src="images\_WINDOWS\1-homepage\2-Andy Jassy.png" alt="andyjassy">
                        <p class="px18"><b>Andy Jassy</b></p>
                        <img class="company" src="images\_WINDOWS\1-homepage\Amazon.png" alt="amazon">
                        <p class="px12">CEO | Amazon, USA</p>
                        <img class="flag" src="images\_WINDOWS\1-homepage\2-US flag.png" alt="usflag">
                    </div>
                    <div class="cardwelc">
                        <img class="quote" src="images\_WINDOWS\1-homepage\quotation.png" alt="quotation">
                        <p class="px16">“Deze plug-in werkt geweldig. Hij heeft een aantal zeer geavanceerde functies en is eenvoudig aan te passen.”</p>
                        <img class="CEO" src="images\_WINDOWS\1-homepage\3-Oliver Zipse.png" alt="oliverzipse">
                        <p class="px18"><b>Oliver Zipse</b></p>
                        <img class="company" src="images\_WINDOWS\1-homepage\BMW.png" alt="bmw">
                        <p class="px12">CEO | BMW, Duitsland</p>
                        <img class="flag" src="images\_WINDOWS\1-homepage\3-Germany flag.png" alt="usflag">
                    </div>
                </div>
                <div class="globalreachcontainerwelc">
                    <a href="#global-reach"> <img class="globalreachwelc" src="images\_WINDOWS\1-homepage\explore global reach button.png" alt="globalreach"></a>
                </div>
            </div>
        </div>
        <div class="whitehomepage">
            <div class="firstrowwelc">
                <img class="reviews" src="images\_WINDOWS\1-homepage\Clutch Review.png" alt="clutchreview">
                <div class="sectionwelc">
                    <p class="px45"><b>15</b></p>
                    <p class="px30"><b>jaren</b></p>
                    <p class="px20">bewezen op het circuit</p>
                </div>
                <div class="vertical-line"></div>
                <div class="sectionwelc">
                    <p class="px45"><b>2000+</b></p>
                    <p class="px30"><b>projecten</b></p>
                    <p class="px20">succesvol geleverd</p>
                </div>
                <div class="vertical-line"></div>
                <div class="sectionwelc">
                    <p class="px45"><b>250+</b></p>
                    <p class="px30"><b>deskundigen</b></p>
                    <p class="px20">aan boord</p>
                </div>
                <div class="vertical-line"></div>
                <div class="sectionwelc">
                    <p class="px45"><b>30+</b></p>
                    <p class="px30"><b>landen</b></p>
                    <p class="px20">op onze bezorgkaart</p>
                </div>
            </div>
            <p class="px35">vertrouwd door meer dan 200 toonaangevende merken wereldwijd</p>
            <div class="trusted-companies">
                <div class="trusted-companies-track">
                    <img class="trustedcompaniesimg" src="images\_WINDOWS\2-partner brands\Amazon.png" alt="amazon">
                    <img class="trustedcompaniesimg" src="images\_WINDOWS\2-partner brands\BMW.png" alt="bmw">
                    <img class="trustedcompaniesimg" src="images\_WINDOWS\2-partner brands\Samsung.png" alt="samsung">
                    <img class="trustedcompaniesimg" src="images\_WINDOWS\2-partner brands\KLM.png" alt="klm">
                    <img class="trustedcompaniesimg" src="images\_WINDOWS\2-partner brands\Visa.png" alt="visa">
                    <img class="trustedcompaniesimg" src="images\_WINDOWS\2-partner brands\Volkswagen.png" alt="volks">
                    <img class="trustedcompaniesimg" src="images\_WINDOWS\2-partner brands\Nike.png" alt="nike">
                    <img class="trustedcompaniesimg" src="images\_WINDOWS\2-partner brands\Hermes.png" alt="hermes">
                    <img class="trustedcompaniesimg" src="images\_WINDOWS\2-partner brands\Grab.png" alt="grab">
                    <img class="trustedcompaniesimg" src="images\_WINDOWS\2-partner brands\HCSC.png" alt="hcsc">
                    <img class="trustedcompaniesimg" src="images\_WINDOWS\2-partner brands\KFC.png" alt="kfc">
                    <img class="trustedcompaniesimg" src="images\_WINDOWS\2-partner brands\MINI.png" alt="mini">
                    <img class="trustedcompaniesimg" src="images\_WINDOWS\2-partner brands\Paypal.png" alt="paypal">
                    <img class="trustedcompaniesimg" src="images\_WINDOWS\2-partner brands\Puma.png" alt="puma">
                    <img class="trustedcompaniesimg" src="images\_WINDOWS\2-partner brands\TESCO.png" alt="tesco">
                </div>
            </div>
        
        </div>
    <div class="golden-circle-section" id="about-us">
    
    <h1 id="aboutus" class="gc-heading">over ons</h1>
    <h2 class="gc-subtitle">gouden cirkel</h2>
    <p class="gc-author">- door Simon Sinek -</p>

    <div class="gc-container">
        <div class="gc-item">
        <img src="images/_WINDOWS/3-about us/what.jpeg" alt="What" class="gc-image">
        <p class="gc-desc">softwareoplossingen<span class="next">die passen bij het individuele bedrijf</span></p>
        </div>

        <div class="gc-item">
        <img src="images/_WINDOWS/3-about us/how.jpeg" alt="How" class="gc-image">
        <p class="gc-desc">software ontwikkelen<span class="next">die het leven gemakkelijker maken</span></p>
        </div>

        <div class="gc-item">
        <img src="images/_WINDOWS/3-about us/why.jpeg" alt="Why" class="gc-image">
        <p class="gc-desc">taken moeten geen gedoe zijn</p>
        </div>
    </div>
    </div>

    <!-- Spacer Between Sections -->
    <div class="section-divider"></div>

    <!-- Vision & Mission Section -->
    <div class="vision-mission">
    <div class="vision-section">
        <div class="left-side">
        <h1 class="vm-title">visie</h1>
        </div>
        <div class="right-side">
        <img src="images/_WINDOWS/3-about us/circle.jpeg" alt="circle" class="circle-img">
        <div class="text-area">
            <h2>visie</h2>
            <p>we houden ervan om dingen eenvoudig te houden, geen grote gebaren,<span class="next">geen theater of veelbelovende utopieën.</span></p>
        </div>
        </div>
    </div>

    <div class="mission-section">
        <div class="left-side">
        <h1 class="vm-title">&amp; missie</h1>
        </div>
        <div class="right-side">
        <img src="images/_WINDOWS/3-about us/circle.jpeg" alt="circle" class="circle-img">
        <div class="text-area">
            <h2>missie</h2>
            <p>software ontwikkelen die aansluit bij de individuele kwaliteiten<span class="next">van individuele behoeften</span></p><br>
            <p class="vision">om mensen en bedrijven te versterken<span class="next">met softwareoplossingen</span></p>
        </div>
        </div>
    </div>
    </div>

<!-- section : values -->
        <section class="values-section">
            <div class="values-section-left">
                <h1>waarden</h1>
            </div>

            <div class="values-section-right">
                <img src="images/_WINDOWS/3-about us/values.png" alt="values">
            </div>
        </section>
        <!-- END section : values -->


        <!--section - executive team-->
        <section class="team-section">
            <h1>ons directieteam</h1>

            <div class="team-container">
                <div class="team-member">
                    <img src="images/_WINDOWS/3-about us/pieter bakker.png" alt="Pieter Bakker">
                    <h2>Pieter Bakker</h2>
                    <p>algemeen directeur</p>
                    <button class="team-button" data-member="1">profiel bekijken</button>
                </div>

                <div class="team-member">
                    <img src="images/_WINDOWS/3-about us/william wisser.png" alt="William Wisser">
                    <h2>William Wisser</h2>
                    <p>hoofd technologie</p>
                    <button class="team-button" data-member="2">profiel bekijken</button>
                </div>

                <div class="team-member">
                    <img src="images/_WINDOWS/3-about us/jan van dijk.png" alt="Jan van Dijk">
                    <h2>Jan van Dijk</h2>
                    <p>commercieel directeur</p>
                    <button class="team-button" data-member="3">profiel bekijken</button>
                </div>

                <div class="team-member">
                    <img src="images/_WINDOWS/3-about us/sarah kleinn.png" alt="Sarah Kleinn">
                    <h2>Sarah Kleinn</h2>
                    <p>hoofd applicatiebeheer</p>
                    <button class="team-button" data-member="4">profiel bekijken</button>
                </div>
            </div>
        </section>


        <!-- Modal for profile view -->
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
                    <img class="data-member-img" src="images/_WINDOWS/3-about us/pieter bakker.png" alt="Pieter Bakker">
                    <h2>Pieter Bakker</h2>
                    <h3><strong>algemeen directeur</strong></h3><br>
                    <p>Pieter Bakker heeft meer dan 30 jaar ervaring in digitale strategie en bedrijfstransformatie.
                        Voordat hij in 2010 Circle Solutions oprichtte, was hij regionaal directeur bij een toonaangevend Europees
                        adviesbureau,
                        waar hij IT- en operationele projecten in tien landen leidde. Onder zijn leiding
                        heeft Circle Solutions oplossingen geleverd in meer dan 30 landen met meer dan 2000 projecten
                        in sectoren als financiën, energie, e-commerce en onderwijs.
                        Zijn visie is om Circle Solutions te vestigen als een betrouwbare wereldwijde partner die software ontwikkelt die
                        complexiteit vereenvoudigt en duurzame digitale groei stimuleert.</p>
                </div>
            </div>

            <div data-member="2">
                <img class="data-member-img" src="images/_WINDOWS/3-about us/william wisser.png" alt="William Wisser">
                <h2>William Wissen</h2>
                <h3><strong>hoofd technologie</strong></h3><br>
                <p>William Wissen heeft meer dan 15 jaar ervaring in softwarearchitectuur, cloud engineering
                    en integratie van bedrijfssystemen. Voordat hij in 2015 bij Circle Solutions kwam werken, gaf hij leiding aan technologische
                    innovatie
                    bij een groot IT-dienstverleningsbedrijf, waar hij toezicht hield op de ontwikkeling van schaalbare digitale platforms voor internationale
                    klanten.
                    Bij Circle Solutions stuurt William de technologiestrategie van het bedrijf aan, waarbij hij zich richt op prestaties,
                    beveiliging en duurzame innovatie. Zijn leiderschap zorgt ervoor dat elke oplossing is gebaseerd op
                    betrouwbare,
                    toekomstbestendige technologie die bedrijven in staat stelt om efficiënt te groeien.</p>
            </div>

            <div data-member="3">
                <img class="data-member-img" src="images/_WINDOWS/3-about us/jan van dijk.png" alt="Jan van Dijk">
                <h2>Jan van Dijk</h2>
                <h3><strong>commercieel directeur</strong></h3><br>
                <p>Jan van Dijk heeft meer dan 20 jaar ervaring in internationale bedrijfsontwikkeling en klantrelaties.
                    Voordat hij in 2011 bij Circle Solutions in dienst trad, beheerde hij strategische partnerschappen in
                    Europa en
                    Amerika voor een multinationaal adviesbureau, waar hij de marktaanwezigheid en omzetgroei uitbreidde. Bij Circle
                    Solutions
                    leidt Jan de wereldwijde commerciële strategie en bouwt hij langdurige relaties op met klanten en
                    partners.
                    Zijn doel is om de positie van Circle Solutions als een vertrouwd en kwaliteitsgericht merk op de
                    wereldwijde digitale markt te versterken.</p>
            </div>

            <div data-member="4">
                <img class="data-member-img" src="images/_WINDOWS/3-about us/sarah kleinn.png" alt="Sarah Kleinn">
                <h2>Sarah Kleinn</h2>
                <h3><strong>hoofd applicatiebeheer</strong></h3><br>
                <p>Sarah Klein heeft meer dan 20 jaar ervaring in softwareontwikkeling, UX-ontwerp en bedrijfsapplicatiebeheer.
                    Voordat ze in 2014 bij Circle Solutions kwam werken, gaf ze leiding aan de applicatiestrategie
                    bij
                    een toonaangevend Europees technologiebedrijf, waar ze hoogwaardige oplossingen leverde voor sectoren als financiën,
                    logistiek en detailhandel. Bij Circle Solutions houdt Sarah toezicht op het ontwerp en de levering van alle
                    klantapplicaties. Ze zorgt ervoor dat elk product intuïtief en
                    gebruiksvriendelijk is en aansluit bij de waarden van het bedrijf: eenvoud en kwaliteit.</p>
            </div>
        </div>

        <!-- Animation for Pop-up Profile View -->
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
        <!--END section - executive team -->


        
        <!--Global reach page-->
    <section>
    <div class="GlobalReachBox" id="global-reach">
        <h1 class="whitetext">ons wereldwijde bereik</h1>
        <div class="bluegrey">wereldwijd vertrouwd in meer dan 30 landen</div>
        <img class="worldmap" src="images/_WINDOWS/4-global presence/world map.png" alt="world map">
        <div class="whitebox">
            <div class="projects-text">
                    <h1>2000+ <b class="projects">projecten</b></h1> 
                    <h3 class="small-projects-text">succesvol geleverd</h3>
            </div>
            <div class="vertical-line"></div>
                <div class="brands-text">
                <h1>200+<b class="brands">merken</b></h1>
                <h3 class="small-brands-text">wereldwijd vertrouwd</h3>
            </div>
            <div class="vertical-line1"></div>
            <div class="countries-text">
                <h1>30+<b class="countries">landen</b></h1>
                <h3 class="small-countries-text">op onze bezorgkaart</h3>
            </div>
             <div class="vertical-line2"></div>
             <div class="country-flags">
                <div class="country-flags-track">
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
     </div>
     </section>

     <!--What We Build Page-->
        <div class="WhatWeBuildBox" id="what-we-build">
            <div class="WhatWeBuildBox-title">wat we bouwen</div>
            <div class="WhatWeBuildBox-subtitle">Ontdek hoe onze oplossingen de groei en digitale ontdekking van uw unieke bedrijf bevorderen.</div>
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

<!-- Amin -->

<div class="amin-global-cases-part">

    <h1 class="h1-amin-css">onze wereldwijde zaken</h1>
    <p class="Paragraph-for-our-global-cases-page">succesvolle projecten die we over de grenzen heen hebben gerealiseerd</p>



    <div class="container-global-cases-part">
        <div class="card-global-cases-part">
            <div class="icon-global-cases-part">
                <img src="images/_WINDOWS/6-case studies/fin-tech.png" alt="fin tech">
            </div>
            <div class="label-global-cases-part">fintech</div>
        </div>

        <div class="card-global-cases-part">
            <div class="icon-global-cases-part">
                <img src="images/_WINDOWS/6-case studies/e-commerce.png" alt="e-commerce">
            </div>
            <div class="label-global-cases-part">e-commerce</div>
        </div>

        <div class="card-global-cases-part">
            <div class="icon-global-cases-part">
                <img src="images/_WINDOWS/6-case studies/food-and-drinks.png" alt="food & drinks">
            </div>
            <div class="label-global-cases-part">eten & drinken</div>
        </div>

        <div class="card-global-cases-part">
            <div class="icon-global-cases-part">
                <img src="images/_WINDOWS/6-case studies/real-estate.png" alt="real estate">
            </div>
            <div class="label-global-cases-part">onroerend goed</div>
        </div>
    </div>
    <div class="explore-btn-global-cases-part">
        <a href="https://www.google.com/search?gs_ssp=eJzj4tTP1TcwMU02T1JgNGB0YPBiS8_PT89JBQBASQXT&q=google&oq=goo&gs_lcrp=EgZjaHJvbWUqDQgBEC4YxwEY0QMYgAQyBggAEEUYOTINCAEQLhjHARjRAxiABDIMCAIQIxgnGIAEGIoFMgYIAxBFGDwyBggEEEUYQTIGCAUQRRhBMgYIBhBFGEEyBggHEEUYPNIBCDI5MzFqMGo3qAIIsAIB8QXm6ydBWxvpePEF5usnQVsb6Xg&sourceid=chrome&ie=UTF-8"
            class="explore-more" target="_blank" rel="noopener noreferrer">
            meer ontdekken &gt;
        </a>
    </div>


    <h1 id="clients" class="h1-amin-css">
        wat onze klanten zeggen
    </h1>

     <p class="Paragraph-for-our-global-cases-page">
        succesverhalen van onze klanten over de hele wereld
    </p>

    <div class="section-global-cases-part">
        <button class="nav-btn prev-btn">❮</button>
        <div class="slider-global-cases-part">
            <div class="track-global-cases-part">
                <!-- 1 -->
                <div class="card2-global-cases-part">
                    <div class="flag-global-cases-part">
                        <img src="images/_WINDOWS/7-testimonials/2-china flag.png" alt="china flag">
                    </div>

                     <p class="text-global-cases-part Paragraph-for-our-global-cases-page"> 
                        "Circle Solutions biedt uitstekende, toegewijde talenten met een sterke werkethiek."
                     </p>

                    <div class="profile-pic-global-cases-part">
                        <img src="images/_WINDOWS/7-testimonials/1-Jinyi Guo.png" alt="client">
                    </div>

                     <h3>Jinyi Guo</h3>

                     <p class="role-global-cases-part Paragraph-for-our-global-cases-page">
                        CEO
                        </p>

                    <div class="company-info-global-cases-part">
                        <img src="images/_WINDOWS/7-testimonials/Luckin Coffee.png" alt="Luckin logo">
                        <span>Luckin Coffee, China</span>
                    </div>

                     <button class="explore-global-cases-part" onclick="window.location.href='www.google.com'">
                        verkennen
                    </button>

                </div>

                <!-- 2 -->
                <div class="card2-global-cases-part">
                    <div class="flag-global-cases-part">
                        <img src="images/_WINDOWS/7-testimonials/1-US flag.png" alt="usa flag">
                    </div>

                    <p class="text-global-cases-part Paragraph-for-our-global-cases-page">
                        "Altijd onze vereisten tot in detail begrijpen, hoogwaardige software ontwerpen en ontwikkelen."
                    </p>
                    <div class="profile-pic-global-cases-part">
                        <img src="images/_WINDOWS/7-testimonials/2-Andy Jassy.png" alt="client">
                    </div>
                    <h3>
                        Andy Jassy
                    </h3>
                    <p class="role-global-cases-part Paragraph-for-our-global-cases-page">
                        CEO
                    </p>
                    <div class="company-info-global-cases-part">
                        <img src="images/_WINDOWS/7-testimonials/Amazon.png" alt="amazon logo">
                        <span>
                            Amazon.com, USA
                        </span>
                    </div>
                    <button class="explore-global-cases-part" onclick="window.location.href='www.google.com'">
                        verkennen
                    </button>
                </div>
                <!-- test -->
                 <!-- y -->

                <!-- 3 -->
                <div class="card2-global-cases-part">
                    <div class="flag-global-cases-part">
                        <img src="images/_WINDOWS/7-testimonials/3-Germany flag.png" alt="germany flag">
                    </div>
                    <p class="text-global-cases-part Paragraph-for-our-global-cases-page">
                        "Deze plug-in werkt geweldig. Hij heeft een aantal zeer geavanceerde functies en is eenvoudig aan te passen."
                    </p>
                    <div class="profile-pic-global-cases-part">
                        <img src="images/_WINDOWS/7-testimonials/3-Oliver Zipse.png" alt="client">
                    </div>
                    <h3>
                        Oliver Zipse
                    </h3>
                    <p class="role-global-cases-part Paragraph-for-our-global-cases-page">
                        CEO
                    </p>
                    <div class="company-info-global-cases-part">
                        <img src="images/_WINDOWS/7-testimonials/BMW.png" alt="bmw logo">
                        <span>
                            BMW Group, Duitsland
                        </span>
                    </div>
                    <button class="explore-global-cases-part" onclick="window.location.href='www.google.com'">
                        verkennen
                    </button>
                </div>

                <!-- 4 -->
                <div class="card2-global-cases-part">
                    <div class="flag-global-cases-part">
                        <img src="images/_WINDOWS/7-testimonials/4-Netherlands flag.png" alt="netherlands flag">
                    </div>
                    <p class="text-global-cases-part Paragraph-for-our-global-cases-page">
                        "Geweldige samenwerking en uitstekende resultaten. Een echte aanrader!"
                    </p>
                    <div class="profile-pic-global-cases-part">
                        <img src="images/_WINDOWS/7-testimonials/4-Jasper van Dijk.jpeg" alt="client">
                    </div>
                    <h3>
                        Jasper van Dijk
                    </h3>
                    <p class="role-global-cases-part Paragraph-for-our-global-cases-page">
                        Softwareontwikkelaar
                    </p>
                    <div class="company-info-global-cases-part">
                        <img src="images/_WINDOWS/7-testimonials/philips.png" alt="philips logo">
                        <span>
                            Philips, Nederland
                        </span>
                    </div>
                    <button class="explore-global-cases-part" onclick="window.location.href='www.google.com'">
                        verkennen
                    </button>
                </div>

                <!-- 5 -->
                <div class="card2-global-cases-part">
                    <div class="flag-global-cases-part">
                        <img src="images/_WINDOWS/7-testimonials/france.flag.png" alt="france flag">
                    </div>
                    <p class="text-global-cases-part Paragraph-for-our-global-cases-page">
                        "Circle Solution overtrof onze verwachtingen met hun creativiteit en toewijding."
                    </p>
                    <div class="profile-pic-global-cases-part">
                        <img src="images/_WINDOWS/7-testimonials/IMG_5901.JPG" alt="client">
                    </div>
                    <h3>
                        Marie Dubois
                    </h3>
                    <p class="role-global-cases-part Paragraph-for-our-global-cases-page">
                        Productmanager
                    </p>
                    <div class="company-info-global-cases-part">
                        <img src="images/_WINDOWS/7-testimonials/loreal.png" alt="loreal logo">
                        <span>L'Oréal, Frankrijk</span>
                    </div>
                    <button class="explore-global-cases-part" onclick="window.location.href='www.google.com'">verkennen</button>
                </div>
            </div>
        </div>
        <button class="nav-btn next-btn">❯</button>
    </div>
</div>
<script>
window.addEventListener('DOMContentLoaded', () => {
    const track = document.querySelector('.track-global-cases-part');
    const nextBtn = document.querySelector('.next-btn');
    const prevBtn = document.querySelector('.prev-btn');
    const cards = document.querySelectorAll('.card2-global-cases-part');

    let index = 0;
    const visibleCards = 3;

    function updateSlider() {
        const cardWidth = cards[0].offsetWidth + 20;
        track.style.transform = `translateX(-${index * cardWidth}px)`;
    }

    nextBtn.addEventListener('click', () => {
        if (index < cards.length - visibleCards) {
            index++;
            updateSlider();
        }
    });

    prevBtn.addEventListener('click', () => {
        if (index > 0) {
            index--;
            updateSlider();
        }
    });

    window.addEventListener('resize', updateSlider);
});
</script>

<!-- CONTACT US PAGE -->
    <div class="contact-us-container" id="contact-us-page">
        <div class="contact-us-left-section">
            <!-- title, slogan -->
            <div class="contact-us-header-container">
                <div class="contact-header">contact ons</div>
                <div class="contact-slogan">verbind gewoon de punten.</div>
            </div>
            <!-- direct contact info -->
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
                <!-- downloadable whitepapers -->
                <div class="downloads">
                    <div class="download-bold-text">downloaden</div>
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
        <!-- contact form -->
        <div class="contact-us-right-section" id="contact-form">
            <form class="contact-form" action="<?php echo $_SERVER["PHP_SELF"] ?>#contact-form" method="POST">
                <label class="form-label" for="name">naam</label>
                <input class="form-input" type="text" name="name" id="name">
                <label class="form-label" for="company">bedrijfsnaam</label>
                <input class="form-input" type="text" name="company" id="company">
                <label class="form-label" for="email">e-mail</label>
                <input class="form-input" type="email" name="email" id="email">
                <label class="form-label-message" for="message">hoe kunnen we u helpen?</label>
                <textarea class="message" name="message" id="message" rows="5" cols="50"></textarea>
                <div class="attach-container">
                    <label class="attach-label" for="file">
                        <img class="attach-img" src="images/_WINDOWS/8-contact us/attach file.png">
                        <span>bestand bijvoegen</span>
                        <!-- tooltip -->
                        <div class="tooltip-container">
                            <img class="tooltip-img" src="images/_WINDOWS/8-contact us/information.png">
                            <div class="tooltip-text">Upload relevante documenten of afbeeldingen vanaf uw apparaat.</div>
                        </div>
                    </label>
                    <input type="file" id="file">
                </div>
                <!-- privacy submission -->
                <div class="privacy-submit">
                    <div class="privacy-policy-container">
                        <input type="checkbox" name="privacy" id="privacy">
                        <label class="form-label" for="privacy">Ik ga akkoord met het <a href="404page.html" class="privacy-link">privacybeleid</a></label>
                    </div>
                </div>
                <!-- submission button -->
                <input class="submit-img" type="image" src="images/_WINDOWS/8-contact us/connect.png">
            </form>
            <!-- form data validation -->
            <?php
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $output = validateInput();


                foreach($output as $error)
                {
                    echo $error;
                }
            }
            
            ?>
        </div>
    </div>

    <!-- FOOTER -->
    <div class="footer-container">
        <div class="footer-flex">
            <div class="footer-left-section">
                <div class="footer-company-title">circle solutions</div>
                <!-- companys social medias -->
                <div class="footer-socials">
                    <a href="https://www.instagram.com/" target="_blank">
                        <img class="footer-social-img" src="images/_WINDOWS/9-footer/instagram.png">
                    </a>
                    <a href="https://x.com/" target="_blank">
                        <img class="footer-social-img" src="images/_WINDOWS/9-footer/X.png">
                    </a>
                    <a href="https://www.facebook.com/" target="_blank">
                        <img class="footer-social-img" src="images/_WINDOWS/9-footer/facebook.png">
                    </a>
                </div>
            </div>
            <div class="footer-right-section">
                <!-- footer navbar -->
                <div class="footer-column">
                    <div class="footer-title">bedrijf</div>
                    <a class="footer-option" href="#about-us">over ons</a>
                    <a class="footer-option" href="#global-reach">wereldwijd bereik</a>
                    <a class="footer-option" href="#what-we-build">wat we bouwen</a>
                    <a class="footer-option" href="#contact-us-page">contact ons</a>
                </div>
                <div class="footer-column">
                    <div class="footer-title">legal</div>
                    <a class="footer-option" href="404page.html">privacybeleid</a>
                    <a class="footer-option" href="404page.html">gebruiksvoorwaarden</a>
                </div>
                <div class="footer-column">
                    <div class="footer-title">contact</div>
                    <div class="footer-noclick-option">www.circlesolutions.com</div>
                    <div class="footer-noclick-option">hi@circlesolutions.com</div>
                    <div class="footer-noclick-option">+316 12 34 56 78</div>
                    <!-- FAQ -->
                    <button data-faq-target="#faq" class="faq-button">FAQ</button>
                    <div class="faq" id="faq">
                        <div class="faq-header">
                            <div class="faq-title">FAQ</div>
                            <button data-faq-close-button class="close-faq">&times;</button>
                        </div>
                        <div class="faq-body">
                            <details>
                                <summary class="faq-question">Wat doet Circle Solutions?</summary>
                                <p class="faq-text">
                                    Circle Solutions ontwikkelt software op maat om organisaties te helpen efficiënter te werken. 
                                    Wij richten ons op eenvoud en functionaliteit — we leveren alleen wat echt waarde toevoegt.
                                </p>
                            </details>
                            <details>
                                <summary class="faq-question">Voor wie zijn uw oplossingen bedoeld?</summary>
                                <p class="faq-text">
                                    Wij bedienen bedrijven en instellingen die op zoek zijn naar betrouwbare, 
                                    gebruikersgerichte software die aansluit bij hun operationele doelstellingen en langetermijngroei ondersteunt.
                                </p>
                            </details>
                            <details>
                                <summary class="faq-question">Wat maakt Circle Solutions anders?</summary>
                                <p class="faq-text">
                                    We elimineren onnodige complexiteit. Onze software is duidelijk, 
                                    efficiënt en gebouwd rond de werkelijke behoeften van gebruikers, zodat technologie ten dienste staat van het bedrijf en 
                                    niet andersom.
                                </p>
                            </details>
                            <details>
                                <summary class="faq-question">Kan ik voorbeelden van uw werk zien?</summary>
                                <p class="faq-text">
                                    Ja. Op onze pagina ‘Wat we bouwen’ wordt software per sector en gebruikssituatie getoond, 
                                    waardoor u inzicht krijgt in de soorten projecten die we leveren.
                                </p>
                            </details>
                            <details>
                                <summary class="faq-question">Hoe kan ik contact opnemen met Circle Solutions?</summary>
                                <p class="faq-text">
                                    U kunt ons team bereiken via het contactformulier op onze website of rechtstreeks via 
                                    e-mail op hi@circlesolutions.com. Wij streven ernaar om alle vragen zo snel mogelijk te beantwoorden.
                                </p>
                            </details>
                        </div>
                    </div>
                    <div id="faqOverlay"></div>
                </div>
            </div>
        </div>
        <!-- bottom part of the footer -->
        <div class="footer-reserved-rights-container">
            <hr class="footer-divider">
            <div class="copyright">
                2025 circle solutions. Alle rechten voorbehouden.
                <img class="copyright-img" src="images/_WINDOWS/9-footer/copyright-white.png">
            </div>
        </div>
    </div>

    <!-- FAQ script -->
     <script>
        const openFaqButton = document.querySelectorAll('[data-faq-target]')
        const closeFaqButton = document.querySelectorAll('[data-faq-close-button]')
        const faqOverlay = document.getElementById('faqOverlay')

        openFaqButton.forEach(button => {
            button.addEventListener('click', () => {
                const faq = document.querySelector(button.dataset.faqTarget)
                openFaq(faq)
            })
        })

        faqOverlay.addEventListener('click', () => {
            const faqs = document.querySelectorAll('.faq.active')
            faqs.forEach(faq => {
                closeFaq(faq)
            })
        })

        closeFaqButton.forEach(button => {
            button.addEventListener('click', () => {
                const faq = button.closest('.faq')
                closeFaq(faq)
            })
        })

        function openFaq(faq) {
            if (faq == null) return
            faq.classList.add('active')
            faqOverlay.classList.add('active')
        }

        function closeFaq(faq) {
            if (faq == null) return
            faq.classList.remove('active')
            faqOverlay.classList.remove('active')
        }
     </script>
    
    <!-- cookie banner -->
        <?php if (!isset($_COOKIE[$cookie_name])): ?>
            <div class="cookie-banner">
                <h1>we gebruiken cookies</h1>
                <p>Onze website maakt gebruik van cookies om uw browse-ervaring te verbeteren.<br>
                    door verder te gaan, gaan wij ervan uit dat u toestemming geeft voor het gebruik van cookies zoals beschreven in onze <a href="404page.html">privacybeleid.</a></p>

                <form method="POST" style="display:inline;">
                    <button type="submit" name="accept_cookie" class="accept-btn">Alle cookies accepteren</button>
                    <button type="submit" name="reject_cookie" class="reject-btn">Alles afwijzen</button>
                </form>
            </div>
        <?php endif; ?>
        <!-- END of cookie banner -->
</body>
<!-- elo -->
 <!-- elo2 -->
</html>