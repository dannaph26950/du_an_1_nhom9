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
        <table class="w-1/2 leading-7 ">
            <tr class="w-full">
                <td class="w-1/4">TÊN KHÓA HỌC</td>
                <td class="w-3/4"><input type="text" class="border border-soild w-1/2" name="name" ></td>
            </tr>
            <tr class="w-full">
                <td class="w-1/4">LOẠI KHÓA HỌC</td>
                <td class="w-3/4"><input type="number" class="border border-soild w-1/2" name="quantily"></td>
            </tr >
            <tr class="w-full">
                <td class="w-1/4">MÔ TẢ</td>
                <td class="w-3/4"><input type="text" class="border border-soild w-1/2" name="detail"></td>
            </tr>
            <tr class="w-full">
              <td    class="w-1/4">GIÁ</td>
                <td class="w-3/4"><input type="number" class="border border-soild w-1/2" name="price" ></td>
            </tr>
            <tr class="w-full">
                <td class="w-1/4">THỜI GIAN HỌC</td>
                <td class="w-3/4"><input type="date" class="border border-soild w-1/2" name="category_id" ></td>
            </tr class="w-1/2">
            <tr class="w-full">
                <td class="w-1/4">SALE</td>
                <td class="w-3/4"><input type="number" class="border border-soild w-1/2" name="sale_id" ></td>
            </tr>
   

        </table>
        <button type="submit" name="add" class="p-4 border rounded-lg bg-orange-400 hover:text-white font-medium mt-8">Thêm sản phẩm</button>

   
        </form>

</body>
</html>