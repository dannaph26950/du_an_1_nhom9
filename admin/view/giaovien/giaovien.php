
<center><h1 style="margin-top: 60px">DANH MỤC CỦA ADMIN</h1></center>
<?php
include "connect.php";
$query="SELECT * FROM giang_vien";
$result=$conn->query($query)->fetchAll();
?>
<div class="container">
    <h3>QUẢN LÝ GIẢNG VIÊN</h3>
           
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID giảng viên</th>
        <th>Tên giảng viên</th>
        <th>Ảnh</th>
        <th>Thông tin</th>
        <th>Trạng thái</th>
        
        <th>Thao tác</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach ($result as $key=>$value) {?>
      <tr>
        <td><?php echo $value['magv'] ?></td>
        <td><?php echo $value['ten_gv'] ?></td>
        <td><?php echo $value['hinh_gv'] ?></td>
        <td><?php echo $value['thong_tin_gv'] ?></td>
        <td><?php echo $value['trang_thai'] ?></td>
         
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