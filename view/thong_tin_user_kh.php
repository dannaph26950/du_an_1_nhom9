<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../view/assets/css/profile.css">
</head>

<body>
    <div class="khung">
        <div class="trai">
            <nav>
                <ul>
                    <li><a href="index.php?act=profile">Thông tin</a></li>
                    <li><a href="index.php?act=update_thong_tin">Cập nhật thông tin</a></li>
                    <li><a href="index.php?act=list_khoa_hoc">Khóa học đã đăng ký</a></li>
                    <li><a href="index.php?act=dang_xuat">Đăng xuất</a></li>
                </ul>
            </nav>
        </div>
        <div class="phai">
            <h2>Khóa học đã đăng ký</h2>
            <div class="container">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID học viên</th>
                            <th>Tên học viên</th>
                            <th>Tài khoản</th>
                            <th>Mật khẩu</th>
                            <th>Email </th>
                            <th>SĐT</th>
                            <th>Địa chỉ</th>
                            <th>Mã lớp</th>
                            <th>Tên lớp</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($listone_hocvien as $key => $value) { ?>
                            <tr>
                                <td><?php echo $value['id_hoc_vien'] ?></td>
                                <td><?php echo $value['ten_hv'] ?></td>
                                <td><?php echo $value['tai_khoan'] ?></td>
                                <td><?php echo $value['mat_khau'] ?></td>
                                <td><?php echo $value['email'] ?></td>
                                <td><?php echo $value['sdt'] ?></td>
                                <td><?php echo $value['dia_chi'] ?></td>
                                <td><?php echo $value['id_lop'] ?></td>
                                <td><?php echo listone_lop_tenlop($value['id_lop'])[0]['ten_lop'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
            <div class="row justify-content-end">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <h2 class="h4 summary-title">Đơn đăng kí </h2>
                    <table class="cart_totals">
                        <tbody>
                            <tr>
                                <td>Giá khóa học</td>
                                <td data-title="Cart Subtotal"><span class="amount"><bdi><span>$</span>47</bdi></span>
                                </td>
                            </tr>
                            <tr class="shipping">
                                <th>Quét bằng mã QR</th>
                                <td data-title="Shipping and Handling">
                                    <ul class="woocommerce-shipping-methods list-unstyled">
                                        <img src="../mã qr.jpg" alt="Mã qr">
                                    </ul>
                                    <p class="woocommerce-shipping-destination">Không quét được mã vui lòng chuyển qua stk : MB BANK <span style="color: red">0339580923</span>  </p>
                                    <p class="woocommerce-shipping-destination">Chủ tài khoản: <span style="color: red">Đậu Phương Thảo</span>  </p>

                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
<!--                        <form action="index.php?act=anh_bang_chung" method="post" enctype="multipart/form-data">-->
<!--                            <tr class="order-total">-->
<!--                                <td>Gửi bằng chứng</td>-->
<!--                                  <input type="hidden" id="id_hv" value="--><?php //echo $_SESSION['user']['id_hoc_vien']; ?><!--">-->
<!--                                    <td data-title="Total"> <input type="file" id="hinh_anh" value="0" > </td>-->
<!---->
<!--                            </tr>-->
                        </tfoot>
                    </table>
<!--                    <div class="wc-proceed-to-checkout mb-30">-->
<!--                        <a href="index.php?act=profile"><input type="submit" value="Gửi" name="add_bangchung" class="btn btn-primary" style="width: 200px; margin: 0px 20px" ></a>-->
<!---->
<!--                    </div>-->
<!--                    </form>-->
                </div>
            </div>
        </div>
    </div>

</body>

</html>