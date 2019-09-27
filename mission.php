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
            <?php
            echo "<div class=" . $textImage['textReplantTree'] . "></div>";
            ?>

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
                    <?php
                    echo "<div class=\"text\">" . $textImage['textReplantTree'] . "</div>"
                    ?>
                </div>
            </div>
            <div class=" width-100 width-50-md">
                <?php
                echo "<p class=\"text-justify\"> " . $mainTextMission['replantTree'] . "</p>";
                ?>
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
                    <?php
                    echo "<div class=\"text\">" . $textImage['textCollectWaste'] . "</div>"
                    ?>
                </div>
            </div>
            <div class=" width-100 width-50-md">
                <?php
                echo "<p class=\"text-justify\"> " . $mainTextMission['collectWaste'] . "</p>";
                ?>
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
                    <?php
                    echo "<div class=\"text\">" . $textImage['textGreenEnergy'] . "</div>"
                    ?>
                </div>
            </div>
            <div class=" width-100 width-50-md">
                <?php
                echo "<p class=\"text-justify\"> " . $mainTextMission['greenEnergy'] . "</p>";
                ?>
            </div>
        </div>
</main>

<?php
include 'footer.php';
?>
</body>
</html>
