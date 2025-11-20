<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chính</title>
    <style>
        /* CSS để căn chỉnh nội dung */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .header-container {
            display: flex;
            /* Đặt các phần tử trong container theo hàng ngang */
            justify-content: flex-end;
            /* Căn các phần tử về bên phải */
            align-items: center;
            /* Căn giữa theo chiều dọc */
            padding: 10px;
            /* position: fixed; */
            top: 0px;
            margin-top: 100px;
            right: 0;
            left: 0;
            background-color: #fff;
            /* Màu nền của thanh header */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            /* Thêm hiệu ứng bóng cho thanh header */
        }

        .welcome-message {
            margin-right: 20px;
            /* Khoảng cách giữa dòng chào mừng và nút đăng xuất */
        }

        /* Nút đăng xuất */
        .logout-button {
            padding: 10px 20px;
            background-color: #f44336;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .logout-button:hover {
            background-color: #d32f2f;
        }

        /* Đoạn văn bản chào mừng và thông báo */
        p {
            text-align: center;
            /* Căn giữa nội dung văn bản */
            margin-top: 100px;
            /* Khoảng cách từ trên xuống sau header */
        }
    </style>
    <script>
        // JavaScript xác nhận khi nhấn nút đăng xuất
        function confirmLogout(event) {
            var isConfirmed = confirm("Bạn chắc chắn muốn đăng xuất không?");
            if (!isConfirmed) {
                event.preventDefault(); // Hủy bỏ hành động đăng xuất nếu người dùng không xác nhận
            }
        }
    </script>
</head>

<body>
    <!-- Container cho dòng chào mừng và nút đăng xuất -->
    <!-- <div class="header-container">
        <div class="welcome-message">
            <h2>Chào mừng <?php echo htmlspecialchars($_SESSION['ten_nguoi_dung']); ?>!</h2>
        </div>
        <!-- Nút đăng xuất -->
        <form action="logout.php" method="post" onsubmit="confirmLogout(event)">
            <button type="submit" class="logout-button">Đăng xuất</button>
        </form>
    </div> -->

</body>

</html>

<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">


<!-- Mirrored from themesbrand.com/velzon/html/master/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Oct 2024 07:29:52 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Dashboard | SHARK TRAVEL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />

    <!-- CSS -->
    <?php
    require_once "layouts/libs_css.php";
    ?>

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- HEADER -->
        <?php
        require_once "layouts/header.php";

        require_once "layouts/siderbar.php";
        ?>

        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col">

                            <div class="h-100">
                                <div class="row mb-3 pb-1">
                                    <div class="col-12">
                                        <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                            <div class="flex-grow-1">
                                                <h4 class="fs-16 mb-1">Xin chào, Admin!</h4>
                                                <p class="text-muted mb-0"></p>
                                            </div>
                                            <div class="mt-3 mt-lg-0">
                                                <form action="javascript:void(0);">
                                                    <div class="row g-3 mb-0 align-items-center">
                                                        <!--end col-->
                                                        <div class="col-auto">
                                                            <button type="button" class="btn btn-soft-info btn-icon waves-effect material-shadow-none waves-light layout-rightside-btn"><i class="ri-pulse-line"></i></button>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </form>
                                            </div>
                                        </div><!-- end card header -->
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->

                                <div class="row">
                                    <div class="col-xl-3 col-md-6">
                                        <!-- card -->
                                        <div class="card card-animate">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Doanh Thu</p>
                                                    </div>
                                                    <div class="flex-shrink-0">

                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-end justify-content-between mt-4">
                                                    <div>
                                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="<?= $tongTiens ?>">0</span>VND</h4>
                                                        <a href="#" class="text-decoration-underline">Xem</a>
                                                    </div>
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-success-subtle rounded fs-3">
                                                            <i class="bx bx-dollar-circle text-success"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->

                                    <div class="col-xl-3 col-md-6">
                                        <!-- card -->
                                        <div class="card card-animate">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Đơn hàng</p>
                                                    </div>
                                                    <div class="flex-shrink-0">

                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-end justify-content-between mt-4">
                                                    <div>
                                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="<?= $tongDonHang ?>">0</span></h4>
                                                        <a href="?act=don-hangs" class="text-decoration-underline">Xem tất cả</a>
                                                    </div>
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-info-subtle rounded fs-3">
                                                            <i class="bx bx-shopping-bag text-info"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->

                                    <div class="col-xl-3 col-md-6">
                                        <!-- card -->
                                        <div class="card card-animate">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Khách hàng</p>
                                                    </div>
                                                    <div class="flex-shrink-0">

                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-end justify-content-between mt-4">
                                                    <div>
                                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="<?= $tongNguoiDung ?>"></span></h4>
                                                        <a href="index.php?act=nguoi-dungs" class="text-decoration-underline">Xem tất cả</a>
                                                    </div>
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-warning-subtle rounded fs-3">
                                                            <i class="bx bx-user-circle text-warning"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->

                                    <div class="col-xl-3 col-md-6">
                                        <!-- card -->
                                        <div class="card card-animate">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Tổng số sản phẩm</p>
                                                    </div>
                                                    <div class="flex-shrink-0">

                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-end justify-content-between mt-4">
                                                    <div>
                                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="<?= $tongSanPham ?>"></span></h4>
                                                        <a href="?act=san-phams" class="text-decoration-underline">Xem tất cả</a>
                                                    </div>
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-primary-subtle rounded fs-3">
                                                            <i class="bx bx-package text-primary"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->

                                    <div class="col-xl-3 col-md-6">
                                        <!-- card -->
                                        <div class="card card-animate">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Tổng số lượng sản phẩm</p>
                                                    </div>
                                                    <div class="flex-shrink-0">

                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-end justify-content-between mt-4">
                                                    <div>
                                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="<?= $tongSoLuongSP ?>"></span></h4>
                                                        <a href="?act=san-phams" class="text-decoration-underline">Xem tất cả</a>
                                                    </div>
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-primary-subtle rounded fs-3">
                                                            <i class="bx bx-package text-primary"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->

                                    <div class="col-xl-3 col-md-6">
                                        <!-- card -->
                                        <div class="card card-animate">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Đơn Hàng Chưa Xử Lí</p>
                                                    </div>
                                                    <div class="flex-shrink-0">

                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-end justify-content-between mt-4">
                                                    <div>
                                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="<?= $donHangChuaXuLi ?>"></span></h4>
                                                        <a href="?act=don-hangs" class="text-decoration-underline">Xem tất cả</a>
                                                    </div>
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-primary-subtle rounded fs-3">
                                                            <i class="bx bx-package text-primary"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->

                                    <div class="col-xl-3 col-md-6">
                                        <!-- card -->
                                        <div class="card card-animate">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Số Lượng Sản Phẩm Hết Hàng</p>
                                                    </div>
                                                    <div class="flex-shrink-0">

                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-end justify-content-between mt-4">
                                                    <div>
                                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="<?= $tongSPHetHang ?>"></span></h4>
                                                        <a href="?act=san-phams" class="text-decoration-underline">Xem tất cả</a>
                                                    </div>
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-primary-subtle rounded fs-3">
                                                            <i class="bx bx-package text-primary"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->
                                    <div class="col-xl-3 col-md-6">
                                        <!-- card -->
                                        <div class="card card-animate">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Sản Phẩm Chất Lượng</p>
                                                    </div>
                                                    <div class="flex-shrink-0">

                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-end justify-content-between mt-4">
                                                    <div>
                                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="<?= $SanPhamChatLuong ?>"></span></h4>
                                                        <a href="?act=san-phams" class="text-decoration-underline">Xem tất cả</a>
                                                    </div>
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-primary-subtle rounded fs-3">
                                                            <i class="bx bx-package text-primary"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->


                                </div> <!-- end row-->

                                <!-- <div class="row">
                                    <div class="col-xl-8">
                                        <div class="card">
                                            <div class="card-header border-0 align-items-center d-flex">
                                                <h4 class="card-title mb-0 flex-grow-1">Revenue</h4>
                                                <div>
                                                    <button type="button" class="btn btn-soft-secondary material-shadow-none btn-sm">
                                                        ALL
                                                    </button>
                                                    <button type="button" class="btn btn-soft-secondary material-shadow-none btn-sm">
                                                        1M
                                                    </button>
                                                    <button type="button" class="btn btn-soft-secondary material-shadow-none btn-sm">
                                                        6M
                                                    </button>
                                                    <button type="button" class="btn btn-soft-primary material-shadow-none btn-sm">
                                                        1Y
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="card-header p-0 border-0 bg-light-subtle">
                                                <div class="row g-0 text-center">
                                                    <div class="col-6 col-sm-3">
                                                        <div class="p-3 border border-dashed border-start-0">
                                                            <h5 class="mb-1"><span class="counter-value" data-target="7585">0</span></h5>
                                                            <p class="text-muted mb-0">Orders</p>
                                                        </div>
                                                    </div>
                                                  
                                                    <div class="col-6 col-sm-3">
                                                        <div class="p-3 border border-dashed border-start-0">
                                                            <h5 class="mb-1">$<span class="counter-value" data-target="22.89">0</span>k</h5>
                                                            <p class="text-muted mb-0">Earnings</p>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-6 col-sm-3">
                                                        <div class="p-3 border border-dashed border-start-0">
                                                            <h5 class="mb-1"><span class="counter-value" data-target="367">0</span></h5>
                                                            <p class="text-muted mb-0">Refunds</p>
                                                        </div>
                                                    </div>
                                                  
                                                    <div class="col-6 col-sm-3">
                                                        <div class="p-3 border border-dashed border-start-0 border-end-0">
                                                            <h5 class="mb-1 text-success"><span class="counter-value" data-target="18.92">0</span>%</h5>
                                                            <p class="text-muted mb-0">Conversation Ratio</p>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="card-body p-0 pb-2">
                                                <div class="w-100">
                                                    <div id="customer_impression_charts" data-colors='["--vz-primary", "--vz-success", "--vz-danger"]' data-colors-minimal='["--vz-light", "--vz-primary", "--vz-info"]' data-colors-saas='["--vz-success", "--vz-info", "--vz-danger"]' data-colors-modern='["--vz-warning", "--vz-primary", "--vz-success"]' data-colors-interactive='["--vz-info", "--vz-primary", "--vz-danger"]' data-colors-creative='["--vz-warning", "--vz-primary", "--vz-danger"]' data-colors-corporate='["--vz-light", "--vz-primary", "--vz-secondary"]' data-colors-galaxy='["--vz-secondary", "--vz-primary", "--vz-primary-rgb, 0.50"]' data-colors-classic='["--vz-light", "--vz-primary", "--vz-secondary"]' data-colors-vintage='["--vz-success", "--vz-primary", "--vz-secondary"]' class="apex-charts" dir="ltr"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                               <div class="col-xl-4"> -->

                                <!-- <div class="card card-height-100">
                                            <div class="card-header align-items-center d-flex">
                                                <h4 class="card-title mb-0 flex-grow-1">Sales by Locations</h4>
                                                <div class="flex-shrink-0">
                                                    <button type="button" class="btn btn-soft-primary material-shadow-none btn-sm">
                                                        Export Report
                                                    </button>
                                                </div>
                                            </div>

                                            
                                            <div class="card-body">

                                                <div id="sales-by-locations" data-colors='["--vz-light", "--vz-success", "--vz-primary"]' data-colors-interactive='["--vz-light", "--vz-info", "--vz-primary"]' style="height: 269px" dir="ltr"></div>

                                                <div class="px-2 py-2 mt-1">
                                                    <p class="mb-1">VietNam <span class="float-end">75%</span></p>
                                                    <div class="progress mt-2" style="height: 6px;">
                                                        <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75"></div>
                                                    </div>

                                                    <p class="mt-3 mb-1">Greenland <span class="float-end">47%</span>
                                                    </p>
                                                    <div class="progress mt-2" style="height: 6px;">
                                                        <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 47%" aria-valuenow="47" aria-valuemin="0" aria-valuemax="47"></div>
                                                    </div>

                                                    <p class="mt-3 mb-1">Russia <span class="float-end">82%</span></p>
                                                    <div class="progress mt-2" style="height: 6px;">
                                                        <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="82"></div>
                                                    </div>
                                                </div>
                                            </div>
                                          
                                        </div>
                                        -->
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Sản Phảm Hot</h4>
                                        <div class="flex-shrink-0">
                                            <div class="dropdown card-header-dropdown">
                                                <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="fw-semibold text-uppercase fs-12">Sort by:
                                                    </span><span class="text-muted">Today<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Today</a>
                                                    <a class="dropdown-item" href="#">Yesterday</a>
                                                    <a class="dropdown-item" href="#">Last 7 Days</a>
                                                    <a class="dropdown-item" href="#">Last 30 Days</a>
                                                    <a class="dropdown-item" href="#">This Month</a>
                                                    <a class="dropdown-item" href="#">Last Month</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <div class="table-responsive table-card">
                                            <table class="table table-hover table-centered align-middle table-nowrap mb-0">
                                                <tbody>
                                                    <tr>
                                                        <?php
                                                        // Lặp qua từng sản phẩm và hiển thị dữ liệu
                                                        foreach ($topSP as $product) {
                                                        ?>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="avatar-sm bg-light rounded p-1 me-2">
                                                                        <!-- Thay đổi src của ảnh với giá trị từ cơ sở dữ liệu -->
                                                                        <img src="<?= $product['hinh_anh']; ?>" alt="" class="img-fluid d-block" />
                                                                    </div>
                                                                    <div>
                                                                        <h5 class="fs-14 my-1">
                                                                            <!-- Thay đổi tên sản phẩm -->
                                                                            <a href="apps-ecommerce-product-details.html" class="text-reset"><?= $product['ten_san_pham']; ?></a>
                                                                        </h5>
                                                                        <span class="text-muted"><?= $product['ngay_nhap']; ?></span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h5 class="fs-14 my-1 fw-normal">
                                                                    <!-- Thay đổi giá sản phẩm -->
                                                                    $<?php echo number_format($product['gia_ban'], 2); ?>
                                                                </h5>
                                                                <span class="text-muted">Price</span>
                                                            </td>
                                                            <td>
                                                                <h5 class="fs-14 my-1 fw-normal">
                                                                    <!-- Thay đổi số lượng sản phẩm -->
                                                                    <?= $product['so_luong_san_pham']; ?>
                                                                </h5>
                                                                <span class="text-muted">Stock</span>
                                                            </td>
                                                    </tr>
                                                <?php
                                                        }
                                                ?>

                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="align-items-center mt-4 pt-2 justify-content-between row text-center text-sm-start">
                                            <div class="col-sm">
                                                <div class="text-muted">
                                                    Showing <span class="fw-semibold">5</span> of <span class="fw-semibold">25</span> Results
                                                </div>
                                            </div>
                                            <div class="col-sm-auto  mt-3 mt-sm-0">
                                                <ul class="pagination pagination-separated pagination-sm mb-0 justify-content-center">
                                                    <li class="page-item disabled">
                                                        <a href="#" class="page-link">←</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="#" class="page-link">1</a>
                                                    </li>
                                                    <li class="page-item active">
                                                        <a href="#" class="page-link">2</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="#" class="page-link">3</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="#" class="page-link">→</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="card card-height-100">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Sản Phẩm Mới</h4>
                                        <div class="flex-shrink-0">
                                            <div class="dropdown card-header-dropdown">

                                            </div>
                                        </div>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div class="table-responsive table-card">
                                            <table class="table table-centered table-hover align-middle table-nowrap mb-0">
                                                <tbody>
                                                    <tr>
                                                        <?php

                                                        foreach ($topNew as $product) {
                                                        ?>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="avatar-sm bg-light rounded p-1 me-2">

                                                                        <img src="<?= $product['hinh_anh']; ?>" alt="" class="img-fluid d-block" />
                                                                    </div>
                                                                    <div>
                                                                        <h5 class="fs-14 my-1">

                                                                            <a href="apps-ecommerce-product-details.html" class="text-reset"><?= $product['ten_san_pham']; ?></a>
                                                                        </h5>
                                                                        <span class="text-muted"><?= $product['ngay_nhap']; ?></span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h5 class="fs-14 my-1 fw-normal">

                                                                    $<?php echo number_format($product['gia_ban'], 2); ?>
                                                                </h5>
                                                                <span class="text-muted">Price</span>
                                                            </td>
                                                            <td>
                                                                <h5 class="fs-14 my-1 fw-normal">

                                                                    <?= $product['so_luong_san_pham']; ?>
                                                                </h5>
                                                                <span class="text-muted">Stock</span>
                                                            </td>
                                                    </tr>
                                                <?php
                                                        }
                                                ?>
                                                </tr><!-- end -->

                                                </tbody>
                                            </table><!-- end table -->
                                        </div>

                                        <div class="align-items-center mt-4 pt-2 justify-content-between row text-center text-sm-start">
                                            <div class="col-sm">
                                                <div class="text-muted">
                                                    Showing <span class="fw-semibold">5</span> of <span class="fw-semibold">25</span> Results
                                                </div>
                                            </div>
                                            <div class="col-sm-auto  mt-3 mt-sm-0">
                                                <ul class="pagination pagination-separated pagination-sm mb-0 justify-content-center">
                                                    <li class="page-item disabled">
                                                        <a href="#" class="page-link">←</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="#" class="page-link">1</a>
                                                    </li>
                                                    <li class="page-item active">
                                                        <a href="#" class="page-link">2</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="#" class="page-link">3</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="#" class="page-link">→</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div> <!-- .card-body-->
                                </div> <!-- .card-->
                            </div> <!-- .col-->
                        </div> <!-- end row-->

                        <!-- <div class="row">
                            <div class="col-xl-4">
                                <div class="card card-height-100">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Store Visits by Source</h4>
                                        <div class="flex-shrink-0">
                                            <div class="dropdown card-header-dropdown">
                                                <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="text-muted">Report<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Download Report</a>
                                                    <a class="dropdown-item" href="#">Export</a>
                                                    <a class="dropdown-item" href="#">Import</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <div id="store-visits-source" data-colors='["--vz-primary", "--vz-success", "--vz-warning", "--vz-danger", "--vz-info"]' data-colors-minimal='["--vz-primary", "--vz-primary-rgb, 0.85", "--vz-primary-rgb, 0.70", "--vz-primary-rgb, 0.60", "--vz-primary-rgb, 0.45"]' data-colors-interactive='["--vz-primary", "--vz-primary-rgb, 0.85", "--vz-primary-rgb, 0.70", "--vz-primary-rgb, 0.60", "--vz-primary-rgb, 0.45"]' data-colors-galaxy='["--vz-primary", "--vz-primary-rgb, 0.85", "--vz-primary-rgb, 0.70", "--vz-primary-rgb, 0.60", "--vz-primary-rgb, 0.45"]' class="apex-charts" dir="ltr"></div>
                                    </div>
                                </div> 
                            </div>

                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Recent Orders</h4>
                                        <div class="flex-shrink-0">
                                            <button type="button" class="btn btn-soft-info btn-sm material-shadow-none">
                                                <i class="ri-file-list-3-line align-middle"></i> Generate Report
                                            </button>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <div class="table-responsive table-card">
                                            <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                                <thead class="text-muted table-light">
                                                    <tr>
                                                        <th scope="col">Order ID</th>
                                                        <th scope="col">Customer</th>
                                                        <th scope="col">Product</th>
                                                        <th scope="col">Amount</th>
                                                        <th scope="col">Vendor</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Rating</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <a href="apps-ecommerce-order-details.html" class="fw-medium link-primary">#VZ2112</a>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-xs rounded-circle material-shadow" />
                                                                </div>
                                                                <div class="flex-grow-1">Alex Smith</div>
                                                            </div>
                                                        </td>
                                                        <td>Clothes</td>
                                                        <td>
                                                            <span class="text-success">$109.00</span>
                                                        </td>
                                                        <td>Zoetic Fashion</td>
                                                        <td>
                                                            <span class="badge bg-success-subtle text-success">Paid</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="fs-14 fw-medium mb-0">5.0<span class="text-muted fs-11 ms-1">(61 votes)</span></h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="apps-ecommerce-order-details.html" class="fw-medium link-primary">#VZ2111</a>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-xs rounded-circle material-shadow" />
                                                                </div>
                                                                <div class="flex-grow-1">Jansh Brown</div>
                                                            </div>
                                                        </td>
                                                        <td>Kitchen Storage</td>
                                                        <td>
                                                            <span class="text-success">$149.00</span>
                                                        </td>
                                                        <td>Micro Design</td>
                                                        <td>
                                                            <span class="badge bg-warning-subtle text-warning">Pending</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="fs-14 fw-medium mb-0">4.5<span class="text-muted fs-11 ms-1">(61 votes)</span></h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="apps-ecommerce-order-details.html" class="fw-medium link-primary">#VZ2109</a>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-xs rounded-circle material-shadow" />
                                                                </div>
                                                                <div class="flex-grow-1">Ayaan Bowen</div>
                                                            </div>
                                                        </td>
                                                        <td>Bike Accessories</td>
                                                        <td>
                                                            <span class="text-success">$215.00</span>
                                                        </td>
                                                        <td>Nesta Technologies</td>
                                                        <td>
                                                            <span class="badge bg-success-subtle text-success">Paid</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="fs-14 fw-medium mb-0">4.9<span class="text-muted fs-11 ms-1">(89 votes)</span></h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="apps-ecommerce-order-details.html" class="fw-medium link-primary">#VZ2108</a>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-xs rounded-circle material-shadow" />
                                                                </div>
                                                                <div class="flex-grow-1">Prezy Mark</div>
                                                            </div>
                                                        </td>
                                                        <td>Furniture</td>
                                                        <td>
                                                            <span class="text-success">$199.00</span>
                                                        </td>
                                                        <td>Syntyce Solutions</td>
                                                        <td>
                                                            <span class="badge bg-danger-subtle text-danger">Unpaid</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="fs-14 fw-medium mb-0">4.3<span class="text-muted fs-11 ms-1">(47 votes)</span></h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="apps-ecommerce-order-details.html" class="fw-medium link-primary">#VZ2107</a>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-circle material-shadow" />
                                                                </div>
                                                                <div class="flex-grow-1">Vihan Hudda</div>
                                                            </div>
                                                        </td>
                                                        <td>Bags and Wallets</td>
                                                        <td>
                                                            <span class="text-success">$330.00</span>
                                                        </td>
                                                        <td>iTest Factory</td>
                                                        <td>
                                                            <span class="badge bg-success-subtle text-success">Paid</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="fs-14 fw-medium mb-0">4.7<span class="text-muted fs-11 ms-1">(161 votes)</span></h5>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> 
                            </div> 
                        </div> -->

                    </div> <!-- end .h-100-->

                </div> <!-- end col -->
            </div>

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> © Velzon.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Design & Develop by Themesbrand
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </div>
    <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <div class="customizer-setting d-none d-md-block">
        <div class="btn-info rounded-pill shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
            <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <?php
    require_once "layouts/libs_js.php";
    ?>
    +
</body>

</html>