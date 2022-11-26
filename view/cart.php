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
            <h1 class="breadcumb-title">GIỎ HÀNG</h1>
            <ul class="breadcumb-menu">
                <li><a href="index.php">Trang chủ</a></li>
                <li>Giỏ hàng</li>
            </ul>
        </div>
    </div>
    <div class="as-cart-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="woocommerce-notices-wrapper">
                <div class="woocommerce-message">Chi phí vận chuyển được cập nhật.</div>
            </div>
            <form action="#" class="woocommerce-cart-form">
                <table class="cart_table">
                    <thead>
                        <tr>
                            <th class="cart-col-image">ẢNH</th>
                            <th class="cart-col-productname">TÊN SẢN PHẨM</th>
                            <th class="cart-col-price">GIÁ</th>
                            <th class="cart-col-quantity">SỐ LƯỢNG</th>
                            <th class="cart-col-total">TỔNG</th>
                            <th class="cart-col-remove">XÓA</th>
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
                                <div class="quantity"><button class="quantity-minus qty-btn">
                                        <i
                                            class="far fa-minus"></i>
                                    </button> <input type="number" class="qty-input"
                                        value="1" min="1" max="99">
                                    <button class="quantity-plus qty-btn">
                                        <i
                                            class="far fa-plus"></i></button>
                                </div>
                            </td>
                            <td data-title="Total"><span class="amount"><bdi><span>$</span><?php echo $value['gia'] ?></bdi></span></td>
                            <td data-title="Remove"><a href="#" class="remove"><i class="fal fa-trash-alt"></i></a></td>
                        </tr>
                        <?php } ?>
                        <tr>
                            <td colspan="6" class="actions">
                                <div class="as-cart-coupon"><input type="text" class="form-control"
                                        placeholder="Mã giảm giá..."> <button type="submit" class="as-btn">Áp dụng phiếu giảm giá</button></div><button type="submit" class="as-btn">Cập nhật giỏ hàng</button>
                                <a href="shop.html" class="as-btn">Tiếp tục mua sắm</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
            <div class="row justify-content-end">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <h2 class="h4 summary-title">Tổng số giỏ hàng</h2>
                    <table class="cart_totals">
                        <tbody>
                            <tr>
                                <td>Tổng phụ của giỏ hàng</td>
                                <td data-title="Cart Subtotal"><span class="amount"><bdi><span>$</span>47</bdi></span>
                                </td>
                            </tr>
                            <tr class="shipping">
                                <th>Vận chuyển và xử lý</th>
                                <td data-title="Shipping and Handling">
                                    <ul class="woocommerce-shipping-methods list-unstyled">
                                        <li><input type="radio" id="free_shipping" name="shipping_method"
                                                class="shipping_method"> <label for="free_shipping">Miễn phí vận chuyển</label></li>
                                        <li><input type="radio" id="flat_rate" name="shipping_method"
                                                class="shipping_method" checked="checked"> <label for="flat_rate">Giá cố định</label></li>
                                    </ul>
                                    <p class="woocommerce-shipping-destination">Tùy chọn vận chuyển sẽ được cập nhật thanh toán.</p>
                                    <form action="#" method="post"><a href="#" class="shipping-calculator-button">Thay đổi địa chỉ</a>
                                        <div class="shipping-calculator-form">
                                            <p class="form-row"><select class="form-select">
                                                    <option value="AR">Argentina</option>
                                                    <option value="AM">Armenia</option>
                                                    <option value="BD" selected="selected">Bangladesh</option>
                                                </select></p>
                                            <p><select class="form-select">
                                                    <option value="">Select an option…</option>
                                                    <option value="BD-05">Bagerhat</option>
                                                    <option value="BD-01">Bandarban</option>
                                                    <option value="BD-02">Barguna</option>
                                                    <option value="BD-06">Barishal</option>
                                                </select></p>
                                            <p class="form-row"><input type="text" class="form-control"
                                                    placeholder="Town / City"></p>
                                            <p class="form-row"><input type="text" class="form-control"
                                                    placeholder="Postcode / ZIP"></p>
                                            <p><button class="as-btn">Update</button></p>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr class="order-total">
                                <td>Tổng số đơn đặt hàng</td>
                                <td data-title="Total"><strong><span
                                            class="amount"><bdi><span>$</span>47</bdi></span></strong></td>
                            </tr>
                        </tfoot>
                    </table>
                    <div class="wc-proceed-to-checkout mb-30"><a href="checkout.php" class="as-btn">Tiến hành thanh toán</a></div>
                </div>
            </div>
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
                            <h2 class="mb-25">Điều đó đưa bạn lên cấp độ tiếp theo</h2><a href="contact.html"
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