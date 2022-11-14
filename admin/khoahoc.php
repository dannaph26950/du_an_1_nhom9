<?php
require "connect.php";
$query="SELECT * FROM khoa_hoc";
$result=$conn->query($query)->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<form action="" class="container mx-auto" method="post">
       

        <table border="1" class="w-full mt-6 text-center">
           
        
           <tr class="bg-green-300 text-2xl" >
               
               <th class="border border-blue-200 ">Mã khóa học</th>
               <th class="border border-blue-200 p-3">Tên Khóa học</th>
               <th class="border border-blue-200 p-3">Giá</th>
               <th class="border border-blue-200 p-3 ">Thời gian học </th>
               <th class="border border-blue-200 p-3">Mô tả</th>
               <th class="border border-blue-200 p-3 ">Chức năng</th>
           </tr>
          <?php foreach($result as $key =>$value){ ?>
           <tr class="  " >
               
               <th class="border border-blue-200 "><?php echo  $value["id_khoa_hoc"] ?></th>
               <th class="border border-blue-200 p-3"><?php echo $value["ten_khoa_hoc"] ?></th>
               <th class="border border-blue-200 p-3"><?php echo $value["gia"] ?></th>
               <th class="border border-blue-200 p-3 "><?php echo $value["thoi_gian_hoc"] ?></th>
               <th class="border border-blue-200 p-3"><?php echo $value["mo_ta"] ?></th>

               <th class=" border border-blue-200 flex flex-col p-3" >
                <a href="edit.php?id=<?php echo $value['id'] ?> "> <button  class="border  rounded-md bg-slate-100 hover:bg-blue-200 mb-3"
                 name="btn-sua" > Sửa </button></a>
                 <a href="javascript:confirmDeletee('xoa.php?id=<?php echo $value["id_khoa_hoc"]; ?>')">XÓA</a>
                    <button class="border  rounded-md bg-slate-100 hover:bg-blue-200" name="btn-sua" >Chi tiết </button>
                </th>
           </tr>
           <?php }?>
           
          
      </table>
        </form>

</body>
<script>
    function confirmDeletee(deleteUrl){
        if(confirm("Bạn chắc chắn muốn xóa mục này? ")){
            document.location=deleteUrl;
        }
    }
</script>
</html>