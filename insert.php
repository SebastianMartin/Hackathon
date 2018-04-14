<?php
    $db = mysqli_connect('35.231.76.112','roots','Password', 'subLeases');
?>
<?php
	$query1 = sprintf("INSERT INTO ApartmentList ( id, Name, City, Address, Price,StartDate, EndDate,PetsAllowed,Amenities1,Amenities2 ) VALUES ( null, '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s' );",$_POST['name'],$_POST['city'],$_POST['address'],$_POST['price'],$_POST['start'],$_POST['end'],$_POST['pets'],$_POST['amenities1'],$_POST['amenities2']);
	mysqli_query($db,$query1);   
?>
<script type="text/javascript">location.href = 'success.php';</script>