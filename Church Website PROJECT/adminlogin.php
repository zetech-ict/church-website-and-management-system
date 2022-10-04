<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="images/front_icon.jpg">
    <!-- Latest compiled and minified CSS -->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<title>Admin Login</title>
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
<body background="images/cross.jpg" id="contactback">
    <center>
    <form class="login" action="admin_check.php" method="POST">
        <h1> Admin Login Form </h1> 
        <h5>
            <?php
                error_reporting(0);
                session_start();
                session_destroy();
                echo $_SESSION['loginMessage'];
            ?>
        </h5>
        <div class="form">  
            <div> 
            <label>Username : </label>   
            <input type="text" placeholder="Enter Username" name="username" required> 
            </div>
            <div> 
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required>  
            </div>
            <div>
            <button type="submit">Login</button>     
            <button type="reset" class="cancelbtn"> Cancel</button>   
            </div>  
        </div>   
    </form>     
    </center>
</body>
<?php include 'footer.php' ?>
</html>