    <div class="row mb">
        <div class="boxtrai mr">
            <?php
            if (isset($billdh) && (is_array($billdh))) {
                extract($billdh);
            }
            ?>
            <div class="row mb">
                <div class="boxtitle">Lich Sử Mua Hàng</div>
                <div class="row boxcontent cart">
                    <table>
                        <?php
                        bill_don_hang($billdh);
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>