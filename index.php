<?php 
    include 'connexion.php';

    if(isset($_POST['submit-btn'])){
        $filter_name=filter_var($_POST['name'],FILTER_SANITIZE_STRING);
        $name=mysqli_real_escape_string($conn,$filter_name)

        $filter_email=filter_var($_POST['email'],FILTER_SANITIZE_STRING);
        $name=mysqli_real_escape_string($conn,$filter_email)

        $filter_password=filter_var($_POST['password'],FILTER_SANITIZE_STRING);
        $name=mysqli_real_escape_string($conn,$filter_password)

        $filter_cpassword=filter_var($_POST['cpassword'],FILTER_SANITIZE_STRING);
        $name=mysqli_real_escape_string($conn,$filter_cpassword)
    }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=!, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="form-container">
        <form method="post">
            <h1> Register Now </h1>
            <input type="text" name="name" placeholder="enter your name" required>
            <input type="email" name="email" placeholder="enter your email" required>
            <input type="password" name="password" placeholder="enter your password" required>
            <input type="password" name="password" placeholder="confirm your password" required>
            <input type="submit" name="submit-btn" value="Register Now" class="btn">
            <p>already have an account<a href="login.php">Login Now</a></p>
        </form>

    </section>













</body>
</html>