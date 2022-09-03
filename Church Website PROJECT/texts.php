<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("location:adminlogin.php");
    }

    $seen = mysqli_connect("localhost","root","","church_system");

    $sql = "SELECT * FROM messages";

    $result = mysqli_query($seen, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href ="dash.css">
    <!-- Latest compiled and minified CSS -->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<!-- Javascript popper-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<title>Admin Portal</title>
</head>

<?php
    include "adminheader.php";
?>

<div class="content">

        <div class="adminsection_1">
            <h1 class="img-text">MESSAGES</h1>
        </div>


        <p>This section contains all messages that have been sent to the church via the website,
            read and respond to them by the email or phone number they left behind. </p>
        
        <style>
            .message_reader{
                width: 22cm; 
                padding-left: 5px;
                border: 3px solid black; 
                padding-left: 5px;
                margin-bottom: 100px;
            }

        </style>

        <div class="message_reader">
        <style> p1{margin-right: 200px ;} 
                p2{margin-bottom: 10px; border-bottom: 30px;
                   border-width: 22cm; 
                
                }</style>
                <?php 
                 while($aquire=$result->fetch_assoc())
                    {
                ?>
            <br>
            <hr style="border-top: 10px solid black; margin-left: 0px; ">
            <h8><b>Message ID: <?php echo "{$aquire['ID']}"; ?> </b></h8>
            <hr>
            <h4>Name: <?php echo "{$aquire['name']}"; ?> </h4>
            <hr>
            <p1>Number: <?php echo "{$aquire['number']}"; ?></p1>
            <p1>Email:  <?php echo "{$aquire['email']}"; ?></p1>
            <hr>

            <div>
                Message: <?php echo "{$aquire['message']}"; ?>
            </div>
            <hr>
            <p2>Date: <?php echo "{$aquire['date']}"?></p2>

                <?php } ?>
        </div>
        

