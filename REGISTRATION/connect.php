<?php
$servername = "localhost";
$username = "root";
$password = "hadjilover911";
$database = "registration";

$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST ['name'];
    $last_name = $_POST ['last_name'];
    $age = $_POST ['age'];
    $course = $_POST['course'];

     $stmt = $conn->prepare("INSERT INTO tblregistration (name, last_name, age, course) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssis", $name, $last_name, $age, $course);
    $stmt->execute();
    $stmt->close();
       echo "<script>alert('Registration successful!'); window.location.href='index.php';</script>";
}

$conn->close();
?>

