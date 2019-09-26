<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Nos Missions</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="./web/css/style.css">
    <link rel="stylesheet" href="./web/css/header.css">
    <link rel="stylesheet" href="web/css/footer.css">
    <link rel="stylesheet" type="text/css" href="web/css/joinUs.css" media="all"/>
</head>
<body>
<main>
    <h1 class="vibrate-1">
        <?php
        echo $titleMain['wantToJoinUs'];
        ?>
    </h1>
    <article class="margin-bot-40 margin-bot-md-80">
        <img class="margin-bot-20 margin-bot-md-40 width-100 height-auto" src="./web/asset/img/joinus.png">
        <p>Tu as pu désormais t’apercevoir de la formidable puissance que les Greens peuvent déployer. Malgré tous ces
            incroyables pouvoirs, ils ne possèdent pas pour autant le don d’ubiquité… 1 paire de bras supplémentaire ne
            sera pas de trop pour réaliser toutes les missions auxquelles les Greens sont confrontées ! Si tu es capable
            de surmonter tes peurs et que tu as 1 esprit de battant, c’est que tu es digne de porter 1 de nos anneaux de
            pouvoir !
        </p>
    </article>

    <form class="margin-bot-40 margin-bot-md-80" name="contact">
        <h1 class="vibrate-1">
            <?php
            echo $titleMain['contactForm'];
            ?>
        </h1>
        <ul class="form-style-1">
            <li><label>Nom Complet <span class="required">*</span></label>
                <input type="text" name="firstName" required
                       class="field-divided" placeholder="Nom"/>
                <input type="text" name="lastName" required
                       class="field-divided" placeholder="Prénom"/></li>
            <li>
                <label>Email <span class="required">*</span></label>
                <input type="email" name="email" class="field-long" required/>
            </li>
            <li>
                <label>Pour quel mission ?</label>
                <select name="field4" class="field-select">
                    <option value="Replanter des arbres">Replanter des arbres</option>
                    <option value="Récuperer les déchets dans les océans">Récuperer les déchets dans les océans
                    </option>
                    <option value="Création d'energie verte">Création d'energie verte</option>
                </select>
            </li>
            <li>
                <label>Votre message <span class="required" required>*</span></label>
                <textarea name="message" class="field-long field-textarea"></textarea>
            </li>
            <li>
                <input type="submit" value="Postuler"/>
            </li>
        </ul>
    </form>
    <p style="color: red;" id="error"></p>
</main>
<footer>
    <div class="foot flex width-90 center">
        <div class="flex flex-column space-around flex-v-center width-50 margin-top-20 flex-row-md width-66-md">
            <h2><a href="contact@greenlantern.fr">Nous contacter</a></h2>
            <h2><a href="Mentions Légales">Mentions Légales</a></h2>
        </div>
        <div class="flex flex-column space-around flex-v-center width-50 margin-top-20 flex-row-md width-33-md flex-h-center-md">
            <h2>Suivez nous!</h2>
            <div class="margin-left-10-md">
                <a href="https://www.instagram.com/?hl=en"><img class="flip" src="web/asset/img/instagram_logo.png"
                                                                width="20px" height="20px" title="instagram_logo"
                                                                alt="Instagram"></a>
                <a href="https://www.facebook.com"><img class="flip" src="web/asset/img/facebook_logo.png" width="20px"
                                                        height="20px" title="facebook_logo" alt="Facebook"></a>
                <a href="https://www.linkedin.com"><img class="flip" src="web/asset/img/linkedin_logo.png" width="20px"
                                                        height="20px" title="linkedin_logo" alt="Linkedin"></a>
            </div>
        </div>
    </div>
    <p>Green Lantern is a trademark of DC Comics - © 2018 DC Entertainment</p>
</footer>
<script type="text/javascript" src="./web/js/formJoinUs.js"></script>
</body>

</html>