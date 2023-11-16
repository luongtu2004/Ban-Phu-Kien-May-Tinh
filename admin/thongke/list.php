<div class="row headermin">
            <h2>THỐNG KÊ SẢN PHẨM TRONG DANH MỤC</h2>
        </div>
        <div class="row formtl">
                <div class="row mb1 formdslh">
                   <table>
                    <tr>
                        <th>ID</th>
                        <th>TÊN LOẠI</th>
                        <th>SỐ LƯỢNG</th>
                        <th>GIÁ NHỎ NHẤT</th>
                        <th>GIÁ LỚN NHẤT</th>
                        <th>GIÁ TRUNG BÌNH</th>
                        <th></th>
                    </tr>
                    <?php 
                        foreach ($dsthongke as $thongke) {
                            extract($thongke);
                            $xoabl = "index.php?act=xoabl&id=".$id;
                            echo 
                            '<tr>
                            <td>'.$id.'</td>
                            <td>'.$name.'</td>
                            <td>'.$soluong.'</td>
                            <td>'.$giamin.'</td>
                            <td>'.$giamax.'</td>
                            <td>'. number_format($gia_avg,2).'</td>
                            <td> 
                                 <a href="'.$xoabl.'"><input type="button" value="Xóa" onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')"></a>
                            </td>
                        </tr>';
                        }
                    ?>
                   </table>
                </div>
                <div class="row mb">
                    <a href="?act=bieudo"><input type="button" value="Xem biểu đồ"></a>
                </div>
        </div>