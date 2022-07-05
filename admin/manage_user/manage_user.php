<?php 
  include("../classes/manage_user_class.php");
  $user_list=new manage_user_class;
  $userd=$user_list->display_user();

?>

<!DOCTYPE html>
<html>

<head>
    <title>Bowtuckle</title>
    <link rel="shortcut icon" type="text/css" href="../../img/mylogo.png">

    <!-- bootstrap CDN files -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>



    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <!--  font awsome cdn -->
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- 		css starts -->
    <style type="text/css">
    .sidebar-list {
        margin-right: -15px;

        font-family: 'Quicksand', sans-serif;
        font-size: 14px
    }

    .sidebar-list li:hover {
        background-color: deepskyblue !important;
    }

    .sidebar-list li a {
        color: white;
        text-decoration: none;
    }

    .card1 {
        font-family: 'Open Sans', sans-serif;
    }

    .cardh2 {
        font-family: 'Lato', sans-serif;

    }



    /***
Bootstrap4 Card with Tabs by @mdeuerlein
***/

    /***
Bootstrap4 Card with Tabs by @mdeuerlein
***/

    body {
        background-color: #f7f8f9;
    }

    .card {
        background-color: #ffffff;
        border: 1px solid rgba(0, 34, 51, 0.1);
        box-shadow: 2px 4px 10px 0 rgba(0, 34, 51, 0.05), 2px 4px 10px 0 rgba(0, 34, 51, 0.05);
        border-radius: 0.15rem;
    }

    /* Tabs Card */

    .tab-card {
        border: 1px solid #eee;
    }

    .tab-card-header {
        background: none;
    }

    /* Default mode */
    .tab-card-header>.nav-tabs {
        border: none;
        margin: 0px;
    }

    .tab-card-header>.nav-tabs>li {
        margin-right: 2px;
    }

    .tab-card-header>.nav-tabs>li>a {
        border: 0;
        border-bottom: 2px solid transparent;
        margin-right: 0;
        color: #737373;
        padding: 2px 15px;
    }

    .tab-card-header>.nav-tabs>li>a.show {
        border-bottom: 2px solid #007bff;
        color: #007bff;
    }

    .tab-card-header>.nav-tabs>li>a:hover {
        color: #007bff;
    }

    .tab-card-header>.tab-content {
        padding-bottom: 0;
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


    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
        <a class="navbar-brand text-white" href="../admin_main.php">Bowtuckle</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="../admin_main.php">Home <span
                            class="sr-only">(current)</span></a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <div class="container-fluid" style="margin-top: 50px;">
        <div class="row">
            <div class="col-sm-2 col-md-2 sidebar badge-dark" style="margin:inherit;" id="sidebar">
                <ul class="list-group text-white sidebar-list">
                    <li class="list-group-item bg-dark"><a href="../admin_main.php">Welcome Admin</a></li>
                    <li class="list-group-item bg-dark"><a href="../manage_courses/manage_courses.php">Quản lý môn
                            học</a></li>
                    <li class="list-group-item bg-dark"><a href="../manage_quiz/manage_quiz.php">Quản lý câu hỏi</a>
                    </li>
                    <li class="list-group-item bg-dark"><a href="../manage_videos/manage_videos.php">Quản lý video</a>
                    </li>
                    <li class="list-group-item bg-dark"><a href="../manage_cmt/manage_cmt.php">Quản lý bình luận</a></li>
                    <li class="list-group-item bg-dark"><a href="../manage_user/manage_user.php">Quản lý người dùng</a></li>
                    <li class="list-group-item bg-dark"><a href="../../login.php">Đăng xuất</a></li>
                </ul>
            </div>

            <div class="col-md-10 ">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
                    </li>
                </ul>

                <div class="row pt-3">
                    <div class="col-md-8">
                        <table class="table ml-5 bg-white shodow pl-5 table-responsive"
                            style=" height : 355px;overflow-y: scroll;display: inline-block; width: 640px;">
                            <p class="ml-5">Danh sách người dùng</p>
                            <thead style="color:black;">
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Email</th>
                                </tr>
                            </thead>
                            <tbody style="color:black;">
                                <form action="delete_user.php" method="post">
                                    <?php 
                                        foreach ($userd as $userdata) {
                                    ?>
                                    <tr>
                                        <th scope="row" name="id_user" id="id_user">
                                            <?php echo $userdata['id']; ?>
                                        </th>
                                        <td><?php echo $userdata['username']; ?></td>
                                        <td><?php echo $userdata['password']; ?></td>
                                        <td><?php echo $userdata['email']; ?></td>
                                        <td><button class="btn btn-danger" name="delete_user" value="$userdata['id']" type="submit">Xóa</button></td>
                                    </tr>

                                    <?php } ?>
                                </form>
                            </tbody>
                        </table>

                        <!-- table ends  -->
                    </div>

                    <form action="add_user.php" method="POST">
                        <label>Tên đăng nhập :</label>
                        <input type="text" autocomplete="off" name="name" class="form-control" id="username"
                            onkeypress="clear()" required>
                        <label>Mật khẩu :</label>
                        <input type="password" autocomplete="off" name="password" class="form-control" id="password"
                            required>
                        <label>Email :</label>
                        <input type="email" autocomplete="off" name="email" class="form-control" id="email" required>

                        <span id="perror"><?php 
                        if(isset($_SESSION['error']))
                        {
                            echo "Trùng tên";
                        } 
                        else{ echo " ";} 
                        ?>


                        </span><br>
                        <button id="btn-login" class="btn btn-primary" type="submit">Thêm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>