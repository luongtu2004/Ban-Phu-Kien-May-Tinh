<div class="row headermin">
            <h2>THÊM MỚI DANH MỤC</h2>
        </div>
        <div class="row formtl">
            <form action="index.php?act=adddm" method="post">
                <div class="row mb1">
                    Mã loại <br>
                    <input type="text" name="maloai" disabled placeholder="auto number">
                </div>
                <div class="row mb1">
                    Tên Loại <br>
                    <input type="text" name="tenloai">
                </div>
                <div class="row mb">
                    <input type="submit" name ="themmoi" value="Thêm mới">
                    <input type="reset" value="Nhập lại">
                   <a href="index.php?act=listdm"><input type="button" value="Danh sách"></a>
                </div>
                <?php if(isset($thongbao)&& ($thongbao !="")) echo $thongbao ?>
            </form>
        </div>
    </div>