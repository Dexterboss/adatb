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
$sql = "DROP TABLE IF EXISTS emberek";
if ($conn->query($sql) === TRUE)
{
    echo "Sikeres táblatörtlés";
}
else
{
    echo "Nem sikerült a tábla törlés";
}
$sql = "";
$sql="CREATE TABLE IF NOT EXISTS emberek(
    id INT unsigned AUTO_INCREMENT PRIMARY KEY, 
	vezeteknev VARCHAR(30) NOT NULL, 
    keresztnev VARCHAR(30) NOT NULL, 
    beosztas VARCHAR(50) NOT NULL, 
    RegisztDatum TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === TRUE)
{
    echo "Sikeres tábla létrehozás";
}
else
{
    echo "Nem sikerült a tábla létrehozása";
}
$conn->close();    

