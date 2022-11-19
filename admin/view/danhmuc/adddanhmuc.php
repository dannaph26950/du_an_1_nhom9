<main>
    <center><h1 style="margin-top: 20px;">Thêm Mới Danh Mục</h1>
    </center>
    <center>
        <a href="index.php?act=list_danhmuc"><input type="submit" value="DANH SÁCH" name="" class="btn btn-primary" style="width: 200px" ></a>
    </center>
    <div class="import-dm">
        <form action="index.php?act=add_danhmuc" method="post">

            <div style="margin: 0px 300px ;">

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label" style="font-weight: bold">ID DANH MỤC: </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_danh_muc" placeholder="auto number">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label" style="font-weight: bold">TÊN DANH MỤC:</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ten_danh_muc">
                </div>
                <center>
                    <div style= "">

                        <a href="index.php?act=add_danhmuc"></a><input type="submit" value="THÊM MỚI" name="add_loaikhoahoc" class="btn btn-primary" style="width: 200px; margin: 0px 20px"  >
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