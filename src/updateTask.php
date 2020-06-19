<?php
    include 'db-connect.php';

    if (isset($_POST['taskId'], $_POST['taskName'], $_POST['taskText'])) {
        echo json_encode(array('success' => 1));

        $date = new DateTime();
        $time = $date->getTimestamp();

        $id = $_POST['taskId'];
        $name = $_POST['taskName'];
        $text = $_POST['taskText'];

        $sql = "UPDATE $database SET name='$name', text='$text', updated_at=$time WHERE id=$id";
        if ($conn->query($sql) === TRUE) {}
        else {
            echo "Error updating task: " . $conn->error;
        }

        $conn->close();
    } else {
        echo json_encode(array('success' => 0));
    }
?>
