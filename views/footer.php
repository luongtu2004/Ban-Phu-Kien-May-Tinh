  <footer>
    <div class="container-footer">
      <div class="footer-row">
        <div class="footer-col">
          <h3>Về chúng tôi</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sodales turpis et nunc fermentum sagittis. Sed in dolor sit amet enim luctus blandit.</p>
        </div>
        <div class="footer-col">
          <h3>Liên hệ</h3>
          <p>Địa chỉ: 123 ABC, XYZ, Quận 123, TP ABC</p>
          <p>Số điện thoại: 0123 456 789</p>
          <p>Email: info@example.com</p>
        </div>
        <div class="footer-col">
          <h3>Danh mục</h3>
          <ul>
            <?php
              foreach ($dsdm as $dm) {
                extract($dm);
                $linkdm = "index.php?act=sanpham&iddm=" . $danhmuc_id;
                echo '<li><a href="' . $linkdm . '">' . $name_danhmuc . '</a></li>';
              }
            ?>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <p>© 2023 Bản quyền thuộc về trang web bán phụ kiện máy tính.</p>
    </div>
  </footer>

</body>

</html>