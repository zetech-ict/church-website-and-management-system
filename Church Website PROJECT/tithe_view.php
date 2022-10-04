<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("location:adminlogin.php");
    }

    $data = mysqli_connect("localhost","root","","church_system");

    $sql = "SELECT * FROM contributions";

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
            <h1 class="img-text">CHURCH CONTRIBUTIONS.</h1>
        </div>
		
		<h1></h1>

    <p>The following section contains notifications made by users of contributions they've
        made to the church.
    </p>

    <style>
        table {
            margin-top: 50px;
            margin-left: auto;
            margin-right: 30px;
            margin-bottom: 80px;
        }

        table tr th {
            border: 1px solid black;
            padding:20px; 
            text-align:center;
            background-color: lightblue;
            width: max-content;
        }
            table tr td {
            border: 1px solid black;
            padding: 15px; 
            text-align:center;
            width: max-content;
        }
    </style>

    <table>
        <tr>
            <th colspan="6">RECORD OF CONTRIBUTIONS MADE TO THE CHURCH.</th>
        </tr>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Mobile Money Confirmation Code</th>
            <th>Amount Paid in KES.</th>
            <th>Date</th>
            <th>Comment</th>
        </tr>

        
        <?php 
                while($aquire=$result->fetch_assoc())
                {
            ?>

            <tr>
                <td>  <?php echo "{$aquire['ID']}"; ?></td>
                <td>  <?php echo "{$aquire['name']}"; ?></td>
                <td>  <?php echo "{$aquire['moneycode']}"; ?></td>
                <td>  <?php echo "{$aquire['amount']}"; ?></td>
                <td>  <?php echo "{$aquire['date']}"; ?></td>
                <td>  <?php echo "{$aquire['comment']}"; ?></td>
            </tr>
            
            <?php } ?>

        </table>

    </div>
    <?php include 'footer.php' ?>
</html>