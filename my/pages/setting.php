<section class="sec-settings" id="sec-setting">
    <div class="header-sec-settings">
        <div class="title-sec-settings">Paramètre de compte</div>
    </div>
    <div class="profil-settings" id="profil-settings">
        <div class="icon-profile icon-profil-settings <?php getInfo(1, 'colorProfil') ?>"><?php getInfo(2, 'firstname') ?></div>
        <div class="name-firstname-settings">
            <div class="firstname-settings"><?php getInfo(1, 'firstname') ?></div>
            <div class="name-settings"><?php getInfo(1, 'name') ?></div>
        </div>
        <div class="indentifiant-settings"><?php getInfo(1, 'pseudo') ?></div>
    </div>
    <div class="account-profil">
        <form action="../../App/PHP/process/switchAccount.php" method="post" class="form-settings">
            <div class="title-sec-account">Compte</div>
            <div class="under-title-desc-sec-account">
                <div class="under-title-sec-account">Profil</div>
                <div class="desc-sec-account">Ayez la posibilité de modifier vos informations en cas de changement.</div>
            </div>
            <div class="contain-inputs-identity">
                <div class="blc-input-identity">
                    <label for="firstname">Prénom</label>
                    <input type="text" name="firstname" id="firstname" value="<?php getInfo(1, 'firstname') ?>">
                </div>
                <div class="blc-input-identity name-settings">
                    <label for="name">Nom</label>
                    <input type="text" name="name" id="name" value="<?php getInfo(1, 'name') ?>">
                </div>
            </div>
            <div class="contain-input-email">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" value="<?php getInfo(1, 'email') ?>">
            </div>
            <div class="color-profil">
                <label for="">Photo</label>
                <div class="select-color">
                    <div class="icon-profile icon-profil-modif <?php getInfo(1, 'colorProfil') ?>"><?php getInfo(2, 'firstname') ?></div>
                    <div id="chose-btn-select-color" class="chose-btn-select-color">Choisir</div>
                    <div id="filtre-body" class="filtre-body dn"></div>
                    <div id="chose-color-df" class="colors-profil-icon dn">
                        <div class="under-title-desc-sec-account-color">
                            <div class="under-title-sec-account">Couleur de profil</div>
                            <div class="desc-sec-account">Selectionner une couleur pour votre profil.</div>
                        </div>
                        <div class="colors-fdr">
                            <div class="radio-settings">
                                <input type="radio" value="pink" name="color" id="pink" <?php if(getInfo(3, 'colorProfil')  == 'pink'){?> checked <?php } ?>>
                                <input type="radio" value="yellow" name="color" id="yellow" <?php if(getInfo(3, 'colorProfil')  == 'yellow'){?> checked <?php } ?>>
                                <input type="radio" value="red" name="color" id="red" <?php if(getInfo(3, 'colorProfil')  == 'red'){?> checked <?php } ?>>
                                <input type="radio" value="green" name="color" id="green" <?php if(getInfo(3, 'colorProfil')  == 'green'){?> checked <?php } ?>>
                                <input type="radio" value="blue" name="color" id="blue" <?php if(getInfo(3, 'colorProfil')  == 'blue'){?> checked <?php } ?>
                            </div>
                            <label for="pink" class="color pink" id="label-color-pink">
                                    <svg id="svg-pink" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" class="<?php if(getInfo(3, 'colorProfil')  == 'pink'){?>select-color <?php } ?> svg-color check-color svg-inline--fa fa-check fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path></svg>
                                </label>
                            <label for="yellow" class="color yellow" id="label-color-yellow">
                                    <svg id="svg-yellow" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" class="<?php if(getInfo(3, 'colorProfil')  == 'yellow'){?>select-color <?php } ?> svg-color check-color svg-inline--fa fa-check fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path></svg>
                                </label>
                            <label for="red" class="color red" id="label-color-red">
                                    <svg id="svg-red" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" class="<?php if(getInfo(3, 'colorProfil')  == 'red'){?>select-color <?php } ?> svg-color check-color svg-inline--fa fa-check fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path></svg>
                                </label>
                            <label for="green" class="color green" id="label-color-green">
                                    <svg id="svg-green" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" class="<?php if(getInfo(3, 'colorProfil')  == 'green'){?>select-color <?php } ?> svg-color check-color svg-inline--fa fa-check fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path></svg>
                                </label>
                            <label for="blue" class="color blue" id="label-color-blue">
                                    <svg id="svg-blue" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" class="<?php if(getInfo(3, 'colorProfil')  == 'blue'){?>select-color <?php } ?> svg-color check-color svg-inline--fa fa-check fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path></svg>
                                </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contain-submit">
                <a href="./?p=02" class="annul-modif-links">Annulée</a>
                <button type="submit">Mettre à jour</button>
            </div>
        </form>
        <form action="../../App/PHP/process/switchPass.php" method="post" class="form-settings">
            <div class="under-title-desc-sec-account mot-de-passe-title-settings">
                <div class="under-title-sec-account">Mot de passe</div>
                <div class="desc-sec-account">Changer votre mot de passe mais attention au voyeur.</div>
            </div>
            <div class="contain-input-email">
                <label for="email">Mot de passe actuel</label>
                <input type="password" name="old-password" id="email">
            </div>
            <div class="contain-input-email">
                <label for="email">Nouveau mot de passe</label>
                <input type="text" name="new-password" id="email">
            </div>
            <div class="contain-input-email">
                <label for="email">Confirmée mot de passe</label>
                <input type="text" name="confirm-password" id="email">
            </div>
            <div class="contain-submit">
                <a href="./?p=02" class="annul-modif-links">Annulée</a>
                <button type="submit">Mettre à jour</button>
            </div>
        </form>
    </div>
    <div class="notifs-settings">
        <?php if($_SESSION['erreurPass']['changePass'] == 1){
            $_SESSION['erreurPass']['changePass'] = 0?>
            <div class="succes-notif-settings erreur-notif-settings">Le mot de passe saisie ne coréspond pas au votre.</div>
        <?php } ?>
        <?php if($_SESSION['erreurPass']['changePass'] == 2){
            $_SESSION['erreurPass']['changePass'] = 0?>
            <div class="succes-notif-settings erreur-notif-settings">Vous dever saisire un nouveau mot de passe.</div>
        <?php } ?>
        <?php if($_SESSION['erreurPass']['changePass'] == 3){
            $_SESSION['erreurPass']['changePass'] = 0?>
            <div class="succes-notif-settings erreur-notif-settings">Les deux mot de passe ne sont pas identique.</div>
        <?php } ?>
        <?php if($_SESSION['erreurPass']['changePass'] == 4){
            $_SESSION['erreurPass']['changePass'] = 0?>
            <div class="succes-notif-settings">Vos informations ont été changer avec succée.</div>
        <?php } ?>
        <?php if($_SESSION['erreurAccount'] == 1){
            $_SESSION['erreurAccount'] = 0?>
            <div class="succes-notif-settings erreur-notif-settings">L'addresse email n'est pas valide.</div>
        <?php } ?>
    </div>
</section>