<?php
		session_start();

?>

<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>HOMEPORT</title>
		<link rel="icon" type="image/gif" href="images/favicon.gif" />
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php
		include_once"slideshow.php";
		?>
		
	</head>


	<body>
		<header>
			<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
 					<li><a href="available_flats.php">Available Flats</a></li>
					
					<?php	
						if(isset($_SESSION['username'])) 
							{ ?>
						    	<li><a href="post_ad.php"><span class="glyphicon glyphicon-user"></span>Post AD!</a></li>

							     <li><a href="userprofile.php">
							      <?php
							      
							      echo $_SESSION['username'];
							      ?>

							   
						      <?php  ?> </a></li></a></li>
							      <li><a href="logout.php">Logout</a></li>
							      <?php }
						      else{ ?>
						        
							      <li><a href="register_page.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
							      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
							     
						       <?php } ?>
					<li>
						<?php  
							echo "today is: ".date("d-M-Y");  
						?>  
					</li>
					<li><a href="contact_us.php">Contact Us</a></li>
				</ul>
			</nav>
		</header>
	 
		<h1 class='elegantshadow'>HOMEPORT</h1>

	 <div id="main-content" class="clearfix">