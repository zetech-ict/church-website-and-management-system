<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("location:adminlogin.php");
    }

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

<style>
    .box{
        width: 20cm;
        height: 5cm;
        padding-top: 3px;
        margin-bottom: 5px;
        border: 3px solid black;
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<title>Admin Portal</title>
</head>

<?php
    include "adminheader.php";
?>

<div class="content">

    <div class="adminsection_1">
        <h1 class="img-text">ANNOUNCEMENT UPDATER</h1>
    </div>

    <p>In this section, you can update church announcements which will be posted 
     on the website.</p>

     <h5 class="signmsg">
                <?php
                    error_reporting(0);
                    session_start();
                    session_destroy();
                    echo $_SESSION['postMessage'];
                ?>
            </h5>

    <form action="announce_connect.php" method="POST">
        <label for="announcement1">Announcements:</label><br>
        <textarea class="box" type="text" id="announcement1" name="announcement1"></textarea>
        <br>
        <input type="submit" value="Update Website">
    </form>