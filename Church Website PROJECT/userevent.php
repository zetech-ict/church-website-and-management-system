<?php
    session_start();
    if(!isset($_SESSION['email'])){
        header("location:userlogin.php");
    }

    $data = mysqli_connect("localhost","root","","church_system");

    $sql = "SELECT * FROM events";

    $result = mysqli_query($data, $sql);

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
<style>
    table {
        margin-top: 50px;
        margin-left: auto;
        margin-right: 80px;
        margin-bottom: 80px;
        }

    table tr th {
        border: 1px solid black;
        padding:20px; 
        text-align:center;
        background-color: lightgreen;
        width: max-content;
        }
    table tr td {
        border: 1px solid black;
        padding: 15px; 
        text-align:center;
        width: max-content;
        }
    form {
        margin-top: 40px;
        margin-left: 60px;
        margin-bottom: 3cm;
    }
    form input{
        margin-bottom: 10px;
        margin-top: 5px;
        width: 10cm;
    }

    #submit{
        width: auto;
    }
    #reset{
        width: auto;
    }
    h5{
        background-color: green;
        text-align: center;
        width: max-content;
        color: white;
    }
</style>
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
        <h1 class="img-text">EVENT APPLICATION.</h1>
        </div>
		
	<p>In this section, you there is a table with all the available events,
        you may express interest by applying for any of them with the form at the bottom of the page.
    </p>

    <table>
        <tr>
            <th colspan="7">CURRENT EVENTS.</th>
        </tr>
        <tr>
            <th>Event ID</th>
            <th>Event Name</th>
            <th>Time</th>
            <th>Date</th>
            <th>Location</th>
            <th>Description</th>
        </tr>

        <?php 
                while($aquire=$result->fetch_assoc())
                {
            ?>
        
        <tr>
            <td>  <?php echo "{$aquire['ID']}"; ?></td>
            <td>  <?php echo "{$aquire['eventname']}"; ?></td>
            <td>  <?php echo "{$aquire['time']}"; ?></td>
            <td>  <?php echo "{$aquire['date']}"; ?></td>
            <td>  <?php echo "{$aquire['location']}"; ?></td>
            <td>  <?php echo "{$aquire['description']}"; ?></td>
            </tr>
            
            <?php } ?>
        </table>
        <hr>
        
        <h2>Apply for Event of your Choice here</h2>
        
        <form action="usereventconnect.php" method="POST">
                <h5>
                    <?php
                    error_reporting(0);
                    echo $_SESSION['eventreg'];
                    ?>
                </h5>
            <label for="eventname">Event Name: </label><br>
            <input type="text" placeholder="Event Name" name="eventname"><br>
            <label for="name">Name: </label><br>
            <input type="text" placeholder="Your Name" name="name"><br>
            <label for="contact">Email or Phone Number: </label><br>
            <input type="text" placeholder="Email or Number" name="contact"><br>
            <input type="submit" id="submit" class="btn btn-success">
            <input type="reset" id="reset" class="btn btn-danger">
        </form>


    </div>
</body>