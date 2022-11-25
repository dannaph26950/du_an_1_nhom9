
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
            <th>Mã khóa học</th>
            <th>Mã Giáo Viên</th>
            <th>Trạng Thái</th>
            <th>Thao Tác</th>
        </tr>
        </thead>
        <tbody>
        <?php  foreach ($list_lop as $key=>$value) {

            ?>
            <tr>
                <td><?php echo $value['id_lop'] ?></td>
                <td><?php echo $value['ten_lop'] ?></td>
                <td><?php echo $value['thoi_gian_khai_giang'] ?></td>
                <td><?php echo $value['dia_diem_hoc'] ?></td>
                <td><?php echo $value['so_luong'] ?></td>
                <td><?php echo $value['id_khoa_hoc'] ?></td>
                <td><?php echo $value['magv'] ?></td>
                <td><?php echo $value['trang_thai'] ?></td>

                <td class="">
                    <input value="Sửa " type="button" class="btn btn-primary start-50" onclick="location.href='index.php?act=edit_lop&id=<?php echo $value['id_lop'] ?>'" ><br><br>
                    <input type="submit" class="btn btn-primary start-50" onclick="confirm('Bạn có muốn xóa lớp \( <?php echo $value['ten_lop']?> \) hay không!') == true ? location.href='index.php?act=xoa_lop&id=<?php echo $value['id_lop']?>' : ''" value="Xóa"><br><br>
                </td>

            </tr>
        <?php }?>
        </tbody>
    </table>

</div>

