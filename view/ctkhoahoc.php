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
                        <div class="course-img"><img src="../admin/view/upfileanh/<?php echo $value['anh'] ?>" alt="Course Image">
                        </div>
                        <h2 class="course-title"><?php echo $value['ten_khoa_hoc'];?></h2>
                        <div class="course-single-meta"><a href="#"><img
                                        src="assets/img/course/author.jpg" alt="author"><span
                                        class="text-theme">Giảng Viên: </span>Hoàng Quốc ManCity</a> <a href="#"><i
                                        class="fas fa-tags"></i> Mã Khóa Học: <?php echo $value['id_danh_muc']; ?></a><a href="course.html"><i
                                        class="far fa-clock"></i> Thời Gian Học: <?php echo $value['thoi_gian_hoc'] ?></a>
                            <div class="course-rating">
                                <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5"><span
                                            style="width:80%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                </div>(4.00)
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
                                        <th>Mã Giáo Viên</th>
                                        <th>Trạng Thái</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php  foreach ($list_lop as $key=>$value) {?>
                                        <tr>
                                            <td><?php echo $value['ten_lop'] ?></td>
                                            <td><?php echo $value['thoi_gian_khai_giang'] ?></td>
                                            <td><?php echo $value['dia_diem_hoc'] ?></td>
                                            <td><?php echo $value['ma_gv'] ?></td>

                                            <td class="">
                                                <input value="Đăng Kí" type="button" class="btn btn-primary start-50" ><br><br>
                                            </td>

                                        </tr>
                                    <?php }?>
                                    </tbody>
                                </table>


                            </div>
                            <div class="tab-pane fade" id="curriculam" role="tabpanel"
                                 aria-labelledby="curriculam-tab">

                                <p><?php

                                    foreach ($listone_khoahoc as $key => $value){

                                     echo $value['mo_ta'];
                                } ?></p>

                            </div>
                            <div class="tab-pane fade" id="instructor" role="tabpanel"
                                 aria-labelledby="instructor-tab">
                                <div class="course-instructor">

                                    <div class="course-author-box">
                                        <div class="auhtor-img"><img style="width: 409px; height: 384px" src="../admin/view/upfileanh/giangvien/img.png"
                                                                     alt="Author Image"></div>
                                        <div class="media-body">
                                            <h3 class="author-name"><a class="text-inherit"
                                                                       href="#">Hoàng Quốc ManCity</a></h3>
                                            <p class="author-text">Tối ưu hóa nội dung phát triển tài nguyên trong khi giá trị có tầm nhìn xa trông rộng. Tham gia một cách hấp dẫn vào quy trình có thể mở rộng với các cải tiến quy trình kinh doanh.</p>
                                            <div class="author-meta"><a href="#"><i
                                                            class="fal fa-file-video"></i>4 Courses</a> <span><i
                                                            class="fal fa-users"></i>2500 Students</span></div>
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
                            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                <div class="course-Reviews">

                                    <h1>bình luận</h1>

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
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4">
                <aside class="sidebar-area">
                    <div class="widget widget_info">
                        <div class="as-video"><img src="assets/img/widget/video_1.jpg" alt="video"> <a
                                    href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video"><i
                                        class="fas fa-play"></i></a></div><span class="h4 course-price">$90.00 <span
                                    class="tag">25% Off</span></span> <a href="cart.html" class="as-btn">Thêm vào giỏ hảng</a>
                        <h3 class="widget_title">Thông Tin Khóa Học</h3>
                        <div class="info-list">
                            <ul>
                                <li><i class="fa-light fa-user"></i> <strong>Giảng Viên: </strong><span>Hoàng Quốc ManCity</span></li>
                                <li><i class="fa-light fa-file"></i> <strong>Bài Học: </strong><span>8</span></li>
                                <li><i class="fa-light fa-clock"></i> <strong>Thời Gian: </strong><span>15h 30m
                                            36s</span></li>
                                <li><i class="fa-light fa-tag"></i> <strong>Cấp Độ:
                                    </strong><span>Cơ Bản</span></li>
                                <li><i class="fa-light fa-globe"></i> <strong>Ngôn Ngữ:
                                    </strong><span>English</span></li>
                                <li><i class="fa-light fa-puzzle-piece"></i> <strong>Bài Kiểm Tra:
                                    </strong><span>04</span></li>
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
