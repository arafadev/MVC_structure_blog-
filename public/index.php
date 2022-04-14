<?php

use MVC\controllers\homecontroller;

define("DS", DIRECTORY_SEPARATOR);
define("ROOT", dirname(__DIR__));
define("APP", ROOT . DS . 'app');
define("CONFIG", APP . DS . "config");
define("CONTROLLER", APP . DS . "controllers");
define("CORE", APP . DS . "core");
define("VIEWS", APP . DS . "views" . DS);
define("MODELS", APP . DS . "models");

// Config

define("SERVER", 'localhost');
define("USERNAME", 'root');
define("PASSWORD", '');
define("DATABASE", 'harmash');
define("DATABASE_TYPE", 'mysql');
define("DOMAIN_NAME", 'http://news.test/');
define('CSS_PATH', DOMAIN_NAME.'/');



require_once '../vendor/autoload.php';

// this app class is Responsible for running the application
$a = new MVC\core\app();
