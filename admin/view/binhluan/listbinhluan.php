
<center><h1 style="margin: 60px 0px">DANH SÁCH BÌNH LUẬN</h1></center>
<div style="text-align: center; margin: 60px 0px">
    <a href="index.php?act=list_binhluan"></a>

</div>

<div class="container">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>MÃ BÌNH LUẬN</th>
            <th>NỘI DUNG BÌNH LUẬN</th>
            <th>TÊN KHÓA HỌC </th>
            <th>TÊN HỌC VIÊN</th>
            <th>TRẠNG THÁI</th>
            <th></th>

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
                <input value="Sửa " type="button" class="btn btn-primary start-50" onclick="location.href='index.php?act=edit_binhluan&id=<?php  ?>'" ><br><br>
                <input type="submit" class="btn btn-primary start-50" onclick="confirm('Bạn có muốn xóa bình luận \( <?php echo $value['ten_bl']?> \) hay không!') == true ? location.href='index.php?act=delete_binhluan&id=<?php echo $value['id_binh_luan']?>' : ''" value="Xóa"><br><br>
            </td>

        </tr>
        </tbody>
    </table>

</div>

