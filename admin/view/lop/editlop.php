
<center><h1 style="margin-top: 20px;">Thêm mới lớp</h1></center>

<?php
foreach ($list_lop as $key => $value) {
?>
<form method="post" action="index.php?act=update_lop"  enctype="multipart/form-data">
    <div style="margin: 0px 300px;">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label ">Tên Lớp</label>
            <input type="text"  class="form-control kiemtra" id="exampleInputEmail1" aria-describedby="emailHelp" name="ten_lop" value="<?php if(isset($value['ten_lop'])&&($value['ten_lop']!="")) echo $value['ten_lop']; ?>">
            <p style="color: red"><?php echo isset($error_add_lop["name"]) ? $error_add_lop["name"] : ""; ?> </p>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label ">Thời Gian Khai Giảng</label>
            <input type="date"  class="form-control kiemtra" id="exampleInputEmail1" aria-describedby="emailHelp" name="thoi_gian_khai_giang" value="<?php if(isset($value['thoi_gian_khai_giang'])&&($value['thoi_gian_khai_giang']!="")) echo $value['thoi_gian_khai_giang']; ?>">
            <p style="color: red"><?php echo isset($error_add_lop["time"]) ? $error_add_lop["time"] : ""; ?></p>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label ">Địa Điểm Học</label>
            <input type="text"  class="form-control kiemtra" id="exampleInputEmail1" aria-describedby="emailHelp" name="dia_diem_hoc" value="<?php if(isset($value['dia_diem_hoc'])&&($value['dia_diem_hoc']!="")) echo $value['dia_diem_hoc']; ?>">
            <p style="color: red"><?php echo isset($error_add_lop["dia_diem"]) ? $error_add_lop["dia_diem"] : ""; ?></p>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label  ">Số Lượng Học Viên</label>
            <input type="number"  class="form-control kiemtra" id="exampleInputEmail1" aria-describedby="emailHelp" name="so_luong" value="<?php if(isset($value['so_luong'])&&($value['so_luong']!="")) echo $value['so_luong']; ?>">
            <p style="color: red"><?php echo isset($error_add_lop["so_luong"]) ? $error_add_lop["so_luong"] : ""; ?></p>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label  ">Mã Giáo Viên</label>
            <input type="number"  class="form-control kiemtra" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_gv" value="<?php if(isset($value['ma_gv'])&&($value['ma_gv']!="")) echo $value['ma_gv']; ?>">
            <p style="color: red"><?php echo isset($error_add_lop["id_gv"]) ? $error_add_lop["id_gv"] : ""; ?></p>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label ">Mã Khóa Học</label>
            <input type="number"  class="form-control kiemtra" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_khoa_hoc" value="<?php if(isset($value['id_khoa_hoc'])&&($value['id_khoa_hoc']!="")) echo $value['id_khoa_hoc']; ?>">
            <p style="color: red"><?php echo isset($error_add_lop["id_kh"]) ? $error_add_lop["id_kh"] : ""; ?></p>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label  ">Trạng Thái</label>
            <input type="number"  class="form-control kiemtra" id="exampleInputEmail1" aria-describedby="emailHelp" name="trang_thai" value="<?php if(isset($value['trang_thai'])&&($value['trang_thai']!="")) echo $value['trang_thai']; ?>">
            <p style="color: red"><?php echo isset($error_add_lop["trang_thai"]) ? $error_add_lop["trang_thai"] : ""; ?></p>
        </div>

    </div>
    <center>
        <div style="text-align: center">
            <input type="hidden" name="id" value="<?php if(isset($value['id_lop'])&&($value['id_lop']!="")) echo $value['id_lop']; ?>">
            <input type="submit" value="SỬA" name="update_lop" class="btn btn-primary" style="width: 200px; margin: 0px 20px" onclick="location.href='index.php?act=list_khoahoc'"  >
            <input type="reset" value="Reset" name=""  class="btn btn-primary" style="width: 200px" >
        </div>
    </center>

    <span style="color: red">
            <?php
            if (isset($thongbao) && ($thongbao != '')){
                echo $thongbao;
            }
            ?>
        </span>
</form>

<?php
}
?>
?>
<div style="margin-top: 100px; background-color: white"></div>