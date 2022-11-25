<?php
include '../admin/model/pdo.php';
    include "../admin/model/khoahoc.php";

?>

<!doctype html>
<html class="no-js" lang="zxx">
<!-- Mirrored from angfuzsoft.com/html/acadu/demo/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Nov 2022 16:03:16 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AAA</title>
    <meta name="author" content="Angfuzsoft">
    <meta name="description" content="Acadu - Online Courses & Education HTML Template">
    <meta name="keywords" content="Acadu - Online Courses & Education HTML Template">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
            href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700&amp;display=swap"
            rel="stylesheet">
    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
<div class="preloader">
    <button class="as-btn style3 preloaderCls">Cancel Preloader</button>
    <div class="preloader-inner"><span class="loader"></span></div>
</div>
<div class="sidemenu-wrapper d-none d-lg-block">
    <div class="sidemenu-content">
        <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
        <div class="widget woocommerce widget_shopping_cart">
            <h3 class="widget_title">Shopping cart</h3>
            <div class="widget_shopping_cart_content">
                <ul class="woocommerce-mini-cart cart_list product_list_widget">
                    <li class="woocommerce-mini-cart-item mini_cart_item"><a href="#"
                                                                             class="remove remove_from_cart_button"><i
                            class="far fa-times"></i></a> <a href="#"><img
                            src="assets/img/cart/cart_1_1.jpg" alt="Cart Image">HTML5 Course</a> <span
                            class="quantity">1 × <span class="woocommerce-Price-amount amount"><span
                            class="woocommerce-Price-currencySymbol">$</span>40.00</span></span></li>
                    <li class="woocommerce-mini-cart-item mini_cart_item"><a href="#"
                                                                             class="remove remove_from_cart_button"><i
                            class="far fa-times"></i></a> <a href="#"><img
                            src="assets/img/cart/cart_1_2.jpg" alt="Cart Image">JS ES6 Course</a> <span
                            class="quantity">1 × <span class="woocommerce-Price-amount amount"><span
                            class="woocommerce-Price-currencySymbol">$</span>99.00</span></span></li>
                    <li class="woocommerce-mini-cart-item mini_cart_item"><a href="#"
                                                                             class="remove remove_from_cart_button"><i
                            class="far fa-times"></i></a> <a href="#"><img
                            src="assets/img/cart/cart_1_3.jpg" alt="Cart Image">PHP Course</a> <span
                            class="quantity">1 × <span class="woocommerce-Price-amount amount"><span
                            class="woocommerce-Price-currencySymbol">$</span>56.00</span></span></li>
                    <li class="woocommerce-mini-cart-item mini_cart_item"><a href="#"
                                                                             class="remove remove_from_cart_button"><i
                            class="far fa-times"></i></a> <a href="#"><img
                            src="assets/img/cart/cart_1_4.jpg" alt="Cart Image">Python Course</a> <span
                            class="quantity">1 × <span class="woocommerce-Price-amount amount"><span
                            class="woocommerce-Price-currencySymbol">$</span>23.00</span></span></li>
                    <li class="woocommerce-mini-cart-item mini_cart_item"><a href="#"
                                                                             class="remove remove_from_cart_button"><i
                            class="far fa-times"></i></a> <a href="#"><img
                            src="assets/img/cart/cart_1_5.jpg" alt="Cart Image">WordPress Course</a> <span
                            class="quantity">1 × <span class="woocommerce-Price-amount amount"><span
                            class="woocommerce-Price-currencySymbol">$</span>100.00</span></span></li>
                </ul>
                <p class="woocommerce-mini-cart__total total"><strong>Subtotal:</strong> <span
                        class="woocommerce-Price-amount amount"><span
                        class="woocommerce-Price-currencySymbol">$</span>318.00</span></p>
                <p class="woocommerce-mini-cart__buttons buttons"><a href="cart.html" class="as-btn wc-forward">View
                                                                                                                cart</a>
                    <a href="checkout.html" class="as-btn checkout wc-forward">Checkout</a></p>
            </div>
        </div>
    </div>
</div>
<div class="popup-search-box d-none d-lg-block">
    <button class="searchClose"><i class="fal fa-times"></i></button>
    <form action="#"><input type="text" placeholder="What are you looking for?">
        <button type="submit"><i
                class="fal fa-search"></i></button>
    </form>
</div>

<header class="as-header header-layout1">
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-center justify-content-md-between align-items-center gy-2">
                <div class="col-auto d-none d-md-block">
                    <div class="header-links">
                        <ul>
                            <li><i class="fal fa-phone"></i><a href="tel:+256214203215">0812349078</a></li>
                            <li class="d-none d-xl-inline-block"><i class="fal fa-location-dot"></i>Trịnh Văn Bô, Nam Từ
                                                                                                    Liêm, Hà Nội
                            </li>
                            <li><i class="fal fa-clock"></i>T2 - T7: 8:00 - 15:00</li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="header-links">
                        <ul>
                            <li class="d-none d-lg-inline-block"><i class="far fa-user"></i><a
                                    href="dang_nhap.php">Đăng nhập / Đăng ký</a></li>
                            <li>
                                <div class="header-social"><span class="social-title">Theo dõi chúng tôi:</span> <a
                                        href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a> <a
                                        href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a> <a
                                        href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a> <a
                                        href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a> <a
                                        href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <div class="sticky-active">
            <div class="menu-area">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo"><a href="index.html"><img src="assets/img/logo.svg"
                                                                               alt="Acadu"></a></div>
                        </div>
                        <div class="col-auto">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <nav class="main-menu d-none d-lg-inline-block">
                                        <div class="col-auto">
                                            <nav class="main-menu d-none d-lg-inline-block">
                                                <ul>
                                                    <li class=""><a href="index.html">Trang chủ</a>

                                                    </li>
                                                    <li class=""><a href="course.php">Khóa học</a>

                                                    </li>
                                                    <li class=""><a href="team.html">Giáo viên</a>

                                                    </li>


                                                    <li><a href="contact.html">Liên hệ</a></li>
                                                </ul>
                                            </nav>
                                            <button type="button" class="as-menu-toggle d-inline-block d-lg-none"><i
                                                    class="far fa-bars"></i></button>
                                        </div>
                                    </nav>
                                    <button type="button" class="as-menu-toggle d-inline-block d-lg-none"><i
                                            class="far fa-bars"></i></button>
                                </div>
                                <div class="col-auto d-none d-xxl-block">
                                    <div class="header-button">
                                        <button type="button"
                                                class="icon-btn searchBoxToggler"><i class="far fa-search"></i></button>
                                        <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i> <span
                                                class="badge">3</span> </a><a href="#"
                                                                              class="icon-btn sideMenuToggler"><i
                                            class="far fa-cart-shopping"></i>
                                        <span class="badge bg-theme2">5</span> </a><a href="contact.html"
                                                                                      class="as-btn ml-25">Đăng Ký
                                                                                                           Ngay<i
                                                class="fas fa-arrow-right ms-2"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="as-hero-wrapper hero-5">
    <div class="hero-slider-5 as-carousel" data-fade="true" data-slide-show="1" data-md-slide-show="1">
        <div class="as-hero-slide">
            <div class="as-hero-bg" data-bg-src="assets/img/hero/hero_bg_5_1.jpg"><img
                    src="assets/img/hero/hero_overlay_5.png" alt="Hero Image"></div>
            <div class="container">
                <div class="hero-style5"><span class="hero-subtitle" data-ani="slideinleft"
                                               data-ani-delay="0.1s">Tận hưởng nền tảng học tập tốt nhất Acadu</span>
                    <h1 class="hero-title" data-ani="slideinleft" data-ani-delay="0.3s">Tìm sự nghiệp tốt nhất của bạn
                                                                                        và đạt được
                    </h1>
                    <h1 class="hero-title" data-ani="slideinleft" data-ani-delay="0.5s">cơ hội cho tương lai của bạn.
                    </h1>
                    <p class="hero-text" data-ani="slideinleft" data-ani-delay="0.6s">Học tập đẳng cấp thế giới cho
                                                                                      bất cứ ai, bất cứ nơi nào để tăng
                                                                                      kiến ​​thức. Hãy để sự sáng tạo
                                                                                      của bạn tỏa sáng và bắt đầu đánh
                                                                                      giá cao
                                                                                      tương lai ngày hôm nay và gây ấn
                                                                                      tượng với khán giả của bạn.</p>
                    <div class="btn-wrap" data-ani="slideinleft" data-ani-delay="0.7s"><a href="course.php"
                                                                                          class="as-btn style3">
                        Khám phá các khóa học<i class="fas fa-arrow-right ms-2"></i></a> <a
                            href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="video-link popup-video"><span
                            class="play-btn"><i class="fas fa-play"></i></span><span
                            class="btn-text">Xem video</span></a></div>
                </div>
            </div>
        </div>
        <div class="as-hero-slide">
            <div class="as-hero-bg" data-bg-src="assets/img/hero/hero_bg_5_1.jpg"><img
                    src="assets/img/hero/hero_overlay_5.png" alt="Hero Image"></div>
            <div class="container">
                <div class="hero-style5"><span class="hero-subtitle" data-ani="slideinleft"
                                               data-ani-delay="0.1s">Tận hưởng nền tảng học tập tốt nhất Acadu</span>
                    <h1 class="hero-title" data-ani="slideinleft" data-ani-delay="0.3s">Tìm sự nghiệp tốt nhất của bạn
                                                                                        và đạt được
                    </h1>
                    <h1 class="hero-title" data-ani="slideinleft" data-ani-delay="0.5s">cơ hội cho tương lai của bạn.
                    </h1>
                    <p class="hero-text" data-ani="slideinleft" data-ani-delay="0.6s">Học tập đẳng cấp thế giới cho
                                                                                      bất cứ ai, bất cứ nơi nào để tăng
                                                                                      kiến ​​thức. Hãy để sự sáng tạo
                                                                                      của bạn tỏa sáng và bắt đầu đánh
                                                                                      giá cao
                                                                                      tương lai ngày hôm nay và gây ấn
                                                                                      tượng với khán giả của bạn.</p>
                    <div class="btn-wrap" data-ani="slideinleft" data-ani-delay="0.7s"><a href="course.php"
                                                                                          class="as-btn style3">
                        Khám phá các khóa học<i class="fas fa-arrow-right ms-2"></i></a> <a
                            href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="video-link popup-video"><span
                            class="play-btn"><i class="fas fa-play"></i></span><span
                            class="btn-text">Xem video</span></a></div>
                </div>
            </div>
        </div>

        <div class="as-hero-slide">
            <div class="as-hero-bg" data-bg-src="assets/img/hero/hero_bg_5_3.jpg"><img
                    src="assets/img/hero/hero_overlay_5.png" alt="Hero Image"></div>
            <div class="container">
                <div class="hero-style5"><span class="hero-subtitle" data-ani="slideinleft"
                                               data-ani-delay="0.1s">Học với Acadu, học viện học tập tốt nhất</span>
                    <h1 class="hero-title" data-ani="slideinleft" data-ani-delay="0.3s">Bắt đầu với một khóa học tốt
                                                                                        nhất
                    </h1>
                    <h1 class="hero-title" data-ani="slideinleft" data-ani-delay="0.5s">và có được công việc tương lai
                                                                                        tươi sáng.
                    </h1>
                    <p class="hero-text" data-ani="slideinleft" data-ani-delay="0.6s">Học tập đẳng cấp thế giới cho
                                                                                      bất cứ ai, bất cứ nơi nào để tăng
                                                                                      kiến ​​thức. Hãy để sự sáng tạo
                                                                                      của bạn tỏa sáng và bắt đầu đánh
                                                                                      giá cao
                                                                                      tương lai ngày hôm nay và gây ấn
                                                                                      tượng với khán giả của bạn.</p>
                    <div class="btn-wrap" data-ani="slideinleft" data-ani-delay="0.7s"><a href="course.php"
                                                                                          class="as-btn style3">Khám phá
                                                                                                                các khóa
                                                                                                                học<i
                                class="fas fa-arrow-right ms-2"></i></a> <a
                            href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="video-link popup-video"><span
                            class="play-btn"><i class="fas fa-play"></i></span><span class="btn-text">Xem video
                                    </span></a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-shape"></div>
</div>
<div class="space" id="about-sec">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6">
                <div class="img-box1"><img class="w-100" src="assets/img/normal/about_1_1.png" alt="About">
                    <div class="counter-box">
                        <h3 class="counter-title"><span class="counter-number">256</span>+</h3><span
                            class="counter-text">Khóa học thành công</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="mb-35 mb-xl-5">
                    <h2 class="fs-40 text-theme fw-light mb-0">Chào mừng bạn đến với</h2>
                    <h3 class="h1">Acadu </h3>
                </div>
                <p class="mt-n2 mb-35">Hợp tác đơn giản hóa các mạng thân thiện với người dùng sau khi lấy nguyên tắc
                                       làm trung tâm phối hợp các phương pháp hiệu quả để trao quyền cho các thị trường
                                       ngách phân tán theo đuổi định vị thị trường về sự sẵn sàng của web sau các ứng
                                       dụng hút tài nguyên.</p>
                <div class="feature-box-wrap mb-45">
                    <div class="feature-box">
                        <div class="feature-box_icon"><img src="assets/img/icon/about_1_1.png" alt="icon"></div>
                        <div class="feature-box_content">
                            <h3 class="feature-box_title">Giáo dục đại học</h3>
                            <p class="feature-box_text">Với các khóa học linh hoạt</p>
                        </div>
                    </div>
                    <div class="feature-box">
                        <div class="feature-box_icon"><img src="assets/img/icon/about_1_2.png" alt="icon"></div>
                        <div class="feature-box_content">
                            <h3 class="feature-box_title">Giáo dục sau đại học</h3>
                            <p class="feature-box_text">Học trực tuyến linh hoạt</p>
                        </div>
                    </div>
                </div>
                <div class="checklist mb-45">
                    <ul>
                        <li>Môi trường học tập độc đáo của chúng tôi thúc đẩy sự phát triển thể chất</li>
                        <li>Khám phá trong khi chương trình giảng dạy sáng tạo của chúng tôi kết hợp</li>
                    </ul>
                </div>
                <a href="about.html" class="as-btn">TÌM HIỂU THÊM</a>
            </div>
        </div>
    </div>
    <div class="shape-mockup jump z-index3 d-none d-sm-block" data-top="30%" data-left="11%"><img
            src="assets/img/shape/circle_1.png" alt="shapes"></div>
    <div class="shape-mockup jump-reverse d-none d-xl-block" data-bottom="30%" data-left="4%"><img
            src="assets/img/shape/circle_2.png" alt="shapes"></div>
    <div class="shape-mockup" data-bottom="-9.5%" data-right="0"><img src="assets/img/shape/line_1.png"
                                                                      alt="shapes"></div>
</div>
<div class="px-3" data-pos-for="#course-sec" data-sec-pos="bottom-half">
    <div class="notification-box">
        <div class="notification-icon"><img src="assets/img/icon/notification.png" alt="icon"></div>
        <div class="notification-content">
            <h4 class="notification-title">Nhận các khóa học trực tuyến</h4>
            <p class="notification-text"></p>
        </div>
        <a href="about.html" class="as-btn">THAM GIA VỚI CHÚNG TÔI<i class="fas fa-arrow-right ms-2"></i></a>
    </div>
</div>
<section class="space" id="course-sec" data-bg-src="assets/img/bg/course_bg_1.jpg">
    <div class="container">
        <div class="title-area text-center"><span class="sub-title"><i class="fal fa-book me-2"></i>
                    Các khóa học nổi tiếng</span>
            <h2 class="sec-title">Khóa học <span class="text-theme fw-light"> hàng đầu</span> của chúng tôi</h2>
        </div>
        <div class="row slider-shadow as-carousel" data-slide-show="4" data-ml-slide-show="3" data-lg-slide-show="3"
             data-md-slide-show="2">
            <?php foreach (listall_khoahoc () as $key=>$value){ ?>
            <div class="col-md-6 col-lg-4 col-xxl-3 "  ">

                <div class="course-box ">

                    <div class="course-img"><img src="assets/img/course/course_2_1.jpg" alt="course"> <span
                            class="tag">Free</span></div>
                    <div class="course-content">
                        <div class="course-author">
                            <div class="author-info"><img src="assets/img/course/author.jpg" alt="author"> <a
                                        href="course.php" class="author-name">Kevin Perry</a></div>
                            <div class="course-rating">
                                <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5"><span
                                        style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                </div>
                                (4.00)
                            </div>
                        </div>

                        <div>

                            <h3 class="course-title"><a href="course-details.html"><?php echo $value['ten_khoa_hoc'] ?></a></h3>
                            <div>

                            </div>
                            <div class="course-meta"><span><i class="fal fa-file"></i>Bài 8</span> <span><i
                                            class="fal fa-user"></i>Sinh viên 50</span> <span><i class="fal fa-eye"></i>Lượt xem:
                                    12 Nghìn</span></div>


                        </div>

                    </div>
                </div>
            </div>
        <?php }?>

        </div>
    </div>
</section>
<section class="space position-relative">
    <div class="bg-img" data-bg-src="assets/img/bg/cta_bg_1.jpg"><img src="assets/img/bg/bg_overlay_1.png"
                                                                      alt="overlay"></div>
    <div class="container text-center">
        <div class="title-area text-center mb-40"><span class="sub-title text-white"><i
                class="fal fa-book me-2"></i>Bạn đã sẵn sàng cho ưu đãi này chưa</span>
            <h2 class="sec-title text-white">Ưu đãi 50% cho 50 người đầu tiên<br><span class="fw-light">Học sinh và Cố vấn</span>
            </h2>
        </div>
        <div class="btn-group justify-content-center"><a href="service.html" class="as-btn shadow-none">Trở thành một
                                                                                                        Sinh viên<i
                    class="fas fa-arrow-right ms-2"></i></a> <a href="contact.html"
                                                                class="as-btn style2">Trở thành một giáo viên<i
                class="fas fa-arrow-right ms-2"></i></a></div>
    </div>
</section>
<div class="space">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6">
                <div class="img-box2"><img class="w-100" src="assets/img/normal/about_1_2.jpg" alt="About">
                    <div class="student-count">
                        <h5 class="title">Tổng số học sinh</h5>
                        <div class="avater-list">
                            <div class="avater"><img src="assets/img/normal/student_1_1.png" alt="avater"></div>
                            <div class="avater"><img src="assets/img/normal/student_1_2.png" alt="avater"></div>
                            <div class="avater"><img src="assets/img/normal/student_1_3.png" alt="avater"></div>
                            <div class="avater"><img src="assets/img/normal/student_1_4.png" alt="avater"></div>
                            <span class="count"><span class="counter-number">56</span>+</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="mb-35 mb-xl-5">
                    <h2 class="fs-40 text-theme fw-light mb-0">Thứ mọi người nghĩ</h2>
                    <h3 class="h2">Về công ty Acadu</h3>
                </div>
                <p class="mt-n2 mb-25">Phối hợp trực quan hóa nội dung thay thế trước lõi chức năng chéo
                                       Nhanh chóng quản lý giá trị chuẩn hóa thông qua các lợi ích tập trung. Nhanh
                                       chóng xác định lại cao
                                       thị trường ngách hiệu quả với các tài liệu plug-and-play chuyên nghiệp lấy khách
                                       hàng làm trung tâm
                                       các giải pháp</p>
                <div class="checklist style2 mb-35">
                    <ul>
                        <li>
                            <h5 class="check-title">Tỷ giá cạnh tranh</h5>
                            <p class="check-text">Dữ liệu chiến thuật của người xem liền mạch thông qua các dịch vụ.</p>
                        </li>
                        <li>
                            <h5 class="check-title">Chứng chỉ trực tuyến</h5>
                            <p class="check-text">Dữ liệu chiến thuật của người xem liền mạch thông qua các dịch vụ.</p>
                        </li>
                    </ul>
                </div>
                <a href="about.html" class="as-btn">Tìm hiểu thêm<i class="fas fa-arrow-right ms-2"></i></a>
            </div>
        </div>
    </div>
    <div class="shape-mockup jump d-none d-xxl-block" data-bottom="30%" data-right="0"><img
            src="assets/img/shape/dot_shape_2.png" alt="shapes"></div>
</div>
<section class="bg-theme" data-bg-src="assets/img/bg/bg_overlay_2.png">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-xl-3 counter-card-wrap">
                <div class="counter-card">
                    <h2 class="counter-card_number"><span class="counter-number">3526</span>+</h2><span
                        class="counter-card_text"><strong>Thành công</strong> Đào tạo</span>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 counter-card-wrap">
                <div class="counter-card">
                    <h2 class="counter-card_number"><span class="counter-number">12,360</span>+</h2><span
                        class="counter-card_text"><strong>Các lớp học</strong> Hoàn thành</span>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 counter-card-wrap">
                <div class="counter-card">
                    <h2 class="counter-card_number"><span class="counter-number">97.12</span>+</h2><span
                        class="counter-card_text"><strong>Sự hài lòng</strong> Đánh giá</span>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 counter-card-wrap">
                <div class="counter-card">
                    <h2 class="counter-card_number"><span class="counter-number">96.22</span>+</h2><span
                        class="counter-card_text"><strong>Thành công
</strong>  Đánh giá</span>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="space-top space-extra-bottom">
    <div class="container mb-n2">
        <div class="title-area text-center"><span class="sub-title"><i class="fal fa-book me-2"></i>Chiến lược làm việc</span>
            <h2 class="sec-title">Quá trình<span class="text-theme fw-light">làm việc của chúng tôi</span></h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-6 col-lg-4 process-card-wrap">
                <div class="process-card">
                    <div class="process-card_img"><img src="assets/img/normal/process_1_1.jpg" alt="process"></div>
                    <h2 class="process-card_title">Nhận được sự chứng minh của những gì<br>bạn đã học</h2>
                    <p class="process-card_text">Các tiêu chuẩn về kỹ năng lãnh đạo tổng hợp chuyên môn tối ưu hơn là
                                                 hơn là kỹ năng lãnh đạo sáng tạo.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 process-card-wrap">
                <div class="process-card">
                    <div class="process-card_img"><img src="assets/img/normal/process_1_2.jpg" alt="process"></div>
                    <h2 class="process-card_title">Dễ dàng chia sẻ<br>thành tựu của bạn</h2>
                    <p class="process-card_text">Các tiêu chuẩn về kỹ năng lãnh đạo tổng hợp chuyên môn tối ưu hơn là
                                                 hơn là kỹ năng lãnh đạo sáng tạo.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 process-card-wrap">
                <div class="process-card">
                    <div class="process-card_img"><img src="assets/img/normal/process_1_3.jpg" alt="process"></div>
                    <h2 class="process-card_title">Lãnh đạo cuộc sống<br>tương lai</h2>
                    <p class="process-card_text">Các tiêu chuẩn về kỹ năng lãnh đạo tổng hợp chuyên môn tối ưu hơn là
                                                 hơn là kỹ năng lãnh đạo sáng tạo.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-mockup spin" data-top="20%" data-left="5%"><img src="assets/img/shape/plus_1.png"
                                                                      alt="shapes"></div>
    <div class="shape-mockup jump d-none d-xl-block" data-bottom="10%" data-right="0%"><img
            src="assets/img/shape/square_1.png" alt="shapes"></div>
</section>
<section class="">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 mb-30 mb-xl-0">
                <div class="cta-card" data-bg-src="assets/img/bg/cta_bg_2.jpg">
                    <div class="title-area mb-40"><span class="sub-title"><i class="fal fa-book me-2"></i>Các khóa học phổ biến</span>
                        <h4 class="sec-title">Nhận các khóa học tốt nhất &<br>Nâng cấp kỹ năng của bạn</h4>
                    </div>
                    <a href="contact.html" class="as-btn">Tham gia với chúng tôi<i
                            class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="cta-card" data-bg-src="assets/img/bg/cta_bg_3.jpg">
                    <div class="title-area mb-40"><span class="sub-title"><i class="fal fa-book me-2"></i>Các khóa học phổ biến</span>
                        <h4 class="sec-title">Nhận các khóa học tốt nhất &<br>Nâng cấp kỹ năng của bạn</h4>
                    </div>
                    <a href="contact.html" class="as-btn">Tham gia với chúng tôi<i
                            class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="space">
    <div class="container z-index-common">
        <div class="title-area text-center"><span class="sub-title"><i class="fal fa-book me-2"></i>Các sự kiện nổi bật</span>
            <h2 class="sec-title">Sự kiện <span class="text-theme fw-light">sắp tới</span></h2>
        </div>
        <div class="row">
            <div class=" ">
                <div class="event-card">
                    <div class="event-card_img"><img src="assets/img/event/event_1_1.jpg" alt="event"></div>
                    <div class="event-card_content">
                        <div class="event-meta">
                            <p><i class="fal fa-location-dot"></i>Số 1 Trịnh Văn Bô, Nam Từ Liêm</p>
                            <p><i class="fal fa-clock"></i>08:00 S - 10:00 T</p>
                        </div>
                        <h3 class="event-card_title"><a href="event-details.html">Linh hồn nào có thể công nghệ cho
                                                                                  chúng tôi về thiết kế web</a></h3>
                        <div class="event-card_bottom"><a href="event-details.html" class="as-btn">XEM SỰ KIỆN</a>
                            <div class="event-author">
                                <div class="avater"><img src="assets/img/event/avater.jpg" alt="avater"></div>
                                <span
                                        class="author-name">David Smith</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="text-center mt-20 mt-xl-5"><a href="event.html" class="as-btn">Xem tất cả sự kiện<i
                class="fas fa-arrow-right ms-2"></i></a></div>
    </div>
    <div class="shape-mockup jump d-none d-md-block" data-top="0%" data-left="0%"><img
            src="assets/img/shape/dot_shape_3.png" alt="shapes"></div>
    <div class="shape-mockup jump d-none d-md-block" data-top="4%" data-right="0%"><img
            src="assets/img/shape/cloud_1.png" alt="shapes"></div>
    <div class="shape-mockup jump-reverse d-none d-md-block" data-top="8%" data-right="0%"><img
            src="assets/img/shape/cloud_2.png" alt="shapes"></div>
</section>
<section class="space" data-bg-src="assets/img/bg/testi_bg_1.jpg">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-5 text-center text-lg-start">
                <div class="mb-30 mb-xl-5"><span class="sub-title"><i
                        class="fal fa-book me-2"></i>HỌC SINH HẠNH PHÚC</span>
                    <h2 class="fs-40 text-white fw-light mb-0 mt-n3">Học viên của chúng tôi nói</h2>
                    <h3 class="h2 text-white">Giới thiệu về trường đại học của chúng tôi</h3>
                </div>
                <a href="course-details.html" class="as-btn style2">ĐƯA RA PHẢN HỒI<i
                        class="fas fa-arrow-right ms-2"></i></a>
            </div>
            <div class="col-xl-6 col-lg-7">
                <div class="testi-card-tab" data-asnavfor=".testi-card-slide">
                    <button class="tab-btn active"
                            type="button"><img src="assets/img/testimonial/testi_1_1.jpg" alt="tab-btn image"></button>
                    <button class="tab-btn" type="button"><img src="assets/img/testimonial/testi_1_2.jpg"
                                                               alt="tab-btn image"></button>
                    <button class="tab-btn" type="button"><img
                            src="assets/img/testimonial/testi_1_3.jpg" alt="tab-btn image"></button>
                    <button
                            class="tab-btn" type="button"><img src="assets/img/testimonial/testi_1_4.jpg"
                                                               alt="tab-btn image"></button>
                    <button class="tab-btn" type="button"><img
                            src="assets/img/testimonial/testi_1_5.jpg" alt="tab-btn image"></button>
                    <button
                            class="tab-btn" type="button"><img src="assets/img/testimonial/testi_1_6.jpg"
                                                               alt="tab-btn image"></button>
                </div>
                <div class="testi-card-slide as-carousel" data-fade="true" data-slide-show="1">
                    <div>
                        <div class="testi-card">
                            <p class="testi-card_text">Khôi phục độc đáo các ý tưởng liên cấp với chất lượng 24/365
                                                       vectơ Quyết đoán nắm bắt các kỹ năng lãnh đạo mở rộng cho mảng
                                                       mang tính cách mạng
                                                       công nghệ vật liệu phong phú. Hăng hái trì hoãn tăng trưởng theo
                                                       định hướng thị trường
                                                       chiến lược trong khi quy trình xuất sắc Giải phóng nội tại các
                                                       ứng dụng hiệu quả về chi phí</p>
                            <h3 class="testi-card_name">Vlademir Hilton</h3><span class="testi-card_desig">CEO &
                                    Owner</span>
                        </div>
                    </div>
                    <div>
                        <div class="testi-card">
                            <p class="testi-card_text">Khôi phục vectơ là ý tưởng xen kẽ với chất lượng 24/365
                                                       vectơ Quyết đoán nắm bắt các kỹ năng lãnh đạo mở rộng cho mảng
                                                       mang tính cách mạng
                                                       công nghệ vật liệu phong phú. Hăng hái trì hoãn tăng trưởng theo
                                                       định hướng thị trường
                                                       chiến lược trong khi quy trình xuất sắc Giải phóng nội tại các
                                                       ứng dụng hiệu quả về chi phí
                            </p>
                            <h3 class="testi-card_name">David Milton</h3><span class="testi-card_desig">Store
                                    Owner</span>
                        </div>
                    </div>
                    <div>
                        <div class="testi-card">
                            <p class="testi-card_text">Khôi phục mở rộng là các ý tưởng liên tục với chất lượng 24/365
                                                       vectơ Quyết đoán nắm bắt các kỹ năng lãnh đạo mở rộng cho mảng
                                                       mang tính cách mạng
                                                       công nghệ vật liệu phong phú. Hăng hái trì hoãn tăng trưởng theo
                                                       định hướng thị trường
                                                       chiến lược trong khi quy trình xuất sắc Giải phóng nội tại các
                                                       ứng dụng hiệu quả về chi phí</p>
                            <h3 class="testi-card_name">Abraham Khalil</h3><span class="testi-card_desig">Store
                                    Manager</span>
                        </div>
                    </div>
                    <div>
                        <div class="testi-card">
                            <p class="testi-card_text">Trong khi khôi phục là các ý tưởng liên tục với chất lượng 24/365
                                                       vectơ Quyết đoán nắm bắt các kỹ năng lãnh đạo mở rộng cho mảng
                                                       mang tính cách mạng
                                                       công nghệ vật liệu phong phú. Hăng hái trì hoãn tăng trưởng theo
                                                       định hướng thị trường
                                                       chiến lược trong khi quy trình xuất sắc Giải phóng nội tại các
                                                       ứng dụng hiệu quả về chi phí</p>
                            <h3 class="testi-card_name">David Smithe</h3><span class="testi-card_desig">Shop
                                    Manager</span>
                        </div>
                    </div>
                    <div>
                        <div class="testi-card">
                            <p class="testi-card_text">Trong khi khôi phục là các ý tưởng liên tục với chất lượng 24/365
                                                       vectơ Quyết đoán nắm bắt các kỹ năng lãnh đạo mở rộng cho mảng
                                                       mang tính cách mạng
                                                       công nghệ vật liệu phong phú. Hăng hái trì hoãn tăng trưởng theo
                                                       định hướng thị trường
                                                       chiến lược trong khi quy trình xuất sắc Giải phóng nội tại các
                                                       ứng dụng hiệu quả về chi phí</p>
                            <h3 class="testi-card_name">Justin Dacusta</h3><span class="testi-card_desig">CEO &
                                    Owner</span>
                        </div>
                    </div>
                    <div>
                        <div class="testi-card">
                            <p class="testi-card_text">Trong khi khôi phục là các ý tưởng liên tục với chất lượng 24/365
                                                       vectơ Quyết đoán nắm bắt các kỹ năng lãnh đạo mở rộng cho mảng
                                                       mang tính cách mạng
                                                       công nghệ vật liệu phong phú. Hăng hái trì hoãn tăng trưởng theo
                                                       định hướng thị trường
                                                       chiến lược trong khi quy trình xuất sắc Giải phóng nội tại các
                                                       ứng dụng hiệu quả về chi phí </p>
                            <h3 class="testi-card_name">Ashley Kumara</h3><span class="testi-card_desig">Store
                                    Owner</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="" data-pos-for=".footer-wrapper" data-sec-pos="bottom-half">
    <div class="container">
        <div class="cta-wrap">
            <div class="row flex-row-reverse justify-content-between">
                <div class="col-lg-6">
                    <div class="cta-img"><img src="assets/img/normal/cta_1_1.png" alt="Image"></div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="cta-content">
                        <h2 class="fs-40 fw-light text-theme mb-10">Học hỏi từ nền tảng của chúng tôi</h2>
                        <h2 class="mb-25">Điều đó đưa bạn lên cấp độ tiếp theo</h2><a href="contact.html"
                                                                                      class="as-btn">ĐĂNG KÝ NGAY<i
                            class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="shape-mockup movingX z-index-n1" data-bottom="0%" data-left="44%"><img
                    src="assets/img/shape/dot_shape_1.png" alt="shapes"></div>
        </div>
    </div>
</section>
<footer class="footer-wrapper footer-layout1">
    <div class="widget-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 col-xxl-3 col-xl-4">
                    <div class="widget footer-widget">
                        <div class="as-widget-about">
                            <div class="about-logo"><a href="index.html"><img src="assets/img/logo-white.svg"
                                                                              alt="Acadu"></a></div>
                            <p class="about-text">ACADU- Website đồng hành học tiếng anh cùng mọi người</p>
                            <h4 class="footer-info-title">Theo dõi qua: </h4>
                            <div class="as-social"><a href="https://www.facebook.com/"><i
                                    class="fab fa-facebook-f"></i></a> <a href="https://www.twitter.com/"><i
                                    class="fab fa-twitter"></i></a> <a href="https://www.linkedin.com/"><i
                                    class="fab fa-linkedin-in"></i></a> <a href="https://www.instagram.com/"><i
                                    class="fab fa-instagram"></i></a> <a href="https://www.youtube.com/"><i
                                    class="fab fa-youtube"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">Địa Chỉ</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li><a href="team.html">Trịnh Văn Bô, Nam Từ Liêm, Hà Nội</a></li>
                                <li><a href="team.html">0812349078</a></li>
                                <li><a href="team.html">dannaph26950@fpt.edu.vn</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">Hotline:</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li><a href="team.html">0393xxxxxx</a></li>
                                <li><a href="contact.html">0123xxxxxx</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">Kết nối!</h3>
                        <form class="newsletter-widget">
                            <p class="footer-text">Liên hệ trực tiếp với chúng tôi: </p>
                            <div class="form-group"><input class="form-control" type="email"
                                                           placeholder="Điền email vào đây" required=""> <i
                                    class="fal fa-envelope"></i></div>
                            <button type="submit" class="as-btn shadow-none">Gửi thư</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright-wrap">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                    <p class="copyright-text">Bản Quyền <i class="fal fa-copyright"></i> 2022 <a
                            href="https://themeforest.net/user/angfuz_soft">Thuộc sở hữu </a>. Nhóm 9.</p>
                </div>
                <div class="col-lg-6 text-end d-none d-lg-block">
                    <div class="footer-links">
                        <ul>
                            <li><a href="about.html">Tin tức</a></li>
                            <li><a href="about.html">Sử dụng</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-mockup jump d-none d-xl-block" data-top="24%" data-left="4%"><img
            src="assets/img/shape/footer_shape_1.png" alt="shapes"></div>
    <div class="shape-mockup jump-reverse d-none d-xl-block" data-bottom="20%" data-right="4%"><img
            src="assets/img/shape/footer_shape_2.png" alt="shapes"></div>
    <div class="shape-mockup" data-top="0" data-right="0"><img src="assets/img/shape/footer_shape_3.png"
                                                               alt="shapes"></div>
</footer>
<a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up"></i></a>

<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="assets/js/app.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
<!-- Mirrored from angfuzsoft.com/html/acadu/demo/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Nov 2022 16:03:40 GMT -->

</html>