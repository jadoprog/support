<?php
    require("../App/dependancePHP.php");
    if (!isset($_SESSION['accountLive'])){
        $_SESSION['redirect']['ErreurCompte'] = 1;
        header("location: ../");
    }
    if(!isset($_SESSION['erreurPass']['changePass'])){
        $_SESSION['erreurPass']['changePass'] = 0;
    }
    if(!isset($_SESSION['erreurAccount'])){
        $_SESSION['erreurAccount'] = 0;
    }
    if (!isset($_GET['p'])){
        $_GET['p'] = '01';
    }
    if (!isset($_GET['o'])){
        $_GET['o'] = '01';
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon espace</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/adduser.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/setting.css">
    <link rel="stylesheet" href="css/conversation.css">
    <link rel="stylesheet" href="css/gestion.css">
    <link rel="stylesheet" href="css/newTicket.css">
    <link rel="stylesheet" href="css/404.css">
</head>
    <body id="body">
        <header class="header-panel">
            <div class="contain-all-top">
                <div class="name-project">Support <span class="text-name-project">Mon panel</span></div>
                <nav class="menu-verticale" id="nav-mobile">
                    <div class="contain-profil-nav-screen">
                        <div class="icon-profile <?php getInfo(1, 'colorProfil') ?>"><?php getInfo(2, 'firstname') ?></div>
                        <div class="contain-profil-mobile">
                            <div class="text-fixe-profil">Bonjour,</div>
                            <div class="firstname-profil"><?php getInfo(1, 'firstname') ?></div>
                            <svg id="arrow-account-info-deco-mobile" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" class="chevron-down svg-inline--fa fa-chevron-down fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                        </div>
                    </div>
                    <!-- Bulle d'action -->
                    <div class="blc-action-profil" id="blc-action-profil">
                        <div class="profil-contain-blc-action">
                            <div class="icon-profile <?php getInfo(1, 'colorProfil') ?>"><?php getInfo(2, 'firstname') ?></div>
                            <div class="infos-profil-blc-action">
                                <div class="name-firstname-profil-blc-action">
                                    <div class="firstname-profil-blc-action"><?php getInfo(1, 'firstname') ?></div>
                                    <div class="name-profil-blc-action"><?php getInfo(1, 'name') ?></div>
                                    <a href="./?p=02"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen" class="svg-pencil svg-inline--fa fa-pen fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M290.74 93.24l128.02 128.02-277.99 277.99-114.14 12.6C11.35 513.54-1.56 500.62.14 485.34l12.7-114.22 277.9-277.88zm207.2-19.06l-60.11-60.11c-18.75-18.75-49.16-18.75-67.91 0l-56.55 56.55 128.02 128.02 56.55-56.55c18.75-18.76 18.75-49.16 0-67.91z"></path></svg></a>
                                </div>
                                <div class="email-profil-blc-action"><?php getInfo(1, 'email') ?></div>
                            </div>
                        </div>
                        <a href="../App/PHP/process/logout.php"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="power-off" class="svg-power-off svg-inline--fa fa-power-off fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M400 54.1c63 45 104 118.6 104 201.9 0 136.8-110.8 247.7-247.5 248C120 504.3 8.2 393 8 256.4 7.9 173.1 48.9 99.3 111.8 54.2c11.7-8.3 28-4.8 35 7.7L162.6 90c5.9 10.5 3.1 23.8-6.6 31-41.5 30.8-68 79.6-68 134.9-.1 92.3 74.5 168.1 168 168.1 91.6 0 168.6-74.2 168-169.1-.3-51.8-24.7-101.8-68.1-134-9.7-7.2-12.4-20.5-6.5-30.9l15.8-28.1c7-12.4 23.2-16.1 34.8-7.8zM296 264V24c0-13.3-10.7-24-24-24h-32c-13.3 0-24 10.7-24 24v240c0 13.3 10.7 24 24 24h32c13.3 0 24-10.7 24-24z"></path></svg></a>
                    </div>
                    <div class="menu">
                        <a href="./?p=01" class="p-nav text-my-profile <?php if($_GET['p'] == '01'){ ?>active-link-nav<?php } ?>" id="links-menu-one">Tableau de bord</a>
                        <a href="./?p=02" class="p-nav text-manage-user <?php if($_GET['p'] == '02'){ ?>active-link-nav<?php } ?>" id="links-menu-two">Paramètre du compte</a>
                        <a href="./?p=03" class="p-nav text-admin-panel <?php if($_GET['p'] == '03'){ ?>active-link-nav<?php } ?>" id="links-menu-three">Vos conversations</a>
                        <?php if(getInfo(3, 'grade') == 'admin'){ ?>
                            <a href="./?p=04" class="p-nav text-gestion-compte <?php if($_GET['p'] == '04'){ ?>active-link-nav<?php } ?>" id="links-menu-four">Gestion de Compte</a>
                        <?php } ?>    
                    </div>
                </nav>
                <div class="contain-profil">
                        <div class="text-fixe-profil">Bonjour,</div>
                        <div class="firstname-profil"  id="firstname-menu-blc"><?php getInfo(1, 'firstname') ?></div>
                        <div class="icon-profile <?php getInfo(1, 'colorProfil') ?>"><?php getInfo(2, 'firstname') ?></div>
                        <svg id="arrow-account-info-deco" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" class="chevron-down svg-inline--fa fa-chevron-down fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                </div>
                <div class="menu-burger" id="menu-burger">
                    <hr class="hr-menu-burger" id="hr-menu-burger-one">
                    <hr class="hr-menu-burger" id="hr-menu-burger-two">
                    <hr class="hr-menu-burger" id="hr-menu-burger-three">
                </div>
            </div>
        </header>
        <section class="body-all-sec">