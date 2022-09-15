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
<title>Homepage</title>
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
    <div class="section_1">
        <h1 class="img-text">WELCOME TO OUR CHURCH!</h1>
        <img class="main_img" src="images/pexels.JPG">
    </div>

    <section class="announce">
        <h2>WELCOME</h2>
        <br>
        <p1>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet 
            voluptatum velit quis odio natus sapiente 
            ad reiciendis Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit facilis, c
            umque nobis voluptatem velit excepturi aut cum debitis vero aliquid error tenetur voluptatum 
            incidunt ratione eligendi. Id explicabo cupiditate dolorem!</p1>

        <hr>
    </section>

    <style>

        .container div{
        margin-top: 45px;
        margin-bottom: 50px;
        }

        .announce h2{
            margin-left: auto;
            text-align: center;
        }
        .announce {
            margin-top: 50px;
            margin-bottom: 10px;
            margin-left: 45px;
        }
    </style>

    <div class="container">
        <div class="row" id="row1">
            <div class="col-md-4">
                <img class="welcome_img" src="images/praise.jpg">
            </div>

            <div class="col-md-8">
                <h1>We're a Community</h1>
                <p>
                    <b>When we are alone, we are vulnerable, weak and lost. But when we are together, 
                    we are able to take on so much more. 
                    That's true in life and as believers.</b>
                    We love God and would like to share our love of God with everyone else.
                    Worshipping together at every reasonable opportunity only serves to strengthen
                    our faith. Aside from worship, we engage in lots of other activities that let us
                    engage with one another and bond as a community.</p>

            </div>

        </div>
        <div class="row" id="row2">
            <div class="col-md-8">
                <h1>Open to All</h1>
                <p>
                Everyone, regardless of who they are, what they've done or where they're from is welcomed
                to experience <b>the love and salvation offered by Christ</b>. We are here, always ready to help anyone
                in their journey to giving their life to the Lord.
                </p>
            </div>
            <div class="col-md-4">
               <img class="welcome_img" src="images/join.jpg">
            </div>
    
        </div>

        <div class="row" id="row3">
            <div class="col-md-4">
                <img class="welcome_img" src="images/praise.jpg">
            </div>

            <div class="col-md-8">
                <h1>Join Us</h1>
                <p>
                Become a proud member of our church today, Join our cause by opening your account and heart to Jesus
                here. (Please note that this is compulsory to register for church activities.)
                <br>
                <a href="signup.php" class="btn btn-success">Open your Account here</a>  
                </p>

            </div>
        </div>
    </div>
    
</body>
</html>
