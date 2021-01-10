<?php
	session_start();
	//here u can access $_SESSION['CustName']... any session variables from index.php

	if(!isset($_SESSION['CustName'])){
		header('location: index.php');
	}
?>
<!DOCTYPE html>
<html>

	<head>

		<title>Just Cakes </title>
		<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1">
	  	<link rel="stylesheet" type="text/css" href="css/style.css">
	  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  
	</head>

	<body>
		<?php include 'menu.php'  ?>



		<h1 class="band-name band-name-large">JUST CAKES</h1>
        </header>
        <section class="container content-section">
            <h2 class="section-header">CAKES</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Birthday Fiesta</span>
                    <img class="shop-item-image" src="Images/Birthday_fiesta.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">Rs. 850</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Cookies and Cream</span>
                    <img class="shop-item-image" src="Images/Cookies_and_cream.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">Rs. 750</span>
                        <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Devils Food</span>
                    <img class="shop-item-image" src="Images/Devils_food.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">Rs. 900</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Rainbow Smash</span>
                    <img class="shop-item-image" src="Images/Rainbow_cake.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">Rs. 790</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Red Velvet Premium</span>
                    <img class="shop-item-image" src="Images/Red_velvet_premium.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">Rs. 900</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="container content-section">
            <!-- <h2 class="section-header">CUSTOM CAKES</h2>    -->
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">KitKat Gems Cake</span>
                    <img class="shop-item-image" src="Images/Kit-Kat-Cake-.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">Rs. 999 Onwards</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">BlueBerry Swirl</span>
                    <img class="shop-item-image" src="Images/wedd.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">Rs. 1200 Onwards</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <!--<div class="shop-item">
                    <span class="shop-item-title">And For any Occasion</span>
                    <img class="shop-item-image" src="Images/custom.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">Rs. 999 Onwards</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div> -->
            </div>
        </section>
        <section class="container content-section">
            <h2 class="section-header">CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">Rs. 0</span>
            </div>
            <div class="form-group">
                            <label><strong>Delivery Address</strong></label>
                            <div class= transbox><input type="text" placeholder="Enter Address" name="deladdress" autocomplete="off" class="form-control" required></div>
            </div>
            <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
        </section>
        <footer class="main-footer">
            <div class="container main-footer-container">
                <h3 class="band-name">JUST CAKES</h3>
                <p1>Please visit the ABOUT page for more details about the Custom cakes</p1>
                <ul class="nav footer-nav">
                    <li>
                        <a href="https://www.instagram.com" target="_blank">
                            <img src="Images/tr-ig.png">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.twitter.com" target="_blank">
                            <img src="Images/twt.png">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com" target="_blank">
                            <img src="Images/logo-facebook-512.png">
                        </a>
                    </li>
                </ul>
            </div>
        </footer>

	</body>

</html>