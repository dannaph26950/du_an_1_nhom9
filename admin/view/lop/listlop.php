<?php
if(isset($_SESSION['taikhoan'])){
    ?>
<center><h1 style="margin: 60px 0px">DANH SÁCH LỚP</h1></center>
<div style="text-align: center; margin: 60px 0px">
    <a href="index.php?act=add_lop"><input type="submit" value="THÊM MỚI" name="add_lop" class="btn btn-primary" style="width: 200px" ></a>

</div>

<div class="container">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Mã Lớp</th>
            <th>Tên Lớp</th>
            <th>Thời gian khai giảng</th>
            <th>Địa điểm học</th>
            <th>Số Lượng Học Viên</th>
            <th>Tên khóa học</th>
            <th>Giảng Viên</th>
            <th>Thao Tác</th>
        </tr>
        </thead>
        <tbody>
        <?php  foreach ($list_lop as $key=>$value) {

            ?>
            <tr>
                <td><?php echo $value['id_lop'] ?></td>
                 <td><?php echo $value['ten_lop'] ?></td>
                <?php $originalDate = $value['thoi_gian_khai_giang'] ; $newDate = date("d-m-Y", strtotime($value['thoi_gian_khai_giang']));  ?>
                <td><?php echo $newDate ?></td>
                <td><?php echo $value['dia_diem_hoc'] ?></td>
                <td><?php echo $value['so_luong'] ?></td>
                <td><?php echo listone_khoahoc($value['id_khoa_hoc'])[0]['ten_khoa_hoc'] ?></td>
                <td><?php echo listone_giangvien($value['magv'])[0]['ten_gv'] ?></td>

                <td class="">
                    <input value="Sửa " type="button" class="btn btn-primary start-50" onclick="location.href='index.php?act=edit_lop&id=<?php echo $value['id_lop'] ?>'" ><br><br>
                    <input type="submit" class="btn btn-primary start-50 xoa" onclick="confirm('Bạn có muốn xóa lớp \( <?php echo $value['ten_lop']?> \) hay không!') == true ? location.href='index.php?act=xoa_lop&id=<?php echo $value['id_lop']?>' : ''" value="Xóa"><br><br>
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
