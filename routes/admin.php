<?php

use Quang\Asm\Controllers\Admin\DashboardController;
use Quang\Asm\Controllers\Admin\ProductController;

$router->mount('/admin', function () use ($router) {

    $router->get('/', DashboardController::class . '@dashboard');
// CRUD USER
    $router->mount('/products', function () use ($router) {
        $router->get('/',               ProductController::class . '@index');  // Danh sách
        $router->get('/create',         ProductController::class . '@create'); // Show form thêm mới
        $router->post('/store',         ProductController::class . '@store');  // Lưu mới vào DB
        $router->get('/{id}/show',      ProductController::class . '@show');   // Xem chi tiết
        $router->get('/{id}/edit',      ProductController::class . '@edit');   // Show form sửa
        $router->post('/{id}/update',   ProductController::class . '@update'); // Lưu sửa vào DB
        $router->get('/{id}/delete',    ProductController::class . '@delete'); // Xóa
    });

});

// $router->get('/admin/users/',               ProductController::class . '@index');
// $router->get('/admin/users/create',         ProductController::class . '@create');
// $router->post('/admin/users/store',         ProductController::class . '@store');
// $router->get('/admin/users/{id}',           ProductController::class . '@show');
// $router->get('/admin/users/{id}/edit',      ProductController::class . '@edit');
// $router->post('/admin/users/{id}/update',   ProductController::class . '@update');
// $router->post('/admin/users/{id}/delete',   ProductController::class . '@delete');