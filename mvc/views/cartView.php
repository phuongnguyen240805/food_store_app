<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>

    <!-- Favicon -->
    <link href="/workspace/minimart/public/img/logo/icons8-supermarket-64.png" rel="icon">

    <!-- Google Font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="/workspace/minimart/public/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/workspace/minimart/public/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/workspace/minimart/public/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="/workspace/minimart/public/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="/workspace/minimart/public/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="/workspace/minimart/public/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/workspace/minimart/public/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/workspace/minimart/public/css/cart.css" type="text/css">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="/workspace/minimart/public/css/styles.css">
</head>
<style>
    body {
        margin: 20px;
    }

    form {
        /*  width: 100%; */
        margin: auto;
    }

    label {
        display: block;
        margin: 10px 0 5px;
    }

    .btn-pay {
        width: 100%;
        padding: 10px;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
</style>

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <?php
    include("./public/html/header.php");
    ?>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg"
        style="background: url(/workspace/minimart/public/img/blog/details-hero.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2 style="color: #ffffff; font-size: 46px;">Giỏ Hàng Của Bạn</h2>
                        <div class="breadcrumb__option">
                            <a href="<?php echo BASE_URL ?>Home/">Home</a>
                            <span style="color: #ffffff;">Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Sản Phẩm</th>
                                    <th>Giá</th>
                                    <th>Số Lượng</th>
                                    <th>Thành Tiền</th>
                                </tr>
                            </thead>

                            <!-- product cart -->
                            <tbody>
                                <?php
                                $totalPay = 0;
                                if (isset($_SESSION['cart'])) {
                                    $cart = $_SESSION['cart'];
                                    foreach ($cart as $key => $rowCart) {
                                        $total = $rowCart['GIASP'] * $rowCart['SOLUONG'];
                                        $totalPay += $total;
                                        ?>
                                        <tr class="cart__item" data-product-id="<?php echo $rowCart['IDSP'] ?>">
                                            <td class="shoping__cart__item">
                                                <a
                                                    href="<?php echo BASE_URL . 'detail/productDetail/' . $rowCart['IDSP'] . '/' . $rowCart['IDDM'] ?>">
                                                    <img src="<?php echo $rowCart['IMG'] ?>" alt=""
                                                        style="width: 100px; height: 100px;">
                                                    <h5><?php echo $rowCart['TENSP'] ?></h5>
                                                </a>
                                            </td>
                                            <td class="shoping__cart__price">
                                                <?php echo number_format($rowCart['GIASP'], 0) . " vnđ" ?>
                                            </td>
                                            <!-- so lượng sản phẩm -->
                                            <td class="shoping__cart__quantity">
                                                <div class="quantity">
                                                    <div class="pro-qty" style="background-color: transparent;">
                                                        <span class="qty-btn minus"><i class="fas fa-minus"></i></span>

                                                        <input type="text" class="qty-input"
                                                            data-id="<?php echo $rowCart['IDSP']; ?>"
                                                            value="<?php echo $rowCart['SOLUONG'] ?>" min="1"
                                                            style="border: none; outline: none;">

                                                        <span class="qty-btn plus"><i class="fas fa-plus"></i></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="shoping__cart__total" id="price_<?php echo $rowCart['IDSP']; ?>">
                                                <?php echo number_format($total, 0) . " vnđ" ?>
                                            </td>
                                            <td class="shoping__cart__item__close">
                                                <button type="button" class="btn__product__clear"
                                                    data-id="<?php echo $rowCart['IDSP']; ?>"><span><i
                                                            class="icon__clear fa-regular fa-circle-xmark"></i></span></button>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }
                                ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="<?php echo BASE_URL . 'Home/#tab-1' ?>" class="primary-btn cart-btn">Tiếp
                            tục
                            mua sắm</a>
                        <!-- <input type="submit" value="Cập nhập giỏ hàng" name="update_cart" id="update_cart"
                            class="primary-btn cart-btn cart-btn-right" style="border: none; outline: none;"> -->
                        <button id="update_cart" class="update-btn primary-btn cart-btn cart-btn-right"
                            style="border: none; outline: none;">Cập nhật giỏ hàng</button>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Mã Giảm Giá</h5>
                            <form action="">
                                <input type="text" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn">Sử Dụng Mã</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- đặt hàng -->
                <?php
                if (isset($_SESSION['cart'])) {
                    ?>
                    <div class="col-lg-6">
                        <div class="shoping__checkout">
                            <h5>Thanh Toán Sản Phẩm</h5>
                            <form action="<?php echo BASE_URL ?>cart/productOrder" method="post">
                                <?php
                                foreach ($_SESSION['cart'] as $item) {
                                    ?>
                                    <input type="hidden" name="products[<?php echo $item['IDSP']; ?>][quantity]"
                                        value="<?php echo $item['SOLUONG']; ?>">
                                    <input type="hidden" name="products[<?php echo $item['IDSP']; ?>][price]"
                                        value="<?php echo $item['GIASP']; ?>">
                                    <?php
                                }
                                ?>

                                <label for="name">Họ và Tên:</label>
                                <input type="text" id="name" name="name" required>

                                <label for="address">Địa chỉ:</label>
                                <input type="text" id="address" name="address" required>

                                <label for="phone">Số điện thoại:</label>
                                <input type="tel" id="phone" name="phone" required>

                                <ul style="padding: 0;">
                                    <li>Tổng Số Tiền Thanh Toán <span
                                            id="total__price"><?php echo number_format($totalPay, 0) ?> vnđ</span>
                                    </li>
                                    <li>Total <span id="total__pay"><?php echo number_format($totalPay, 0) ?> vnđ</span>
                                    </li>
                                </ul>

                                <button type="submit" class="primary-btn btn-pay">Đặt Hàng</button>
                            </form>
                            <!-- <input type="submit" value="Đặt Hàng" name="order" class="primary-btn"> -->
                        </div>
                    </div>
                    <?php
                } else {
                    ?>
                    <div class="col-lg-6">
                        <div class="shoping__checkout">
                            <h5>Thanh Toán Sản Phẩm</h5>
                            <!-- <input type="submit" value="Đặt Hàng" name="order" class="primary-btn"> -->
                            <form>
                                <label for="name">Họ và Tên:</label>
                                <input type="text" id="name" name="name" required>

                                <label for="address">Địa chỉ:</label>
                                <input type="text" id="address" name="address" required>

                                <label for="phone">Số điện thoại:</label>
                                <input type="tel" id="phone" name="phone" required>

                                <ul style="padding: 0;">
                                    <li>Tổng Số Tiền Thanh Toán <span>0 vnđ</span>
                                    </li>
                                    <li>Total <span>0 vnđ</span></li>
                                </ul>

                                <button type="submit" class="primary-btn btn-pay">Đặt Hàng</button>
                                <!-- <input type="submit" class="primary-btn" value="Đặt Hàng"> -->
                            </form>
                        </div>
                    </div>
                    <?php
                }
                ?>

            </div>

        </div>

    </section>
    <!-- Shoping Cart Section End -->

    <!-- Footer Section Begin -->
    <?php
    include("./public/html/footer.php");
    ?>

    <!-- Js Plugins -->
    <script src="/workspace/minimart/public/js/jquery-3.3.1.min.js"></script>
    <script src="/workspace/minimart/public/js/bootstrap.min.js"></script>
    <script src="/workspace/minimart/public/js/jquery.nice-select.min.js"></script>
    <script src="/workspace/minimart/public/js/jquery-ui.min.js"></script>
    <script src="/workspace/minimart/public/js/jquery.slicknav.js"></script>
    <script src="/workspace/minimart/public/js/mixitup.min.js"></script>
    <script src="/workspace/minimart/public/js/owl.carousel.min.js"></script>
    <script src="/workspace/minimart/public/js/main.js"></script>
    <script src="/workspace/minimart/public/js/cart.js"></script>
    <script src="/workspace/minimart/public/js/notifys.js"></script>

    <!-- ajax cart -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="module" src="/workspace/minimart/public/js/ajax.js"></script>
    <script>
        document.querySelector('.update-btn').onclick = () => {
            notify({
                heading: "Thông báo",
                notify: "Cập nhập giỏ hàng thành công",
                link: "#tab-1",
                btnChose: "Mua sắm"
            });
        }
    </script>
</body>

</html>