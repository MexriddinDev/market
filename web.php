<?php
//require 'views/productAdd.php';
use Controller\userController;

require "Router.php";
require "Controller/storeController.php";


$router = new Router();


$router->post('/saveProduct', function() {
    $controller = new Controller\storeController();
    $controller->saveProduct();
});
$router->get('/', function() {
    require "views/home.php";

});
$router->get('/login', function() {
    require "views/login.php";
});
$router->post('/login', function() {
    $controller=new Controller\userController();
    $controller->login();
});

$router->get('/admin', function() {
    require "views/admin/admin-panel.php";
});

$router->get('/management', function() {
    require "views/admin/user-management.php";
});

$router->get('/active-monitoring', function() {
    require "views/admin/activity-monitoring.php";
});

$router->get('/settings', function() {
    require "views/admin/settings.php";
});















$router->get('/about', function() {
    require "views/about.php";
});
$router->get('/buy', function() {
    require "views/buy.php";
});
$router->get('/buypage', function() {
    require "views/buypage.php";
});
$router->get('/products', function() {
    require "views/dashboard/products.php";
});
$router->get('/dashboard', function() {
    require "views/dashboard/dashboard.php";
});
$router->get('/main', function() {
    require "views/main.php";
});

$router->get('/products', function() {
    require "views/dashboard/products.php";
});







//$router->get('/customer', function() {
//    require "views/dashboard/customers.php";
//});
//$router->get('/inventory', function() {
//    require "views/dashboard/inventory.php";
//});
//$router->get('/order', function() {
//    require "views/dashboard/orders.php";
//});
//$router->get('/suppliers', function() {
//    require "views/dashboard/suppliers.php";
//});
//$router->get('/setting', function() {
//    require "views/dashboard/settings.php";
//});

