<section class="space">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-7 col-sm-9">
                <div class="title-area text-center"></div>
            </div>
        </div>
        <div class="contact-form-wrap" data-bg-src="assets/img/bg/contact_bg_1.png"><span class="sub-title">Đăng ký thành viên ACADU!</span>
            <h2 class="border-title">Điền thông tin của bạn </h2>
            <p class="mt-n1 mb-25 sec-text">ACADU luôn cố gắng không ngừng phát triển để trở thành một người bạn học tiếng anh với bạn. Đăng Kí ngay ở đây</p>
            </form>
            <form action="index.php?act=add_dangky" method="post" >
                <div class="row">
<!--                    tài khoản-->
                    <div class="form-group col-md-6"><input type="text" class="form-control style3" name="tai_khoan"
                                                            id="number" placeholder="Tài khoản">
                        <p style="color: red"><?php echo isset($error_dk["tai_khoan"]) ? $error_dk["tai_khoan"] : ""; ?></p>
                    </div>

<!--                    tên-->
                    <div class="form-group col-md-6"><input type="text" class="form-control style3" name="ten_hv"
                                                            id="name" placeholder="Tên bạn"> <i class="fal fa-user"></i>
                        <p style="color: red"><?php echo isset($error_dk["ten_hv"]) ? $error_dk["ten_hv"] : ""; ?></p>
                    </div>

<!--                    mật khẩu-->
                    <div class="form-group col-md-6"><input type="password" class="form-control style3" name="mat_khau" id="" placeholder="Mật khẩu" >
                        <p style="color: red"><?php echo isset($error_dk["mat_khau"]) ? $error_dk["mat_khau"] : ""; ?></p>
                    </div>

<!--                    email-->
                    <div class="form-group col-md-6"><input type="email" class="form-control style3" name="email"
                                                            id="email" placeholder="Email"> <i class="fal fa-envelope"></i>
                        <p style="color: red"><?php echo isset($error_dk["email"]) ? $error_dk["email"] : ""; ?></p>
                    </div>

<!--                    nhập lại mật khẩu-->
                    <div class="form-group col-md-6"><input type="password" class="form-control style3" name="mat_khau1" id="" placeholder="Nhập Lại Mật khẩu" >
                        <p style="color: red"><?php echo isset($error_dk["mat_khau1"]) ? $error_dk["mat_khau1"] : ""; ?></p>
                         <p style="color: red"><?php echo isset($error_dk["mat_khau"]) ? $error_dk["mat_khau"] : ""; ?>
                    </div>

<!--                    địa chỉ-->
                    <div class="form-group col-md-6"><input type="text" class="form-control style3" name="dia_chi"
                                                            id="email" placeholder="Địa chỉ"> <i class="fal fa-envelope"></i>
                        <p style="color: red"><?php echo isset($error_dk["dia_chi"]) ? $error_dk["dia_chi"] : ""; ?></p>
                    </div>
<!--                    số điện thoại-->
                    <div class="form-group col-md-6"><input type="tel" class="form-control style3" name="sdt"
                                                            id="number" placeholder="Số điện thoại"> <i class="fal fa-phone"></i>
                        <p style="color: red"><?php echo isset($error_dk["sdt"]) ? $error_dk["sdt"] : ""; ?></p>
                    </div>



                    <span style="color: red">
                    <?php
                    if (isset($thongbao) && ($thongbao != '')){
                        echo $thongbao;
                    }
                    ?>
                </span>
                    <center>
                    </center>

                </div>
                <input type="submit" name="dang_ky" value="Đăng Kí"  class="btn btn-primary" style="width: 200px;"   >
            </form>
        </div>
    </div>
</section>

