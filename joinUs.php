<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Rejoignez-Nous</title>
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

    <form class="margin-bot-40 margin-bot-md-80" name="contact" action="formProcessing.php" method="POST">
        <h1 class="vibrate-1">
            <?php
            echo $titleMain['contactForm'];
            ?>
        </h1>
        <ul class="form-style-1">
            <li><label>Nom Complet <span class="required">*</span></label>
                <input type="text" name="firstName"
                       class="field-divided" placeholder="Nom"/>
                <input type="text" name="lastName"
                       class="field-divided" placeholder="Prénom"/></li>
            <li>
                <label>Email <span class="required">*</span></label>
                <input type="email" name="email" class="field-long"/>
            </li>
            <li>
                <label>Pour quel mission ?</label>
                <select name="choice" class="field-select">
                    <option value="1">Replanter des arbres</option>
                    <option value="2">Récuperer les déchets dans les océans</option>
                    <option value="3">Création d'energie verte</option>
                </select>
            </li>
            <li>
                <label>Votre message <span class="required">*</span></label>
                <textarea name="message" class="field-long field-textarea"></textarea>
            </li>
            <li>
                <input type="submit" value="Postuler"/>
            </li>
        </ul>
    </form>
    <p style="color: red;" id="error"></p>
</main>
<?php
include 'footer.php';
?>
<script type="text/javascript" src="./web/js/formJoinUs.js"></script>
</body>

</html>