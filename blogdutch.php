<?php
session_start(); // Start or resume the session

// Default: dark mode on first visit
if (!isset($_SESSION['mode'])) {
    $_SESSION['mode'] = 'light';
}

// Handle toggle POST form
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['toggle_mode'])) {
    $_SESSION['mode'] = ($_SESSION['mode'] === 'light') ? 'dark' : 'light';
    header("Location: " . strtok($_SERVER['REQUEST_URI'], '#'));
exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circle Solutions Blog</title>
    <link rel="stylesheet" href="blog.css">
    <link rel="stylesheet" href="<?php echo ($_SESSION['mode'] === 'light') ? 'blog.css' : 'blogdarkmode.css'; ?>">
</head>
<body>
    <div class="navbar">
            <img class="logonav" src="images\logo\logo\circle solutions_logo_01(bluetext_blank background).png" alt="logo">
            <a href="circlesolutionsdutchpage.php">start</a>
            <a href="circlesolutionsdutchpage.php">over ons</a>
            <a href="circlesolutionsdutchpage.php">wat we bouwen</a>
            <a href="circlesolutionsdutchpage.php">contact ons</a>
            <a href="blogdutch.html">blog</a>
            <a href="blog.php"> <img class="language" src="images\_WINDOWS\1-homepage\language select icon.png" alt="languageselect">NL</a>
            <form method="POST" style="display:inline;">
                <button type="submit" name="toggle_mode" style="background:none; border:none; padding:0; cursor:pointer;">
                   <img class="theme-button" src="<?php echo ($_SESSION['mode'] === 'light') 
                    ? 'images/_WINDOWS/1-homepage/sun.png' 
                    : 'images/_WINDOWS/1-homepage/moon.png'; ?>" alt="ux and ui">
                </button>
            </form>
    </div>
    <div class="textonpage">
        <h3>Lees meer over IT-nieuws met Circle Solutions:</h3>
        <p>Ben je meer geïnteresseerd in de interne werking van IT? 
        Wat gebeurt er in de wereld? Goed nieuws! Met onze nieuwe en verbeterde blog kun je nu meer te weten komen! </p>
        <h3>Onze meest recente blogs:</h3>
    </div>
    <div class="mainblogpost">
        <div class="textmainblog">
            <h3><b>De opkomst van edge computing: wat IT-professionals moeten weten</b></h3>
            <p>Ontdek hoe edge computing gegevensverwerking transformeert, latentie vermindert en realtime toepassingen mogelijk maakt.</p>
            <a href="404page.html"><img class="more" src="images\_WINDOWS\11-blog\more.png" alt="more"></a>
        </div>
        <div class="image">
            <img class src="images\_WINDOWS\11-blog\recentblogpost.png" alt="blogpost">
        </div>
    </div>
    <div class="blogcards">
        <div class="card">
            <h4>Beveiliging van de softwaretoeleveringsketen: strategieën voor moderne IT-teams</h4>
            <p>Recente opvallende inbreuken hebben kwetsbaarheden in de softwaretoeleveringsketen blootgelegd. IT-teams moeten afhankelijkheden van derden nu als kritieke veiligheidsrisico's beschouwen.
            De softwaretoeleveringsketen begrijpen Deze omvat alles van open-sourcebibliotheken tot CI/CD-pijplijnen en implementatieomgevingen.</p>
            <a href="404page.html"><img class="more" src="images\_WINDOWS\11-blog\more.png" alt="more"></a>
        </div>
        <div class="card">
            <h4>AI in IT-operaties: van monitoring tot autonome herstelmaatregelen</h4>
            <p>Kunstmatige intelligentie zorgt voor een revolutie in IT-activiteiten en maakt voorspellende analyses, detectie van afwijkingen en zelfs zelfherstellende systemen mogelijk.
            Wat is AIOps? AIOps combineert big data en machine learning om IT-activiteiten te automatiseren en te verbeteren.</p>
            <a href="404page.html"><img class="more" src="images\_WINDOWS\11-blog\more.png" alt="more"></a>
        </div>
        <div class="card">
            <h4>Kubernetes Beyond Basics: geavanceerde patronen voor schaalbaarheid binnen ondernemingen</h4>
            <p>Kubernetes is de de facto standaard geworden voor containerorkestratie. 
            Maar om het op te schalen in bedrijfsomgevingen zijn geavanceerde strategieën nodig.</p>
            <a href="404page.html"><img class="more" src="images\_WINDOWS\11-blog\more.png" alt="more"></a>
        </div>
        <div class="card">
            <h4>De evolutie van DevSecOps: beveiliging integreren in elke fase</h4>
            <p>DevSecOps integreert beveiliging in de DevOps-pijplijn, waardoor kwetsbaarheden vroegtijdig en vaak worden opgespoord.
            Waarom DevSecOps belangrijk is Traditionele beveiligingsmodellen zijn te traag voor moderne ontwikkelingscycli. DevSecOps verschuift beveiliging naar links.</p>
            <a href="404page.html"><img class="more" src="images\_WINDOWS\11-blog\more.png" alt="more"></a>
        </div>
        <div class="card">
            <h4>Cloudkostenoptimalisatie: strategieën voor een duurzame IT-infrastructuur</h4>
            <p>Zonder goed beheer kunnen cloudkosten uit de hand lopen. IT-teams moeten een evenwicht vinden tussen prestaties en budgetbeperkingen.</p>
            <a href="404page.html"><img class="more" src="images\_WINDOWS\11-blog\more.png" alt="more"></a>
        </div>
        <div class="card">
            <h4>Quantumcomputers en IT: voorbereiden op de volgende paradigmaverschuiving</h4>
            <p>Quantumcomputers beloven problemen op te lossen die klassieke computers niet aankunnen. IT-professionals moeten de implicaties hiervan begrijpen.</p>
            <a href="404page.html"><img class="more" src="images\_WINDOWS\11-blog\more.png" alt="more"></a>
        </div>
        <a href="404page.html"><img class="learnmore" src="images\_WINDOWS\11-blog\learnmore.png" alt="learnmore"></a>
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
</body>
</html>