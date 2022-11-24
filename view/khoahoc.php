<div class="breadcumb-wrapper" data-bg-src="../user/assets/img/breadcumb/breadcumb-bg.jpg">
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
            <div class="row justify-content-between align-items-center">
                <div class="col-md-auto"><label for="exampleInputEmail1" class="form-label">Loại khóa học</label>
                    <select class="text-input small-input kiemtra" data-error="" id="" name="">

                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>

                    </select></div>
                <div class="col-md-auto">
                    <div class="nav" role="tablist"><a href="#" class="active" id="tab-course-grid" data-bs-toggle="tab" data-bs-target="#tab-grid" role="tab" aria-controls="tab-grid" aria-selected="true"><i class="fa-solid fa-grid-2"></i> Lưới</a> <a href="#" id="tab-course-list" data-bs-toggle="tab" data-bs-target="#tab-list" role="tab" aria-controls="tab-grid" aria-selected="false"><i class="fas fa-list"></i> Danh sách</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade active show" id="tab-grid" role="tabpanel" aria-labelledby="tab-course-grid">
                <div class="row gy-4 mb-30">
                    <?php
                    foreach($listall_khoahoc_user as $index => $value){
                    ?>
                    <div class="col-md-6 col-lg-4 col-xxl-3">
                        <div class="course-box style4">
                            <div class="course-img"><a href="index.php?act=ct_khoahoc&id=<?php echo $value['id_khoa_hoc'] ?>"><img src="../admin/view/upfileanh/<?php echo $value['anh'] ?>" alt="course"></a> <span
                                        class="tag"><?php echo $value['gia'] ?></span></div>
                            <div class="course-content">
                                <div class="course-author">
                                    <div class="author-info"><img src="assets/img/course/author.jpg" alt="author">
                                        <a href="course.html" class="author-name">Kevin Perry</a></div>
                                    <div class="course-rating">
                                        <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5"><span
                                                    style="width:79%">Rated <strong class="rating">4.00</strong> out of
                                                    5</span></div>(4.00)
                                    </div>
                                </div>
                                <h3 class="course-title"><a href="index.php?act=ct_khoahoc&id=<?php echo $value['id_khoa_hoc'] ?>"><?php echo $value['ten_khoa_hoc'] ?></a></h3>
                                <div class="course-meta"><span><i class="fal fa-file"></i>Lesson 20</span> <span><i
                                                class="fal fa-user"></i>Students 50</span> <span><i
                                                class="fal fa-eye"></i>View: 15K</span></div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>

            </div>
        </div>
        <div class="as-pagination text-center pt-20">
            <ul>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="far fa-arrow-right"></i></a></li>
            </ul>
        </div>
    </div>
</section>
<section class="" data-pos-for=".footer-wrapper" data-sec-pos="bottom-half">
    <div class="container">
        <div class="cta-wrap">
            <div class="row flex-row-reverse justify-content-between">
                <div class="col-lg-6">
                    <div class="cta-img"><img src="../../../user/assets/img/normal/cta_1_1.png" alt="Image"></div>
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
                        src="../../../user/assets/img/shape/dot_shape_1.png" alt="shapes"></div>
        </div>
    </div>
</section>