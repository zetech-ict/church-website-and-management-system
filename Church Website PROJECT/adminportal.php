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
    <link rel="stylesheet" href="dash.css">
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
            <h1 class="img-text">WELCOME, THIS IS THE ADMIN PORTAL!</h1>
        </div>
		
		<h1>Admin Home</h1>

		<p>Hello, welcome to the admin portal, this is where most of the administrative 
            work of this system is done.</p>
        <p2>While logged in, you will be able to do the following:</p2>
        <ol>
            <li>View Messages sent from the Website.</li>
            <li>View the current existing members.</li>
            <li>Update Church announcements that will be posted up on the website.</li>
            <li>Create Events.</li>
            <li>Delete Events when required.</li>
            <li>View Contributions Made to the Church.</li>
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
</html>