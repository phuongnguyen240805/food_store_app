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

    <!-- Css Styles -->
    <link rel="stylesheet" href="/workspace/minimart/public/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/workspace/minimart/public/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/workspace/minimart/public/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="/workspace/minimart/public/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="/workspace/minimart/public/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="/workspace/minimart/public/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/workspace/minimart/public/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/workspace/minimart/public/css/detailBlog.css" type="text/css">
    <link rel="stylesheet" href="/workspace/minimart/public/css/blog.css" type="text/css">
</head>
<style>
    .blog-details-hero {
        margin-top: 127px;
    }

    .blog-details {
        padding-top: 100px;
    }

    .blog__details__text img {
        margin-bottom: 30px;
        width: 856px;
        height: 556px;
        object-fit: cover;
    }

    .blog__sidebar {
        padding-top: unset;
    }
</style>

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <?php
    include('./public/html/header.php');
    ?>

    <!-- Blog Details Hero Begin -->
    <section class="blog-details-hero set-bg" data-setbg="img/blog/details/details-hero.jpg"
        style="background: url(/workspace/minimart/public/img/blog/details-hero.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog__details__hero__text">
                        <h2>Foody - Nơi Cung Cấp Sản Phẩm Chất Lượng</h2>
                        <ul>
                            <li>By Michael Scofield</li>
                            <!-- rảnh thì javascript. hên xui -->
                            <li>January 14, 2019</li>
                            <li>8 Comments</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Hero End -->

    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 order-md-1 order-2">
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

                <?php
                while ($row = mysqli_fetch_array($data['blogDetail'])) {
                    ?>

                    <div class="col-lg-8 col-md-7 order-md-1 order-1">
                        <div class="blog__details__text">
                            <img src="<?php echo $row['IMG'] ?>" alt="">
                            <p><?php echo $row['MOTA'] ?></p>
                            <h3><?php echo $row['TIEUDE'] ?></h3>
                            <p><?php echo $row['NOIDUNG'] ?></p>
                        </div>
                        <div class="blog__details__content">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="blog__details__author">
                                        <div class="blog__details__author__pic">
                                            <img src="img/blog/details/details-author.jpg" alt="">
                                        </div>
                                        <div class="blog__details__author__text">
                                            <h6>Michael Scofield</h6>
                                            <span>Admin</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="blog__details__widget">
                                        <ul>
                                            <li><span>Categories:</span> Food</li>
                                            <li><span>Tags:</span> All, Trending, Cooking, Healthy Food, Life Style</li>
                                        </ul>
                                        <div class="blog__details__social">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                            <a href="#"><i class="fa fa-envelope"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                }
                ?>


            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->

    <!-- Related Blog Section Begin -->
    <section class="related-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related-blog-title">
                        <h2>Các Bài Viết Liên Quan</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <!-- related blog code -->
                <?php
                while ($row = mysqli_fetch_array($data['relatedBlog'])) {
                    ?>

                    <div class="col-lg-4 col-md-4 col-sm-6">
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
                                <p><?php echo $row['MOTA'] ?></p>
                            </div>
                        </div>
                    </div>

                    <?php
                }
                ?>

            </div>
        </div>
    </section>
    <!-- Related Blog Section End -->

    <!-- Footer Section Begin -->
    <?php
    include('./public/html/footer.php');
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