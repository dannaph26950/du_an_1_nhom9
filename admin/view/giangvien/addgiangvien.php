
<?php
if(isset($_SESSION['taikhoan'])){
    ?>
<center><h1 style="margin-top: 20px;">Thêm mới giảng viên</h1></center>

<center>
    <a href="index.php?act=list_giangvien"><input type="submit" value="DANH SÁCH" name="" class="btn btn-primary" style="width: 200px" ></a>
</center>
<form method="post" action="index.php?act=add_giangvien"  enctype="multipart/form-data">
    <div style="margin: 0px 300px;">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label" style="font-weight: bold" >TÊN GIẢNG VIÊN </label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ten_gv">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label" style="font-weight: bold">HÌNH GIẢNG VIÊN</label>
            <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="hinh_gv">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label" style="font-weight: bold">THÔNG TIN GIẢNG VIÊN</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="thong_tin_gv">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label" style="font-weight: bold">TRẠNG THÁI</label>
            <input type="text" class="form-control" id="exampleFormControlTextarea1" name="trang_thai" >
        </div>
        <center>
            <div style="text-align: center">
                <a href="index.php?act=add_giangvien"><input type="submit" value="THÊM MỚI" name="add_giangvien" class="btn btn-primary" style="width: 200px; margin: 0px 20px" ></a>
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

    </div>


</form>


<div style="margin-top: 100px; background-color: white"></div>
<?php
     } else{
    echo "<script>alert('Đăng Nhập admin có thể sử dụng được trang này!');</script>";
    echo "<script>window.location.href='index.php?act=dang_nhap';</script>";
}
    ?>