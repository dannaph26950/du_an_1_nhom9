

<div class="map-sec space">
    <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.863981044332!2d105.74459841498016!3d21.038127785993378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b991d80fd5%3A0x53cefc99d6b0bf6f!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1668247758542!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
    <div class="container">
        <div class="map-contact">
            <h3 class="border-title">Liên hệ</h3>
            <p class="mt-n1 mb-30">Chúng tôi sẽ cố gắng hồi âm khi bạn có thắc mắc, vui lòng gửi mail qua fptpolytechnic@fpt.edu.vn</p>
            <div class="contact-info">
                <div class="contact-info_icon"><i class="fal fa-location-dot"></i></div>
                <div class="media-body">
                    <h4 class="contact-info_title">Địa chỉ</h4><span class="contact-info_text">Trịnh Văn Bô, Nam Từ Liêm, Hà Nội</span>
                </div>
            </div>
            <div class="contact-info">
                <div class="contact-info_icon"><i class="fal fa-phone"></i></div>
                <div class="media-body">
                    <h4 class="contact-info_title">Số điện thoại</h4><span class="contact-info_text"><span>Mobile: <a
                                href="tel:+65485965789">0123-456-789</a></span> <span>Mobile: <a
                                href="tel:+65485965789">0258-369-147</a></span></span>
                </div>
            </div>
            <div class="contact-info">
                <div class="contact-info_icon"><i class="fal fa-clock"></i></div>
                <div class="media-body">
                    <h4 class="contact-info_title">Thời gian mở cửa</h4><span
                        class="contact-info_text"><span>Monday - Friday: 09:00 - 20:00</span> <span>Thứ 2 &
                                Thứ 7: 10:30 - 22:00</span></span>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
if(isset($_SESSION['user'])){
    ?>
        <div hidden>
            <section class="space">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-7 col-sm-9">
                            <div class="title-area text-center"></div>
                        </div>
                    </div>
                    <div class="contact-form-wrap" data-bg-src="assets/img/bg/contact_bg_1.png"><span class="sub-title">Contact
                    With Us!</span>
                        <h2 class="border-title">Muốn đặt câu hỏi? </h2>
                        <p class="mt-n1 mb-25 sec-text">ACADU luôn cố gắng không ngừng phát triển để trở thành một người bạn học tiếng anh với bạn. Đăng Kí ngay ở đây</p>
                        <form action="https://angfuzsoft.com/html/acadu/demo/mail.php" method="POST"
                              class="contact-form ajax-contact">
                            <div class="row">
                                <div class="form-group col-md-6"><input type="text" class="form-control style3" name="name"
                                                                        id="name" placeholder="Tên bạn"> <i class="fal fa-user"></i></div>
                                <div class="form-group col-md-6"><input type="email" class="form-control style3" name="email"
                                                                        id="email" placeholder="Email"> <i class="fal fa-envelope"></i></div>
                                <div class="form-group col-md-6"><select name="subject" id="subject" class="form-select style3">
                                        <option value="" disabled="disabled" selected="selected" hidden>Chọn môn học</option>
                                        <option value="Web Design">Môn 1</option>
                                        <option value="Web Development">Môn 1</option>
                                        <option value="Engine Diagnostics">Môn 1</option>
                                        <option value="Digital Marketing">Môn 1</option>
                                    </select> <i class="fal fa-chevron-down"></i></div>
                                <div class="form-group col-md-6"><input type="tel" class="form-control style3" name="number"
                                                                        id="number" placeholder="Số điện thoại"> <i class="fal fa-phone"></i></div>
                                <div class="form-group col-12"><textarea name="message" id="message" cols="30" rows="3"
                                                                         class="form-control style3" placeholder="Thắc mắc của bạn"></textarea> <i
                                            class="fal fa-comment"></i></div>
                                <div class="form-btn col-12 mt-10"><button class="as-btn">Gửi tin nhắn<i
                                                class="fas fa-long-arrow-right ms-2"></i></button></div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </div>
                </div>
            </section>
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
                                                                                                  class="as-btn">Đăng Ký ngay<i class="fas fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="shape-mockup movingX z-index-n1" data-bottom="0%" data-left="44%"><img
                                    src="assets/img/shape/dot_shape_1.png" alt="shapes"></div>
                    </div>
                </div>
            </section>

        </div>

    <?php
}else{
    ?>
    <section class="space">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-7 col-sm-9">
                    <div class="title-area text-center"></div>
                </div>
            </div>
            <div class="contact-form-wrap" data-bg-src="assets/img/bg/contact_bg_1.png"><span class="sub-title">Contact
                    With Us!</span>
                <h2 class="border-title">Muốn đặt câu hỏi? </h2>
                <p class="mt-n1 mb-25 sec-text">ACADU luôn cố gắng không ngừng phát triển để trở thành một người bạn học tiếng anh với bạn. Đăng Kí ngay ở đây</p>
                <form action="https://angfuzsoft.com/html/acadu/demo/mail.php" method="POST"
                      class="contact-form ajax-contact">
                    <div class="row">
                        <div class="form-group col-md-6"><input type="text" class="form-control style3" name="name"
                                                                id="name" placeholder="Tên bạn"> <i class="fal fa-user"></i></div>
                        <div class="form-group col-md-6"><input type="email" class="form-control style3" name="email"
                                                                id="email" placeholder="Email"> <i class="fal fa-envelope"></i></div>
                        <div class="form-group col-md-6"><select name="subject" id="subject" class="form-select style3">
                                <option value="" disabled="disabled" selected="selected" hidden>Chọn môn học</option>
                                <option value="Web Design">Môn 1</option>
                                <option value="Web Development">Môn 1</option>
                                <option value="Engine Diagnostics">Môn 1</option>
                                <option value="Digital Marketing">Môn 1</option>
                            </select> <i class="fal fa-chevron-down"></i></div>
                        <div class="form-group col-md-6"><input type="tel" class="form-control style3" name="number"
                                                                id="number" placeholder="Số điện thoại"> <i class="fal fa-phone"></i></div>
                        <div class="form-group col-12"><textarea name="message" id="message" cols="30" rows="3"
                                                                 class="form-control style3" placeholder="Thắc mắc của bạn"></textarea> <i
                                    class="fal fa-comment"></i></div>
                        <div class="form-btn col-12 mt-10"><button class="as-btn">Gửi tin nhắn<i
                                        class="fas fa-long-arrow-right ms-2"></i></button></div>
                    </div>
                    <p class="form-messages mb-0 mt-3"></p>
                </form>
            </div>
        </div>
    </section>
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
                                                                                          class="as-btn">Đăng Ký ngay<i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="shape-mockup movingX z-index-n1" data-bottom="0%" data-left="44%"><img
                            src="assets/img/shape/dot_shape_1.png" alt="shapes"></div>
            </div>
        </div>
    </section>

    <?php
}
?>

<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="assets/js/app.min.js"></script>
<script src="assets/js/main.js"></script>
