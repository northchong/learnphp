<?php

use \App\Controllers\AuthController;
use App\Router;
use \App\Controllers\PublicController;


Router::addRoute("/", [PublicController::class, 'index']);
Router::addRoute("/page1", [PublicController::class, 'page1']);
Router::addRoute("/page2", [PublicController::class, 'page2']);
Router::addRoute("/login", [AuthController::class, 'login']);

