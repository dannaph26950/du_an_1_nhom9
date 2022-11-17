
<center><h1 style="margin-top: 20px;">Thêm mới lớp</h1></center>


<form method="post" action="index.php?act=add_lop"  enctype="multipart/form-data">
    <div style="margin: 0px 300px;">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label ">TÊN LỚP</label>
            <input type="text"  class="form-control kiemtra" id="exampleInputEmail1" aria-describedby="emailHelp" name="ten_khoa_hoc">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label  ">MÃ GIÁO VIÊN</label>
            <input type="number"  class="form-control kiemtra" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_danh_muc">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label  ">SỐ LƯỢNG HỌC VIÊN</label>
            <input type="text"  class="form-control kiemtra" id="exampleInputEmail1" aria-describedby="emailHelp" name="anh">
        </div>

    </div>
    <center>
        <div style="text-align: center">
            <input type="reset" value="CẬP NHẬT LẠI" name=""  class="btn btn-primary" style="width: 200px" >
            <a href="index.php?act=list_lop"><input type="submit" value="THÊM MỚI" name="add_lop" class="btn btn-primary" style="width: 200px; margin: 0px 20px" onclick="return  kiemTraDuLieu()" ></a>

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


<div style="margin-top: 100px; background-color: white"></div>