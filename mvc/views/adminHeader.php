<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/workspace/minimart/public/css/styleAdmin.css">
    </link>
</head>

<body>
    <?php
    //    session_start();
//    include_once "./config/dbconnect.php";
    
    ?>

    <!-- nav -->
    <!-- nav -->
    <nav class="navbar navbar-expand-lg navbar-light px-5" style="background-color: #34881b;">

        <a class="navbar-brand ml-5" href="./index.php">
            <img src="/workspace/minimart/public/images/logo.png" width="80" height="80" alt="Swiss Collection">
        </a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>

        <div class="user-cart">
            <?php
            if (isset($_SESSION['user_id'])) {
                ?>
                <a href="" style="text-decoration:none;">
                    <i class="fa fa-user mr-5" style="font-size:30px; color:#fff;" aria-hidden="true"></i>
                </a>
                <?php
            } else {
                ?>
                <a href="<?php echo BASE_URL ?>/admin/loginadmin" style="text-decoration:none;">
                    <i class="fa fa-sign-in mr-5" style="font-size:30px; color:#fff;" aria-hidden="true"></i>
                </a>

                <?php
            } ?>
        </div>
    </nav>

    <div class="sidebar" id="mySidebar">
        <div class="side-header">
            <img src="/workspace/minimart/public/images/logo.png" width="120" height="120" alt="Swiss Collection">
            <h5 style="margin-top:10px;">Xin chào, Admin</h5>
        </div>

        <hr style="border:1px solid; background-color:#8a7b6d; border-color:#3B3131;">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a href="<?php echo BASE_URL ?>admin/homeadmin"><i class="fa fa-home"></i>Tổng quan</a>
        <a href="<?php echo BASE_URL ?>admin/users" onclick="showCustomers()"><i class="fa fa-users"></i> Khách hàng</a>
        <a href="<?php echo BASE_URL ?>admin/categories" onclick="showCategory()"><i class="fa fa-th-large"></i> Danh
            mục</a>


        <a href="<?php echo BASE_URL ?>admin/products" onclick="showProductItems()"><i class="fa fa-th"></i> Sản
            phẩm</a>
        <!-- <a href="#orders" onclick="showOrders()"><i class="fa fa-list"></i> Orders</a> -->
        <a href="<?php echo BASE_URL ?>admin/statistical"><i class="fa fa-th-large"></i> Thống kê</a>
        <a href="<?php echo BASE_URL ?>admin/adorders"><i class="fa fa-list"></i> QL đơn hàng</a>
        <a href="<?php echo BASE_URL ?>admin/comments"><i class="fa fa-list"></i> QL bình luận</a>
        <a href="<?php echo BASE_URL ?>admin/loginadmin" class="d-block py-2" style="color: #fff;">
            <i class="fa fa-sign-out mr-2"></i>Đăng xuất
        </a>
        <!---->
    </div>

    <div id="main">
        <button class="openbtn" onclick="openNav()"><i class="fa fa-home"></i></button>
    </div>
    <div id="main-content" class="container allContent-section py-4">
        <?php require_once "./mvc/views/pages/" . $data["view"] . ".php"; ?>
    </div>


    <script type="text/javascript" src="/workspace/minimart/public/js/ajaxWork.js"></script>
    <script type="text/javascript" src="/workspace/minimart/public/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

</body>

</html>