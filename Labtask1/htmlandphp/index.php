<?php
	$con = mysqli_connect("localhost","root","","finalwebtech");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
	$flag=false;
$pass = md5($_POST['password']);

$query = 'select username, password from sample where username="' .$_POST['username'] .'" and password="' .$pass .'";';


$ans = mysqli_query($con, $query);
if (mysqli_num_rows($ans)>0){
	$flag=true;
session_start();
$_SESSION["logged_in"] = true;
$_SESSION["username"] = $_POST['username'];
}


if($flag){

		header("Location:dashboard.php");
	}else{
		if( (isset($_POST['password']) )&&(isset($_POST['username']))){
		echo "Invalid credentiails";
	}
	else{ echo "Provide credentials.";}
	}




?>
