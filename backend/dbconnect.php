<?php
#To be replaced for security after alpha phase
$servername = "localhost";
$username = "opengawusr";
$password = "138251";
$dbname = "opengaw";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    #echo "Connected successfully"; Disabled unless needed for debugging
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
