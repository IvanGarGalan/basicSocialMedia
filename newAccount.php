<!-- php code used to login -->
<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require ('connection.php');

//get the name, email and password,it also gets checked
$newName = filter_input(INPUT_POST, 'newName',FILTER_SANITIZE_STRING);
$newEmail = filter_input(INPUT_POST,'newEmail',FILTER_SANITIZE_EMAIL);
$newPassword = trim($_POST['newPassword']);
$conPassword = trim($_POST['conPassword']);

//Validate user input
if (!$newName) {
    echo "Please enter a valid username.";
    exit;
}

if (!$newEmail) {
    echo "Please enter a valid email address.";
    exit;
}

if (!$newPassword) {
    echo "Please enter a valid password.";
    exit;
}

if ($newPassword !== $conPassword) {
    echo "Passwords do not match.";
    exit;
}

    //code to see if the user is already in the database
    
    $checkSameName = $db->prepare("SELECT name FROM users where name = ?" );
    $checkSameName->execute([$newName]);
    
    $checkSameEmail = $db->prepare("SELECT email FROM users where email = ?" );
    $checkSameEmail ->execute([$newEmail]);
    
    //ifelse statement to see if the email or username is already taken.
    if ($checkSameEmail->rowCount() > 0 || $checkSameName->rowCount() > 0) {
        echo "The username or email is already taken";
    } else {
        //insert the new user
        $insertNewUser = $db->prepare("INSERT INTO USERS (email,name,password) VALUES (?,?,?)");
        $insertNewUser->execute([$newEmail,$newName,$newPassword]);
        echo "User registered succesfully";
        //Redirect to the main page
        header("Location: index.php");
        exit;
    }
}
    ?>