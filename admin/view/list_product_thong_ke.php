
<div class="title" style="margin: 20px 0px">
    <style>
        table tr th{
            padding: 20px;
            background-color: #0D5EF4;
            color: white;
        }
        table tr td {
            padding: 10px 0;
            border: 1px solid gray;
            background-color: white;
            font-weight: bold;
        }
        table tr td input[type=checkbox]{
            width: 20px;
            height: 20px;
        }
        table tr td input[type=button]{
            width: 70px;
            height: 30px;
            background-color: #B5D0E3;
            color: white;
            border: none;
        }

    </style>
    <div class="container-fluid  " >
        <h1 style="margin-left: 90px">Danh Sách Thống Kê Danh Mục</h1>

    </div>
    <div class="content container">
        <table class="container-fluid text-center" border="1">
            <tr >
                <th>Mã Danh Mục</th>
                <th>Tên danh Mục</th>
                <th>Số Lượng</th>
                <th>Giá Thấp Nhất</th>
                <th>Giá Cao Nhất</th>
                <th>Giá Trung Bình</th>
            </tr>
            <?php
//            var_dump($listthongke);
//            die();
            foreach ($listthongke as $thongke){
                extract($thongke);
                echo  '<tr>
                <td>'.$id_danh_muc.'</td>
                <td>'.$ten_danh_muc.'</td>
                <td>'.$countsp.'</td>
                <td>'.$mingia.'</td>
                <td>'.$maxgia.'</td>
                <td>'.$avggia.'</td>
            </tr>';
            }
            ?>
        </table>
        <form action="">
            <input
                class="btn btn-outline-primary mt-3" style="width: 150px"
                type="button"
                onclick="location.href='index.php?act=thongke'"
                value="Xem Biểu Đồ"
            />
        </form>
    </div>
</div>
<div style="margin-top: 300px"></div>