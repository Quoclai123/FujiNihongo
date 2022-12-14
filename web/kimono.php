<?php
session_start();
if(isset($_SESSION['username'])) $username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/kimono.css">
    <link rel="icon" href="../images/title/titleLogo.png" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" href="../images/title/titleLogo.png" type="image/x-icon" />
    <title>Trang phục truyền thống</title>
</head>

<body>
<header>
    <a class="logo_header" href="../index.php">
        <img src="../images/header/logoHeader.png" alt="">
    </a>
    <nav class="content_list">
        <ul>
            <li><a href="./gioithieu.php">Giới thiệu</a></li>
            <li><a href="khoahoc.php">Khóa học</a></li>
            <li class="dropdown ">
                <a href="#" class="dropbtn_1">Bài viết
                  </a>   
                <div class="dropdown-content_1">
                <a href='./vanHoaNhatBan.php'>Văn hoá Nhật Bản</a> 
                <a href='./duhocnhatban.php'>Du học Nhật Bản</a> 
                <a href='./cohoivieclam.php'>Cơ hội việc làm</a> 
                </div>                     
            </li>
            <li><a href="tuvan.php">Tư vấn</a></li>
            <li><a href="giaovien.php">Giáo Viên</a></li>
            <li><a href="./thithu.php">Thi thử</a></li>
        </ul>
    </nav>
    <?php 
    error_reporting(E_ERROR | E_PARSE);
    if ($username=="")
    echo '
    <nav class="login">
        <ul>
            <li><a href="./dangnhap.php">Đăng nhập</a></li>
            <li><a href="./dangky.php">Đăng ký</a></li>
        </ul>
    </nav>';
    else
    {
       echo'
        <nav class="login">
        <ul>
        <li class="dropdown ">
                <a href="#" class="dropbtn">
        ';
         echo $username;
         echo'<i class="fa fa-caret-down"></i></a>   
                <div class="dropdown-content">';
        echo "<a href='thongtin.php?username=".$username."'>Thông tin cá nhân</a> ";
        echo'<a href="../php_xuly/logout.php">Đăng xuất</a> 
                </div>                     
            </li>
        </ul>
         </nav>';
    }
    ?>
</header>
    <section id="kimono">
        <a href="./vanHoaNhatBan.php" class="back"> < Quay lại</a>
        <h1>
            KIMONO - TRANG PHỤC TRUYỀN THỐNG
        </h1>
        <p>
            Kimono là trang phục truyền thống của đất nước Nhật Bản. Trước đây, Kimono được cả đàn ông và phụ nữ
            sử dụng như trang phục hàng ngày. Tuy nhiên, ngày nay chỉ có phụ nữ Nhật mặc Kimono là chủ yếu còn
            người đàn ông Nhật thường chỉ mặc Kimono trong các dịp lễ truyền thống hoặc trong các đám cưới.
        </p>
        <p>
            Trang phục truyền thống Nhật Bản Kimono được du nhập vào Nhật Bản khoảng đầu thế kỷ thứ 7. Đây là
            thời đại của vua Heian. Được sáng tạo từ những bộ đồ lót bằng cotton thành một kiểu đặc trưng, đẹp
            và cầu kỳ hơn. Theo thời gian, Kimono chính thức được người Nhật đón nhận và trở thành quốc phục của
            Nhật Bản.
        </p>
        <p class="image left">
            <img src="../images/van_hoa/kimono2.png" alt="">
        </p>
        <h3>
            Thiết kế đặc trưng của Kimono
        </h3>
        <p>
            Để có được một bộ Kimono đẹp, độc đáo, người thiết kế phải chỉn chu trong từng bước. Từ khâu chọn
            vải, chọn màu, trang trí hoa văn đến việc lựa chọn phụ kiện đi kèm. Kimono được thiết kế gồm 8 mảnh
            ghép có thể điều chỉnh kích thước sao cho phù hợp với người mặc và được trang trí bằng hoa văn hoặc
            nhuộm. Màu sắc của trang phục Kimono thường biểu thị các mùa trong năm và mỗi tầng lớp trong xã hội
            cũng có màu sắc riêng.
        </p>
        <h3>
            Chất liệu Kimono
        </h3>
        <p>
            Theo truyền thống của Nhật, Kimono được may từ các loại vải dệt từ thiên nhiên như vải bông, vải
            lanh, vải lụa. Riêng mùa hè, áo Kimono được làm bằng vải cotton.
        </p>
        <h3>
            Các loại Kimono
        </h3>
        <p>
            <strong>Furisode:</strong> Được thiết kế dành cho những cô gái chưa chồng với tay áo rất rộng và dài
            ( khoảng 95 cm đến 115 cm). Chất liệu bằng lụa và màu sắc tươi sáng.
        </p>
        <p>
            <strong>Yakata:</strong> Với thiết kế đơn giản và dễ mặc, Yakata được cả đàn ông và phụ nữ chọn mặc
            vào mùa hè, trong ngày Bon-Odori hoặc trong các ngày hội hè. Yakata được làm từ chất liệu cotton
            bình thường.
        </p>
        <p>
            <strong>Houmongi:</strong> Trang phục này được dùng trong dịp lễ như tiệc trà hoặc đám cưới của
            những người phụ nữ đã kết hôn.
        </p>
        <p>
            <strong>Tomesode:</strong> Được thiết kế với ống tay áo ngắn hơn áo Kimono truyền thống. Dành cho
            những người phụ nữ đã có chồng. Áo Tomesode màu đen chỉ mặc vào các dịp lễ như đám tang hay đám cưới
            của họ hàng.
        </p>
        <p>
            <strong>Shiromaku:</strong> Đặc điểm của trang phục này là màu trắng, tỏa tròn và độ dài đến chạm
            đất. Được dùng cho cô dâu trong đám cưới truyền thống của Nhật Bản.
        </p>
        <p>
            <strong>Tsumugi:</strong> Loại Kimono này dành cho tầng lớp nông dân. Thiết kế theo dạng hoa văn
            chạy dọc lưng áo và thân rồi gặp nhau ở đỉnh vai. Thường mặc vào các buổi tiệc cắm hoa, trà đạo hoặc
            đám cưới của bạn bè.
        </p>
        <h3>
            Phụ kiện đi kèm với quốc phục Kimono
        </h3>
        <p>
            <strong>Thắt lưng Obi:</strong> Dành cho phụ nữ thường có chiều rộng khoảng 60 cm và chiều dài
            khoảng 4m. Được quấn hai vòng quanh thắt lưng và thắt đằng sau lưng. Các phụ kiện đi kèm Obi là
            Koshi-himo Koshi-himo, Date-jime, Obijime, Chocho.
        </p>
        <p class="image">
            <img src="../images/van_hoa/obi.png" alt="">
        </p>
        <p>
            <strong>Heko bi và Kaku:</strong> Là phụ kiện dành cho Kimono nam, với chiều dài là 3,5 inch, làm
            bằng vải cotton.
        </p>
        <p>
            Ngoài ra, người Nhật còn dùng những phụ kiện khác như Taiko-musubi, dây cài lưng, trâm cài đầu và
            guốc gỗ.
        </p>
        <h3>
            Cách thức mặc Kimono
        </h3>
        <p>
            Khi mặc Kimono, người mặc phải tuân theo đúng nguyên tắc riêng của trang phục này: quấn bên phải vào
            trước rồi quấn đến bên trái. Lưu ý chỉ được quấn ngược lại khi đi dự tang lễ. Tùy vào từng lứa tuổi,
            tầng lớp xã hội và từng mùa để lựa chọn trang phục cho phù hợp.
        </p>
    </section>

    <footer>
        <div class="logo_footer">
            <img src="../images/footer/logoFooter.png" alt="">
        </div>
        <div class="Thongtin" width="500px">
            <strong>
                <p class="title_1">THÔNG TIN LIÊN HỆ</p>
            </strong>
            <hr class="hr_white">
            <hr class="hr_blue">
            <p>
                <i class="far fa-envelope icon1"></i>&nbsp;<a href="mailto:fujinihongo@gmail.com"
                    class="anchor1">fujinihongo@gmail.com</a>
                <br><br><i class="fas fa-phone-alt icon1"></i> 0382468820
                <br><br><i class="far fa-calendar-check icon1"></i> Thứ 2- Thứ 7: 8h - 15h
                <br><br><i class="fas fa-map-marker-alt icon1"></i> 720A Điện Biên Phủ, q.22, p.Bình Thạnh, TP. Hồ Chí
                Minh
            </p>
        </div>
        <div class="Ketnoi">
            <strong>
                <p class="title_1">KẾT NỐI VỚI CHÚNG TÔI</p>
            </strong>
            <hr class="hr_white">
            <hr class="hr_blue">
            <br>
            <a href="https://www.facebook.com/"><img src="../images/footer/facebook.png" width="60px" height="60px"
                    class="images1"></a>
            <a href="https://www.youtube.com/"><img src="../images/footer/youtube.png" width="60px" height="60px"
                    class="images1"></a>
            <a href="https://www.tiktok.com/"><img src="../images/footer/tiktok.png" width="60px" height="60px"
                    class="images1"></a>
        </div>
        <hr class="hr_footer">
        <p class="footer_copyright">Copyright © 2021 FujiNihongo. All Rights Reserved.</p>
    </footer>
</body>

</html>