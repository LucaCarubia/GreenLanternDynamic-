<?php
require_once 'datas.php'
?>
<header class="width-100 height-96 flex flex-center margin-bot-40 margin-bot-md-80">
    <nav class="width-90 flex space-between flex-v-center nav-container-md nav-container-lg">
        <div class="width-25 display-none-md flex flex-center">
            <input id="burger" type="checkbox"/>
            <label for="burger" class="width-80 display-none-md">
                <hr>
                <hr>
                <hr>
                <hr>
                <hr>
            </label>
            <div id="menu-burger" class="menu-burger display-none-md">
                <?php
                foreach ($items as $item => $link) {
                    if (isset($link[0])) {
                        echo "<h2><a href='$link[0]'>" . $item . "</h2></a>";
                    }
                }
                ?>
            </div>
        </div>
        <h2 class="display-none-md">GREEN LANTERNS</h2>
        <div class="width-25 flex">
            <?php
            echo
                "<a href=".$items['Accueil'][0]."><img class=\"logo\" src=\"./web/asset/img/logo-transparent.png\" alt=\"logo des green lantern\" id=\"logo\"></a>";
            ?>
        </div>
        <div class="display-none flex-md width-50 space-around">
            <?php
            foreach ($items as $item => $link) {
                if (isset($link[0])) {
                    echo "<h2><a href='$link[0]'>" . $item . "</h2></a>";
                }
            }
            ?>
        </div>
    </nav>
</header>
