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

<style>
    .event1{
	margin-left: 20%;
	margin-top: 5%;
    margin-bottom: 70px;
    }

    .event1 input{
        margin-bottom: 17px;
    }
    
    textarea {
        width: 15cm;
        height: 4cm;
        border: 2px solid black;
        margin-bottom: 10px;
    }

    #locate{
        width: 14cm;
    }

</style>
<body>
    <div class="content">

        <div class="adminsection_1">
            <h1 class="img-text">EVENT CREATOR.</h1>
        </div>
		
		<h1></h1>

		<p>This is where you will create events that can be viewed by users and the general public</p>

	</div>

    <form class="event1" action="event_connect.php" method="POST">
            <h5 class="signmsg">
                <?php
                    error_reporting(0);
                    echo $_SESSION['eventMade'];
                ?>
            </h5>
        <label for="eventname"><b>Event Name: </b></label><br>
        <input type="text" placeholder="Name of Event" name="eventname"><br>
        <label for="time">Event Time: </label><br>
        <input type="time" placeholder="00:00 00" name="time"><br>
        <label for="date">Event Date: </label><br>
        <input type="date" placeholder="date" name="date"><br>
        <label for="location">Event Location: </label><br>
        <input type="text" placeholder="Event Location" name="location" id="locate"><br>
        <label for="descr">Description of the Event: </label><br>
        <textarea class="box" type="text" id="descr" name="descr"></textarea><br>
        <input type="submit" class="btn btn-success" value="Register Event">
    </form>

</body>

</html>