<!--slider section start-->

<div class="hero-section section position-relative">
            <div class="tf-element-carousel slider-nav" data-slick-options='{
                "slidesToShow": 1,
                "slidesToScroll": 1,
                "infinite": true,
                "arrows": true,
                "dots": true
            }' data-slick-responsive='[
                {"breakpoint":768, "settings": {
                "slidesToShow": 1
                }},
                {"breakpoint":575, "settings": {
                "slidesToShow": 1,
                "arrows": false,
                "autoplay": true
                }}
            ]'>
                <!--Hero Item start-->
                <div class="hero-item bg-image" data-bg="./assets/images/hero/hero-2.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <!--Hero Content start-->
                                <div class="hero-content-2 color-2">
                                    <h2>view our</h2>
                                    <h1>Women's hair</h1>
                                    <h3>Products now</h3>
                                    <a href="index.php?act=sanpham">Shop Now</a>
                                </div>
                                <!--Hero Content end-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--Hero Item end-->

                <!--Hero Item start-->
                <div class="hero-item bg-image" data-bg="./assets/images/hero/hezo3.png ">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <!--Hero Content start-->
                                <div class="hero-content-2 color-2">
                                    <!-- <h2>view our</h2>
                                    <h1>Women's hair</h1>
                                    <h3>Products now</h3> -->
                                    <!-- <a href="shop.php">Shop Now</a> -->
                                </div>
                                <!--Hero Content end-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--Hero Item end-->
            </div>
        </div>
        <!--slider section end-->

        <!-- Feature Section Start -->
        <div class="feature-section section pt-100 pt-md-75 pt-sm-60 pt-xs-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <!-- Single Faeture Start -->
                        <div class="single-feature feature-style-2 mb-30">
                            <div class="icon">
                                <i class="fa-truck fa"></i>
                            </div>
                            <div class="content">
                                <h2>Free shipping worldwide</h2>
                                <p>On order over $200</p>
                            </div>
                        </div>
                        <!-- Single Faeture End -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <!-- Single Faeture Start -->
                        <div class="single-feature feature-style-2 mb-30">
                            <div class="icon">
                                <i class="fa fa-undo"></i>
                            </div>
                            <div class="content">
                                <h2>30 days free return</h2>
                                <p>Money back guarantee</p>
                            </div>
                        </div>
                        <!-- Single Faeture End -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <!-- Single Faeture Start -->
                        <div class="single-feature feature-style-2 mb-30 br-0">
                            <div class="icon">
                                <i class="fa fa-thumbs-o-up"></i>
                            </div>
                            <div class="content">
                                <h2>Member safe shopping</h2>
                                <p>Safe shopping guarantee</p>
                            </div>
                        </div>
                        <!-- Single Faeture End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature Section End -->

        
                
<style>
    .col-lg{
      margin:auto;
      display: flex;
      grid-template-columns: 1fr 1fr 1fr 1fr;
      gap:35px;
      flex-wrap: wrap;
      
    }
    .product-img{
        width: 250px;
        border-radius: 8px; /* Điều chỉnh giá trị để làm tròn góc theo mong muốn */
    max-width: 100%; /* Đảm bảo ảnh không vượt quá phần tử chứa */
    height: auto;
    
    }
    
    
</style>
        <!--Product section start-->
        <div class="product-section  ">
            <div class="container">

                <div class="row">
                    <!-- Section Title Start -->
                    <div class="col">
                        <div class="section-title">
                            <h2>Sản Phẩm</h2><br>
                 
                    <div class="col-lg">
                        <?php
                        $i=0;
                        foreach ($spnew as $sp) {
                            extract($sp);
                           
                        echo '
                        <div class="single-product mb-30">
                            <div class="product-img">
                                <a href="index.php?act=chitietsanpham&idsp='.$id_sanpham.'&iddm='.$id_danhmuc.'"><img src="img/'.$img.'" alt="" ></a>    
                                <div class="product-action d-flex justify-content-between">
                                 <a class="product-btn" href="index.php?act=chitietsanpham&idsp='.$id_sanpham.'&iddm='.$id_danhmuc.'">Add to Cart</a>  </div>
                             </div>
                            <div class="product-content">
                                <h3><a href="index.php?act=chitietsanpham&idsp='.$id_sanpham.'&iddm='.$id_danhmuc.'" > '.$ten_sp.'</a></h3>
                                <h4 class="price"><span class="new">'.number_format($gia_sp).'</span><span style="color: red; font-size: 16px;">đ</span>
                                <span class="regular-price" style="font-size: 16px; color:gray;"><del>'.number_format($giacu).'đ</span></del></h4>
                                </div>
                        </div>';
                        $i+=1;
                        }
                        ?>
                        
                               </div>
                         </div>
            </div>
        </div>
        
          </div>
        </div>
                            
                                   
       
        <!--Banner section start-->
        <!-- <div class="banner-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3"> -->
                        <!-- Single Banner Start -->
                        <!-- <div class="single-banner mb-30">
                            <a href="#">
                                <img src="assets/images/banner/h1-banner-1.png" alt="">
                            </a>
                        </div> -->
                        <!-- Single Banner End -->
                    <!-- </div>
                    <div class="col-lg-6 col-md-6"> -->
                        <!-- Single Banner Start -->
                        <!-- <div class="single-banner mb-30">
                            <a href="#">
                                <img src="assets/images/banner/h1-banner-2.png" alt="">
                            </a>
                        </div> -->
                        <!-- Single Banner End -->
                    <!-- </div>
                    <div class="col-lg-3 col-md-3"> -->
                        <!-- Single Banner Start -->
                        <!-- <div class="single-banner mb-30">
                            <a href="#">
                                <img src="assets/images/banner/h1-banner-3.png" alt="">
                            </a>
                        </div> -->
                        <!-- Single Banner End -->
                    <!-- </div>
                </div>
            </div>
        </div> -->
        <!-- Banner section end -->

        <!--List Product section start-->
        <div
            class="list-section section pt-60 pt-lg-75 pt-md-65 pt-sm-55 pt-xs-45 pb-30 pb-lg-10 pb-md-0 pb-sm-0 pb-xs-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-40 mb-sm-30 mb-xs-20">
                        <div class="row">
                            <div class="col-12">
                                <!--List Product Section Title Start-->
                                <div class="list-product-section-title mb-30">
                                    <h2>Bán Chạy</h2>
                                </div>
                                <!--List Product Section Title End-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="tf-element-carousel" data-slick-options='{
                                    "slidesToShow": 1,
                                    "slidesToScroll": 1,
                                    "infinite": true,
                                    "arrows": true,
                                    "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                                    "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                                    }' data-slick-responsive='[
                                    {"breakpoint":768, "settings": {
                                    "slidesToShow": 1,
                                    "arrows": false,
                                    "autoplay": true
                                    }},
                                    {"breakpoint":575, "settings": {
                                    "slidesToShow": 1,
                                    "arrows": false,
                                    "autoplay": true
                                    }}
                                    ]'>
                                    <div class="list-product-group">
                                        <?php
                                        foreach ($dstop10 as $sp) {
                                            extract($sp);
                                            
                                            # code...
                                        
                                       echo '<div class="single-list-product">
                                            <div class="product-image">
                                                <a href="index.php?act=chitietsanpham&idsp='.$id_sanpham.'&iddm='.$id_danhmuc.'"><img
                                                        src=img/'.$img.'></a>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="index.php?act=chitietsanpham&idsp='.$id_sanpham.'&iddm='.$id_danhmuc.'">'.$ten_sp.' </a></h3>
                                                <h4 class="price"><span class="new" style="color:red;">'.number_format($gia_sp).'</span><span style=" font-size: 14px;">đ</span></h4>
                                                        
                                            </div>
                                        </div>';
                                        }
                                        ?>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-40 mb-sm-30 mb-xs-20">
                        <div class="row">
                            <div class="col-12">
                                <!--List Product Section Title Start-->
                                <div class="list-product-section-title mb-30">
                                    <h2>Giảm giá</h2>
                                </div>
                                <!--List Product Section Title End-->
                            </div>
                        </div>
                       
                                    <div class="list-product-group">
                                        <?php
                                        foreach ($topsale as $sp) {
                                            extract($sp);
                                           
                                       echo '<div class="single-list-product">
                                            <div class="product-image">
                                                <a href="index.php?act=chitietsanpham&idsp='.$id_sanpham.'&iddm='.$id_danhmuc.'"><img
                                                        src=img/'.$img.'></a>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="index.php?act=chitietsanpham&idsp='.$id_sanpham.'&iddm='.$id_danhmuc.'">'.$ten_sp.'</a></h3>
                                                <h4 class="price"><span class="new" style="color:red;">'.number_format($gia_sp).'</span><span style=" font-size: 14px;">đ</span></h4>
                                            </div>
                                        </div>';
                                        }
                                        ?>
                                        
                                    
                                    
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-40 mb-sm-30 mb-xs-20">
                        <div class="row">
                            <div class="col-12">
                                <!--List Product Section Title Start-->
                                <div class="list-product-section-title mb-30">
                                    <h2>Hàng mới</h2>
                                </div>
                                <!--List Product Section Title End-->
                            </div>
                        </div>
                        
                                    <?php
                                    foreach ($hangmoi as $sp) {
                                        extract($sp);
                                       
                                        echo '<div class="single-list-product">
                                            <div class="product-image">
                                                <a href="index.php?act=chitietsanpham&idsp='.$id_sanpham.'&iddm='.$id_danhmuc.'"><img
                                                        src=img/'.$img.'></a>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="index.php?act=chitietsanpham&idsp='.$id_sanpham.'&iddm='.$id_danhmuc.'">'.$ten_sp.'</a></h3>
                                                <h4 class="price"><span class="new" style="color:red;">'.number_format($gia_sp).'</span><span style=" font-size: 14px;">đ</span></h4>
                                            </div>
                                        </div>';
                                    }
                                        ?>
                                        <!-- Single List Product End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--List Product section end-->

        <!--Brand section start-->
        <div
            class="brand-section section pt-90 pt-lg-70 pt-md-65 pt-sm-55 pt-xs-40 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
            <div class="container">
                <div class="row">
                    <!--Brand Slider start-->
                    <div class="tf-element-carousel section" data-slick-options='{
                        "slidesToShow": 5,
                        "slidesToScroll": 1,
                        "infinite": true,
                        "arrows": false,
                        "autoplay": true
                        }' data-slick-responsive='[
                        {"breakpoint":1199, "settings": {
                        "slidesToShow": 4
                        }},
                        {"breakpoint":992, "settings": {
                        "slidesToShow": 4
                        }},
                        {"breakpoint":768, "settings": {
                        "slidesToShow": 3
                        }},
                        {"breakpoint":576, "settings": {
                        "slidesToShow": 1
                        }}
                        ]'>
                        <div class="brand col"><a href="#"><img src="assets/images/brands/brand-1.png" alt=""></a>
                        </div>
                        <div class="brand col"><a href="#"><img src="assets/images/brands/brand-2.png" alt=""></a>
                        </div>
                        <div class="brand col"><a href="#"><img src="assets/images/brands/brand-3.png" alt=""></a>
                        </div>
                        <div class="brand col"><a href="#"><img src="assets/images/brands/brand-4.png" alt=""></a>
                        </div>
                        <div class="brand col"><a href="#"><img src="assets/images/brands/brand-5.png" alt=""></a>
                        </div>
                    </div>
                    <!--Brand Slider end-->
                </div>
            </div>
        </div>
        <!--Brand section end-->
