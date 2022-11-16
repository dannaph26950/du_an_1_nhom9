
<center><h1 style="margin: 60px 0px">DANH SÁCH KHÓA HỌC</h1></center>
<div style="text-align: center; margin: 60px 0px">
    <a href="index.php?act=add_khoahoc"><input type="submit" value="THEM MOI" name="add_khoahoc" class="btn btn-primary" style="width: 200px" ></a>

</div>
<?php
include "connect.php";
$query="SELECT * FROM khoa_hoc";
$result=$conn->query($query)->fetchAll();
?>
<div class="container">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID khóa học</th>
            <th>Tên khóa học</th>
            <th>Giá</th>
            <th>Thời gian học</th>
            <th>Mô tả</th>
            <th>ID loại khóa học</th>
            <th>ID lớp</th>
            <th>Thao tác</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($result as $key=>$value) {?>
            <tr>
                <td><?php echo $value['id_khoa_hoc'] ?></td>
                <td><?php echo $value['ten_khoa_hoc'] ?></td>
                <td><?php echo $value['gia'] ?></td>
                <td><?php echo $value['thoi_gian_hoc'] ?></td>
                <td><?php echo $value['mo_ta'] ?></td>
                <td><?php echo $value['id_danh_muc'] ?></td>
                <td><?php echo $value['id_lop'] ?></td>
                <td class=""><button type="button" class="btn btn-primary start-50" >Sửa</button><br><br>
                    <button type="button" class="btn btn-primary start-50"><a href="javascript:comfirmDeletez('delete.php?id=<?php echo $value["id_khoa_hoc"]; ?>')">XÓA</a></button><br><br>
                </td>

            </tr>
        <?php }?>
        </tbody>
    </table>

</div>

<script>
    function comfirmDeletez(deleteUrl){
        if(confirm("Bạn chắc chắn muốn xóa mục này?")){
            document.location=deleteUrl;
        }
    }
</script>