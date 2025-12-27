<?php
session_start();

require_once '../config/config.php';
require_once '../app/core/Router.php';
require_once '../app/core/Controller.php';
require_once '../app/core/Database.php';

$router = new Router();
$router->dispatch();
