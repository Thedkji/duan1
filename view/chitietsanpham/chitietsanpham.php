<div class="page-banner-section section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-banner text-center">
                    <h1 style="margin: 0 !important;">Sản phẩm</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="index.php">Trang chủ</a></li>
                        <li>Sản phẩm</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Single Product Section Start -->
<div
    class="single-product-section section pt-30 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-30 pb-xs-20">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <!-- Product Details Left -->
                <div class="product-details-left"
                    style="background-color: aqua;width: 400px; height: 400px;border-radius:10px">
                    <img src="img/<?= $img ?>" alt="" width="100%" height="100%" style="border-radius:10px ;">
                    <a href="img/<?= $img ?>" class="popup-img venobox" data-gall="myGallery"><i
                            class="fa fa-expand"></i></a>
                </div>
                <!--Product Details Left -->
            </div>
            <div class="col-md-7">
                <!--Product Details Content Start-->
                <h2>
                    <?= $ten_sp ?>
                </h2>
                <div class="single-product-price">
                    <span class="price new-price" style="color:red;">
                        <?= number_format($gia_sp) ?>
                    </span>
                    <span class="regular-price" style=" color:gray;"><?= number_format($giacu) ?></span>
                </div>

                <div class="single-product-quantity">
                    <form class="add-quantity" action="#">
                        <div class="product-quantity">
                            <input value="1" type="number">
                        </div>
                        <div class="add-to-link">
                            <button class="product-add-btn" data-text="add to cart">add to cart</button>
                        </div>
                    </form>
                </div>
                <div class="product-meta">
                    <span class="posted-in">
                        Danh mục :
                        <a href="index.php?act=sanpham&iddm=<?= $id_danhmuc ?>">
                            <?= $ten_danhmuc ?>
                        </a>
                    </span>
                </div>
                <div class="single-product-sharing">
                    <h3>Share this product</h3>
                    <ul>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                    </ul>
                </div>
            </div>
            <!--Product Details Content End-->
        </div>
    </div>
</div>
</div>
<!-- Single Product Section End -->

<!--Product Description Review Section Start-->
<div class="product-description-review-section section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-review-tab">
                    <!--Review And Description Tab Menu Start-->
                    <ul class="nav dec-and-review-menu">
                        <li>
                            <a class="active" data-toggle="tab" href="#description">Mô tả</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#reviews">Đánh giá </a>
                        </li>
                    </ul>
                    <!--Review And Description Tab Menu End-->
                    <!--Review And Description Tab Content Start-->
                    <div class="tab-content product-review-content-tab" id="myTabContent-4">
                        <div class="tab-pane fade active show" id="description">
                            <div class="single-product-description">
                            <?= $mo_ta?>
                            </div>
                        </div>
                        <!--Review And Description Tab Content End-->
                        <div class="tab-pane fade active show" id="reviews">
                            <div class="single-product-description">
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                                <script>
                                    $(document).ready(function () {
                                        $("#binhluan").load("view/binhluan/binhluan.php", { idsp: <?= $id ?> });
                                    });
                                </script>
                                <div class="mb">
                                    <div class="box_title">BÌNH LUẬN</div>
                                    <div class="box_content2  product_portfolio binhluan " id="binhluan"></div>
                                    <div class="box_search">
                                        <form action="" method="POST">
                                            <input type="hidden" name="idsp" value="">
                                            <input type="text" name="noidung">
                                            <input type="submit" name="guibinhluan" value="Gửi bình luận">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <!--Product Description Review Section Start-->

        <!--Product section start-->
        <div
            class="product-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-65 pb-lg-45 pb-md-35 pb-sm-25 pb-xs-15">
            <div class="container">

                <div class="row">
                    <!-- Section Title Start -->
                    <div class="col">
                        <div class="section-title mb-40 mb-xs-20">
                            <h2>Related Products</h2>
                        </div>
                    </div>
                    <!-- Section Title End -->
                </div>
                <div class="row tf-element-carousel" data-slick-options='{
                "slidesToShow": 4,
                "slidesToScroll": 1,
                "infinite": true,
                "arrows": true,
                "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                }' data-slick-responsive='[
                {"breakpoint":1199, "settings": {
                "slidesToShow": 3
                }},
                {"breakpoint":992, "settings": {
                "slidesToShow": 2
                }},
                {"breakpoint":768, "settings": {
                "slidesToShow": 2,
                "arrows": false,
                "autoplay": true
                }},
                {"breakpoint":576, "settings": {
                "slidesToShow": 1,
                "arrows": false,
                "autoplay": true
                }}
                ]'>
                    <div class="col-lg-3">
                        <!-- Single Product Start -->
                        <div class="single-product mb-30">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img src="./assets/images/product/product-5.jpg" alt="">
                                </a>
                                <span class="descount-sticker">-10%</span>
                                <span class="sticker">New</span>
                                <div class="product-action d-flex justify-content-between">
                                    <a class="product-btn" href="#">Add to Cart</a>
                                    <ul class="d-flex">
                                        <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="single-product.html">White Shave Brush</a></h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4 class="price"><span class="new">€130.00</span></h4>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <div class="col-lg-3">
                        <!-- Single Product Start -->
                        <div class="single-product mb-30">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img src="./assets/images/product/product-6.jpg" alt="">
                                </a>
                                <span class="descount-sticker">-10%</span>
                                <span class="sticker">New</span>
                                <div class="product-action d-flex justify-content-between">
                                    <a class="product-btn" href="#">Add to Cart</a>
                                    <ul class="d-flex">
                                        <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="single-product.html">White Shave Brug</a></h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4 class="price"><span class="new">€70.00</span><span class="old">€100.00</span></h4>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <div class="col-lg-3">
                        <!-- Single Product Start -->
                        <div class="single-product mb-30">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img src="./assets/images/product/product-7.jpg" alt="">
                                </a>
                                <span class="descount-sticker">-10%</span>
                                <span class="sticker">New</span>
                                <div class="product-action d-flex justify-content-between">
                                    <a class="product-btn" href="#">Add to Cart</a>
                                    <ul class="d-flex">
                                        <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="single-product.html">White Shave Bruc</a></h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4 class="price"><span class="new">€70.00</span></h4>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <div class="col-lg-3">
                        <!-- Single Product Start -->
                        <div class="single-product mb-30">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img src="./assets/images/product/product-8.jpg" alt="">
                                </a>
                                <span class="descount-sticker">-10%</span>
                                <span class="sticker">New</span>
                                <div class="product-action d-flex justify-content-between">
                                    <a class="product-btn" href="#">Add to Cart</a>
                                    <ul class="d-flex">
                                        <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="single-product.html">White Shave Brusb</a></h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4 class="price"><span class="new">€90.00</span></h4>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <div class="col-lg-3">
                        <!-- Single Product Start -->
                        <div class="single-product mb-30">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img src="./assets/images/product/product-1.jpg" alt="">
                                </a>
                                <span class="descount-sticker">-10%</span>
                                <span class="sticker">New</span>
                                <div class="product-action d-flex justify-content-between">
                                    <a class="product-btn" href="#">Add to Cart</a>
                                    <ul class="d-flex">
                                        <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="single-product.html">White Shave Brush</a></h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4 class="price"><span class="new">€110.00</span><span class="old">€130.00</span></h4>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <div class="col-lg-3">
                        <!-- Single Product Start -->
                        <div class="single-product mb-30">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img src="./assets/images/product/product-2.jpg" alt="">
                                </a>
                                <span class="descount-sticker">-10%</span>
                                <span class="sticker">New</span>
                                <div class="product-action d-flex justify-content-between">
                                    <a class="product-btn" href="#">Add to Cart</a>
                                    <ul class="d-flex">
                                        <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="single-product.html">White Shave Brux</a></h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4 class="price"><span class="new">€130.00</span></h4>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <div class="col-lg-3">
                        <!-- Single Product Start -->
                        <div class="single-product mb-30">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img src="./assets/images/product/product-3.jpg" alt="">
                                </a>
                                <span class="descount-sticker">-10%</span>
                                <span class="sticker">New</span>
                                <div class="product-action d-flex justify-content-between">
                                    <a class="product-btn" href="#">Add to Cart</a>
                                    <ul class="d-flex">
                                        <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="single-product.html">White Shave Bruz</a></h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4 class="price"><span class="new">€130.00</span></h4>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <div class="col-lg-3">
                        <!-- Single Product Start -->
                        <div class="single-product mb-30">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img src="./assets/images/product/product-4.jpg" alt="">
                                </a>
                                <span class="descount-sticker">-10%</span>
                                <span class="sticker">New</span>
                                <div class="product-action d-flex justify-content-between">
                                    <a class="product-btn" href="#">Add to Cart</a>
                                    <ul class="d-flex">
                                        <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="single-product.html">White Shave Bruk</a></h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4 class="price"><span class="new">€115.00</span></h4>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>
                </div>
            </div>
        </div>
        <!--Product section end-->

        <!--Product section start-->
        <div class="product-section section pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
            <div class="container">

                <div class="row">
                    <!-- Section Title Start -->
                    <div class="col">
                        <div class="section-title mb-40 mb-xs-20">
                            <h2>Up Sell Products</h2>
                        </div>
                    </div>
                    <!-- Section Title End -->
                </div>
                <div class="row tf-element-carousel" data-slick-options='{
                "slidesToShow": 4,
                "slidesToScroll": 1,
                "infinite": true,
                "arrows": true,
                "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                }' data-slick-responsive='[
                {"breakpoint":1199, "settings": {
                "slidesToShow": 3
                }},
                {"breakpoint":992, "settings": {
                "slidesToShow": 2
                }},
                {"breakpoint":768, "settings": {
                "slidesToShow": 2,
                "arrows": false,
                "autoplay": true
                }},
                {"breakpoint":576, "settings": {
                "slidesToShow": 1,
                "arrows": false,
                "autoplay": true
                }}
                ]'>
                    <div class="col-lg-3">
                        <!-- Single Product Start -->
                        <div class="single-product mb-30">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img src="./assets/images/product/product-1.jpg" alt="">
                                </a>
                                <span class="descount-sticker">-10%</span>
                                <span class="sticker">New</span>
                                <div class="product-action d-flex justify-content-between">
                                    <a class="product-btn" href="#">Add to Cart</a>
                                    <ul class="d-flex">
                                        <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="single-product.html">White Shave Brush</a></h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4 class="price"><span class="new">€110.00</span><span class="old">€130.00</span></h4>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <div class="col-lg-3">
                        <!-- Single Product Start -->
                        <div class="single-product mb-30">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img src="./assets/images/product/product-2.jpg" alt="">
                                </a>
                                <span class="descount-sticker">-10%</span>
                                <span class="sticker">New</span>
                                <div class="product-action d-flex justify-content-between">
                                    <a class="product-btn" href="#">Add to Cart</a>
                                    <ul class="d-flex">
                                        <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="single-product.html">White Shave Brux</a></h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4 class="price"><span class="new">€130.00</span></h4>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <div class="col-lg-3">
                        <!-- Single Product Start -->
                        <div class="single-product mb-30">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img src="./assets/images/product/product-3.jpg" alt="">
                                </a>
                                <span class="descount-sticker">-10%</span>
                                <span class="sticker">New</span>
                                <div class="product-action d-flex justify-content-between">
                                    <a class="product-btn" href="#">Add to Cart</a>
                                    <ul class="d-flex">
                                        <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="single-product.html">White Shave Bruz</a></h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4 class="price"><span class="new">€130.00</span></h4>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <div class="col-lg-3">
                        <!-- Single Product Start -->
                        <div class="single-product mb-30">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img src="./assets/images/product/product-4.jpg" alt="">
                                </a>
                                <span class="descount-sticker">-10%</span>
                                <span class="sticker">New</span>
                                <div class="product-action d-flex justify-content-between">
                                    <a class="product-btn" href="#">Add to Cart</a>
                                    <ul class="d-flex">
                                        <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="single-product.html">White Shave Bruk</a></h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4 class="price"><span class="new">€115.00</span></h4>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <div class="col-lg-3">
                        <!-- Single Product Start -->
                        <div class="single-product mb-30">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img src="./assets/images/product/product-5.jpg" alt="">
                                </a>
                                <span class="descount-sticker">-10%</span>
                                <span class="sticker">New</span>
                                <div class="product-action d-flex justify-content-between">
                                    <a class="product-btn" href="#">Add to Cart</a>
                                    <ul class="d-flex">
                                        <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="single-product.html">White Shave Brush</a></h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4 class="price"><span class="new">€130.00</span></h4>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <div class="col-lg-3">
                        <!-- Single Product Start -->
                        <div class="single-product mb-30">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img src="./assets/images/product/product-6.jpg" alt="">
                                </a>
                                <span class="descount-sticker">-10%</span>
                                <span class="sticker">New</span>
                                <div class="product-action d-flex justify-content-between">
                                    <a class="product-btn" href="#">Add to Cart</a>
                                    <ul class="d-flex">
                                        <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="single-product.html">White Shave Brug</a></h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4 class="price"><span class="new">€70.00</span><span class="old">€100.00</span></h4>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <div class="col-lg-3">
                        <!-- Single Product Start -->
                        <div class="single-product mb-30">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img src="./assets/images/product/product-7.jpg" alt="">
                                </a>
                                <span class="descount-sticker">-10%</span>
                                <span class="sticker">New</span>
                                <div class="product-action d-flex justify-content-between">
                                    <a class="product-btn" href="#">Add to Cart</a>
                                    <ul class="d-flex">
                                        <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="single-product.html">White Shave Bruc</a></h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4 class="price"><span class="new">€70.00</span></h4>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <div class="col-lg-3">
                        <!-- Single Product Start -->
                        <div class="single-product mb-30">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img src="./assets/images/product/product-8.jpg" alt="">
                                </a>
                                <span class="descount-sticker">-10%</span>
                                <span class="sticker">New</span>
                                <div class="product-action d-flex justify-content-between">
                                    <a class="product-btn" href="#">Add to Cart</a>
                                    <ul class="d-flex">
                                        <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="single-product.html">White Shave Brusb</a></h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4 class="price"><span class="new">€90.00</span></h4>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>
                </div>
            </div>
        </div>