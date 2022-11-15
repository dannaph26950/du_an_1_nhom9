<center><h1 style="margin-top: 20px;">Thêm mới Khóa học</h1></center>
<form method="post" action="index.php?act=add_khoahoc" style="margin: 0px 300px;">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Tên Khóa Học</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ten_khoa_hoc">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Loại Khóa Học(int)</label>
        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_danh_muc">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Mô Tả</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="mo_ta"></textarea>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Giá Tiền</label>
        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="gia">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Thời Gian Học</label>
        <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="thoi_gian_hoc">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">ID lớp</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_lop">
    </div>
    
<!--    <div class="mb-3">-->
<!--        <label for="exampleInputEmail1" class="form-label">Sale (%)</label>-->
<!--        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">-->
<!--    </div>-->

        <div style="display: grid;grid-template-columns: 1fr 1fr ">
            <input type="submit" value="THEM MOI" name="add_khoahoc" class="btn btn-primary" style="width: 200px" >
            <a href="index.php?act=list_khoa_hoc" ><input class="btn btn-primary" type="button" value="Danh sách" style="width: 200px" ></a>
        </div>
        <div style="margin-top: 100px; background-color: white"></div>


    <?php
    if (isset($thongbao) && ($thongbao != '')){
        echo $thongbao;
    }
    ?>
</form>