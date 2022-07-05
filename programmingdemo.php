<?php 
	 session_start();

 ?>

<!DOCTYPE html>
<html>

<head>
    <title>Bowtuckle</title>
    <link rel="stylesheet" type="text/css" href="css/programming.css">
    <link rel="shortcut icon" type="text/css" href="img/mylogo.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style type="text/css">
    .context-dark,
    .bg-gray-dark,
    .bg-primary {
        color: rgba(255, 255, 255, 0.8);
    }

    .footer-classic a,
    .footer-classic a:focus,
    .footer-classic a:active {
        color: #ffffff;
    }

    .nav-list li {
        padding-top: 5px;
        padding-bottom: 5px;
    }

    .nav-list li a:hover:before {
        margin-left: 0;
        opacity: 1;
        visibility: visible;
    }

    ul,
    ol {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .social-inner {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
        padding: 23px;
        font: 900 13px/1 "Lato", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        text-transform: uppercase;
        color: rgba(255, 255, 255, 0.5);
    }

    .social-container .col {
        border: 1px solid rgba(255, 255, 255, 0.1);
        display: inline-block;
    }

    .nav-list li a:before {
        content: "\f14f";
        font: 400 21px/1 "Material Design Icons";
        color: #4d6de6;
        display: inline-block;
        vertical-align: baseline;
        margin-left: -28px;
        margin-right: 7px;
        opacity: 0;
        visibility: hidden;
        transition: .22s ease;
    }

    .div1 {
        margin-top: 10%;
        position: relative;
        height: 500px;
        width: 1263px;
        background: url(uploadimg/programming_image.png);
    }

    body {
        background: #FC354C;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #0ABFBC, #FC354C);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #0ABFBC, #FC354C);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        color: white;
    }
    </style>



</head>

<body>
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
                    <li> <a href="index.php">Trang chủ</a></li>
                    <li> <a href="index.php#myservice_section">Dịch vụ</a></li>
                    <li> <a href="index.php#work">Works</a></li>
                    <li> <a href="index.php#myfaq">FAQs</a></li>
                    <li> <a href="logout.php" id="our-location"
                            class="btn-success"><?php echo $_SESSION['username'];   ?></a></li>
                </ul>
                <!------Navigation menus ends---->
            </div>
        </div>
    </nav>

    <br><br><br><br><br>
    <section class="latest-news-area" id="latest">
        <div class="container">
            <button class="btn btn-primary" onclick="location.href='index.php'">Return</button>
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title text-center">
                        <h2><b>Các ngôn ngữ</b></h2>
                        <div class="sub-heading">
                           
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <?php
			   // session_start();

			   $con=mysqli_connect('localhost','root');
				mysqli_select_db($con,'uniquedeveloper');

				$q="select * from programming_languages";
				$query=mysqli_query($con,$q);
				while ($res=mysqli_fetch_array($query)) {

			?>

            <div class="col-md-4 col-sm-6 col-xs-12 content-border" style="margin-bottom: 10px;">
                <div class="latest-news-wrap">
                    <div class="news-img">
                        <img src=<?php echo $res['language_image']; ?> class="img-responsive">
                        <div class="deat">
                            <span><?php echo $res['language_name']; ?></span>
                        </div>
                    </div>

                    <div class="news-content">
                        <p>
                            <?php echo $res['language_description']; ?>
                        </p><br>
                        <a href="programming/java/java_programming.php?course_name=<?php echo $res['language_name'] ?>">Start
                            Reading...</a>
                    </div>
                </div>
            </div>



            <?php } ?>



        </div>

    </section>


    <!---programming languages Section ends	----->


    <!---footer Section Start	----->

    <br><br><br><br>

    <footer class="section footer-classic context-dark bg-image" style="background: #2d3246;">

    </footer>



    <!---footer Section Ends	----->


</body>

</html>