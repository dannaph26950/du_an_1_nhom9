<?php
foreach($listone_giangvien as $index => $value){
?>
<section class="bg-white space">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="team-details-img"><img class="w-100" src="../Upfileanh/giangvien/<?php echo $value['hinh_gv'] ?>"
                                                   alt="team image"></div>
            </div>
            <div class="col-xl-7 align-self-center">
                <div class="about-box">
                    <div class="about-info">
                        <h2 class="title"><?php echo $value['ten_gv'] ?></h2><span class="desig">Giảng Viên chứng nhận từ ACADU</span>
                    </div>
                    <div class="social-box"><span class="title">Theo dõi tôi:</span>
                        <div class="as-social"><a target="_blank" href="https://facebook.com/"><i
                                    class="fab fa-facebook-f"></i></a> <a target="_blank"
                                                                          href="https://twitter.com/"><i class="fab fa-twitter"></i></a> <a target="_blank"
                                                                                                                                            href="https://instagram.com/"><i class="fab fa-instagram"></i></a> <a
                                target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="about-quality">
                    <div class="quality-box"><span class="quality-text">Lớp: <?php echo count(list_lop_magv($value['magv']));  ?></span> <span
                            class="quality-text">Học Viên: <?php echo count(list_lop_soluong($value['magv']));  ?></span></div>
                    <div class="quality-box"><span class="quality-text">Nhận Xét:</span>
                        <div class="course-rating">
                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5"><span
                                    style="width:79%">Đánh giá <strong class="rating">4.00</strong> out of 5</span>
                            </div>4.00 (70)
                        </div>
                    </div>
                    <div class="quality-box"><span class="quality-text">Kinh Nghiệm:</span> <span
                            class="quality-text">10 Năm</span></div>
                    <div class="quality-box"><span class="quality-text"><i class="fa-light fa-phone"></i><a
                                href="tel:+96321453654">+(963) 2145 3654</a></span> <span class="quality-text"><i
                                class="fa-light fa-envelope"></i><a
                                href="mailto:help@acadu-edu.com">help@acadu-edu.com</a></span></div>
                </div>
                <h3 class="h5 mt-35">Thông Tin</h3>
                <p><?php echo $value['thong_tin_gv'] ?></p>
            </div>
        </div>
    </div>
</section>
<?php } ?>
