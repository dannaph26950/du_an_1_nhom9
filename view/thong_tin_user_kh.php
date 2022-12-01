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
                            <th>Mã Đăng Ký</th>
                            <th>Tên Học Viên</th>
                            <th>Tên Lớp</th>
                            <th>Giá Tiền</th>
                            <th>Thời Gian Đăng Ký</th>
                            <th>Trạng Thái</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($listone_giohang as $key => $value) { ?>
                            <tr>
                                <td><?php echo $value['id_dang_ky'] ?></td>
                                <td><?php echo listone_hocvien($value['id_hoc_vien'])[0]['ten_hv'] ?></td>
                                <td><?php echo listone_lop_tenlop($value['id_lop'])[0]['ten_lop'] ?></td>
                                <td><?php echo $value['gia_tien'] ?></td>
                                <td><?php echo $value['ngay_dk'] ?></td>
                                <td><?php if($value ['tinh_trang'] == 0) echo "Chưa thanh toán"; elseif($value ['tinh_trang'] == 1) echo "Đang xử lí"; elseif($value ['tinh_trang'] == 2) echo "Thanh Toán thành công"  ?></td>
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
                        <form action="index.php?act=list_khoa_hoc" method="post" enctype="multipart/form-data">
                            <tr class="order-total">
                                <td>Gửi hóa đơn</td>
                                  <input type="hidden" id="id_hv" name="id" value="<?php echo listone_giohang($_SESSION['user']['id_hoc_vien'])[0]['id_dang_ky'] ?>">
                                    <td data-title="Total"> <input type="file" id="hinh_anh" value="0" name="image" > </td>
                            </tr>
                        </tfoot>
                    </table>
                    <div class="wc-proceed-to-checkout mb-30">
                        <a href="index.php?act=list_khoa_hoc"><input type="submit" value="Gửi" name="add_hoadon" class="btn btn-primary" style="width: 200px; margin: 0px 20px" ></a>
                        <span style="color: red">
                            <?php
                            if (isset($thongbao) && ($thongbao != '')){
                                echo $thongbao;
                            }
                            ?>
                        </span>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>