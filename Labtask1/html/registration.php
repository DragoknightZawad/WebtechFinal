<?php include_once "php/validation_registration.php" ;?>
<html>
	<head></head>
	<body>
		<?php include_once "header.php";?>
		<fieldset>
		* Fields are required
			<form action="" method="post">
				<table>
					<tr>
						<td>Username:</td>
						<td><input type="text" value="<?php echo $uname?>" name="uname"></td>
						<td><span style="color:red;">*<?php echo $err_uname;?></span>
						</td>
					</tr>
					<tr>
						<td>Full Name:</td>
						<td><input type="text" value="<?php echo $fname?>" name="fname"></td>
						<td><span style="color:red;">*<?php echo $err_fname;?></span>
						</td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" value="<?php echo $pass?>" name="pass"></td>
						<td><span style="color:red;">*<?php echo $err_pass;?></span>
						</td>
					</tr>
					<tr>
						<td>Confirm Password:</td>
						<td><input type="password" value="<?php echo $cpass?>" name="cpass"></td>
						<td><span style="color:red;">*<?php echo $err_cpass;?></span>
						</td>
					</tr>
					<tr>
					 <td  style="text-align: right;" >Gender:</td>

                     <td><input type="radio" name="gender" value="Male">Male
                         <input type="radio" name="gender" value="Female">Female
                         <span><?php echo $err_gender; ?></span>
                     </td>
                 </tr>
					<tr>
						<td>Email:</td>
					    <td><input type="text" value="<?php echo $email?>" name="email"></td>
						<td><span style="color:red;">*<?php echo $err_email;?></span>
						</td>
					</tr>
					<tr>
						<td>Contact:</td>
					    <td><input type="text" value="<?php echo $contact?>" name="contact"></td>
						<td><span style="color:red;">*<?php echo $err_contact;?></span>
						</td>
					</tr>
					<tr>
				<tr>
                <td style="text-align: right;">City: </td>
				 <td style="text-align: left; ">
				  <select name="city"  >
                            <option disabled selected> Month</option>
                            <?php
                            $city = array(
                                "Dhaka",
                                "Chittagong",
                                "Khulna",
                               
                            );
                            for ($m = 0;$m < 3;$m++)
                            {
                                echo "<option>  $city[$m] </option>";
                            }
                            ?>
                        </select>
				
						<td colspan="2" align="right">
							<input type="submit" name="register" value="register">
						</td>
					</tr>
				</table>
			</form>
		</fieldset>
	</body>
</html>
