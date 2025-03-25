<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "enabn";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
{
    die("Csatlakozási hiba". $conn->connect_error);
}
else
{
    echo"Csatlakozás megtörtént";
}



