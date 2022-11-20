
<center><h1 style="margin-top: 60px">DANH MỤC CỦA ADMIN</h1></center>
<?php
include "connect.php";
$query="SELECT * FROM lop";
$result=$conn->query($query)->fetchAll();
?>
<div class="container">
    <h3>QUẢN LÝ LỚP</h3>
           
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID lớp</th>
        <th>Tên lớp</th>
        <th>Mã giảng viên</th>
        <th>Số lượng học viên</th>
         
        
        <th>Thao tác</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach ($result as $key=>$value) {?>
      <tr>
        <td><?php echo $value['id_lop'] ?></td>
        <td><?php echo $value['ten_lop'] ?></td>
        <td><?php echo $value['ma_gv'] ?></td>
        <td><?php echo $value['so_luong_hv'] ?></td>
        
         
        <td class=""><button type="button" class="btn btn-primary start-50" >Thêm</button><br><br>
        <button type="button" class="btn btn-primary start-50" >Sửa</button><br><br>
        <button type="button" class="btn btn-primary start-50" >Xóa</button>
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