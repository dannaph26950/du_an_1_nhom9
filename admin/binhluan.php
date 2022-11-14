<?php
    require "connect.php";
$query="SELECT * FROM binh_luan";
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
<!-- header  -->
<header class="mx-auto container bg-red-200 rounded-lg">


    <div class="mx-auto container bg-green-200 rounded-lg">
        <h1 class=" p-6 text-2xl font-medium ">Danh sách bình luận</h1>
    </div>
    <!-- content -->
    <div class="mx-auto container">
        <table border="1" class="w-full mt-6 text-center">
            <tr class="bg-green-300 text-2xl">
                <th class="p-6">Mã bình luận</th>
                <th class="border border-blue-200">ID bình luận</th>
                <th class="border border-blue-200">Nội dung bình luận</th>
                <th class="border border-blue-200">ID khóa học</th>

                <th class="border border-blue-200">ID học viên</th>
                <th class="border border-blue-200">Ngày </th>

            </tr>

<?php foreach ($result as $key=>$value){?>
            <tr class="border border-blue-200 pb-2">
                <td class="p-2"><?php echo $value['id_binh_luan']?></td>
                <td class="border border-blue-200"><?php echo $value['noi_dung_bl']?></td>
                <td class="border border-blue-200"><?php echo $value['id_khoa_hoc']?></td>
                <td class="border border-blue-200"><?php echo $value['id_hoc_vien']?></td>

                <td class="border border-blue-200"><?php echo $value['trang_thai']?></td>
                <td class="border border-blue-200"><?php echo $value['ngay_bl']?></td>
                <td class="border border-blue-200">
                    <button type="" name="btn-editcoment" class="border rounded-md bg-slate-100 px-2">Sửa</button>
                    <button type="" name="btn-dele" class="border rounded-md bg-slate-100 px-2">Xóa</button>

                </td>
            </tr>

<?php } ?>


        </table>
    </div>
</header>
</body>

