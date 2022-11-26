<?php
if(isset($_SESSION['user'])){
?>
<center><h1 style="margin-top: 20px;">Thêm mới lớp</h1></center>

<center>
    <a href="index.php?act=list_lop"><input type="submit" value="DANH SÁCH" name="" class="btn btn-primary" style="width: 200px" ></a>
</center>
<form method="post" action="index.php?act=add_lop"  enctype="multipart/form-data">
    <div style="margin: 0px 300px;">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label ">Mã Lớp</label>
            <input type="text"  class="form-control kiemtra" id="exampleInputEmail1" aria-describedby="emailHelp" name="ten_lop">
            <p style="color: red"><?php echo isset($error_add_lop["name"]) ? $error_add_lop["name"] : ""; ?></p>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label ">Tên Lớp</label>
            <input type="text"  class="form-control kiemtra" id="exampleInputEmail1" aria-describedby="emailHelp" name="ten_lop">
            <p style="color: red"><?php echo isset($error_add_lop["name"]) ? $error_add_lop["name"] : ""; ?></p>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label ">Thời Gian Khai Giảng</label>
            <input type="date"  class="form-control kiemtra" id="exampleInputEmail1" aria-describedby="emailHelp" name="thoi_gian_khai_giang">
            <p style="color: red"><?php echo isset($error_add_lop["time"]) ? $error_add_lop["time"] : ""; ?></p>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label ">Địa Điểm Học</label>
            <input type="text"  class="form-control kiemtra" id="exampleInputEmail1" aria-describedby="emailHelp" name="dia_diem_hoc">
            <p style="color: red"><?php echo isset($error_add_lop["dia_diem"]) ? $error_add_lop["dia_diem"] : ""; ?></p>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label  ">Số Lượng Học Viên</label>
            <input type="number"  class="form-control kiemtra" id="exampleInputEmail1" aria-describedby="emailHelp" name="so_luong">
            <p style="color: red"><?php echo isset($error_add_lop["so_luong"]) ? $error_add_lop["so_luong"] : ""; ?></p>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label  ">Mã Giáo Viên</label>

            <select name="id_gv">
                <option hidden>Chọn danh mục</option>
                <?php foreach ($listall_giangvien as $key => $value){ ?>
                    <option value="<?php echo $value['id_gv'] ?>"><?php echo $value['ten_gv'] ?></option>
                <?php } ?>
            </select>
<!--            <input type="number"  class="form-control kiemtra" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_gv">-->
            <p style="color: red"><?php echo isset($error_add_lop["id_gv"]) ? $error_add_lop["id_gv"] : ""; ?></p>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label ">Mã Khóa Học</label>
            <select name="id_khoa_hoc">
                <option hidden>Chọn danh mục</option>
                <?php foreach ($listall_khoahoc as $key => $value){ ?>
                    <option value="<?php echo $value['id_khoa_hoc'] ?>"><?php echo $value['ten_khoa_hoc'] ?></option>
                <?php } ?>
            </select>
<!--            <input type="number"  class="form-control kiemtra" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_khoa_hoc">-->
            <p style="color: red"><?php echo isset($error_add_lop["id_kh"]) ? $error_add_lop["id_kh"] : ""; ?></p>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label  ">Trạng Thái</label>
            <input type="number"  class="form-control kiemtra" id="exampleInputEmail1" aria-describedby="emailHelp" name="trang_thai">
            <p style="color: red"><?php echo isset($error_add_lop["trang_thai"]) ? $error_add_lop["trang_thai"] : ""; ?></p>
        </div>
        <center>
            <div style="text-align: center">
                <a href="index.php?act=list_lop"><input type="submit" value="THÊM MỚI" name="add_lop" class="btn btn-primary" style="width: 200px; margin: 0px 20px" onclick="return  kiemTraDuLieu()" ></a>
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