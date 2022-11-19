<!--                PHP-->
<?php

foreach ($list_danhmuc as $key => $value){

    ?>
<main>
    <center><h1 style="margin-top: 20px;">CẬP NHẬT Danh Mục</h1>
    </center>
    <center>
        <a href="index.php?act=list_danhmuc"><input type="submit" value="DANH SÁCH" name="" class="btn btn-primary" style="width: 200px" ></a>
    </center>
    <div class="import-dm">
        <form action="index.php?act=update_danhmuc" method="post">


            <div style="margin: 0px 300px ;">

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label" style="font-weight: bold">ID DANH MỤC: </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_danh_muc_disabled" value="<?php if (isset($value['id_danh_muc']) && ($value['id_danh_muc'] != '')) echo $value['id_danh_muc']?>" disabled>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label" style="font-weight: bold">TÊN DANH MỤC:</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ten_danh_muc" value="<?php if (isset($value['ten_danh_muc']) && ($value['ten_danh_muc'] != '')) echo $value['ten_danh_muc']?>">
                </div>

                <center>
                    <div style= "">
                        <input type="hidden" name="id_danh_muc" value="<?php if (isset($value['id_danh_muc']) && ($value['id_danh_muc'] != '')) echo $value['id_danh_muc']?>" >
                        <input type="submit" value="SỬA" name="edit_loaikhoahoc" class="btn btn-primary" style="width: 200px; margin: 0px 20px" onclick="location.href='index.php?act=list_danhmuc'"  >
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