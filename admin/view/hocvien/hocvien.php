
<center><h1 style="margin-top: 60px">DANH MỤC CỦA ADMIN</h1></center>
<?php
include "connect.php";
$query="SELECT * FROM hoc_vien";
$result=$conn->query($query)->fetchAll();
?>
<div class="container">
    <h3>QUẢN LÝ HỌC VIÊN</h3>
           
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID học viên</th>
        <th>Tên học viên</th>
        <th>Email</th>
        <th> SDT</th>
         
        
        <th>Địa chỉ</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach ($result as $key=>$value) {?>
      <tr>
        <td><?php echo $value['id_hoc_vien'] ?></td>
        <td><?php echo $value['ten_hv'] ?></td>
        <td><?php echo $value['email'] ?></td>
        <td><?php echo $value['sdt'] ?></td>
        <td><?php echo $value['dia_chi'] ?></td>
         
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