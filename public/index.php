<?php 
    // var_dump($_SERVER);

    switch($_SERVER['REQUEST_URI']) {
        case '/':
            include 'views/index.php';
            break;
        case '/page1.php':
            include 'views/page1.php';
            break;
        case '/page2.php':
            include 'views/page2.php';
            break;
        default:
            echo 404;
        
    }

// require_once ("src/Router.php");
// require_once ("src/DB.php");
// require_once ("src/controllers/PublicController.php");

spl_autoload_register(function($class){
    $class = substr($class, 4);
    $class = str_replace('\\', '/', $class);
    var_dump($class);
    require_once "src/$class.php";
});

use App\Controllers\PublicController as PC;
use App\Router;
// require 'routes.php';

// Router::addRoute("/", function (){
//     include 'views/index.php';
// });
// Router::addRoute("/page1", function (){
//     include 'views/page1.php';
// });
// Router::addRoute("/page2", function (){
//     include 'views/page2.php';
// });

$router = new App\Router($_SERVER['REQUEST_URI']);

$match = $router->match();
if($match){
    if(is_callable($match['action'])){
        call_user_func($match['action']);
    } 
    else if (is_array($match['action'])){
        $class = $match['action'][0];
        $controller = new $class();
        $method = $match['action'][1];
        $controller->$method();
    }
    else {
        echo 404;
    }   
}


// $router = new App\Router();
// $db = new App\DB();
// $controller = new PC();

// var_dump($router);
// var_dump($db);
// var_dump($controller);