<?php
require_once '../../dependancePHP.php';
require_once '../Class/Ticket.php';


$ticket = new Ticket();
$ticket::readTicket();

//$dbb = openBDD();
//$n_ticket = [];
//foreach($dbb->query('SELECT * from `message`') as $row) {
//
//    // Gestion de date
//    try {
//        $date = new DateTime($row['date']);
//    } catch (Exception $e) {
//    }
//    switch ($date->format('N')) {
//        case 1:
//            $day = 'Lundi';
//            break;
//        case 2:
//            $day = 'Mardi';
//            break;
//        case 3:
//            $day = 'Mercredi';
//            break;
//        case 4:
//            $day = 'Jeudi';
//            break;
//        case 5:
//            $day = 'Vendredi';
//            break;
//        case 6:
//            $day = 'Samedi';
//            break;
//        case 7:
//            $day = 'Dimanche';
//            break;
//    }
//    switch ($date->format('m')) {
//        case 1:
//            $month = 'Janvier';
//            break;
//        case 2:
//            $month = 'Fevrier';
//            break;
//        case 3:
//            $month = 'Mars';
//            break;
//        case 4:
//            $month = 'Avril';
//            break;
//        case 5:
//            $month = 'Mai';
//            break;
//        case 6:
//            $month = 'Juin';
//            break;
//        case 7:
//            $month = 'Juillet';
//            break;
//        case 8:
//            $month = 'Aout';
//            break;
//        case 9:
//            $month = 'Septembre';
//            break;
//        case 10:
//            $month = 'Octobre';
//            break;
//        case 11:
//            $month = 'Novembre';
//            break;
//        case 12:
//            $month = 'Decembre';
//            break;
//    }
//
//    $now = new DateTime('NOW');
//
//    $now->format('d');
//    if($date->format('Y - m') == $now->format('Y - m')){
//        if($date->format('N') == $now->format('N') - 1){
//            $datePost = 'Hier à ' . $date->format('G') . 'h' . $now->format('i');
//        }
//        elseif($date->format('N') == $now->format('N')){
//            if ($now->format('G') - $date->format('G') == 0) {
//                $datePost = 'Il y a ' . $now->format('i') - $date->format('i') . ' min';
//                if ($now->format('i') - $date->format('i') == 0){
//                    $datePost = 'Il y as moins d\'une minute';
//                }
//            }
//            if ($now->format('G') - $date->format('G') > 0){
//                $datePost= 'Il y a ' . $now->format('G') - $date->format('G') . ' h';
//            }
//        }
//    }
//    else{
//        $datePost = 'Le ' . $date->format('d') . ' ' . $month . ' ' . $date->format('Y');
//    }
//    if (isset($datePost)){
//        echo $datePost . '<br> <br>';
//    }
//
//    $ticket = new Ticket($row);
//
//    $ticket::readTicket();

//    if (!in_array($row['n_ticket'], $n_ticket)){
//
//        $n_ticket[] = $row['n_ticket'];
//            foreach($dbb->query('SELECT * from `account`') as $rang) {
//                listStyle($rang['id'] . ' -> '.$row['id']);
//                if($rang['id'] == $row['id']){
//                    $account = [
//                        'firstname' => $rang['firstname'],
//                        'name' => $rang['name'],
//                        'color' => $rang['color_profil'],
//                        'letter_firstname' => $rang['firstname'][0]
//                    ];
//                }
//            }
//        listStyle($account);
//    }
//}
//listStyle($n_ticket);