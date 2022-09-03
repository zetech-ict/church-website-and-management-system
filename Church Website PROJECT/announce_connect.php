<?php
    $announce = $_POST['announcement1'];
    $announce2 = $_POST['announce2'];
    $announce3 = $_POST['announce3'];
    $announce4 = $_POST['announce4'];
    $announce5 = $_POST['announce5'];
    $announce6 = $_POST['announce6'];
    
    
    // Connection to database
    $conn = new mysqli('localhost','root','','church_system');
    if($conn->connect_error){
        die('Connection Unsuccesful : '.$conn->connect_error);
    }else{
        echo "Database Connection succesful";
        $stmt = $conn->prepare("insert into announcements(announcement, announce_2, announce_3, announce_4, 
        announce_5, announce_6) values(?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $announce, $announce2, $announce3, $announce4, $announce5, $announce6);
        $stmt->execute();
                session_start();
                $message= "POST MADE SUCCESFULLY";
                $_SESSION['postMessage']= $message;
                header("location:announce_updater.php");
        $stmt->close();
        $conn->close();


    }