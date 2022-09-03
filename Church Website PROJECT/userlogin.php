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

<title>User Login</title>
</head>

<body background="images/op_bible.jpg" id="contactback">
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

    <center>
    <form class="login" action="login_check.php" method="POST">
        <h1> User Login Form </h1> 
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
            <label>Email : </label>   
            <input type="email" placeholder="Enter email" name="email" required> 
            </div>
            <div> 
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required>  
            </div>
            <div>
            <button type="submit">Login</button>     
            <button type="reset" class="cancelbtn">Cancel</button>   
            </div>  
        </div>   
    </form>     
    </center>
</body>
</html>