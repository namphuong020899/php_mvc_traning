<?php
$_CONTROLLER_USER = "FrontEnd";
$_CONTROLLER_ADMIN = "BackEnd";

// $routes['defaultController'] = "{$_CONTROLLER_USER}/HomeController/index";
/**
 * $routes['chi-tiet-(.+).html'] = 'Product/detail/$1'; chi-tiet-id
 * $routes['name router'] = 'Name controller/method';
 */

/**
 * Route User
 */
$routes['/'] = "{$_CONTROLLER_USER}/Home/index";
$routes['san-pham'] = "{$_CONTROLLER_USER}/Product/index";
$routes['chi-tiet/.+-(\d+).html'] = "{$_CONTROLLER_USER}/Product/show/$1"; // chi-tiet/slug-id

/**
 * Route Admin
 */
$routes['admin/dashboard'] = "{$_CONTROLLER_ADMIN}/Dashboard/index";
$routes['admin/products'] = "{$_CONTROLLER_ADMIN}/Products/index";
