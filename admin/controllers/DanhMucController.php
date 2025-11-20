<?php

class DanhMucController
{
  //Kết nối đến file model
  public $modelDanhMuc;

  public function __construct()
  {
    $this->modelDanhMuc = new DanhMuc();
  }
  //Hàm hiển thị ds
  public function index()
  {
    //Lấy ra dữ liệu danh mục
    $danhMucs = $this->modelDanhMuc->getAll();

    //Đưa dữ liệu ra view
    require_once './views/danhmuc/list_danh_muc.php';
  }

  //Hàm hiển thị form thêm
  public function create()
  {
    require_once './views/danhmuc/create_danh_muc.php';
  }

  //Hàm xử lý thêm vào CSDL
  public function store()
  {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      $ten = $_POST['ten'];
      $mo_ta = $_POST['mo_ta'];
      $loai = $_POST['loai'];
    }

    // Validate
    $errors = [];

    if (empty($ten)) {
      $errors['ten'] = 'Tên là bắt buộc';
    }
    if (empty($mo_ta)) {
      $errors['mo_ta'] = 'Mô tả là bắt buộc';
    }


    $allowedEnum = ['trong_nuoc', 'quoc_te', 'theo_yeu_cau'];
    if (empty($loai) || !in_array($loai, $allowedEnum)) {
      $errors['loai'] = 'Loại tour không hợp lệ';
    }

    // Nếu không có lỗi → thêm vào DB
    if (empty($errors)) {

      $this->modelDanhMuc->postData($ten, $mo_ta, $loai);

      unset($_SESSION['errors']);
      header('Location: ?act=danh-mucs');
      exit();
    } else {
      $_SESSION['errors'] = $errors;
      header('Location: ?act=form-them-danh-muc');
      exit();
    }
  }

  //Hàm xử lý sửa
  public function edit()
  {
    //Lấy id
    $id = $_GET['id'];
    // Lấy thông tin chi tiết của danh mục
    $danhMuc = $this->modelDanhMuc->getDetailData($id);

    // Đổ dữ liệu ra form
    require_once './views/danhmuc/edit_danh_muc.php';
  }


  //Hàm xử lý cập nhật dữ liệu vào CSDL
  public function upload()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      $id   = $_POST['id'];
      $ten  = $_POST['ten'];
      $mo_ta = $_POST['mo_ta'];
      $loai = $_POST['loai'];
    }

    // Validate
    $errors = [];

    if (empty($ten)) {
      $errors['ten'] = 'Tên danh mục là bắt buộc';
    }
    if (empty($loai)) {
      $errors['loai'] = 'Loại tour là bắt buộc';
    }
    if (empty($mo_ta)) {
      $errors['mo_ta'] = 'Mô tả là bắt buộc';
    }

    if (empty($errors)) {

      $this->modelDanhMuc->updateData($id, $ten, $mo_ta, $loai);

      unset($_SESSION['errors']);
      header('Location: ?act=danh-mucs');
      exit();
    } else {
      $_SESSION['errors'] = $errors;
      header("Location: ?act=form-sua-danh-muc&id=" . $id);
      exit();
    }
  }


  //Hàm xóa dữ liệu vào CSDL
  public function destroy()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $id = $_POST['danh_muc_id'];

      //Xóa danh mục
      $this->modelDanhMuc->deleteData($id);
      header('Location: ?act=danh-mucs');
      exit();
    }
  }
}
