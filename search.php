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
			<div class="container123">	
				<article class="bottom">
					<header><h2><i>Availabel Buses</i></h2></header>
					<footer class="info">June 3, 2017</footer>
					<table style="width:100%;height:auto;text-align:center;border-collapse: collapse;background-color:#518bff;border-radius:8px;">
						<?php
						if(isset($_GET['from'])){
							if(isset($_GET['search'])){
							
								$dat = $_GET['date'];
								$from = strtolower($_GET['from']);
								$to = strtolower($_GET['to']);
								
								$con = mysqli_connect('localhost','root','','project');
							
								$search = "SELECT * FROM `buses`";
								
								$run = mysqli_query($con, $search);
						?>
						<tr style="border-radius:8px;border-bottom:2px solid blue;color:#07006d;">
							<th>Bus no.</th>
							<th>Starting Point</th>
							<th>Ending Point</th>
							<th>Available On</th>
							<th>Book Now</th>
						</tr>
						<?php
								$count=0;
								
								while($row = mysqli_fetch_array($run)){
									$start = $row['start'];
									$end = $row['end'];
									$date = $row['date'];
									$id = $row['id'];
								
									if($from==$start && $to==$end && $dat<=$date){
										$count++;
						?>						
						<tr style="border-radius:8px;border-bottom:2px solid blue;">
							<td><?php echo $id;?></td>
							<td><?php echo $start;?></td>
							<td><?php echo $end;?></td>
							<td><?php echo $date;?></td>
							<td><a href="booking.php?bus=<?php echo $id; ?>" style="font-weight:bold;color:rgb(200,0,0);text-decoration:underline;">BOOK</a></td>
						</tr>						
						<?php
									}							
								}
								if($count==0){
										echo "<script>window.open('index.php?NotFound=Sorry!! Bus is not Available.','_self')</script>";
								}
							}
						}
						else{
							$con = mysqli_connect('localhost','root','','project');
							
							$search = "SELECT * FROM `buses`";
							
							$run = mysqli_query($con, $search);
						?>
						<tr style="border-radius:8px;border-bottom:2px solid blue;color:#07006d;">
							<th>Bus no.</th>
							<th>Starting Point</th>
							<th>Ending Point</th>
							<th>Available On</th>
							<th>Book Now</th>
						</tr>
						<?php	
						}							
								while(@$row = mysqli_fetch_array($run)){
									$start = $row['start'];
									$end = $row['end'];
									$date = $row['date'];
									$id = $row['id'];
						?>						
						<tr style="border-radius:8px;border-bottom:2px solid blue;">
							<td><?php echo $id;?></td>
							<td><?php echo $start;?></td>
							<td><?php echo $end;?></td>
							<td><?php echo $date;?></td>
							<td><a href="booking.php?bus=<?php echo $id; ?>" style="font-weight:bold;color:rgb(200,0,0);text-decoration:underline;">BOOK</a></td>
						</tr>
						<?php 	} ?>
					</table>
				</article>
				<div class="th"><div>
						<span>T</span>
						<span>H</span>
						<span>A</span>
						<span>N</span>
						<span>K</span>
						<span>-</span>
						<span>Y</span>
						<span>O</span>
						<span>U</span>
					</div></div>
			</div>
		</div>
		
		
		<footer class="footer on">
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