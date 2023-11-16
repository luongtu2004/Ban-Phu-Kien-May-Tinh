<div class="row">
    <div class="row formtetel">
        <h1>THÊM MỚI SẢN PHẨM</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                <label for="">Danh Mục</label><br>
                <select name="iddm">
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        echo '<option value="' . $danhmuc_id . '">' . $name_danhmuc . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="row mb10">
                <label for="">Tên Sản Phẩm</label><br>
                <input type="text" name="tensp">
            </div>

            <div class="row mb10">
                <label for="">Hình Ảnh</label><br>
                <input type="file" name="hinhsp">
            </div>

            <div class="row mb10">
                <label for="">Mô Tả</label><br>
                <textarea name="mota" cols="30" rows="10"></textarea>
            </div>

            <div class="row mb10">
                <label for="">Giá</label><br>
                <input type="text" name="giasp">
            </div>
            <div class="row mb10">
                <label for="">Thương hiệu</label><br>
                <select name="brand_id">
                    <?php
                    foreach ($listbrand as $brand) {
                        extract($brand);
                        echo '<option value="' . $brand_id . '">' . $brandname . '</option>';
                    }
                    ?>
                </select>
            </div>

            <div class="row mb10">
                <input type="submit" name="themmoi" value="THÊM MỚI">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != ""))
                echo $thongbao;
            ?>
        </form>
    </div>
</div>
</div>