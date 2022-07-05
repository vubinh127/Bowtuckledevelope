<?php 
    include("class/users.php");        
    $profile=new users;                
    extract($_POST);
    $profile->show_users_profile($_SESSION['username']);  
 ?>


<!DOCTYPE html>
<html>

<head>
    <title>Bowtuckle</title>
    <link rel="shortcut icon" type="text/css" href="../img/mylogo.png">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <link href="https://fonts.googleapis.com/css?family=Catamaran" rel="stylesheet">
</head>

<style type="text/css">
    .li1 {
        float: right !important;
    }

    body {
        background: #FC354C;
        background: -webkit-linear-gradient(to right, #0ABFBC, #FC354C);
        background: linear-gradient(to right, #0ABFBC, #FC354C);
        color: white;
    }
</style>


<body style="">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top position-relative">
        <a class="navbar-brand text-white" href="../index.php">Bowtuckle</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="../index.php">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dịch vụ</a>
                    <div class="dropdown-menu text-white fade" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../programmingdemo.php">Các ngôn ngữ</a>
                        <a class="dropdown-item" href="../video tutorials/java/display_video_courses.php">Video hướng dẫn</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Câu hỏi</a>
                    </div>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <div class="container mt-4 col-md-10 position-relative">
        <h3 style="font-family: 'Catamaran', sans-serif;">Welcome <?php echo $_SESSION['username']; ?> hãy bắt đầu tham gia nào !
        </h3>

        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active " data-toggle="tab" href="#menu1">Home</a>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active " id="menu1">

                <center>
                    <button type="button" class="btn btn-success mt-5" href="#myid" data-toggle="collapse">Bắt đầu</button>
                </center>

                <center>
                    <div class="col-sm-6 mt-3">
                        <div class="collapse" id="myid">
                            <div class="form-group">
                                <label>select Course</label>
                                <form method="POST" action="question_show.php">
                                    <select class="form-control" id="exampleFormControlSelect1" name="selected_course">
                                        <?php 
											$profile->show_courses();                                
											foreach ($profile->cat_data as $key => $course) {
                                      	?>
                                            <option value="<?php echo $course['id'] ;?>">
                                                <?php echo $course['cat_name']; ?>
                                            </option> 
                                        <?php } ?>
                                    </select>
                                    <button type="submit" class="btn btn-success mt-3">Start Quiz</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </center>
            </div>
            <div class="tab-pane fade" id="menu2">
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Image</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($profile->data as $key => $prof) { ?>
                        <tr>
                            <th scope="row"><?php echo $prof['id']; ?></th>
                            <td><?php echo $prof['name']; ?></td>
                            <td><?php echo $prof['email']; ?></td>
                            <td><img src="img/<?php echo $prof['img']; ?>" class="img-fluid" width="35px" height="30px">
                            </td>
                        </tr>
                    </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>

</body>

</html>