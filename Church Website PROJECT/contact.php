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
            <li><a href="index.html">Home</a></li>
            <li><a href="announce.html">Announcements</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.html">Contact Us</a></li>
            <li><a href="adminlogin.html" class="btn btn-primary">Admin Login</a></li>
            <li><a href="userlogin.html" class="btn btn-success">User Login</a></li>
            <hr>
        </ul>
    </nav>
</header>
<body background="/images/pexels.JPG" id="bodyback">
    <div class="contaf">
        <div>
        <h1>FEEL FREE TO CONTACT US!</h1>
        <h1>Send us a Message at:</h1>
        </div>
        <div>
        <form class="contactform">
            <label class="label_text" for="name">Name:</label><br>
            <input type="text" id="name" name="name"><br>
            <label for="Number">Number:</label><br>
            <input type="number" id="Number" name="number"><br>
            <label for="Email">Email:</label><br>
            <input type="email" id="email" name="email"><br>
            <label for="Message">Your Message:</label><br>
            <textarea class="message" placeholder="Your message here"></textarea><br>
            <input type="submit" value="SUBMIT QUESTION"><br>
        </form>
        </div>
    </div>
</body>