<?php
$username = 'root';
$password = '';

$mysql = new mysqli('localhost', $username, $password, 'php_course');
$mysql
    ->query("UPDATE lessons SET title='Updated Title' WHERE title='Testing Title'");

?>