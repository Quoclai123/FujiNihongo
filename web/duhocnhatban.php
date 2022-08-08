<!DOCTYPE HTML>
<html>
<?php
session_start();
if(isset($_SESSION['username'])) $username = $_SESSION['username'];
?>
	<head>
		<title>Du học Nhật Bản</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="../css/duhocnhatban.css" />
		<link rel="stylesheet" href="../css/headerduhoc.css" />
		<link rel="stylesheet" href="../css/footerduhoc.css" />
		<link rel="stylesheet" href="../fontawesome/css/all.css" />
		<link rel="icon" href="../images/title/titleLogo.png" type="image/x-icon" />
	</head>
	<body>
			<!-- Header -->
			<header class="header">
        		<a class="logo_header" href="../index.php">
            		<img src="../images/duhocnhatban/logoHeader.png" alt="">
        		</a>
        		<nav class="content_list">
        			<ul>
            			<li><a href="./gioithieu.php">Giới thiệu</a></li>
            			<li><a href="khoahoc.php">Khóa học</a></li>
            			<li class="dropdown ">
                			<a href="#" class="dropbtn_1">Bài viết</a>   
                			<div class="dropdown-content_1">
                				<a href="vanHoaNhatBan.php">Văn hoá Nhật Bản</a> 
                				<a href="duhocnhatban.php">Du học Nhật Bản</a> 
                				<a href="cohoivieclam.php">Cơ hội việc làm</a> 
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

			<!-- Features  -->
			<div class="duhocnhatban">
				<div class="wrapper">
					<div class="container">
						<div class="row">
							<section class="col-4 feature section">
								<div class="image-wrapper first">
									<a href="#" class="image featured"><img src="../images/duhocnhatban/osaka.png"/></a>
								</div>
								<header class="headerbv">
									<h2 class="h2">Học viện<br/>
									Quốc tế Osaka</h2>
								</header>
								<p>Học Viện Quốc tế Osaka có vị trí tại trung tâm Osaka, với mạng lưới giao thông thuận tiện đến “Thành Osaka”, “Dotonbori”, “Công viên USJ”, cách Namba khoảng 15 phút.</p>
								<ul class="actions ulbv">
									<li class="libv"><a href="osaka.php" class="button">Xem thêm</a></li>
								</ul>
							</section>
							<section class="col-4 feature section">
								<div class="image-wrapper">
									<a href="#" class="image featured"><img src="../images/duhocnhatban/duhoctuthan.png"/></a>
								</div>
								<header class="headerbv">
									<h2 class="h2">Du học tự thân,<br />
									tại sao không ?</h2>
								</header>
								<p>Du học Nhật tự túc là hình thức sinh viên phải chịu 100% chi phí du học của mình. Với chương trình du học này bạn sẽ không được sự hỗ trợ của quỹ học bổng và Chính phủ.</p>
								<ul class="actions ulbv">
									<li class="libv"><a href="duhoctuthan.php" class="button">Xem thêm</a></li>
								</ul>
							</section>
							<section class="col-4 feature section">
								<div class="image-wrapper">
									<a href="#" class="image featured"><img src="../images/duhocnhatban/hosoduhoc.png"/></a>
								</div>
								<header class="headerbv">
									<h2 class="h2">Hành trang<br />
									du học Nhật Bản</h2>
								</header>
								<p>DU HỌC SINH ĐƯỢC MANG GÌ KHI ĐI DU HỌC ? Vậy là bạn nhận được tư cách lưu trú và chuẩn bị sang Nhật du học ? Thật là nhiều việc cần phải làm !</p>
								<ul class="actions ylbv">
									<li class="libv"><a href="hanhtrang.php" class="button">Xem thêm</a></li>
								</ul>
							</section>
							<br>
							<section class="col-4 feature section">
								<div class="image-wrapper">
									<a href="#" class="image featured"><img src="../images/duhocnhatban/dieukienduhoc.png"/></a>
								</div>
								<header class="headerbv">
									<h2 class="h2">Điều kiện<br />
									du học Nhật Bản</h2>
								</header>
								<p>Nhật Bản là điểm đến du học trong mơ của các bạn trẻ. Tuy nhiên, đây là quốc gia có quy định khắt khe đối với học sinh và sinh viên quốc tế. Vậy điều kiện du học Nhật Bản là gì?</p>
								<ul class="actions ulbv">
									<li class="libv"><a href="dieukien.php" class="button">Xem thêm</a></li>
								</ul>
							</section>
						</div>
					</div>
				</div>
			</div>
			<!-- Footer -->
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
                		<i class="far fa-envelope icon1"></i>&nbsp;<a href="mailto:fujinihongo@gmail.com" class="anchor1">fujinihongo@gmail.com</a>
                		<br><br><i class="fas fa-phone-alt icon1"></i> 0382468820
                		<br><br><i class="far fa-calendar-check icon1"></i> Thứ 2- Thứ 7: 8h - 15h
                		<br><br><i class="fas fa-map-marker-alt icon1"></i> 720A Điện Biên Phủ, q.22, p.Bình Thạnh, TP. Hồ Chí Minh
            		</p>
        		</div>
        		<div class="Ketnoi">
            		<strong>
                		<p class="title_1">KẾT NỐI VỚI CHÚNG TÔI</p>
            		</strong>
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