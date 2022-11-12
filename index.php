<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <form action="check_login/check.php" class="flex-" method="post">
        <input type="text" name="user" placeholder="user">
        <input type="password" name="pass" placeholder="pass">
        
        <input type="submit" value="Log In" name="submit">
        <p><a href="register.php">
            Want to register?Click here</a></p>
    </form>

</body>
</html>