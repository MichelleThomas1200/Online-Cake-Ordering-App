<!-- orig -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta name=”viewport” content=”width=device-width, initial-scale=1.0”>
	<link rel="stylesheet" type="text/css" href="css/style.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<title>Just Cakes</title>
	<style>
		.button {
		  background-color: #724807; /* Green */
		  border: none;
		  color: whitesmoke;
		  padding: 10px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 16px;
		  margin: 4px 2px;
		  cursor: pointer;
		}
		.button1 {border-radius: 4px;}
	</style>	
	<style>
		body {
		  margin: 0;
		}

		/* Style the header */
		.header {
		  background-color: #f1f1f1;
		  padding: 20px;
		  text-align: center;
		}
		
		.topnav a {
		  float: right;
		  display: block;
		  color: black;
		  text-align: center;
		  padding: 15px 25px;
		  text-decoration: none;
		}
		table {
			  border-collapse: separate;
			  border-spacing: 50px 30px;
		}

		.transbox {
			opacity: 0.3;
		}

		td {
			padding: 30px 0;
		}

	</style>
</head>

<body style="background-image: url('Images/Background2.png'); "> 
	<!-- <div class="topnav">
	  <a href="Page2.php"><button class="button button1">Log In</button></a>
	  <a href="homepg.html"><button class="button button1">Sign Up</button></a>
	</div>
	-->
	<br>	<br>		<br>
	<div class="w-50 m-auto">
	<table>
		<tbody>
			<td>
				<div> <!--to make the text input box in the center of the pg-->
					<form action="userinfo.php" method="post">
						<div class="form-group">
							<label><strong>Username</strong></label>
							<div class= transbox><input type="text" name="user" autocomplete="off" class="form-control"></div>
						</div>
						<div class="form-group">
							<label><strong>Email ID</strong></label>
							<div class= transbox><input type="text" name="email" autocomplete="off" class="form-control"></div></div>
						</div>
						<div class="form-group">
							<label><strong>Phone Number</strong></label>
							<div class= transbox><input type="text" name="mobile" autocomplete="off" class="form-control"></div>
						</div>
						<div class="form-group">
							<label><strong>Password</strong></label>
							<div class= transbox><input type="text" name="password" autocomplete="off" class="form-control"></div>
						</div>

						<button type="submit" class="btn btn-success">Sign Up</button>
					</form>
				</div>
			</td>
			<td></td>
			<td>
				<div > <!--to make the text input box in the center of the pg-->
					<form action="userinfo.php" method="post">
						
						<div class="form-group">
							<label><strong>Email ID</strong></label>
							<div class= transbox><input type="text" name="email" autocomplete="off" class="form-control"></div>
						</div>
						
						<div class="form-group">
							<label><strong>Password</strong></label>
							<div class= transbox><input type="text" name="password" autocomplete="off" class="form-control"></div>
						</div>

						<a href=homepg.php><button type="submit" class="btn btn-success">Log in</button></a>
					</form>
				</div>
			</td>
		</tbody>
	</table>
	</div>
	
	
	
</body>
