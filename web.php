<?php

require "Router.php";
require "Controller/storeController.php";
require "Controller/debtController.php";

// Router obyektini yaratish
$router = new Router();

// GET marshrutlar
$router->get('/', fn() => require "views/dashboard/home.php");
$router->get('/login', fn() => require "views/dashboard/login.php");
$router->get('/admin', fn() => require "views/admin/admin-panel.php");
$router->get('/management', fn() => require "views/admin/user-management.php");
$router->get('/active-monitoring', fn() => require "views/admin/activity-monitoring.php");
$router->get('/settings', fn() => require "views/admin/settings.php");
$router->get('/dashboard/debt', fn() => require "views/dashboard/debt.php");
$router->get('/about', fn() => require "views/dashboard/about.php");
$router->get('/buy', fn() => require "views/dashboard/buy.php");
$router->get('/buypage', fn() => require "views/dashboard/buypage.php");
$router->get('/products', fn() => require "views/dashboard/products.php");
$router->get('/dashboard', fn() => require "views/dashboard/dashboard.php");
$router->get('/main', fn() => require "views/main.php");
$router->get('/admin', fn() => require "views/admin/login.php");












// POST marshrutlar
$router->post('/saveProduct', fn() => (new Controller\storeController())->saveProduct());
$router->post('/login', fn() => (new Controller\userController())->login());
$router->post('/deleteProduct', fn() => (new Controller\storeController())->deleteProduct());
$router->post('/updateProduct', fn() => (new Controller\storeController())->updateProduct());
$router->post('/admin', fn() => (new Controller\adminsController())->login());
$router->post('/dashboard/debt', fn() => (new Controller\debtController())->debt());
$router->post('/dashboard/debtUpdate', fn() => (new Controller\debtController())->debtUpdate());
$router->post('/dashboard/debtDelete', fn() => (new Controller\debtController())->debtDelete());