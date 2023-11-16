<div class="row">

    <div class="row mb">
    <div class="boxtrai mr">
    <div class="row mb">
            <div class="boxtitle">CẢM ƠN</div>
            <div class="row boxcontent" style="text-align:center">
                <h2>Cảm ơn quá khách đã đặt hàng !</h2>
            </div>
    </div>
    <?php
        if(isset($bill)&&(is_array($bill))){
            extract($bill);
        }
    ?>
    <div class="row mb">
        <div class="boxtitle">THÔNG TIN ĐƠN HÀNG</div>
        <div class="row boxcontent" style="text-align: center;">
            <li>- Mã đơn hàng: DAM-<?=$bill['id'];?></li> 
            <li>- Tổng đơn hàng: <?=$bill['total_bill'];?></li>
            <li>- Phương thức thanh toán: <?=$bill['pttt'];?></li>
        </div>
    </div>
    <div class="row mb">
        <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div>
        <div class="row boxcontent billform">

            <table>

                <tr>
                    <td>Người đặt hàng</td>
                    <td><?=$bill['user_name'];?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?=$bill['email'];?></td>
                </tr>
                <tr>
                    <td>Điện thoại</td>
                    <td><?=$bill['phone'];?></td>
                </tr>
            </table>

        </div>
    </div>
    <div class="row mb">

        <div class="boxtitle">CHI TIẾT GIỎ HÀNG</div>
        <div class="row boxcontent cart">
            <table>
                <?php 
                    bill_chi_tiet($billct);
                ?>
            </table>
        </div>
    </div>
    </div>
</div>

</div>