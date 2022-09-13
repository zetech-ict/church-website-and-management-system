<?php
    $eventname = $_POST['eventname'];
    $name = $_POST['name'];
    $contact = $_POST['contact'];

    // Connection to database
    $conn = new mysqli('localhost','root','','church_system');
    if($conn->connect_error){
        die('Connection Unsuccesful : '.$conn->connect_error);
    }else{
        echo "Database Connection succesful";
        $stmt = $conn->prepare("insert into event_register(eventname, name, contact)
        values(?, ?, ?)");
        $stmt->bind_param("sss", $eventname, $name, $contact);
        $stmt->execute();
           session_start();
           $message = "YOUR EVENT HAS BEEN REGISTERED!";
           $_SESSION['eventreg']= $message;
           header("location:userevent.php");

        $stmt->close();
        $conn->close();
    }