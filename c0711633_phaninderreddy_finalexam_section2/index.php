<?php
    require_once('connection.php');
    session_start();
    if (isset($_GET['controller']) && isset($_GET['action'])) {
        $controller = $_GET['controller'];
        $action     = $_GET['action'];
    } else { //default page 
        $controller = 'pages';
        $action     = 'home';
    }
    require_once('views/layout.php');
?>