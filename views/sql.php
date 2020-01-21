<?php 
$mysqli = new mysqli('localhost', 'root', '', 'db_shop');
if (mysqli_connect_errno()) {
   printf("Помилка підключення: %s\n", mysqli_connect_error());
   exit;
}
$users = $mysqli->query('SELECT * FROM users')->fetch_array(MYSQLI_ASSOC);
echo '<pre>';
print_r($users);
echo '</pre>';