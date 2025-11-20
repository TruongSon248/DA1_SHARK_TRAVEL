<?php
class DashboardController {
    public $modelDonHang;
    public $modelNguoiDung;
    public $modelSanPham;

    public function __construct() {


        $this->modelSanPham = new DanhMuc();
    }

    public function index() {


        require_once "./views/dashboard.php";
    }

}