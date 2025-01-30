<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <a href="#competences">Compétences</a>
        <a href="#projets">Projets</a>
        <a href="#contact">Contact</a>
        <img src="./assets/images/svg/lune.svg" alt="" class="icones" id="change-mode">
    </nav>
    <div class="accueil">
        <img src="./assets/images/svg/logo-mobile.svg " class="logo-desktop logo-mobile icones " alt="">
        <div class="accueil-contenu">
            <p class="text-lg">Bonjour, je suis</p>
            <div class="accueil-text">
                <h1>VELJKO LACES</h1>
                <p class="text-lg"><span class="bold">Ingénieur full-stack</span> basé à Paris, engagé dans la conception d’expériences numériques d’exception.</p>
            </div>
            <div class="accueil-btns">
                <button class="accueil-btn">
                    <img src="./assets/images/svg/whatsapp.svg" alt="" class="icones"> 
                    <p class="TEXT-base-boutton">Whatsapp</p>
                </button>
                <button class="accueil-btn">
                    <img src="./assets/images/svg/linkedin.svg" class="icones" alt="">
                    <p class="TEXT-base-boutton">Linkedin</p>
                </button>
                <button class="accueil-btn">
                    <img src="./assets/images/svg/mail.svg" alt="" class="icones">
                    <p class="TEXT-base-boutton">veljkolaces123@gmail.com</p>
                </button>
                <button class="accueil-btn">
                    <img src="./assets/images/svg/github.svg" alt="" class="icones">
                    <p class="TEXT-base-boutton">Github</p>
                </button>
            </div> 
        </div>
    </div>
    <div class="competences" id="competences">
        <h2>Compétences</h2>
            <div class="competences-contenu">
                <div class="competences-categorie">
                    <h3>Frontend</h3>
                    <div class="sous-competences">
                        <div class="competence-et-logo">
                            <img src="./assets/images/svg/html.svg" alt="" class="icones">
                            <p class="text-lg">HTML</p>
                        </div>
                        <div class="competence-et-logo">
                            <img src="./assets/images/svg/css.svg" alt=""  class="icones">
                            <p class="text-lg">CSS</p>
                        </div>
                        <div class="competence-et-logo">
                            <img src="./assets/images/svg/javascript.svg" alt=""  class="icones">
                            <p class="text-lg">JavaScript</p>
                        </div>
                    </div>
                </div>
                <div class="competences-categorie">
                    <h3>Backend</h3>
                    <div class="sous-competences">
                        <div class="competence-et-logo">
                            <img src="./assets/images/svg/php.svg" alt=""  class="icones">
                            <p class="text-lg">PHP</p>
                        </div>
                        <div class="competence-et-logo">
                            <img src="./assets/images/svg/mysql.svg" alt=""  class="icones">
                            <p class="text-lg">MySql</p>
                        </div>
                        <div class="competence-et-logo">
                            <img src="./assets/images/svg/symfony.svg" alt=""  class="icones">
                            <p class="text-lg">Symfony</p>
                        </div>
                    </div>
                </div>
                <div class="competences-categorie">
                    <h3>Design</h3>
                    <div class="sous-competences">
                        <div class="competence-et-logo">
                            <img src="./assets/images/svg/figma.svg" alt=""  class="icones">
                            <p class="text-lg">Figma</p>
                        </div>
                        <div class="competence-et-logo">
                            <img src="./assets/images/svg/photoshop.svg" alt=""  class="icones">
                            <p class="text-lg">Photoshop</p>
                        </div>
                        <div class="competence-et-logo">
                            <img src="./assets/images/svg/illustrator.svg" alt=""  class="icones">
                            <p class="text-lg">Illustrator</p>
                        </div>
                        <div class="competence-et-logo">
                            <img src="./assets/images/svg/indesign.svg" alt=""  class="icones">
                            <p class="text-lg">InDesign</p>
                        </div>
                    </div>
                </div>
                <div class="competences-categorie">
                    <h3>Autre</h3>
                    <div class="sous-competences">
                        <div class="competence-et-logo">
                            <img src="./assets/images/svg/github-black.svg" alt=""  class="icones">
                            <p class="text-lg">Git</p>
                        </div>
                        <div class="competence-et-logo">
                            <img src="./assets/images/svg/bruno.svg" alt=""  class="icones">
                            <p class="text-lg">Bruno</p>
                        </div>
                        <div class="competence-et-logo">
                            <img src="./assets/images/svg/netlifly.svg" alt=""  class="icones">
                            <p class="text-lg">Netlifly</p>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="projets" id="projets">
        <h2>Projets</h2>
        <div class="cards">
            <div class="card">
                <div class="content">
                    <div class="card-title-redirection">
                        <h3>Title</h3>
                        <a href=""><img src="./assets/images/svg/arrow-top-right-on-square-20-solid.svg" alt="" class="icones"></a>
                    </div>
                    <p class="text-base description-projet">Budgeto is an app that help you count your expenses.</p>
                </div>
                <div class="card-skills">
                    <div class="pillule">HTML</div>
                    <div class="pillule">CSS</div>
                    <div class="pillule">Netlifly</div>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <div class="card-title-redirection">
                        <h3>Title</h3>
                        <a href=""><img src="./assets/images/svg/arrow-top-right-on-square-20-solid.svg" alt="" class="icones"></a>
                    </div>
                    <p class="text-base description-projet">Budgeto is an app that help you count your expenses.</p>
                </div>
                <div class="card-skills">
                    <div class="pillule">HTML</div>
                    <div class="pillule">CSS</div>
                    <div class="pillule">Netlifly</div>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <div class="card-title-redirection">
                        <h3>Title</h3>
                        <a href=""><img src="./assets/images/svg/arrow-top-right-on-square-20-solid.svg" alt="" class="icones"></a>
                    </div>
                    <p class="text-base description-projet">Budgeto is an app that help you count your expenses.</p>
                </div>
                <div class="card-skills">
                    <div class="pillule">HTML</div>
                    <div class="pillule">CSS</div>
                    <div class="pillule">Netlifly</div>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <div class="card-title-redirection">
                        <h3>Title</h3>
                        <a href=""><img src="./assets/images/svg/arrow-top-right-on-square-20-solid.svg" alt="" class="icones"></a>
                    </div>
                    <p class="text-base description-projet">Budgeto is an app that help you count your expenses.</p>
                </div>
                <div class="card-skills">
                    <div class="pillule">HTML</div>
                    <div class="pillule">CSS</div>
                    <div class="pillule">Netlifly</div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-logo">
        <img class="logo-desktop icones" src="./assets/images/svg/logo-mobile.svg" alt="">
        <div class="contact" id="contact">
            <div class="contact-title-text">
                <h2>Contact</h2>
                <p class="text-lg">N'hésitez pas à me contacter par email.</p>
            </div>
            <div class="formulaire-de-contact">
                <div class="champ">
                    <div class="champ-label">
                        <label for="Nom" class="text-base">Nom</label>
                        <input type="text" placeholder="Entrez votre nom">
                    </div>
                    <div class="champ-label">
                        <label for="Email" class="text-base">Email</label>
                        <input type="text" placeholder="Entrez votre email">
                    </div>
                    <div class="champ-label">
                        <label for="Message" class="text-base">Message</label>
                        <input type="text" placeholder="Rédigez votre message">
                    </div>
                </div>
                <button class="TEXT-base-boutton btn-desktop">Envoyer</button>
                <div class="accueil-btns">
                    <button class="accueil-btn">
                        <img src="./assets/images/svg/whatsapp.svg" alt="" class="icones"> 
                        <p class="TEXT-base-boutton">Whatsapp</p>
                    </button>
                    <button class="accueil-btn">
                        <img src="./assets/images/svg/linkedin.svg" class="icones" alt="" class="icones">
                        <p class="TEXT-base-boutton">Linkedin</p>
                    </button>
                    <button class="accueil-btn">
                        <img src="./assets/images/svg/mail.svg" alt="" class="icones">
                        <p class="TEXT-base-boutton">veljkolaces123@gmail.com</p>
                    </button>
                    <button class="accueil-btn">
                        <img src="./assets/images/svg/github.svg" alt="" class="icones">
                        <p class="TEXT-base-boutton">Github</p>
                    </button>
                </div> 
            </div>
        </div>
    </div>
    <footer>
        <p class="text-base">Conçu et réalisé avec passion par Veljko Laces.</p>
        <p class="text-base">©Copyright 2025 - Veljko Laces</p>
    </footer>
    <script src="./assets/js/app.js"></script>
</body>
</html>