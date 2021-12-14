<?php
// Page de traitement de connection

require("bdd.php");
require("fonction.php");

$dbh = openBDD();
foreach($dbh->query('SELECT * from account') as $row) {
    if ($_SESSION['accountLive']['id'] == $row['id']){
        $account = reloadLive($row);
    }
}
$dbh = closeBDD();
echo json_encode($account);