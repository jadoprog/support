<?php
function account_update(){
    $id_message = 3;
    $dbh = openBDD();
    foreach($dbh->query("SELECT * from message WHERE id = $id_message") as $row) {
        $id_user = $row['id'];
        foreach($dbh->query("SELECT * from account WHERE id = $id_user") as $rang) {
            $account = [
                'firstname' => $rang['firstname'],
                'name' => $rang['name'],
                'color' => $rang['color_profil'],
                'letter_firstname' => $rang['firstname'][0]
            ];
            return $account;
        }
    }
    $dbh = closeBDD();
}
function updateMessage(){
    $ticket = new Ticket();
    $preJson = $ticket::getDisc(3);
    echo json_encode($preJson);
}