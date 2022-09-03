<?php

    $data = mysqli_connect("localhost","root","","church_system");

    $sql = "SELECT * FROM announcements";

    $result = mysqli_query($data, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <!-- Latest compiled and minified CSS -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <!-- Javascript popper-->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <style> 
        .notices{margin-left: 20px; font-size: larger; }
        body p1 ol li {
            margin-top: 5px;
            margin-bottom: 5px;
        }
    </style>

    <title>Announcements</title>
</head>
<header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="announce.php">Announcements</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="adminlogin.php" class="btn btn-primary">Admin Login</a></li>
            <li><a href="userlogin.php" class="btn btn-success">User Login</a></li>
            <hr>
        </ul>
    </nav>
</header>
<body>
    <h1 id="announce">CURRENT ANNOUNCEMENTS AND EVENTS</h1>
    <hr>
    <div class="notices">
    <p1>
        <?php 
            while($aquire=$result->fetch_assoc())
            {
        ?>
        <p5>Date: <?php echo "{$aquire['date']}"; ?> </p5>
        <?php } ?>
        <ol>
            <li>Announcement</li>
        </ol>

        
    </p1>
    </div>
</body>
</html>