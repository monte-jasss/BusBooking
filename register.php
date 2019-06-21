<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="author" content="Monu Lakshkar">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Registration</title>
		<link rel="shortcut icon" href="image/favicon.png">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/cimg.css">
		<link rel="stylesheet" type="text/css" href="css/reg.css">
		<link rel="stylesheet" type="text/css" href="css/contact.css">
		<link rel="stylesheet" type="text/css" href="css/animation.css">
	</head>
	
	<body class="body">
		<?php require('setup.php'); ?>
		<?php	
			if(isset($_POST['submit'])){
				
				$fname = $_POST['fname'];
				$lname = $_POST['lname'];
				$gender = $_POST['gender'];
				$email = $_POST['email'];
				$mobile = $_POST['mobile'];
				$pass1 = $_POST['pass1'];
				$pass2 = $_POST['pass2'];
				
				$con = mysqli_connect('localhost','root','','project');
				
				$fetch = "SELECT `email`,`mobile` FROM `registration`";
				
				$run1 = mysqli_query($con, $fetch);
				
				while($row = mysqli_fetch_array($run1)){
					$mail = $row['email'];
					$mobi = $row['mobile'];
					
					if($mail==$email){
						echo '<div style="margin: 0 auto;padding: 0px;border-radius:5px;width:100%;height:20px;background-color:rgb(0,200,0);color:black;">
								<center style="line-height:18px;font-weight:bold;"><h4>Email ID Already Registered.</h4></center>
							</div>';
					}
					else{
						if($mobi==$mobile){
							
							echo '<div style="margin: 0 auto;padding: 0px;border-radius:5px;width:100%;height:20px;background-color:rgb(0,200,0);color:black;">
									<center style="line-height:18px;font-weight:bold;"><h4>Mobile Number Already Registered.</h4></center>
								</div>';
						}
						else{
							if($pass1==$pass2){
								$pass1 = md5($pass1);
								$insert = "INSERT INTO `registration`(`name`, `l_name`, `email`, `mobile`, `gender`, `pass1`) VALUES ('$fname', '$lname', '$email', '$mobile', '$gender', '$pass1')";
								$run2 = mysqli_query($con, $insert);
								if($run2 == TRUE){
									echo "<h1>Done!!</h1>";
									header('location: login.php');
								}
							}
							else{
								echo '<div style="margin: 0 auto;padding: 0px;border-radius:5px;width:100%;height:20px;background-color:rgb(0,200,0);color:black;">
										<center style="line-height:18px;font-weight:bold;"><p>Password not Matched.</p></center>
									 </div>';
							}
						}
						
					}
				}
			}
		?>
		
		<div class="regform">	
			<div class="div">
				<article class="first">
					<header><h2>Register Your Self...</h2></header>
					<form method="post" action="register.php" enctype="multiple/data-form" autocomplete="on">
						<label>First Name:</label>
						<input class="input1" type="text" name="fname" placeholder="First name">

						<label>Last Name:</label>
						<input class="input1" type="text" name="lname" placeholder="Last name">
						
						<label>Gender:</label>
						<select class="input1" name="gender">
							<option>--select--</option>
							<option>Male</option>
							<option>Female</option>
							<option>Other</option>
						</select>
						
						<label>Email:</label>
						<input class="input1" type="email" name="email" placeholder="sample@example.com" required>
						
						<label>Mobile:</label>
						<input class="input1" type="tel" name="mobile" placeholder="1234567890" required>

						<label>Password:</label>
						<input class="input1" type="password" name="pass1" placeholder="password" required>
						
						<label>Re-type Password:</label>
						<input class="input1" type="password" name="pass2" placeholder="re-type" required>
						
						<input class="button1" type="submit" name="submit" value="Submit"> <input class="button2" type="reset" value="Reset">
					</form>
				</article>
			</div>
		</div>
		
		<aside class="slide2">
			<article>
				<header><h2><i>About Us</i></h2></header>
				<footer class="info">June 3, 2017</footer>
				<content>
					<p>
						CSS stands for Cascading Style Sheets
						CSS describes how HTML elements are to be displayed on screen, paper, or in other media
						CSS saves a lot of work. It can control the layout of multiple web pages all at once
						External stylesheets are stored in CSS files.<br>
						CSS stands for Cascading Style Sheets
						CSS describes how HTML elements are to be displayed on screen, paper, or in other media
						CSS saves a lot of work. It can control the layout of multiple web pages all at once
						External stylesheets are stored in CSS files.
					</p>
				</content>
			</article>
		</aside>
		
		<aside>
			<article class="slide3">
				<header><h2>Developer</h2></header>
					<div class="slider">
						<section>
							<center>
								<div class="cimg">
									<a href="https://twitter.com/Monte_jasss" tabindex="6"><img src="image/cimg1.jpg" alt="Monu"></a>
									<footer><h4>Monu Lakshkar<br>Enrollment: 15CS001943<br>Mob: 8966073336</h4></footer>
								</div>
								<div class="cimg">
									<a href="" tabindex="7"><img src="image/cimg2.jpg" alt="Ashwani"></a>
									<footer><h4>Ashwani Lakshkar<br>Enrollment: 15CS001927<br>Mob: 7742041636</h4></footer>
								</div>
							</center>
						</section>
					<div>
			</article>
		</aside>
		
		
		<footer class="footer">
			<div>
				<img src="image/fb.png" alt="Facebook">
				<img src="image/twt.png" alt="Twitter">
				<img src="image/yt.png" alt="Youtube">
				<img src="image/insta.png" alt="Instagram">
			</div>	
			<div><div>
			Copyrights &copy; 2017; All rights reserved.
			</div></div>
		</footer>
	</body>
</html>