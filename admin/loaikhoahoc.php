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
      
    </div>
</body>
</html>