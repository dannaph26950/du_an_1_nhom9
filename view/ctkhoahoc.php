<div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
    <div class="container z-index-common">
        <h1 class="breadcumb-title">Chi Tiết Khóa Học</h1>
        <ul class="breadcumb-menu">
            <li><a href="index.html">Trang Chủ</a></li>
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
                        <h2 class="course-title"><?php echo $value['ten_khoa_hoc'];?></h2>
                        <div class="course-single-meta"><a href="#"><img
                                        src="../Upfileanh/giangvien/<?php echo listone_giangvien(loadone_lop($value['id_lop'])[0]['magv'])[0]['hinh_gv']; ?>" style="width: 50px;height: 50px" alt="author"><span
                                        class="text-theme">Giảng Viên: </span><?php echo listone_giangvien(loadone_lop($value['id_lop'])[0]['magv'])[0]['ten_gv']; ?></a> <a href="#"><i
                                        class="fas fa-tags"></i> Mã Khóa Học: <?php echo $value['id_danh_muc']; ?></a>
                                        <a href="course.html"><i
                                        class="far fa-clock"></i> Thời Gian Học: <?php echo $value['thoi_gian_hoc'] ?></a>
                            <div class="course-rating">
                                <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5"><span
                                            style="width:90%">Rated <strong class="rating">5.00</strong> out of 5</span>
                                </div>(4.80)
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                    <div class="course-single-bottom">
                        <ul class="nav course-tab" id="courseTab" role="tablist">
                            <li class="nav-item" role="presentation"><a class="nav-link active" id="description-tab"
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
                                        <th>Tên Giáo Viên</th>
                                        <th>Trạng Thái</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php  foreach ($list_lop as $key=>$value) {?>
<!--                                        <tr>-->
<!--                                            <td>--><?php //echo loadone_lop($value['id_lop'])[0]['ten_lop'] ?><!--</td>-->
<!--                                            <td>--><?php //echo  loadone_lop($value['id_lop'])[0]['thoi_gian_khai_giang'] ?><!--</td>-->
<!--                                            <td>--><?php //echo  loadone_lop($value['id_lop'])[0]['dia_diem_hoc'] ?><!--</td>-->
<!--                                            <td>--><?php //echo listone_giangvien(loadone_lop($value['id_lop'])[0]['magv'])[0]['ten_gv']; ?><!--</td>-->
<!---->
<!--                                            <td class="">-->
<!--                                                <input value="Đăng Kí" name="dangki" type="button" class="btn btn-primary start-50" onclick="location.href='index.php?act=giang_vien'" ><br><br>-->
<!--                                            </td>-->
<!---->
<!--                                        </tr>-->

                                        <tr>
                                            <td><?php echo $value['ten_lop'] ?></td>
                                            <td><?php echo $value['thoi_gian_khai_giang'] ?></td>
                                            <td><?php echo $value['dia_diem_hoc'] ?></td>
                                            <td><?php echo listone_giangvien(loadone_lop($value['id_lop'])[0]['magv'])[0]['ten_gv']; ?></td>

                                            <td class="">
                                                <input value="Đăng Kí" name="dangki" type="button" class="btn btn-primary start-50" onclick="location.href='index.php?act=cart&id=<?php echo $value['id_khoa_hoc'] ?>'" ><br><br>
                                            </td>

                                        </tr>
                                    <?php }?>
                                    </tbody>
                                </table>


                            </div>
                            <div class="tab-pane fade" id="curriculam" role="tabpanel"
                                 aria-labelledby="curriculam-tab">

                                <p><?php
                                    foreach ($listone_khoahoc as $key => $value) {
                                        echo $value['mo_ta'];
                                    }
                                    ?>

                                </p>

                            </div>
                            <?php
//                            foreach ($list_lop as $index => $value){
                            ?>
                            <div class="tab-pane fade" id="instructor" role="tabpanel"
                                 aria-labelledby="instructor-tab">
                                <div class="course-instructor">

                                    <div class="course-author-box">
                                        <div class="auhtor-img"><img src="../Upfileanh/giangvien/<?php echo listone_giangvien(loadone_lop($value['id_lop'])[0]['magv'])[0]['hinh_gv']; ?>" alt="author" ></div>
                                        <div class="media-body">
                                            <h3 class="author-name"><a class="text-inherit"
                                                                       href="index.php?act_khoahoc"><?php echo listone_giangvien(loadone_lop($value['id_lop'])[0]['magv'])[0]['ten_gv']; ?></a></h3>
                                            <p class="author-text"><?php echo listone_giangvien(loadone_lop($value['id_lop'])[0]['magv'])[0]['thong_tin_gv']; ?></p>
                                            <div class="author-meta"><a href="index.php?act=dang_ky"><i
                                                            class="fal fa-file-video"></i>Đăng Ký</a> <span><i
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
                            if(isset($_SESSION['user'])){
                            ?>
                            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                <div class="course-Reviews">

                                    <h1>Bình luận</h1>

                                    <div class="as-comment-form">
                                        <div class="form-title">
                                            <h3 class="blog-inner-title">Add a review</h3>
                                        </div>
                                        <div class="row">
                                            <div class="form-group rating-select d-flex align-items-center">
                                                <label>Your Rating</label>
                                                <p class="stars"><span><a class="star-1" href="#">1</a> <a
                                                                class="star-2" href="#">2</a> <a class="star-3"
                                                                                                 href="#">3</a> <a class="star-4" href="#">4</a> <a
                                                                class="star-5" href="#">5</a></span></p>
                                            </div>
                                            <div class="col-12 form-group"><textarea placeholder="Write a Message"
                                                                                     class="form-control"></textarea> <i
                                                        class="text-title far fa-pencil-alt"></i></div>
                                            <div class="col-md-6 form-group"><input type="text"
                                                                                    placeholder="Your Name" class="form-control"> <i
                                                        class="text-title far fa-user"></i></div>
                                            <div class="col-md-6 form-group"><input type="text"
                                                                                    placeholder="Your Email" class="form-control"> <i
                                                        class="text-title far fa-envelope"></i></div>
                                            <div class="col-12 form-group"><input id="reviewcheck"
                                                                                  name="reviewcheck" type="checkbox"> <label
                                                        for="reviewcheck">Save my name, email, and website in this
                                                    browser for the next time I comment.<span
                                                            class="checkmark"></span></label></div>
                                            <div class="col-12 form-group mb-0"><button class="as-btn">Post
                                                    Review</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }else{
                                ?>

                                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab" style="display: none">
                                <div class="course-Reviews">

                                    <h1>Bình luận</h1>

                                    <div class="as-comment-form">
                                        <div class="form-title">
                                            <h3 class="blog-inner-title">Add a review</h3>
                                        </div>
                                        <div class="row">
                                            <div class="form-group rating-select d-flex align-items-center">
                                                <label>Your Rating</label>
                                                <p class="stars"><span><a class="star-1" href="#">1</a> <a
                                                                class="star-2" href="#">2</a> <a class="star-3"
                                                                                                 href="#">3</a> <a class="star-4" href="#">4</a> <a
                                                                class="star-5" href="#">5</a></span></p>
                                            </div>
                                            <div class="col-12 form-group"><textarea placeholder="Write a Message"
                                                                                     class="form-control"></textarea> <i
                                                        class="text-title far fa-pencil-alt"></i></div>
                                            <div class="col-md-6 form-group"><input type="text"
                                                                                    placeholder="Your Name" class="form-control"> <i
                                                        class="text-title far fa-user"></i></div>
                                            <div class="col-md-6 form-group"><input type="text"
                                                                                    placeholder="Your Email" class="form-control"> <i
                                                        class="text-title far fa-envelope"></i></div>
                                            <div class="col-12 form-group"><input id="reviewcheck"
                                                                                  name="reviewcheck" type="checkbox"> <label
                                                        for="reviewcheck">Save my name, email, and website in this
                                                    browser for the next time I comment.<span
                                                            class="checkmark"></span></label></div>
                                            <div class="col-12 form-group mb-0"><button class="as-btn">Post
                                                    Review</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
<!--            Phần bên phải-->
            <?php foreach ($listone_khoahoc as $index => $value){ ?>

            <div class="col-xxl-3 col-lg-4">
                <aside class="sidebar-area">
                    <div class="widget widget_info">
                        <div class="as-video"><img src="../Upfileanh/<?php echo $value['anh'] ?>" alt="video"> <a
                                    href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video"><i
                                        class="fas fa-play"></i></a></div><span class="h4 course-price"><?php echo $value['gia'] ?> <span
                                    class="tag">25% Off</span></span> <a href="index.php?act=cart&id=<?php echo $value['id_khoa_hoc'] ?>" class="as-btn">Đăng ký</a>
                        <h3 class="widget_title">Thông Tin Khóa Học</h3>
                        <div class="info-list">
                            <ul>
                                <li><i class="fa-light fa-user"></i> <strong>Giảng Viên: </strong><span><?php echo listone_giangvien(loadone_lop($value['id_lop'])[0]['magv'])[0]['ten_gv']; ?></span></li>
                                <li><i class="fa-light fa-file"></i> <strong>Mã khóa học</strong><span><?php echo $value['id_danh_muc']; ?></span></li>
                                <li><i class="fa-light fa-clock"></i> <strong>Thời Gian: </strong><span> <?php echo $value['thoi_gian_hoc'] ?>
                                            36s</span></li>
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
