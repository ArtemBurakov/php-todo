<?php
    include 'db-connect.php';

    if (isset($_POST['taskId'])) {
        echo json_encode(array('success' => 1));

        $id = $_POST['taskId'];
        $sql = "DELETE FROM $database WHERE id=$id";

        if ($conn->query($sql) === TRUE) {}
        else {
            echo "Error deleting record: " . $conn->error;
        }
        $conn->close();
    } else {
        echo json_encode(array('success' => 0));
    }
?>
