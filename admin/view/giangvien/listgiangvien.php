<?php
if(isset($_SESSION['user'])){
?>
<center><h1 style="margin: 60px 0px">DANH SÁCH GIẢNG VIÊN</h1></center>
<div style="text-align: center; margin: 60px 0px">
    <a href="index.php?act=add_giangvien"><input type="submit" value="THÊM MỚI" name="add_giangvien" class="btn btn-primary" style="width: 200px" ></a>

</div>

<div class="container">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID giảng viên</th>
            <th>Tên giảng viên</th>
            <th>Hình ảnh </th>
            <th>Thông tin giảng viên</th>
            <th>Trạng thái</th>

            <th>Thao tác</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($listall_giangvien as $key=>$value) {?>
            <tr>
                <td><?php echo $value['magv'] ?></td>
                <td><?php echo $value['ten_gv'] ?></td>
                <td><img src="../Upfileanh/giangvien/<?php echo $value['hinh_gv'] ?>" alt="" style="width: 200px"></td>
                <td><?php echo $value['thong_tin_gv'] ?></td>
                <td><?php echo $value['trang_thai'] ?></td>

                <td class=""><input value="Sửa " type="button" class="btn btn-primary start-50" onclick="location.href='index.php?act=edit_giangvien&id=<?php echo $value['magv'] ?>'" ><br><br>
                    <input type="submit" class="btn btn-primary start-50" onclick="confirm('Bạn có muốn xóa giảng viên \( <?php echo $value['ten_gv']?> \) hay không!') == true ? location.href='index.php?act=delete_giangvien&id=<?php echo $value['magv']?>' : ''" value="Xóa"><br><br>
                </td>

            </tr>
        <?php }?>
        </tbody>
    </table>

</div>
    <?php
} else{
    echo "<script>alert('Đăng Nhập admin có thể sử dụng được trang này!');</script>";
    echo "<script>window.location.href='index.php?act=dang_nhap';</script>";
}
?>


