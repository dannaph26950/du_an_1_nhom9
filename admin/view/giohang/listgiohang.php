<?php
if(isset($_SESSION['taikhoan'])){
    ?>
<center><h1 style="margin: 60px 0px">DANH SÁCH ĐƠN HÀNG</h1></center>
<div style="text-align: center; margin: 60px 0px">
    <a href="index.php?act=list_giohang"></a>

</div>

<div class="container">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Mã Đơn Hàng</th>
            <th>Mã Học Viên</th>
            <th>Mã Lớp</th>
            <th>Giá Tiền</th>
            <th>Ngày Đăng Kí</th>
            <th>Tình Trạng</th>

        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($listall_giohang as $index => $value){

        ?>
        <tr>
            <td><?php echo $value ['id_dang_ky'] ?></td>
            <td><?php echo $value ['id_hoc_vien'] ?></td>
            <td><?php echo $value ['id_lop'] ?></td>
            <td><?php echo $value ['gia_tien'] ?></td>
            <td><?php echo $value ['ngay_dk'] ?></td>
            <td><?php echo $value ['tinh_trang'] ?></td>

<!--            DẤU-->
            <td class="" hidden>
                <input value="Sửa " type="button" class="btn btn-primary start-50" onclick="location.href='index.php?act=sua_binh_luan&id=<?php echo $value['id_binh_luan'] ?>//'" >
                <input type="submit" class="btn btn-primary start-50" onclick="confirm('Bạn có muốn xóa bình luận \( <?php echo $value['ten_bl']?>// \) hay không!') == true ? location.href='index.php?act=delete_binhluan&id=<?php echo $value['id_binh_luan']?>//' : ''" value="Xóa"><br><br>
            </td>
<!--DẤU-->
        </tr>
        <?php
        }
        ?>
        </tbody>
    </table>

</div>
<?php
     } else{
    echo "<script>alert('Đăng Nhập admin có thể sử dụng được trang này!');</script>";
    echo "<script>window.location.href='index.php?act=dang_nhap';</script>";
}
    ?>

