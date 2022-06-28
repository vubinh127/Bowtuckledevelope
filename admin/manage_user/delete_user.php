<?php 
	include '../classes/manage_user_class.php';
    session_start();

   $con=mysqli_connect('localhost','root');

    mysqli_select_db($con,'uniquedeveloper');


    if (isset($_POST['delete_user'])) {
        
        $id=$_POST['id_user'];
        $q="DELETE FROM loginn WHERE id='$id'";
        $r=mysqli_query($con,$q);
        if ($r) 
        {
            header("location:manage_user.php");
        }
    
    }

 ?>