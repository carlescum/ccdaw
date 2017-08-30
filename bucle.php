<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
	<?php 

	$res = 0;
	$i = 0;
	while($i <10){
	$res += $i;
	echo "volta: ".$i. " - valor: ".$res."<br>";
	$i++;
	
	}
	echo "RESULTAT FINAL: ".$res;
	 ?>
</body>
</html>