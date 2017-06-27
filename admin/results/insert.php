<?php
$username = 'root';
$password = 'root';

$mysql = new mysqli('127.0.0.1', $username, $password, 'php_course');
if (!empty($_POST['name'])) {
    $name = addslashes($_POST['name']);
    $mysql
        ->query("INSERT INTO results(user_id) VALUES('Test Title')");
}

?>
<FORM action="http://127.0.0.2/admin/groups/insert.php" method="POST">
    <INPUT type="text" name="name"value="">

    <INPUT type="submit" name="submit" value="Добавить">
</FORM>
