<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ Hàng</title>
    <link rel="stylesheet" href="">
</head>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 15px;
        text-align: left;
    }

    th {
        background-color: #4CAF50;
        color: #fff;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .delete-btn {
        background-color: #ff6347;
        color: #fff;
        border: none;
        padding: 8px 12px;
        cursor: pointer;
        border-radius: 4px;
    }

    .delete-btn:hover {
        background-color: #cc0000;
    }

    .total-row {
        font-weight: bold;
        background-color: #4CAF50;
        color: #fff;
    }
</style>

<body>
    <?php

    // Assuming you have functions like pdo_query, pdo_execute, pdo_query_one, and pdo_execute_return_lastInsertID

    function loadall_thongke()
    {
        $sql = "SELECT danhmuc.id as madm, danhmuc.name as tendm, COUNT(sanpham.id) as countsp, MIN(sanpham.price) as minprice, MAX(sanpham.price) as maxprice, AVG(sanpham.price) as avgprice ";
        $sql .= "FROM sanpham LEFT JOIN danhmuc ON danhmuc.id=sanpham.iddm ";
        $sql .= "GROUP BY danhmuc.id ORDER BY danhmuc.id DESC";
        $listthongke = pdo_query($sql);
        return $listthongke;
    }

    function viewcart($del)
    {
        global $img_path;
        $tong = 0;
        $i = 0;

        $xoasp_th = ($del == 1) ? '<th>Thao tác</th>' : '';
        $xoasp_td2 = ($del == 1) ? '<td></td>' : '';

        echo '<tr>
            <th>Hình</th>
            <th>Sản Phẩm</th>
            <th>Đơn Giá</th>
            <th>Số Lượng</th>
            <th>Thành Tiền</th>
            ' . $xoasp_th . '
        </tr>';

        foreach ($_SESSION['mycart'] as $cart) {
            $hinh = $img_path . $cart[2];
            $ttien = $cart[3] * $cart[4];
            $tong += $ttien;

            $xoasp_td = ($del == 1) ? '<td><a href="index.php?act=delcart&idcart=' . $i . '"><input type="button" value="Xóa"></a></td>' : '';

            echo '<tr>
                <td><img src="' . $hinh . '" alt="" height="80px"></td>
                <td>' . $cart[1] . '</td>
                <td>' . $cart[3] . '</td>
                <td>' . $cart[4] . '</td>
                <td>' . $ttien . '</td>
                ' . $xoasp_td . '
            </tr>';

            $i += 1;
        }

        echo '<tr>
            <td colspan="4">Tổng đơn hàng</td>
            <td>' . $tong . '</td>
            ' . $xoasp_td2 . '
        </tr>';
    }

    function bill_chi_tiet($listbill)
    {
        global $img_path;
        $tong = 0;
        $i = 0;

        echo '<tr>
            <th>Hình</th>
            <th>Sản Phẩm</th>
            <th>Đơn Giá</th>
            <th>Số Lượng</th>
            <th>Thành Tiền</th>
        </tr>';

        foreach ($listbill as $cart) {
            $hinh = $img_path . $cart['image'];
            $tong += $cart['thanhtien'];

            echo '<tr>
                <td><img src="' . $hinh . '" alt="" height="80px"></td>
                <td>' . $cart['name'] . '</td>
                <td>' . $cart['price'] . '</td>
                <td>' . $cart['soluong'] . '</td>
                <td>' . $cart['thanhtien'] . '</td>
            </tr>';

            $i += 1;
        }

        echo '<tr>
            <td colspan="4">Tổng đơn hàng</td>
            <td>' . $tong . '</td>
        </tr>';
    }

    function tongdonhang()
    {
        $tong = 0;

        foreach ($_SESSION['mycart'] as $cart) {
            $ttien = $cart[3] * $cart[4];
            $tong += $ttien;
        }

        return $tong;
    }

    function insert_bill($name,$email,$address,$tel,$pttt,$ngaydathang,$tongdonhang){
        $sql="insert into bill(bill_name,bill_email,bill_address,bill_tel,bill_pttt,ngaydathang,total) values('$name','$email','$address','$tel','$pttt','$ngaydathang','$tongdonhang')";
        return pdo_execute_return_lastInsertID($sql);
    }

    function insert_cart($idpro, $image, $name, $price, $soluong, $thanhtien, $id_bill)
    {
        $sql = "INSERT INTO cart(idpro, image, name, price, soluong, thanhtien, id_bill) VALUES ('$idpro', '$image', '$name', '$price', '$soluong', '$thanhtien', '$id_bill')";
        pdo_execute($sql);
    }

    function loadone_bill($id)
    {
        $sql = "SELECT * FROM bill WHERE id=" . $id;
        $bill = pdo_query_one($sql);
        return $bill;
    }

    function loadall_cart($id_bill)
    {
        $sql = "SELECT * FROM cart WHERE id_bill=" . $id_bill;
        $bill = pdo_query($sql);
        return $bill;
    }

    ?>

</body>

</html>