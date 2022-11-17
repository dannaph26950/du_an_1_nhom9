
<center><h1 style="margin-top: 20px;">Thêm mới Khóa học</h1></center>


<form method="post" action="index.php?act=add_khoahoc"  enctype="multipart/form-data">
    <div style="margin: 0px 300px;">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">TÊN KHÓA HỌC</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ten_khoa_hoc">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">LOẠI KHÓA HỌC (INT)</label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_danh_muc">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ẢNH KHÓA HỌC</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="anh">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">MÔ TẢ</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="mo_ta"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">GIÁ TIỀN</label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="gia">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">THỜI GIAN HỌC</label>
            <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="thoi_gian_hoc">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ID LỚP</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_lop">
        </div>
            <center>
                <div style="text-align: center">
                    <a href="index.php?act=add_khoahoc"><input type="submit" value="THÊM MỚI" name="add_khoahoc" class="btn btn-primary" style="width: 200px; margin: 0px 20px" ></a>
                    <a href="index.php?act=list_khoahoc" ><input class="btn btn-primary" type="button" value="DANH SÁCH" style="width: 200px;margin: 0px 20px" ></a>
                    <input type="reset" value="CẬP NHẬT LẠI" name=""  class="btn btn-primary" style="width: 200px" >
                </div>
            </center>

        <span style="color: red">
            <?php
            if (isset($thongbao) && ($thongbao != '')){
                echo $thongbao;
            }
            ?>
        </span>
    </div>
        <div style="margin-top: 100px; background-color: white"></div>

</form>