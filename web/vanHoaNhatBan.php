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
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="../css/vanHoaNhatBan.css">
    <link rel="icon" href="../images/title/titleLogo.png" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Văn hóa Nhật Bản</title>
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

    <section id="van_hoa_nhat_ban">
        <div class="van_hoa_container">
            <h1>Văn hóa Nhật Bản</h1>
            <div class="van_hoa_content">
                <div class="van_hoa_element">
                    <img src="../images/van_hoa/tradao.png" alt="">
                    <h3 class="tra_dao_color">Văn hóa trà đạo</h3>
                    <p class="time">03/11/2021</p>
                    <p class="mo_ta">
                        Cho đến nay có rất nhiều nhà nghiên cứu ở Nhật Bản cũng như các nước khác nghiên cứu về Trà đạo
                        Nhật Bản, nhưng hầu hết đều dừng ở mức độ mô tả về trình tự, về chất liệu, hình dạng của dụng cụ
                        pha và uống, về kiến trúc và nội thất của phòng trà …
                    </p>
                    <a class="tra_dao_color" href="../web/traDao.php">Xem thêm >></a>
                </div>
                <div class="van_hoa_element">
                    <img src="../images/van_hoa/kimono.png" alt="">
                    <h3 class="kimono_color">Trang phục truyền thống</h3>
                    <p class="time">04/11/2021</p>
                    <p class="mo_ta">
                        Kimono là trang phục truyền thống của đất nước Nhật Bản. Trước đây, Kimono được cả đàn ông và
                        phụ nữ sử dụng như trang phục hàng ngày. Tuy nhiên, ngày nay chỉ có phụ nữ Nhật mặc Kimono là
                        chủ yếu còn người đàn ông Nhật...
                    </p>
                    <a class="kimono_color" href="../web/kimono.php">Xem thêm >></a>
                </div>
                <div class="van_hoa_element">
                    <img src="../images/van_hoa/sumo.png" alt="">
                    <h3 class="sumo_color">Đấu Sumo</h3>
                    <p class="time">05/11/2021</p>
                    <p class="mo_ta">
                        Sumo Nhật Bản là môn võ cổ truyền thể hiện tinh thần của Thần Đạo (Shinto) - nền văn hóa tín
                        ngưỡng bậc nhất của người dân Nhật. Trong mỗi cuộc thi đấu, các Sumo sẽ thể hiện những điệu múa
                        cổ truyền và một vài nghi lễ chính ...
                    </p>
                    <a class="sumo_color" href="../web/sumo.php">Xem thêm >></a>
                </div>
            </div>
        </div>
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