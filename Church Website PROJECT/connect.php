<?php
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $gender = $_POST['gender'];
    $password = $_POST['psw'];

    // Connection to database
    $conn = new mysqli('localhost','root','','church_system');
    if($conn->connect_error){
        die('Connection Unsuccesful : '.$conn->connect_error);
    }else{
        echo "Database Connection succesful";
        $stmt = $conn->prepare("insert into user_register(firstName, lastName, email, number, gender, password)
        values(?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssiss", $firstName, $lastName, $email, $number, $gender, $password);
        $stmt->execute();
            session_start();
                $message= "ACCOUNT CREATED SUCCESFULLY";
                $_SESSION['signMessage']= $message;
                header("location:signup.php");
        $stmt->close();
        $conn->close();
    }
