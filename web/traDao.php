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
    <link rel="stylesheet" href="../css/traDao.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" href="../images/title/titleLogo.png" type="image/x-icon" />

    <title>Trà đạo</title>
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
    <section id="traDao">
        <a href="./vanHoaNhatBan.php" class="back">< Quay lại</a>
        <h1>
            Nét đẹp “ngàn xưa” trong Văn hóa Trà đạo Nhật Bản 
        </h1>
        <p>
            Cho đến nay có rất nhiều nhà nghiên cứu ở Nhật Bản cũng như các nước khác nghiên cứu về Trà đạo Nhật Bản, nhưng hầu hết đều dừng ở mức độ mô tả về trình tự, về chất liệu, hình dạng của dụng cụ pha và uống, về kiến trúc và nội thất của phòng trà …
        </p>
        <p class="image left">
            <img src="../images/van_hoa/traDao2.png" alt="">
        </p>
        <h3>
            Lược sử hình thành nghi thức Trà đạo Nhật Bản
        </h3>
        <p>
            Đến giữa thế kỷ XIV (thời Muromachi), việc uống trà được phổ biến đến giới bình dân. Cách thức uống trà của người Nhật Bản giống như người Trung Hoa, chủ yếu là thưởng ngoạn phong cảnh, đối ẩm, thưởng thức vị trà. Tại những vùng trồng trà, đến nay hàng năm vẫn diễn ra các cuộc thi uống trà toucha  để tìm ra các loại trà ngon.
        </p>
        <p>
            Hưởng ứng tâm tưởng ấy, vào cuối thế kỷ XVI (thời Azuchi Momoyama), một người Nhật Bản là ông Senno Rikyu (1522-1591) đã kết hợp việc uống trà với các triết lý Thiền hình thành một trường phái có cách pha và uống trà khác biệt với thông thường. Thứ nước trà được pha chế ra và dùng để uống của trường phái này được gọi là cha no yuu. Cách thức pha và uống cha no yuu của trường phái này dần dần được trình tự hoá thành một nghệ thuật, được gọi là sadou, nghĩa là Trà đạo. Từ đó đến nay, nghệ thuật này càng được hoàn thiện và phổ biến, trở thành một nét văn hoá đặc trưng của người Nhật Bản.
        </p>
        <h3>
            Chủ thể của nghi thức Trà đạo Nhật Bản
        </h3>
        <p>
            Đối với nghi thức Trà đạo Nhật Bản, việc pha trà và uống trà là hai phần không thể tách rời. Người quan trọng nhất trong một nghi thức trà đạo là người thực hiện việc pha trà. Các thao tác của người pha trà thể hiện được cái tâm của người pha trà. Cái tâm này sẽ làm cho thao tác pha trà chuẩn mực hơn hay không cũng như là cuốn hút được những người tham gia nghi thức này hay không. Người pha trà đóng vai trò chủ thể chính thức của một nghi thức trà đạo. Còn người uống trà chỉ là chủ thể phụ của một nghi thức Trà đạo, hoà cùng chủ thể chính.
        </p>
        <p>
            Trong khi đó, đối với nghi thức Trà đạo Nhật Bản, hương vị của trà không đóng vai trò chính như cái tên được gắn lên của nó. Chỉ có một loại trà duy nhất dùng cho nghi thức này là bột trà xanh matcha. Đây là loại trà có vị đắng, và ở dạng bột. Trà chỉ đóng vai trò phụ trong nghi thức Trà đạo Nhật Bản, bởi vì vị đắng của trà rất phù hợp với tôn chỉ trách xa sự xa hoa của Thiền, sẽ hỗ trợ cho việc tập trung suy ngẫm của các chủ thể uống trà.
        </p>
        <p>
            Người tham gia vào nghi thức Trà đạo cũng đã uống được ngụm nước trà, tuy nhiên trong chén trà của họ không chỉ có nước trà thông thường, mà đã được pha vào đó tinh thần của Thiền. Người ta gọi đó là “Trà Thiền Nhất Vị”.
        </p>
        <h3>
            Thời gian thực hiện nghi thức Trà đạo Nhật Bản
        </h3>
        <p>
            Thông thường, thời điểm uống trà thường là buổi chiều tối, khi con người đã kết thúc một ngày làm việc, đến lúc đàm đạo. Buổi chiều tối cũng là lúc mát trời, nhiều cảnh đẹp hiện ra lúc hoàng hôn, cũng là lúc quần tụ gia đình. Ngoài ra, việc uống trà cũng được thực hiện vào lúc tàn các buổi tiệc, lúc xem ca múa… những lúc này không nhất thiết là vào chiều tối.
        </p>
        <p>
            Tại Nhật Bản, nghi thức Trà đạo được thực hiện bất cứ thời gian nào trong ngày, bởi vì ảnh hưởng Thiền nên yếu tố thời gian không là yếu tố quan trọng khi thực hiện nghi thức Trà đạo. Cái quan trọng chính là lúc các chủ thể cần có sự tập trung, có sự tĩnh lặng, thế là nghi thức Trà đạo Nhật Bản được thực hiện.
        </p>
        <h3>
            Không gian thực hiện nghi thức Trà đạo
        </h3>
        <p>
            Khi đàm đạo thông qua uống trà thông thường, mọi người cần một không gian thoáng đãng, họ cần không gian đẹp để việc thưởng thức trà mang lại thêm niền sảng khoái. Không gian đẹp cộng với sự bày trí sang trọng đem lại sự tự tin và hãnh diện cho chủ nhà. Không gian đẹp, cảnh đẹp, bộ dụng cụ uống trà đẹp thì chắc chắn trà sẽ rất ngon.
        </p>
        <p>
            Mục đích Thưởng thức, thưởng ngoạn, đàm đạo, giao tế. Tập trung tĩnh tâm, suy ngẫm, hòa hợp thiên nhiên
        </p>
        <h3>
            Bản chất Nghiêng về vật chất, trần tục. Nghiêng về tinh thần, tâm thức (Thiền).
        </h3>
        <p>
            Ngày nay, nghi thức Trà đạo Nhật Bản được thực hiện phổ biến mọi nơi tại Nhật Bản. Đối vời người Nhật, nghi thức Trà đạo hiện nay chủ yếu mang ý nghĩa là giúp con người giảm áp lực công việc… Việc thực hiện trình tự pha và uống cũng được đơn giản hoá, chỉ có điều là phải được thực hiện trong phòng kiểu Nhật.
        </p>
        <p>
            Vì uống trà nhiều thường sẽ dẫn đến việc bị say trà, mặt khác, vị của cha no yuu là vị đắng, nên thường thì trước khi uống, người bình thường sẽ được mời ăn một chút bánh ngọt (Omogashi hoặc higashi).
        </p>
        <p>
            Vì được hình thành dựa trên triết lý Thiền, nên thật ra nghi thức Trà đạo Nhật Bản nhằm thể hiện các triết lý Phật giáo Thiền tông
        </p>
        <p>
            Theo triết lý Thiền, thì con người là một tiểu vũ trụ nằm trong đại vũ trụ là thế giới tự nhiên. Cuộc sống của con người có rất nhiều điều chưa lý giải được nguyên nhân và bản chất. Để lý giải được những thắc mắc, con người phải hoà tâm trí mình vào tự nhiên – nói cách khác là để tiểu vũ trụ hoà vào đại vũ trụ – bằng cách tĩnh lặng tâm trí, không bị chi phối bới bên ngoài.
        </p>
        <p>
            Ý nghĩa đích thực của “Trà đạo” trong văn hoá Nhật Bản phải được hiểu là “Hoà hợp con người với thiên nhiên qua thao tác pha và uống trà”.
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