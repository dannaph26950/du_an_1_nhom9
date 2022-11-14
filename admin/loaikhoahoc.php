<?php
require "connect.php";
$query="SELECT * FROM loai_khoa_hoc";
$result=$conn->query ($query)->fetchAll ();
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
<div class="mx-auto container">
        <form action="" method="post" class="w-96 p-10">
            <span class="font-medium text-xl">Mã loại</span><br>
            <input type="text" class="border rounded-lg w-full py-2 my-4" placeholder="auto number">
            <span class="font-medium text-xl"> Tên loại</span><br>
            <input name="name" type="text" class="border rounded-lg w-full py-2 my-4" placeholder="Name ">
            <button name='add' type="submit" class=" p-2 font-medium rounded-lg border bg-orange-400 hover:text-white" name="btn-submit ">Thêm mới</button>
            <button class="p-2 font-medium rounded-lg border bg-orange-400 hover:text-white" name="btn-reset">Nhập lại</button>
            <a href="listloaihang.php" class="p-2 font-medium rounded-lg border bg-orange-400 hover:text-white" >Danh sách</a>
        </form>
      <form>
          <table border="1">
              <tr>
                  <td class="border border-blue-200 "> MÃ KHÓA HỌC</td>
                  <td class="border border-blue-200 "> TÊN KHÓA HỌC</td>
                    <td class="border border-blue-200 p-3 ">Chức năng
                    </td>

              </tr>

              <?php foreach ($result as $k=>$v){?>
              <tr>
                  <td class="border border-blue-200 "><?php echo $v["id_loai"];?></td>
                  <td class="border border-blue-200 "><?php echo $v["ten_loai"];?></td>
                    <td class=" border border-blue-200 flex flex-col p-3">
                        <a href="edit.php?id=<?php echo $value['id'] ?> "> <button  class="border  rounded-md bg-slate-100 hover:bg-blue-200 mb-3"
                                                                                    name="btn-sua" > Sửa </button></a>
                        <a  class="border  rounded-md bg-slate-100 hover:bg-blue-200 mb-3" href="javascript:confirmDeletee('xoa.php?id=<?php echo $value["id_khoa_hoc"]; ?>')">XÓA</a>
                        <button class="border  rounded-md bg-slate-100 hover:bg-blue-200" name="btn-sua" >Chi tiết </button>
                    </td>

              </tr>
              <?php }?>
          </table>
      </form>
    </div>
</body>
</html>