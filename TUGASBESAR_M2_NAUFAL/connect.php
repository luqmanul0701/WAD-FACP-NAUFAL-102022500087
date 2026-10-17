<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "wad";

$conn = mysqli_connect($host, $username, $password, $database, "3306");

if (!$conn) {
   http_response_code(500);
   exit('gabisa masuk');
}

mysqli_set_charset($conn, 'utf8mb4');

?>
