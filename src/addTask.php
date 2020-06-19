<?php
    include 'db-connect.php';

    if (isset($_POST['name'], $_POST['text'])) {
        echo json_encode(array('success' => 1));

        $date = new DateTime();
        $time = $date->getTimestamp();
        $name = $_POST['name'];
        $text = $_POST['text'];

        $sql = "INSERT INTO $database (`name`, `text`, `status`, `created_at`, `updated_at`)
        VALUES ('".$name."', '".$text."', '0', '".$time."', '".$time."')";

        if ($conn->query($sql) === TRUE) {}
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    } else {
        echo json_encode(array('success' => 0));
    }
?>
