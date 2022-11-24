<?php

    foreach ($listone_khoahoc as $key => $value) {
        ?>
        <center><h1 style="margin-top: 20px;">Cập Nhật Khóa Học</h1></center>
        <form method="post" action="index.php?act=update_khoahoc"  enctype="multipart/form-data">
            <div style="margin: 0px 300px;">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tên Khóa Học</label>
                    <input type="text" name="ten_KH" value="<?php if(isset($value['ten_khoa_hoc'])&&($value['ten_khoa_hoc']!="")) echo $value['ten_khoa_hoc']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <p style="color: red"><?php echo isset($error_update_khoahoc["name_KH"]) ? $error_update_khoahoc["name_KH"] : ""; ?></p>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Ảnh Khóa Học</label>
                    <input type="file" name="anh" value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <p style="color: red"><?php
                            if (isset($error_update_khoahoc["imgSize"])){
                                echo $error_update_khoahoc["imgSize"];
                            } elseif (isset($error_update_khoahoc["imgType"])){
                                echo $error_update_khoahoc["imgType"];
                            } else {
                                echo "";
                            }
                        ?></p>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Giá Tiền</label>
                    <input type="number" name="gia_KH" value="<?php if(isset($value['gia'])&&($value['gia']!="")) echo $value['gia']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <p style="color: red"><?php echo isset($error_update_khoahoc["gia"]) ? $error_update_khoahoc["gia"] : ""; ?></p>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Thời Gian Học</label>
                    <input type="date" name="thoiGian_KH" value="<?php if(isset($value['thoi_gian_hoc'])&&($value['thoi_gian_hoc']!="")) echo $value['thoi_gian_hoc']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <p style="color: red"><?php echo isset($error_update_khoahoc["time"]) ? $error_update_khoahoc["time"] : ""; ?></p>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Mô Tả</label>
                    <textarea class="form-control" name="mota_KH"  id="exampleFormControlTextarea1" rows="3"><?php if(isset($value['mo_ta'])&&($value['mo_ta']!="")) echo $value['mo_ta']; ?></textarea>
                    <p style="color: red"><?php echo isset($error_update_khoahoc["mota"]) ? $error_update_khoahoc["mota"] : ""; ?></p>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Mã Danh Mục</label>
                    <select class="text-input small-input kiemtra" data-error="Nhập mã loại cha" id="ma_loai_cha" name="id_danh_muc"   >
                        <?php foreach ($listall_danhmuc as $key => $value) {
                            ?>
                            <option value="<?php if(isset($value['id_danh_muc'])&&($value['id_danh_muc']!="")) echo $value['id_danh_muc']; ?>" ><?php echo $value['ten_danh_muc'];?></option>
                            <?php
                        }
                        ?>
                    </select>
                    <p style="color: red"><?php echo isset($error_update_khoahoc["id_DM"]) ? $error_update_khoahoc["id_DM"] : ""; ?></p>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Mã Lớp</label>

                    <select name="id_lop">
                        <option hidden>Chọn danh mục</option>
                        <?php foreach ($list_lop as $key => $value){ ?>
                            <option value="<?php if(isset($value['id_lop'])&&($value['id_lop']!="")) echo $value['id_lop'] ?>"><?php echo $value['ten_lop'] ?></option>
                        <?php } ?>
                    </select>
                    <p style="color: red"><?php echo isset($error_update_khoahoc["id_lop"]) ? $error_update_khoahoc["id_lop"] : ""; ?></p>
                </div>
                <center>
                    <div style="text-align: center">
                        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

                        <input type="submit" value="SỬA" name="update_KH" class="btn btn-primary" style="width: 200px; margin: 0px 20px" onclick="location.href='index.php?act=list_khoahoc'"  >

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
        <?php
    }

?>