<?php
require_once '../../dependancePHP.php';

$id_add = 2;
//$cath = $_POST['cath'];
$message = "Sehe vient de souligner que non seulement les \"points d'ancrage\" ne sont pas gérés par le processus clone/update, mais aussi les caches, les rerere, etc. Donc, pour une sauvegarde stricte,";
//$status = 'En attente';
//$vue = 0;
$str = 'Formation exterieur';

$objDateTime = new DateTime('NOW');
echo $objDateTime->format('N - j - n - Y : G - i'); // ISO8601 formated datetime
echo '<br> <br>';

$dbb = openBDD();

$b = $dbb->prepare("INSERT INTO `message` (`id_exp`, `id_dest`, `cathegorie`, `message`, `status`, `vue`, `date`) VALUES (:id_exp, 0, :cath, :message, 'En attente', 3, NOW())");
$b->bindParam(":id_exp", $id_add);
$b->bindParam(":cath", $str);
$b->bindParam(":message", $message);

$b->execute();

foreach($dbb->query('SELECT * from `message`') as $row) {
    if ($row['vue'] == 3){
        $b = $dbb->prepare("UPDATE `message`
            SET n_ticket = :nbr_ticket,
                vue = 0
            WHERE id = :id_mess");
        $b->bindParam(":id_mess", $row['id']);
        $b->bindParam(":nbr_ticket", $row['id']);
        $b->execute();


    }
    $date = new DateTime($row['date']);
    $date->format('N - j - n - Y : G - i');
    if ($date->format('N - j - n - Y : G - i')){

    }
    echo $row['id'] .' | '. $row['id_exp'] .' | '. $row['id_dest'] .' | '. $row['cathegorie'] .' | '. $row['message'] .' | '. $row['status'] .' | '. $row['vue'] .' | '. $row['n_ticket'] .' | '. $date->format('N - j - n - Y : G - i') . '<br><br><br><br>';
}

$dbb = closeBDD();