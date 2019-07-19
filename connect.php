<?php

include("db_connect.php");

if(isset($_POST['action']))
{
    if ($_POST[action] == "login") {

        $email = mysqli_real_escape_string($connection,$_POST['email']);
        $password = mysqli_real_escape_string($connection,$_POST['pass']);

         $strSQL = mysqli_query($connection,"select uname from sign_in where email='".$email."' and password='".md5($password)."'");
        $Results = mysqli_fetch_array($strSQL);
        if(count($Results)>=1)
        {
            $message = $Results['uname']." Login Sucessfully!!";
        }
        else
        {
            $message = "Invalid email or password!!";
        }        
    }
    elseif ($_POST['action'] == "signup") {
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];
        $bdate = $_POST['date'];
        $uname = $_POST['uname'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        
    }
}
    
  

$con = mysqli_connect('localhost','root','','pharmacy_db');
    if (!$con) {
            echo "Connection Not Successful </br>";
    }
    else {
            echo "Connected successfully </br>";
    }



   $sql= "insert into sign_in (First_Name,Middle_Name,Last_Name,Birthdate,UserName,Email,Password) values('$fname','$mname','$lname','$bdate','$uname','$email','$pass')";

$result = mysqli_query($con,$sql);
    if (!$sql) {
        // echo "Record Not Successfull </br>";
         header("location: dashboard.php");
    }
    else {
       // echo "redirect('dashboard.php');";
        header("Location:connect.php");
    }
 

$dname = $_POST['dname'];
    $drigD = $_POST['drigD'];
    $ExDate = $_POST['ExDate'];
    $$maname = $_POST['maname'];


$sql= "insert drug (Drug_Name,Drug_Date,ExpDate,Manufactured) values('$dname','$drigD','$ExDate','$maname')";

$result = mysqli_query($con,$sql);
    if (!$sql) {
        echo "Record Not Successfull </br>";
    }
    else {
       echo "redirect('dashboard.php');";
       
    }





?>