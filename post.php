<?php // get use korle input gula url a dekha jai. sathe jodi ota print kori emni seta dekha jabe. ja game.php te korsi.
//but post use korle url a dekha jabe bt seta print korle dekha jabe na.
?>
	<form action="post.php" method="post">
		color : <input type="text" name="color"><br>
		noun : <input type="text" name="noun">
		<input type="submit" name="">
	</form>
	<?php 
		$color= $_POST["color"];
		$noun=$_POST["noun"];
		echo "roses are $color <br>";
		echo "$noun are blue";
	  ?>
