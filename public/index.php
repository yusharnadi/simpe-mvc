<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Yusharnadi\SimpleMvc\Controller\HomeController;
use Yusharnadi\SimpleMvc\App\Router;
use Yusharnadi\SimpleMvc\Controller\ProductController;

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/hello', HomeController::class, 'hello');
Router::add('GET', '/world', HomeController::class, 'world');

Router::add('GET', '/product/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)', ProductController::class, 'index');


Router::run();
