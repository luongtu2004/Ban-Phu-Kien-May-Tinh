<div class="row headermin">
            <h2>THÊM MỚI SẢN PHẨM</h2>
        </div>
        <div class="row formtl">
            <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                <div class="row mb1"> 
                    Mã loại <br>
                    <input type="text" name="maloai" disabled placeholder="auto number">
                </div>
                <div class="row mb1">
                    Tên Loại <br>
                    <input type="text" name="namesp">
                </div>
                <div class="row mb1">
                    Price <br>
                    <input type="text" name="price">
                </div>
                <div class="row mb1">
                    Hình ảnh <br>
                    <input type="file" name="img">
                </div>
                <div class="row mb1">
                    Mô tả <br>
                    <textarea name="mota"cols="30" rows="10"></textarea>
                </div>
                <div class="row mb1">
                    Danh mục <br>
                    <select name="iddm">
                        <option value="">-----Chọn danh mục-----</option>
                        <?php foreach($listdm as $danhmuc):?>
                            <?php extract($danhmuc)?>
                            <option value="<?=$id?>"><?= $name ?></option>
                       <?php endforeach ?>
                    </select>
                </div>
                <div class="row mb">
                    <input type="submit" name ="themmoi" value="Thêm mới">
                    <input type="reset" value="Nhập lại">
                   <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
                </div>
                <?php if(isset($thongbao)&& ($thongbao !="")) echo $thongbao ?>
            </form>
        </div>
    </div>