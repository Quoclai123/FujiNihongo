<!DOCTYPE HTML>
<html>
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
					<h3 class="tieudebaiviet">Hành trang du học Nhật Bản</h3>
					<h4>DU HỌC SINH ĐƯỢC MANG GÌ KHI ĐI DU HỌC ???</h4>
					<p class="doanvanban">Vậy là bạn nhận được tư cách lưu trú và chuẩn bị sang Nhật du học? Thật là 		nhiều việc cần phải làm và một trong những việc đó là mang gì đi trong lần đầu sang Nhật.
						<br>
						Làm sao để việc xuất cảnh lần đầu thật thuận lợi, suôn sẻ.
						<br>
						Sau đây là một vài kinh nghiệm nho nhỏ được  tổng hợp được xin chia sẻ với các bạn chuẩn bị hành trang sang Nhật nè.
						<br>
						Về vé máy bay FUJI khuyến khích các bạn nên đặt Vietnam Airline sẽ không bị delay quá nhiều và hành lý ký gửi cũng được bao gồm trong vé đó. </p>
					<h4>1. HÀNH LÝ</h4>
					<p class="doanvanban">
						Hành lý mang theo thường gồm 2 loại: Hành lý ký gửi và Hành lý xách tay lên máy bay. Thông thường số cân sẽ như sau:
						<br>
						&#160&#160&#160&#160• Hành lý ký gửi: 20 kg ~ 46kg (tuỳ vé và hang máy bay) 
						<br>
						&#160&#160&#160&#160• Hành lý xách tay: Túi xách hoặc balo không quá 12 kg
						<br>
						&#160&#160&#160&#160• Phải kiểm tra số ký mang theo khi mua vé
						<br>
						&#160&#160&#160&#160• Nếu bạn mang chất lỏng, dao kéo thì bạn phải để trong hành lý ký gửi và mang theo đúng quy định vì lý do an ninh. Đối với những vật dụng như dầu gội, kem đánh rang, nước hoa… nên bọc đầu chai lại kỹ càng để trách đổ ra hành lý.
						<br>
						&#160&#160&#160&#160• Nhớ cân ký hành lý trước khi ra sân bay.
						<br>
						&#160&#160&#160&#160• Vali nên có bánh xe có thể đẩy được
						<br>
						<strong>Đặc biệt chú ý:</strong> Nếu bạn mua vé có hành lý ký gửi là 40kg thì sẽ phải chia ra làm 2 kiện và mỗi kiện không được phép nặng quá 30kg. Không nên mang nhiều vali vì sẽ dễ thất lạc, không kiểm soát được hành lý.
					</p>
					<h4>2. HỘ CHIẾU:</h4>
					<p class="doanvanban">Phải luôn mang theo và giữ cẩn thận bên mình</p>
					<h4>3. GIẤY TƯ CÁCH LƯU TRÚ (COE)</h4>
					<p class="hinhanh"><img class="hinh1" src="../images/duhocnhatban/coe.jpg" alt=""></p>
					<h4>4. GIẤY CHO PHÉP LÀM THÊM</h4>
					<h4>5. GIẤY NHẬP HỌC</h4>
					<h4>6. VÉ MÁY BAY</h4>
					<p class="doanvanban">
						• Đây là giấy tờ quan trọng không được phép quên
						<br>
						• Những vẫn dụng này nên để trong một túi nhỏ bên mình mang theo ngoài hành lý xách tay và hành lý kí gửi
						<br>
						• Khi ký gửi hành lý và lấy Broading Pass (Vé lên máy bay) thì nhớ cầm theo giấy này 
					</p>
					<h4>7. GIẤY TỜ KHÁC:</h4>
					<p class="doanvanban">
						Những giấy tờ khác như CMND, học bạ, bằng TN, giấy khai sinh: không cần và không nên mang theo để trách thất lạc, nếu cần sau này có thể gửi bản scan qua.
					</p>
					<h4>8. TÚI NHỎ:</h4>
					<p class="doanvanban">
						Trong túi nên có:
						<br>
						&#160&#160&#160&#160• 1 cây viết mực đen để điền thông tin hoặc ghi chép
						<br>
						&#160&#160&#160&#160• 1 cuốn sổ nhỏ để ghi chép, trong sổ nên có những số điện thoại, địa chỉ của trường, số điện thoại người đón tại sân bay, một số điện thoại dùng cho trường hợp khẩn cấp.
					</p>
					<h4>9. TIỀN</h4>
					<p class="doanvanban">
						• Nên đổi tiền Yên sẵn tại Việt Nam và đổi ra nhiều mệnh giá
						<br>
						• Để tiền vào bóp và nếu có thể nên chia tiền để ở nhiều nơi như trong ví, trong túi xách
						<br>
						• Ví nên có chỗ để tiền xu
						<br>
						• Nên mang theo 20 – 30 man (40 - 60 triệu) dành đủ cho 2 – 3 tháng đầu khi sang Nhật vì có thể những tháng đầu tiền chưa có biết cách sử dụng máy ATM, hay chưa có thẻ ngân hàng, chưa kiếm được việc làm thêm
					</p>
					<h4>10. ẢNH THẺ</h4>
					<p class="doanvanban">
						Chụp ảnh lấy ngay bên Nhật khoảng 700 yên, giá không rẻ nên mang nhiều ảnh theo, đủ dùng trong những năm sang đây đi học (khoảng vài chục tấm), gồm có:
						<br>
						• Ảnh3x4
						<br>
						• Ảnh 4x6
						<br>
						• Nên chọn ảnh rõ nét, mặc áo sơ mi trắng, tóc tai gọn gàng để có thể sử dụng khi đi xin việc
						<br>
						• Nên lưu ảnh thẻ vào USB hoặc trên google drive để sau này qua Nhật in cho tiện
					</p>
					<h4>11. QUẦN ÁO, GIÀY</h4>
					<p class="doanvanban">
						• Mang theo quần áo đủ sử dụng trong vài tuần đầu tiên khi chưa biết chỗ mua đồ. Vì quần áo bên Nhật cũng tương đối rẻ và bền lại hợp thời tiết nên có thể sang đó mua thêm
						<br>
						• Nên mang đủ dùng những quần áo mỏng, đồ mặc ở nhà, đồ lót . . .
						<br>
						• Mang theo 1 áo ấm, áo khoác mỏng nhẹ. Quần áo rét thì có thể mua tại Nhật với giá cũng hợp lý và không phải xách theo nặng hành lý
						<br>
						• Áo sơ mi trắng, quần tây, áo vest (không bắt buộc), váy công sở hoặc áo dài: mang theo để mặc khi tham gia lễ nhập học
						<br>
						• Vớ: vì thời tiết bên Nhật cũng khá lạnh nên mang theo vớ để đc giữ ấm 
						<br>
						• Giày: Có thể mang 1 đôi cao gót, giày tây và 1 đôi giày thể thao cho thời gian đầu
					</p>
					<h4>12. VẬT DỤNG CÁ NHÂN</h4>
					<p class="doanvanban">
						• Kem đánh răng, dầu gội đầu, dầu tắm…: mang theo tuýp nhỏ, đủ dùng, và gói cẩn thận
						<br>
						• Khăn mặt và khăn tắm: mang theo đủ dùng
						<br>
						• Đồ cá nhân đặc biệt (đối với các bạn nữ): nên mang theo đủ dùng trong 2 – 3 tuần làm quen với cuộc sống
						<br>
						• Đồ dùng khác như móc áo, gương, xà bông giặt đồ…: ở các tiệm 100 yên hoặc combini của Nhật có đầy đủ và giá rẻ.
					</p>
					<h4>13. THUỐC VÀ ĐỒ DÙNG SỨC KHỎE</h4>
					<p class="doanvanban">
						• Mang theo 1 số loại thuốc thông thường như: nhức đầu, cảm sốt, đau bụng, sổ mũi, vitamin C… hoặc những loại thuốc cho bệnh riêng
						<br>
						• Mang theo băng keo cá nhân, bông băng
					</p>
					<h4>14. SÁCH VỞ</h4>
					<p class="doanvanban">
						• Vì sẽ học theo giáo trình của trường nên không cần mang theo quá nhiều sách vở, chỉ cần mang theo tập đã ghi chép, một số sách thường dùng, 1 quyển tập hoặc sổ ghi chép
						<br>
						• Tập viết, bút thì có thể mua ở cửa hàng 100 yên hoặc combini vừa rẻ vừa nhiều loại
					</p>
					<h4>15. KIM TỪ ĐIỂN, TỪ ĐIỂN GIẤY</h4>
					<p class="doanvanban">
						Nên mang từ điển giấy, còn kim từ điển thì nên mua ở Nhật. Trong trường hợp nếu bắt buộc thì có thể mua tại Việt Nam
					</p>
					<h4>16. CON DẤU</h4>
					<p class="doanvanban">
						Có thể làm ở Việt Nam hoặc sang Nhật làm
					</p>
					<h4>17. ĐỒ DÙNG ĐIỆN</h4>
					<p class="doanvanban">
						• Vì điện ở Nhật là 110V và ổ cắm dẹp nên phải mua ổ cắm đổ điện để sử dụng. Trong combini cũng có bán
						<br>
						• Mang theo laptop
					</p>
					<h4>18. THỰC PHẨM</h4>
					<p class="doanvanban">
						• Ruốc, gia vị nấu ăn, nước tương, tương ớt,... (mang vừa đủ sử dụng trong thời gian đầu, có thể mua tại những cửa hàng bán đồ Việt Nam)
						<br>
						• Mì gói (mang ít phòng TH không quen ăn đồ ăn Nhật) 
						<br>
						• Không nên mang nhiều vì dễ bị kiểm tra hành lý
						<br>
						<strong>Đây là những điều đúc kết từ kinh nghiệm hỗ trợ du học sinh của Fuji. Nếu bạn thắc mắc về du học hoặc khóa học tiếng Nhật liên hệ ngay Fuji để được giải đáp nhé</strong>
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