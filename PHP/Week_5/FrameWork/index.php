<?php
include_once 'libs/log/Log.php';
include_once 'config/config.php';
include_once 'libs/sessiondb/Session.php';

$session = new Session();
$session->start_session('start', true);
echo '<h1>This is Demo for MySQL with Framework</h1>';
// Check controller and action in the URL
if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action = $_GET['action'];
} else {
    $controller = 'user';
    $action = 'showUser';
}

session_id($controller);
$_SESSION[$controller] = $action;
include_once 'routes.php';
?>