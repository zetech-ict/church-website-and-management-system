<?php
    $eventname = $_POST['eventname'];
    $time = $_POST['time'];
    $date = $_POST['date'];
    $location = $_POST['location'];
    $description = $_POST['descr'];

//Database connect
$connect = new mysqli('localhost','root','','church_system');   
if($connect->connect_error){
    die('Connection Unsuccesful : '.$conn->connect_error);
}else{
    echo "Database Connection succesful";
    $stmt = $connect->prepare("insert into events(eventname, time, date, location, description)
        values(?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $eventname, $time, $date, $location, $description);
    $stmt->execute();
        session_start();
        $notice= "THE EVENT HAS BEEN REGISTERED!";
        $_SESSION['eventMade']= $notice;
        header("location:events.php");
    $stmt->close();
    $connect->close();

}