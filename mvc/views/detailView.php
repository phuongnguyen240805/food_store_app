<!DOCTYPE html>
<html lang="en">

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
    <link rel="stylesheet" href="/workspace/minimart/public/css/detail.css" type="text/css">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="/workspace/minimart/public/css/styles.css">
</head>
<style>
    .breadcrumb-section {
        margin-top: 157px;
    }

    .share i {
        display: flex;
        align-items: center;
        font-size: 18px;
        transition: .2s;
    }

    .share i+i {
        padding: 0 10px;
    }

    .share i:hover {
        color: #3CB815;
    }

    /* btn cart */
    .primary-btn {
        transition: .2s;
        border-radius: 2px;
        color: #ffffff;
        background-color: #3CB815;
    }

    .primary-btn:hover {
        background-color: #349f13;
        color: #ffffff
    }

    /* search */
    .search {
        flex-grow: 1;
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }

    .search>.inputSearch {
        min-width: 320px;
        padding: 10px;
        margin-right: 10px;
        border: none;
        font-size: 17px;
        border-radius: 4px;
        border: none;
        outline: none;
    }

    #commentForm {
        /* width: 720px; */
        margin-bottom: 30px;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 8px;
        background-color: #f9f9f9;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    #commentForm .form-control {
        width: calc(100% - 22px);
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    #commentForm .btn {
        width: 100%;
        padding: 10px;
        border: none;
    }

    #commentList {
        list-style-type: none;
        padding: 0;
    }

    #commentList li {
        background-color: #ffffff;
        margin-bottom: 15px;
        padding: 15px;
        border-radius: 5px;
        border: 1px solid #ddd;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    #commentList li span {
        display: block;
        margin-bottom: 5px;
    }

    #commentList li span:first-child {
        font-weight: bold;
        color: #349f13;
    }

    #commentList li span:last-child {
        font-size: 0.9em;
        color: #888;
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
    <section class="breadcrumb-section set-bg" data-setbg="/workspace/minimart/public/img/details/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Chi Tiết Sảm Phẩm</h2>
                        <div class="breadcrumb__option">
                            <a href="<?php echo BASE_URL ?>Home/">Trang Chủ</a>-
                            <a href="<?php echo BASE_URL ?>Cart/productCart">Giỏ Hàng</a>
                            <span>Green Market</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">

            <!-- show product detail -->
            <?php
            while ($row = mysqli_fetch_array($data["productDetail"])) {
                ?>

                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="product__details__pic">
                            <div class="product__details__pic__item">
                                <img class="product__details__pic__item--large" src="<?php echo $row['IMG'] ?>" alt="">
                            </div>
                            <!--   <div class="product__details__pic__slider owl-carousel">
                                <img data-imgbigurl="../public/img/details/product-details-2.jpg"
                                    src="../public/img/details/thumb-1.jpg" alt="">
                                <img data-imgbigurl="../public/img/details/product-details-3.jpg"
                                    src="../public/img/details/thumb-2.jpg" alt="">
                                <img data-imgbigurl="../public/img/details/product-details-5.jpg"
                                    src="../public/img/details/thumb-3.jpg" alt="">
                                <img data-imgbigurl="../public/img/details/product-details-4.jpg"
                                    src="../public/img/details/thumb-4.jpg" alt="">
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="product__details__text">
                            <h3><?php echo $row['TENSP'] ?></h3>
                            <div class="product__details__rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <span>(18 reviews)</span>
                            </div>
                            <div class="product__details__price"><?php echo number_format($row['GIASP'], 0) ?>vnđ</div>
                            <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam
                                vehicula elementum sed sit amet dui. Sed porttitor lectus nibh. Vestibulum ac diam sit amet
                                quam vehicula elementum sed sit amet dui. Proin eget tortor risus.</p>

                            <!-- add cart -->
                            <form action="<?php echo BASE_URL ?>cart/addCart " method="post">
                                <input type="hidden" name="product__id" value="<?php echo $row['IDSP'] ?>">
                                <input type="hidden" name="product__title" value="<?php echo $row['TENSP'] ?>">
                                <input type="hidden" name="product__img" value="<?php echo $row['IMG'] ?>">
                                <input type="hidden" name="product__price" value="<?php echo $row['GIASP'] ?>">
                                <input type="hidden" name="product__idCategory" value="<?php echo $row['IDDM'] ?>">
                                <div class="product__details__quantity">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <!-- <i class="fa-solid fa-minus btn__minus" style="user-select: none;"></i> -->
                                            <input id="input__quantity" type="number" value="1" name="product__quantity"
                                                style="font-size: 20px;" min="1">
                                            <!-- <i class="fa-solid fa-plus btn__plus" style="user-select: none;"></i> -->
                                        </div>
                                    </div>
                                </div>

                                <?php if (isset($_SESSION['IDKH'])) {
                                    ?>
                                    <!-- add product cart -->
                                    <input type="submit" class="primary-btn" value="Thêm vào giỏ hàng"
                                        style="border: none; outline: none;">
                                    <?php
                                } else {
                                    ?>
                                    <!-- <input type="submit" class="primary-btn btn__request-login" value="Thêm vào giỏ hàng"
                                        style="border: none; outline: none;"> -->
                                    <span class="primary-btn btn__request-login"
                                        style="border: none; outline: none; cursor:pointer;">Thêm vào
                                        giỏ hàng</span>
                                    <?php
                                }
                                ?>

                                <div class="heart-icon"><i class="fa-solid fa-cart-shopping"></i></div>
                            </form>

                            <ul>
                                <li><b>Số Lượng</b> <span style="color: red;"><?php echo $row['SOLUONG'] ?></span> sản phẩm
                                </li>
                                <li><b>Vận chuyển</b> <span>01 day shipping. <samp>Free pickup today</samp></span></li>
                                <!-- <li><b>Weight</b> <span>0.5 kg</span></li> -->
                                <li><b>Share on</b>
                                    <div class="share">
                                        <a href="#"><i class="fab fa-facebook"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-pinterest"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="product__details__tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                        aria-selected="true">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                        aria-selected="false">Information</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                        aria-selected="false">Reviews <span>(1)</span></a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane" id="tabs-1" role="tabpanel">
                                    <div class="product__details__tab__desc">
                                        <h6>Products Infomation</h6>
                                        <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                            Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus. Vivamus
                                            suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam sit amet quam
                                            vehicula elementum sed sit amet dui. Donec rutrum congue leo eget malesuada.
                                            Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur arcu erat,
                                            accumsan id imperdiet et, porttitor at sem. Praesent sapien massa, convallis a
                                            pellentesque nec, egestas non nisi. Vestibulum ac diam sit amet quam vehicula
                                            elementum sed sit amet dui. Vestibulum ante ipsum primis in faucibus orci luctus
                                            et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam
                                            vel, ullamcorper sit amet ligula. Proin eget tortor risus.</p>
                                        <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem
                                            ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit aliquet
                                            elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum
                                            porta. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus
                                            nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
                                            Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Sed
                                            porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum
                                            sed sit amet dui. Proin eget tortor risus.</p>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs-2" role="tabpanel">
                                    <div class="product__details__tab__desc">
                                        <h6>Products Infomation</h6>
                                        <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                            Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.
                                            Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam
                                            sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo
                                            eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.
                                            Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent
                                            sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac
                                            diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante
                                            ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                                            Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                                            Proin eget tortor risus.</p>
                                        <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem
                                            ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit aliquet
                                            elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum
                                            porta. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus
                                            nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.</p>
                                    </div>
                                </div>
                                <div class="tab-pane active" id="tabs-3" role="tabpanel">
                                    <div class="product__details__tab__desc">
                                        <h6>Bình luận sản phẩm</h6>
                                        <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                            Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.
                                            Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam
                                            sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo
                                            eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.
                                            Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent
                                            sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac
                                            diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante
                                            ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                                            Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                                            Proin eget tortor risus.</p>
                                    </div>

                                    <div>
                                        <form id="commentForm" action="<?php echo BASE_URL ?>detail/addProductComment"
                                            method="post">
                                            <input type="hidden" name="idsp" value="<?php echo $row['IDSP']; ?>">
                                            <input type="hidden" name="iddm" value="<?php echo $row['IDDM']; ?>">
                                            <input type="text" name="comment" class="form-control" required
                                                placeholder="Bình luận..."><br>
                                            <button type="submit" class="btn btn-primary">Gửi bình luận</button>
                                        </form>

                                        <!-- get comment -->
                                        <ul id="commentList">
                                            <?php
                                           /*  $idsp = $row['IDSP'];
                                            $conn = mysqli_connect('localhost', 'root', '', 'minimart');
                                            $sql = "SELECT * FROM binhluan WHERE idsp = $idsp ORDER BY thoigian DESC";
                                            $result = mysqli_query($conn, $sql); */

                                            while ($comment_row = mysqli_fetch_assoc($data['commentsData'])) {
                                                echo "<li>";
                                                echo "<span>" . htmlspecialchars($comment_row['username']) . "</span>";
                                                echo "<span>" . htmlspecialchars($comment_row['comment']) . "</span>";
                                                echo "<span>" . htmlspecialchars($comment_row['thoigian']) . "</span>";
                                                echo "</li>";
                                            }

                                            ?>
                                        </ul>
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
    </section>
    <!-- Product Details Section End -->

    <!-- Related Product Section Begin -->
    <section class="related-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related__product__title">
                        <h2>Sản Phẩm Liên Quan</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                while ($row = mysqli_fetch_array($data['relatedProduct'])) {
                    ?>

                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class=" product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid w-100 img-product" src="<?php echo $row["IMG"] ?>" alt="">
                                <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
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
                                <small class="w-50 text-center py-2">
                                    <a class="text-body"
                                        href="<?php echo BASE_URL . 'Cart/productCart?idsp=' . $row['IDSP'] ?>"><i
                                            class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                                </small>
                            </div>
                        </div>
                    </div>

                    <?php
                }
                ?>

            </div>
        </div>
    </section>
    <!-- Related Product Section End -->

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
    <script src="/workspace/minimart/public/js/notifys.js"></script>

    <script>
        document.querySelector('.btn__request-login').onclick = () => {
            notify({
                heading: "Thông báo",
                notify: "Bạn chưa đăng nhập tài khoản.",
                link: "login/accLogin",
                btnChose: "Đăng nhập"
            });
        };


        /* document.addEventListener("DOMContentLoaded", function () {
            var btnMinus = document.querySelector('.btn__minus');
            var btnPlus = document.querySelector('.btn__plus');
            var inputQuantity = document.getElementById('input__quantity');
            
            if (btnMinus && btnPlus && inputQuantity) {
                btnMinus.onclick = () => {
                    if (parseInt(inputQuantity.value) > 1) {
                        inputQuantity.value = parseInt(inputQuantity.value) - 1;
                    }
                };

                btnPlus.onclick = () => {
                    inputQuantity.value = parseInt(inputQuantity.value) + 1;
                };
            }
        }); */

        /* ajax comment */
        /*  $(document).ready(function () {
             $('#commentForm').on('submit', function (e) {
                 e.preventDefault(); // Ngăn form reload trang
                 var formData = $(this).serialize(); // Lấy dữ liệu từ form
 
                 $.ajax({
                     type: 'POST',
                     url: 'commentView.php', // File PHP xử lý
                     data: formData,
                     success: function (response) {
                         $('#commentList').prepend(response); // Thêm bình luận mới vào đầu danh sách
                         $('#commentForm')[0].reset(); // Reset form sau khi gửi
                     },
                     error: function () {
                         alert('Có lỗi xảy ra khi gửi bình luận.');
                     }
                 });
             });
         }); */

    </script>

</body>

</html>