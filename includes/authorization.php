<?php

function authorization($login, $password){
	$link = getDBConnection();
	$login = mysqli_real_escape_string($link, $login);
	$password=mysqli_real_escape_string($link, $password);
    $user = getItem("SELECT * FROM `users` WHERE `login`='{$login}' AND `password`='{$password}'");
	return $user;
}
function checkUserData(){
	 return isset($_SESSION['user_data']);
}