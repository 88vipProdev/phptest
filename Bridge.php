<?php
// Bridge.php

// Đọc URL hiện tại
$currentUrl = $_SERVER['REQUEST_URI'];

// Tìm kiếm tuyến đường trong tệp cấu hình định tuyến
$routes = require 'routes.php';

if (isset($routes[$currentUrl])) {
    // Tách tên controller và action từ chuỗi tuyến đường
    list($controllerName, $action) = explode('@', $routes[$currentUrl]);
    
    // Tạo đối tượng controller và gọi action tương ứng
    $controllerClass = 'Travelagency\\'.$controllerName;
    $controller = new $controllerClass();
    $controller->$action();
} else {
    // Xử lý lỗi hoặc hiển thị trang 404 tùy ý
}
