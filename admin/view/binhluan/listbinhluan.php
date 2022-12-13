<?php
if(isset($_SESSION['taikhoan'])){
?>
<center><h1 style="margin: 60px 0px">DANH SÁCH BÌNH LUẬN</h1></center>


<div style="text-align: center; margin: 60px 0px">
</div>
<div class="container">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>MÃ BÌNH LUẬN</th>
            <th>NỘI DUNG BÌNH LUẬN</th>
            <th>Mã KHÓA HỌC </th>
            <th>Mã HỌC VIÊN</th>
            <th></th>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($listall_binhluan as $index => $value) {
            ?>
        <tr>
            <td><?php echo $value['id_binhluan'] ?></td>
            <td>
                <?php echo $value['ten_bl'] ?>
            </td>
            <td>
                <?php
                    echo listone_khoahoc($value['id_khoa_hoc'])[0]['ten_khoa_hoc']
                ?>
            </td>
            <td>
                <?php
                    echo listone_hocvien($value['id_hoc_vien'])[0]['ten_hv'];
                ?>

            </td>
            <td class="">
                <input type="submit" class="btn btn-primary start-50" onclick="confirm('Bạn có muốn xóa bình luận \( <?php echo $value['ten_bl']?> \) hay không!') == true ? location.href='index.php?act=xoa_binhluan&id=<?php echo $value['id_binhluan']?>' : ''" value="Xóa"><br><br>
            </td>

        </tr>
        <?php } ?>
        </tbody>
    </table>

</div>
<?php
     } else{
    echo "<script>alert('Đăng Nhập admin có thể sử dụng được trang này!');</script>";
    echo "<script>window.location.href='index.php?act=dang_nhap';</script>";
}
    ?>

