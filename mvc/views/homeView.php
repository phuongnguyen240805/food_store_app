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
    <link rel="stylesheet" href="/workspace/minimart/public/css/bootstrap.min.css">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="/workspace/minimart/public/css/styles.css">
</head>

<style>
    .img-product {
        width: 100%;
        min-height: 300px;
        object-fit: cover;
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

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="../public/img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7">
                                    <h1 class="display-2 mb-5 animated slideInDown">Organic Food Is Good For Health</h1>
                                    <a href="#tab-1" class="btn btn-primary rounded-pill py-sm-3 px-sm-5">Sản Phẩm</a>
                                    <a href="<?php echo BASE_URL ?>Cart/productCart"
                                        class="btn btn-secondary rounded-pill py-sm-3 px-sm-5 ms-3">Giỏ Hàng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="../public/img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7">
                                    <h1 class="display-2 mb-5 animated slideInDown">Natural Food Is Always Healthy</h1>
                                    <a href="#tab-1" class="btn btn-primary rounded-pill py-sm-3 px-sm-5">Sản Phẩm</a>
                                    <a href="<?php echo BASE_URL ?>Cart/productCart"
                                        class="btn btn-secondary rounded-pill py-sm-3 px-sm-5 ms-3">Giỏ Hàng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-100" src="../public/img/about.jpg">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4">Best Organic Fruits And Vegetables</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                        eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet
                    </p>
                    <p><i class="fa fa-check text-primary me-3"></i>Tempor erat elitr rebum at clita</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Aliqu diam amet diam et eos</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Clita duo justo magna dolore erat amet</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Feature Start -->
    <div class="container-fluid bg-light bg-icon my-5 py-6">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <h1 class="display-5 mb-3">Our Features</h1>
                <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="../public/img/icon-1.png" alt="">
                        <h4 class="mb-3">Natural Process</h4>
                        <p class="mb-4">Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed vero
                            dolor duo.</p>
                        <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="../public/img/icon-1.png" alt="">
                        <h4 class="mb-3">Organic Products</h4>
                        <p class="mb-4">Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed vero
                            dolor duo.</p>
                        <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="../public/img/icon-1.png" alt="">
                        <h4 class="mb-3">Biologically Safe</h4>
                        <p class="mb-4">Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed vero
                            dolor duo.</p>
                        <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Product Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s"
                        style="max-width: 500px;">
                        <h1 class="display-5 mb-3">Our Products</h1>
                        <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor
                            duo.</p>
                    </div>
                </div>
                <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-primary border-2 active" data-bs-toggle="pill"
                                href="#tab-1">Vegetable</a>
                        </li>
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-2">Fresh </a>
                        </li>
                        <li class="nav-item me-0">
                            <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-3">Fruits</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <!-- vegetable -->
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">

                        <?php
                        while ($row = mysqli_fetch_array($data["vegetable"])) {
                            ?>

                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp product-item__fix" data-wow-delay="0.1s">
                                <div class="product-item">
                                    <div class="position-relative bg-light overflow-hidden">
                                        <!-- /workspace/minimart/public/uploads/ -->
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

                        <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                            <a class="btn btn-primary rounded-pill py-3 px-5"
                                href="<?php echo BASE_URL ?>product/vegetable#">Xem Thêm Sản Phẩm</a>
                        </div>
                    </div>
                </div>

                <!-- fresh -->
                <div id="tab-2" class="tab-pane fade show p-0">
                    <div class="row g-4">

                        <?php
                        while ($row = mysqli_fetch_array($data["fresh"])) {
                            ?>

                            <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.1s">
                                <div class="product-item">
                                    <div class="position-relative bg-light overflow-hidden">
                                        <img class="img-fluid w-100 img-product" src="<?php echo $row["IMG"] ?>" alt="">
                                        <div
                                            class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            New</div>
                                    </div>
                                    <div class="text-center p-4">

                                        <!-- chi tiet san pham -->
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

                        <div class="col-12 text-center">
                            <a class="btn btn-primary rounded-pill py-3 px-5"
                                href="<?php echo BASE_URL ?>product/fresh#">Xem Thêm Sản Phẩm</a>
                        </div>
                    </div>
                </div>

                <!-- fruit -->
                <div id="tab-3" class="tab-pane fade show p-0">
                    <div class="row g-4">

                        <?php
                        while ($row = mysqli_fetch_array($data["fruit"])) {
                            ?>

                            <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.01s">
                                <div class="product-item">
                                    <div class="position-relative bg-light overflow-hidden">
                                        <img class="img-fluid w-100 img-product" src="<?php echo $row["IMG"] ?>" alt="">
                                        <div
                                            class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            New</div>
                                    </div>
                                    <div class="text-center p-4">

                                        <!-- chi tiet san pham -->
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

                        <div class="col-12 text-center">
                            <a class="btn btn-primary rounded-pill py-3 px-5"
                                href="<?php echo BASE_URL ?>product/fruit#">Xem Thêm Sản Phẩm</a>
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


    <!-- Testimonial Start -->
    <div class="container-fluid bg-light bg-icon py-6 mb-5">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <h1 class="display-5 mb-3">Customer Review</h1>
                <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                    <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos.
                        Clita erat ipsum et lorem et sit.</p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 rounded-circle" src="../public/img/testimonial-1.jpg" alt="">
                        <div class="ms-3">
                            <h5 class="mb-1">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                    <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos.
                        Clita erat ipsum et lorem et sit.</p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 rounded-circle" src="../public/img/testimonial-2.jpg" alt="">
                        <div class="ms-3">
                            <h5 class="mb-1">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                    <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos.
                        Clita erat ipsum et lorem et sit.</p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 rounded-circle" src="../public/img/testimonial-3.jpg" alt="">
                        <div class="ms-3">
                            <h5 class="mb-1">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                    <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos.
                        Clita erat ipsum et lorem et sit.</p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 rounded-circle" src="../public/img/testimonial-4.jpg" alt="">
                        <div class="ms-3">
                            <h5 class="mb-1">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <h1 class="display-5 mb-3">Latest Blog</h1>
                <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid" src="../public/img/blog-1.jpg" alt="">
                    <div class="bg-light p-4">
                        <a class="d-block h5 lh-base mb-4" href="">How to cultivate organic fruits and vegetables in own
                            firm</a>
                        <div class="text-muted border-top pt-4">
                            <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                            <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>01 Jan, 2045</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <img class="img-fluid" src="../public/img/blog-2.jpg" alt="">
                    <div class="bg-light p-4">
                        <a class="d-block h5 lh-base mb-4" href="">How to cultivate organic fruits and vegetables in own
                            firm</a>
                        <div class="text-muted border-top pt-4">
                            <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                            <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>01 Jan, 2045</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <img class="img-fluid" src="../public/img/blog-3.jpg" alt="">
                    <div class="bg-light p-4">
                        <a class="d-block h5 lh-base mb-4" href="">How to cultivate organic fruits and vegetables in own
                            firm</a>
                        <div class="text-muted border-top pt-4">
                            <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                            <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>01 Jan, 2045</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

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