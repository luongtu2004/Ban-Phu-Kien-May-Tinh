<div class="row headermin">
            <h2>DANH SÁCH BÌNH LUẬN</h2>
        </div>
        <div class="row formtl">
                <div class="row mb1 formdslh">
                   <table>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>CONTENT</th>
                        <th>ID_USER</th>
                        <th>ID_PRO</th>
                        <th>DATE</th>
                        <th></th>
                    </tr>
                    <?php 
                        foreach ($listbl as $binhluan) {
                            extract($binhluan);
                            $xoabl = "index.php?act=xoabl&id=".$id;
                            echo 
                            '<tr>
                            <td><input type="checkbox"></td>
                            <td>'.$id.'</td>
                            <td>'.$content.'</td>
                            <td>'.$iduser.'</td>
                            <td>'.$idpro.'</td>
                            <td>'.$date.'</td>
                            <td> 
                                 <a href="'.$xoabl.'"><input type="button" value="Xóa" onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')"></a>
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
                </div>
        </div>