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
<title>Open New User Account</title>
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
    <center>
    <form action="connect.php" method="POST">
    <div class="container">
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
            <h5 class="signmsg">
                <?php
                    error_reporting(0);
                    session_start();
                    session_destroy();
                    echo $_SESSION['signMessage'];
                ?>
            </h5>
        <div>
        <label for="fname"><b>First Name: </b></label>
        <input type="text" placeholder="Your First Name"  name="fname" required >
        </div>
        <br>
        <div>
        <label for="lname"><b>Last Name: </b></label>
        <input type="text" placeholder="Your Last Name"  name="lname" required >
        </div>
        <br>
        <div>
        <label for="email"><b>Email: </b></label>
        <input type="email" placeholder="Your Email" name="email" required>
        </div>
        <br>
        <div>
        <label for="number"><b>Phone Number: </b></label>
        <input type="number" placeholder="Your Number" name="number" required>
        </div>
        <br>
        <div>
        <label for="gender"><b>What is your Gender</b>
        <select name="gender">
            <option value="none" selected></option>
            <option value="m">Male</option>
            <option value="f">Female</option>
            <option value="o">Prefer not to say</option>
        </select>
        </div>
        <br>
        <div>
        <label for="psw"><b>Password: </b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
        </div>
        <br>



        <div>
        <button type="submit" class="signupbtn">Sign Up</button>
        <button type="reset" class="cancelbtn">Cancel</button>
        </div>
    </div>
    </form>
    </center>
</body>