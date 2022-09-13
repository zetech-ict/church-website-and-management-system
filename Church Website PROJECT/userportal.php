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
</head>

<header class="uheader">
		
		<a id="usr">User Portal</a>
		<div class="logout">	
        <a style="margin-right: 30px;"><?php echo ($_SESSION['email']) ?> </a>
        <a href="logout.php" class="btn btn-danger">Logout</a>
		</div>

</header>
<body>
   
    <?php include "userheader.php"; ?>

    <div class="content">

        <div class="adminsection_1">
            <h1 class="img-text">WELCOME</h1>
        </div>
		
		<h1>User Dashboard</h1>

		<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo, dicta suscipit earum nostrum 
            ratione, et rerum placeat iure, consectetur esse sunt quam soluta dolore animi odit quasi 
            fugiat eligendi iste?</p>



	</div>


</body>