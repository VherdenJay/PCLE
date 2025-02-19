<?php
include 'includes/config.php';
if(isset($_POST['submit'])) {
    // Collect form 

    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $ssql = "INSERT INTO `admininfo` (`name`, `age`,`email`, `password`) VALUES ('$name', $age,'$email', '$password')";
$result = $conn->query($ssql);

if($result) {
    header('location:Login.php');
}
}
?>