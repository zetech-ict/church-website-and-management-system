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

<title>Admin Login</title>
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
<body>
    <center>
    <form class="login">
        <h1> User Login Form </h1> 
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
            <button type="button" class="cancelbtn"> Cancel</button>   
            </div>  
        </div>   
    </form>     
    </center>
</body>
</html>