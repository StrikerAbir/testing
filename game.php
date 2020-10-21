<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="game.php" method="get">
		color : <input type="text" name="color"><br>
		noun : <input type="text" name="noun">
		<input type="submit" name="">
	</form>
	<?php 
		$color= $_GET["color"];
		$noun=$_GET["noun"];
		echo "roses are $color <br>";
		echo "$noun are blue";
	  ?>

</body>
</html>