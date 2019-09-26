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
    <link rel="stylesheet" type="text/css" href="web/css/mission.css" media="all"/>
</head>
<body>
<main>
    <div id="slider" class="margin-bot-20 margin-bot-md-40 width-100">
        <figure>
            <img class="width-33 height-auto" src="./web/asset/img/banner1.jpg">
            <img class="width-33 height-auto" src="./web/asset/img/banner.png">
            <img class="width-33 height-auto" src="./web/asset/img/banner2.jpg">
        </figure>
    </div>
    <div class="margin-bot-20 margin-bot-md-40">
        <h1 class="flex flex-h-center vibrate-1">
            <?php
            echo $titleMain['whoAreGreen'];
            ?>
        </h1>
    </div>
    <div class="margin-bot-40 margin-bot-md-80">
        <div class="margin-bot-20 margin-bot-md-40 width-100">
            <img class="width-100 height-auto" src="./web/asset/img/who.jpg">
        </div>
        <div class="margin-bot-20">
            <?php
            echo "<p class=\"text-justify\">" . $textsResume['aboutUs'] . "</p>";
            ?>
        </div>
    </div>

    <div class="margin-bot-20 margin-bot-md-40">
        <h1 class="flex flex-h-center vibrate-1">
            <?php
            echo $titleMain['ourMissions'];
            ?>
        </h1>
    </div>
    <div class="margin-bot-40 margin-bot-md-80">
        <div class="margin-bot-20 margin-bot-md-40 width-100">
            <img class="width-100 height-auto" src="./web/asset/img/mission.jpg">
        </div>
        <div class="margin-bot-20">
            <?php
            echo "<p class=\"text-justify\">" . $textsResume['ourMissions'] . "</p>"
            ?>
        </div>
        <div class="flex flex-end">
            <a class="link" href="mission.php"><h2 class="link">Découvre sans attendre les missions disponibles !</h2>
            </a>
        </div>
    </div>

    <div class="margin-bot-20 margin-bot-md-40">
        <h1 class="flex flex-h-center vibrate-1">
            <?php
            echo $titleMain['joinUs'];
            ?>
        </h1>
    </div>
    <div class="margin-bot-40 margin-bot-md-80">
        <div class="margin-bot-20 margin-bot-md-40 width-100">
            <img class="width-100 height-auto" src="./web/asset/img/joinus.png">
        </div>
        <div class="margin-bot-20">
            <?php
            echo "<p class=\"text-justify\">" . $textsResume['joinUs'] . "</p>"
            ?>
        </div>
        <div class="flex flex-end">
            <a href="joinUs.php"><h2 class="link">Deviens un Green !</h2></a>
        </div>
    </div>


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

</body>
</html>
