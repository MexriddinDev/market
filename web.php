<?php
//require 'views/productAdd.php';
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
$router->get('/about', function() {
    require "views/about.php";
});
$router->get('/buy', function() {
    require "views/buy.php";
});
$router->get('/buypage', function() {
    require "views/buypage.php";
});
$router->get('/productAdd', function() {
    require "views/productAdd.php";
});
$router->get('/dashboard', function() {
    require "views/dashboard.php";
});
$router->get('/main', function() {
    require "views/main.php";
});
$router->get('/customer', function() {
    require "views/dashboard/customers.php";
});
$router->get('/inventory', function() {
    require "views/dashboard/inventory.php";
});
$router->get('/order', function() {
    require "views/dashboard/orders.php";
});
$router->get('/suppliers', function() {
    require "views/dashboard/suppliers.php";
});
$router->get('/setting', function() {
    require "views/dashboard/settings.php";
});