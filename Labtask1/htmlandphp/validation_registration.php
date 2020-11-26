<?php
	$uname="";
	$fname="";
	$err_fname="";
	$err_uname="";
	$pass="";
	$cpass="";
	$err_pass="";
	$err_cpass="";
	$email="";
	$err_email="";
	$contact="";
	$err_contact="";
	$gender="";
	$err_gender="";
	$city="";
	$err_city="";
	$hasError=false;
	
	if(isset($_POST["register"])){
		if(empty($_POST["uname"])){
			$err_uname="Username Required";
			$hasError =true;	
		}
		else{
			$uname = htmlspecialchars($_POST["uname"]);
		}
		if(empty($_POST["fname"])){
			$err_fname="Full name Required";
			$hasError =true;	
		}
		else{
			$fname = htmlspecialchars($_POST["fname"]);
		}
		if(empty ($_POST["pass"])){
			$err_pass="Password Required";
			$hasError = true;
		}
		else{
			$pass=htmlspecialchars($_POST["pass"]);
		}
		if(empty ($_POST["cpass"])){
			$err_cpass="Confirm your Password";
			$hasError = true;
		}
		else{
			$cpass=htmlspecialchars($_POST["cpass"]);
		}
		if(empty ($_POST["email"])){
			$err_email="Email Required";
			$hasError = true;
		}
		else{
			$email=htmlspecialchars($_POST["email"]);
		}
		if(empty ($_POST["contact"])){
			$err_contact="Contact Required";
			$hasError = true;
		}
		else{
			$contact=htmlspecialchars($_POST["contact"]);
		}
	 if (empty($_POST["gender"]))
    {
        $err_gender = "*Gender  required";
        $hasError = true;
    }
    else
    {
        $gender = htmlspecialchars($_POST["gender"]);
    }
	if (empty($_POST["city"]))
    {
        $err_city = "*city name is  required";
        $hasError = true;
    }
	else
    {
        $city = htmlspecialchars($_POST["city"]);
    }
		
	if(!$hasError){
		$username="root";
		$servername="localhost";
		$password="";
		$db_name="finalwebtech";
		$conn=mysqli_connect($servername,$username,$password,$db_name);
		if(!$conn){
			die("Connection failed: ".mysqli_connect_error());
		}
		$p="d41d8cd98f00b204e9800998ecf8427e";
		$p=md5($p);
		echo $p;
		if ($stmt = mysqli_prepare($conn, $query = "INSERT INTO users (username, password) VALUES (?,?)")) {

			mysqli_stmt_bind_param($stmt, 'si', $uname,$pass);

			mysqli_stmt_execute($stmt) or die('Error when inserting:'.mysqli_error($connection));
		}else{
		die('Error when preparing '.mysqli_error($conn));
		}
	}
		
		
		
		
		
		
		
		$query = "Select * FROM users";
		$results = mysqli_query($conn,$query);
		if(mysqli_num_rows($results)>0)
		{
			echo'<table border= "1" style="border-collapse:collapse;">';
			echo"</tr>";
			echo"<th>Username</td>";
			echo"<th>Password</td>";
			echo"<th>Type</td>";
			echo"</tr>";
			
		
		while($row=mysqli_fetch_assoc($results)){
			echo"<tr>";
			echo"<td>".$row["username"]."</td>";
			echo"<td>".$row["password"]."</td>";
			echo"<td>".$row["user_type"]."</td>";
			echo"</tr>";
			
		}
		echo"</table>";
		
		}
	}
	
	
	
	
?>