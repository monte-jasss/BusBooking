<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="author" content="Monu Lakshkar">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Book Tickets Now</title>
		<link rel="shortcut icon" href="image/favicon.png">
		<link rel="stylesheet" type="text/css" href="css/cimg.css">
		<link rel="stylesheet" type="text/css" href="css/contact.css">
		<link rel="stylesheet" type="text/css" href="css/animation.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/reg.css">
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
								<li class="left"><a href="booking.php" tabindex="2">Book Ticket</a></li>
								<li class="left"><a href="register.php" tabindex="3">Registration</a></li>
								<li class="left"><a href="contact.php" tabindex="5">Contact</a></li>
								<li class="left"><a href="#" tabindex="6">'
		?>						
		<?php echo $_SESSION["Uname"]; ?>
		<?php						
			echo '				</a>
								<nav>
								<ul>
									<li><a href="logout.php" tabindex="6">LogOut</a>
								</ul>
								</nav>
								<nav>
								<ul>
									<li><a href="forgot.php" tabindex="7">Change</a>
								</ul>
								</nav>
								</li>
							</ul>
						</nav>	
					</header>
				</div>';
			}
			else{
				echo '<div>
					<header class="header">
						<img src="image/logo2.png" alt="">
						<nav>
							<ul class="navbar">
								<li class="left"><a href="index.php" tabindex="1">Home</a></li>
								<li class="left"><a href="booking.php" tabindex="6">Book Ticket</a></li>
								<li class="left"><a href="login.php" tabindex="7">Log in</a></li>
								<li class="left"><a href="register.php" tabindex="2">Registration</a></li>
								<li class="left"><a href="contact.php" tabindex="4">Contact</a></li>
								<li class="left"><a href="logout.php" tabindex="5"></a></li>
							</ul>
						</nav>	
					</header>
				</div>';
				echo '<div style="margin: 10px auto;padding: 0px;border-radius:5px;width:80%;background-color: #518b8f; 	color: black;">
					<header><h2><i>You Are Not Logged-In.	Login To Book Tickets.</i><h2></header>
					<center><img src="image/mini.jpg" width="50%"></center>
					</div>';
					exit();
			}
		?>
		
		<div class="main">	
			<div class="container1">				
				<article class="middle">
					<header><h2><i>Book Ticket for Your Journey</i></h2></header>
					<footer class="info">June 3, 2017</footer>
					<section class="ticket">
		<?php
			$bus_no = @$_GET['bus'];
			if(isset($bus_no)){
				if(isset($_POST['book'])){
				
				?>
				<div>
		<?php		
				$name = $_SESSION['Uname'];
				$con = mysqli_connect('localhost','root','','project');
				
				$book = "SELECT * FROM `buses` WHERE id='$bus_no'";
				$fetch = "SELECT * FROM `registration` WHERE name='$name'";
				
				$run1 = mysqli_query($con, $fetch);
				$data = mysqli_fetch_array($run1);
				
				$l_name = $data['l_name'];
				$mobile = $data['mobile'];
				
				$run = mysqli_query($con,$book);
				
				$row = mysqli_fetch_array($run);

				$pas = $_POST['passenger'];
				$id = $row['id'];
				$start = $row['start'];
				$end = $row['end'];
				$date = $row['date'];
				$KM = $row['KM'];
				$price = $row['price'];
		?>	
			
							<table>
								<tr>
									<th colspan="4">BookNow.com</th>
								</tr>
								<tr>
									<td>Name:</td>
									<td><?php echo $name." ".$l_name; ?></td>
									<td>Mob:</td>
									<td><?php echo $mobile; ?></td>
								</tr>
								<tr>
									<td>From:</td>
									<td><?php echo $start; ?></td>
									<td>To:</td>
									<td><?php echo $end; ?></td>
								</tr>
								<tr>
									<td>Seat No:</td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>Date:</td>
									<td><?php echo $date; ?></td>
									<td>Bus No:</td>
									<td><?php echo $bus_no; ?></td>
								</tr>
								<tr>
									<td>journey in KM:</td>
									<td><?php echo $KM; ?></td>
									<td>Passenger:</td>
									<td><?php echo @$pas; ?></td>
								</tr>
								<tr>
									<td>Price/passenger:</td>
									<td><?php echo "Rs. ".$price; ?></td>
									<td>Total Price:</td>
									<td><?php echo "Rs. ".$price*$pas; ?></td>
								</tr>
								<tr>
									<td colspan="4" align="center"><input class="pay" type="submit" value="Pay & Book" name="pay"></td>
								</tr>
							</table>
						</div>	
		<?php   }else{ ?>
					<article>
						<form method="post" enctype="multiple/data-form">
							<label>Number of Passenger:</label>
							<input class="input" type="number" name="passenger" max="5" min="1" value="1">
							<input class="button" type="submit" name="book" value="Book">
						</form>
					</article>
		<?php	 	}
				}
				else{
					echo '<center style="line-height:18px;font-weight:bold;color:#016348;"><h4>Go and Select the current location and destination from <a href="search.php">here..</a></h4></center>';
				} 	
		?>								
					</section>
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