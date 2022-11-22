
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
        <tr>
            <td>123</td>
            <td>quyển sách rất hay</td>
            <td><?php  ?>sách tiếng anh</td>
            <td><?php  ?> hoàng long duy</td>
            <td><?php  ?>đã học xong</td>
            <td class="">
                <input value="Sửa " type="button" class="btn btn-primary start-50" onclick="location.href='index.php?act=sua_binh_luan&id=<?php echo $value['id_binh_luan'] ?>'" ><br><br>
                <input type="submit" class="btn btn-primary start-50" onclick="confirm('Bạn có muốn xóa bình luận \( <?php echo $value['ten_bl']?> \) hay không!') == true ? location.href='index.php?act=delete_binhluan&id=<?php echo $value['id_binh_luan']?>' : ''" value="Xóa"><br><br>
            </td>

        </tr>
        </tbody>
    </table>

</div>

