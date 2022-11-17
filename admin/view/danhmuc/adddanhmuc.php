<main>
    <center><h1 style="margin-top: 20px;">Thêm Mới Danh Mục</h1></center>
    
    <div class="import-dm">
        <form action="index.php?act=add_danhmuc" method="post">
            <div style="margin: 0px 300px ;">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label" style="font-weight: bold">ID DANH MỤC: </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_danh_muc">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label" style="font-weight: bold">TÊN DANH MỤC:</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ten_danh_muc">
                </div>

            </div>


        </form>
        <div style="display: grid;grid-template-columns: 1fr 1fr 1fr ">
            <a href="index.php?act=list_danhmuc"></a><input type="submit" value="THÊM MỚI" name="add_danhmuc" class="btn btn-primary" style="width: 200px" >
             <input type="reset" value="CẬP NHẬT LẠI" name=""  class="btn btn-primary" style="width: 200px" >
        </div>
        <span style="color: red">
                    <?php
                    if (isset($thongbao) && ($thongbao != '')){
                        echo $thongbao;
                    }
                    ?>
        </span>
        <div style="margin-top: 200px; background-color: white"></div>
    </div>
</main>