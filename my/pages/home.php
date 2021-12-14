<!-- Partie du home -->
<section class="sec-home" id="sec-home">

    <div class="blc-disc">
        <div class="header-blc-ticket">
            <div class="title-header-blc-ticket">Tous les ticket</div>
            <div class="icons-action-header-blc-ticket">
                <svg id="svg-reload-account" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="redo-alt" class="svg-inline--fa fa-redo-alt fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256.455 8c66.269.119 126.437 26.233 170.859 68.685l35.715-35.715C478.149 25.851 504 36.559 504 57.941V192c0 13.255-10.745 24-24 24H345.941c-21.382 0-32.09-25.851-16.971-40.971l41.75-41.75c-30.864-28.899-70.801-44.907-113.23-45.273-92.398-.798-170.283 73.977-169.484 169.442C88.764 348.009 162.184 424 256 424c41.127 0 79.997-14.678 110.629-41.556 4.743-4.161 11.906-3.908 16.368.553l39.662 39.662c4.872 4.872 4.631 12.815-.482 17.433C378.202 479.813 319.926 504 256 504 119.034 504 8.001 392.967 8 256.002 7.999 119.193 119.646 7.755 256.455 8z"></path></svg>
                <svg id="svg-add-ticket" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" class="svg-inline--fa fa-plus fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg>
            </div>
        </div>
        <?php
            $dbh = openBDD();
            foreach($dbh->query('SELECT * from message') as $row) {
                $id_exp = $row['id_exp']
                ?>
            <div class="message-blc-disc">
                <div id="blc-action-disc" class="blc-action-disc">
                    <p class="text-action-disc">Fermer</p>
                    <p class="text-action-disc">Supprimer</p>
                    <p class="text-action-disc">Infos</p>
                </div>
                <div class="headband-message-blc-disc">
                    <div class="expediteur-profil">
                        <div class="icon-profile prifil-disc red">L</div>
                        <div class="name-firstname-profil-headband-blc-disc">
                            <div class="firstname-profil-blc-disc">Laure</div>
                            <div class="name-profil-blc-disc">Siblot</div>
                        </div>
                        <div class="date-receive-message">13 nov</div>
                    </div>
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-v" id="svg-elipse-menu" class="svg-elipse-menu svg-inline--fa fa-ellipsis-v fa-w-6" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><path fill="currentColor" d="M96 184c39.8 0 72 32.2 72 72s-32.2 72-72 72-72-32.2-72-72 32.2-72 72-72zM24 80c0 39.8 32.2 72 72 72s72-32.2 72-72S135.8 8 96 8 24 40.2 24 80zm0 352c0 39.8 32.2 72 72 72s72-32.2 72-72-32.2-72-72-72-72 32.2-72 72z"></path></svg>
                </div>
                <p class="text-disc"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae dicta veniam saepe officiis rem porro iusto quia consequatur aliquid .</p>
            </div>
        <?php
            }
            $dbh = closeBDD();
        ?>

        <hr class="separating-bar">
        <div class="message-blc-disc">
            <div class="headband-message-blc-disc">
                <div class="expediteur-profil">
                    <div class="icon-profile prifil-disc pink">M</div>
                    <div class="name-firstname-profil-headband-blc-disc">
                        <div class="firstname-profil-blc-disc">Marie</div>
                        <div class="name-profil-blc-disc">Forest</div>
                    </div>
                    <div class="date-receive-message">23 nov</div>
                </div>
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-v" class="svg-elipse-menu svg-inline--fa fa-ellipsis-v fa-w-6" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><path fill="currentColor" d="M96 184c39.8 0 72 32.2 72 72s-32.2 72-72 72-72-32.2-72-72 32.2-72 72-72zM24 80c0 39.8 32.2 72 72 72s72-32.2 72-72S135.8 8 96 8 24 40.2 24 80zm0 352c0 39.8 32.2 72 72 72s72-32.2 72-72-32.2-72-72-72-72 32.2-72 72z"></path></svg>
            </div>
            <p class="text-disc"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae dicta veniam saepe officiis rem porro iusto quia consequatur aliquid .</p>
        </div>
    </div>


    <div class="contain-right-home">
        <div class="blc-profil-user">
            <div class="header-profil-user">
                <div class="profil-user">
                    <div id="icon-profil-blc-user" class="icon-profile <?php getInfo(1, 'colorProfil') ?>"><?php getInfo(2, 'firstname') ?></div>
                    <div class="name-firstname-profil-headband-blc-disc">
                        <div class="firstname-profil-blc-disc" id="firstname-profil-blc"><?php getInfo(1, 'firstname') ?></div>
                        <div class="name-profil-blc-disc" id="name-profil-blc"><?php getInfo(1, 'name') ?></div>
                    </div>
                </div>
            </div>
            <div class="body-profil-user">
                <div class="contain-infos-profil-user">
                    <div class="title-info-profil-user">Identifant</div>
                    <div id="ident-profil-blc"><?php getInfo(1, 'pseudo') ?></div>
                </div>
                <div class="contain-infos-profil-user">
                    <div class="title-info-profil-user">Adresse email</div>
                    <div id="mail-profil-blc"><?php getInfo(1, 'email') ?></div>
                </div>
            </div>
        </div>
        <div class="welcome-panel">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="door-open" class="svg-inline--fa fa-door-open fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M624 448h-80V113.45C544 86.19 522.47 64 496 64H384v64h96v384h144c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16zM312.24 1.01l-192 49.74C105.99 54.44 96 67.7 96 82.92V448H16c-8.84 0-16 7.16-16 16v32c0 8.84 7.16 16 16 16h336V33.18c0-21.58-19.56-37.41-39.76-32.17zM264 288c-13.25 0-24-14.33-24-32s10.75-32 24-32 24 14.33 24 32-10.75 32-24 32z"></path></svg>
            <div class="text-welcome-panel">
                Bienvenu dans votre espace de gestion !
            </div>
        </div>
    </div>
</section>
<?php

    require_once '/xampp/htdocs/my/pages/newTicket.php'

?>