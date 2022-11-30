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
            <div class="tab-pane fade" id="instructor" role="tabpanel" aria-labelledby="instructor-tab">
                <div class="course-instructor">

                    <div class="course-author-box">
                        <div class="auhtor-img"><img src="../Upfileanh/giangvien/<?php echo listone_giangvien(loadone_lop($value['id_lop'])[0]['magv'])[0]['hinh_gv']; ?>" alt="author"></div>
                        <div class="media-body">
                            <h3 class="author-name"><a class="text-inherit" href="index.php?act_khoahoc"><?php echo listone_giangvien(loadone_lop($value['id_lop'])[0]['magv'])[0]['ten_gv']; ?></a></h3>
                            <p class="author-text"><?php echo listone_giangvien(loadone_lop($value['id_lop'])[0]['magv'])[0]['thong_tin_gv']; ?></p>
                            <div class="author-meta"><a href="index.php?act=dang_ky"><i class="fal fa-file-video"></i>Đăng Ký</a> <span><i class="fal fa-users"></i></span></div>
                            <div class="as-social"><a href="https://facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a> <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a> <a href="https://linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a> <a href="https://instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></div>
                        </div>
                    </div>

                </div>
            </div>
            <table class="cart_table">
                <thead>
                    <tr>
                        <th class="cart-col-image">TÊN LỚP</th>
                        <th class="cart-col-productname">ĐỊA ĐIỂM HỌC</th>
                        <th class="cart-col-price">GIÁ</th>
                        <th class="cart-col-quantity">SỐ SLOT CÒN LẠI</th>
                        <th class="cart-col-total">TÊN GIÁO VIÊN</th>

                        <th class="cart-col-remove">ĐĂNG KÝ</th>
                    </tr>
                </thead>
                <!--                    <thead>-->
                <!--                        <tr>-->
                <!--                            <th class="cart-col-image">ẢNH</th>-->
                <!--                            <th class="cart-col-productname">TÊN KHÓA HỌC</th>-->
                <!--                            <th class="cart-col-price">GIÁ</th>-->
                <!--                            <th class="cart-col-quantity">SỐ SLOT CÒN LẠI</th>-->
                <!--                            <th class="cart-col-total">HỌC PHÍ</th>-->
                <!--                            <th class="cart-col-total">THỜI GIAN BẮT ĐẦU</th>-->
                <!--                            <th class="cart-col-remove">ĐĂNG KÝ</th>-->
                <!--                        </tr>-->
                <!--                    </thead>-->
                <tbody>



                    <?php foreach ($list_lop as $index => $value) { ?>
                        <tr class="cart_item">
                            <td data-title="Product"><a class="cart-productimage" href=" "><img width="91" height="91" src="../Upfileanh/<?php echo $value['anh'] ?>" alt="Image"></a></td>
                            <td data-title="Name"><a class="cart-productname" href=" "><?php echo $value['ten_khoa_hoc'] ?>"</a>
                            </td>
                            <td data-title="Price"><span class="amount"><bdi><span>$</span><?php echo $value['gia'] ?></bdi></span></td>
                            <td data-title="Quantity">
                                <div class="quantity">
                                    </button>
                                    <p>1</p>

                                </div>
                            </td>
                            <td data-title="Total"><span class="amount"><bdi><span>$</span><?php echo $value['gia'] ?></bdi></span></td>
                            <td>
                                <p><?php
                                    $time = date("d-m-Y", strtotime($value['thoi_gian_hoc']));
                                    echo $time;
                                    ?></p>
                            </td>
                            <td data-title=""><a href="index.php?act=add_dangky" class="as-btn">ĐĂNG KÝ NGAY<i class="fas fa-arrow-right ms-2"></i></a> </td>
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
                        <a href="index.php?act=add_dangky" class="as-btn">ĐĂNG KÝ NGAY<i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="shape-mockup movingX z-index-n1" data-bottom="0%" data-left="44%"><img src="assets/img/shape/dot_shape_1.png" alt="shapes"></div>
        </div>
    </div>
</section>


<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="assets/js/app.min.js"></script>
<script src="assets/js/main.js"></script>