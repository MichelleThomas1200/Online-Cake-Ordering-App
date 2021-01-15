<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1">
	  	
        <link rel="stylesheet" type="text/css" href="style.css">
	  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	  	<!--font awesome -->
	  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<title>	Just Cakes</title>
</head>

<body>
	<?php include 'menu.php'  ?>
    <br>

    <h1>Cart Data</h1><br>



    <br>
    <a href="logout.php"><button type="submit" class="btn btn-success" name="PayNow">Pay Now</button>
    	<?php include 'insert2db.php'  ?>
		<script>
			alert("Payment Complete! order will be delivered to you.");
		</script>
	</a>
</body>
</html>
<?php

?>