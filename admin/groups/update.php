<?php

$username = 'root';
$password = '';

$mysql = new mysqli('localhost', $username, $password, 'php_course');
$mysql
    ->query("UPDATE groups SET title='Updated Title' WHERE title='Test Title'");


?>