<!DOCTYPE html>
<?php
    $db = mysqli_connect('35.231.76.112','roots','Password', 'subLeases');
?>
<html>
    <body>
          <?php

          		#$query = "CREATE TABLE ApartmentList (id smallint unsigned not null auto_increment,Name varChar(25),City varchar(20) not null,Address varchar(40) not null,Price double(10,2) not null,StartDate Date not null,EndDate Date not null,PetsAllowed Boolean,Amenities1 varChar(20),Amenities2 varChar(20),constraint pk_example primary key (id));";
				#mysql_query($query)
				$query1 = "INSERT INTO ApartmentList ( id, Name, City, Address, Price,StartDate, EndDate,PetsAllowed,Amenities1,Amenities2 ) VALUES ( null, 'Hub apt1', 'Columbia', '1409 Main Street', '400.25', '2009-01-01', '2010-09-09', '1', 'Pool', 'Wood Floor' );";
				
				mysqli_query($db,$query1);
                $query2 = "select FROM ApartmentList;";
                $result = mysqli_query($db, $query2);
                while($row = mysqli_fetch_assoc($result)) 
                      #var_dump($result)
                
          ?>
    </body>
</html>
