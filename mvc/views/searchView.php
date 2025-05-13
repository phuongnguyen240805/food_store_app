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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    <link rel="stylesheet" href="/workspace/minimart/public/css/bootstrap.min.css">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="/workspace/minimart/public/css/styles.css">
</head>
<style>
    .container {
        margin-top: 157px;
    }
    #form__add--cart {
        width: 150px;
        margin: auto 0;
        text-align: center;
    }
</style>

<body>

    <?php
    include("./public/html/header.php");
    ?>

    <!-- Page Header Start -->
    <!-- <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s"
        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown">Products</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body"
                            href="http://localhost/workspace/minimart/Home/">Trang Chủ</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page">Sản Phẩm</li>
                    <li class="breadcrumb-item"><a class="text-body" href="#">Giỏ Hàng</a></li>
                </ol>
            </nav>
        </div>
    </div> -->
    <!-- Page Header End -->


    <!-- Product Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s"
                        style="max-width: 500px;">
                        <h1 class="display-5 mb-3">Kết Quả Tìm Kiếm</h1>
                        <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor
                            duo.</p>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">

                        <?php
                        while ($row = mysqli_fetch_array($data['resultSearch'])) {
                            ?>

                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="product-item">
                                    <div class="position-relative bg-light overflow-hidden">
                                        <img class="img-fluid w-100 img-product" src="<?php echo $row["IMG"] ?>" alt="">
                                        <div
                                            class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            New</div>
                                    </div>
                                    <div class="text-center p-4">

                                        <!-- product detail -->
                                        <a class="d-block h5 mb-2"
                                            href="<?php echo BASE_URL . "detail/productDetail/" . $row['IDSP'] . "/" . $row['IDDM'] ?>"><?php echo $row["TENSP"] ?></a>

                                        <span class="text-primary me-1"><?php echo number_format($row["GIASP"], 0) ?></span>
                                        <span
                                            class="text-body text-decoration-line-through"><?php echo number_format($row["GIACU"], 0) ?></span>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="w-50 text-center border-end py-2">
                                            <a class="text-body"
                                                href="<?php echo BASE_URL . "detail/productDetail/" . $row['IDSP'] . "/" . $row['IDDM'] ?>"><i
                                                    class="fa fa-eye text-primary me-2"></i>View
                                                detail</a>
                                        </small>

                                        <form action="<?php echo BASE_URL ?>cart/addCart " method="post"
                                            id="form__add--cart">
                                            <input type="hidden" name="product__id" value="<?php echo $row['IDSP'] ?>">
                                            <input type="hidden" name="product__title" value="<?php echo $row['TENSP'] ?>">
                                            <input type="hidden" name="product__img" value="<?php echo $row['IMG'] ?>">
                                            <input type="hidden" name="product__price" value="<?php echo $row['GIASP'] ?>">
                                            <input type="hidden" name="product__idCategory"
                                                value="<?php echo $row['IDDM'] ?>">
                                            <input type="hidden" name="product__quantity" value="1">

                                            <small class="w-50 text-center py-2" style="padding: 0; cursor: pointer;">

                                                <?php
                                                if (isset($_SESSION['IDKH'])) {
                                                    ?>
                                                    <button type="submit" class="text-body"
                                                        style="border: none; outline: none; background: transparent;"><i
                                                            class="fa fa-shopping-bag text-primary me-2"></i>Add to
                                                        cart</button>
                                                    <?php
                                                } else {
                                                    ?>

                                                    <span class="text-body btn__request-login" style="cursor: pointer;"><i
                                                            class="fa fa-shopping-bag text-primary me-2"></i>Add to
                                                        cart</span>

                                                    <?php
                                                }
                                                ?>

                                            </small>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <?php
                        }
                        ?>

                        <div class="container-pages">
                            <i class="fa-solid fa-angle-left"></i>

                            <form action="searchProduct" method="post">
                                <!-- PHP -->
                                <?php
                                // kq san pham moi trang
                                for ($i = 1; $i <= $data['numPage']; $i++) {
                                    //echo '<a class="page" href="searchProduct?page=' . $i . '">' . $i . '</a>';
                                    echo '<input type="submit" name="page" value="' . $i . '" class="page" />';
                                }
                                ?>

                            </form>
                            <i class="fa-solid fa-angle-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product End -->


    <!-- Firm Visit Start -->
    <div class="container-fluid bg-primary bg-icon mt-5 py-6">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-md-7 wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="display-5 text-white mb-3">Visit Our Firm</h1>
                    <p class="text-white mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam
                        amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna
                        dolore erat amet. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos.</p>
                </div>
                <div class="col-md-5 text-md-end wow fadeIn" data-wow-delay="0.5s">
                    <a class="btn btn-lg btn-secondary rounded-pill py-3 px-5" href="">Visit Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Firm Visit End -->

    <?php
    include("./public/html/footer.php");
    ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


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

    <script>
        var btnRequireLoginAll = document.querySelectorAll('.btn__request-login');
        for (var btnRequireLogin of btnRequireLoginAll) {
            btnRequireLogin.onclick = () => {
                notify({
                    heading: "Thông báo",
                    notify: "Bạn chưa đăng nhập tài khoản.",
                    link: "login/accLogin",
                    btnChose: "Đăng nhập"
                });
            };
        }
    </script>
</body>

</html>