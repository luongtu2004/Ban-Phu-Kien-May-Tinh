<div class="row headermin">
            <h2>DANH SÁCH DANH MỤC</h2>
        </div>
        <div class="row formtl">
                <div class="row mb1 formdslh">
                   <table>
                    <tr>
                        <th></th>
                        <th>MÃ LOẠI</th>
                        <th>TÊN LOẠI</th>
                        <th colspan="2"></th>
                    </tr>
                    <?php 
                        foreach ($listdm as $danhmuc) {
                            extract($danhmuc);
                            $suadm = "index.php?act=suadm&id=".$id;
                            $xoadm = "index.php?act=xoadm&id=".$id;
                            echo 
                            '<tr>
                            <td><input type="checkbox"></td>
                            <td>'.$id.'</td>
                            <td>'.$name.'</td>
                            <td> <a href="'.$suadm.'"><input type="button" value="Sửa" ></a>
                                 <a href="'.$xoadm.'"><input type="button" value="Xóa" onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')"></a>
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
                   <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
                </div>
        </div>