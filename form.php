<?php
$name = $_POST['name'];
$email = $_POST['email'];
$dropdown = $_POST['find-us'];
$message = $_POST['message'];

// Database connection
$conn = new mysqli('localhost', 'root', '', 'engine_db');
if ($conn->connect_error) {
    die('Connection Failed : ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO `form` (`name`, `email`, `dropdown`, `message`) VALUES (?, ?, ?, ?)");
    // echo $conn -> error;die;
    $stmt->bind_param("ssss", $name, $email, $dropdown, $message);
    $stmt->execute();
    // echo "Thanks! We will get abck to you soon!";
    $stmt->close();
    $conn->close();
    header('Location: index.php');
}

?>