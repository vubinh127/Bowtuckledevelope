<?php
	session_start();
	if (!isset($_SESSION['username'])) {
		header('location:showindex.php');
		# code...
	}
?>

<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Aleo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <title>Bowtuckle</title>
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" type="text/css" href="img/mylogo.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style type="text/css">
    .servicebody {}

    html {
        scroll-behavior: smooth;
    }

    body {
        background: #FC354C;
        background: -webkit-linear-gradient(to right, #0ABFBC, #FC354C);
        background: linear-gradient(to right, #0ABFBC, #FC354C);
        color: white;
    }
    </style>

</head>

<body onload="myfunction()">
    <!---preloader starts	----->

    <div id="loading"></div>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <!------Responsive Button---->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <h1 style="color: white;margin-top: 10px;" id="myhead">Bowtuckle</h1>
            </div>
            <div class="collapse navbar-collapse" id="navi">
                <!------Navigation menus starts---->
                <ul class="nav navbar-nav navbar-right">
                    <li> <a href="">Trang chủ</a></li>
                    <li> <a href="#myservice_section">Dịch vụ</a></li>
                    <li> <a href="#work">Works</a></li>
                    <li> <a href="#myfaq">FAQs</a></li>
                    <li> <a href="logout.php" id="our-location"
                            class="btn-success"><?php echo $_SESSION['username'];   ?></a></li>
                </ul>
                <!------Navigation menus ends---->
            </div>
        </div>
    </nav>
    <!---Navigation Ends	----->

    <!---Slider Section starts	------->
    <section class="slider text-center" id="slider">
        <div class="slider-overlay">
            <div class="slider-content">
                <div class="icons">
                    <i class="fa fa-apple"></i>
                    <i class="fa fa-android"></i>
                    <i class="fa fa-windows"></i>
                </div>
                <br>
                <div class="text">
                    <!-- jquery typed effect : js: main.js -->

                </div>
                <div class="cta-div">
                    <a href="" class="btn1">LIÊN HỆ</a>
                    <a href="#myservice_section" class="btn2">HỌC NGAY</a>
                </div>
            </div>
        </div>
    </section>

    <!---Slider Section ends------->

    <!---Login Start------->

    <div class="modal fade modal-dialog-centered" id="mymodal">
        <div class="modal-dialog ">
            <div class="modal-content">
                <h3 id="login-heading">Đăng nhập</h3>

                <div class="modal-body">
                    <div class="left-box">
                        <form method="POST" action="validation.php">
                            <div class="form-group">
                                <label><i class="fa fa-user fa-2x"></i>Tên đăng nhập :</label>
                                <input type="text" name="name" class="form-control">

                                <label><i class="fa fa-lock fa-2x"></i>Mật khẩu :</label>
                                <input type="password" name="password" class="form-control">
                                <button id="btn-login" type="submit">Đăng nhập</button>

                            </div>
                            <div class="register">
                                <h2>Chưa có tài khoản?&nbsp<span id="create-account"><a href="signup.html">Đăng
                                            ký</span></a> </h2>
                            </div>

                        </form>
                    </div>
                    <div class="right-box">

                    </div>

                </div>


            </div>
        </div>
    </div>


    <br><br>
    <div class="container-fluid servicebody" id="myservice_section">
        <div class="service-are" id="service">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title text-center">
                        <h2><b>Dịch vụ</b></h2>
                        <p>
                            Đây là những thứ bạn có thể học từ chúng tôi <br> Tự giác là thứ đáng quý nhất ở chúng ta
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service-wrap text-center">
                        <div class="service-icon">
                            <i class="fa fa-leaf"></i>
                        </div>
                        <h3><a target="_blank" href="programmingdemo.php">Các môn học</a></h3>
                        <p>
                            Bạn có thể tìm các môn học cần học tại đây
                        </p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service-wrap text-center">
                        <div class="service-icon">
                            <i class="fa fa-laptop"></i>
                        </div>
                        <h3><a target="_blank" href="video tutorials\java\display_video_courses.php">Video hướng dẫn</a>
                        </h3>
                        <p>
                            Bạn có thể tìm các video hướng dẫn tại đây,..
                        </p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service-wrap text-center">
                        <div class="service-icon">
                            <i class="fa fa-laptop"></i>
                        </div>
                        <h3><a target="_blank" href="online_quize/quizhome.php">Câu hỏi</a></h3>
                        <!--  exercise/exercise.php -->
                        <p>
                            Bạn có thể làm thử các câu hỏi vui,..
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="work" id="work"><br>
        <h2 id="work-heading" class="text-center" style="font-weight: bold;">OUR WORK</h2>
        <p class="text-center">Tham gia cùng chúng tôi để cải thiện kỹ năng của bạn</p>
        <div class="container-fluid">
            <!---first row start-->
            <div class="row no-gutters">
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <div class="img-wrapper">
                        <img src="img/work1.png" class="img-responsive">
                    </div>

                </div>

                <div class="col-md-3 col-sm-3 col-xs-3">
                    <div class="img-wrapper">
                            <img src="img/work2.png" class="img-responsive">
                    </div>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-3">
                    <div class="img-wrapper">
                            <img src="img/work3.png" class="img-responsive">
                    </div>

                </div>

                <div class="col-md-3 col-sm-3 col-xs-3">
                    <div class="img-wrapper">
                            <img src="img/work4.png" class="img-responsive">

                    </div>

                </div>



                <!---first row ends-->


                <!-------second row starts  --->

                <div class="col-md-3 col-sm-3 col-xs-3">
                    <div class="img-wrapper">
                            <img src="img/work5.png" class="img-responsive">
                    </div>

                </div>

                <div class="col-md-3 col-sm-3 col-xs-3">
                    <div class="img-wrapper">
                            <img src="img/work6.png" class="img-responsive">
                    </div>

                </div>

                <div class="col-md-3 col-sm-3 col-xs-3">
                    <div class="img-wrapper">
                            <img src="img/work7.png" class="img-responsive">
                    </div>

                </div>

                <div class="col-md-3 col-sm-3 col-xs-3">
                    <div class="img-wrapper">
                            <img src="img/work8.png" class="img-responsive">

                    </div>

                </div>

            </div>
    </section>

    <br><br><br>
    <section class="faq" id="myfaq">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2><b>FAQs</b></h2>
                    <div class="sub-heading">
                        <p>
                            Giải đáp mọi thắc mắc của bạn
                        </p>
                    </div>
                </div>

            </div>
        </div> <br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="panel-group" id="accordian">
                        <?php 
                            $con=mysqli_connect('localhost','root');
                            if (!$con) {
                                die('connection failed'.mysqli_connect_error());
                            }

                            mysqli_select_db($con,'uniquedeveloper');

                            $sql="select * from faq";
                            $result=mysqli_query($con,$sql);
                            while ($row=mysqli_fetch_array($result))
                            {
                        ?>

                        <div class="panel panel-default">
                            <div class="panel-heading" id="headingOne">
                                <h4 class="panel-title">
                                    <a href="#<?php echo $row['id']; ?>" data-toggle="collapse" class="collapse"
                                        data-parent="#accordian"><?php echo $row['faq_title']; ?></a>
                                </h4>
                            </div>
                            <div id="<?php echo $row['id']; ?>" class="panel-collapse collapse "
                                aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <p>
                                        <?php echo $row['faq_description']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <?php } ?>
                        <div class="panel panel-default">
                            <div class="panel-heading" id="headingTwo">
                                <h4 class="panel-title">
                                    <a href="#collapseTwo" class="collapsed" data-toggle="collapse" data-parent="#accordian">Nó hoạt động như nào ?</a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <p>
                                        Bowtuckle là website tự học lập trình <br>
                                        Ở đây bạn có thể tự học tập và củng cố kỹ năng lập trình của bản thân
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="freeimage" id="meimg">
                    <div class="col-md-2 col-md-offset">
                        <img src="img/faq1.png">
                    </div>
                </div>

            </div>
        </div>


    </section>


    <!---FAQs Section Ends------->


    <!---Contact us Section Start------->


    <!------ Include the above in your HEAD tag ---------->

    <div class="row text-center">
        <h2><b>CONTACT US</b></h2><br><br>
        <center>
            <div class="card" style="width: 30rem;">
                <div class="card-body border-info">
                    <form method="POST" action="suggestion.php">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Địa chỉ email</label>
                            <input type="email" name="email" class="form-control" aria-describedby="emailHelp"
                                placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">Chúng tôi sẽ không chia sẻ email của bạn
                                với bất kỳ ai.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" >Lời nhắn</label>
                            <input type="text" name="message" class="form-control" placeholder="enter your message">
                        </div>

                        <button type="submit" class="btn btn-primary">Góp ý ♥</button>
                    </form>
                </div>
            </div>
        </center>
    </div>


    <script type="text/javascript">
    var preloader = document.getElementById('loading');

    function myfunction() {
        preloader.style.display = 'none';
    }


    function addButton() {
        var body = document.getElementsByTagName('body')[0];
        var myfaq1 = document.getElementById('myfaq');
        var btn = document.createElement('button');
        btn.innerHTML = 'sunil';
        myfaq1.appendChild(btn);
        body.appendChild(myfaq);
    }
    </script>

    <script src="js/jquery.ripples-min.js" type="text/javascript"></script>
    <script src="js/typed.min.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>






    <!--   <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script> -->

</body>

</html>