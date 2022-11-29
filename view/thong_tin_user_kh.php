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
                <li><a href="index.php?act=act=dang_xuat">Đăng xuất</a></li>
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
                foreach ($listone_hocvien as $key=>$value) {?>
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
                <?php }?>
                </tbody>
            </table>
            <center><span style="color: red">Vui lòng cầm máy 1 ngày sau để được có lịch học sớm nhất nhé </span></center>
        </div>
    </div>
</div>

</body>
</html>
