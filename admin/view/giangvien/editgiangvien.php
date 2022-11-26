

<?php
if(isset($_SESSION['user'])){
foreach ($listone_giangvien as $key=>$value){


    ?>
    <center><h1 style="margin-top: 20px;">Cập Nhật Giảng Viên</h1></center>
    <form method="post" action="index.php?act=update_giangvien"  enctype="multipart/form-data">
        <div style="margin: 0px 300px;">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Mã Giảng Viên</label>
                <input type="text" name="ma_gv" value="<?php if(isset($value['magv'])&&($value['magv']!="")) echo $value['magv']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" disabled>
                <p style="color: red"> </p>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tên giảng viên</label>
                <input type="text" name="ten_gv" value="<?php if(isset($value['ten_gv'])&&($value['ten_gv']!="")) echo $value['ten_gv']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <p style="color: red"> </p>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Hình Giảng viên</label>
                <input type="file" name="hinh_gv" value="<?php if(isset($value['hinh_gv'])&&($value['hinh_gv']!="")) echo $value['hinh_gv']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <p style="color: red"> </p>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Thông tin</label>
                <input class="form-control" name="thong_tin_gv"  value="<?php if(isset($value['thong_tin_gv'])&&($value['thong_tin_gv']!="")) echo $value['thong_tin_gv']; ?>">
                <p style="color: red"> </p>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Trạng thái</label>
                <input class="form-control" name="trang_thai"  value="<?php if(isset($value['trang_thai'])&&($value['trang_thai']!="")) echo $value['trang_thai']; ?>">
                <p style="color: red"> </p>
            </div>


            <center>
                <div style="text-align: center">

                    <input type="hidden" name="id" value="<?php if(isset($value['magv'])&&($value['magv']!="")) echo $value['magv']; ?>">
                    <input type="submit" value="SỬA" name="update_giangvien" class="btn btn-primary" style="width: 200px; margin: 0px 20px" onclick="location.href='index.php?act=list_giangvien'"  >
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
<?php }} else{
    echo "<script>alert('Đăng Nhập admin có thể sử dụng được trang này!');</script>";
    echo "<script>window.location.href='index.php?act=dang_nhap';</script>";
} ?>

