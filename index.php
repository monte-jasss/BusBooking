<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="author" content="Monu Lakshkar">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Home Page</title>
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
				<article class="top">	
					<div>
						<div class="city"><marquee behavior="scroll" scrollamount="4" scrolldelay="100" class="span">Neemuch * Mumbai * Delhi * Indore * Jaipur * Nagpur</marquee></div>
					</div>
					<hr>
					<header><h2><i>Search Bus Here...</i><h2></header>
						<center style="line-height:18px;font-weight:bold;color:red;"><h4><i><?php echo @$_REQUEST['NotFound']; ?></i></h4></center>
					<div class="form">
						<form method="get" action="search.php?bus=1" autocomplete="off">
							<label>From:</label>
							<input class="input" type="text" name="from" placeholder="current location" required>
							<label>To:</label>
							<input class="input" type="text" name="to" placeholder="destination" required>
							<label>Date:</label>
							<input class="input" type="date" name="date" placeholder="" required>
							<input class="button" type="submit" name="search" value="Search">
						</form>
					</div>	
				</article>
				
				<article class="middle">
					<header><h2><i>Updates..</i></h2></header>
					<footer class="info"><?php echo gmdate('F j, Y'); ?></footer>
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
				
				<article class="bottom">
					<header><h2><i>More Informaton About Organisation</i></h2></header>
					<footer class="info"><?php echo gmdate('F j, Y'); ?></footer>
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
		
		<aside class="slide1">
			<header><h2><i>Services Available</i></h2></header>
			<footer class="info"><?php echo gmdate('F j, Y'); ?></footer>
			<div class="scroll">
				<ul>
					<li>Jawad to Neemuch</li>
					<li>Jawad to Indore</li>
					<li>Jawad to Mandsaur</li>
					<li>Jawad to Ratlam</li>
					<li>Jawad to Dhar</li>
					<li>Jawad to Udaipur</li>
					<li>Jawad to Delhi</li>
					<li>Jawad to Kota</li>
					<li>Jawad to Mumbai</li>
					<li>Jawad to Jaipur</li>
					<li>Jawad to Goa</li>
					<li>Jawad to Bhilwada</li>
					<li>Jawad to Nagpur</li>
					<li>Jawad to Kolkata</li>
					<li>Jawad to Banglore</li>
					<li>Jawad to chennai</li>
					<li>Jawad to Vadodara</li>
					<li>Jawad to Pune</li>
					<li>Jawad to Hyderabad</li>
					<li>Jawad to Bhangarh</li>
					<li>Jawad to Sagwada</li>
				</ul>
			</div>
		</aside>
		
		<aside class="slide2">
			<article>
				<header><h2><i>About Us</i></h2></header>
				<footer class="info"><?php echo gmdate('F j, Y'); ?></footer>
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
			Copyrights &copy; 2016-<?php echo gmdate('Y'); ?>; All rights reserved.
			</div></div>
		</footer>
	</body>
</html>