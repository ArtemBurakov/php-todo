<?php
require 'db-connect.php';
require 'validator.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["taskId"]) || empty($_POST["taskName"]) || empty($_POST["taskText"])) {
        echo json_encode(array('success' => 0));
    } else {
        if (isset($_POST['taskId'], $_POST['taskName'], $_POST['taskText'])) {
            $validator = new Validator();
            $date = new DateTime();
            $time = $date->getTimestamp();
            $id = $_POST['taskId'];
            $name = $_POST['taskName'];
            $text = $_POST['taskText'];

            if ($validator->validateText($name) && $validator->validateText($text)) {
                echo json_encode(array('success' => 1));

                $sql = "UPDATE $database SET name='$name', text='$text', updated_at=$time WHERE id=$id";
                if ($conn->query($sql) === TRUE) {}
                else {
                    echo "Error updating task: " . $conn->error;
                }
                $conn->close();
            } else {
                echo json_encode(array('success' => 0));
            }
        } else {
            echo json_encode(array('success' => 0));
        }
    }
}
?>
