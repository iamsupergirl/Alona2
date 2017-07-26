<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "movie_task";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connection ok!";
} catch (PDOException $e) {
    echo "Err: " . $e->getMessage();
}
echo '<pre>';


$films = $conn->query('Select movie_title from Films');
while ($film = $films->fetchAll())
{
    print_r($film);
}