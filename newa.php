<!DOCTYPE html>
<?php
    $db = mysqli_connect('35.231.76.112','roots','Password', 'subLeases');
?>
<html>
	<h1>Add a new Apartment</h1>
    <body>

		<form action="insert.php" method="post">
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
		</form>
		<a href="index.php">Return Home</a>
          <?php
          		#var_dump($_POST['name'])
          		#$query = "CREATE TABLE ApartmentList (id smallint unsigned not null auto_increment,Name varChar(25),City varchar(20) not null,Address varchar(40) not null,Price double(10,2) not null,StartDate Date not null,EndDate Date not null,PetsAllowed Boolean,Amenities1 varChar(20),Amenities2 varChar(20),constraint pk_example primary key (id));";
				#mysql_query($query)
				#$query1 = sprintf("INSERT INTO ApartmentList ( id, Name, City, Address, Price,StartDate, EndDate,PetsAllowed,Amenities1,Amenities2 ) VALUES ( null, '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s' );",$_POST['name'],$_POST['city'],$_POST['address'],$_POST['price'],$_POST['start'],$_POST['end'],$_POST['pets'],$_POST['amenities1'],$_POST['amenities2']);
				#$query1 = "INSERT INTO ApartmentList ( id, Name, City, Address, Price,StartDate, EndDate,PetsAllowed,Amenities1,Amenities2 ) VALUES ( null, 'Hub apt1', 'COlubia', '1409 Main Street', '400.25', '2009-01-01', '2010-09-09', '1', 'Pool', 'Wood Floor' );";
				#mysqli_query($db,$query1);
                #$query2 = "select * FROM ApartmentList;";
                #$result = mysqli_query($db, $query2);
                #while($row = mysqli_fetch_assoc($result))
                	#var_dump($row);
                	#var_dump("\n");
                

                
          ?>
    </body>
</html>
