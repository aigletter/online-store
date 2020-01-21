<?php 
  session_start();
 unset($_SESSION);
  include 'includes/authorization.php';
  	if (checkUserData()) {
		header('Location: /');
	}
 $message=null;
if ($_SERVER["REQUEST_METHOD"]=="POST"){
	$inputLogin=$_POST["login"];
	$inputPassword=$_POST["password"];
	$user=authorization($inputLogin, $inputPassword);

		if($user !==null){
			$message="Ви авторизувалися";
			$_SESSION['user_data'] = $user;
			header('Location:/');
		}
		else {
			$message="Ви не авторизувалися";
		}
}//echo '<pre>'; print_r($_SESSION); echo '</pre>';	
  view ('form',['message'=>$message]);

 ?>
