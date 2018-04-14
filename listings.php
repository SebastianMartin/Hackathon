<!DOCTYPE html>
<html>
	<?php
	    $db = mysqli_connect('35.231.76.112','roots','Password', 'subLeases');
	    $query2 = "select * FROM ApartmentList;";
        $result = mysqli_query($db, $query2);
	    while($row = mysqli_fetch_assoc($result))
	                	var_dump($row['Name']);
	                	var_dump("\n");
	?>

    	<a href="index.php">Return Home</a>
    </body>
</html>