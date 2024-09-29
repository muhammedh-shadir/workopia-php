<?php
require '../helpers.php';
require basePath('Database.php');
$config = require basePath('config/db.php');

$db = new Database($config);

require basePath('Router.php');

$router = new Router();

require basePath('routes.php');

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);

