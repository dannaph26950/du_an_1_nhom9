
<?php
require "connect.php";
$sql="SELECT * FROM hoc_vien";
$result=$conn->query ($sql)->fetchAll ();

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




<form action="" method="POST" class="w-1/2 container mx-auto">
    <p>them moi</p>
    <label class="">Name</label>
    <input type="text" class="w-full border" name="name">
    <label class="">Email</label>
    <input type="text" class="w-full border" name="email">
    <label class="">Password</label>
    <input type="password" class="w-full border" name="password">
    <label class="">Addres</label>
    <input type="text" class="w-full border" name="addres">
    <label class="">Phone number</label>
    <input type="text" class="w-full border" name="phone">
    <label class="">Vai trò</label>

    <br>
    <button name="add" type="submit" class="p-2 px-4 border rounded-lg bg-orange-400 hover:text-white font-medium mt-8">Thêm Tài khoản</button>

</form>
<!-- tên chức năng -->
<div class="mx-auto container bg-green-200 rounded-lg">
    <h1 class=" p-6 text-2xl font-medium ">Danh sách học viên</h1>
</div>
<!-- content -->
<div class="mx-auto container">
    <table border="1" class="mt-6 w-full text-center">
        <tr class=" bg-green-300 border border-blue-200 text-2xl">
            <th class="p-6 border border-blue-200">Mã học viên</th>
            <th class="border border-blue-200">Tên học viên</th>
            <th class="border border-blue-200">Email</th>
            <th class="border border-blue-200">SDT</th>
            <th class="border border-blue-200">Địa chỉ</th>
            <!-- <th class="border border-blue-200">Tuổi</th> -->
            <th class="border border-blue-200">Chức năng</th>
        </tr>
        <?php
            foreach($result as $key => $value){
                ?>
                <tr class="border border-blue-200">
                    <td class="p-3 border border-blue-200"><?php echo $value['id_hoc_vien']?></td>
                    <td class="border border-blue-200"><?php echo $value['ten_hv'] ?></td>
                    <td class="border border-blue-200"><?php echo $value['email'] ?></td>
                    <td class="border border-blue-200"><?php echo $value['sdt'] ?></td>
                    <td class="border border-blue-200"><?php echo $value['dia_chi'] ?></td>

                    <td class="border border-blue-200">
                        <a href="edituser.php?id=<?= $value['id']?>">   <button name="btn-detal"  class="border rounded-md bg-slate-100 px-2">Sửa</button></a>
                        <a href="user.php?id=<?php echo $value['id'] ?>"><button name="btn-delete" class="border rounded-md bg-slate-100 px-2">Xóa</button></a>
                    </td>
                </tr>
            <?php } ?>
    </table>

</div>
</body>
</html>