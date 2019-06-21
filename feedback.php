<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="author" content="Monu Lakshkar">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Feedback form</title>
		<link rel="shortcut icon" href="image/favicon.png">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/cimg.css">
		<link rel="stylesheet" type="text/css" href="css/reg.css">
		<link rel="stylesheet" type="text/css" href="css/contact.css">
		<link rel="stylesheet" type="text/css" href="css/animation.css">
	</head>
	
	<body class="body">
	
		<?php
			require('setup.php');
		?>
		
		<div class="main">	
			<div class="container1">
				<article class="middle">
					<header><h2><i>Feedback</i></h2></header>
					<form>
						<label style="font-family: algerian;">Write about us here...</label>
						<br>
						<textarea class="feed" type="text" name="feedback" ></textarea>
						<input class="button4" type="submit" value="Send">
					</form>
				</article>
				
				<article class="bottom">
					<header><h2><i>More...</i></h2></header>
					<p>We are providing our best to you. If you think we need to improve please write us. You can also Write us on our email address. <br><a href="#">"booknow.admin@gmail.com"</a></p> 
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