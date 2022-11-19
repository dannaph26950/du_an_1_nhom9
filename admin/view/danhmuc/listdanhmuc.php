<main style="margin-bottom: 200px">
    <div class="container">
<!--        tôi lấy ở cái file wishlist.html-->
        <div class="tinv-wishlist woocommerce tinv-wishlist-clear">
            <div class="tinv-header">
                <center><h1 style="margin: 60px 0px">DANH SÁCH DANH MỤC</h1></center>
            </div>
            <div style="text-align: center; margin: 60px 0px">
                <a href="index.php?act=add_danhmuc"><input type="submit" value="THÊM MỚI" name="add_khoahoc" class="btn btn-primary" style="width: 200px" ></a>
            </div>
            <form action="index.php?act=list_danhmuc" method="post" autocomplete="off">
                <table class="tinvwl-table-manage-list">
                    <thead>
                    <tr>
                        <th class=""><input type="checkbox" class="global-cb" title="Select all for bulk action"></th>
                        <th class="">MÃ Danh Mục</th>
                        <th class="">Tên Danh Mục</th>
                        <th class="">&nbsp;</th>
                    </tr>
                    </thead>
<!--                    Chèn php-->
                    <?php foreach($listall_danhmuc as $key => $value){?>
                    <tbody>
                    <tr class="wishlist_item">
                        <td class=""><input type="checkbox" name="wishlist_pr[]" value="58" title="Select for bulk action"></td>
                        <td class="" ><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol"></span> <?php echo $value['id_danh_muc'] ?> </bdi></span></td>
                        <td class=""> <?php echo $value['ten_danh_muc'] ?> </td>

                        <td class="">
                        <input value="Sửa " type="button" class="btn btn-primary start-50" onclick="location.href='index.php?act=edit_danhmuc&id=<?php echo $value['id_danh_muc'] ?>'" ><br><br>

                            <input value="XÓA" type="button" class="btn btn-primary start-50" onclick="confirm('Bạn có muốn xóa danh mục \( <?php echo $value['ten_danh_muc']?> \) hay không!') == true ? location.href='index.php?act=delete_danhmuc&id=<?php echo $value['id_danh_muc']?>' : '' "><br><br>
<!--                            Sửa sàn kiểu input thì nó nhận dữ liệu-->
                        </td>
                    </tr>
                    </tbody>
                    <?php } ?>
                </table>
            </form>

        </div>
    </div>
</main>