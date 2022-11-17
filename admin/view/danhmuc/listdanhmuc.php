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
                        <th class="product-cb"><input type="checkbox" class="global-cb"
                                                      title="Select all for bulk action"></th>
                        <th class="product-remove"></th>

                        <th class="product-price">ID Danh Mục</th>
                        <th class="product-name">
                            <span class="tinvwl-full">Tên Danh Mục</span>
                            <span
                                class="tinvwl-mobile">Danh muc</span>
                        </th>


                        <th class="product-action">&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="wishlist_item">
                        <td class="product-cb"><input type="checkbox" name="wishlist_pr[]" value="58"
                                                      title="Select for bulk action"></td>
                        <td class="product-remove"><button type="submit" name="tinvwl-remove" value="58"
                                                           title="Remove"><i class="fal fa-times"></i></button></td>


                        <td class="product-price"><span class="woocommerce-Price-amount amount"><bdi><span
                                        class="woocommerce-Price-currencySymbol"></span>12</bdi></span></td>
                        <td class="product-name"><a href="shop-details.html">Khóa học Toiec trọn bộ</a></td>

                        <td class="product-action">
                            <button class="button as-btn" name="tinvwl-add-to-cart" value="58" title="Add to Cart">
                                <span
                                    class="tinvwl-txt">Sửa
                                </span>
                            </button>
                            <button class="button as-btn" name="tinvwl-add-to-cart" value="58" title="Add to Cart">
                                <span
                                        class="tinvwl-txt">Xóa
                                </span>
                            </button>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </form>

        </div>
    </div>
</main>