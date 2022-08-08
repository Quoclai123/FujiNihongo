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
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/cohoivieclam.css">
    <link rel="stylesheet" href="../css/baivietchvl.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="icon" href="../images/title/titleLogo.png" type="image/x-icon" />
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Top 10 nghề dễ xin việc nhất cho người biết tiếng Nhật</title>
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
        <article class="post">
            <h3>Top 10 nghề dễ xin việc nhất cho người biết tiếng Nhật</h3>
            <div class="post-by">
                <span>Đăng bởi - Nguyễn Văn D</span>
                <span>Ngày đăng : ngày 14 tháng 2 năm 2019</span>
            </div>
            <img src="../images/cohoi/4.jpg" alt="">
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
                        1. Hành chính tổng vụ
                    </h2>
                    <p>
                        Nhu cầu tuyển nhân viên hành chính tổng vụ là rất lớn ở các công ty Nhật, đặc biệt là những công
                        ty chuyên về sản xuất, nghề này hứa hẹn vẫn còn sức nóng trong những năm sắp tới.
                    </p>
                    <p>
                        - Mức lương trung bình: 500 - 800 USD
                    </p>
                    <p>
                        - Công việc: đảm nhiệm các công tác liên quan đến người lao động: chấm công, tính lương, tuyển
                        dụng, xây dựng chính sách… và tham mưu cho cấp trên về công tác hành chính của công ty
                    </p>
                    <p>
                        - Yêu cầu: tiếng Nhật tối thiểu N3, có kinh nghiệm làm về hành chính, nhân sự, tính cách nhanh
                        nhẹn, cẩn thận và có khả năng giải quyết các mâu thuẫn nội bộ
                    </p>
                    <h2>
                        2. Biên phiên dịch tiếng Nhật
                    </h2>
                    <p>
                        Cơ hội nghề nghiệp luôn rộng mở với những người chọn con đường biên, phiên dịch. Ngoài công việc
                        chính với mức lương cao, bạn còn có thể kiếm thêm thu nhập từ vốn tiếng Nhật giàu có của mình.
                    </p>
                    <p>
                        - Mức lương trung bình: trung bình: 500 - 1200USD
                    </p>
                    <p>
                        - Công việc: phiên dịch các cuộc đối thoại cho quản lý người Nhật, biên dịch các tài liệu, giấy
                        tờ khi cần thiết
                    </p>
                    <p>
                        - Yêu cầu: tiếng Nhật tối thiểu N3, có khả năng chịu đựng áp lực công việc, ứng biến linh hoạt
                        và phải có tính trách nhiệm cao để đảm bảo mức độ chính xác khi biên, phiên dịch
                    </p>
                    <h2>
                        3. Giáo viên tiếng Nhật
                    </h2>
                    <p>
                        Nếu bạn biết tiếng Nhật và mong muốn có một công việc tiếng Nhật ổn định, ít áp lực, thu nhập
                        khá thì Giáo viên tiếng Nhật là lựa chọn mà bạn nên cân nhắc.
                    </p>
                    <p>
                        - Mức lương trung bình: 500 - 1000 USD
                    </p>
                    <p>
                        - Công việc: Giảng dạy tiếng Nhật cho các đơn vị xuất khẩu lao động hoặc các trung tâm Nhật ngữ
                    </p>
                    <p>
                        - Yêu cầu: tiếng Nhật tối thiểu N3, có tác phong sư phạm, khả năng truyền tải thông tin tốt và
                        phải có tâm huyết với nghề
                    </p>
                    <h2>
                        4. IT Comtor
                    </h2>
                    <p>
                        Bạn gần như trở thành “linh hồn” của cả đội khi chọn nghề Comtor, chẳng những có cơ hội nâng cao
                        kiến thức mà bạn còn kiếm được rất nhiều tiền nếu có nhiều năm kinh nghiệm.
                    </p>
                    <p>
                        - Mức lương trung bình: 700 - 1000 USD
                    </p>
                    <p>
                        - Công việc: Là người dịch các tài liệu, email liên quan đến dự án và lắng nghe yêu cầu của
                        khách hàng để truyền đạt lại với đội ngũ nhân viên
                    </p>
                    <p>
                        - Yêu cầu: tiếng Nhật tối thiểu N2, thông thạo 4 kỹ năng nghe-nói-đọc-viết, có hiểu biết về
                        ngành Công nghệ thông tin, khả năng giao tiếp khéo léo và khả năng truyền đạt tốt
                    </p>
                    <div class="banner">
                        <img src="../images/cohoi/banner4.jpg" alt="">
                    </div>
                    <h2>
                        5. Kỹ sư cầu nối
                    </h2>
                    <p>
                        Lương cao, sự nghiệp vững chắc, cơ hội thăng tiến cao là những điều bạn sẽ nhận được nếu chọn
                        nghề Kỹ sư cầu nối
                    </p>
                    <p>
                        - Mức lương trung bình: 1000 - 3000 USD
                    </p>
                    <p>
                        - Công việc: Là người kết nối giữa nhóm kỹ thuật với khách hàng, đảm bảo việc truyền thông tin
                        mang lại hiệu quả, công việc được thông suốt
                    </p>
                    <p>
                        - Yêu cầu: tiếng Nhật tối thiểu N3 (thường là N2 trở lên), có khả năng lập trình, quản lý dự án,
                        chịu được áp lực cao và làm việc linh hoạt
                    </p>
                    <h2>
                        6. Kỹ sư/ Nhân viên kỹ thuật
                    </h2>
                    <p>
                        Các công ty sản xuất Nhật Bản ngày càng “mọc lên như nấm”, nhu cầu tuyển Kỹ sư/ Nhân viên kỹ
                        thuật cũng ngày một gia tăng, không khó để kiếm được một chỗ đứng nếu bạn có trong tay tiếng
                        Nhật.
                    </p>
                    <p>
                        - Mức lương trung bình: 400 - 700 USD
                    </p>
                    <p>
                        - Công việc: thực hiện các yêu cầu của quản lý liên quan đến kỹ thuật như thiết kế, sửa chữa,
                        bảo dưỡng…
                    </p>
                    <p>
                        - Yêu cầu: tiếng nhật tối thiểu N3, có kiến thức về lĩnh vực làm việc (điện, điện lạnh, dệt
                        may…), học hỏi nhanh vì công việc thường xuyên tiếp xúc với máy móc hiện đại
                    </p>
                    <h2>
                        7. Quản lý sản xuất
                    </h2>
                    <p>
                        Là người nắm giữ vai trò quan trọng của bộ phận sản xuất, tuy áp lực công việc cao nhưng lương
                        thưởng rất hấp dẫn, vị trí Quản lý sản xuất là mơ ước của nhiều người.
                    </p>
                    <p>
                        - Mức lương trung bình: 700 - 1500 USD
                    </p>
                    <p>
                        - Công việc: giám sát tiến độ sản xuất, kiểm tra và đảm bảo chất lượng sản phẩm trong nhà máy
                    </p>
                    <p>
                        - Yêu cầu: tiếng Nhật tối thiểu N3, có nhiều năm kinh nghiệm trong lĩnh vực sản xuất, có kỹ năng
                        tổ chức và óc phán đoán, có thể ra quyết định nhanh
                    </p>
                    <h2>
                        8. Xuất nhập khẩu
                    </h2>
                    <p>
                        Lương cao, ít tăng ca, nhiều cơ hội thăng tiến, thỉnh thoảng được đi công tác ở nước ngoài là
                        những yếu tố hấp dẫn mà nghề này mang lại.
                    </p>
                    <p>
                        - Mức lương trung bình: 500 - 900 USD
                    </p>
                    <p>
                        - Công việc: quản lý giấy tờ xuất nhập khẩu, làm việc với khách hàng nước ngoài và cơ quan hải
                        quan, kiểm soát hàng hóa…
                    </p>
                    <p>
                        - Yêu cầu: tiếng Nhật hoặc tiếng Anh thông thạo, nghiệp vụ xuất nhập khẩu phải vững, kỹ năng
                        giao tiếp, đàm phán tốt
                    </p>
                    <h2>
                        9. Chăm sóc khách hàng
                    </h2>
                    <p>
                        Không yêu cầu nhiều kinh nghiệm, chỉ với vốn tiếng Nhật trong tay, bạn vẫn có thể dễ dàng được
                        chọn để trở thành Nhân viên chăm sóc khách hàng
                    </p>
                    <p>
                        - Mức lương trung bình: 500-700 USD
                    </p>
                    <p>
                        - Công việc: hỗ trợ trả lời các thắc mắc, phàn nàn của khách hàng, tìm kiếm khách hàng mới cho
                        doanh nghiệp
                    </p>
                    <p>
                        - Yêu cầu: tiếng Nhật N3, khả năng giao tiếp lưu loát, thấu hiểu tâm lý khách hàng và đặc biệt
                        phải rất nhẫn nại
                    </p>
                    <h2>
                        10. Nhân viên kinh doanh
                    </h2>
                    <p>
                        Bất cứ doanh nghiệp nào cũng cần những người nhân viên kinh doanh ưu tú, bạn sẽ không bao giờ lo
                        lắng đến chuyện thất nghiệp nếu theo đuổi nghề này.
                    </p>
                    <p>
                        - Mức lương trung bình: 500 - 1500 USD
                    </p>
                    <p>
                        - Công việc: nghiên cứu thị trường, tìm kiếm khách hàng tiềm năng nhằm mở rộng thị phần cho
                        doanh nghiệp, hỗ trợ giải đáp thắc mắc về sản phẩm khi cần thiết
                    </p>
                    <p>
                        - Yêu cầu: tiếng Nhật tối thiểu N3, yêu thích giao tiếp với mọi người, khả năng đàm phán, thương
                        lượng tốt
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
                    <a href="topvieclam.php" title=""><img src="../images/cohoi/1.jpg" alt=""></a>
                </div>
                <div class="post-title">
                    <a href="topvieclam.php" title="">Top những việc làm tiếng Nhật phổ thông nhất hiện nay</a>
                    <div class="post-date">
                        <span>ngày 25 tháng 5 năm 2019</span>
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
                        <span>ngày 25 tháng 8 năm 2019</span>
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
</body>

</html>