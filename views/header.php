<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>
    <div class="container">
        <div class="header">
            <!-- Logo-banner -->
            <div class="logo-banner">
                <!-- Logo -->
                <div class="logo">
                    <a href="../index.php"><img src="../image/logo.png" alt="" ></a>
                </div>
                <!-- Search -->
                <div class="search">
                    <form action="">
                        <input type="text" placeholder="Nhập Tên Phụ Kiện Muốn Tìm">
                        <button type="submit">Tìm Kiếm</button>
                    </form>
                    <div class="menu-share">
                        <ul>
                            <li><a href="index.php?act=bill"><i class="material-icons">credit_card</i> Thanh Toán</a></li>
                            <li><a href="index.php?act=addtocart"><i class="material-icons">shopping_cart</i> Giỏ Hàng</a></li>
                            <li><a href="../views/login.php"><i class="material-icons">person</i>Đăng Nhập</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header -->
            <div class="line-menu"></div>
            <div class="menu">
                <ul>
                    <li><a href="../index.php">Trang Chủ</a></li>
                    <li><a href="#">CPU</a></li>
                    <li><a href="#">RAM</a></li>
                    <li><a href="#">Tai Nghe</a></li>
                    <li><a href="#">Chuột</a></li>
                    <li><a href="#">Bàn Phím</a></li>
                    <li><a href="#">Tin Tức</a></li>
                    <li><a href="#">Liên Hệ</a></li>

                </ul>
            </div>
            <!-- Hết menu -->
            <style>
                .slideshow {
                    width: 100%;
                    position: relative;
                    margin: auto;
                }

                .slide {
                    display: none;
                    width: 100%;
                    margin: auto;
                }

                .slide img {
                    width: 100%;
                    height: 450px;
                }
            </style>
            <div class="slideshow">
                <div class="slide">
                    <img src="/image/slideshow12.jpg" alt="Image 3">
                </div>
                <div class="slide">
                    <img src="/image/slideshow11.jpg" alt="Image 2">
                </div>


            </div>

            <script>
                let slideIndex = 1;
                showSlides(slideIndex);

                function plusSlides(n) {
                    showSlides(slideIndex += n);
                }

                function currentSlide(n) {
                    showSlides(slideIndex = n);
                }


                function showSlides() {
                    let i;
                    let slides = document.getElementsByClassName("slide");

                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                    }

                    slideIndex++;
                    if (slideIndex > slides.length) {
                        slideIndex = 1;
                    }

                    slides[slideIndex - 1].style.display = "block";
                    setTimeout(showSlides, 3000);
                }
            </script>
            <!-- Hết slide show -->
            <!-- Option menu -->
            <div class="option-menu">
                <img src="image/sildeshow2.png" alt="">
                <img src="image/sildeshow3.png" alt="">
                <img src="image/sildeshow4.png" alt="">
                <img src="image/slideshow5.png" alt="">
                <img src="image/slideshow6.png" alt="">
            </div>
        </div>
    </div>
</body>

</html>