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
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Css Styles -->
    <link rel="stylesheet" href="/workspace/minimart/public/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/workspace/minimart/public/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/workspace/minimart/public/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="/workspace/minimart/public/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="/workspace/minimart/public/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="/workspace/minimart/public/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/workspace/minimart/public/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/workspace/minimart/public/css/blog.css">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="/workspace/minimart/public/css/styles.css">

</head>
<style>
    .blog__sidebar {
        padding-top: unset;
    }

    .breadcrumb-section {
        margin-top: 127px !important;
        padding-top: 127px;
        height: 350px;
    }

    .blog__item__pic {
        width: 416px;
        height: 258.8px;
    }

    .blog__item__pic img {
        min-width: 100%;
        width: 100%;
        height: 100%;
    }

    .blog__item__text h5,
    .blog__item__text p {
        overflow: hidden;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        text-overflow: ellipsis;
    }

    .blog__item__text h5 {
        -webkit-line-clamp: 1;
        margin-bottom: 12px;
    }

    .blog__item__text p {
        -webkit-line-clamp: 2;
    }

    .blog {
        padding-top: 100px;
    }
</style>

<body>
    <!-- Page Preloder -->
    <!--  <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <?php
    include("./public/html/header.php");
    ?>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="/workspace/minimart/public/img/details/breadcrumb.jpg" style="background: url(/workspace/minimart/public/img/blog/details-hero.jpg);>
        <div class=" container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2 style="color: #ffffff; font-size: 46px;">Những Bài Viết Bạn Không Thể Bỏ Qua</h2>
                    <div class="breadcrumb__option">
                        <a href="<?php echo BASE_URL ?>Home/">Home</a>
                        <span style="color: #ffffff;">Blog</span>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="blog__sidebar">
                        <div class="blog__sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Categories</h4>
                            <ul>
                                <li><a href="#">All</a></li>
                                <li><a href="#">Beauty (20)</a></li>
                                <li><a href="#">Food (5)</a></li>
                                <li><a href="#">Life Style (9)</a></li>
                                <li><a href="#">Travel (10)</a></li>
                            </ul>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Recent News</h4>
                            <div class="blog__sidebar__recent">
                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="img/blog/sidebar/sr-1.jpg" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>09 Kinds Of Vegetables<br /> Protect The Liver</h6>
                                        <span>MAR 05, 2019</span>
                                    </div>
                                </a>
                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="img/blog/sidebar/sr-2.jpg" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>Tips You To Balance<br /> Nutrition Meal Day</h6>
                                        <span>MAR 05, 2019</span>
                                    </div>
                                </a>
                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="img/blog/sidebar/sr-3.jpg" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>4 Principles Help You Lose <br />Weight With Vegetables</h6>
                                        <span>MAR 05, 2019</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Search By</h4>
                            <div class="blog__sidebar__item__tags">
                                <a href="#">Apple</a>
                                <a href="#">Beauty</a>
                                <a href="#">Vegetables</a>
                                <a href="#">Fruit</a>
                                <a href="#">Healthy Food</a>
                                <a href="#">Lifestyle</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="row">

                        <!-- giới thiệu các bài đăng -->
                        <?php
                        while ($row = mysqli_fetch_array($data['blogContent'])) {
                            ?>

                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="blog__item">
                                    <div class="blog__item__pic">
                                        <img src="<?php echo $row['IMG'] ?>" alt="">
                                    </div>
                                    <div class="blog__item__text">
                                        <ul>
                                            <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                            <li><i class="fa fa-comment-o"></i> 5</li>
                                        </ul>
                                        <h5><a
                                                href="<?php echo BASE_URL . 'blog/detailNews/' . $row['ID'] . "/" . $row['IDDM'] ?>"><?php echo $row['TIEUDE'] ?></a>
                                        </h5>
                                        <p><?php echo $row['NOIDUNG'] ?></p>
                                        <a href="<?php echo BASE_URL . 'blog/detailNews/' . $row['ID'] . "/" . $row['IDDM'] ?>"
                                            class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                                    </div>
                                </div>
                            </div>

                            <?php
                        }
                        ?>

                        <div class="col-lg-12">
                            <div class="product__pagination blog__pagination">
                                <a href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Footer Section Begin -->
    <?php
    include("./public/html/footer.php")
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

</body>

</html>