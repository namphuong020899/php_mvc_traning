<?php
$_CONTROLLER_USER = "FrontEnd";
$_CONTROLLER_ADMIN = "BackEnd";

$routes['defaultController'] = 'home';
/**
 * $routes['name router'] = 'Name controller/method';
 * $routes['chi-tiet-(.+).html'] = 'Product/detail/$1'; chi-tiet-id
 */

/**
 * Route User
 */
$routes['san-pham'] = "{$_CONTROLLER_USER}/Product/index";
$routes['chi-tiet/.+-(\d+).html'] = "{$_CONTROLLER_USER}/Product/show/$1"; // chi-tiet/slug-id

/**
 * Route Admin
 */
$routes['admin/dashboard'] = "{$_CONTROLLER_ADMIN}/Dashboard/index";
$routes['admin/products'] = "{$_CONTROLLER_ADMIN}/Products/index";