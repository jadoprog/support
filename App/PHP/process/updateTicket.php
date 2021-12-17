<?php
require_once '../../dependancePHP.php';
function update(){
    $ticket = new Ticket();
    $preJson = $ticket::readTicket();
    echo json_encode($preJson);
}

