<?php

// importation des fichier
require_once '../../dependancePHP.php';

$new_password = $_POST['new-password'];
$confirm_new_password = $_POST['confirm-password'];



$dbh = openBDD();

foreach($dbh->query('SELECT * from account') as $row) {
    if ($_SESSION['accountLive']['id'] == $row['id']){
        if(password_verify(hashPassword($_POST['old-password']), $row['password'])){
            if(!empty($new_password)){
                if($new_password === $confirm_new_password){
                    $stmt = $dbh->prepare("UPDATE `account` SET password = :passwd WHERE id = :id");
                    $pass_modif = hashPassword($new_password, true);
                    $stmt->bindParam(':passwd', $pass_modif);
                    $stmt->bindParam(':id', $_SESSION['accountLive']['id']);
                    $stmt->execute();

                    reloadLive($row);
                    $erreur['changePass'] = 4;
                }
                else{$erreur['changePass'] = 3;
                echo 'pas identique';
                }
            }
            else{$erreur['changePass'] = 2;
            }
        }
        else{$erreur['changePass'] = 1;
            echo 'pas bon mdp';
        
        }
    }
}

$dbh = closeBDD();
$_SESSION['erreurPass'] = $erreur;
redirect('../../../my?p=02');