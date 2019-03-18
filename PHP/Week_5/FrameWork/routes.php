<?php
$controllers = [
    'user' => ['showUser', 'getInsertUser', 'postInsertUser', 'getUpdateUser', 'postUpdateUser', 'deleteUser']
];

if (!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])) {
    die('The controller or the action are not exist..');
}

include_once 'controllers/'.ucwords($controller).'Controller.php';
$class = ucwords($controller).'Controller';
$control = new $class;
$control->{$action}();