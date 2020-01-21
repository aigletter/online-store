<?php

function authorization($login, $password){
	$link = getDBConnection();
	$login = mysqli_real_escape_string($link, $login);
	$password=mysqli_real_escape_string($link, $password);
	
	$result= mysqli_query($link, "SELECT * FROM `users` WHERE `login`='{$login}' AND `password`='{$password}'");
	$user=mysqli_fetch_assoc($result);
	return $user;
}
function checkUserData(){
	 return $_SESSION['user_data'];
	 return isset($_SESSION['user_data']);
}