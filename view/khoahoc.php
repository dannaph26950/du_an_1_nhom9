<div class="breadcumb-wrapper" data-bg-src="../user/assets/img/breadcumb/breadcumb-bg.jpg">
    <div class="container z-index-common">
        <h1 class="breadcumb-title">KHÓA HỌC CỦA CHÚNG TÔI</h1>
        <ul class="breadcumb-menu">
            <li><a href="index.php">Trang chủ</a></li>
            <li>Khóa học của chúng tôi</li>
        </ul>
    </div>
</div>
<section class="space-top space-extra-bottom">
    <div class="container">
        <div class="as-sort-bar">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-auto"><span class="course-result-count">Chúng tôi đã tìm thấy <span class="text-theme">
                                khóa học</span> dành cho bạn</span></div>
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
                        foreach ($listone_lop as $index2 => $value2){


                    ?>
                    <div class="col-md-6 col-lg-4 col-xxl-3">
                        <div class="course-box style4">
                            <!-- load ảnh khóa học -->
                            <div class="course-img"><img src="../user/assets/img/course/course_1_1.jpg" alt="course"> <span
                                        class="tag">New</span></div>
                                <div class="course-content">
                                <div class="course-author">
                                    <div class="author-info"><img src="../admin/view/upfileanh/<?php echo $value['anh'] ?>" alt="" style="width: 200px" alt="author">
                                         <a href="course.html" class="author-name"><?php echo $value2[''] ?>Giáo Viên</a>

                                    </div>
                                    <div class="course-rating">
                                        <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5"><span style="width:79%">Rated <strong class="rating">4.00</strong> out of
                                                5</span></div>(4.00)
                                    </div>
                                </div>
                                <h3 class="course-title"><a href="course-details.html"><?php echo $value['ten_khoa_hoc'] ?></a></h3>
                                <div class="course-meta"><span><i class="fal fa-file"></i><?php echo $value['thoi_gian_hoc']  ?></span> <span><i class="fal fa-user"></i>Students <?php echo $value2['so_luong'] ?></span> <span><i class="fal fa-eye"></i> Mã lớp <?php echo $value2['id_lop'] ?></span></div>
                            </div>
                        </div>
                    </div>
                    <?php } } ?>

                </div>
            </div>
            <div class="tab-pane fade" id="tab-list" role="tabpanel" aria-labelledby="tab-course-list">
                <div class="course-list">
                    <div class="course-img"><img src="../user/assets/img/course/course_6_1.jpg" alt="course"> <span
                                class="tag">Free</span></div>
                    <div class="course-content">
                        <h3 class="course-title"><a href="course-details.html">How To Make Something Very Easier
                                Than You Think</a></h3>
                        <div class="course-author"><a href="course.html" class="author-name">by David Anfle
                                Smith</a>
                            <div class="course-rating">
                                <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5"><span
                                            style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                </div>(4.00)
                            </div>
                        </div>
                        <p class="course-text">Learn How To Build The Perfect Diet & Meal Plan For Improved Health,
                            Better Weight Loss And More Health, Better Weight Loss And More Health, Better Weight
                            Loss And More Health, Diet & Meal Plan For Improved Better Weight Loss And More</p>
                        <div class="course-meta">
                            <div class="meta-box"><i class="fas fa-file"></i>
                                <div><span class="text">Total Lesson:</span> <span class="number">328</span></div>
                            </div>
                            <div class="meta-box"><i class="fas fa-user"></i>
                                <div><span class="text">Total Students:</span> <span class="number">25,869</span>
                                </div>
                            </div>
                            <div class="meta-box"><i class="fas fa-eye"></i>
                                <div><span class="text">Total Views:</span> <span class="number">1256k</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-list">
                    <div class="course-img"><img src="../user/assets/img/course/course_6_2.jpg" alt="course"> <span
                                class="tag">22.9$</span></div>
                    <div class="course-content">
                        <h3 class="course-title"><a href="course-details.html">Try To Make Something Very Easier
                                Than You Learn</a></h3>
                        <div class="course-author"><a href="course.html" class="author-name">by David Anfle
                                Smith</a>
                            <div class="course-rating">
                                <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5"><span
                                            style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                </div>(4.00)
                            </div>
                        </div>
                        <p class="course-text">Learn How To Build The Perfect Diet & Meal Plan For Improved Health,
                            Better Weight Loss And More Health, Better Weight Loss And More Health, Better Weight
                            Loss And More Health, Diet & Meal Plan For Improved Better Weight Loss And More</p>
                        <div class="course-meta">
                            <div class="meta-box"><i class="fas fa-file"></i>
                                <div><span class="text">Total Lesson:</span> <span class="number">526</span></div>
                            </div>
                            <div class="meta-box"><i class="fas fa-user"></i>
                                <div><span class="text">Total Students:</span> <span class="number">25,777</span>
                                </div>
                            </div>
                            <div class="meta-box"><i class="fas fa-eye"></i>
                                <div><span class="text">Total Views:</span> <span class="number">1352k</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-list">
                    <div class="course-img"><img src="../user/assets/img/course/course_6_3.jpg" alt="course"> <span
                                class="tag">Free</span></div>
                    <div class="course-content">
                        <h3 class="course-title"><a href="course-details.html">Got To Make Something Very Easier
                                Than You Better</a></h3>
                        <div class="course-author"><a href="course.html" class="author-name">by David Anfle
                                Smith</a>
                            <div class="course-rating">
                                <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5"><span
                                            style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                </div>(4.00)
                            </div>
                        </div>
                        <p class="course-text">Learn How To Build The Perfect Diet & Meal Plan For Improved Health,
                            Better Weight Loss And More Health, Better Weight Loss And More Health, Better Weight
                            Loss And More Health, Diet & Meal Plan For Improved Better Weight Loss And More</p>
                        <div class="course-meta">
                            <div class="meta-box"><i class="fas fa-file"></i>
                                <div><span class="text">Total Lesson:</span> <span class="number">328</span></div>
                            </div>
                            <div class="meta-box"><i class="fas fa-user"></i>
                                <div><span class="text">Total Students:</span> <span class="number">25,869</span>
                                </div>
                            </div>
                            <div class="meta-box"><i class="fas fa-eye"></i>
                                <div><span class="text">Total Views:</span> <span class="number">1256k</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-list">
                    <div class="course-img"><img src="../user/assets/img/course/course_6_4.jpg" alt="course"> <span
                                class="tag">22.9$</span></div>
                    <div class="course-content">
                        <h3 class="course-title"><a href="course-details.html">How To Make Something Very Easier
                                Than You Think</a></h3>
                        <div class="course-author"><a href="course.html" class="author-name">by David Anfle
                                Smith</a>
                            <div class="course-rating">
                                <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5"><span
                                            style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                </div>(4.00)
                            </div>
                        </div>
                        <p class="course-text">Learn How To Build The Perfect Diet & Meal Plan For Improved Health,
                            Better Weight Loss And More Health, Better Weight Loss And More Health, Better Weight
                            Loss And More Health, Diet & Meal Plan For Improved Better Weight Loss And More</p>
                        <div class="course-meta">
                            <div class="meta-box"><i class="fas fa-file"></i>
                                <div><span class="text">Total Lesson:</span> <span class="number">526</span></div>
                            </div>
                            <div class="meta-box"><i class="fas fa-user"></i>
                                <div><span class="text">Total Students:</span> <span class="number">25,777</span>
                                </div>
                            </div>
                            <div class="meta-box"><i class="fas fa-eye"></i>
                                <div><span class="text">Total Views:</span> <span class="number">1352k</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-list">
                    <div class="course-img"><img src="../user/assets/img/course/course_6_5.jpg" alt="course"> <span
                                class="tag">Free</span></div>
                    <div class="course-content">
                        <h3 class="course-title"><a href="course-details.html">Try To Make Something Very Easier
                                Than You Learn</a></h3>
                        <div class="course-author"><a href="course.html" class="author-name">by David Anfle
                                Smith</a>
                            <div class="course-rating">
                                <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5"><span
                                            style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                </div>(4.00)
                            </div>
                        </div>
                        <p class="course-text">Learn How To Build The Perfect Diet & Meal Plan For Improved Health,
                            Better Weight Loss And More Health, Better Weight Loss And More Health, Better Weight
                            Loss And More Health, Diet & Meal Plan For Improved Better Weight Loss And More</p>
                        <div class="course-meta">
                            <div class="meta-box"><i class="fas fa-file"></i>
                                <div><span class="text">Total Lesson:</span> <span class="number">328</span></div>
                            </div>
                            <div class="meta-box"><i class="fas fa-user"></i>
                                <div><span class="text">Total Students:</span> <span class="number">25,869</span>
                                </div>
                            </div>
                            <div class="meta-box"><i class="fas fa-eye"></i>
                                <div><span class="text">Total Views:</span> <span class="number">1256k</span></div>
                            </div>
                        </div>
                    </div>
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
                    <div class="cta-img"><img src="../user/assets/img/normal/cta_1_1.png" alt="Image"></div>
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
                        src="../user/assets/img/shape/dot_shape_1.png" alt="shapes"></div>
        </div>
    </div>
</section>