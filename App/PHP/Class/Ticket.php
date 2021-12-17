<?php
class Ticket
{
    private static function getDayDate(array $Date = null){
        $date = new DateTime($Date['date']);
        switch ($date->format('N')) {
            case 1:
                $day = 'Lundi';
                break;
            case 2:
                $day = 'Mardi';
                break;
            case 3:
                $day = 'Mercredi';
                break;
            case 4:
                $day = 'Jeudi';
                break;
            case 5:
                $day = 'Vendredi';
                break;
            case 6:
                $day = 'Samedi';
                break;
            case 7:
                $day = 'Dimanche';
                break;
        }
        switch ($date->format('m')) {
            case 1:
                $month = 'Janvier';
                break;
            case 2:
                $month = 'Fevrier';
                break;
            case 3:
                $month = 'Mars';
                break;
            case 4:
                $month = 'Avril';
                break;
            case 5:
                $month = 'Mai';
                break;
            case 6:
                $month = 'Juin';
                break;
            case 7:
                $month = 'Juillet';
                break;
            case 8:
                $month = 'Aout';
                break;
            case 9:
                $month = 'Septembre';
                break;
            case 10:
                $month = 'Octobre';
                break;
            case 11:
                $month = 'Novembre';
                break;
            case 12:
                $month = 'Decembre';
                break;
        }

        $now = new DateTime('NOW');

        $now->format('d');
        if($date->format('Y - m') == $now->format('Y - m')){
            if($date->format('N') == $now->format('N') - 1){
                $datePost = 'Hier à ' . $date->format('G') . 'h' . $date->format('i');
            }
            elseif($date->format('N') == $now->format('N')){
                if ($now->format('G') - $date->format('G') == 0) {
                    $datePost = 'Il y a ' . $now->format('i') - $date->format('i') . ' min';
                    if ($now->format('i') - $date->format('i') == 0){
                        $datePost = 'Il y as moins d\'une minute';
                    }
                }
                if ($now->format('G') - $date->format('G') > 0){
                    $datePost= 'Il y a ' . $now->format('G') - $date->format('G') . ' h';
                }
            }
            else{
                $datePost = 'Le ' . $date->format('d') . ' ' . substr($month, 0, 3);
            }
        }
        else{
            $datePost = 'Le ' . $date->format('d') . ' ' . substr($month, 0, 3) . ' ' . $date->format('Y');
        }
        if(!isset($datePost)){
            $datePost = 'Oups. Nous n\'arrivons pas à charger la date';
        }
        return $datePost;
    }

    private static function getAccount($dbb, $row)
    {
        foreach($dbb->query('SELECT * from `account`') as $rang) {
            if($rang['id'] == $row['id_exp']){
                $account = [
                    'firstname' => $rang['firstname'],
                    'name' => $rang['name'],
                    'color' => $rang['color_profil'],
                    'letter_firstname' => $rang['firstname'][0]
                ];
            }
        }
        if(!isset($account)){
            $account = null;
        }
        return $account;
    }

    public static function readTicket()
    {
        $dbb = openBDD();
        $n_ticket = [];
        foreach($dbb->query('SELECT * from `message`') as $row) {
        $datePost = self::getDayDate($row);
        $account = self::getAccount($dbb, $row);

        if (!in_array($row['n_ticket'], $n_ticket)):
            $n_ticket[] = $row['n_ticket'];
            ?>
            <div class="message-blc-disc">
                <div class="headband-message-blc-disc">
                    <div class="expediteur-profil">
                        <div class="icon-profile prifil-disc <?php  echo $account['color']; ?>"><?php echo $account['letter_firstname']; ?></div>
                        <div class="name-firstname-profil-headband-blc-disc">
                            <div class="firstname-profil-blc-disc"><?php echo $account['firstname']; ?></div>
                            <div class="name-profil-blc-disc"><?php echo $account['name']; ?></div>
                        </div>
                    </div>
                    <div class="date-receive-message"><?php echo $datePost; ?></div>
                </div>
                <p class="text-disc"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae dicta veniam saepe officiis rem porro iusto quia consequatur aliquid .</p>
            </div>
            <hr class="separating-bar">
            <?php
            endif;
        }
        $dbh = closeBDD();
    }

    public static function getTicket(bool $see = false)
    {
        $dbb = openBDD();
        $n_ticket = [];
        foreach($dbb->query('SELECT * from `message`') as $row) {
            $datePost = self::getDayDate($row);
            $account = self::getAccount($dbb, $row);

            foreach($dbb->query('SELECT * from `account`') as $rang) {
                if($rang['id'] == $row['id_exp']){
                    $account = [
                        'firstname' => $rang['firstname'],
                        'name' => $rang['name'],
                        'color' => $rang['color_profil'],
                        'letter_firstname' => $rang['firstname'][0]
                    ];
                }
            }
            if(!isset($account)){
                $account = null;
            }

            if (!in_array($row['n_ticket'], $n_ticket)):
                $n_ticket[] = $row['n_ticket'];
                if ($see === true):
                    if($row['vue'] == 1):
                        ?>
                        <li class="clearfix not-view">
                            <div class="icon-profile <?php echo $account['color']; ?>"><?php echo $account['letter_firstname']; ?></div>
                            <div class="about">
                                <div class="Info-user-convers">
                                    <p class="list-name-firstname"><?php echo $account['firstname'] . ' ' . $account['name']; ?></p>
                                    <p class="date-convers"
                                <div>
                                <div class="status"><?php echo tronquechaine($row['message'], 25); ?></div>
                            </div>
                        </li>
                        <?php
                    else:
                        ?>
                        <li class="clearfix">
                            <div class="icon-profile <?php echo $account['color']; ?>"><?php echo $account['letter_firstname']; ?></div>
                            <div class="about">
                                <div class="Info-user-convers">
                                    <p class="list-name-firstname"><?php echo $account['firstname'] . ' ' . $account['name']; ?></p>
                                    <p class="date-convers"
                                <div>
                                <div class="status"><?php echo tronquechaine($row['message'], 25); ?></div>
                            </div>
                        </li>
                    <?php
                    endif;
                else:
                    ?>
                    <li class="clearfix">
                        <div class="icon-profile red">K</div>
                        <div class="about">
                            <div class="Info-user-convers">
                                <p class="list-name-firstname">Kevin Jashari</p>
                                <p class="date-convers"
                        <div>
                            <div class="status"> left 7 mins ago </div>
                        </div>
                    </li>
                    <?php
                endif;
            endif;
        }
    }

    public static function getDisc(int $n_ticlet)
    {
        $dbb = openBDD();
        foreach($dbb->query("SELECT * from `message` WHERE n_ticket = $n_ticlet") as $row) {
            $datePost = self::getDayDate($row);
            $account = self::getAccount($dbb, $row);
            return [
                'datePost' => $datePost,
                'color' => $account['color'],
                'letter' => $account['letter_firstname'],
                'message' => $row['message']
            ];
        }
        $dbb = openBDD();
    }

}