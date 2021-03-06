<?php

session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Aleo" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <title>Bowtuckle</title>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!----css file link-->
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <!----favicon setting-->
    <link rel="shortcut icon" type="text/css" href="img/mylogo.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/css">

    </script>

</head>

<body>
    <!---Navigation Starts	----->

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
                    <li> <a href="showindex.php">Trang chủ</a></li>
                    <li> <a href="#myservice_section">Dịch vụ</a></li>
                    <li> <a href="#work">Works</a></li>
                    <li> <a href="#myfaq">FAQs</a></li>
                    <li> <a href="" id="our-location" class="btn-success" data-target="#mymodal"
                            data-toggle="modal">Login/Signup</a></li>
                </ul>
                <!------Navigation menus ends---->
            </div>
        </div>
    </nav>
    <!---Navigation Ends	----->

    <!---Slider Section starts	------->
    <section class="slider text-center" id="slider">
        <div class="modal-dialog ">
            <div class="modal-content">
                <h3 id="login-heading"></h3>

                <div class="modal-body">
                    <div class="left-box">
                        <form method="POST" action="validation.php" onsubmit="return validation()">
                <h3 id="login-heading">Đăng nhập</h3>

                            <div class="form-group">
                                <label><i class="fa fa-user fa-2x"></i> Tên đăng nhập :</label>
                                <input type="text" autocomplete="off" name="name" class="form-control" id="username"
                                    onkeypress="clear()">


                                <label><i class="fa fa-lock fa-2x"></i> Mật khẩu :</label>
                                <input type="password" autocomplete="off" name="password" class="form-control"
                                    id="password">

                                <span id="perror"><?php 
									if(isset($_SESSION['error']))
									{
										echo "Sai username hoặc mật khẩu";
									} 
									else{ echo " ";} 
									?>

                                </span>
                                <button id="btn-login" type="submit">Đăng nhập</button>

                            </div>
                            <div class="register">
                                <h2>Chưa có tài khoản?&nbsp<span id="create-account"><a href="signup.php"><b>Đăng ký</b></span></a> </h2>
                            </div>

                        </form>
                    </div>
                    <div class="right-box">


                    </div>
                </div>
            </div>
        </div>
    </section>


    <!---Slider Section ends------->

    <!---confirm password validation Start------->

    <script type="text/javascript">
    function validation() {
        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;

        if ((username == "") || (password == "")) {
            document.getElementById('perror').innerHTML = "Vui lòng điền đủ thông tin";
            return false;
        }
    }


    function clear() {
        document.getElementById('perror').innerHTML = "ksdfisdhfg";
    }
    </script>
    <!---confirm password validation end------->
    <script src="js/jquery.ripples-min.js" type="text/javascript"></script>
    <script src="js/typed.min.js" type="text/javascript"></script>

</body>

</html>