<?php 

include 'conn.inc.php';
include "../../admin/includes/navbar.php";
 ?>

<!DOCTYPE html>
<html>

<head>
    <title>Bowtuckle</title>
    <link rel="shortcut icon" type="text/css" href="img/mylogo.png">
    <style type="text/css">
    .card-body {
        border-style: solid !important;
        border-width: 1px !important;
        border-color: #ccc;
    }

    .container {
        margin-top: 1%;
    }

    .inner img {
        transition: all 1.5s ease;
    }

    .inner:hover img {
        transform: rotate(5deg);
    }

    .div1 {
        position: relative;
        height: 500px;
        width: 1263px;
        background: url(online_video_title.png);
    }

    body {
        background-image: url(../../img/bg_video.jpg);
    }
    </style>
</head>

<body>
    <br> <br><br>
    
    <button class="btn btn-primary" onclick="location.href='../../index.php'">Quay lại</button>

    <br><br><br>
    <div class="container-fluid">

        <div class="row">
            <?php 
                $sql="select * from video_info";
                $result=mysqli_query($con,$sql);
                while ($row=mysqli_fetch_array($result))  {
		 	?>
            <div class="col-md-4">
                <div class="card shadow" style="width: 22rem; height: 10rem;">
                    <div class="inner">
                        <img class="card-img-top " style="height: 15rem;" src=<?php echo $row['image']; ?> alt="Card image cap">
                    </div>

                    <div class="card-body text-center shadow">
                        <a href="display_video_list.php?course_name=<?php echo $row['course_name']; ?>"  class="btn btn-primary">Xem video</a>
                    </div>
                </div><br><br><br><br><br><br><br><br><br>

            </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>