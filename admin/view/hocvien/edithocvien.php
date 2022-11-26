
<?php
if(isset($_SESSION['taikhoan'])){
    foreach ($listone_hocvien as $key => $value) {
        ?>
        <center><h1 style="margin-top: 20px;">Cập Nhật Học Viên</h1></center>
        <form method="post" action="index.php?act=update_hocvien"  enctype="multipart/form-data">
            <div style="margin: 0px 300px;">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Mã Học Viên</label>
                    <input type="text" name="id_hoc_vien" value="<?php if(isset($value['id_hoc_vien'])&&($value['id_hoc_vien']!="")) echo $value['id_hoc_vien']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" disabled>

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tên Học Viên</label>
                    <input type="text" name="ten_hv" value="<?php if(isset($value['ten_hv'])&&($value['ten_hv']!="")) echo $value['ten_hv']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" name="email" value="<?php if(isset($value['email'])&&($value['email']!="")) echo $value['email']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">SĐT</label>
                    <input type="number" name="sdt" value="<?php if(isset($value['sdt'])&&($value['sdt']!="")) echo $value['sdt']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Địa chỉ</label>
                    <input type="text" name="dia_chi" value="<?php if(isset($value['dia_chi'])&&($value['dia_chi']!="")) echo $value['dia_chi']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>

                <center>
                    <div style="text-align: center">
                        <input type="hidden" name="id" value="<?php if(isset($value['id_hoc_vien'])&&($value['id_hoc_vien']!="")) echo $value['id_hoc_vien']; ?>">
                        <input type="submit" value="SỬA" name="update_hv" class="btn btn-primary" style="width: 200px; margin: 0px 20px" onclick="location.href='index.php?act=list_hocvien'"  >
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