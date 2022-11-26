<?php
if(isset($_SESSION['user'])){
    ?>
<center><h1 style="margin: 60px 0px">DANH SÁCH KHÓA HỌC</h1></center>
<div style="text-align: center; margin: 60px 0px">
    <a href="index.php?act=add_khoahoc"><input type="submit" value="THÊM MỚI" name="add_khoahoc" class="btn btn-primary" style="width: 200px" ></a>

</div>

<div class="container">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID khóa học</th>
            <th>Tên khóa học</th>
            <th>Hình ảnh </th>
            <th>Giá</th>
            <th>Thời gian học</th>
            <th>Mô tả</th>
            <th>ID loại khóa học</th>
            <th>ID lớp</th>
            <th>Thao tác</th>
        </tr>
        </thead>

        <?php foreach ($listall_khoahoc as $key=>$value) {?>
        <tbody>
            <tr>
                <td><?php echo $value['id_khoa_hoc'] ?></td>
                <td><?php echo $value['ten_khoa_hoc'] ?></td>
                <td><img src="../Upfileanh/<?php echo $value['anh'] ?>" alt="" style="width: 200px"></td>
                <td><?php echo $value['gia'] ?></td>
                <td><?php echo $value['thoi_gian_hoc'] ?></td>
                <td><?php echo $value['mo_ta'] ?></td>
                <td><?php echo $value['id_danh_muc'] ?></td>
                <td><?php echo $value['id_lop'] ?></td>
                <td class="">
                    <input value="Sửa" type="submit" class="btn btn-primary start-50" onclick="location.href='index.php?act=edit_khoahoc&id=<?php echo $value['id_khoa_hoc'] ?>'" ><br><br>
                    <input type="submit" class="btn btn-primary start-50" onclick="confirm('Bạn có muốn xóa khóa học \( <?php echo $value['ten_khoa_hoc']?> \) hay không!') == true ? location.href='index.php?act=delete_khoahoc&id=<?php echo $value['id_khoa_hoc']?>' : ''" value="Xóa"><br><br>
                </td>

            </tr>
        </tbody>
        <?php }?>

    </table>


</div>

<?php
     } else{
    echo "<script>alert('Đăng Nhập admin có thể sử dụng được trang này!');</script>";
    echo "<script>window.location.href='index.php?act=dang_nhap';</script>";
}
    ?>