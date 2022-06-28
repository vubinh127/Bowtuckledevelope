<?php 

    include("includes/bootstrap_cdn_inc.php");
    include("class/users.php");
    $res=new users;
    //print_r($_POST);
    $answers=$res->show_result($_POST);    //here answers becomes an array because show_result() method returns an array
 ?>


<div class="container mt-5">
    <center>
        <div class="col-md-6">
            <!-- <center>
 	<h2>right answer : <?php echo $answers['right'];?></h2>
 	<h2>wrong answer : <?php echo $answers['wrong'];?></h2>
 	<h2>not attempted : <?php echo $answers['not_attempted'];?></h2>

 </center> -->
            <?php 
 		$total_ques=$answers['right']+$answers['wrong']+$answers['not_attempted'];
 		$attempted_ques=$total_ques-$answers['not_attempted'];
 		$percentage=($answers['right']*100)/$total_ques;
 		$message="";
 		if ($percentage<=100 and $percentage>=70) 
 		{
 			$message="Congratulation! Bạn đã đạt số điểm là : ";
 		}
 		elseif ($percentage<=69 and $percentage>=50) 
 		{
 			$message="Bạn có thể làm tốt hơn, hãy thử lại. Điểm của bạn là : ";
 		}
 		else
 		{
 			$message="Bạn không làm được rồi,hãy thử lại. Điểm của bạn là : ";
 		}



  ?>
            <h2>Kết quả của bạn</h2><br>
            <table class="table table-bordered table-active">

                <thead>
                    <tr>
                        <th scope="col">Số câu hỏi</th>
                        <th scope="col"><?php echo $total_ques; ?></th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Đã trả lời</th>
                        <td><?php echo $attempted_ques; ?></td>

                    </tr>
                    <tr>
                        <th scope="row">Câu trả lời đúng</th>
                        <td> <?php echo $answers['right'];?></td>

                    </tr>
                    <tr>
                        <th scope="row">Câu trả lời sai</th>
                        <td><?php echo $answers['wrong'];?></td>

                    </tr>

                    <tr>
                        <th scope="row">Chưa hoàn thành</th>
                        <td><?php echo $answers['not_attempted'];?></td>

                    </tr>
                </tbody>



            </table>
            <div class="card-header mt-5 bg-danger text-light">
                <?php echo $message; ?> <b><?php echo $percentage.' %'; ?></b>
            </div>

            <button type="button" class="btn btn-primary mt-3"><a href="quizhome.php"
                    style="text-decoration: none; color: white;">Quay về</a></button>
            <!--   <a href="quizhome.php" class="btn btn-success"> Back </a> -->

        </div>
    </center>
</div>