<!-- <?php
	//session_start();
	//here u can access $_SESSION['CustName']... any session variables from index.php

	//if(!isset($_SESSION['CustName'])){
	//	header('location: index.php');
	//}
?> -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  	<div class="container-fluid">
	    	<a class="navbar-brand" href="#">Welcome</a>
	    	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      		<span class="navbar-toggler-icon"></span>
	    	</button>
        
		    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		      	<ul class="navbar-nav ml-auto mb-2  mb-lg-0">
			        <li class="nav-item">
			          <a class="nav-link active" aria-current="page" href="homepg.php">Home</a>
			        </li>
		            
			        <li class="nav-item">
			          <a class="nav-link" href="homepg.php/#Services at bottom">Services</a> <!--the slash n has text added-->
			        </li>
		            <li class="nav-item">
			          <a class="nav-link" href="about.php">About</a>
			        </li>
			        <li>
			        	<a href="logout.php"><button type="submit" class="btn btn-success" name="logout">Log Out</button></a>
			        </li>
		            <!-- <li class="nav-item">
			          <a class="nav-link" href="#">Contact</a>
			        </li> -->
		      	</ul>
		      	
		    </div>
	  	</div>
</nav>