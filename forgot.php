<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="author" content="Monu Lakshkar">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Password Reset</title>
		<link rel="shortcut icon" href="image/favicon.png">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/cimg.css">
		<link rel="stylesheet" type="text/css" href="css/reg.css">
		<link rel="stylesheet" type="text/css" href="css/contact.css">
		<link rel="stylesheet" type="text/css" href="css/animation.css">
		<style>
			.button { margin-bottom: 0;}
		</style>
	</head>
	
	<body class="body">
		
		<?php
			require('setup.php');		
		?>
		<div class="main">	
			<div class="container1">	
				<article class="bottom">
					<center style="line-height:18px;font-weight:bold;color:red;"><h4><i><?php echo @$_REQUEST['msg']; ?></i></h4></center>
					<header><h2><i>Recover Your Password...</i><h2></header>
					<div class="form">
						<?php
							require('change.php');
						?>
					</div>	
				</article>
			</div>
		</div>
		
		
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
<?php
	if(isset($_SESSION['Uname'])){
		if(isset($_POST['change'])){
			$pass = $_POST['opass'];
			$pass1 = $_POST['pass1'];
			$pass2 = $_POST['pass2'];
			$id = $_SESSION['id'];
			
			$con = mysqli_connect('localhost','root','','project');
			$fetch = "SELECT `pass1` FROM `registration` WHERE id='$id'";
			$run = mysqli_query($con, $fetch);
			while($data = mysqli_fetch_array($run)){
				$fake = $data['pass1'];
				if($fake==$pass){	
					if($pass1==$pass2){
						$query = "UPDATE `registration` SET `pass1`='$pass1',`pass2`='$pass2' WHERE `id`='$id'";
						
						$run = mysqli_query($con, $query);
						if($run){
							session_destroy();
							header('location: login.php?success=1');
						}
					}
					else{
						header("location: forgot.php?msg=Password Not Matched.");
					}
				}
				else{
					header("location: forgot.php?msg=Incorrect Old Password.");
				}
			}
		}
	}
	else{
		if(isset($_POST['change'])){
			$pass1 = $_POST['pass1'];
			$pass2 = $_POST['pass2'];
			$id = $_GET['id'];
			$otp = $_POST['otp'];
			if($otp==$_GET['ghjkl']){
				$con = mysqli_connect('localhost','root','','project');
				if($pass1==$pass2){
					$query = "UPDATE `registration` SET `pass1`='$pass1',`pass2`='$pass2' WHERE `id`='$id'";
					
					$run = mysqli_query($con, $query);
					if($run){
						header('location: login.php?success=1');
					}
				}
				else{
					header("location: forgot.php?msg=Password Not Matched.");
				}
			}
		}
	}
?>