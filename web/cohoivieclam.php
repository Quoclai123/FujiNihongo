<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(isset($_SESSION['username'])) $username = $_SESSION['username'];
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cơ hội việc làm</title>
    <!-- Font awsome CSS -->
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <!-- main style-->
    <link rel="icon" href="../images/title/titleLogo.png" type="image/x-icon" />
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/cohoivieclam.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
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
    <section>
        <div class="single-item">
            <div class="item-wrapper">
                <div class="item-img">
                    <a href="topvieclam.php" title=""><img src="../images/cohoi/1.jpg" alt=""></a>
                </div>
                <h3><a href="topvieclam.php" title="">Top những việc làm tiếng Nhật phổ thông nhất hiện nay</a></h3>
            </div>
            <ul class="post-status">
                <li><i class="fas fa-user"></i>Nguyễn Văn A</li>
                <li><i class="fas fa-comment"></i>0 Bình luận</li>
                <li><i class="fas fa-thumbs-up"></i> 0 Thích</li>
            </ul>
        </div>

        <div class="single-item">
            <div class="item-wrapper">
                <div class="item-img">
                    <a href="dexinviec.php" title=""><img src="../images/cohoi/4.jpg" alt=""></a>
                </div>
                <h3><a href="dexinviec.php" title="">Top 10 nghề dễ xin việc nhất cho người biết tiếng Nhật</a></h3>
            </div>
            <ul class="post-status">
                <li><i class="fas fa-user"></i>Nguyễn Văn D</li>
                <li><i class="fas fa-comment"></i>0 Bình luận</li>
                <li><i class="fas fa-thumbs-up"></i> 0 Thích</li>
            </ul>
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