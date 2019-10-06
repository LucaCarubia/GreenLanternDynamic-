<?php
require_once 'connexion.php';


if (!empty($_POST) && isset($_POST['submit_form'])) {

    if (!empty($_POST['firstName']) && (!empty($_POST['lastName'])) && (!empty($_POST['email'])
            && (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))) && (!empty($_POST['mission']) && (!empty($_POST['message'])))) {

        $firstName = trim($_POST['firstName']);
        $lastName = trim($_POST['lastName']);
        $email = trim($_POST['email']);
        $mission = trim($_POST['mission']);
        $message = trim($_POST['message']);

        $pdo = new \PDO(DSN, USER, PASS);

        $queryUser = "INSERT INTO users (firstname, lastname, email) VALUES (:firstname, :lastname, :email)";
        $statement = $pdo->prepare($queryUser);
        $statement->bindValue(':firstName', $firstName, \PDO::PARAM_STR);
        $statement->bindValue(':lastName', $lastName, \PDO::PARAM_STR);
        $statement->bindValue(':email', $email, \PDO::PARAM_STR);
        $statement->execute();

        $queryForm = "INSERT INTO form (mission, message) VALUES (:mission, :message)";
        $statement = $pdo->prepare($queryForm);
        $statement->bindValue(':mission', $mission, \PDO::PARAM_STR);
        $statement->bindValue(':message', $message, \PDO::PARAM_STR);
        $statement->execute();

        header('Location: successForm.php');
    } else {
        header('Location: errorForm.php');
    }
}
