<?php 
         if(is_array($sp)){
            extract($sp);
         }
         $upimg = "../uploads/".$img;
         if(is_file($upimg)){
             $upanh = "<img src='".$upimg."'height ='50px'>";
         }
?>
<div class="row headermin">
            <h2>QUẢN LÝ SẢN PHẨM</h2>
        </div>
        <div class="row formtl">
        <div class="row mb1">
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <select name="iddm">
                        <option value="0" selected >-----Chọn danh mục-----</option>
                        <?php 
                        foreach($listdm as $danhmuc){
                            extract($danhmuc);
                            if($iddm == $id) $s="selected"; else $s="";
                           echo' <option value="'.$id.'"'.$s.'>'.$name.'</option>';
                        }
                            ?>
                    </select>
                </div>
                <div class="row mb1">
                    Tên Loại <br>
                    <input type="text" name="namesp" value="<?=$namesp?>">
                </div>
                <div class="row mb1">
                    Price <br>
                    <input type="text" name="price"value="<?= $price?>">
                </div>
                <div class="row mb1">
                    Hình ảnh <br>
                    <?=$upanh?>
                    <input type="file" name="img">
                </div>
                <div class="row mb1">
                    Mô tả <br>
                    <textarea name="mota"cols="30" rows="10"><?=$mota?></textarea>
                </div>
                <div class="row mb">
                    <?php 
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $id = $_GET['id'];
                        echo'<input type="hidden" name="idsp" value="'.$id.'">';
                    }
                    ?>
                    <input type="submit" name ="capnhat" value="Cập nhật">
                    <input type="reset" value="Nhập lại">
                   <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
                </div>
            </form>
        </div>
    </div>