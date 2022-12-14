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
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Tên khóa học</th>
                    <th>Ảnh khóa học</th>
                    <th>Tên Lớp</th>
                    <th>Thời Gian Khai Giảng</th>
                    <th>Địa Điểm Học</th>
                    <th>Tên Giáo Viên</th>
                    <th>Trạng Thái</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                <?php  foreach ($list_lop as $key=>$value) {?>
                    <tr class="thaodau">
                        <td><?php echo listone_khoahoc($value['id_khoa_hoc'])[0]['ten_khoa_hoc'] ?></td>
                        <td><img src="../Upfileanh/<?php echo listone_khoahoc($value['id_khoa_hoc'])[0]['anh'] ?>" style="width: 200px"></td>
                        <td><?php echo $value['ten_lop'] ?></td>
                        <td><?php echo $value['thoi_gian_khai_giang'] ?></td>
                        <td><?php echo $value['dia_diem_hoc'] ?></td>
                        <td><?php echo listone_giangvien(loadone_lop($value['id_lop'])[0]['magv'])[0]['ten_gv']; ?></td>

                        <td class="">

                            <form action="index.php?act=add_lop" method="post">
                                <input type="hidden" name="id_hv" value="<?php echo $_SESSION['user']['id_hoc_vien'] ?>" >
                                <input type="hidden" name="id_lop" value="<?php echo $value['id_lop'] ?>" >
                                <input type="hidden" name="gia" value="<?php echo listone_khoahoc($value['id_khoa_hoc'])[0]['gia']; ?>" >

                                <input type="hidden" name="trang_thai" value="0" >

                                <!--                                                    validate lịch học-->
                                <?php
                                $date_lop_convert =  strtotime(listone_lop_tgkg($value['id_lop'])[0]['thoi_gian_khai_giang']);
                                if( strtotime(date("Y-m-d")) > $date_lop_convert ){
                                    ?>
                                    <input value="Đăng Kí" name="dangki" type="submit" class="btn btn-primary start-50" disabled ><br><br>
                                    <?php
                                }else{
                                    ?>
                                    <input value="Đăng Kí" name="dangki" type="submit" class="btn btn-primary start-50"  ><br><br>

                                    <?php
                                }
                                ?>
                            </form>

                        </td>

                    </tr>
                <?php }?>
                </tbody>
            </table>


    </div>
</div>
<?php if(isset($_SESSION['user'])){  ?>

<?php }else{ ?>
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
<?php } ?>



<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="assets/js/app.min.js"></script>
<script src="assets/js/main.js"></script>