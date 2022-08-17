<?php
error_reporting(0);
$host = "localhost";
$user = "root";
$password = '';
$db = "church_system";

//Database connection
$conn = mysqli_connect($host, $user, $password, $db);

if($conn->connect_error){
    die('Connection Unsuccesful : '.$conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"] == 'POST') 
    {
        $name = $_POST['email'];
        $password = $_POST['password'];
        
        $sql="SELECT * FROM `user_register` where email= '".$name."' AND 
        password= '".$password."'  ";

        $result= mysqli_query($conn, $sql);

        $row = mysqli_fetch_array($result);

        if($row["email"])
        {
            header("location:userportal.php");
            echo "LOGIN SUCCESS";
        }else{
            session_start();
            $message= "USERNAME OR PASSWORD IS INCORRECT";
            $_SESSION['loginMessage']= $message;
            header("location:userlogin.php");
        }

    }
    
?>