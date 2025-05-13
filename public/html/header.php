<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Foody - Organic Food Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="/workspace/minimart/public/img/logo/icons8-supermarket-64.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Lora:wght@600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/workspace/minimart/public/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/workspace/minimart/public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/workspace/minimart/public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="/workspace/minimart/public/css/header.css">
    <link rel="stylesheet" href="/workspace/minimart/public/css/notify.css">
    <link href="/workspace/minimart/public/css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="/workspace/minimart/public/css/listStyle.css">
</head>

<style>
    /* notify logout */
    .modals__footer a {
        text-decoration: none;
    }

    .modals__inner {
        width: 450px;
        background-color: #fff;
        border-radius: 5px;
        overflow: hidden;
        animation: showModal linear 0.2s;
        position: relative;
        margin: 200px auto;
    }
</style>

<body>

    <!-- Spinner Start -->
    <!-- <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status"></div>
    </div> -->
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-map-marker-alt me-2"></i>123 Street, New York, USA</small>
                <small class="ms-4"><i class="fa fa-envelope me-2"></i>info@example.com</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small>Follow us:</small>
                <a class="text-body ms-3" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-twitter"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="<?php echo BASE_URL ?>Home/" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="fw-bold text-primary m-0">F<span class="text-secondary">oo</span>dy</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- tim kiếm sản phẩm -->
            <div class="search">
                <form action="<?php echo SEARCH_URL ?>searchProduct" method="post">
                    <input type="text" placeholder="Tìm Kiếm Sản Phẩm" name="search" class="inputSearch"
                        style=" min-width: 320px; padding: 10px; margin-right: 10px; border: none; font-size: 17px; border-radius: 4px; border: none; outline: none;">
                    <button type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </div>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="<?php echo BASE_URL ?>Home/" class="nav-item nav-link active">Trang Chủ</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Sản Phẩm</a>
                        <div class="dropdown-menu m-0">
                            <a href="<?php echo BASE_URL ?>product/vegetable#" class="dropdown-item">Rau,
                                Củ</a>
                            <a href="<?php echo BASE_URL ?>product/fresh#" class="dropdown-item">Thịt</a>
                            <a href="<?php echo BASE_URL ?>product/fruit#" class="dropdown-item">Trái
                                cây</a>
                        </div>
                    </div>
                    <a href="<?php echo BASE_URL ?>Cart/productCart" class="nav-item nav-link">Giỏ Hàng</a>
                    <a href="<?php echo BASE_URL ?>Blog/news" class="nav-item nav-link">Bài Đăng</a>

                    <!-- user account -->
                    <div class="nav-item dropdown user_account">
                        <!-- <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a> -->
                        <?php if (isset($_SESSION['IDKH'])) {
                            ?>

                            <a href="<?php echo BASE_URL ?>login/accLogin" class="nav-link account">
                                <div class="btn-sm-square bg-white rounded-circle ms-3" href="">
                                    <img class="btn-sm-square-img" src="<?php echo $_SESSION['IMG'] ?>" alt="">
                                </div>
                                <span class="username"><?php echo $_SESSION['TENTAIKHOAN'] ?></span>
                            </a>

                            <?php
                        } else {
                            ?>

                            <a href="<?php echo BASE_URL ?>login/accLogin" class="nav-link account">
                                <div class="btn-sm-square bg-white rounded-circle ms-3" href="">
                                    <img class="btn-sm-square-img"
                                        src="https://cdn.pixabay.com/photo/2017/11/10/05/48/user-2935527_640.png" alt="">
                                </div>
                                <span class="username">Đăng Nhập</span>
                            </a>

                            <?php
                        } ?>
                        <div class="dropdown-menu m-0 menu-account">
                            <a href="<?php echo BASE_URL ?>login/accLogin" class="dropdown-item">Đăng
                                Nhập</a>

                            <button class="dropdown-item logout__click">Đăng
                                Xuất</button>

                            <a href="<?php echo BASE_URL ?>register/accRegister" class="dropdown-item">Tạo
                                Tài Khoản Mới</a>

                            <?php
                            if (isset($_SESSION['IDKH'])) {
                                ?>
                                <a href="<?php echo BASE_URL . 'client/infoClient/' . $_SESSION['IDKH'] ?>"
                                    class="dropdown-item">Cài Đặt</a>
                                <?php
                            } else {
                                ?>
                                <button class="btn__setting dropdown-item">Cài Đặt</button>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- model -->
    <div class="box"></div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/workspace/minimart/public/lib/wow/wow.min.js"></script>
    <script src="/workspace/minimart/public/lib/easing/easing.min.js"></script>
    <script src="/workspace/minimart/public/lib/waypoints/waypoints.min.js"></script>
    <script src="/workspace/minimart/public/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="/workspace/minimart/public/js/main.js"></script>
    <script src="/workspace/minimart/public/js/notifys.js"></script>

    <?php
    if (isset($_SESSION['IDKH'])) {
        ?>
        <script>

            document.querySelector(".logout__click").onclick = () => {
                notify({
                    heading: "Đăng xuất",
                    notify: "Bạn chắc chắn muốn đăng xuất tài khoản này.",
                    link: "login/logout",
                    btnChose: "Xác nhận"
                });
            };

        </script>
        <?php
    } else {
        ?>
        <script>
            const notifyLogin = {
                heading: "Thông báo",
                notify: "Bạn chưa đăng nhập tài khoản.",
                link: "login/accLogin",
                btnChose: "Đăng nhập"
            };

            document.querySelector(".logout__click").onclick = () => {
                notify(notifyLogin);
            };

            document.querySelector(".btn__setting").onclick = () => {
                notify(notifyLogin);
            };

        </script>
        <?php
    }
    ?>

</body>

</html>