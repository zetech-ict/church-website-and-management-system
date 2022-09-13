<?php
    $data = mysqli_connect("localhost","root","","church_system");

    if($_GET['msg_id']) {

        $message_id = $_GET['msg_id'];

        $sql = "DELETE FROM messages WHERE ID = '$message_id' ";
        
        $result = mysqli_query ($data, $sql);

        if($result) {
            header("location:texts.php");
        }
    }