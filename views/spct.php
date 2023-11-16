<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chi tiết sản phẩm</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    .container {
      max-width: 800px;
      margin: 20px auto;
      background-color: #fff;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      color: #333;
    }

    img {
      max-width: 100%;
      height: auto;
    }

    p {
      line-height: 1.6;
      color: #666;
    }
  </style>
</head>
<body>

<div class="container">
  <h1>Tên Sản phẩm</h1>
  <img src="link_anh_san_pham.jpg" alt="Sản phẩm">
  <p>Mô tả ngắn về sản phẩm.</p>
  <p>Giá: $100.00</p>
  <p><strong>Số lượng:</strong> 10</p>

  <!-- Thêm các thông tin khác về sản phẩm tại đây -->

  <button onclick="addToCart()">Thêm vào giỏ hàng</button>
</div>

<script>
  function addToCart() {
    alert('Sản phẩm đã được thêm vào giỏ hàng!');
    // Thêm logic xử lý thêm vào giỏ hàng ở đây nếu cần
  }
</script>

</body>
</html>
