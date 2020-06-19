<?php
    include 'db-connect.php';

    $return_arr = array();

    $sql = "SELECT * FROM $database WHERE id=$id";
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $name = $row['name'];
        $text = $row['text'];
        $status = $row['status'];
        $created_at = $row['created_at'];
        $updated_at = $row['updated_at'];
    }
    $conn->close();
?>
