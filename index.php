<<<<<<< HEAD
<?php
require_once "App/Controllers/ProductController.php";
require_once "App/Controllers/UserController.php";
require_once "App/Controllers/HomeController.php";
require_once "App/Controllers/CartController.php";

$url = $_GET['url'];
$urlArr = explode('/', $url);
// var_dump($urlArr);
// die;
// echo $url;
$controlerClassName = $urlArr[0] . "Controller";

$controller = new $controlerClassName();
call_user_func([$controller, $urlArr[1]]);


// if ($urlArr[0] == 'product') {
//     $controler = new ProductController();
//     if ($urlArr[1] == "create") {
//         $controler->index();
//     } else
//         $controler->index();
// } elseif ($urlArr[0] == 'user') {
//     $controler = new UserController();
//     if ($urlArr[1] == "create") {
//         $controler->index();
//     } else
//         $controler->index();
// } else {
//     echo "no where to go";
// }
=======
<?php
require_once "App/Controllers/ProductController.php";
require_once "App/Controllers/UserController.php";
require_once "App/Controllers/HomeController.php";

$url = $_GET['url'];
$urlArr = explode('/', $url);
// var_dump($urlArr);
// die;
// echo $url;
$controlerClassName = $urlArr[0] . "Controller";

$controller = new $controlerClassName();
call_user_func([$controller, $urlArr[1]]);


// if ($urlArr[0] == 'product') {
//     $controler = new ProductController();
//     if ($urlArr[1] == "create") {
//         $controler->index();
//     } else
//         $controler->index();
// } elseif ($urlArr[0] == 'user') {
//     $controler = new UserController();
//     if ($urlArr[1] == "create") {
//         $controler->index();
//     } else
//         $controler->index();
// } else {
//     echo "no where to go";
// }
>>>>>>> 330e41454b0e3e5b4cccce58fb68e7a4a258ffc4
