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

        <p>Hello, welcome to the user portal, this is where user related activities will take place.</p>
        <p>If you look to your top right you should see your email address, this indicates you've logged in 
            with your correct personal credentials.
        </p>
        <p2>While logged in, you will be able to do the following:</p2>
        <ol>
            <li>Apply for Church Events listed.</li>
            <li>Notify the Church on any contributions you've made.</li>
            <li>View Church Announcements.</li>
            
        </ol>

        <p3>Click on the appropriate menu on the sidebar to your left to perform any of the tasks listed above.</p3>
        <br>
        <p3>There's a short description in each page giving you an idea on how to use it, that is to say that 
            this system will be a relatively simple and straightforward user experience.
        </p3>
        <br>
        <br>
        <p3><b>ENJOY.</b></p3>



	</div>


</body>