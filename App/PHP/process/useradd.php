<?php

$pepper = hash_hmac("haval160,4", "ticket-support", "onlineformapro");

$grade = 'client';
$identifiant = 'trenaut';
$password = "aseft";
$firstname = "La";
$name = "Marque de shampoing";
$email = "";
$nbrColor = rand(0, 4);

echo $nbrColor;

switch($nbrColor){
    case(0):
        $color = 'blue';
        break;
    case(1):
        $color = 'red';
        break;
    case(2):
        $color = 'green';
        break;
    case(3):
        $color = 'yellow';
        break;
    case(4):
        $color = 'pink';
        break;
}

$pwd_peppered = hash_hmac("sha256", $password, $pepper);
$passwd_hashed = password_hash($pwd_peppered, PASSWORD_ARGON2ID);

if ($_GET['pass'] != 'f4r5d8sf8'){
    die('Ouos, vous êtes dans le code de création d\'utilisateur');
}
// rentré dans la base de donné
require("bdd.php");

$dbb = openBDD();

$b=$dbb->prepare("INSERT INTO `account`(`grade`, `identifiant`, `password`, `firstname`, `name`, `email`, `color_profil`) VALUES (:grade, :identifiant, :passwd, :firstname, :name, :email, :color)");
$b->bindParam(":grade", $grade);
$b->bindParam(":identifiant", $identifiant);
$b->bindParam(":passwd", $passwd_hashed);
$b->bindParam(":firstname", $firstname);
$b->bindParam(":name", $name);
$b->bindParam(":email", $email);
$b->bindParam(":color", $color);
$b->execute();

$dbb = closeBDD();

echo 'Utilisateur crée.';
