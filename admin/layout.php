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
   <div class="container mx-auto">

    <h1 class="text-4xl text-blue-700 bg-blue-100 p-10">QUẢN TRỊ WEBSITE BÁN KHÓA HỌC</h1>


    <nav>
        <ul class="flex ">
            <li class="mx-10">
                <a href="/du_an_1_nhom9/admin/index.php">Trang chủ</a>
            </li>
            <li class="mx-10">
                <a href="/du_an_1_nhom9/admin/index.php?loai-khoa-hoc">Loại khóa học</a>
            </li>
            <li class="mx-10">
                <a href="/du_an_1_nhom9/admin/index.php?khoa-hoc">Khóa học</a>
            </li>
            <li class="mx-10">
                <a href="/du_an_1_nhom9/admin/index.php?khach-hang">Khách hàng</a>
            </li>
            <li class="mx-10">
                <a href="/du_an_1_nhom9/admin/index.php?binh-luan">Bình luận</a>
            </li>
            <li class="mx-10">
                <a href="/du_an_1_nhom9/admin/index.php?thong-ke">Thống kê</a>
            </li>
        </ul>
    </nav>

    <main>
        <?php include_once $VIEW_NAME ?>
    </main>

    <footer>
        FOOTER
    </footer>
   </div>
</body>
</html>