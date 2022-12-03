<div class="breadcumb-wrapper" data-bg-src="../user/../view/assets/img/breadcumb/breadcumb-bg.jpg">
    <div class="container z-index-common">
        <h1 class="breadcumb-title">KHÓA HỌC CỦA CHÚNG TÔI</h1>
        <ul class="breadcumb-menu">
            <li><a href="../../index.php">Trang chủ</a></li>
            <li>Khóa học của chúng tôi</li>
        </ul>
    </div>
</div>
<section class="space-top space-extra-bottom">
    <div class="container">
        <div class="as-sort-bar">

            <div class="row justify-content-between align-items-center" style="margin-bottom: 40px">
                <div class="col-md-auto"><span class="course-result-count">Chúng tôi có <span class="text-theme">
                                những khóa học</span> như sau: </span></div>

            </div>
            <div class="row justify-content-between align-items-center">

                <form action="index.php?act=khoa_hoc" method="post" class="input-group" style="width: 400px">
                    <input  type="text" name="search" class="form-control rounded" placeholder="Tìm Kiếm Khóa Học" aria-label="Search" aria-describedby="search-addon"  />
                    <input type="submit" name="timkiem" value="Tìm Kiếm" style="width: 100px" class="btn btn-outline-primary">
                </form>


            </div>
        </div>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade active show" id="tab-grid" role="tabpanel" aria-labelledby="tab-course-grid">
                <div class="row gy-4 mb-30">
                    <?php
                    foreach($list_khoahoc as $index => $value){
                        ?>
                        <div class="col-md-6 col-lg-4 col-xxl-3">
                            <div class="course-box style4">
                                <div class="course-img"><img src="../Upfileanh/<?php echo listone_khoahoc($value['id_khoa_hoc'])[0]['anh'] ?>" alt="course" style="width: 200px;height: 200px" > <span
                                            class="tag"><?php echo $value['gia'] ?></span></div>
                                <div class="course-content">
                                    <div class="course-author">
                                        <div class="author-info"><img src="../Upfileanh/giangvien/<?php echo listone_giangvien(loadone_lop($value['id_lop'])[0]['magv'])[0]['hinh_gv']; ?>" alt="author" style="width: 50px;height: 50px">
                                            <a href="index.php?act=giang_vien" class="author-name"><?php echo listone_giangvien(loadone_lop($value['id_lop'])[0]['magv'])[0]['ten_gv']; ?></a></div>

                                    </div>
                                    <h3 class="course-title"><a href="index.php?act=ct_khoahoc&id=<?php echo $value['id_khoa_hoc'] ?>"><?php echo $value['ten_khoa_hoc'] ?></a></h3>
                                    <div class="course-meta"><span><i class="fal fa-file"></i><?php echo $value['thoi_gian_hoc'] ?></span> <span><i
                                                    class="fal fa-user"></i>Sinh viên <?php echo loadone_lop($value['id_lop'])[0]['so_luong'] ?></span> </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>

        </div>

    </div>
<!--    <div class="container">-->
<!---->
<!--        <div class="row">-->
<!--            <div class="col-xxl-9 col-lg-8">-->
<!--        -->
<!--                <div class="tab-content" id="nav-tabContent">-->
<!--                    <div class="tab-pane fade active show" id="tab-grid" role="tabpanel" aria-labelledby="tab-course-grid">-->
<!--                <div class="row gy-4 mb-30">-->
<!--                    --><?php
//                    foreach($list_khoahoc as $index => $value){
//                    ?>
<!--                        <div class="col-md-6 col-lg-3 col-xxl-3 ">-->
<!---->
<!--                            <div class="course-box " style="background-color: #C6E2FF">-->
<!--                                <div style="height: 450px;">-->
<!--                                    <div class="course-img"><img src="../Upfileanh/--><?php //echo listone_khoahoc($value['id_khoa_hoc'])[0]['anh'] ?><!--" alt="course" style="width: 200px;height: 200px" > <span-->
<!--                                                class="tag">--><?php //echo $value['gia'] ?><!--</span></div>-->
<!--                                    <div class="course-content">-->
<!--                                        <div class="course-author">-->
<!--                                            <div class="author-info"><img src="../Upfileanh/giangvien/--><?php //echo listone_giangvien(loadone_lop($value['id_lop'])[0]['magv'])[0]['hinh_gv']; ?><!--" alt="author" style="width: 50px;height: 50px"> <a-->
<!--                                                        href="index.php?act=ct_khoahoc&id=--><?php //echo $value['id_khoa_hoc'] ?><!--" class="author-name">--><?php //echo listone_giangvien(loadone_lop($value['id_lop'])[0]['magv'])[0]['ten_gv']; ?><!--</a></div>-->
<!---->
<!--                                        </div>-->
<!---->
<!--                                        <div>-->
<!---->
<!--                                            <h3 class="course-title"><a href="index.php?act=ct_khoahoc&id=--><?php //echo $value['id_khoa_hoc'] ?><!--">--><?php //echo $value['ten_khoa_hoc'] ?><!--</a></h3>-->
<!--                                            <div>-->
<!---->
<!--                                            </div>-->
<!--                                            <div class="course-meta"><span><i class="fal fa-file"></i>--><?php //echo $value['thoi_gian_hoc'] ?><!--</span> <span><i-->
<!--                                                            class="fal fa-user"></i>Sinh viên --><?php //echo loadone_lop($value['id_lop'])[0]['so_luong'] ?><!--</span></div>-->
<!---->
<!---->
<!--                                        </div>-->
<!---->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    --><?php //}?>
<!--                </div>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--            </div>-->
<!--    </div>-->
</section>
<?php  if(isset($_SESSION['user'])){ ?>

<?php }else{ ?>
    <section class="" data-pos-for=".footer-wrapper" data-sec-pos="bottom-half">
        <div class="container">
            <div class="cta-wrap">
                <div class="row flex-row-reverse justify-content-between">
                    <div class="col-lg-6">
                        <div class="cta-img"><img src="../user/../view/assets/img/normal/cta_1_1.png" alt="Image"></div>
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
                            src="../user/../view/assets/img/shape/dot_shape_1.png" alt="shapes"></div>
            </div>
        </div>
    </section>
<?php } ?>
