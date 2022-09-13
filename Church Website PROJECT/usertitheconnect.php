<?php
    $name = $_POST['name'];
    $mpesa = $_POST['mpesa'];
    $cash = $_POST['cash'];
    $date = $_POST['date'];
    $comment = $_POST['comment'];

    // Connection to database
    $conn = new mysqli('localhost','root','','church_system');
    if($conn->connect_error){
        die('Connection Unsuccesful : '.$conn->connect_error);
    }else{
        echo "Database Connection succesful";
        $stmt = $conn->prepare("insert into contributions(name, moneycode, amount, date, comment)
        values(?, ?, ?, ?, ?)");
        $stmt->bind_param("ssiss", $name, $mpesa, $cash, $date, $comment);
        $stmt->execute();
           session_start();
           $message = "YOUR CONTRIBUTION HAS BEEN RECORDED";
           $_SESSION['contribute']= $message;
           header("location:usercontribution.php");

        $stmt->close();
        $conn->close();
    }