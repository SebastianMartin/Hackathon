<!DOCTYPE html>
<html>
<h1><center>Search by Price</center></h1>
<body background="sbg.jpg" width="1920" height="1080">
	<?php
	    $db = mysqli_connect('35.231.76.112','roots','Password', 'subLeases');
	    $query2 = sprintf("select * FROM ApartmentList where Dates >= %s and Dates <= %s;", $_POST['low'],$_POST['high']);
        $result = mysqli_query($db, $query2);
		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        echo $row["id"]. " - Name: " . $row["Name"]. "  --City: " . $row["City"]. "  --Address: " . $row["Address"]. "  --Price/Month: " . $row["Price"]. "  --StartDate: " . $row["StartDate"]. "  --EndDate: " . $row["EndDate"].  "  --Pets: " . $row["PetsAllowed"]. "  --Amenities1: " . $row["Amenities1"]. "  --Amenities2: " . $row["Amenities2"]. "<br>";
		    }
		} else {
		    echo "0 results". "<br>";
		}
	    

	?>

    	<center><a href="index.php">Return Home</a></center>
    </body>
</html>