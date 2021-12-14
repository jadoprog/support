<?php
// Page de traitement de connection

require_once '../../dependancePHP.php';

$login = $_POST['id'];
$pass = $_POST['password'];
$_SESSION['id'] = $login;

$logErreur = [];

$dbh = openBDD();
foreach($dbh->query('SELECT * from account') as $row) {
    if ($login == $row['identifiant']){
        if (password_verify(hashPassword($pass), $row['password'])) {
            if ($row['connect'] == 1) {
                reloadLive($row);
                $_SESSION['erreur'] = 0;
                redirect('../../../my/');
                die();
            }
            else{
                $logErreur['connect'] = true;
            }
        }
    }
}
$dbh = closeBDD();
if ($logErreur['connect']){
    $_SESSION['errorConnect'] = 1;
}
else{
    $_SESSION['erreur'] = 1;
}
redirect('../');

die();