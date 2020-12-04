<?php

require_once"connect.php";

$uname="";

$id = $_GET["id"]/39;
	$query = "SELECT * FROM users WHERE id=$id";
	$user = get($query);
	$user = $user[0];
	if(isset($_POST["Add"])){
		$uname = htmlspecialchars($_POST["uname"]);
		$query = "update users set username='$uname' where id=$id";
		execute($query);
		
	}






?>
<html>
	<head>
		<title>Edit</title>
  <link rel="stylesheet" href="../css/registration.css"></head>
	<body>

		<fieldset id="register_form" align= "center">
      <h1>Update User Information</h1>
	  
	  
	  

			<form action="" method="post"  >
				<table>
          <tr>
		  <tr>
					<td><h1><p align="right"><b>Details of User </b></p></h1></td>
					<td>
						<textarea ></textarea>
					</td>
				</tr>
				<tr></tr>
	        <tr>
					<td><h2><p align="left"><b>Verify/ADD/DELETE/UPDATE : </b></p></h2></td>
					<td>
						
					</td>
			
          <tr>
          <td style="text-align: left;"> Username:</td>
         <td><input type="text" value="<?php echo $uname?>" name="uname"></td>
          </tr>
     
     

         

          <tr>
          <td style="text-align: left;">Password:</td>
          <td style="text-align: left;"><input type="text" name="email" ></td>
          </tr>

          <tr>
          <td style="text-align: left;">User Type:</td>
          <td style="text-align: left;">
          <input type="text" name="phone_no"   >

          </td>
          </tr>

          










          <tr>
		  </tr>
		  <tr>
          <td  align="center">
          <input type="submit" name="register" value="Verify">
          </td> 
		  <td colspan="2" align="center">
          <input type="submit" name="register" value="Add">
          </td>
		  <td  align="center">
          <input type="submit" name="register" value="Delete">
          </td>
		  <td colspan="2" align="center">
          <input type="submit" name="register" value="Update">
          </td>
		  
		  
          </tr>
				</table>
			</form>
		</fieldset>
	</body>
</html>
