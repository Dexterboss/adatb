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

$sql = "Select id, vezetknev, keresztnev FROM emberek";
$eredmeny=$conn->query($sql);
if ($eredmeny->num_rows > 0)
{
    while($row = $eredmeny->fetch_assoc())
    {
        echo "id: ".$row["id"]."-nev".$row["vezeteknev"]."". $row["keresztnev"]. "<br>";
    }
}
else
{
    echo "0 rekord az eredmény";
}

$conn->close();