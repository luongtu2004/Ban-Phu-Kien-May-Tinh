<?php 
         if(is_array($dm)){
            extract($dm);
         }
?>
<div class="row headermin">
            <h2> QUẢN LÝ DANH MỤC</h2>
        </div>
        <div class="row formtl">
            <form action="index.php?act=updatedm" method="post">
                <input type="hidden" name="id" value="<?= (isset($id))? "$id" : ''; ?>">
                <div class="row mb1">
                    Mã loại <br>
                    <input type="text" name="maloai" disabled placeholder="auto number">
                </div>
                <div class="row mb1">
                    Tên Loại <br>
                    <input type="text" name="tenloai" value="<?= (isset($name))? "$name" : ''; ?>">
                </div>
                <div class="row mb">
                    <input type="submit" name ="capnhat" value="Cập nhật">
                    <input type="reset" value="Nhập lại">
                   <a href="index.php?act=listdm"><input type="button" value="Danh sách"></a>
                </div>
                <?php if(isset($thongbao)&& ($thongbao !="")) echo $thongbao ?>
            </form>
        </div>
    </div>