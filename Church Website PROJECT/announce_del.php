<?php
    $data = mysqli_connect("localhost","root","","church_system");

    if($_GET['announce_id']) {

        $announce_id = $_GET['announce_id'];

        $sql = "DELETE FROM announcements WHERE ID = '$announce_id' ";
        
        $result = mysqli_query ($data, $sql);

        if($result) {
            header("location:announce_edit.php");
        }
    }