<?php
    $data = mysqli_connect("localhost","root","","church_system");

    if($_GET['mem_id']) {

        $member_id = $_GET['mem_id'];

        $sql = "DELETE FROM user_register WHERE ID = '$member_id' ";
        
        $result = mysqli_query ($data, $sql);

        if($result) {
            header("location:memberlist.php");
        }
    }