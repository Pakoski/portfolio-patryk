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

<main id="folio_home" class="section-canvas">
    <div class="divHome">
        <article class="texteHome">
            <h1>Bonjour ! </h1>
            <h2>Je suis un Développeur Web Junior</h2>
        </article>
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
</main>

<section id="folio_propos" class="section-canvas">
    <div class="containerAbout">
        <div class="about">
            <div class="imgAbout">
                <img src="assets/images/ja.png" alt="portrait sur illustrator">
            </div>
            <div class="texteMoi">
                <h2>Bienvenue !</h2>
                <h3>Je m'appelle Patryk</h3>
            </div>
            <div class="clearFloat"></div>
            <div class="textePropos">
                <p>J'ai obtenu une licence LLCER Polonais avant de me lancer dans le développement web, et j'ai depuis acquis des compétences solides en programmation, en design et en gestion de projet. Mon objectif est de devenir un développeur web full stack polyvalent.</p>
                <br>
                <p>Je suis un passionné d'informatique depuis mon plus jeune âge et j'ai toujours été fasciné par les jeux vidéo, en particulier les MMORPG. Je crois que ma passion pour les jeux vidéo m'a aidé à développer ma créativité et mon esprit d'équipe, ce qui se reflète dans mon approche de la programmation et du développement web.</p>
                <br>
                <p>Si vous recherchez un développeur web passionné et créatif je suis toujours ouvert aux nouvelles opportunités de collaboration.</p>
            </div>
        </div>
    </div> 
    <h2 class="skills">Mes Compétences</h2>
    <div class="articlesSkills">
        <article></article>
        <article></article>
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
    <h3>Contactez-moi</h3>
    <p>Si vous voulez m'envoyer n'hésite pas a me faire passer un message grâce au formulaire ci dessous.</p>
    <div class="containerContact">
        <form method="post" enctype="multipart/form-data">
            <div>
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" required value="">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="texte">Texte</label>
                <textarea name="texte" id="texte"></textarea>
            </div>

            <div>
                <button type="submit">Enregistrer</button>
                <button type="reset">Effacer</button>
            </div>
        </form>
    </div>

    <canvas id="canvas4"></canvas>
</section>

<footer>
    <span>2022 - Patryk Nietrzeba</span>
</footer>
<script src="assets/js/script.js"></script>

</body>
</html>