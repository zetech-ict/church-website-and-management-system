<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("location:adminlogin.php");
    }

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
    <link rel="stylesheet" href="dash.css">
    <link rel="shortcut icon" href="images/front_icon.jpg">
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

    <div class="content">

        <div class="adminsection_1">
            <h1 class="img-text">ANNOUNCEMENT EDITOR.</h1>
        </div>

        <p1>
        <?php 
            while($aquire=$result->fetch_assoc())
            {
        ?>
        <p5>Date: <?php echo "{$aquire['date']}"; ?> </p5>
        
        <ol>
            <li> <?php echo "{$aquire['announcement']}"; ?> </li>
            <li> <?php echo "{$aquire['announce_2']}"; ?> </li>
            <li> <?php echo "{$aquire['announce_3']}"; ?> </li>
            <li> <?php echo "{$aquire['announce_4']}"; ?> </li>
            <li> <?php echo "{$aquire['announce_5']}"; ?> </li>
            <li> <?php echo "{$aquire['announce_6']}"; ?> </li>
        </ol>
        <?php echo"<a class='btn btn-danger' onClick=\" javascript:return confirm('Are you sure you want to delete these 6 announcements?') \"
                    href='announce_del.php?announce_id={$aquire['ID']}'> Delete </a>"; ?><br><br>
        <?php } ?>
        
        </p1>

    </div>
    <?php include 'footer.php' ?>
</html>