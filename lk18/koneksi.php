<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "daftar";

$conn = mysqli_connect($server, $user, $pass, $database);

if(!$conn)
{
    echo "Database no connect";
}

?>