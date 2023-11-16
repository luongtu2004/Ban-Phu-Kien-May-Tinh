<?php

function loadall_thongke()
{
    $sql = "SELECT danhmuc.id as madm, danhmuc.name as tendm, COUNT(sanpham.id) as countsp, MIN(sanpham.price) as minprice, MAX(sanpham.price) as maxprice, AVG(sanpham.price) as avgprice ";
    $sql .= "FROM sanpham LEFT JOIN danhmuc ON danhmuc.id=sanpham.iddm ";
    $sql .= "GROUP BY danhmuc.id ORDER BY danhmuc.id DESC";
    $listthongke = pdo_query($sql);
    return $listthongke;
}
function viewcart($del){
    global $img_path;
    $tong=0;
    $i=0;
    if($del==1){
        $xoasp_th='<th>Thao tác</th>';
        $xoasp_td2='<td></td>';
    }else{
        $xoasp_th='';
        $xoasp_td2='';
    }
    echo '<tr>
        <th>Hình</th>
        <th>Sản Phẩm</th>
        <th>Đơn Giá</th>
        <th>Số Lượng</th>
        <th>Thành Tiền</th>
        '.$xoasp_th.'
    </tr>';
    foreach ($_SESSION['mycart'] as $cart) {
        $hinh=$img_path.$cart[2];
        $ttien=$cart[3]*$cart[4];
        $tong+=$ttien;
        if($del==1){
            $xoasp_td='<td><a href="index.php?act=delcart&idcart='.$i.'"><input type="button" value="Xóa"></a></td>';
        }else{
            $xoasp_td='';
        }
        echo '<tr>
            <td><img src="'.$hinh.'" alt="" height="80px"></td>
            <td>'.$cart[1].'</td>
            <td>'.$cart[3].'</td>
            <td>'.$cart[4].'</td>
            <td>'.$ttien.'</td>
            '.$xoasp_td.'
        </tr>';
        $i+=1;
    }
    echo'<tr>
            <td colspan="4">Tổng đơn hàng</td>
            <td>'.$tong.'</td>
            '.$xoasp_td2.'
        </tr> ';
}
function bill_chi_tiet($listbill){
    global $img_path;
    $tong=0;
    $i=0;
    echo '<tr>
        <th>Hình</th>
        <th>Sản Phẩm</th>
        <th>Đơn Giá</th>
        <th>Số Lượng</th>
        <th>Thành Tiền</th>
    </tr>';
    foreach ($listbill as $cart) {
        $hinh=$img_path.$cart['image'];
        $tong+=$cart['thanhtien'];
        echo '<tr>
            <td><img src="'.$hinh.'" alt="" height="80px"></td>
            <td>'.$cart['name'].'</td>
            <td>'.$cart['price'].'</td>
            <td>'.$cart['soluong'].'</td>
            <td>'.$cart['thanhtien'].'</td>
        </tr>';
        $i+=1;
    }
    echo'<tr>
            <td colspan="4">Tổng đơn hàng</td>
            <td>'.$tong.'</td>
        </tr> ';
}
function tongdonhang(){
    $tong=0;
    
    foreach ($_SESSION['mycart'] as $cart) {
        $ttien=$cart[3]*$cart[4];
        $tong+=$ttien;
    }
    return $tong;
}

function insert_bill($user_name,$email,$phone,$pttt,$total_bill){
    $sql="insert into bill(user_name,email,phone,pttt,total_bill) values('$user_name','$email','$phone','$pttt','$total_bill')";
    return pdo_execute_return_lastInsertID($sql);
}

function insert_cart($idpro,$image,$name,$price,$soluong,$thanhtien,$id_bill){
    $sql="insert into cart(idpro,image,name,price,soluong,thanhtien,id_bill) values('$idpro','$image','$name','$price','$soluong','$thanhtien','$id_bill')";
    pdo_execute($sql);
}

function loadone_bill($id){
    $sql="select * from bill where id=".$id;
    $bill=pdo_query_one($sql);
    return $bill;
}
function loadall_cart($id_bill){
    $sql="select * from cart where id_bill=".$id_bill;
    $bill=pdo_query($sql);
    return $bill;
}

?>