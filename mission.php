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
</head>
<body>
<main>
    <div class="margin-top-20 margin-bot-md-40">
        <h1 class="flex flex-h-center vibrate-1">
            <?php
            echo $titleMain['ourMissions'];
            ?>
        </h1>
    </div>
    <div class="margin-bot-40 margin-bot-md-80">
        <div class="margin-bot-20 margin-bot-md-40 width-100">
            <img class="width-100 height-auto" src="./web/asset/img/mission.jpg" alt="image_missions">
        </div>
        <div>
            <p class="text-justify">Présents dans plus de 150 milliards de galaxie parmi les 200 qui constitue notre
                univers, Les Greens n’oublie pas pour autant La Voie Lactée, et plus particulièrement 1 petite planète
                bleue du système solaire ! Notre présence sur la Terre est certes récente (1940) mais la nature même de
                nos missions n’a eu de cesse de changer. Aujourd’hui plus que jamais nous justifions notre nom de Green
                car nos missions se centrent essentiellement sur la préservation de l’environnement et la mise en œuvre
                de solutions adaptées à cet objectif.</p>
        </div>
    </div>


    <div class="flex flex-h-center flex-start-md margin-bot-20 margin-bot-md-40">
        <h1 class="vibrate-1">
            <?php
            echo $titleMain['replantTree'];
            ?>
        </h1>
    </div>
    <div class="flex-md space-between-md margin-bot-40 margin-bot-md-80">
        <div class="margin-bot-20 margin-bot-md-40 width-100 width-50-md container">
            <img class="width-100 height-auto img" src="./web/asset/img/mission1.jpg" alt="image_mission1">
            <div class="overlay">
                <div class="texte">Quelques chiffres clés pour mieux comprendre le problème :
                    29 400 000 hectares de forêt ont disparu en 2017, soit environ l’équivalent de l’Italie ou d’un
                    terrain de foot par seconde. Et pour mieux se rendre compte de la fréquence d’abattage imagine que
                    c’est 2400 arbres qui sont coupés à la minute !
                </div>
            </div>
        </div>
        <div class=" width-100 width-50-md">
            <p class="text-justify">Au cours de leurs misions diverses et variées, les Greens ont pu constater la
                curieuse dépendance de Homo Sapiens à la présence d’oxygène dans l’atmosphère… Ayant été
                particulièrement attentif lors de nos cours de SVT, nous lançons ainsi une grande campagne de
                reforestation afin de faire respirer un grand coup l’espèce humaine ! Passe-toi la bague au doigt et
                donne une touche plus verte à la planète bleue !</p>
        </div>
    </div>

    <div class="flex flex-h-center flex-start-md margin-bot-20 margin-bot-md-40">
        <h1 class="vibrate-1">
            <?php
            echo $titleMain['collectWaste'];
            ?>
        </h1>
    </div>
    <div class="flex-md space-between-md flex-row-reverse-md margin-bot-40 margin-bot-md-80">
        <div class="margin-bot-20 margin-bot-md-40 width-100 width-50-md container">
            <img class="width-100 height-auto img" src="./web/asset/img/mission2.jpg" alt="image_mission2">
            <div class="overlay">
                <div class="texte">Savais-tu qu’en 1997 un nouveau continent a été découvert ? Grand comme 6 fois la
                    France il est composé de plastique à 90 % et se situe à mi-chemin entre Hawaï et la Californie.
                </div>
            </div>
        </div>
        <div class=" width-100 width-50-md">
            <p class="text-justify">Si les mentalités ont évolué et que l’humanité est de plus en plus éco-responsable
                sur la terre ferme, il n’en est malheureusement pas encore de même pour les océans… Si les Greens n’ont
                de cesse de prêcher la bonne parole pour susciter une prise de conscience collective, ils savent aussi
                enfiler leur plus belle combinaison de plongée verte moulante et plonger dans le grand bain ! Grâce à
                ton anneau nettoie le contenu des océans en un clin d’oeil et met les projets le plus fantaisistes de
                récupération de déchets au chômage technique !</p>
        </div>
    </div>

    <div class="flex flex-h-center flex-start-md margin-bot-20 margin-bot-md-40">
        <h1 class="vibrate-1">
            <?php
            echo $titleMain['greenEnergy'];
            ?>
        </h1>
    </div>
    <div class="flex-md space-between-md margin-bot-40 margin-bot-md-80">
        <div class="margin-bot-20 margin-bot-md-40 width-100 width-50-md container">
            <img class="width-100 height-auto img" src="./web/asset/img/mission3.jpg" alt="image_mission3">
            <div class="overlay">
                <div class="texte">En 2018 c’est près de 1,54 millions de m³ qui sont stockés rien qu’en France.</div>
            </div>
        </div>
        <div class=" width-100 width-50-md">
            <p class="text-justify">Tchernobyl, Fukushima : c’est bien connu les humains aiment jouer aux savants fous
                au risque d’atomiser la planète… Chez les Greens mieux vaut prévenir que guérir ! Ainsi, afin de
                s’éviter de longues et fastidieuses missions de sécurisation de déchets nucléaires toxiques ou de
                sauvetage de population face à un péril imminent nous mettons à disposition des populations l’énergie
                surpuissante et sans limite de nos anneaux ! Laisse de côté ta panoplie du petit chimiste et déchaîne la
                puissance de l’énergie Green !</p>
        </div>
    </div>
</main>

<?php
include 'footer.php';
?>
</body>
</html>
