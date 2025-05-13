<!-- Product Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-0 gx-5 align-items-end">
            <div class="col-lg-6">
                <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s"
                    style="max-width: 500px;">
                    <h1 class="display-5 mb-3">Rau, Củ</h1>
                    <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor
                        duo.</p>
                </div>
            </div>
        </div>
        <div class="tab-content">
            <div id="tab-1" class="tab-pane fade show p-0 active">
                <div class="row g-4">

                    <?php
                    while ($row = mysqli_fetch_array($data['vegetable'])) {
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

                                    <form action="<?php echo BASE_URL ?>cart/addCart " method="post" id="form__add--cart">
                                        <input type="hidden" name="product__id" value="<?php echo $row['IDSP'] ?>">
                                        <input type="hidden" name="product__title" value="<?php echo $row['TENSP'] ?>">
                                        <input type="hidden" name="product__img" value="<?php echo $row['IMG'] ?>">
                                        <input type="hidden" name="product__price" value="<?php echo $row['GIASP'] ?>">
                                        <input type="hidden" name="product__idCategory" value="<?php echo $row['IDDM'] ?>">
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

                    <!-- phân trang -->
                    <div class="container-pages">

                        <form id="pagination__form" action="<?php echo BASE_URL ?>product/vegetable" method="post">
                            <?php $page = isset($_POST['page']) ? (int) $_POST['page'] : 1; ?>

                            <!-- pre -->
                            <?php if ($page > 1): ?>
                                
                                <button class="page pageBtn prePage" type="submit" name="page"
                                    value="<?php echo $page - 1; ?>">
                                    <i class="fa-solid fa-angle-left"></i>
                                </button>

                            <?php endif; ?>

                            <!-- Hiển thị số trang -->
                            <?php for ($i = 1; $i <= $data['vegetablePage']; $i++) { ?>
                                <input type="submit" name="page" value="<?php echo $i; ?>" class="page" />
                            <?php } ?>

                            <!-- next -->
                            <?php if ($page < $data['vegetablePage']): ?>
                                
                                <button class="page pageBtn nextPage" type="submit" name="page"
                                    value="<?php echo $page + 1; ?>">
                                    <i class="fa-solid fa-angle-right"></i>
                                </button>

                            <?php endif; ?>

                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product End -->