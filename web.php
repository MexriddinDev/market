<?php
//use Controller\userController;
//use Controller\storeController;
//use Controller\adminsController;
//
//
//require "Router.php";
//
//// Router obyektini yaratish
//$router = new Router();
//
//
//$router->get('/', function() { require "views/home.php"; });
//$router->get('/login', function() { require "views/login.php"; });
//$router->get('/admin', function() { require "views/admin/admin-panel.php"; });
//$router->get('/management', function() { require "views/admin/user-management.php"; });
//$router->get('/active-monitoring', function() { require "views/admin/activity-monitoring.php"; });
//$router->get('/settings', function() { require "views/admin/settings.php"; });
//$router->get('/dashboard/debt', function() { require "views/dashboard/debt.php"; });
//$router->get('/about', function() { require "views/about.php"; });
//$router->get('/buy', function() { require "views/buy.php"; });
//$router->get('/buypage', function() { require "views/buypage.php"; });
//$router->get('/products', function() { require "views/dashboard/products.php"; });
//$router->get('/dashboard', function() { require "views/dashboard/dashboard.php"; });
//$router->get('/main', function() { require "views/main.php"; });
//
//
//
//
//// POST marshrutlar
//$router->post('/saveProduct', function() {
//    $controller = new storeController();
//    $controller->saveProduct();
//});
//
//$router->post('/login', function() {
//    $controller = new userController();
//    $controller->login();
//});
//
//$router->post('/deleteProduct', function() {
//    $controller = new storeController();
//    $controller->deleteProduct();
//});
//
//$router->post('/updateProduct', function() {
//    $controller = new storeController();
//    $controller->updateProduct();
//});
//
//$router->post('/admin/login', function() {
//    $controller = new adminsController();
//    $controller->login();
//});














































































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
    require "views/home.php";});

$router->get('/login', function() {
    require "views/login.php";});

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

$router->post('/deleteProduct', function() {
    $controller=new Controller\storeController();
    $controller->deleteProduct();
});

$router->post('/updateProduct', function() {
    $controller = new Controller\storeController();
    $controller->updateProduct();
});


$router->get('/admin', function() {
    require "views/admin/login.php";
});

$router->post('/admin', function() {
    $controller=new Controller\adminsController();
    $controller->login();
});

$router->get('/dashboard/debt', function() {
    require "views/dashboard/debt.php";
});
//
//
$router->post('/dashboard/debt', function() {
    $controller=new Controller\debtController();
    $controller->debt();
});









//$router->post('/dashboard/debt', function() {
//    $controller = new Controller\debtController();
//    $controller->debt();
//});




















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

//$router->get('/delete', function() {
//    require
//})
//
//
//
//
//
//
//
////$router->get('/customer', function() {
////    require "views/dashboard/customers.php";
////});
////$router->get('/inventory', function() {
////    require "views/dashboard/inventory.php";
////});
////$router->get('/order', function() {
////    require "views/dashboard/orders.php";
////});
////$router->get('/suppliers', function() {
////    require "views/dashboard/suppliers.php";
////});
////$router->get('/setting', function() {
////    require "views/dashboard/settings.php";
////});
//
