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
    <link rel="stylesheet" href="../css/sumo.css">
    <link rel="icon" href="../images/title/titleLogo.png" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="../images/title/titleLogo.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Sumo</title>
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

    <section id="sumo">
        <a href="./vanHoaNhatBan.php" class="back"> < Quay lại</a>
        <h1>
            Sumo – Tinh hoa nét đẹp võ thuật truyền thống của Nhật Bản
        </h1>

        <h3>
            1. Sumo Là Gì?
        </h3>
        <p>
            Trong khi nhiều người đang cố gắng từng ngày để trông gầy hơn thì tại Nhật Bản hơn 2000 năm nay xuất hiện một môn võ ưu tiên dành riêng cho những người có cân nặng vượt trội.
        </p>
        <p>
            Sumo Nhật Bản là môn võ cổ truyền thể hiện tinh thần của Thần Đạo (Shinto) - nền văn hóa tín ngưỡng bậc nhất của người dân Nhật. Trong mỗi cuộc thi đấu, các Sumo sẽ thể hiện những điệu múa cổ truyền và một vài nghi lễ chính. Những điệu múa này là dịp để Sumo thay mặt người dân cảm tạ trời đất và cầu cho một vụ mùa bội thu. Vì vậy, môn võ Sumo được xem là niềm tự hào của văn hóa con người Nhật Bản. 
        </p>
        <p class="image">
            <img src="../images/van_hoa/sumo2.png" alt="">
        </p>
        <p>
            <strong>Sumo Nhật Bản</strong> với thân hình to lớn vượt trội, có kích cỡ gấp 2-3 lần người bình thường. Họ là một trong những hình tượng nổi tiếng khắp thế giới.
        </p>
        <p>
            Người dân phương Tây định nghĩa Sumo với cái tên “Sumo -wreslter”, họ xem đây là một môn đô vật đối kháng thay vì một môn võ thông thường. Du khách khi du lịch Nhật Bản đều mong muốn được thưởng thức một buổi trình diễn mãn nhãn từ các Sumo.
        </p>

        <h3>2. Nguồn Gốc Và Lịch Sử Của Sumo</h3>
        <p>
            Sumo xuất hiện từ 2000 năm trước tại các đền chùa với nhiều nghi thức thể hiện văn hóa Nhật. Tuy nhiên mãi đến năm 642, trận thi đấu giữa các Sumotori (võ sĩ Sumo) lần đầu tiên diễn ra và được thế giới công nhận.
        </p>
        <p>
            <strong>Thời kỳ Nara</strong> được xem là giai đoạn hoàng kim và có bước chuyển mình đáng ngạc nhiên của Sumo Nhật Bản. Thời này, người ta đưa môn võ này để trình diễn trong triều đình. Các luật lệ bắt đầu được thiết lập và áp dụng mãi cho đến ngày nay. 
        </p>
        <p>
            Bên cạnh đó những Sumo còn được đưa vào các trận chiến ở thế kỉ 12 nhằm đả kích và đe dọa quân địch. Có thể nói Sumo không chỉ đơn thuần là một môn thể thao truyền thống mà còn là sự tự hào của văn hóa con người Nhật Bản.
        </p>

        <h3>3. Các Cấp Bậc Trong Sumo Nhật Bản</h3>
        <p>
            Tương tự như những môn võ thế giới khác, Sumo cũng có những cấp bậc và quy tắc riêng. Dưới đây là tất cả các cấp bậc trong sự nghiệp của một Sumotori.
        </p>
        <p>
            <strong>Jonokuchi</strong> 
            <br>
            Jonokuchi là cấp bậc thấp nhất mà bất kỳ Sumo nào khi vào nghề cũng sẽ trải qua. Đây cũng được xem như một cấp bậc dành cho những người tập sự.
        </p>
        <p>
            Không khó để những Sumo ở cấp bậc này tăng hạn. Tuy nhiên, dù gặp chấn thương hay phong độ sa sút các Sumo cũng sẽ không trở về cấp bậc Jonokuchi này.
        </p>
        <p>
            <strong>Jonidan</strong>
            <br>
            Cấp bậc tiếp theo là Jonidan khi các võ sĩ Sumo đã có một số kinh nghiệm nhất định. Tuy vậy áo khoác Kimono sẽ không được dùng cho các Sumo ở cấp bậc này bất kể thời tiết nóng hay lạnh.
        </p>
        <p>
            <strong>Sandanme</strong>
            <br>
            Ở cấp bậc Sandanme, các Sumo Nhật Bản đã bắt đầu được nhận những khoản trợ cấp nhất định sau mỗi trận đấu.
        </p>
        <p>
            <strong>Makushita</strong>
            <br>
            Makushita là cấp bậc cuối cùng của khóa huấn luyện để trở thành những võ sĩ Sumo thực thụ. Những ai ở cấp bậc này khi thắng 7 trận đấu sẽ được tăng hạng vô điều kiện lên Juryo - một Sumo chính thức.
        </p>
        <p>
            <strong>Juryo</strong>
            <br>
            Juryo là cấp bậc các võ sĩ được thi đấu chuyên nghiệp trong các giải khác nhau. Các Sumotori sẽ chính thức thi đấu với nhau trong những trận đấu. Người thắng cuộc với thứ hạng cao sẽ được tăng cấp bậc.
        </p>
        <p>
            <strong>Maegashira</strong>
            <br>
            Đây được xem là cấp hạng đông đảo nhất trong thế giới Sumo Nhật Bản. Các Sumo ở vị trí này sẽ được thi đấu các giải chuyên nghiệp hoặc những người được tăng thứ hạng nhưng có phong độ sa sút, thường sẽ trở về lại cấp bậc Maegashira.
        </p>
        <p>
            <strong>Komusubi</strong>
            <br>
            Komusubi là cấp bậc phong cho võ sĩ cấp Maegashira - người có 10 - 11 trận thắng hoặc thắng một người có cấp bậc cao hơn mình.
        </p>
        <p>
            <strong>Sekiwake</strong>
            <br>
            Trong văn hóa Nhật, Sekiwake là cấp bậc cho một võ sĩ Sumo có số trận thắng trong một mùa giải nhiều hơn số trận thua, trung bình tính từ 10 trận trở lên. Tuy vậy, nếu có một mùa giải không thành công họ sẽ bị hạ cấp bậc.
        </p>
        <p>
            <strong>Ozeki</strong>
            <br>
            Các võ sĩ Sumo thắng 33 trận hay đoạt chức vô địch ba mùa đấu Sumo liên tiếp sẽ được phong cấp bậc Ozeki. Tương tự như cấp bậc trên, nếu phong độ thi đấu không tốt, có số lần thua nhiều hơn các võ sĩ sẽ bị hạ cấp bậc.
        </p>
        <p>
            <strong>Yokozuna</strong>
            <br>
            Cấp bậc cao quý nhất trong bộ môn võ Sumo. Muốn đạt đến đẳng cấp này, võ sĩ Sumo phải có một thành tích nổi bật và giữ ổn định tại mỗi mùa giải. Thông thường mỗi vòng người này phải thắng từ 12/15 trận. Hiện nay chỉ có 67 người được phong cấp bậc Yokozuna và chỉ còn một vài người còn sống.
        </p>
        <p>
            Du lịch Nhật Bản không thể bỏ lỡ cơ hội chiêm ngưỡng những trận đấu mãn nhãn của các võ sĩ Sumo Nhật Bản trên sàn đấu. Trải nghiệm này sẽ mang đến cho bạn những cảm giác mới lạ, thích thú khi được trải nghiệm văn hóa Nhật rõ nét.
        </p>
    </section>

    <footer>
        <div class="logo_footer">
            <img src="../images/footer/logoFooter.png" alt="">
        </div>
        <div class="Thongtin" width="500px">
            <strong><p class="title_1">THÔNG TIN LIÊN HỆ</p></strong>
            <hr class="hr_white">
            <hr class="hr_blue">
            <p> 
                <i class="far fa-envelope icon1"></i>&nbsp;<a href="mailto:fujinihongo@gmail.com" class="anchor1">fujinihongo@gmail.com</a>
                <br><br><i class="fas fa-phone-alt icon1"></i> 0382468820
                <br><br><i class="far fa-calendar-check icon1"></i> Thứ 2- Thứ 7: 8h - 15h
                <br><br><i class="fas fa-map-marker-alt icon1"></i> 720A Điện Biên Phủ, q.22, p.Bình Thạnh, TP. Hồ Chí Minh
            </p>
        </div>
        <div class="Ketnoi">
            <strong><p class="title_1">KẾT NỐI VỚI CHÚNG TÔI</p></strong>
            <hr class="hr_white">
            <hr class="hr_blue">
            <br>
            <a href="https://www.facebook.com/"><img src="../images/footer/facebook.png" width="60px" height="60px" class="images1"></a>
            <a href="https://www.youtube.com/"><img src="../images/footer/youtube.png" width="60px" height="60px" class="images1"></a>
            <a href="https://www.tiktok.com/"><img src="../images/footer/tiktok.png" width="60px" height="60px" class="images1"></a>
        </div>
        <hr class="hr_footer">
        <p class="footer_copyright">Copyright © 2021 FujiNihongo. All Rights Reserved.</p>
    </footer>
</body>
</html>