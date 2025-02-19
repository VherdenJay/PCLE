<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href ="css/Register.css">
    <title>Register</title>
</head>
<body>
    <form action ="Process.php" method ="POST"   >
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name:</label>
        <input type="text" class="namef" id="namei" name="name">
        <!-- <div id="emailHelp" class="help">We'll never share your email with anyone else.</div> -->
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Age:</label>
        <input type="int" class="agef" id="agei" name="age">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">E-mail:</label>
        <input type="text" class="emailf" id="emaili" name="email">
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password::</label>
        <input type="text" class="passwordf" id="passwordi" name="password">
    </div>

    <button type="submit" class="btn btn-primary"name="submit">Submit</button>

    <div class="txt">
        <p>Already have an account?   <a href="Login.php">Log In</a></p>
    </div>

    
    </form>
</body>
</html>