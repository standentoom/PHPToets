<!DOCTYPE html>
<html>
<head>
	<title>opdracht 1</title>
		<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div>
		<?php 
			$aantal_boeken= 15;
			$aantal_games= 7;
			$totaal_bedrag= 28.00;
			$verkoper= "Peter"; 
		
		?>
		<?php
 		echo "Aantal boeken: " . ($aantal_boeken + 3);
 		  ?><br>
  		  <?php  
 			echo "Aantal games: " . ($aantal_games);
 				?><br>
 				<?php
 				echo "Totaalbedrag: €" . ($totaal_bedrag);
 					?><br>
 					<?php 
 					echo "verkoper: " . ($verkoper . " Snoek")
 						 ?><br>
	
	</div>
</body>
</html>


