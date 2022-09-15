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
<title>Contact Us</title>
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
<body background="images/phone.JPG" id="contactback">
    <div class="form-group">
        <h1>FEEL FREE TO CONTACT US!</h1>
        <h1>Send us a Message at:</h1>
    </div>
            <h5 class="signmsg">
                <?php
                    error_reporting(0);
                    session_start();
                    session_destroy();
                    echo $_SESSION['sentMessage'];
                ?>
            </h5>
        
        <div>
        <form action="msgconnect.php" method="POST" id="contactform">
            <div>
            <label for="name">Name: </label>
            <input type="text" id="name" name="name" required>
            </div>
            <br>
            <div>
            <label for="Number">Number:</label>
            <input type="number" id="Number" name="number" required><br>
            </div>
            <br>
            <div>
            <label for="Email">Email:</label>
            <input type="email" id="email" name="email"><br>
            </div>
            <br>
            <div>
            <label for="Message">Your Message:</label><br>
            <textarea class="message" placeholder="Your message here" name="msg" required></textarea>
            </div>
            <br>
            <input type="submit" class="btn btn-success" value="SUBMIT QUESTION"><br>
        </form>
        </div>

</body>