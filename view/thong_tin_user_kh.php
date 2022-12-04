
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
                            <th>Thanh Toán</th>
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
                                <td><button type="submit" class="btn btn-primary" onclick="location.href='index.php?act=thanh_toan&id=<?php echo $value['id_dang_ky'] ?>'">Thanh Toán</button></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

