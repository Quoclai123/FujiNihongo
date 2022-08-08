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

			<!-- Noidung  -->
				<div class="noidung">
					<h3 class="tieudebaiviet">Học viện Quốc tế Osaka</h3>
					<h4>1. Giới thiệu chung về trường</h4>
					<p class="doanvanban">Học Viện Quốc tế Osaka có vị trí tại trung tâm Osaka, với mạng lưới giao thông thuận tiện đến “Thành Osaka”, “Dotonbori”, “Công viên USJ”, cách Namba khoảng 15 phút đi bộ.
						<br>
          			Đội ngũ giáo viên tại trường có nhiều năm kinh nghiệm trong việc đào tạo tiếng Nhật cho du học sinh.Ngoài việc giảng dạy trên lớp, thầy cô còn quan tâm đến việc sinh hoạt hàng ngày của các bạn, luôn giúp đỡ và hỗ trợ khi gặp khó khăn nhất.
						<br>
            		Bên cạnh đó, trường còn tổ chức kì thi kiểm tra năng lực đầu vào khi nhập học để xác định trình độ tiếng Nhật của mỗi học viên. Học viên sẽ được chia lớp dựa trên kết quả của bài kiểm tra đó.Từ đó, trường giúp học viên cải thiện năng lực của bản thân thông qua hoạt động hướng nghiệp kỹ càng, từ học tiếng Nhật trong đối thoại hàng ngày đến tìm việc làm.</p>
					<p class="hinhanh"><img class="hinh1" src="../images/duhocnhatban/hoc-vien-quoc-te-osaka.jpg" alt=""></p>
					<h4>2. Thông tin về học phí và ký túc xá</h4>
					<p class="doanvanban">
						<strong>TIỀN HỌC 1 NĂM ĐẦU(I)</strong>
						<br>
						1. Phí nhập học 50,000 Yên.
						<br>
						2. Phí đăng ký	30,000 Yên.
						<br>
						3. Tiền học phí ( 12 tháng ) chưa thuế 	580,000 Yên.
						<br>
						4. Phí tài liệu 30,000 Yên.
						<br>
						5. Phí cơ sở 20,000 Yên.
						<br>
						6. Thuế 10% 71,000 Yên.
						<br>
						TỔNG (I) là 781,000 Yên.
					</p>
					<p class="doanvanban">
						<strong>TIỀN KTX 6 THÁNG ĐẦU(II)</strong>
						<br>
						1. Tiền vào nhà ( chỉ đóng 1 lần) 25,000 Yên.
						<br>
						2. Tiền nhà 6 tháng	150,000 Yên.
						<br>
						3. Tiền điện, nước, gaz 6 tháng	18,000 Yên.
						<br>
						4. Bảo hiểm tài sản (chỉ đóng 1 lần) 3,000 Yên.
						<br>
						TỔNG (II) là 196,000 Yên.
					</p>
					<p class="doanvanban">
						<strong>TIỀN KHÁC (III)</strong>
						<br>
						Bảo hiểm tai nạn 1 năm, từ điển,. . . 16,000 Yên.
					</p>
					<p class="doanvanban">
						<strong>TỔNG ( I + II + III) là 993,000Yên</strong>
					</p>
					<h4>3. Chương trình học bổng:</h4>
					<p class="doanvanban">
						Trong vòng 1 – 3 tuần đến Nhật, Học sinh sẽ làm bài kiểm tra năng lực tiếng Nhật tại Trường. Nhà Trường sẽ trao phần thưởng cho học sinh sau đây:
						<br>
						• Học sinh được đánh giá có năng lực tiếng Nhật tương đương N4 trở lên: 50,000 Yên
						<br>
						• Học sinh được đánh giá có năng lực tiếng Nhật tương đương N5 trở lên: 30,000 Yên
						<br>
					</p>
					<p class="doanvanban">
						Bên cạnh đó còn có 1 số học bổng khác như sau:
						<br>
						• Giải thưởng đặc biệt cho học viên của Học viện Quốc tế Osaka (100,000 Yên)
						<br>
						• Giải thưởng khuyến khích cho học viên của Học viện Quốc tế Osaka (10,000 Yên)
						<br>
						• Giải thưởng học kỳ cho học viên của Học viện Quốc tế Osaka (10,000 Yên)
						<br>
						• Giải thưởng của năm cho học viên của Học viện Quốc tế Osaka (10,000 Yên)
						<br>
						• Giải thưởng thành tích học tập tốt cho học viên của Học viện Quốc tế Osaka (5,000 Yên)
						<br>
						• Giải thưởng đỗ N1 (30,000 Yên), đỗ N2 ( 10,000 Yên) của Học viện Quốc tế Osaka
						<br>
						• Học bổng du học Nhật Bản JASSO ( 30,000 Yên hàng tháng)
						<br>
					</p>
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