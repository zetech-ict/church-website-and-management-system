<?php
    $announce = $_POST['announcement1'];
    
    // Connection to database
    $conn = new mysqli('localhost','root','','church_system');
    if($conn->connect_error){
        die('Connection Unsuccesful : '.$conn->connect_error);
    }else{
        echo "Database Connection succesful";
        $stmt = $conn->prepare("insert into announcements(announcement)
        values(?)");
        $stmt->bind_param("s", $announce);
        $stmt->execute();
        session_start();
                $message= "POST MADE SUCCESFULLY";
                $_SESSION['postMessage']= $message;
                header("location:announce_updater.php");
        $stmt->close();
        $conn->close();


    }