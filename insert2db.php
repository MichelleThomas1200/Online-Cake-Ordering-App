<?php

	include 'menu.php';
	$query="select CakeName, Description, image, price from cakes order by cakeID;";
	$queryfire=mysqli_query($con, $query);

	$query2="select * from Orders order by CustId;";
	$queryfire2=mysqli_query($con, $query2);

?>