<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--    <title>Document</title>-->
<!--    <link rel="stylesheet" href="../view/assets/css/profile.css">-->
<!--</head>-->
<!--<body>-->
<div class="khung">
    <style>
        .phai h2{
            margin-left: 100px;
        }
        .khung{

            display: flex;
        }
        .trai{
            background-color:#0D5EF4;
            width: 22.6%;
            height:550px;
            border-bottom-right-radius: 10px;
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
                <li><a href="index.php?act=edit_thong_tin">Cập nhật thông tin</a></li>
                <li><a href="index.php?act=list_khoa_hoc">Khóa học đã đăng ký</a></li>
                <li><a href="index.php?act=dang_xuat">Đăng xuất</a></li>
            </ul>
        </nav>
    </div>
    <div class="phai">

        <form action="index.php?act=update_thong_tin" method="post">

                <h2>Cập nhật thông tin</h2>
                <?php
                foreach ($listone_hocvien as $index => $value){ ?>
                <div style="margin: 0px 100px;">
                    <div class="mb-3" >
                        <label for="exampleInputEmail1" class="form-label">Mã Học Viên</label>
                        <input type="text" name="id_hoc_vien" value="<?php if(isset($value['id_hoc_vien'])&&($value['id_hoc_vien']!="")) echo $value['id_hoc_vien']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" disabled>

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tên Học Viên</label>
                        <input type="text" name="ten_hv" value="<?php if(isset($value['ten_hv'])&&($value['ten_hv']!="")) echo $value['ten_hv']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" name="email" value="<?php if(isset($value['email'])&&($value['email']!="")) echo $value['email']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">SĐT</label>
                        <input type="number" name="sdt" value="<?php if(isset($value['sdt'])&&($value['sdt']!="")) echo $value['sdt']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Địa chỉ</label>
                        <input type="text" name="dia_chi" value="<?php if(isset($value['dia_chi'])&&($value['dia_chi']!="")) echo $value['dia_chi']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >

                    </div>
                    <center>
                        <div style="text-align: center">
                            <input type="hidden" name="id" value="<?php if(isset($value['id_hoc_vien'])&&($value['id_hoc_vien']!="")) echo $value['id_hoc_vien']; ?>">
                            <input type="submit" value="SỬA" name="update_hv" class="btn btn-primary" style="width: 200px; margin: 0px 20px"   >
                            <input type="reset" value="CẬP NHẬT LẠI" name=""  class="btn btn-primary" style="width: 200px" >
                        </div>
                    </center>

                    <span style="color: red">
            <?php
            if (isset($thongbao) && ($thongbao != '')){
                echo $thongbao;
            }
            ?>
        </span>

            <?php } ?>
        </form>
    </div>
</div>
</div>
<!--</body>-->
<!--</html>-->
