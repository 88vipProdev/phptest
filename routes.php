<?php
require_once "./core/app.php";

$routes = [
    // Tuyến đường cho trang chủ admin
    "admin" => "admin\Controllers\HomeController@index",
    
    // Tuyến đường cho trang chủ người dùng
    "user" => "user\Controllers\HomeController@index",
    
    // Thêm các tuyến đường khác ở đây
    "Register"=>"Register\Controllers\RegisterController@index",

    "Login" =>"Login\Controllers\LoginController&index",
];

return $routes;
