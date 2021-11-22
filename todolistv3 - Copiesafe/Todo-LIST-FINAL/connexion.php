<?php


session_start();
require_once("config.php");
if (isset($_POST['email']) && isset($_POST['password'])) {

    $email = htmlspecialchars($_POST['email']);

    $password = htmlspecialchars($_POST['password']);

    $check = $db->prepare('SELECT pseudo, email, password FROM users WHERE email=?');

    $check->execute(array($email));

    $data = $check->fetch();

    $row = $check->rowCount();

    if ($row == 1) {


        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            if (password_verify($password, $data['password'])) {
                $_SESSION['user'] = $data['pseudo'];
                header('Location:totool.php');
                die();
            } else header('Location:index.php?login_err=password');
        } else header('Location:index.php?login_err=email');
    } else header('Location:index.php?login_err=already');
} else header('Location:index.php?erreur=erreur');
