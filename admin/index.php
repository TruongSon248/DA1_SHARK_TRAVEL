<?php


// Require file Config
require_once '../config/env.php'; // Khai báo biến môi trường
require_once '../config/database.php'; // Hàm hỗ trợ

// Require toàn bộ file Controllers
require_once 'controllers/DanhMucController.php';
require_once 'controllers/DashboardController.php';

// Require toàn bộ file Models
require_once 'models/DanhMuc.php';


// Route
$act = $_GET['act'] ?? '/';


match ($act) {
    // Dashboards
    '/' => (new DashboardController())->index(),
    //Quản lý danh mục tour
    'danh-mucs'                 => (new DanhMucController())->index(),
    'form-them-danh-muc'        => (new DanhMucController())->create(),
    'them-danh-muc'             => (new DanhMucController())->store(),
    'form-sua-danh-muc'         => (new DanhMucController())->edit(),
    'sua-danh-muc'              => (new DanhMucController())->upload(),
    'xoa-danh-muc'              => (new DanhMucController())->destroy(),
    
};
?>


