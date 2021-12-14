<?php
// Page de déconnection

session_start();

$_SESSION['accountLive'] = NULL;
$_SESSION['redirect']['logout'] = 1;
header("location: ../../../");

die();