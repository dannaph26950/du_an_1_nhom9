
<div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
    <div class="container z-index-common">
        <h1 class="breadcumb-title">Chi Tiết Khóa Học</h1>
        <ul class="breadcumb-menu">
            <li><a href="index.php" class="text-decoration-none">Trang Chủ</a></li>
            <li>Chi Tiết Khóa Học</li>
        </ul>
    </div>
</div>
<section class="space-top space-extra-bottom">
    <?php

    foreach ($listone_khoahoc as $key => $value){
    ?>
    <div class="container">
        <div class="row">
            <div class="col-xxl-9 col-lg-8">
                <div class="course-single">
                    <div class="course-single-top">
                        <div class="course-img"><img src="../Upfileanh/<?php echo $value['anh'] ?>" alt="Course Image">
                        </div>
                        <h2 class="course-title" style="font-family:'Roboto', sans-serif"><?php echo $value['ten_khoa_hoc'];?></h2>
                        <div class="course-single-meta"><a href="#" class="text-decoration-none"><img
                                        src="../Upfileanh/giangvien/<?php echo listone_giangvien(loadone_lop($value['id_lop'])[0]['magv'])[0]['hinh_gv']; ?>" style="width: 50px;height: 50px" alt="author"><span
                                        class="text-theme">Giảng Viên: </span><?php echo listone_giangvien(loadone_lop($value['id_lop'])[0]['magv'])[0]['ten_gv']; ?></a> <a class="text-decoration-none" href="#"><i
                                        class="fas fa-tags"></i> Mã Khóa Học: <?php echo $value['id_danh_muc']; ?></a>
                                        <a class="text-decoration-none" href="course.html"><i
                                        class="far fa-clock"></i> Thời Gian Học:<?php $originalDate = $value['thoi_gian_hoc'] ; $newDate = date(" d-m-Y", strtotime($value['thoi_gian_hoc'])); echo $newDate  ?>
                                            </a>
                            <div class="course-rating">
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                    <div class="course-single-bottom">
                        <ul class="nav course-tab" id="courseTab" role="tablist">
                            <li class="nav-item" role="presentation"><a  class="nav-link active" id="description-tab"
                                                                        data-bs-toggle="tab" href="#Coursedescription" role="tab"
                                                                        aria-controls="Coursedescription" aria-selected="true"><i
                                            class="fa-regular fa-bookmark"></i>Đăng Kí</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" id="curriculam-tab"
                                                                        data-bs-toggle="tab" href="#curriculam" role="tab" aria-controls="curriculam"
                                                                        aria-selected="false"><i class="fa-regular fa-book"></i>Mô Tả</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" id="instructor-tab"
                                                                        data-bs-toggle="tab" href="#instructor" role="tab" aria-controls="instructor"
                                                                        aria-selected="false"><i class="fa-regular fa-user"></i>Giảng Viên</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" id="reviews-tab"
                                                                        data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews"
                                                                        aria-selected="false"><i class="fa-regular fa-star-sharp"></i>Bình Luận</a></li>
                        </ul>
                        <div class="tab-content" id="productTabContent">
                            <div class="tab-pane fade show active" id="Coursedescription" role="tabpanel"
                                 aria-labelledby="description-tab">


                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Tên Lớp</th>
                                        <th>Thời Gian Khai Giảng</th>
                                        <th>Địa Điểm Học</th>
                                        <th>Số chỗ (còn)</th>
                                        <th>Tên Giáo Viên</th>
                                        <th>Trạng Thái</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php  foreach ($list_lop as $key=>$value) {?>
                                        <tr>
                                            <td><?php echo $value['ten_lop'] ?></td>
                                            <td>

                                            <?php
                                            $originalDate = $value['thoi_gian_khai_giang'];
                                            $newDate = date(" d-m-Y", strtotime(listone_lop_tgkg($value['id_lop'])[0]['thoi_gian_khai_giang']));


                                            $date_lop_convert =  strtotime($newDate);
//
                                                if( strtotime(date("Y-m-d")) > $date_lop_convert ){
                                                    echo $newDate;

                                                ?>
                                                        <br>
                                                <span style="color: red">Đã quá lịch</span>
                                                <?php
                                                }else{
                                                    echo $newDate;
                                                }
                                                ?>

                                            </td>
                                            <td><?php echo $value['dia_diem_hoc'] ?></td>
                                            <td><?php echo $value['so_luong'] ?></td>
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
                            <div class="tab-pane fade" id="curriculam" role="tabpanel"
                                 aria-labelledby="curriculam-tab">

                                <p style="padding: 10px 20px"><?php
                                    foreach ($listone_khoahoc as $key => $value) {
                                        echo $value['mo_ta'];
                                    }
                                    ?>

                                </p>

                            </div>
                            <div class="tab-pane fade" id="instructor" role="tabpanel"
                                 aria-labelledby="instructor-tab">
                                <div class="course-instructor">

                                    <div class="course-author-box">
                                        <div class="auhtor-img"><img src="../Upfileanh/giangvien/<?php echo listone_giangvien(loadone_lop($value['id_lop'])[0]['magv'])[0]['hinh_gv']; ?>" alt="author" ></div>
                                        <div class="media-body">
                                            <h3 class="author-name"><a class="text-decoration-none" class="text-inherit"
                                                                       href="index.php?act=ct_giangvien&id=<?php echo listone_giangvien(loadone_lop($value['id_lop'])[0]['magv'])[0]['magv']; ?>"><?php echo listone_giangvien(loadone_lop($value['id_lop'])[0]['magv'])[0]['ten_gv']; ?></a></h3>
                                            <p class="author-text"><?php echo listone_giangvien(loadone_lop($value['id_lop'])[0]['magv'])[0]['thong_tin_gv']; ?></p>
                                            <div class="author-meta"><a class="text-decoration-none" href="index.php?act=add_dangky"><i
                                                            class="fal fa-file-video"></i>Đăng Ký</a><span><i
                                                            class="fal fa-users"></i></span></div>
                                            <div class="as-social"><a href="https://facebook.com/"
                                                                      target="_blank"><i class="fab fa-facebook-f"></i></a> <a
                                                        href="https://twitter.com/" target="_blank"><i
                                                            class="fab fa-twitter"></i></a> <a
                                                        href="https://linkedin.com/" target="_blank"><i
                                                            class="fab fa-linkedin-in"></i></a> <a
                                                        href="https://instagram.com/" target="_blank"><i
                                                            class="fab fa-instagram"></i></a></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
<!--                            --><?php //} ?>



                            <?php
//                            if(isset($_SESSION['user'])){
                            ?>
                            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                <div class="course-Reviews">
<!--                                    Chèn bình luận -->
                                    <div class="as-comment-form">
                                        
                                    <div class="comment">
                                        <h2>Bình luận:</h2>
                                        
                                        <?php    
                                        foreach ($listone_khoahoc as $key => $value){
                                        ?>
                                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                                            <script>
                                                $(document).ready(function(){
                                                    $("#binhluan").load("../view/binhluan.php", {idpro: <?php echo $value['id_khoa_hoc']?>});
                                                });
                                            </script>
                                            <div class="box-row" id="binhluan">
                                            </div>
                                        <?php } ?>
                                    </div>



                                    </div>
                                </div>
                            </div>
<!--                                    che dấu-->
                                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab" style="display: none">
                                <div class="course-Reviews">

                                    <h1>Bình luận</h1>

                                    <div class="as-comment-form">
                                        <div class="form-title">
                                            <h3 class="blog-inner-title">Viết bình luận</h3>
                                        </div>
                                        <div class="row">
                                            <form action="index.php?act=binh_luan" method="post">

                                                <div class="col-12 form-group"><textarea placeholder="Write a Message"
                                                                                         class="form-control"></textarea> <i
                                                            class="text-title far fa-pencil-alt"></i></div>
                                                <div class="col-md-6 form-group"><input type="text"
                                                                                        placeholder="Your Name" class="form-control"> <i
                                                            class="text-title far fa-user"></i></div>
                                                <div class="col-md-6 form-group"><input type="text"
                                                                                        placeholder="Your Email" class="form-control"> <i
                                                            class="text-title far fa-envelope"></i></div>

                                                <div class="col-12 form-group mb-0"><button class="as-btn">Gửi bình luận</button></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!--            Phần bên phải-->
            <?php foreach ($listone_khoahoc as $index => $value){ ?>

            <div class="col-xxl-3 col-lg-4">
                <aside class="sidebar-area">
                    <div class="widget widget_info">
                        <div class="as-video"><img src="../Upfileanh/<?php echo $value['anh'] ?>" alt="Ảnh khóa học" ></div>
                        <span class="h4 course-price" style="color:red;"><?php echo number_format($value['gia']) ?><u>đ</u>
                            </span> <a  href="index.php?act=cart&id=<?php echo $value['id_khoa_hoc'] ?>" class="as-btn text-decoration-none">Đăng ký</a>
                        <h3 class="widget_title">Thông Tin Khóa Học</h3>
                        <div class="info-list">
                            <ul>
                                <li><i class="fa-light fa-user"></i> <strong>Giảng Viên: </strong><span><?php echo listone_giangvien(loadone_lop($value['id_lop'])[0]['magv'])[0]['ten_gv']; ?></span></li>
                                <li><i class="fa-light fa-file"></i> <strong>Mã khóa học: </strong><span><?php echo $value['id_danh_muc']; ?></span></li>
                                <li><i class="fa-light fa-clock"></i> <strong>Thời Gian: </strong><span>  <?php $originalDate = $value['thoi_gian_hoc'] ; $newDate = date(" d-m-Y", strtotime($value['thoi_gian_hoc'])); echo $newDate  ?>
                                            </span></li>
                                <li><i class="fa-light fa-tag"></i> <strong>Cấp Độ:
                                    </strong><span>Cơ Bản</span></li>
                                <li><i class="fa-light fa-globe"></i> <strong>Ngôn Ngữ:
                                    </strong><span>English</span></li>

                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
            <?php } ?>
        </div>

    </div>
</section>
