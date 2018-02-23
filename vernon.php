<?php 
 
 	$myfile = fopen("vernon.txt", "w")
 	or die("Unable to create file");
 	fwrite($myfile, $_GET['txt']);
 	fclose($myfile);
 	if (isset($_GET['bet'])) 
 	{
 		$number = $_GET['bet'];
 		switch ($number) {
 			case 1:
 			echo "<h3>Sorry you have lost the lotto challenge.Try again for a chance to be part of the lucky winners</h3>";
 			break;
 			case 2:
 			echo "<h2>Congratulations.!You have won Ksh 10/=</h2>";
 			break;
 			case 3:
 			echo "<h2>Congratulations.!You have won Ksh 40/=</h2>";
 			break;
 			case 4:
 			echo "<h3>Sorry you have lost the lotto challenge.Try again for a chance to be part of the lucky winners</h3>";
 			break;
 			case 5:
 			echo "<h2>Congratulations.! You have won the grand prize of ksh 1,000,000/=</h2>";
 			break;
 			case 6:
 			echo "<h2>Sorry you have lost the lotto challenge. Try again for a chance to be part of the lucky winners</h2>";
 			break;
 			default:
 			echo "<h5>PLEASE INSERT A VALID VALUE TO CONTINUE!</h5>";
	 			          }
	 }
 		?>
 	
 	