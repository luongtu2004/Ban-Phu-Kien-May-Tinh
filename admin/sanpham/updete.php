<?php
if (is_array($sanpham)) {
    extract($sanpham);
}

$hinhpath = "../upload/" . $img;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height='80'>";
} else {
    $hinh = "Chưa có hình";
}
?>

<div class="row">
    <div class="row formtetel">
        <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=updetesp" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                <select name="iddm">
                    <option value="0" selected>Tất Cả</option>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        if ($iddm == $danhmuc['id']) $s = "selected";
                        else $s = "";
                        echo '<option value="' . $danhmuc['id'] . '"' . $s . '>"' . $danhmuc['name'] . '"</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="row mb10">
                <label for="">Tên Sản Phẩm</label><br>
                <input type="text" name="tensp" value="<?= $name ?>">
            </div>

            <div class="row mb10">
                <label for="">Giá</label><br>
                <input type="text" name="giasp" value="<?= $price ?>">
            </div>

            <div class="row mb10">
                <label for="">Hình Ảnh</label><br>
                <input type="file" name="hinhsp">
                <?= $hinh ?>
            </div>

            <div class="row mb10">
                <label for="">Mô Tả</label><br>
                <textarea name="motasp" cols="30" rows="10"><?= $mota ?></textarea>
            </div>

            <div class="row mb10">
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="submit" name="capnhat" value="CẬP NHẬT">
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