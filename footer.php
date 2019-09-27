<?php
include 'datas.php';
?>
<footer>
    <div class="foot flex width-90 center">
        <div class="flex flex-column space-around flex-v-center width-50 margin-top-20 flex-row-md width-66-md">
            <?php
            echo "<h2><a href=" . $footerLinks['contactUs'] . ">Nous contacter</a></h2>";
            echo "<h2><a href=#>" . $footerLinks['legalNotice'] . "</a></h2>";
            ?>
        </div>
        <div class="flex flex-column space-around flex-v-center width-50 margin-top-20 flex-row-md width-33-md flex-h-center-md">
            <?php
            echo "<h2>" . $footerLinks['followUs'] . "</h2>";
            ?>
            <div class="margin-left-10-md">
                <?php
                foreach ($socialsNetwork as $network => $url) {
                   echo "<a href=".$url[0].">
                    <img class=\"flip\" src=" . $url[1]. "
                         title=\"instagram_logo\" alt=\"Instagram\"></a>";


//                <a href="https://www.facebook.com">
//                    <img class="flip" src="web/asset/img/facebook_logo.png"
//                         title="facebook_logo" alt="Facebook"></a>
//
//
//                <a href="https://www.linkedin.com">
//                    <img class="flip" src="web/asset/img/linkedin_logo.png"
//                         title="linkedin_logo" alt="Linkedin"></a>

                }
                 ?>
            </div>
        </div>
    </div>
    <p>Green Lantern is a trademark of DC Comics - © 2018 DC Entertainment</p>
</footer>
