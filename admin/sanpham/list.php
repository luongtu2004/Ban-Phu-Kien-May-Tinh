<div class="row headermin">
            <h2>DANH SÁCH SẢN PHẨM</h2>
        </div>
        <form action="index.php?act=listsp" method="post">
                        <input type="text" name="kyw" placeholder="nhập tên sản phẩm">
                        <select name="iddm">
                        <option value="0" selected >-----Chọn danh mục-----</option>
                        <?php foreach($listdm as $danhmuc):?>
                            <?php extract($danhmuc)?>
                            <option value="<?=$id?>"><?= $name?></option>
                       <?php endforeach ?>
                    </select>
                    <input type="submit" name="listok" value="Tìm kiếm">
                    </form>
        <div class="row formtl">
                <div class="row mb1 formdslh">
                   <table>
                    <tr>
                        <th></th>
                        <th>MÃ LOẠI</th>
                        <th>TÊN LOẠI</th>
                        <th>PRICE</th>
                        <th>HÌNH ẢNH</th>
                        <th>VIEW</th>
                        <th colspan="2"></th>
                    </tr>
                    
                    <?php 
                        foreach ($listsp as $sanpham) {
                            extract($sanpham);
                            $suasp = "index.php?act=suasp&id=".$id;
                            $xoasp = "index.php?act=xoasp&id=".$id;
                            $upimg = "../uploads/".$img;
                            if(is_file($upimg)){
                                $upanh = "<img src='".$upimg."'height ='50px'>";
                            }
                            echo 
                            '<tr>
                            <td><input type="checkbox"></td>
                            <td>'.$id.'</td>
                            <td>'.$namesp.'</td>
                            <td>'.$price.'</td>
                            <td>'.$upanh.'</td>
                            <td>'.$view.'</td>
                            <td> <a href="'.$suasp.'"><input type="button" value="Sửa"></a>
                                 <a href="'.$xoasp.'"><input type="button" value="Xóa" onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')"></a>
                            </td>
                        </tr>';
                        }
                    ?>
                   </table>
                </div>
                <div class="row mb">
                    <input type="button" value="Chọn tất cả">
                    <input type="button" value="Bỏ chọn tất cả">
                    <input type="button" value="Xóa các mục đã chọn">
                   <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
                </div>
        </div>