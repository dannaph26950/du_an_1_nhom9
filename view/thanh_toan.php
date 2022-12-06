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
    <style>

        .khung{

            display: flex;
        }
        .trai{
            background-color:#0D5EF4;
            width: 22.6%;
            height:550px;


        }
        .phai{
            padding: 20px 60px ;
            width: 80%;

        }
        nav ul{
            list-style-type: none;
        }
        .trai li{
            margin: 90px 20px;
        }
        a{
            text-decoration:none;
            color:white
        }
        a:hover{
            text-decoration:underline;
        }
    </style>

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
                </tbody>
            </table>

        </div>

        <div class="row justify-content-end">
            <div class="">
                <h2 class="h4 summary-title">Đơn đăng kí </h2>
                <table class="table table-bordered" style="text-align: center">
                    <tbody>
                    <tr class="shipping">
                        <th style="text-align: left">
                            <p>Hướng dẫn chuyển khoản:</p>
                            <p>-Chuyển qua INTERNET BANKING (Hoặc Quét mã QRPAY)</p>
                            <p>-Ghi rõ nội dung chuyển tiền:<h6  style="font-family: 'Roboto', sans-serif">Họ và tên. Mã học viên. Tên Lớp. Số Điện Thoại</h6></p>
                            <p>Ví dụ: <h6 style="font-family: 'Roboto', sans-serif">(Hoàng Long Duy. 235. WE17315. 0396122241)</h6></p>
                            <p style="color: red">Thời hạn nộp học phí: Trong 7 ngày tính từ ngày đăng kí</p>
                            <p>Lưu ý: Nếu sau 7 ngày học viên không thanh toán hoặc chưa thanh toán thì đơn đăng kí sẽ bị hủy -> Đăng kí lớp không thành công</p>
                        </th>
                        <td data-title="Shipping and Handling">
                            <ul class="woocommerce-shipping-methods list-unstyled">
                                <img src="../mã%20qr.jpg" alt="Mã qr">
                            </ul>
                            <p class="woocommerce-shipping-destination">Số tài khoản : MB BANK <span style="color: red">0339580923</span>  </p>
                            <p class="woocommerce-shipping-destination">Chủ tài khoản: <span style="color: red">Đậu Phương Thảo</span>  </p>

                        </td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <form action="index.php?act=update_thanh_toan" method="post" enctype="multipart/form-data">
                        <tr class="order-total">
                            <td><h6 >Gửi hóa đơn</h6></td>
                            <td data-title="Total"> <input type="file" value="" name="image" style="width: 370px; height: 45px" > </td>
                        </tr>
                    </tfoot>
                </table>
                <div class="wc-proceed-to-checkout mb-30">
                    <input type="hidden" id="id_hv" name="id" value="<?php echo $value['id_dang_ky'] ?>">
                    <input type="submit" value="Gửi" name="update_hoadon" class="btn btn-primary" style="width: 200px; margin: 0px 20px" onclick="location.href='index.php?act=list_khoa_hoc'" >
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
<?php } ?>
</body>

</html>
