<?php
if(isset($_SESSION['taikhoan'])){
    ?>
<center><h1 style="margin: 60px 0px">DANH SÁCH ĐƠN HÀNG</h1></center>
<div style="text-align: center; margin: 60px 0px">

    <form action="index.php?act=list_giohang" method="post">
        <div class="input-group" style="margin-left: 1150px">
            <div class="form-outline">
                <select id="form1" class="form-control" name="tt">
                    <option value="">Chọn Trạng Thái</option>
                    <option value="2">Thanh Toán Thành Công</option>
                    <option value="1">Đang Xử Lí</option>
                    <option value="0">Chưa Thanh Toán</option>
                </select>
            </div>
            <button type="submit" name="tinh_trang" class="btn btn-primary" style="height: 55px">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </form>

</div>
<div class="container">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Mã Đơn Hàng</th>
            <th>Tên Học Viên</th>
            <th>Tên Lớp</th>
            <th>Giá Tiền</th>
            <th>Ngày Đăng Kí</th>
            <th>Tình Trạng</th>
            <th></th>

        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($listall_giohang as $index => $value){

        ?>
        <tr>
            <td><?php echo $value ['id_dang_ky'] ?></td>
            <td><?php echo listone_hocvien($value['id_hoc_vien'])[0]['ten_hv'] ?></td>
            <td><?php echo loadone_lop($value ['id_lop'])[0]['ten_lop'] ?></td>
            <td><?php echo number_format($value ['gia_tien']) ?></td>
            <?php $originalDate = $value['ngay_dk'] ; $newDate = date(" H:i:s d-m-Y", strtotime($value['ngay_dk']));  ?>

            <td><?php echo $newDate ?></td>
            <td style="color: blue"><?php if($value ['tinh_trang'] == 0) echo "Chưa thanh toán"; elseif($value ['tinh_trang'] == 1) echo "Đang xử lí"; elseif($value ['tinh_trang'] == 2) echo "Thanh Toán thành công" ?></td>

<!--            DẤU-->
            <td class="">
                <input value="Cập Nhật" type="submit" class="btn btn-primary start-50" onclick="location.href='index.php?act=edit_giohang&id=<?php echo $value['id_dang_ky'] ?>'" >
            </td>
<!--DẤU-->
        </tr>
        <?php
        }
        ?>
        </tbody>
    </table>

</div>
<?php
     } else{
    echo "<script>alert('Đăng Nhập admin có thể sử dụng được trang này!');</script>";
    echo "<script>window.location.href='index.php?act=dang_nhap';</script>";
}
    ?>

