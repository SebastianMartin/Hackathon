<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

<title>SubLeasing Columbia</title>
</head>
<body background="background.jpg" width="1920" height="1080">
<h1><center><font size="29">SubLeasing Columbia</font></center></h1>
<P><center><font size="5">A place to find listings for subleases across Columbia!</font></center><P>
    <body>
    	<center><font size="9"><a href="newa.php">New Apartment</a></font></center>    	
    	<center><font size = "9"><a href="listings.php">View current listings</a></font></center>
    	
    	<P><center><b><font size="6">Search by a City!</font></b></center><P>
    	<center><font size="5"><form action="search.php" method="post">
			City: <input type="text" name="city" placeholder="Search by City"><br>
			<input type="submit" value="Search">
		</form></font></center>

		


		<P><center><b><font size="6">Search by a Price</font></b></center><P>
		<center><font size="5"><form action="searchprice.php" method="post">
			Low: <input type="text" name="low" placeholder="Lowest Price"><br>
			
			High: <input type="text" name="high" placeholder="Highest Price"><br>
			<input type="submit" value="Search">
		</form></font></center>



		<P><center><b><font size="6">Search by a Dates</font></b></center><P>
		<center><font size="5"><form action="searchyear.php" method="post">
			Low: <input type="text" name="low" placeholder="year-month-day"><br>
			
			High: <input type="text" name="high" placeholder="year-month-day"><br>
			<input type="submit" value="Search">
		</form></font></center>
    </body>
</html>
