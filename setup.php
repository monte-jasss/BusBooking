<?php
	if(isset($_SESSION['Uname'])){
		echo '<div>
		<header class="header">
			<img src="image/logo2.png" alt="">
				<nav>
					<ul class="navbar" >
						<li class="left"><a href="index.php" tabindex="1">Home</a></li>
						<li class="left"><a href="booking.php" tabindex="2">Book Ticket</a></li>
						<li class="left"><a href="register.php" tabindex="3">Registration</a></li>
						<li class="left"><a href="contact.php" tabindex="5">Contact</a></li>
						<li class="left"><a href="#">'
						?>
						<?php echo $_SESSION["Uname"]; ?>
						<?php
						echo '</a>
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
						<li class="left"><a href="login.php" tabindex="2">Log in</a></li>
						<li class="left"><a href="register.php" tabindex="3">Registration</a></li>
						<li class="left"><a href="contact.php" tabindex="5">Contact</a></li>
					</ul>
				</nav>	
			</header>
		</div>';
	}
?>