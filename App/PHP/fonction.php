<?php
session_start();


function listStyle($function){
    echo '<pre>';
    print_r($function);
    echo '</pre>';
}
function space(){
    echo "
    
    ";
}

/**
 * hashPassword                     Permet de crypté les mot de passes
 *
 * @param string $password         Le mot de passe qu'il faut crypté
 * @param boolean $php_hash        Si true alors ont le hash avec la fonction password_hash de PHP
 * @return string $passwd_hashed    Nous retourne la valeur du mot de passe crypté
 */
function hashPassword(string $password, bool $php_hash = false): string
{
    $key = hash_hmac("haval160,4", "ticket-support", "onlineformapro");
    $passwd_hashed = hash_hmac("sha256", $password, $key);
    if ($php_hash){
        $passwd_hashed = password_hash($passwd_hashed, PASSWORD_ARGON2ID);
    }
    return $passwd_hashed;
}

/**
 * reloadLive                   Permet de recharger les informations de connection
 *
 * @param array $row           Contiens les informations de la ligne du compte contenue dans la BDD
 * @return array               Retourne un tableau $accountLive
 */
function reloadLive(array $row){
    $accountLive = [
        'id' => $row["id"],
        'grade' => $row["grade"],
        'pseudo' => $row["identifiant"],
        'firstname' => $row["firstname"],
        'name' => $row["name"],
        'email' => $row["email"],
        'colorProfil' => $row["color_profil"]
    ];
    $_SESSION['accountLive'] = $accountLive;
    return $accountLive;
}

/**
 * redirect                 Permet de faire des redirections plus rapidément
 *
 * @param  string $path     Chamin ou est censé être envoyé l'utilisateur
 * @return void             Aucune valeur de sortie
 */
function redirect(string $path){
    header("location: $path");
}

/**
 * getInfo                      Observe et retourne les informations du compte
 * @param int $option           Entier correspondant au type de retour souhaité
 * @param  mixed $args1         Chine de caracthère coréspondant à la recherche
 * @param mixed|null $args2     Argument facultatif
 * @return void                 Pout avoir plusieur type de retour possible
 */
function getInfo(int $option, mixed $args1, mixed $args2 = null){
    if ($option == 1){
        print_r($_SESSION['accountLive'][$args1]);
    }
    if ($option == 2){
        print_r($_SESSION['accountLive'][$args1][0]);
    }
    if ($option == 3){
       return $_SESSION['accountLive'][$args1];
    }
    if ($option == 4){
        print_r($args1[$args2]);
    }
    if ($option == 5){
        print_r($args1[$args2][0]);
    }
    if ($option == 6){
        return $args1[$args2];
    }
}

/**
 * tronquechaine                    Permet de reduire une chaine de caractère en ajoutant ... à la fin
 *
 * @param string $chain            Chaine de caractères à transformé
 * @param int $longueur_max        Longueur de chaine max
 * @return false                   retourne la chaine transformé
 */
function tronquechaine (string $chain, int $longueur_max) {
    if (strlen($chain) > $longueur_max)
    {
      $chain = substr($chain, 0, $longueur_max);
      $last_space = strrpos($chain, " ");
      $chain = substr($chain, 0, $last_space) . "...";

      echo $chain;
    }
    else{
        echo $chain;
    }
}