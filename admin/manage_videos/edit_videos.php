<!DOCTYPE html>
<html>

<head>
    <title>Bowtuckle</title>

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
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
    </style>
</head>

<body>

    <?php

	 require("../includes/navbar.php");    //navigation bar included

 ?>

    <div class="container-fluid" style="margin-top: 50px;">
        <div class="row">

            <div class="col-sm-2 col-md-2 sidebar badge-dark" style="margin:inherit;" id="sidebar">
                <ul class="list-group text-white sidebar-list">
                    <li class="list-group-item bg-dark"><a href="../admin_main.php">Welcome Admin</a></li>
                    <li class="list-group-item bg-dark"><a href="../manage_courses/manage_courses.php">Qu???n l?? m??n
                            h???c</a></li>
                    <li class="list-group-item bg-dark"><a href="../manage_quiz/manage_quiz.php">Qu???n l?? c??u h???i</a>
                    </li>
                    <li class="list-group-item bg-dark"><a href="../manage_videos/manage_videos.php">Qu???n l?? video</a>
                    </li>
                    <li class="list-group-item bg-dark"><a href="../manage_cmt/manage_cmt.php">Qu???n l?? b??nh lu???n</a></li>
                    <li class="list-group-item bg-dark"><a href="../manage_user/manage_user.php"">Qu???n l?? ng?????i d??ng</a></li>
                    <li class="list-group-item bg-dark"><a href="">????ng xu???t</a></li>
                    <li class="list-group-item bg-dark" style="height: 400px;"></li>
                </ul>
            </div>

            <div class="col-md-10 ">
                <div>
                    <h3 class="text-center mt-2">Qu???n l?? video <?php  echo $_GET['course_name'];  ?> c???a b???n</h3>
                    <button class="btn btn-primary float-right" data-toggle="modal" data-target="#myModal">Th??m video m???i</button><br>
                </div>
                <div class="row col-md-12 ml-2 shadow">
                    <?php 
                        $con=mysqli_connect('localhost','root');
                        mysqli_select_db($con,'uniquedeveloper');
                        $course_name=$_GET['course_name'];
                        $q="select * from videos where course_name='$course_name'";
                        $query=mysqli_query($con,$q);
                        while ($row=mysqli_fetch_array($query)) {
                    ?>
                    <div class="col-md-4 p-3">
                        <div class="card shadow mycard" style="width: 18rem; height: 7rem;">
                            <div class="inner">
                                <img class="card-img-top " style="height: 11rem;" src=<?php echo $row['video_image']; ?> alt="Card image cap">
                            </div>

                            <div class="card-body shadow" style="background-color: #f1f1f1;">
                                <p class="card-text"><?php echo $row['video_name']; ?></p>

                                <span class="text-danger" style="font-size: 14px; ">
                                    <a href="watch_video.php?video_id=<?php echo $row['video_id'] ?>&course_name=<?php echo $row['course_name'] ?>"
                                        class="text-success p-1" style="text-decoration: none;">Xem <i
                                            class="fa fa-eye"></i></a>

                                    <a href="" class="p-1 text-primary" style="text-decoration: none;">C???p nh???t<i
                                            class="fa fa-pencil ml-1"></i></a>

                                    <a href="video_add.php?id=<?php echo $row['video_id']?>&course_name=<?php echo $row['course_name'] ?>&run=delete"
                                        class="p-1 text-danger" name="delete_vid" style="text-decoration: none;">X??a<i
                                            class="fa fa-trash-o ml-1"></i></a>
                                </span>
                            </div>
                        </div>
                    </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <?php } ?>
                </div>

                <div class="col-md-4 mt-5">
                    <div class="modal fade" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Message</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <form action="video_add.php" method='POST' enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <input type="hidden" name="course_name"
                                            value="<?php  echo $_GET['course_name'];  ?>">

                                        <div class="form-group">
                                            Enter course name :<input type="text" name="vid_title" class="form-control">

                                        </div>

                                        <div class="form-group">
                                            Enter video image :<input type="file" name="vid_img" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            Enter video path :<input type="text" name="vid_path" class="form-control">
                                        </div>

                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-danger"
                                                name="btn_add_new_vid">Add</button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <body>

</html>