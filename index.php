<?php
require_once './database/database.php';

session_start();

$db = new Database();
$db->initDatabase();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Portfolio LACES Veljko">
    <title>Développeur Web Full-Stack à Paris | Alternant & Stagiaire en Développement web</title>
    <meta name="description" content="Découvrez mon portfolio de développeur web Full-Stack basé à Paris. Disponible pour une alternance ou un stage en développement web.">
    <meta name="author" content="Veljko LACES">
    <meta name="keywords" content="portfolio developpeur web, developpeur web alternance, developpeur web stage, developpeur web etudiant paris,developpeur web paris, veljko laces">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#000000">
    <link rel="icon" type="image/png" href="./assets/images/svg/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="./assets/images/svg/favicon.svg" />
    <link rel="shortcut icon" href="./assets/images/svg/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/svg/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="Veljko Laces" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="manifest" href="/manifest.json" />
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
        <img src="./assets/images/svg/lune.svg" alt="Icône de lune pour mode sombre" class="icones" id="change-mode">
    </nav>
    <div class="accueil">
        <img src="./assets/images/svg/logo-mobile.svg " class="logo-desktop logo-mobile icones " alt="Logo affichant les initiales V et L qui sont les miennes">
        <div class="accueil-contenu">
            <p class="text-lg">Bonjour, je suis</p>
            <div class="accueil-text">
                <h1>VELJKO LACES</h1>
                <p class="text-lg"><span class="bold">Ingénieur full-stack</span> basé à Paris, engagé dans la conception d’expériences numériques d’exception.</p>
            </div>
            <div class="accueil-btns">
                <button class="accueil-btn">
                    <img src="./assets/images/svg/whatsapp.svg" alt="Icône de WhatsApp, application de messagerie instantanée" class="icones">
                    <a href="https://wa.me/33769117472" target="_blank" class="TEXT-base-boutton a-accueil-contact">Whatsapp</a>
                </button>
                <button class="accueil-btn">
                    <img src="./assets/images/svg/linkedin.svg" class="icones" alt="Icône LinkedIn, réseau social professionnel">
                    <a href="https://www.linkedin.com/in/veljko-laces-557003351/" class="TEXT-base-boutton a-accueil-contact" target="_blank">Linkedin</a>
                </button>
                <button class="accueil-btn">
                    <img src="./assets/images/svg/mail.svg" alt="Icône d'email, symbole de messagerie électronique" class="icones">
                    <a href="mailto:veljkolaces123@gmail.com" target="_blank" class="TEXT-base-boutton a-accueil-contact">veljkolaces123@gmail.com</a>
                </button>
                <button class="accueil-btn">
                    <img src="./assets/images/svg/github.svg" alt="Icône GitHub, plateforme de développement logiciel et hébergement de code" class="icones">
                    <a href="https://github.com/veljko-Laces" target="_blank" class="TEXT-base-boutton a-accueil-contact">Github</a>
                </button>
                <button class="accueil-btn">
                    <img src="./assets/images/svg/cv.svg" download="./asset/fichier/cv-veljko-laces-developpeur-web" alt="Icône CV, lien vers le curriculum vita" class="icones">
                    <a href="./assets/fichier/cv-veljko-laces-developpeur-web.pdf" download="cv-veljko-laces-developpeur-web" class="TEXT-base-boutton a-accueil-contact">Curriculum Vitae</a>
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
                        <img src="./assets/images/svg/html.svg" alt="Icône HTML, langage de balisage pour la structure des pages web" class="icones">
                        <p class="text-lg">HTML</p>
                    </div>
                    <div class="competence-et-logo">
                        <img src="./assets/images/svg/css.svg" alt="Icône CSS, langage de style pour la mise en forme des pages web" class="icones">
                        <p class="text-lg">CSS</p>
                    </div>
                    <div class="competence-et-logo">
                        <img src="./assets/images/svg/javascript.svg" alt="Icône JavaScript, langage de programmation pour le développement web interactif" class="icones">
                        <p class="text-lg">JavaScript</p>
                    </div>
                </div>
            </div>
            <div class="competences-categorie">
                <h3>Backend</h3>
                <div class="sous-competences">
                    <div class="competence-et-logo">
                        <img src="./assets/images/svg/php.svg" alt="Icône PHP, langage de programmation pour le développement web" class="icones">
                        <p class="text-lg">PHP</p>
                    </div>
                    <div class="competence-et-logo">
                        <img src="./assets/images/svg/mysql.svg" alt="Icône MySQL, système de gestion de base de données relationnelle" class="icones">
                        <p class="text-lg">MySql</p>
                    </div>
                    <div class="competence-et-logo">
                        <img src="./assets/images/svg/symfony.svg" alt="Icône Symfony, framework PHP pour le développement d'applications web" class="icones">
                        <p class="text-lg">Symfony</p>
                    </div>
                </div>
            </div>
            <div class="competences-categorie">
                <h3>Design</h3>
                <div class="sous-competences">
                    <div class="competence-et-logo">
                        <img src="./assets/images/svg/figma.svg" alt="Icône Figma, outil de design collaboratif pour la création d'interfaces" class="icones">
                        <p class="text-lg">Figma</p>
                    </div>
                    <div class="competence-et-logo">
                        <img src="./assets/images/svg/photoshop.svg" alt="Icône Photoshop, logiciel de retouche photo et de création graphique" class="icones">
                        <p class="text-lg">Photoshop</p>
                    </div>
                    <div class="competence-et-logo">
                        <img src="./assets/images/svg/illustrator.svg" alt="Icône Illustrator, logiciel de création graphique vectorielle" class="icones">
                        <p class="text-lg">Illustrator</p>
                    </div>
                    <div class="competence-et-logo">
                        <img src="./assets/images/svg/indesign.svg" alt="Icône InDesign, logiciel de création de mises en page et de design graphique" class="icones">
                        <p class="text-lg">InDesign</p>
                    </div>
                </div>
            </div>
            <div class="competences-categorie">
                <h3>Autre</h3>
                <div class="sous-competences">
                    <div class="competence-et-logo">
                        <img src="./assets/images/svg/github-black.svg" alt="Icône GitHub, plateforme de développement logiciel et hébergement de code" class="icones">
                        <p class="text-lg">Github</p>
                    </div>
                    <div class="competence-et-logo">
                        <img src="./assets/images/svg/bruno.svg" alt="Icône Bruno, " class="icones">
                        <p class="text-lg">Bruno</p>
                    </div>
                    <div class="competence-et-logo">
                        <img src="./assets/images/svg/netlifly.svg" alt="Icône Netlify, plateforme de déploiement et d'hébergement web" class="icones">
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
                        <h3>F8 - TRIBUTO</h3>
                        <a href="https://ferrari-f8-tributo.netlify.app/" target="_blank"><img src="./assets/images/svg/arrow-top-right-on-square-20-solid.svg" alt="Icône flèche vers le haut à droite, lien vers le projet" class="icones"></a>
                    </div>
                    <p class="text-base description-projet">F8 - TRIBUTO est un site vitrine dédié à la Ferrari F8 Tributo, une supercar emblématique qui allie puissance, design et innovation. </p>
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
                        <h3>TODO REST API</h3>
                        <a href="https://github.com/Veljko-Laces/todo-rest-api" target="_blank"><img src="./assets/images/svg/arrow-top-right-on-square-20-solid.svg" alt="Icône flèche vers le haut à droite, lien vers le projet" class="icones"></a>
                    </div>
                    <p class="text-base description-projet">Conception et développement d’une API REST de gestion de tâches avec PHP et MySQL, pour simplifier l’organisation et le suivi des tâches des
                    utilisateurs.</p>
                </div>
                <div class="card-skills">
                    <div class="pillule">PHP</div>
                    <div class="pillule">MySQL</div>
                    <div class="pillule">BRUNO</div>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <div class="card-title-redirection">
                        <h3>BookReview - Plateforme de Critiques de Livres</h3>
                        <a href=""><img src="./assets/images/svg/arrow-top-right-on-square-20-solid.svg" alt="Icône flèche vers le haut à droite, lien vers le projet" class="icones"></a>
                    </div>
                    <p class="text-base description-projet">BookReview est un site web où les utilisateurs peuvent découvrir, noter et commenter des livres.</p>
                </div>
                <div class="card-skills">
                    <div class="pillule">HTML</div>
                    <div class="pillule">CSS</div>
                    <div class="pillule">JAVASCRIPT</div>
                    <div class="pillule">PHP</div>
                    <div class="pillule">MySQL</div>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <div class="card-title-redirection">
                        <h3>FoodOrder - Site de Commande de Repas en Ligne</h3>
                        <a href=""><img src="./assets/images/svg/arrow-top-right-on-square-20-solid.svg" alt="Icône flèche vers le haut à droite, lien vers le projet" class="icones"></a>
                    </div>
                    <p class="text-base description-projet">FoodOrder est une plateforme qui permet aux restaurants de proposer leurs menus en ligne et aux clients de commander des repas à emporter ou en livraison. </p>
                </div>
                <div class="card-skills">
                <div class="pillule">HTML</div>
                    <div class="pillule">CSS</div>
                    <div class="pillule">JAVASCRIPT</div>
                    <div class="pillule">PHP</div>
                    <div class="pillule">MySQL</div>
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
                <div id="formulaire-envoye"></div>  
            </div>
            <div class="formulaire-de-contact">
                <form action="./admin/formHandler.php" method="post">
                    <div class="champ">
                        <div class="champ-label">
                            <label for="add-name" class="text-base">Nom</label>
                            <input type="text" placeholder="Entrez votre nom" name="add-name" id="add-name">
                            <div id="nom-erreur"></div>
                        </div>
                        <div class="champ-label">
                            <label for="add-email" class="text-base">Email</label>
                            <input type="email" placeholder="Entrez votre email" name="add-email" id="add-email">
                            <div id="email-erreur"></div>
                        </div>
                        <div class="champ-label">
                            <label for="add-message" class="text-base">Message</label>
                            <input type="text" placeholder="Rédigez votre message" name="add-message" id="add-message">
                            <div id="message-erreur"></div>
                        </div>
                        <button type="submit" class="TEXT-base-boutton btn-desktop" name="send-form" id="send-form">Envoyer</button>
                    </div>
                </form>
                <div class="accueil-btns">
                    <button class="accueil-btn">
                        <img src="./assets/images/svg/whatsapp.svg" alt="Icône de WhatsApp, application de messagerie instantanée" class="icones">
                        <a href="https://wa.me/33769117472" target="_blank" class="TEXT-base-boutton a-accueil-contact">Whatsapp</a>
                    </button>
                    <button class="accueil-btn">
                        <img src="./assets/images/svg/linkedin.svg" class="icones" alt="Icône LinkedIn, réseau social professionnel">
                        <a href="https://www.linkedin.com/in/veljko-laces-557003351/" class="TEXT-base-boutton a-accueil-contact" target="_blank">Linkedin</a>
                    </button>
                    <button class="accueil-btn">
                        <img src="./assets/images/svg/mail.svg" alt="Icône d'email, symbole de messagerie électronique" class="icones">
                        <a href="mailto:veljkolaces123@gmail.com" class="TEXT-base-boutton a-accueil-contact" target="_blank">veljkolaces123@gmail.com</a>
                    </button>
                    <button class="accueil-btn">
                        <img src="./assets/images/svg/github.svg" alt="Icône GitHub, plateforme de développement logiciel et hébergement de code" class="icones">
                        <a href="https://github.com/veljko-Laces" class="TEXT-base-boutton a-accueil-contact" target="_blank">Github</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p class="text-base">Conçu et réalisé avec passion par Veljko Laces.</p>
        <a href="./mentions-legales" class="mentions-legales">Mentions légales</a>
        <p class="text-base">Copyright 2025 - Veljko Laces</p>
    </footer>
    <script src="./assets/js/app.js"></script>
    <script>
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
                navigator.serviceWorker.register('/sw.js')
                    .then(registration => {
                        console.log('Service Worker enregistré avec succès:', registration);
                    })
                    .catch(error => {
                        console.log('Erreur lors de l\'enregistrement du Service Worker:', error);
                    });
            });
        }
    </script>
</body>

</html>