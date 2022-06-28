<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Aleo" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <title>Bowtuckle</title>
    <!----Linking google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

    <!----font-awsome start-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!----font-awsome ends-->

    <!----css file link-->

    <link rel="stylesheet" type="text/css" href="css/signupstyle.css">

    <!----favicon setting-->
    <link rel="shortcut icon" type="text/css" href="img/mylogo.png">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!----------email notification-------->


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
                    <li> <a href="">Trang chủ</a></li>
                    <li> <a href="">Our Service</a></li>
                    <li> <a href="">Works</a></li>
                    <li> <a href="">Team</a></li>
                    <li> <a href="">About</a></li>
                    <li> <a href="">Carrier</a></li>
                    <li> <a href="login.php" id="our-location" class="btn-success" >Login/Signup</a></li>
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
                <h3 id="login-heading">Đăng ký</h3>
                <div class="modal-body">
                    <div class="left-box">
                        <form method="POST" action="registration.php">
                            <div class="form-group">
                                <label><i class="fa fa-user fa-2x"></i>&nbsp Tên đăng nhập :</label>
                                <input type="text" name="name" class="form-control">

                                <label><i class="fa fa-lock fa-2x"></i>&nbsp Mật khẩu :</label>
                                <input type="text" name="password" class="form-control" id="pwd">

                                <label><i class="fa fa-user fa-2x"></i>&nbsp Xác nhận mật khẩu :</label>
                                <input type="text" name="confirm_password" class="form-control" id="cpwd">

                                <label><i class="fa fa-lock fa-2x"></i>&nbsp Email :</label>
                                <input type="text" name="email" class="form-control">
                                <div id="errorlabel"></div>
                                <button id="btn-login" type="submit">Đăng ký</button>
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
    $(document).ready(function() {

        $('#cpwd').keyup(function() {
            var pwd = $('#pwd').val();
            var cpwd = $('#cpwd').val();
            if (cpwd != pwd) {
                $('#errorlabel').html('**Mật khẩu không khớp**');
                $('#errorlabel').css('color', 'red');
                return false;
            } else {
                $('#errorlabel').html('');
                return true;
            }
        });

    });
    </script>
    <!---confirm password validation end------->



    <script src="js/jquery.ripples-min.js" type="text/javascript"></script>
    <script src="js/typed.min.js" type="text/javascript"></script>

</body>

</html>