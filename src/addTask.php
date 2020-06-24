<?php
require 'db-connect.php';
require 'validator.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"]) || empty($_POST["text"])) {
        echo json_encode(array('success' => 0));
    } else {
        if (isset($_POST['name'], $_POST['text'])) {
            $validator = new Validator();
            $date = new DateTime();
            $time = $date->getTimestamp();
            $name = $_POST['name'];
            $text = $_POST['text'];

            if ($validator->validateText($name) && $validator->validateText($text)) {
                echo json_encode(array('success' => 1));

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
        } else {
            echo json_encode(array('success' => 0));
        }
    }
}
?>
