<?php 
 try {
    //change this to the new database
    $db = new PDO('mysql:host=localhost;dbname=social_media','admin','.Sxi/ELWwLmCgir4');
} catch (PDOException $e) {
    echo 'Connection failed'. $e->getMessage();
}

?>