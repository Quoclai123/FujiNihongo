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
    <!-- Font awsome CSS -->
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <!-- main style-->
    <link rel="icon" href="../images/title/titleLogo.png" type="image/x-icon" />
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/baivietchvl.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Top những việc làm tiếng Nhật phổ thông nhất hiện nay</title>
</head>

<body>
    <<header>
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
        <article class="post">
            <h3>Top những việc làm tiếng Nhật phổ thông nhất hiện nay</h3>
            <div class="post-by">
                <span>Đăng bởi - Nguyễn Văn A</span>
                <span>Ngày đăng : ngày 14 tháng 2 năm 2019</span>
            </div>
            <img src="../images/cohoi/1.jpg" alt="">
            <div class="post-content-wrapper">
                <div class="social-list">
                    <h4>Chia sẻ</h4>
                    <ul class="social-items">
                        <li><a href="#"><i class="fab fa-facebook-f fb_icon"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter tw_icon"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in link_icon"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram in_icon"></i></a></li>
                    </ul>
                </div>
                <div class="post-content">
                    <p class="quite-speech">
                        <i class="fa fa-quote-right"></i>
                        Mặc dù tiếng anh là ngôn ngữ toàn cầu, nhưng tiếng Nhật chính là sự lựa chọn thông minh cho
                        những bạn muốn khác biệt, đây cũng là cơ hội giúp bạn có việc làm tiếng Nhật vô cùng tiềm năng.
                        Đặc biệt các thực tập sinh, du học sinh về nước với vốn tiếng Nhật sẵn có dễ dàng tìm kiếm cho
                        mình một công việc phù hợp với mức lương cực kì tốt.
                        tăng cơ hội nghề nghiệp tại các doanh nghiệp Nhật Bản.
                    </p>
                    <h2>
                        1. NHỮNG LỢI ÍCH KHI HỌC TIẾNG NHẬT
                    </h2>
                    <p>
                        Việc lựa chọn học thêm một ngôn ngữ khác, lại còn được xếp vào danh sách những ngôn ngữ khó học
                        nhất trên thế giới như tiếng Nhật không phải là điều dễ dàng. Tuy nhiên đừng vì thế mà nản lòng,
                        nếu học được tốt tiếng Nhật thì sẽ mang lại cho bạn rất nhiều lợi ích.
                    </p>
                    <p>
                        <b>Trước hết</b>, xứ sở hoa anh đào luôn được biết đến là một đất nước có nền văn hóa lâu đời
                        như văn hóa trà đạo, Kimono,... Biết tiếng Nhật đồng nghĩa với việc bạn có cơ hội tiếp cận trực
                        tiếp với những tinh hoa đó qua sách báo, phim ảnh,.. giúp bạn khám phá và đến gần hơn với văn
                        hóa, con người của cường quốc này.
                    </p>
                    <p>
                        <b>Thứ hai</b>, học tiếng Nhật giúp bạn có thể qua Nhật làm việc
                        Hiện nay sang Nhật làm việc đang là định hướng của nhiều thực tập sinh Việt, để có thể đặt chân
                        tới đất nước này làm việc yêu cầu phải biết tiếng Nhật được coi là điều kiện bắt buộc. Nếu bạn
                        muốn đi kỹ sư, kỹ thuật viên thì yêu cầu trình độ tiếng Nhật từ N4 trở lên, thực tập sinh thì
                        bạn sẽ được công ty đào tạo tiếng.
                    </p>
                    <p>
                        <b>Thứ ba</b>, học tiếng Nhật để đi du học Nhật Bản
                        Nếu bạn muốn lựa chọn Nhật là đất nước để đi du học thì việc biết tiếng Nhật là lợi thế không
                        nhỏ khi bạn có thể giảm bớt học phí cũng như rút ngắn được thời gian học tập tại trường. Hơn
                        nữa, nếu các bạn có thể giao tiếp bằng tiếng Nhật tốt thì sẽ không phải lo lắng về vấn đề việc
                        làm, cũng như những khi gặp khó khăn nơi đất khách quê người.
                    </p>
                    <p>
                        <b>Đặc biệt</b>, với nền kinh tế hàng đầu thế giới thì học tiếng Nhật được coi là tầm nhìn chiến
                        lược,
                        mở ra nhiều cơ hội việc làm tiềm năng trong tương lai.
                    </p>
                    <div class="banner">
                        <img src="../images/cohoi/banner1.jpg" alt="">
                    </div>
                    <h2>
                        2. CƠ HỘI VIỆC LÀM TIẾNG NHẬT
                    </h2>
                    <p>
                        <b>Làm biên dịch, phiên dịch</b>
                    </p>
                    <p>
                        Nhu cầu biên, phiên dịch tiếng Nhật của các công ty Nhật Bản tại Việt Nam hoặc công ty Việt Nam
                        làm việc với các đối tác Nhật Bản luôn không bao giờ cạn. Với trình độ tiếng Nhật của bạn từ N3
                        trở lên thì việc kiếm một công việc biên, phiên dịch với mức lương cao là không hề khó.
                    </p>
                    <p>
                        Nhiệm vụ: phiên/biên dịch các văn bản và tài liệu theo yêu cầu được giao, phiên dịch trong các
                        cuộc đối thoại Nhật- Việt
                    </p>
                    <p>
                        Kỹ năng cần thiết: khả năng chịu áp lực công việc nhất là áp lực về thời gian. Đòi hỏi sự cẩn
                        thận, trách nhiệm để đảm bảo độ chính xác lớn nhất.
                    </p>
                    <p>
                        Có khả năng xử lý thông tin và ứng biến cao độ với mọi tình huống bất ngờ có thể xảy ra.
                    </p>
                    <p>
                        Mức lương: dao động 500$-1500$/ 1 tháng
                    </p>
                    <p>
                        <b>
                            Làm giáo viên dạy tiếng Nhật
                        </b>
                    </p>
                    <p>
                        Ngày nay các trung tâm dạy tiếng Nhật, ôn thi JLPT mọc lên như “nấm”, nếu tính trên địa bàn Hà
                        Nội hiện có gần 50 trung tâm đào tạo tiếng Nhật , còn chưa kể đào tạo tiếng tại các công ty
                        XKLĐ. Với vốn tiếng Nhật của mình bạn hoàn toàn có thể đầu quân đứng lớp tại các trung tâm này,
                        nhận dạy học viên cá nhân hoặc thậm chí là các khách hàng doanh nghiệp.
                    </p>
                    <p>
                        Nhiệm vụ chính: tham gia giảng dạy cho người học tiếng Nhật
                    </p>
                    <p>
                        Trình độ học vấn: ứng viên thành thạo về tiếng Nhật, tối thiểu N3 trở nên. Ưu tiên có kinh
                        nghiệm giảng dạy.
                    </p>
                    <p>
                        Kỹ năng cần có: kỹ năng sư phạm, kỹ năng truyền tải thông tin tốt…
                    </p>
                    <p>
                        Mức lương: dao động trong khoảng 300$-600$/1 tháng, ngoài ra còn phụ thuộc vào trình độ và kinh
                        nghiệm.
                    </p>
                    <p>
                        <b>
                            Hướng dẫn viên du lịch
                        </b>
                    </p>
                    <p>
                        Như đã đề cập ở trên, hàng năm lượng khách Nhật Bản đến du lịch Việt Nam rất lớn. Các công ty du
                        lịch tại Việt Nam có nhu cầu tuyển hướng dẫn viên biết tiếng Nhật rất nhiều.
                    </p>
                    <p>
                        Bên cạnh đó bạn cũng có thể làm người dẫn tour cho khách du lịch Việt Nam sang Nhật tham quan.
                        Và dù là làm hướng dẫn viên theo chiều nào, thì mức lương của bạn cũng không thể thấp, hơn nữa
                        còn có cơ hội khám phá và du lịch nhiều nơi.
                    </p>
                    <p>
                        <b>
                            Nhân viên phát triển thị trường tại công ty XKLĐ Nhật
                        </b>
                    </p>
                    <p>
                        Nhật Bản hiện tại là thị trường khá hot, vì vậy nhiều công ty XKLĐ Nhật thành lập cho mình bộ
                        phận phát triển thị trường để liên hệ các xí nghiệp Nhật Bản tìm kiếm các đơn hàng về Việt Nam.
                    </p>
                    <p>
                        Các công ty XKLĐ thường đưa ra mức lương khá hấp dẫn cho vị trí này. Thông trường các nhân viên
                        sẽ liên tục di chuyển giữa 2 nước Việt Nam và Nhật Bản, vì vậy bạn có cơ hội khám phá và du lịch
                        tại xứ anh đào
                    </p>
                    <p>
                        <b>
                            Tự buôn bán, đánh hàng
                        </b>
                    </p>
                    <p>
                        Chắc hẳn việc "mua hàng nội địa Nhật" đã vô cùng quen thuộc khi bạn đi mua mĩ phẩm, quần áo,
                        điện tử hay bất cứ đồ thiết yếu nào khác. Hàng xuất xứ Nhật luôn được người Việt Nam ưu tiên bởi
                        chất lượng của nó. Vì vậy nếu biết tiếng Nhật, bạn có thể tự liên hệ mua hàng, mở cửa hiệu, giảm
                        chia sẻ lợi nhuận với các bên trung gian.
                    </p>
                    <p>
                        <b>
                            Làm việc tại các công ty xuất nhập khẩu
                        </b>
                    </p>
                    <p>
                        Nhật Bản luôn là 1 trong những đối tác thương mại lớn của Việt Nam. Các hoạt động xuất nhập khẩu
                        phần lớn là đều có móc nối với phía Nhật, nên việc có tiếng Anh là hoàn toàn không đủ nếu bạn
                        muốn xin vào làm tại các công ty xuất nhập khẩu. Vì vậy biết tiếng Nhật giúp bạn có mức lương và
                        cơ hội thăng tiến cao hơn.
                    </p>

                    <div class="post-response-count">
                        <ul class="tags">
                            <li class="tag-headline">Tags : </li>
                            <li><a href="#" title="">Piterson, </a></li>
                            <li><a href="#" title="">Cavien, </a></li>
                            <li><a href="#" title="">human, </a></li>
                            <li><a href="#" title="">master, </a></li>
                            <li><a href="#" title="">pleasure</a></li>
                        </ul>
                    </div>

                    <div class="comment-wrapper">
                        <div class="items-title">
                            <h3 class="title">Bình luận</h3>
                        </div>
                        <div class="comment-list-items">
                            <div class="comment-list-wrapper">
                                <div class="comment-list">
                                    <div class="comment-img">
                                        <img src="../images/cohoi/review_1.jpg" alt="member img"
                                            class="img-fluid">
                                    </div>
                                    <div class="comment-text">
                                        <div class="author-info">
                                            <div class="author-name">
                                                <a href="#" class="">Adam Smith</a>
                                                <span>ngày 20 tháng 5 năm 2021 10.45 AM</span>
                                            </div>
                                            <div class="reply-comment">
                                                <a href="#" title=""> <i class="fas fa-reply"></i> Trả lời</a>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            In faucibus, dui vel sagittis semper,
                                            purus nulla placerat nulla, ut pharetra erat quam in turpis. </p>
                                    </div>
                                </div>

                                <div class="comment-list reply-comment-text">
                                    <div class="comment-img">
                                        <img src="../images/cohoi/review_3.jpg" alt="member img"
                                            class="img-fluid">
                                    </div>
                                    <div class="comment-text">
                                        <div class="author-info">
                                            <div class="author-name">
                                                <a href="#" class="">Jonson Park</a>
                                                <span>ngày 20 tháng 5 năm 2021 10.45 AM</span>
                                            </div>
                                            <div class="reply-comment">
                                                <a href="#" title=""> <i class="fas fa-reply"></i> Trả lời</a>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            In faucibus, dui vel sagittis semper,
                                            purus nulla placerat nulla, ut pharetra erat quam in turpis. </p>
                                    </div>
                                </div>
                            </div>

                            <div class="comment-list-wrapper">
                                <div class="comment-list">
                                    <div class="comment-img">
                                        <img src="../images/cohoi/review_2.jpg" alt="member img"
                                            class="img-fluid">
                                    </div>
                                    <div class="comment-text">
                                        <div class="author-info">
                                            <div class="author-name">
                                                <a href="#" class="">Jonathon Smith</a>
                                                <span>ngày 20 tháng 5 năm 2021 10.45 AM</span>
                                            </div>
                                            <div class="reply-comment">
                                                <a href="#" title=""> <i class="fas fa-reply"></i> Trả lời</a>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            In faucibus, dui vel sagittis semper,
                                            purus nulla placerat nulla, ut pharetra erat quam in turpis. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  Leave Commnent Wrapper -->
                        <div class="leave-comment-wrapper">
                            <div class="items-title">
                                <h3 class="title">Viết bình luận</h3>
                            </div>
                            <div class="leave-comment">
                                <form action="#">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" placeholder="Tên">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" id="Bình luận" placeholder="Nội dung"></textarea>
                                    </div>


                                    <div class="submit-btn">
                                        <button type="submit" class="text-center">Gửi</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </article>

        <aside class="recent-post-wrapper">
            <div class="items-title">
                <h3 class="title">Bài đăng gần đây</h3>
            </div>

            <div class="single-post">
                <div class="recent-img">
                    <a href="dexinviec.php" title=""><img src="../images/cohoi/4.jpg" alt=""></a>
                </div>
                <div class="post-title">
                    <a href="dexinviec.php" title="">Top 10 nghề dễ xin việc nhất cho người biết tiếng Nhật</a>
                    <div class="post-date">
                        <span>ngày 25 tháng 8 năm 2019</span>
                    </div>
                </div>
            </div>

            <div class="single-post">
                <div class="recent-img">
                    <a href="#" title=""><img src="../images/cohoi/2.jpg" alt=""></a>
                </div>
                <div class="post-title">
                    <a href="#" title="">TOP 5 website tìm việc làm tiếng Nhật</a>
                    <div class="post-date">
                        <span>ngày 25 tháng 5 năm 2019</span>
                    </div>
                </div>
            </div>

            <div class="single-post">
                <div class="recent-img">
                    <a href="#" title=""><img src="../images/cohoi/3.jpg" alt=""></a>
                </div>
                <div class="post-title">
                    <a href="#" title="">Cơ hội việc làm tiếng Nhật trình độ từ N3 trở lên năm 2021</a>
                    <div class="post-date">
                        <span>ngày 25 tháng 8 năm 2019</span>
                    </div>
                </div>
            </div>

            
        </aside>
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