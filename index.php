<!DOCTYPE html>
<html lang="ens">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Social Media</title>
</head>
<body>
    <h2>Login</h2>
    <!-- Form to login -->
    <form action="login.php" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">

        <label for="password">Password</label>
        <input type="password" name="password" id="password">

        <input type="submit" value="Login">
    </form>

    <br>

    <!-- form to make a new account -->
    <form action="newAccount.php" method="post">
        <label for="newName">Username</label>
        <input type="text" name="newName" id="newName">

        <label for="newEmail">Email</label>
        <input type="email" name="newEmail" id="newEmail">

        <label for="newPassword">Password</label>
        <input type="password" name="newPassword" id="newPassword">

        <label for="conPassword">Confirm Password</label>
        <input type="password" name="conPassword" id="conPassword">

        <input type="submit" value="Make new account">

    </form>


</body>
</html>