<!-- php code used to login -->
<?php 
    header("index.php");
    require ('connection.php');
        //Get the email and password
    $email = $_POST['email'];
    $pass = $_POST['password'];
    //Declare and execute the query that checks if the email and password is in the database.
    $checkEmailPass = $db->prepare("SELECT id, name FROM USERS WHERE email ='$email' AND password ='$pass'");
    $checkEmailPass->execute();

    // Ifelse statement that checks if the user is in the database
    if ($checkEmailPass->rowCount() === 1) {
        $userData = $checkEmailPass->fetch();
        $userName = $userData['name'];
        echo "Welcome ". $userName . " you are logged in " ;
    } else {
        echo "This user is not in the database";
    }
?>