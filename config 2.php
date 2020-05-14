<?php
try {
    // $dbh = new PDO('mysql:host=localhost;dbname=illicit_massage', 'sheri', 'Sp1ritu@l');
    $dbh = new PDO('mysql:host=localhost;dbname=illicit_massage', 'root', '');
    // echo '<p>connected to database</p>';
    }
    // $dbh = null;
    catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'sheri');
// define('DB_PASSWORD', 'Sp1ritu@l');
// define('DB_DATABASE', 'illicit_massage');

   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'illicit_massage');

   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

   
?>