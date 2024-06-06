<?php
$host = 'localhost';  
$dbname = 'codeplus'; 
$username = 'root';    
$password = '';      

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET NAMES 'utf8'");
} catch(PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}

/*try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET NAMES 'utf8'");
    echo "Database connection established successfully.";
} catch(PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}*/
?>