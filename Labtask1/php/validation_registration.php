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
			$users = simplexml_load_file("data.xml");
			
		$user = $users->addChild("user");
			$user->addChild("username",$uname);
			$user->addChild("fullname",$fname);
			$user->addChild("password",$pass);
			$user->addChild("email",$email);
			$user->addChild("city",$city);
			$user->addChild("gender",$gender);
			$user->addChild("contact",$contact);
			$user->addChild("type","user");
			
		    header("Location: login.php");
			
			$xml = new DOMDocument("1.0");
			$xml->preserveWhiteSpace=false;
			$xml->formatOutput= true;
			$xml->loadXML($users->asXML());
			
			
			$file = fopen("data.xml","w");
			fwrite($file,$xml->saveXML());
		}
	}
	
?>