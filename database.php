<?php
$servername = "localhost";
$database = "nh";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn)
    {
        die('Coul not Connect My Sql:' .mysql_error());
    }
?>