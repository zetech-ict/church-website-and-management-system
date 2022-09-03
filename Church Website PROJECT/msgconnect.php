<?php
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $message = $_POST['msg'];

//Database connect
$connect = new mysqli('localhost','root','','church_system');   
if($connect->connect_error){
    die('Connection Unsuccesful : '.$conn->connect_error);
}else{
    echo "Database Connection succesful";
    $stmt = $connect->prepare("insert into messages(name, number, email, message)
        values(?, ?, ?, ?)");
    $stmt->bind_param("siss", $name, $number, $email, $message);
    $stmt->execute();
        session_start();
        $notice= "YOUR MESSAGE HAS BEEN SENT!";
        $_SESSION['sentMessage']= $notice;
        header("location:contact.php");
    $stmt->close();
    $connect->close();

}

