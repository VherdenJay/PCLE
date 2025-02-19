<?php
include 'includes/config.php';

$loginFailed = "";
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password =$_POST['password'];

    $result = $conn->query("SELECT * FROM admininfo WHERE `email` = '$email'");
    while($row = $result->fetch_assoc()){
        $newEmail = $row['email'];
        $newpw = $row['password'];

        if($newEmail === $email && $newpw === $password){
            header('location:Index.php');
        }
        else {
            $loginFailed = "true";
        }
    }
}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href ="css/Register.css">
    <title>Register</title>
</head>
<body>
    <form action ="Login.php" method ="POST"   >
    <div class="mb-3">
        <label for="email" class="form-label">E-mail:</label>
        <input type="text" class="emailf" id="emaili" name="email">
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password::</label>
        <input type="text" class="passwordf" id="passwordi" name="password">
    </div>
    <div id="alert"  style="background-color: #f8d7da;">
        <p>Incorect Email or password.</p>
    </div>
    <button type="submit" class="btn btn-primary"name="submit">Submit</button><br>

    <div class="txt">
        <p>Wala ka bang account?   <a href="Register.php">Mag Jakol</a></p>
    </div>
    
    </form>

    <script>
        <?php if($loginFailed == "true") {?>
            document.getElementById("alert").style.display = "block";
            <?php } ?>
    </script>
</body>
</html>