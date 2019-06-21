<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="author" content="Monu Lakshkar">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Login for access</title>
		<link rel="shortcut icon" href="image/favicon.png">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/cimg.css">
		<link rel="stylesheet" type="text/css" href="css/reg.css">
		<link rel="stylesheet" type="text/css" href="css/contact.css">
		<link rel="stylesheet" type="text/css" href="css/animation.css">
	</head>
	
	<body class="body">
		
		<?php
			if(isset($_SESSION['Uname'])){
				echo '<div>
					<header class="header">
						<img src="image/logo2.png" alt="">
						<nav>
							<ul class="navbar">
								<li class="left"><a href="index.php" tabindex="1">Home</a></li>
								<li class="left"><a href="booking.php" tabindex="6">Book Ticket</a></li>
								<li class="left"><a href="register.php" tabindex="2">Registration</a></li>
								<li class="left"><a href="contact.php" tabindex="4">Contact</a></li>
								<li class="left"><a href="logout.php" tabindex="5">'
		?>
		<?php echo $_SESSION["Uname"]; ?>
		<?php 
			echo '</a>
			</li>
							</ul>
						</nav>	
					</header>
				</div>';
				echo '<div style="margin: 10px auto;padding: 0px;border-radius:5px;width:80%;background-color: #518b8f; 	color: black;">
					<header><h2><i>You Have Already Logged-In.</i><h2></header>
					<center><img src="image/mini.jpg" width="50%"></center>
					</div>';
					exit();
			}
			else{
				echo '<div>
					<header class="header">
						<img src="image/logo2.png" alt="">
						<nav>
							
							<ul class="navbar">
								<li class="left"><a href="index.php" tabindex="1">Home</a></li>
								<li class="left"><a href="booking.php" tabindex="6">Book Ticket</a></li>
								<li class="left"><a href="login.php" tabindex="2">Log in</a></li>
								<li class="left"><a href="register.php" tabindex="3">Registration</a></li>
								<li class="left"><a href="contact.php" tabindex="5">Contact</a></li>
							</ul>
						</nav>	
					</header>
				</div>';
			}
		?>
		
		<div class="main">	
			<div class="container1">
				<?php
					
						if(@$_GET['success']==1){
							echo '<center style="line-height:18px;font-weight:bold;color:red;"><h4>Password Changed Successfully.</h4></center>';
						}
					
				?>
				<?php
					if(isset($_POST['login']))	{
						$email = $_POST['email'];
						$pass = $_POST['pass1'];
						
						$con = mysqli_connect('localhost','root','','project');

						$fetch = "SELECT * FROM `registration` WHERE email='$email'";
						
						$run = mysqli_query($con, $fetch);
						
						$flag=0;
						
						while($row = mysqli_fetch_array($run)){
							$flag = 1;
							$name = $row['email'];
							$fake = $row['pass1'];
							$id = $row['id'];
		
							if($fake==md5($pass)){
								$_SESSION['Uname'] = $row['name'];
								$_SESSION['id'] = $row['id'];
								if($id==1)
									header('location: admin.php');
								else
									header('location: index.php');
							}
							else{
								echo '<center style="line-height:18px;font-weight:bold;color:red;"><h4>Incorrect Password.</h4></center>';
							}
						}
						if($flag==0){
							echo '<center style="line-height:18px;font-weight:bold;color:red;"><h4>Incorrect Username.</h4></center>';
						}	
					}		
				?>
				<article class="top">	
					<header><h2><i>Login To Access!</i><h2></header>
					<div class="form">
						<form method="post" action="login.php" autocomplete="off">
							<label>UserName:</label>
							<input class="input" type="email" name="email" placeholder="Email" required>
							<label>Password:</label>
							<input class="input" type="password" name="pass1" placeholder="******" required>
							<input class="button3" type="submit" name="login" value="Login">
							<div class="pass">
								<a href="forgot.php">Forgot password?</a>
							</div>
						</form>
					</div>	
				</article>
				
				<article class="bottom">
					<header><h2><i>More Informaton About Organisation</i></h2></header>
					<footer class="info">June 3, 2017</footer>
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
					<hr>
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
				</article>
			</div>
		</div>
		
		<div class="container2">
			
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