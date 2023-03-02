<?php
    include 'includes/init.inc.php';
    use Controleurs\MsgControleur;
    $envoi = new MsgControleur();
    $envoi->ajouterMsg();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <title>Portfolio - Patryk Nietrzeba - Développeur Web Junior</title>
    <meta name="description" content="Portfolio Web de Patryk Nietrzeba Développeur Web Junior">
</head>
<body>
<header>
    <div id="hamburger">
        <a class="logo" href="#folio_home">
            <img  src="assets/images/logoVb.svg">
        </a>
        <div id="hamburger-content">
            <nav>
                <ul>
                    <li><a href="#folio_home">Home</a></li>
                    <li><a href="#folio_propos">à Propos</a></li>
                    <li><a href="#folio_projet">Projets</a></li>
                    <li><a href="#folio_contact">Contact</a></li>
                </ul>
                <div class="theme-switch-wrapper">
                    <label class="theme-switch" for="checkbox">
                        <input type="checkbox" id="checkbox" />
                        <div class="slider round"></div>
                    </label>
                </div>
            </nav>
        </div>
        <button id="hamburger-button">&#9776;</button>
        <div id="hamburger-sidebar">
            <div id="hamburger-sidebar-header">
                <img class="logMenu" src="assets/images/logo.svg">
            </div>
            <div id="hamburger-sidebar-body"></div>
        </div>
        <div id="hamburger-overlay"></div>
    </div> 
</header>

<section id="folio_home" class="section-canvas">
    <div class="divHome">
        <div class="texteHome">
            <h1>Bonjour ! </h1>
            <h2>Je suis un apprenti Développeur Web</h2>
            <div>
                <button class="button2">à propos</button>
            </div>
        </div>
        <div class="containerTriangle">
            <div class="zoneTriangle">
                <div class="triangles bas"></div>
                <div class="triangles haut"></div>
                <div class="triangles gauche"></div>
                <div class="triangles droite"></div>
                <div class="triangles upLvBas"></div>
                <div class="triangles haut upLvD"></div>
                <div class="triangles upLvLastd"></div>
                <div class="triangles haut upLvG"></div>
                <div class="triangles upLvLastG"></div>
                <div class="triangles2"></div>
                <div class="triangles2Bas"></div>
                <div class="triangles2 droit2"></div>
                <div class="trianglesElar"></div>
                <div class="trianglesElar mirror"></div>
                <div class="trianglesElar2"></div>
                <div class="trianglesElar2 mirror2"></div>
                <div class="trianglesElar3"></div>
                <div class="trianglesElar3 mirror3"></div>
            </div>
        </div>
    </div>
    <canvas id="canvas1"></canvas>
</section>

<section id="folio_propos" class="section-canvas">
    <div class="containerAbout">
        <div class="about">
            <div class="imgAbout">
                <img src="assets/images/ja.png" alt="portrait sur illustrator">
            </div>
            <div class="texteMoi">
                <h2>Qui suis-je ?</h2>
                <h3>Prénom : Patryk</h3>
                <h3>Nom : Nietrzeba</h3>
                <h3>Âge : 24</h3>
                <h3>e-mail : patrykntrzba@gmail.com</h3>
                <h3>Hobby : Informatique et MMORPG</h3>
                <h3><a href="#"> Télécharger CV</a></h3>
                <div class="btn">
                    <button class="button1">Contact</button>
                </div>
            </div>
            <div class="clearFloat"></div>
            <div class="textePropos">
                <p>J'ai obtenu une licence LLCER Polonais avant de me lancer dans le développement web, et j'ai depuis acquis des compétences solides en programmation et en design. Mon objectif est de devenir un développeur web full stack polyvalent.</p>
                <br>
                <p>Je suis un passionné d'informatique depuis mon plus jeune âge et j'ai toujours été fasciné par les jeux vidéo, en particulier les MMORPG. Je crois que ma passion pour les jeux vidéo m'a aidé à développer ma créativité et mon esprit d'équipe, ce qui se reflète dans mon approche de la programmation et du développement web.</p>
                <br>
                <p>Si vous recherchez un développeur web passionné et créatif je suis toujours ouvert aux nouvelles opportunités de collaboration.</p>
            </div>
        </div>
    </div> 
    <h2 class="skills">Mes Compétences</h2>
    <div class="articlesSkills">
        <article>
            <div>
                <h2>Code</h2>
                <p>Avec une passion en codage et pour la création de sites web incroyables, je suis équipé des compétences en :</p>
                <h3>HTML/CSS</h3>
                <h3>SASS</h3>
                <h3>PHP</h3>
                <h3>Slim</h3>
                <h3>Git</h3>
                <h3>WordPress</h3>
                <h3>JavaScript</h3>
                <h3>VueJS(en cours d'apprentissage)</h3>
            </div>
        </article>
        <article>
            <div>
                <h2>Design</h2>
                <p>En tant que apprenti j'ai hâte de plonger dans l'univers de la conception de sites web et d'explorer les différentes compétences en design et approfondir celle que je posséde déjà :</p>
                <h3>Photoshop</h3>
                <h3>Illustrator</h3>
                <h3>Figma</h3>
                <h3>InDesign</h3>
                <h3>Premiere Pro</h3>
            </div>
        </article>
    </div>
    <canvas id="canvas2"></canvas>
</section>

<section id="folio_projet" class="section-canvas">
    <div class="containerProjet">
        <div class="tri">
            <div class="overlay">
                <a href="#folio_home"></a>
                <h3>PROJET 1</h3>
            </div>
            <img src="assets/images/ja.png">  
        </div>
        <div class="tri2">
            <div class="overlay">
                <a href="#folio_home"></a>
                <h3>PROJET 1</h3>
            </div>
            <img src="assets/images/ja.png">
        </div>
        <div class="tri">
            <div class="overlay">
                <a href="#folio_home"></a>
                <h3>PROJET 1</h3>
            </div>
            <img src="assets/images/ja.png">
        </div>
        <div class="tri2">
            <div class="overlay">
                <a href="#folio_propos"></a>
                <h3>PROJET 1</h3>
            </div>
            <img src="assets/images/ja.png">
        </div>
        <div class="tri">
            <div class="overlay">
                <a href="#folio_contact"></a>
                <h3>PROJET 1</h3>
            </div>
            <img src="assets/images/ja.png">
        </div>
    </div>  
    <canvas id="canvas3"></canvas>
</section>

<section id="folio_contact" class="section-canvas">
    <div class="containerContact">
        <div class="contactImg">

        </div>
        <div class="contactForm">
            <form method="post" enctype="multipart/form-data">
                <div>
                    <input type="text" name="nom" id="nom" placeholder="Votre Nom&Prénom">
                </div>
                <div>
                    <input type="email" name="email" id="email" placeholder="Votre e-mail">
                </div>
                <div>
                    <textarea name="texte" id="texte" placeholder="Votre Message"></textarea>
                </div>

                <div>
                    <button class="button1" type="submit">envoyer</button>
                </div>
            </form>
        </div>
    </div>

    <canvas id="canvas4"></canvas>
</section>

<footer>
    <h3>2022 - </h3>
    <p>Patryk Nietrzeba - </p>
    <a href="mentions.php">Mentions Légales</a>
</footer>

<script src="assets/js/script.js"></script>

</body>
</html>