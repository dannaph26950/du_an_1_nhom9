<?php
    if(isset($_SESSION['taikhoan'])){
?>
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
        <h4 style="margin-left: 180px">Danh Sách Thống Kê Doanh Thu Theo Danh Mục</h4>

    </div>
    <div class="content container">
        <table class="container-fluid text-center" border="1">
            <tr >
                <th>Mã Danh Mục</th>
                <th>Tên danh Mục</th>
                <th>Giá tiền</th>
                <th>Số Lượng</th>
                <th>Giá Thấp Nhất</th>
                <th>Giá Cao Nhất</th>
                <th>Giá Trung Bình</th>
                <th>Ngày đăng ký</th>
            </tr>
            <?php
//            var_dump(load_allthongke()[0]['ngay']);
//            die();
            $timestamp = strtotime(load_allthongke()[0]['ngay']);

            $day = date('jS F Y', $timestamp);
//            var_dump($day);
//            $ngay = load_allthongke()[0]['ngay'];
//            $date = getdate(load_allthongke()[0]['ngay']);
//            echo $date['mon'];
            foreach ($listthongke as $thongke){
                extract($thongke);
                echo  '<tr>
                <td>'.$id_danh_muc.'</td>
                <td>'.$ten_danh_muc.'</td>
                <td>'.$gia_tien.'</td>
                <td>'.$countsp.'</td>
                <td>'.$mingia.'</td>
                <td>'.$maxgia.'</td>
                <td>'.$avggia.'</td>
                <td>'.$day.'</td>
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
<div style="margin-top: 500px"></div>
<?php }else{
        echo "<script>alert('Đăng Nhập admin có thể sử dụng được trang này!');</script>";
        echo "<script>window.location.href='index.php?act=dang_nhap';</script>";
    } ?>