<!doctype html>
<html class="no-js" lang="zxx">
<!-- Mirrored from angfuzsoft.com/html/acadu/demo/cart.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Nov 2022 16:04:37 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Acadu - Online Courses & Education HTML Template - Cart</title>
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

    <div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
        <div class="container z-index-common">
            <h1 class="breadcumb-title">ĐĂNG KÝ LỚP HỌC</h1>
            <ul class="breadcumb-menu">
                <li><a href="index.php">Trang chủ</a></li>
                <li>Đăng ký lớp học</li>
            </ul>
        </div>
    </div>
    <div class="as-cart-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="woocommerce-notices-wrapper">
                <div class="woocommerce-message">Đăng ký khóa học phù hợp dành cho bạn</div>
            </div>
            <form action="#" class="woocommerce-cart-form">
                <table class="cart_table">
                    <thead>
                        <tr>
                            <th class="cart-col-image">ẢNH</th>
                            <th class="cart-col-productname">TÊN KHÓA HỌC</th>
                            <th class="cart-col-price">GIÁ</th>
                            <th class="cart-col-quantity">SỐ SLOT CÒN LẠI</th>
                            <th class="cart-col-total">HỌC PHÍ</th>
                            <th class="cart-col-total">THỜI GIAN BẮT ĐẦU</th>
                            <th class="cart-col-remove">ĐĂNG KÝ</th>
                        </tr>
                    </thead>
                    <tbody>



                    <?php foreach ($listone_khoahoc as $index => $value){ ?>
                        <tr class="cart_item">
                            <td data-title="Product"><a class="cart-productimage" href=" "><img
                                        width="91" height="91" src="../Upfileanh/<?php echo $value['anh'] ?>" alt="Image"></a></td>
                            <td data-title="Name"><a class="cart-productname" href=" "><?php echo $value['ten_khoa_hoc'] ?>"</a>
                            </td>
                            <td data-title="Price"><span class="amount"><bdi><span>$</span><?php echo $value['gia'] ?></bdi></span></td>
                            <td data-title="Quantity">
                                <div class="quantity">
                                    </button> <p>1</p>

                                </div>
                            </td>
                            <td data-title="Total"><span class="amount"><bdi><span>$</span><?php echo $value['gia'] ?></bdi></span></td>
                            <td><p><?php
                                        $time= date("d-m-Y", strtotime($value['thoi_gian_hoc']));
                                        echo $time ;
                                        ?></p></td>
                            <td data-title=""><a href="index.php?act=add_dangky"
                                                 class="as-btn">ĐĂNG KÝ NGAY<i class="fas fa-arrow-right ms-2"></i></a> </td>
                        </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </form>

        </div>
    </div>
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
                            <h2 class="mb-25">Điều đó đưa bạn lên cấp độ tiếp theo</h2>
                            <a href="index.php?act=add_dangky"
                                class="as-btn">ĐĂNG KÝ NGAY<i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="shape-mockup movingX z-index-n1" data-bottom="0%" data-left="44%"><img
                        src="assets/img/shape/dot_shape_1.png" alt="shapes"></div>
            </div>
        </div>
    </section>


    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
<!-- Mirrored from angfuzsoft.com/html/acadu/demo/cart.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Nov 2022 16:04:37 GMT -->

</html>