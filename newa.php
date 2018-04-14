<!DOCTYPE html>
<?php
    $db = mysqli_connect('35.231.76.112','roots','Password', 'subLeases');
?>
<html>
<body background="background.jpg" width="1920" height="1080">
	<h1><center>Add a new Apartment</center></h1>
    <body>

		<center><form action="insert.php" method="post">
			Name: <input type="text" name="name" value="Hub"><br>
			City: <input type="text" name="city" value="Columbia"><br>
			Address: <input type="text" name="address" value="Hub@..."><br>
			Price: <input type="text" name="price" value="420.69"><br>
			StartDate: <input type="text" name="start" value="2009-01-01"><br>
			EndDate: <input type="text" name="end" value="2010-01-01"><br>
			PetsAllowed: <input type="text" name="pets" value="0"><br>
			Amenities1: <input type="text" name="amenities1" value=" none"><br>
			Amenities2: <input type="text" name="amenities2" value="none"><br>

			<input type="submit">
		</form></center>
		<center><a href="index.php">Return Home</a></center>

    </body>
</html>
