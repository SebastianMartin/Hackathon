<!DOCTYPE html>
<html>
<h1><center>All Listings</center></h1>
<body background="background.jpg" width="1920" height="1080">
	<?php
	    $db = mysqli_connect('35.231.76.112','roots','Password', 'subLeases');
	    $query2 = "select * FROM ApartmentList;";
        $result = mysqli_query($db, $query2);
		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        echo $row["id"]. " - Name: " . $row["Name"]. "  --City: " . $row["City"]. "  --Address: " . $row["Address"]. "  --Price/Month: " . $row["Price"]. "  --StartDate: " . $row["StartDate"]. "  --EndDate: " . $row["EndDate"].  "  --Pets: " . $row["PetsAllowed"]. "  --Amenities1: " . $row["Amenities1"]. "  --Amenities2: " . $row["Amenities2"]. "<br>";
		    }
		} else {
		    echo "0 results";
		}
	?>
    	<center><a href="index.php">Return Home</a></center>
    </body>
</html>