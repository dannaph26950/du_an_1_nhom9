<main>
    <div class="header">
        <h3>THÊM MỚI DANH MỤC</h3>
    </div>
    <div class="import-dm">
        <form action="index.php?act=add_dm" method="post">
            <div class="maloai">
                <h5>Mã Danh Mục</h5>
                <input type="text" name="id_danh_muc" disabled>
            </div>
            <div class="tenloai">
                <h5>Tên Danh Mục</h5>
                <input type="text" name="ten_danh_muc" value="">
            </div>
            <input type="submit" value="THÊM MỚI" name="add_dm">
            <input type="reset" value="NHẬP LẠI">
            <a href="index.php?act=list_danhmuc"><input type="button" value="DANH SÁCH"></a><br>
            <?php
            if (isset($thongbao) && ($thongbao != '')){
                echo $thongbao;
            }
            ?>
        </form>
    </div>
</main>