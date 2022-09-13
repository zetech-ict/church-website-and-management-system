<?php
    $data = mysqli_connect("localhost","root","","church_system");

    if($_GET['event_id']) {

        $event_id = $_GET['event_id'];

        $sql = "DELETE FROM events WHERE ID = '$event_id' ";
        
        $result = mysqli_query ($data, $sql);

        if($result) {
            header("location:event_editor.php");
        }
    }