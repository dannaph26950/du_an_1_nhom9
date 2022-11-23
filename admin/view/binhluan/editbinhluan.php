<!--                PHP-->
<?php

foreach ($listone_binhluan as $key => $value){

    ?>
    <main>
        <center><h1 style="margin-top: 20px;">CẬP NHẬT BÌNH LUẬN</h1>
        </center>
        <center>
            <a href="index.php?act=list_binhluan"><input type="submit" value="DANH SÁCH" name="" class="btn btn-primary" style="width: 200px" ></a>
        </center>
        <div class="import-dm">
            <form action="index.php?act=update_binhluan" method="post">


                <div style="margin: 0px 300px ;">

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" style="font-weight: bold">MÃ BÌNH LUẬN: </label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_binh_luan_disabled" value="<?php if (isset($value['id_binh_luan']) && ($value['id_binh_luan'] != '')) echo $value['id_binh_luan']?>" disabled>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" style="font-weight: bold">TÊN BÌNH LUẬN:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ten_bl" value="<?php if (isset($value['ten_bl']) && ($value['ten_bl'] != '')) echo $value['ten_bl']?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" style="font-weight: bold">MÃ KHÓA HỌC:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_khoa_hoc" value="<?php if (isset($value['id_khoa_hoc']) && ($value['id_khoa_hoc'] != '')) echo $value['id_khoa_hoc']?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" style="font-weight: bold">MÃ HỌC VIÊN:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_hoc_vien" value="<?php if (isset($value['id_hoc_vien']) && ($value['id_hoc_vien'] != '')) echo $value['id_hoc_vien']?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" style="font-weight: bold">TRẠNG THÁI:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="trang_thai" value="<?php if (isset($value['trang_thai']) && ($value['trang_thai'] != '')) echo $value['trang_thai']?>">
                    </div>

                    <center>
                        <div style= "">
                            <input type="hidden" name="id" value="<?php if (isset($value['id_binh_luan']) && ($value['id_binh_luan'] != '')) echo $value['id_binh_luan']?>" >
                            <input type="submit" value="SỬA" name="update_binhluan" class="btn btn-primary" style="width: 200px; margin: 0px 20px" onclick="location.href='index.php?act=list_binhluan'"  >
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



            </form>

            <div style="margin-top: 200px; background-color: white"></div>
        </div>
    </main>
    <!--                    PHP-->
<?php } ?>
