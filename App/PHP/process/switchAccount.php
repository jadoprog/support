<?php
// Changement d'information de compte
require_once '../../dependancePHP.php';

$firstname = htmlspecialchars($_POST['firstname'], ENT_QUOTES);
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$email = htmlspecialchars($_POST['email'], ENT_QUOTES);
$color = htmlspecialchars($_POST['color'], ENT_QUOTES);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $_SESSION['erreurAccount'] = 1;
    redirect('../../../my?p=02');
    die();
}

$dbh = openBDD();
$stmt = $dbh->prepare("UPDATE `account` SET firstname = :firstname, name = :name, email = :email, color_profil = :color WHERE id = :id");
$stmt->bindParam(':firstname', $firstname);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':color', $color);
$stmt->bindParam(':id', $_SESSION['accountLive']['id']);

$stmt->execute();

foreach($dbh->query('SELECT * from account') as $row) {
    if ($_SESSION['accountLive']['id'] == $row['id']){
        reloadLive($row);
    }
}

$dbh = closeBDD();
redirect('../../../my?p=02');