<?php
if(isset($_SESSION['taikhoan'])){
    ?>
    <center><h1 style="margin-top: 20px;">Cập Nhật Đơn Hàng</h1></center>
    <center>
        <a href="index.php?act=list_giohang"><input type="submit" value="DANH SÁCH" name="list_giohang" class="btn btn-primary" style="width: 200px" ></a>
    </center>


    <form method="post" action="index.php?act=update_giohang"  enctype="multipart/form-data">
        <div style="margin: 0px 300px;">

            <div class="mb-3">
                <label for="exampleInputEmail1"class="form-label" style="font-weight: bold" >Trạng Thái </label>
                <select class="text-input small-input kiemtra" data-error="Nhập mã loại cha" id="ma_loai_cha" name="t_t">
                    <option value="">Chọn Trạng Thái</option>
                    <option value="2">Thanh Toán Thành Công</option>
                    <option value="1">Đang Xử Lí</option>
                    <option value="0">Chưa Thanh Toán</option>
                </select>

            </div>
            <center>
                <div style="text-align: center">

                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                    <input type="hidden" name="id_lop" value="<?php echo listone_gio_hang(13)[0]["id_lop"]; ?>">

                    <input type="submit" value="Cập nhật" name="update_giohang" class="btn btn-primary" style="width: 200px; margin: 0px 20px" onclick="location.href='index.php?act=list_giohang'"  >


                </div>
            </center>
            <span style="color: red; margin: 30px 0px">
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