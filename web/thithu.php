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
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/thithu_style.php">
    <link rel="stylesheet" type="text/css" href="../css/slick.css">
    <link rel="icon" href="../images/title/titleLogo.png" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="../images/title/titleLogo.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Thi thử</title>
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


    <div id="space"></div>

    <section class="khoa_hoc">
        <div class="tieu_de">
            <hr>
            <p>Ôn thi JLPT</p>
            <hr>
        </div>
        <div class="content">
            <div class="select">
                <p>JLPT</p>
            </div>
            <div class="list">
                <div class="element">
                    <p class="level">N5</p>
                    <hr>
                    <p>Số câu hỏi:</p>
                    <p class="value">50 câu</p>
                    <p>Thời gian làm:</p>
                    <p class="value">180 câu</p>
                    <p class="btn_dang_ky"><a target="_blank" href="https://drive.google.com/file/d/1qVRinbEvmrJbxgWBwoeiEKUTmjhCmMiR/view?fbclid=IwAR0a3e1t3ktjkhTDuH5k4tJKECKE3i33Mf_WH0yIkpeK2IuqxGa6YhQI6Jg"><button>Thi thử ngay</button></a></p>
                </div>
                <div class="element">
                    <p class="level">N4</p>
                    <hr>
                    <p>Số câu hỏi:</p>
                    <p class="value">50 câu</p>
                    <p>Thời gian làm:</p>
                    <p class="value">180 câu</p>
                    <p class="btn_dang_ky"><a target="_blank" href="https://drive.google.com/file/d/1qVRinbEvmrJbxgWBwoeiEKUTmjhCmMiR/view?fbclid=IwAR0a3e1t3ktjkhTDuH5k4tJKECKE3i33Mf_WH0yIkpeK2IuqxGa6YhQI6Jg"><button>Thi thử ngay</button></a></p>
                </div>
                <div class="element">
                    <p class="level">N3</p>
                    <hr>
                    <p>Số câu hỏi:</p>
                    <p class="value">50 câu</p>
                    <p>Thời gian làm:</p>
                    <p class="value">180 câu</p>
                    <p class="btn_dang_ky"><a target="_blank" href="https://drive.google.com/file/d/1qVRinbEvmrJbxgWBwoeiEKUTmjhCmMiR/view?fbclid=IwAR0a3e1t3ktjkhTDuH5k4tJKECKE3i33Mf_WH0yIkpeK2IuqxGa6YhQI6Jg"><button>Thi thử ngay</button></a></p>
                </div>
                <div class="element">
                    <p class="level">N2</p>
                    <hr>
                    <p>Số câu hỏi:</p>
                    <p class="value">50 câu</p>
                    <p>Thời gian làm:</p>
                    <p class="value">180 câu</p>
                    <p class="btn_dang_ky"><a target="_blank" href="https://drive.google.com/file/d/1qVRinbEvmrJbxgWBwoeiEKUTmjhCmMiR/view?fbclid=IwAR0a3e1t3ktjkhTDuH5k4tJKECKE3i33Mf_WH0yIkpeK2IuqxGa6YhQI6Jg"><button>Thi thử ngay</button></a></p>
                </div>
                <div class="element">
                    <p class="level">N1</p>
                    <hr>
                    <p>Số câu hỏi:</p>
                    <p class="value">50 câu</p>
                    <p>Thời gian làm:</p>
                    <p class="value">180 câu</p>
                    <p class="btn_dang_ky"><a target="_blank" href="https://drive.google.com/file/d/1qVRinbEvmrJbxgWBwoeiEKUTmjhCmMiR/view?fbclid=IwAR0a3e1t3ktjkhTDuH5k4tJKECKE3i33Mf_WH0yIkpeK2IuqxGa6YhQI6Jg"><button>Thi thử ngay</button></a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="khoa_hoc">
        <div class="tieu_de">
            <hr>
            <p>Ôn thi NAT-TEST</p>
            <hr>
        </div>
        <div class="content">
            <div class="select">
                <p>NAT-TEST</p>
            </div>
            <div class="list">
                <div class="element">
                    <p class="level">5Q</p>
                    <hr>
                    <p>Số câu hỏi:</p>
                    <p class="value">50 câu</p>
                    <p>Thời gian làm:</p>
                    <p class="value">180 câu</p>
                    <p class="btn_dang_ky"><a target="_blank" href="https://drive.google.com/file/d/1qVRinbEvmrJbxgWBwoeiEKUTmjhCmMiR/view?fbclid=IwAR0a3e1t3ktjkhTDuH5k4tJKECKE3i33Mf_WH0yIkpeK2IuqxGa6YhQI6Jg"><button>Thi thử ngay</button></a></p>
                </div>
                <div class="element">
                    <p class="level">4Q</p>
                    <hr>
                    <p>Số câu hỏi:</p>
                    <p class="value">50 câu</p>
                    <p>Thời gian làm:</p>
                    <p class="value">180 câu</p>
                    <p class="btn_dang_ky"><a target="_blank" href="https://drive.google.com/file/d/1qVRinbEvmrJbxgWBwoeiEKUTmjhCmMiR/view?fbclid=IwAR0a3e1t3ktjkhTDuH5k4tJKECKE3i33Mf_WH0yIkpeK2IuqxGa6YhQI6Jg"><button>Thi thử ngay</button></a></p>
                </div>
                <div class="element">
                    <p class="level">3Q</p>
                    <hr>
                    <p>Số câu hỏi:</p>
                    <p class="value">50 câu</p>
                    <p>Thời gian làm:</p>
                    <p class="value">180 câu</p>
                    <p class="btn_dang_ky"><a target="_blank" href="https://drive.google.com/file/d/1qVRinbEvmrJbxgWBwoeiEKUTmjhCmMiR/view?fbclid=IwAR0a3e1t3ktjkhTDuH5k4tJKECKE3i33Mf_WH0yIkpeK2IuqxGa6YhQI6Jg"><button>Thi thử ngay</button></a></p>
                </div>
                <div class="element">
                    <p class="level">2Q</p>
                    <hr>
                    <p>Số câu hỏi:</p>
                    <p class="value">50 câu</p>
                    <p>Thời gian làm:</p>
                    <p class="value">180 câu</p>
                    <p class="btn_dang_ky"><a target="_blank" href="https://drive.google.com/file/d/1qVRinbEvmrJbxgWBwoeiEKUTmjhCmMiR/view?fbclid=IwAR0a3e1t3ktjkhTDuH5k4tJKECKE3i33Mf_WH0yIkpeK2IuqxGa6YhQI6Jg"><button>Thi thử ngay</button></a></p>
                </div>
                <div class="element">
                    <p class="level">1Q</p>
                    <hr>
                    <p>Số câu hỏi:</p>
                    <p class="value">50 câu</p>
                    <p>Thời gian làm:</p>
                    <p class="value">180 câu</p>
                    <p class="btn_dang_ky"><a target="_blank" href="https://drive.google.com/file/d/1qVRinbEvmrJbxgWBwoeiEKUTmjhCmMiR/view?fbclid=IwAR0a3e1t3ktjkhTDuH5k4tJKECKE3i33Mf_WH0yIkpeK2IuqxGa6YhQI6Jg"><button>Thi thử ngay</button></a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="khoa_hoc">
        <div class="tieu_de">
            <hr>
            <p>Ôn thi TOP J</p>
            <hr>
        </div>
        <div class="content">
            <div class="select">
                <p>TOP J</p>
            </div>
            <div class="list">
                <div class="element">
                    <p class="level">Sơ cấp</p>
                    <hr>
                    <p>Số câu hỏi:</p>
                    <p class="value">50 câu</p>
                    <p>Thời gian làm:</p>
                    <p class="value">180 câu</p>
                    <p class="btn_dang_ky"><a target="_blank" href="https://drive.google.com/file/d/1qVRinbEvmrJbxgWBwoeiEKUTmjhCmMiR/view?fbclid=IwAR0a3e1t3ktjkhTDuH5k4tJKECKE3i33Mf_WH0yIkpeK2IuqxGa6YhQI6Jg"><button>Thi thử ngay</button></a></p>
                </div>
                <div class="element">
                    <p class="level">Trung cấp</p>
                    <hr>
                    <p>Số câu hỏi:</p>
                    <p class="value">50 câu</p>
                    <p>Thời gian làm:</p>
                    <p class="value">180 câu</p>
                    <p class="btn_dang_ky"><a target="_blank" href="https://drive.google.com/file/d/1qVRinbEvmrJbxgWBwoeiEKUTmjhCmMiR/view?fbclid=IwAR0a3e1t3ktjkhTDuH5k4tJKECKE3i33Mf_WH0yIkpeK2IuqxGa6YhQI6Jg"><button>Thi thử ngay</button></a></p>
                </div>
                <div class="element">
                    <p class="level">Cao cấp</p>
                    <hr>
                    <p>Số câu hỏi:</p>
                    <p class="value">50 câu</p>
                    <p>Thời gian làm:</p>
                    <p class="value">180 câu</p>
                    <p class="btn_dang_ky"><a target="_blank" href="https://drive.google.com/file/d/1qVRinbEvmrJbxgWBwoeiEKUTmjhCmMiR/view?fbclid=IwAR0a3e1t3ktjkhTDuH5k4tJKECKE3i33Mf_WH0yIkpeK2IuqxGa6YhQI6Jg"><button>Thi thử ngay</button></a></p>
                </div>
                 <div class="element">
                    <p class="level">Sơ trung cấp</p>
                    <hr>
                    <p>Số câu hỏi:</p>
                    <p class="value">50 câu</p>
                    <p>Thời gian làm:</p>
                    <p class="value">180 câu</p>
                    <p class="btn_dang_ky"><a target="_blank" href="https://drive.google.com/file/d/1qVRinbEvmrJbxgWBwoeiEKUTmjhCmMiR/view?fbclid=IwAR0a3e1t3ktjkhTDuH5k4tJKECKE3i33Mf_WH0yIkpeK2IuqxGa6YhQI6Jg"><button>Thi thử ngay</button></a></p>
                </div>
            </div>
        </div>
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

<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/slick.min.js"></script>
<script type="text/javascript" src="../js/trangChu.js"></script>

</html>