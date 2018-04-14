<?php
    $db = mysqli_connect('35.231.76.112','roots','Password', 'subLeases');
?>
<?php

	#$query1 = "INSERT INTO ApartmentList ( id, Name, City, Address, Price,StartDate, EndDate,PetsAllowed,Amenities1,Amenities2 ) VALUES ( null, 'Hub apt1', 'COlubia', '1409 Main Street', '400.25', '2009-01-01', '2010-09-09', '1', 'Pool', 'Wood Floor' );";
	$query1 = sprintf("INSERT INTO ApartmentList ( id, Name, City, Address, Price,StartDate, EndDate,PetsAllowed,Amenities1,Amenities2 ) VALUES ( null, '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s' );",$_POST['name'],$_POST['city'],$_POST['address'],$_POST['price'],$_POST['start'],$_POST['end'],$_POST['pets'],$_POST['amenities1'],$_POST['amenities2']);
	mysqli_query($db,$query1);   
?>
<script type="text/javascript">location.href = 'index.php';</script>