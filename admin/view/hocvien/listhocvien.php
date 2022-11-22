
<center><h1 style="margin: 60px 0px">DANH SÁCH HỌC VIÊN</h1></center>
<div style="text-align: center; margin: 60px 0px">
    <a href="index.php?act=add_hocvien"><input type="submit" value="THÊM MỚI" name="add_hocvien" class="btn btn-primary" style="width: 200px" ></a>

</div>

<div class="container">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID học viên</th>
            <th>Tên học viên</th>
            <th>Email </th>
            <th>SĐT</th>
            <th>Địa chỉ</th>

            <th>Thao tác</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($listall_hocvien as $key=>$value) {?>
            <tr>
                <td><?php echo $value['id_hoc_vien'] ?></td>
                <td><?php echo $value['ten_hv'] ?></td>
                 <td><?php echo $value['email'] ?></td>
                <td><?php echo $value['sdt'] ?></td>
                <td><?php echo $value['dia_chi'] ?></td>
                <td class=""><input value="Sửa " type="button" class="btn btn-primary start-50" onclick="location.href='index.php?act=edit_giangvien&id=<?php echo $value['magv'] ?>'" ><br><br>
                    <input type="submit" class="btn btn-primary start-50" onclick="confirm('Bạn có muốn xóa giảng viên \( <?php echo $value['ten_gv']?> \) hay không!') == true ? location.href='index.php?act=delete_giangvien&id=<?php echo $value['magv']?>' : ''" value="Xóa"><br><br>
                </td>

            </tr>
        <?php }?>
        </tbody>
    </table>

</div>

