<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
require_once 'core/Connect.php';
require_once 'css/script_css.php';
#===============================================
require_once 'core/App.php';
require_once 'core/Controller.php';

$app = new App();
?>