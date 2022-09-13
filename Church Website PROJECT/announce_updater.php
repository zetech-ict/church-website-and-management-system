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
        height: 2cm;
        padding-top: 3px;
        margin-bottom: 25px;
        border: 2px solid black;
    }

    form{
        margin-bottom: 50px;
    }

    form button{
        float: right;
        margin-right: 8.5cm;
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
    <p3>NB: For the purpose of a tidy announcement page at the website, you'll have to 
    update only 6 announcements at a time. Announcement 1 is mandatory.
    </p3>

     <h5 class="signmsg">
                <?php
                    error_reporting(0);
                    echo $_SESSION['postMessage'];
                ?>
            </h5>

    <form action="announce_connect.php" method="POST">
        <label for="announcement1">Announcement 1:</label><br>
        <textarea class="box" type="text" id="announcement1" name="announcement1" required></textarea>
        <br>
        <label for="announce2">Announcement 2:</label><br>
        <textarea class="box" type="text" id="announce2" name="announce2"></textarea>
        <br>
        <label for="announce3">Announcement 3:</label><br>
        <textarea class="box" type="text" id="announce3" name="announce3"></textarea>
        <br>
        <label for="announce4">Announcement 4:</label><br>
        <textarea class="box" type="text" id="announce4" name="announce4"></textarea>
        <br>
        <label for="announce5">Announcement 5:</label><br>
        <textarea class="box" type="text" id="announce5" name="announce5"></textarea>
        <br>
        <label for="announce6">Announcement 6:</label><br>
        <textarea class="box" type="text" id="announce6" name="announce6"></textarea>
        <br>
        <input type="submit" class="btn btn-success" value="Update Website">
        <button type="reset" class="btn btn-danger">Clear Fields</button>
    </form>

</html>