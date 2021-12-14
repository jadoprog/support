<?php
require_once 'header.php';


switch ($_GET['p']) {
    case '01':
        require_once('pages/home.php');
        break;
    case '02':
        require_once('pages/setting.php');
        break;
    case '03':
        require_once('pages/conversation.php');
        break;
    case '04':
        if (getInfo(3, 'grade') == 'admin') {
            require_once('pages/gestion.php');
        }
        break;
    case '05':
        if (getInfo(3, 'grade') == 'admin') {
            require_once('pages/newTicket.php');
        }
        break;
    default:
        require_once('pages/404.php');
        break;
}


require_once 'footer.php';