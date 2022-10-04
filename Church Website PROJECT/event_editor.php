<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("location:adminlogin.php");
    }

    $data = mysqli_connect("localhost","root","","church_system");

    $sql = "SELECT * FROM events";

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
        <h1 class="img-text">EVENT EDITOR.</h1>
    </div>

    <p>This section is for the viewing of current events and deletion of past or cancelled ones.
    </p>

    <style>
            table {
                margin-top: 50px;
                margin-left: auto;
                margin-right: auto;
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
            <th colspan="7">CURRENT EVENTS.</th>
        </tr>
        <tr>
            <th>Event ID</th>
            <th>Event Name</th>
            <th>Time</th>
            <th>Date</th>
            <th>Location</th>
            <th>Description</th>
            <th>Delete Event</th>
        </tr>

        <?php 
                while($aquire=$result->fetch_assoc())
                {
            ?>
        
        <tr>
                <td>  <?php echo "{$aquire['ID']}"; ?></td>
                <td>  <?php echo "{$aquire['eventname']}"; ?></td>
                <td>  <?php echo "{$aquire['time']}"; ?></td>
                <td>  <?php echo "{$aquire['date']}"; ?></td>
                <td>  <?php echo "{$aquire['location']}"; ?></td>
                <td>  <?php echo "{$aquire['description']}"; ?></td>
                <td>  
                    <?php echo"<a class='btn btn-danger' onClick=\" javascript:return confirm('Are you sure you want to permanently delete this event?') \"
                    href='event_del.php?event_id={$aquire['ID']}'> Delete </a>"; ?>
                </td>
            </tr>
            
            <?php } ?>

        </table>

</div> 
    <?php include 'footer.php' ?> 
</html>