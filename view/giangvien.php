<div class="preloader"><button class="as-btn style3 preloaderCls">Cancel Preloader</button>
    <div class="preloader-inner"><span class="loader"></span></div>
</div>
<div class="sidemenu-wrapper d-none d-lg-block">
    <div class="sidemenu-content"><button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
        <div class="widget woocommerce widget_shopping_cart">
            <h3 class="widget_title">Shopping cart</h3>
            <div class="widget_shopping_cart_content">
                <ul class="woocommerce-mini-cart cart_list product_list_widget">
                    <li class="woocommerce-mini-cart-item mini_cart_item"><a href="#"
                                                                             class="remove remove_from_cart_button"><i class="far fa-times"></i></a> <a href="#"><img
                                src="assets/img/cart/cart_1_1.jpg" alt="Cart Image">HTML5 Course</a> <span
                            class="quantity">1 × <span class="woocommerce-Price-amount amount"><span
                                    class="woocommerce-Price-currencySymbol">$</span>40.00</span></span></li>
                    <li class="woocommerce-mini-cart-item mini_cart_item"><a href="#"
                                                                             class="remove remove_from_cart_button"><i class="far fa-times"></i></a> <a href="#"><img
                                src="assets/img/cart/cart_1_2.jpg" alt="Cart Image">JS ES6 Course</a> <span
                            class="quantity">1 × <span class="woocommerce-Price-amount amount"><span
                                    class="woocommerce-Price-currencySymbol">$</span>99.00</span></span></li>
                    <li class="woocommerce-mini-cart-item mini_cart_item"><a href="#"
                                                                             class="remove remove_from_cart_button"><i class="far fa-times"></i></a> <a href="#"><img
                                src="assets/img/cart/cart_1_3.jpg" alt="Cart Image">PHP Course</a> <span
                            class="quantity">1 × <span class="woocommerce-Price-amount amount"><span
                                    class="woocommerce-Price-currencySymbol">$</span>56.00</span></span></li>
                    <li class="woocommerce-mini-cart-item mini_cart_item"><a href="#"
                                                                             class="remove remove_from_cart_button"><i class="far fa-times"></i></a> <a href="#"><img
                                src="assets/img/cart/cart_1_4.jpg" alt="Cart Image">Python Course</a> <span
                            class="quantity">1 × <span class="woocommerce-Price-amount amount"><span
                                    class="woocommerce-Price-currencySymbol">$</span>23.00</span></span></li>
                    <li class="woocommerce-mini-cart-item mini_cart_item"><a href="#"
                                                                             class="remove remove_from_cart_button"><i class="far fa-times"></i></a> <a href="#"><img
                                src="assets/img/cart/cart_1_5.jpg" alt="Cart Image">WordPress Course</a> <span
                            class="quantity">1 × <span class="woocommerce-Price-amount amount"><span
                                    class="woocommerce-Price-currencySymbol">$</span>100.00</span></span></li>
                </ul>
                <p class="woocommerce-mini-cart__total total"><strong>Subtotal:</strong> <span
                        class="woocommerce-Price-amount amount"><span
                            class="woocommerce-Price-currencySymbol">$</span>318.00</span></p>
                <p class="woocommerce-mini-cart__buttons buttons"><a href="dangky_kh.php" class="as-btn wc-forward">View
                                                                                                                    cart</a> <a href="checkout.php" class="as-btn checkout wc-forward">Checkout</a></p>
            </div>
        </div>
    </div>
</div>
<div class="popup-search-box d-none d-lg-block"><button class="searchClose"><i class="fal fa-times"></i></button>
    <form action="#"><input type="text" placeholder="What are you looking for?"> <button type="submit"><i
                class="fal fa-search"></i></button></form>
</div>


<div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
    <div class="container z-index-common">
        <h1 class="breadcumb-title">Giảng viên</h1>
        <ul class="breadcumb-menu">
            <li><a href="index.html">Trang Chủ</a></li> <i style="color: white; width: 20px" class='bx bx-right-arrow-alt'></i>
            <li>Giảng Viên</li>
        </ul>
    </div>
</div>
<section class="bg-white space">
    <div class="container">

        <div class="row gy-4">
            <?php
            foreach($listall_giangvien as $index => $value){
            ?>
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="team-grid">
                    <div class="team-img"><img src="../Upfileanh/giangvien/<?php echo $value['hinh_gv'] ?>" style="height: 400px" alt="Team"></div>
                    <div class="team-content">
                        <h3 class="team-title"><a style="font-family:'Roboto', sans-serif" href="index.php?act=ct_giangvien&id=<?php echo $value['magv'] ?>"><?php echo $value['ten_gv'] ?></a></h3><span
                            class="team-desig">Giảng Viên</span>
                    </div>
                    <div class="team-info"><span><i class="fa-light fa-file"></i><?php echo count(list_lop_magv($value['magv']));  ?> Lớp</span> <span
                            class="line"></span> <span><i class="fa-light fa-users"></i> <?php echo count(list_lop_soluong($value['magv']));  ?> Học Viên</span></div>
                </div>
            </div>
            <?php }?>
        </div>

    </div>


</section>
<section class="space bg-smoke">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 mb-35 mb-xl-0">
                <div class="text-center text-xl-start"><img src="assets/img/normal/vector_3.png" alt="vector"></div>
            </div>
            <div class="col-xl-6 text-center text-xl-start">
                <div class="title-area mb-30"><span class="sub-title" style="font-family:Arial">Bạn có thể biết ? </span>
                    <h2 class="sec-title fw-semibold" style="font-family:Arial">Hãy bắt đầu sự nghiệp của bạn với Acadu Education</h2>
                </div>
                <p class="mb-30" style="font-family:Arial">Với đội ngũ giảng viên chất lượng và có kinh nghiệm hẳn 10 năm trong lĩnh vực giảng dạy tiếng anh. Chúng tôi cam kết sẽ đưa cho bạn những tài liệu học bám sát với các đề thi.</p><a href="index.php?act=khoa_hoc"
                                                                                                                                                                                                                      class="as-btn style4">Hãy bắt đầu với lớp học<i class="far fa-play ms-2"></i></a>
            </div>
        </div>
    </div>
</section>
<?php
if(isset($_SESSION['user'])){
?>

<?php }else{ ?>
    <section class="bg-smoke" data-pos-for=".footer-wrapper" data-sec-pos="bottom-half">
        <div class="container">
            <div class="cta-wrap">
                <div class="row flex-row-reverse justify-content-between">
                    <div class="col-lg-6">
                        <div class="cta-img"><img src="assets/img/normal/cta_1_1.png" alt="Image"></div>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <div class="cta-content">
                            <h2 class="fs-40 fw-light text-theme mb-10" style="font-family:Arial">Học hỏi từ nền tảng của chúng tôi</h2>
                            <h2 class="mb-25" style="font-family:Arial">Điều đó đưa bạn lên cấp độ tiếp theo</h2><a href="index.php?act=add_dangky"
                                                                                          class="as-btn">Đăng Ký ngay<i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="shape-mockup movingX z-index-n1" data-bottom="0%" data-left="44%"><img
                            src="assets/img/shape/dot_shape_1.png" alt="shapes"></div>
            </div>
        </div>
    </section>
<?php } ?>
<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="assets/js/app.min.js"></script>
<script src="assets/js/main.js"></script>
