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
        <!-- <table border="1" class=" border">
            <tr>
                <td class="px-10 border">Mã khóa học</td>
                <td class="px-10 border">Mã khóa học</td>
                <td class="px-10 border">Tên khóa học</td>
                <td class="px-10 border">Hình ảnh</td>
                <td class="px-10 border">Giá</td>
                <td class="px-10 border">Thời gian học</td>
                <td class="px-10 border">Mô tả</td>
                <td class="px-10 border">Sale</td>
               <td class="px-10 border">
               Thao tác
               </td>

            </tr>
            <tr>
                <td class="px-10 border">Mã khóa học</td>
                <td class="px-10 border">Mã khóa học</td>
                <td class="px-10 border">Tên khóa học</td>
                <td class="px-10 border">Hình ảnh</td>
                <td class="px-10 border">Giá</td>
                <td class="px-10 border">Thời gian học</td>
                <td class="px-10 border">Mô tả</td>
                <td class="px-10 border">Sale</td>
               <td class="justify-between align-center">
                <button>Thêm</button><br>
                <button>Sửa</button><br>
                <button>Xóa</button>
               </td>

            </tr>
        </table> -->

        <table border="1" class="w-full mt-6 text-center">
           
        
           <tr class="bg-green-300 text-2xl" >
               
               <th class="border border-blue-200 p-3">Mã sản phẩm</th>
               <th class="border border-blue-200 p-3">Tên sản phẩm</th>
               <th class="border border-blue-200 p-3">Images</th>
               <th class="border border-blue-200 p-3 w-1/6">Giá </th>
               <th class="border border-blue-200 p-3">Số lượng</th>
               <th class="border border-blue-200 p-3">Mô tả</th>
               <th class="border border-blue-200 p-3 w-1/6">Chức năng</th>
           </tr>
          
           <tr class="  " >
               
               <th class="border border-blue-200 p-3">Mã sản phẩm</th>
               <th class="border border-blue-200 p-3">Tên sản phẩm</th>
               <th class="border border-blue-200 p-3">Images</th>
               <th class="border border-blue-200 p-3 w-1/6">Giá </th>
               <th class="border border-blue-200 p-3">Số lượng</th>
               <th class="border border-blue-200 p-3">Mô tả</th>
               <th class=" border border-blue-200 flex flex-col p-3" >
                <a href="edit.php?id=<?php echo $value['id'] ?> "> <button  class="border  rounded-md bg-slate-100 hover:bg-blue-200 mb-3"
                 name="btn-sua" > Sửa </button></a>
                 <button class="border  rounded-md bg-slate-100 hover:bg-blue-200 mb-3" onclick="del('delete.php?id=<?php echo $value['id']?>')" >xoa</button>
                    <button class="border  rounded-md bg-slate-100 hover:bg-blue-200" name="btn-sua" >Chi tiết </button>
                </th>
           </tr>
           
          
      </table>
        </form>

</body>
</html>