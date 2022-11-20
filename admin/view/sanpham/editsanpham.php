<center><h1 style="margin-top: 20px;">Cập Nhật Khóa Học</h1></center>
<form method="post" action="index.php?act=upd_khoahoc"  enctype="multipart/form-data">
    <div style="margin: 0px 300px;">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tên Khóa Học</label>
            <input type="text" name="ten_KH" value="<?php if(isset($row['ten_khoa_hoc'])&&($row['ten_khoa_hoc']!="")) echo $row['ten_khoa_hoc']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Ảnh Khóa Học</label>
            <input type="file" name="anh_KH" value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Giá Tiền</label>
            <input type="number" name="gia_KH" value="<?php if(isset($row['gia'])&&($row['gia']!="")) echo $row['gia']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Thời Gian Học</label>
            <input type="date" name="thoiGian_KH" value="<?php if(isset($row['thoi_gian_hoc'])&&($row['thoi_gian_hoc']!="")) echo $row['thoi_gian_hoc']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Mô Tả</label>
            <textarea class="form-control" name="mota_KH"  id="exampleFormControlTextarea1" rows="3"><?php if(isset($row['mo_ta'])&&($row['mo_ta']!="")) echo $row['mo_ta']; ?></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Mã Danh Mục</label>
            <input type="text" name="id_danhmuc" value="<?php if(isset($row['id_danh_muc'])&&($row['id_danh_muc']!="")) echo $row['id_danh_muc']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Mã Lớp</label>
            <input type="text" name="id_Lop" value="<?php if(isset($row['id_lop'])&&($row['id_lop']!="")) echo $row['id_lop'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <center>
            <div style="text-align: center">
                <input type="hidden" name="id_KH" value="<?php if(isset($row['id_khoa_hoc'])&&($row['id_khoa_hoc']!="")) echo $row['id_khoa_hoc']; ?>">
                <input type="submit" value="Cập Nhật" name="update_KH" class="btn btn-primary" style="width: 200px; margin: 0px 20px" >
                <a href="index.php?act=list_khoahoc" ><input class="btn btn-primary" type="button" value="DANH SÁCH" style="width: 200px;margin: 0px 20px" ></a>
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
    <div style="margin-top: 100px; background-color: white"></div>

</form>