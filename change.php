<?php
	if(isset($_SESSION['Uname'])){
?>		
		<form method="post" action="forgot.php?id=<?php echo $_SESSION['id']; ?>&ghjkl=<?php echo $key; ?>" autocomplete="off">
		<label>Old-Password:</label>
		<input class="input1" type="password" name="opass" placeholder="password" required>
		<label>New-Password:</label>
		<input class="input1" type="password" name="pass1" placeholder="password" required>
		<label>Re-type Password:</label>
		<input class="input1" type="password" name="pass2" placeholder="re-type" required>
		<input class="button" name="change" type="submit" value="Change Password">
		</form>
<?php	
	}
	else{
		if(isset($_POST['submit'])){
			$email = $_POST['mail'];
			$con = mysqli_connect('localhost','root','','project');
			$query = "SELECT * FROM `registration` WHERE email='$email'";
			$run = mysqli_query($con, $query);
			$row = mysqli_fetch_assoc($run);
			$mail = $row['email'];
			$id = $row['id'];
			//$number = ('A01S12D23F34G45H56J67K78L89@90#');
			$key = mt_rand(100000,999999);
			//$keyG = str_shuffle($number);
			//$keyO = substr($keyG,4,6);
			//$key = $keyO;
			echo $key;
			if($mail){
				mail('$mail','One Time Password','$key','from: mlakshkar5@gmail.com');
				echo "Sent!!";
?>	
	<form method="post" action="forgot.php?id=<?php echo $id; ?>&ghjkl=<?php echo $key; ?>" autocomplete="off">
	<label>New-Password:</label>
	<input class="input1" type="password" name="pass1" placeholder="password" required>
	<label>Re-type Password:</label>
	<input class="input1" type="password" name="pass2" placeholder="re-type" required>
	<label>OTP(sent to your registered mail ID):</label>
	<input class="input1" type="password" name="otp" placeholder="******">
	<input class="button" name="change" type="submit" value="Change Password">
	</form>
<?php
			}
			else{
				echo "<script>window.open('forgot.php?msg=User does not Exist. Please try again using different UserName.','_self')</script>";
			}
		}	
		else{
?>	
	<form method="post" action="forgot.php" autocomplete="off">
	<label>UserName:</label>
	<input class="input1" type="email" name="mail" placeholder="Email" required>
	<input class="button" name="submit" type="submit" value="Submit">
	</form>
<?php 
		} 
	}
?>