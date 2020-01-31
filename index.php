
<?php
	 	include_once "includes/header.php";
	 	include_once "connection.php";

?>


<?php

if(!$_SESSION['demo_cse311'])
{
	header ('location:login.php');
}

?>
	<div align="center">
		<strong> Welcome, </strong> <strong> <?php echo $_SESSION['username']?></strong><strong> !</strong>
	</div>


	<div>
		<div>
			
			<?php
			include_once"slideshow_container.php";
			?>
		</div>
	</div>

		

		
		 	

	 </div> 

	</body>
</html>