<?php

if (!empty($_POST['firstName']) && (!empty($_POST['lastName'])) && (!empty($_POST['email'])
        && (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))) && (!empty($_POST['choice']) && (!empty($_POST['message'])))) {
    header('Location: successForm.php');
} else {
    header('Location: errorForm.php');
}
