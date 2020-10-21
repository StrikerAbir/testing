<html>
<?php
	$friends=array("obe","to","me");
	echo $friends[1];
	$friends[1]="ni";
	echo "<br> $friends[1]";
	echo count($friends);
  ?>

  <form action="array.php" method="post">
  	apples <input type="checkbox" name="fruits[]" value="apples"><br>
  	oranges <input type="checkbox" name="fruits[]" value="oranges"><br>
  	nuts <input type="checkbox" name="fruits[]" value="nuts"><br>
  	<input type="submit" name="">
  </form>
  <?php
//upore name="fruits[]" eta akta array. cheakbox jeta jeta click hobe ogular value nia array toiri hobe ekane same array use hoise.

  	$fruit=$_POST["fruits"];
  	echo $fruit[1];
  ?>


<form action="array.php" method="post">
	ban/poo/tuu <input type="text" name="student">
	<input type="submit" name="">
</form >
  <?php echo "associative array <br>";
  		$grades=array("ban"=>"a+", "poo"=>"b+", "tuu"=>"c+");
  		//ekhane nam gula key hisabe use hoi.. etai special.key gula obossoi uniqe hote hobe..
  		echo $grades["poo"];
  		
  		echo $grades[$_POST["student"]];

   ?>
 </html>