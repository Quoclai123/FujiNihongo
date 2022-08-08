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
					<h3 class="tieudebaiviet">ĐIỀU KIỆN DU HỌC NHẬT BẢN</h3>
					<p class="doanvanban">
						Nhật Bản là điểm đến du học trong mơ của các bạn trẻ. Tuy nhiên, đây là quốc gia có quy định khắt khe đối với học sinh và sinh viên quốc tế. Vậy điều kiện du học Nhật Bản là gì? Dưới đây FUJI sẽ tổng hợp tất cả những điều kiện du học Nhật Bản 2021 được cập nhật mới nhất để các bạn có ý định du học Nhật Bản hiểu được rõ nét về vấn đề này.
					</p>
					<p class="hinhanh"><img class="hinh1" src="../images/duhocnhatban/dieukien.jpg" alt=""></p>
					<h4>1. Du học hệ THPT tại Nhật Bản</h4>
					<p class="doanvanban">
						Nhiều bậc phụ huynh ngày nay đã có ý định cho con em mình đi du học Nhật Bản ngay sau khi tốt nghiệp cấp 2. Tương tự như các trường trung học phổ thông tại Việt Nam, tại Nhật Bản cũng có 3 khối từ lớp 10, 11, 12. Ngoài giảng dạy các môn học chính như: tiếng Nhật, tiếng Anh, Toán, các môn khoa học tự nhiên,… chương trình đào tạo còn chú trọng đào tạo các hoạt động thể thao, ngoại khóa nhằm giúp học sinh phát triển toàn diện.
						<br>
						<br>
						Để du học theo diện này, ứng viên cần đáp ứng những điều kiện du học Nhật Bản như sau:
						<br>
						– Tốt nghiệp bậc trung học cơ sở tại Việt Nam
						<br>
						– Học sinh không có tiền án tiền sự hoặc thuộc danh sách cấm của Cục Quản lý xuất nhập cảnh Việt Nam
						<br>
						– Đáp ứng yêu cầu về tiếng Nhật tùy theo chương trình mà học viên đăng ký
						<br>
						&#160&#160&#160&#160• Chương trình THPT 3.5 năm, tiếng Nhật tối thiểu N5
						<br>
						&#160&#160&#160&#160• Chương trình THPT 1.5 năm, tiếng Nhật tối thiểu N4
						<br>
						&#160&#160&#160&#160• Chương trình THPT 1 năm, tiếng Nhật tối thiểu đạt N3
						<br>
						– Tài chính: Người bảo lãnh cho du học sinh cần phải đảm bảo chi trả được cho toàn bộ chi phí trong suốt quá trình học tập. Sổ tiết kiệm có thời hạn trên 3 tháng tính từ thời điểm nộp hồ sơ và số dư tối thiểu theo quy định của Cục xuất nhập cảnh.
					</p>
					<h4>2. Du học Nhật Bản hệ học tiếng</h4>
					<p class="doanvanban">
						Đối với các du học sinh theo học tại các trường Nhật ngữ ngoài được học tiếng Nhật một cách bài bản. Trường học còn tổ chức các khóa ôn luyện cho kỳ thi năng lực tiếng Nhật (JLPT) và kỳ thi đại học (EJU) dành cho sinh viên quốc tế có mong muốn học đại học tại Nhật. Nếu bạn muốn học đại học bằng tiếng Nhật thì việc theo học tại các trường Nhật ngữ là điều bắt buộc.
						<br>
						<br>
						Theo học các trường Nhật ngữ không cần điều kiện quá khắt khe. Bạn chỉ cần đáp ứng các điều kiện du học Nhật Bản như:
						<br>
						– Tốt nghiệp THPT tại Việt Nam
						<br>
						– Điểm GPA tại trường THPT từ 6.0 trở lên, số buổi nghỉ học không quá 10 buổi (yêu cầu này có thể thay đổi với các trường Nhật ngữ)
						<br>
						– Xếp loại hạnh kiểm: khá, tốt
						<br>
						– Học sinh không có tiền án tiền sự. Không thuộc vào diện cấm xuất cảnh của Cục Quản lý xuất nhập cảnh Việt Nam
						<br>
						– Tài chính: Người bảo lãnh đảm bảo được việc chi trả các khoản phí cho du học sinh trong suốt quá trình học tại trường, số tiết kiệm phải còn thời hạn trên 3 tháng và đạt số dư tối thiểu theo quy định của Cục Quản lý xuất nhập cảnh.
					</p>
					<h4>3. Điều kiện du học Nhật Bản hệ cao đẳng, đại học</h4>
					<p class="doanvanban">
						Nhật Bản là quốc gia có hệ thống giáo dục bậc nhất với nhiều trường cao đẳng, đại học thuộc vào hàng top trên thế giới. Tính đến năm 2020, đất nước này có khoảng 700 trường đại học, 60 trường cao đẳng. Sinh viên theo học hệ cao đẳng hết từ 1 – 3 năm, thời gian theo học hệ đại học tối đa là 4 năm. Riêng đối với các ngành như Y, Nha khoa, Thú y sẽ học 6 năm. Các trường đại học, cao đẳng tại Nhật được phân làm 3 loại:
						<br>
						–  Trường Quốc lập (do nhà nước quản lý)
						<br>
						– Trường Công lập (do chính quyền địa phương như các tỉnh thành lập và quản lý)
						<br>
						– Trường Dân lập (do cá nhân tự thành lập và quản lý)
						<br>
						<br>
						<strong>Yêu cầu về trình độ học vấn:</strong>
						<br>
						+ Hoàn thành chương trình THPT (không quá 4 năm từ thời điểm du học Nhật Bản)
						<br>
						+ Đối với những ứng viên đã tốt nghiệp trung cấp, cao đẳng, đại học thì thời gian có thể nhiều hơn (6 năm)
						<br>
						+ Độ tuổi từ 18 – 30, tuổi của bạn càng thấp thì cơ hội xét duyệt hồ sơ sẽ cao hơn
						<br>
						+ Điểm trung bình môn học GPA tại trường THPT từ 6.0 trở lên và không có môn nào bị điểm kém.
						<br>
						+ Đối với trường hợp GPA 5.0 vẫn có thể đi du học Nhật Bản, tuy nhiên chỉ có thể đi được những trường nhỏ hoặc ít danh tiếng.
						<br>
						<br>
						<strong>Yêu cầu về trình độ tiếng Nhật:</strong>
						<br>
						+ Ứng viên phải đạt điều kiện tiếng Nhật tối thiểu từ N5 mới có thể làm hồ sơ du học Nhật Bản, nếu không có phải học khóa đào tạo tiếng Nhật từ 4 – 6 tháng để đạt được trình độ tiếng Nhật N5 yêu cầu.
						<br>
						+ Đối với những bạn không đủ tiêu chuẩn đầu vào về tiếng Nhật của trường mình đăng ký, các bạn có thể học dự bị trong 1 năm ở Nhật Bản để đạt được trình độ từ N3
						<br>
						<br>
						<strong>Yêu cầu về tài chính:</strong>
						<br>
						Việc chứng minh tài chính khi đi du học Nhật Bản là bắt buộc đối với tất cả ứng viên. Trước khi đi du học bạn phải đảm bảo được nguồn tài chính chi trả trong thời gian ít nhất là 1 năm học. Ngoài ra, điều kiện du học Nhật Bản là phải có người bảo lãnh tài chính. Người đó có thể là bố mẹ và có thu nhập ổn định (tối thiểu 25 triệu/tháng). Sổ tiết kiệm hoặc tài khoản ngân hàng phải có số dư tối thiểu 500 triệu đồng và phải gửi vào ngân hàng trước thời gian làm hồ sơ 6 tháng.
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