<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="assets/img/linomedia-logo.png" type="image/x-icon">

        <!--=============== REMIX ICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>Willkommen bei Linomedia x Startseite</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="index.html" class="nav__logo">
                    Linomedia
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">Startseite</a>
                        </li>
                        <li class="nav__item">
                            <a href="#about" class="nav__link">Über uns</a>
                        </li>
                        <li class="nav__item">
                            <a href="#products" class="nav__link">Pixel-Farm</a>
                        </li>
                        <li class="nav__item">
                            <a href="#faqs" class="nav__link">Faq</a>
                        </li>
                        <li class="nav__item">
                            <a href="#contact" class="nav__link">Kontakt</a>
                        </li>
                    </ul>

                    <div class="nav__close" id="nav-close">
                        <i class="ri-close-line"></i>
                    </div>
                </div>

                <div class="nav__btns">
                    <div class="nav__toggle" id="nav-toggle">
                        <i class="ri-menu-line"></i>
                    </div>
                </div>
            </nav>
        </header>

        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home" id="home">
                <div class="home__container container grid">

                    <div class="home__data">
                        <h1 class="home__title">
                            Willkommen bei <br> Linomedia
                        </h1>
                        <p class="home__description">
                            Spiele das neuste Spiel von Linomedia: "Pixel-Farm"
                        </p>
                        <a href="https://play.google.com/store/apps/details?id=com.Benolino.PixelFarm" class="button button--flex">
                            Herunterladen <i class="ri-arrow-right-down-line button__icon"></i>
                        </a>
                    </div>

                    <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/khkXK0ErDJc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    <div class="home__social">
                        <span class="home__social-follow">Folge uns</span>

                        <div class="home__social-links">
                            <a href="https://www.youtube.com/benolino" class="footer__social-link">
                                <i class="ri-youtube-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/beno.lino" class="footer__social-link">
                                <i class="ri-instagram-line"></i>
                            </a>
                            <a href="https://play.google.com/store/apps/details?id=com.Benolino.PixelFarm" class="footer__social-link">
                                <i class="ri-google-play-fill"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section container" id="about">
                <div class="about__container grid">
                    <img src="assets/img/linomedia-logo.png" alt="" class="about__img">

                    <div class="about__data">
                        <h2 class="section__title about__title">
                            Was ist Linomedia & <br> und was ist Pixel-Farm?
                        </h2>

                        <p class="about__description">
                            Das ziel von Linomedia ist es, den Nutzern eine lustige und Retro artige Spiel Atmosphäre zu bieten.
                            <br>
                            <br>
                            Pixel-Farm:
                            <br>
                            Willkommen bei Pixel-Farm. Ernte Pflanzen und Produziere leckere Gerichte und Produkte.
                            <br>
                            <br>
                            Produziere köstlichen Wein, leckere Eis-Creme oder erfrischende Salat-Bowls.
                            Erkunde verschiedenste Produktionsmaschinen und deren Produkte. Verkaufe anschließen deine Produkte und baue dir dein Farm-Imperium auf.
                        </p>

                        <a href="https://play.google.com/store/apps/details?id=com.Benolino.PixelFarm" class="button--link button--flex">
                            Herunterladen <i class="ri-arrow-right-down-line button__icon"></i>
                        </a>
                    </div>
                </div>
            </section>

            <!--==================== PRODUCTS ====================-->
            <section class="product section container" id="products">
                <h2 class="section__title-center">
                    Pixel-Farm
                </h2>

                <p class="product__description">
                    Spiele das neue Spiel von Linomedia auf deinem Handy: "Pixel-Farm". Fragen? Wir helfen dir gerne weiter!
                    <a href="https://play.google.com/store/apps/details?id=com.Benolino.PixelFarm" class="button--link button--flex">
                        Herunterladen <i class="ri-arrow-right-down-line button__icon"></i>
                    </a>
                </p>

                <div class="product__container grid">
                    <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/khkXK0ErDJc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </section>

            <!--==================== QUESTIONS ====================-->
            <section class="questions section" id="faqs">
                <h2 class="section__title-center questions__title container">
                    Fragen? <br> Antworten.
                </h2>

                <div class="questions__container container grid">
                    <div class="questions__group">
                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    Was ist Linomedia?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Linomedia programmiert und verwirklicht Ideen & Apps.
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    Wem gehört Linomedia
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Linomedia ist im Besitz von Benolino.
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    Sind die Angebote von Linomedia offline?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Nicht immer! Bei jedem Angebot wird ausdrücklich gesagt, ob eine Internet verbindung notwendig ist.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="questions__group">
                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    Was kommt von Linomedia?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Pixel-Farm.
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    Ich habe weitere Fragen, kann ich diese irgendwo beantworten?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Ja! Es gibt einen Hilfecenter, welchen du unter "support.Linomedia.de" erreichen kannst.
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    Was ist Pixel-Farm?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Produziere köstlichen Wein, leckere Eis-Creme oder erfrischende Salat-Bowls. Erkunde verschiedenste Produktionsmaschinen und deren Produkte. Verkaufe anschließen deine Produkte und baue dir dein Farm-Imperium auf.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== CONTACT ====================-->
            <section class="contact section container" id="contact">                
                <div class="contact__container grid">
                    <div class="contact__box">
                        <h2 class="section__title">
                            Du hast eine Frage? <br> Schreibe uns per Email
                        </h2>

                        <div class="contact__data">
                            <div class="contact__information">
                                <h3 class="contact__subtitle">Schreibe uns eine Email</h3>
                                <span class="contact__description">
                                    <i class="ri-mail-line contact__icon"></i>
                                    lotogowebb@gmail.com
                                </span>
                            </div>
                        </div>
                    </div>

                    <?php
                    if(isset($_POST["submit"]))
                    {
                        mail("lotogowebb@gmail.com", "Kontaktformular", 'Betreff: '.$_POST["text"].' Email: '.$_POST["email"].' Nachricht: '.$_POST["message"]);
                        ?>
                        <h1>Nachricht abgesendet</h1>
                        <?php
                    }
                    ?>

                    <form action="index.php" class="contact__form">
                        <div class="contact__inputs">
                            <div class="contact__content">
                                <input type="email" name="email" placeholder=" " class="contact__input">
                                <label for="" class="contact__label">Email</label>
                            </div>

                            <div class="contact__content">
                                <input type="text" name="text" placeholder=" " class="contact__input">
                                <label for="" class="contact__label">Betreff</label>
                            </div>

                            <div class="contact__content contact__area">
                                <textarea name="message" name="message" placeholder=" " class="contact__input"></textarea>                              
                                <label for="" class="contact__label">Nachricht</label>
                            </div>
                        </div>

                        <button type="submit" name="submit" class="button button--flex">
                            Nachricht senden
                            <i class="ri-arrow-right-up-line button__icon"></i>
                        </button>
                    </form>
                </div>
            </section>
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content">
                    <a href="#" class="footer__logo">
                        <i class="ri-leaf-line footer__logo-icon"></i> Linomedia
                    </a>

                    <h3 class="footer__title">
                        Linomedia, willkommen zuhause wo der spielspaß beginnt
                    </h3>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Linomedia</h3>

                    <ul class="footer__data">
                        <a href="Impressum.html"><li class="footer__information">Impressum</li></a>
                        <a href="Datenschutz.html"><li class="footer__information">Datenschutzerklärung</li></a>
                        <a href="https://storyset.com/"><li class="footer__information">Illustration by Storyset</li></a>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Social Media</h3>

                    <ul class="footer__data">
                        <div class="footer__social">
                            <a href="https://www.youtube.com/benolino" class="footer__social-link">
                                <i class="ri-youtube-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/beno.lino" class="footer__social-link">
                                <i class="ri-instagram-line"></i>
                            </a>
                            <a href="https://play.google.com/store/apps/details?id=com.Benolino.PixelFarm" class="footer__social-link">
                                <i class="ri-google-play-fill"></i>
                            </a>
                        </div>
                    </ul>
                </div>
            </div>

            <p class="footer__copy">&#169; Design by Bedimcode. Linomedia 2022, All rigths reserved</p>
        </footer>
        
        <!--=============== SCROLL UP ===============-->
        <a href="#" class="scrollup" id="scroll-up"> 
            <i class="ri-arrow-up-fill scrollup__icon"></i>
        </a>

        <!--=============== SCROLL REVEAL ===============-->
        <script src="assets/js/scrollreveal.min.js"></script>
        
        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
    </body>
</html>
