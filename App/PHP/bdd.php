<?php
// Connection de la base de donnée
function openBDD(){

    $host_bdd = 'localhost';
    $name_bdd = 'support';
    $user_bdd = 'root';
    $pass_bdd = '';
    
    try {
        $dbh = new PDO("mysql:host=$host_bdd;dbname=$name_bdd", $user_bdd, $pass_bdd);
        return $dbh;
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
    echo 'le code c\'est bien executé';

}
function closeBDD(){
    return null;
}
