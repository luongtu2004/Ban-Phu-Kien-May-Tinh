<style>
.cart-bill {
    width: 100%;
}

.cart3 {
    width: 48%;
    box-sizing: border-box;
}

.cart3 .title-cart {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 15px;
}

.cart3 .cart-form {
    display: flex;
    flex-direction: column;
}

.cart3 .cart-form table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.cart3 .cart-form table input[type="text"] {
    width: 100%;
    padding: 10px;
    box-sizing: border-box;
    margin-bottom: 10px;
}

.cart3 .cart-form table input[type="radio"] {
    margin-right: 10px;
}

</style>
<div class="cart">
    <div class="cart2">
        <div class="cart3">

            <div class="title-cart">Thông tin giỏ hàng</div>
            <div class="row boxcontent cart">
                <table>
                    <?php viewcart(0); ?>
                </table>
            </div>
        </div>
        <form action="index.php?act=billcomfirm" method="post">
            <div class="cart-bill">
                <div class="cart3">
                    <div class="title-cart">Thông tin đặt hàng</div>
                    <div class="cart-form">

                        <table>

                            <?php
                            if (isset($_SESSION['users'])) {
                                $name = $_SESSION['users']['username'];
                                $address = $_SESSION['users']['address'];
                                $email = $_SESSION['users']['email'];
                                $tel = $_SESSION['users']['phone'];
                            } else {
                                $name = "";
                                $address = "";
                                $email = "";
                                $tel = "";
                            }
                            ?>

                            <tr>
                                <td>Người đặt hàng</td>
                                <td><input type="text" name="name" value="<?= $name ?>"></td>
                            </tr>
                            <tr>
                                <td>Địa chỉ</td>
                                <td><input type="text" name="address" value="<?= $address ?>"></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type="text" name="email" value="<?= $email ?>"></td>
                            </tr>
                            <tr>
                                <td>Điện thoại</td>
                                <td><input type="text" name="tel" value="<?= $tel ?>"></td>
                            </tr>



                        </table>
                    </div>
                </div>
                <div class="cart3">
                    <div class="cart-form">
                        <table>

                            <tr>
                                <td><input type="radio" name="pttt" checked value="1">Trả tiền khi nhận hàng</td>
                                <td><input type="radio" name="pttt" value="2">Chuyển khoản ngân hàng</td>
                                <td><input type="radio" name="pttt" value="3">Thanh toán online</td>
                            </tr>
                        </table>


                    </div>
                </div>
            </div>

            <div class="box-cart">
                <input type="submit" value="Đồng ý đặt hàng" name="dongydathang">
            </div>

        </form>
    </div>

</div>