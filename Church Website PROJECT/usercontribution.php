<?php
    session_start();
    if(!isset($_SESSION['email'])){
        header("location:userlogin.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dash.css">
    <!-- Latest compiled and minified CSS -->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<!-- Javascript popper-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<title>User Portal</title>
<style>.content p{margin-right: 20px;} .content{margin-left: 18%;}</style>
</head>

<header class="uheader">
		
		<a id="usr">User Portal</a>
		<div class="logout">	
        <a><?php echo ($_SESSION['email']) ?> </a>
        <a href="logout.php" class="btn btn-danger">Logout</a>
		</div>

</header>
<body>
   
    <?php include "userheader.php"; ?>

<div class="content">

    <div class="adminsection_1">
        <h1 class="img-text">RECORD CONTRIBUTIONS OR TITHE.</h1>
    </div>
		
		<p>In this section, you have the option of notifying the church leaders of any 
            contributions you've made to the church. </p> <p>While the Bible does insinuate that it is vain to
            publicize your contributions, we do not see a problem with claiming credit for 
            helping advance our mission, which is that of serving and living for God while spreading 
            the message of his love and goodness.
        </p>
    <style>
        form{
            margin: 1.5cm;
            margin-top: 1cm;
        }
        form input{
            margin-bottom: 20px;
        }
        form textarea{
            margin-bottom: 20px; width: 11cm; height: 3cm;
        }
        h5{
            background-color: green;
            text-align: center;
            width: max-content;
            color: white;
        }
    </style>
    <form action="usertitheconnect.php" method="POST">
        <h5>
            <?php
            error_reporting(0);
            echo $_SESSION['contribute'];
            ?>
        </h5>
        <label for="name">Full Name:</label><br>
        <input type="text" placeholder="Full Name" name="name" required ><br>
        <label for="mpesa">Mobile Money confirmation code:</label><br>
        <input type="text" placeholder="Confirmation Code" name="mpesa" required ><br>
        <label for="cash">Amount in KES:</label><br>
        <input type="number" placeholder="Amount in KES" name="cash" required ><br>
        <label for="date">Date of Contribution: </label><br>
        <input type="date" placeholder="Date of contribution" name="date" required ><br>
        <label for="comment">Comment (Optional): </label><br>
        <textarea type="text" placeholder="Optional Comment to the church" name="comment"></textarea><br>
        <input type="submit" value="Submit">

    </form>


</div>


</body>