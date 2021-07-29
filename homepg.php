<?php
   include('connect.php');
   session_start();
   $status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query($con,"SELECT * FROM `products` WHERE `code`='$code'");
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
$image = $row['image'];
 
$cartArray = array(
 $code=>array(
 'name'=>$name,
 'code'=>$code,
 'price'=>$price,
 'quantity'=>1,
 'image'=>$image)
);
 
if(empty($_SESSION["shopping_cart"])) {
    $_SESSION["shopping_cart"] = $cartArray;
    $status = "<div class='box'>Product is added to your cart!</div>";
}else{
    $array_keys = array_keys($_SESSION["shopping_cart"]);
    if(in_array($code,$array_keys)) {
 $status = "<div class='box' style='color:red;'>
 Product is already added to your cart!</div>"; 
    } else {
    $_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
    $status = "<div class='box'>Product is added to your cart!</div>";
 }
 
 }
}
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Fjalla+One&family=Maven+Pro:wght@600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@300&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/e3e6d0d7c2.js" crossorigin="anonymous"></script>
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}<!--google fonts is used-->
.mySlides {display: none;}
img {vertical-align: middle;
width: 100%;
}
  @media only screen and (max-width: 600px) {
  .section-style {
    width: 100%;
  }
}
 .checked {
  color: orange;
}
  .foot{box-shadow: 5px 20px 30px rgba(0,0,0,0.2);
  border-radius:25px;}
.navbar nav ul li{
  float: left;/*align the navigation bar contnt*/
}
.navbar nav ul{
  padding-bottom: 20px;/*add space at botton*/
}
/*appearance of the carousel*/
.slideshow-container {
  width: 100%;
  position: relative;
  margin: auto;
  background-size: 100% 100%;
}
/*all the properties of the txt that will be displayed on the imge*/
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}
* {
  box-sizing: border-box;
}

.flex-container {
  font-family: 'Lemonada', cursive;
  display: flex;
  flex-direction: row;
  font-size: 25px;
  text-align: center;
}

.flex-item-left {
  padding: 10px;
  flex: 50%;
}
.flex-item-middle {
  padding: 10px;
  flex: 50%;
}
.flex-item-right {
  padding: 10px;
  flex: 50%;
}

/* Responsive layout - makes a one column-layout instead of two-column layout */
@media (max-width: 800px) {
  .flex-container {
    flex-direction: column;
  }
}
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}
/*applying css property to the dots that will be displayed under carousel to indicating which slide it is*/
.dot {
  height: 10px;
  width: 10px;
  margin: 0 2px;
  background-color: #050A30;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.5s ease;
}
  .section-style{
    border-radius: 22px;
  }
  .section-style:hover{
    transform: scale(1.1);
    box-shadow: 5px 20px 30px rgba(0,0,0,0.2);
  }
.active {
  background-color: #0000FF;
}
/*adding fading effect to the carousel*/
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
/*reponsiveness*/
@media (max-width: 1024px){
  .slideshow-container{width: 100%;};
  .image-section{width: 100%;};
  .navbar{width: 100%;};
}
/*responsiveness*/
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
  body {
  text-align: center;
  background-color: white;
}

div {
  margin-top: 15px;
}
/*for displaying the product in box layout and justifying the txt*/
.image-section {
  display: flex;
  justify-content: center;
}

.section-style {
  margin-right: 25px;
  margin-left: 25px;
  height: 315px;
  width: 500px;
  background-color: white;
  box-shadow: 1px 5px 25px #ccc;
}
/*adding height for the imgs of the products*/
.section-style img{
  height: 200px;
}
/*removing the bullets*/
.navbar nav ul{
  list-style-type: none;
}
/*addding style to the search box*/
.search-btn input[type=text]{ 
  width:300px; 
  height:25px; 
  border-radius:25px; 
  border: none; 
}
 .navbar .searchbar:hover{
     box-shadow: 5px 10px 18px #888888;
  }
  .pagination {
  display: inline-block;
  font-size: 25px;
}
.center {
  text-align: center;
}
.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
}

.pagination a.active {
  background-color: #c7c9c9;
  color: white;
  border-radius: 25px;
}

.pagination a:hover:not(.active) {
  background-color: #aadff0;
  border-radius: 25px;
}

.cart_div {
 float:right;
 font-weight:bold;
 position:relative;
 }
.cart_div a {
 color:#000;
 } 
.cart_div span {
 font-size: 12px;
 line-height: 14px;
 background: #F68B1E;
 padding: 2px;
 border: 2px solid #fff;
 border-radius: 50%;
 position: absolute;
 top: -1px;
 left: 13px;
 color: #fff;
 width: 20px;
 height: 20px;
 text-align: center;
 }
.cart .remove {
 background: none;
 border: none;
 color: #0067ab;
 cursor: pointer;
 padding: 0px;
 }
.cart .remove:hover {
 text-decoration:underline;
 }

.tooltip {
    display:inline-block;
    position:relative;
    text-align:left;
}

.tooltip .bottom {
    min-width:130px;
    top:40px;
    left:50%;
    transform:translate(-70%, 0);
    padding:10px 20px;
    color:#000000;
    background-color:#EEEEEE;
    font-weight:normal; 
    font-size:25px;
    border-radius:9px;
    position:absolute;
    z-index:99999999;
    box-sizing:border-box;
    box-shadow:0 1px 8px rgba(0,0,0,0.5);
    display:none;
}

.tooltip:hover .bottom {
    display:block;
}

.tooltip .bottom i {
    position:absolute;
    bottom:100%;
    left:50%;
    margin-left:15px;
    width:24px;
    height:12px;
    overflow:hidden;
}
.bottom {
text-align: center;}
.tooltip {
float: right; color: #070252;font-size: 25px; padding-bottom: 12px; padding-top: -5px; padding-left: 0px;"
}
.tooltip .bottom i::after {
    content:'';
    position:absolute;
    width:12px;
    height:12px;
    left:50%;
    transform:translate(-50%,50%) rotate(45deg);
    background-color:#EEEEEE;
    box-shadow:0 1px 8px rgba(0,0,0,0.5);
}
.product_wrapper {
	float:left;
	padding: 10px;
	text-align: center;
	}
.product_wrapper:hover {
	box-shadow: 0 0 0 2px #e5e5e5;
	cursor:pointer;
	}
.product_wrapper .name {
	font-weight:bold;
	}
.product_wrapper .buy {
	text-transform: uppercase;
    background: #F68B1E;
    border: 1px solid #F68B1E;
    cursor: pointer;
    color: #fff;
    padding: 8px 40px;
    margin-top: 10px;
}
.product_wrapper .buy:hover {
	background: #f17e0a;
    border-color: #f17e0a;
}
.message_box .box{
	margin: 10px 0px;
    border: 1px solid #2b772e;
    text-align: center;
    font-weight: bold;
    color: #2b772e;
	}
.table td {
	border-bottom: #F0F0F0 1px solid;
	padding: 10px;
	}
.cart_div {
	float:right;
	font-weight:bold;
	position:relative;
	}
.cart_div a {
	color:#000;
	}	
.cart_div span {
	font-size: 12px;
    line-height: 14px;
    background: #F68B1E;
    padding: 2px;
    border: 2px solid #fff;
    border-radius: 50%;
    position: absolute;
    top: -1px;
    left: 13px;
    color: #fff;
    width: 14px;
    height: 13px;
    text-align: center;
	}
.cart .remove {
    background: none;
    border: none;
    color: #0067ab;
    cursor: pointer;
    padding: 0px;
	}
.cart .remove:hover {
	text-decoration:underline;
	}
.product_wrapper {
	float:left;
	padding: 10px;
	text-align: center;
	}
.product_wrapper:hover {
	box-shadow: 0 0 0 2px #e5e5e5;
	cursor:pointer;
	}
.product_wrapper .name {
	font-weight:bold;
	}
.product_wrapper .buy {
	text-transform: uppercase;
    background: #F68B1E;
    border: 1px solid #F68B1E;
    cursor: pointer;
    color: #fff;
    padding: 8px 40px;
    margin-top: 10px;
}
.product_wrapper .buy:hover {
	background: #f17e0a;
    border-color: #f17e0a;
}
.message_box .box{
	margin: 10px 0px;
    border: 1px solid #2b772e;
    text-align: center;
    font-weight: bold;
    color: #2b772e;
	}
.table td {
	border-bottom: #F0F0F0 1px solid;
	padding: 10px;
	}
.cart_div {
	float:right;
	font-weight:bold;
	position:relative;
	}
.cart_div a {
	color:#000;
	}	
.cart_div span {
	font-size: 12px;
    line-height: 14px;
    background: #F68B1E;
    padding: 2px;
    border: 2px solid #fff;
    border-radius: 50%;
    position: absolute;
    top: -1px;
    left: 13px;
    color: #fff;
    width: 14px;
    height: 13px;
    text-align: center;
	}
.cart .remove {
    background: none;
    border: none;
    color: #0067ab;
    cursor: pointer;
    padding: 0px;
	}
.cart .remove:hover {
	text-decoration:underline;
	}
</style>
<title>Icommerce</title>
<!--icon link -->
<link rel = "icon" href = "logo.png" type = "image/x-icon"> 
</head>
<body>
<!-- navigation bar-->
  <div class="navbar">
    <nav>
      <ul>
        <li style="font-style: italic; font-weight: bold;font-size: 30px; padding-bottom: 15px; color: #070252;">
		Icommerce
	</li>

        <li style="padding-left: 120px;  padding-right:10px; color: #070252;padding-top: 5px;">
		<input style="border-radius: 25px; width: 600px; height: 30px; float: left; border: none; background-color: #d9dbdb;" type="text" placeholder="   Search...." name="search" class="searchbar">
			<button class="search-btn" style="border-radius: 25px; float: left; height: 30px;  padding-left: 10px; border: none; background-color: white;font-size: 1.4rem;" type="submit">
				<span class="fas fa-search">
				</span>
			</button>
	</li>

	<li style="float: right; padding-right: 20px; color: #0d1124; padding-bottom: 3px;"> 
		<div class="far fa-user tooltip">
    			<div class="bottom">
        			<?php echo $_SESSION['username']; ?>
        				<i></i>
   			</div>
		</div>
	</li>

<!--<li style="float: right; padding-right: 20px; color: #0d1124;padding-top: 5px;"><a style="text-decoration: none; color: #070252;font-size: 20px;" href="#">
		<div class="tooltip">
    		<i style="float: right; color: #070252; font-size: 28px; padding-right:13px; padding-bottom:18px; text-decoration: none;" class="far fa-user">
   			 <div class="bottom">
                    		<?php echo $_SESSION['username']; ?>
        	<i></i>
    			</div>
		</div>
		</i></a></li>-->


        <!--<li style="float: right; padding-right: 20px; color: #203078;padding-top: 10px;">
		<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a style="text-decoration: none; color: #070252;font-size: 20px;" href="shoppingCart.php"><i class="fas fa-shopping-cart"></i></a>
<?php echo $cart_count; ?></span></a>
</div>
<?php
}
?>
	</li>-->
<!--shopping cart
	<li style="float: right; padding-right: 20px; color: #203078;padding-top: 10px;">
		<a style="text-decoration: none; color: #070252;font-size: 20px;" href="cart.php" target="_blank">
			<i style="float: right; color: #070252; font-size: 28px; padding-right:13px; padding-bottom:10px;" class="fab fa-opencart">
				 cart
			</i>
		</a>
	</li>-->

        <li style="float: right; padding-right: 20px; color: #0d1124;padding-top: 10px;">
		<a style="text-decoration: none; color: #070252;font-size: 20px;" href="#about">
			About
		</a>
	</li>

	<li style="float: right; padding-right: 20px; color: #0d1124;padding-top: 10px;">
		<a style="text-decoration: none; color: #070252;font-size: 20px;" href="logout.php">
			Logout
		</a>
	</li>
      </ul>
    </nav>
  </div>
<!-- carousel for ads-->
<div class="slideshow-container">

	<div class="mySlides fade">
  		<div class="numbertext"></div>
  			<a href="#">
  				<img src="data:image/png;base64,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" style="width:100%; height:500px; border-radius: 10px;"></a>
  					<div class="text">latest offers</div>
	</div>

	<div class="mySlides fade">
  		<div class="imgCarousel2.jpg"></div>
  			<a href="#">
  				<img src="data:image/jpeg;base64,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" style="width:100%; height:500px; border-radius: 10px;"> </a>
  					<div class="text">ads</div>
	</div>

	<div class="mySlides fade">
  		<div class="numbertext"></div>
			<a href="#">
  				<img src="https://cdn-a.william-reed.com/var/wrbm_gb_food_pharma/storage/images/5/3/9/8/1188935-7-eng-GB/Lay-s-Ace-Metrix-TV-brand-of-the-year-snacks-and-candy.jpg" style="width:100%; height:500px; border-radius: 10px;"> </a>
  					<div class="text">latest offers</div>
	</div>

<!-- dots at the bottom of carousel -->
</div>

	<div style="text-align:center">
  		<span class="dot"></span> 
  		<span class="dot"></span> 
  		<span class="dot"></span> 
	</div>

<form method='post' action=''>
	<!-- ads

//1st row-->

<h1 style="font-family: 'Abril Fatface', cursive; font-family: 'Fjalla One', sans-serif; font-family: 'Maven Pro', sans-serif;text-align:left;padding-left: 30px;">TRENDING IN ELECTRONICS </h1>


	<div class="image-section">
      		<div class="section-style">
        		<a style="text-decoration:none;color:#121240;" href="productpg11.php" target="_blank"><img style="width: auto;" name="Headphone" src="ig/headphone.jpg" alt="" /> 
        		<p>Headphones   <span class="current"><br>₹1444.99</span></p></a>
        <span style="color: orange;" class="fa fa-star checked"></span>
        <span style="color: orange;"class="fa fa-star checked"></span>
        <span style="color: orange;" class="fa fa-star checked"></span><!-- -->
        <span style="color: orange;" class="fas fa-star-half-alt"></span>
        <span style="color: orange;" class="far fa-star"></span><br>
        <!--<a href="#"><button type='submit' style="font-size: 30px; color: #030a4d; float: right; padding-right:20px; border: none;background-color: #ffffff;" type='submit' class="fa fa-cart-plus buy"></button></a><br>-->
      </div>
      <div class="section-style">
        <a style="text-decoration: none; color: #121240;" href="#"><img style="width: auto;" name="Foldable-laptop" src="ig/foldable-laptop.jpg" alt="" />
        <p>Foldable laptop<br>₹50,000</p></a>
        <span style="color: orange;" class="fa fa-star checked"></span>
        <span style="color: orange;"class="fa fa-star checked"></span>
        <span style="color: orange;" class="fa fa-star checked"></span><!-- -->
        <span style="color: orange;" class="fas fa-star-half-alt"></span>
        <span style="color: orange;" class="far fa-star"></span><br>
        <!--<a href="#"><button type='submit' style="font-size: 30px; color: #030a4d; float: right; padding-right:20px; border: none;background-color: #ffffff;" type='submit' class="fa fa-cart-plus buy"></button></a>-->
      </div>
      <div class="section-style">
        <a style="text-decoration: none; color: #121240;" href="#"><img style="width: auto;" name="Samsung-tablet" src="ig/samsung-tablet.jpg" alt="" />
        <p>Samsung tablet<br>₹9644.99</p></a>
        <span style="color: orange;" class="fa fa-star checked"></span>
        <span style="color: orange;"class="fa fa-star checked"></span>
        <span style="color: orange;" class="fa fa-star checked"></span><!-- -->
        <span style="color: orange;" class="fas fa-star-half-alt"></span>
        <span style="color: orange;" class="far fa-star"></span><br>
        <!--<a href="#"><button type='submit' style="font-size: 30px; color: #030a4d; float: right; padding-right:20px; border: none;background-color: #ffffff;" type='submit' class="fa fa-cart-plus buy"></button></a>-->
      </div>
      <div class="section-style">
        <a style="text-decoration: none; color: #121240;" href="#"><img style="width: auto;" name="Apple-watch" src="ig/apple-watch.jpg" alt="" />
        <p>Apple watch<br>₹4999.99</p></a>
        <span style="color: orange;" class="fa fa-star checked"></span>
        <span style="color: orange;"class="fa fa-star checked"></span>
        <span style="color: orange;" class="fa fa-star checked"></span><!-- -->
        <span style="color: orange;" class="fas fa-star-half-alt"></span>
        <span style="color: orange;" class="far fa-star"></span><br>
        <!--<a href="#"><button type='submit' style="font-size: 30px; color: #030a4d; float: right; padding-right:20px; border: none;background-color: #ffffff;" type='submit' class="fa fa-cart-plus buy"></button></a>-->
      </div>
    </div>
<!-- 2nd row--><h1 style="font-family: 'Abril Fatface', cursive;
font-family: 'Fjalla One', sans-serif;
font-family: 'Maven Pro', sans-serif;text-align:left;padding-left: 30px;">FRESH FRUITS</h1>
    <div class="image-section">
      <div class="section-style">
        <a style="text-decoration:none;color:#121240;" href="productpg22.php" target="_blank"><img style="width: auto;" name="Apples" src="ig/apple.jpg" alt="" />
        <p>Fresh RED Apple  <span class="current"> ₹144.99</span></p></a>
        <span style="color: orange;" class="fa fa-star checked"></span>
        <span style="color: orange;"class="fa fa-star checked"></span>
        <span style="color: orange;" class="fa fa-star checked"></span><!-- -->
        <span style="color: orange;" class="fas fa-star-half-alt"></span>
        <span style="color: orange;" class="far fa-star"></span><br>
        <!--<a href="#"><button type='submit' style="font-size: 30px; color: #030a4d; float: right; padding-right:20px; border: none;background-color: #ffffff;" type='submit' class="fa fa-cart-plus buy"></button></a>-->
      </div>
      <div class="section-style">
        <a style="text-decoration: none; color: #121240;" href="#"><img style="width: auto;" name="Pomogranate" src="ig/pomogranades.jpg" alt="" />
        <p>Juicy pomegranate<br>₹320</p></a>
        <span style="color: orange;" class="fa fa-star checked"></span>
        <span style="color: orange;"class="fa fa-star checked"></span>
        <span style="color: orange;" class="fa fa-star checked"></span><!-- -->
        <span style="color: orange;" class="fas fa-star-half-alt"></span>
        <span style="color: orange;" class="far fa-star"></span><br>
        <!--<a href="#"><button type='submit' style="font-size: 30px; color: #030a4d; float: right; padding-right:20px; border: none;background-color: #ffffff;" type='submit' class="fa fa-cart-plus buy"></button></a>-->
      </div>
      <div class="section-style">
        <a style="text-decoration: none; color: #121240;" href="#"><img style="width: auto;" name="Oranges" src="ig/orange.jpg" alt="" />
        <p>Oranges<br>₹600</p></a>
        <span style="color: orange;" class="fa fa-star checked"></span>
        <span style="color: orange;"class="fa fa-star checked"></span>
        <span style="color: orange;" class="fa fa-star checked"></span><!-- -->
        <span style="color: orange;" class="fas fa-star-half-alt"></span>
        <span style="color: orange;" class="far fa-star"></span><br>
        <!--<a href="#"><button type='submit' style="font-size: 30px; color: #030a4d; float: right; padding-right:20px; border: none;background-color: #ffffff;" type='submit' class="fa fa-cart-plus buy"></button></a>-->
      </div>
      <div class="section-style">
        <a style="text-decoration: none; color: #121240;" href="#"><img style="width: auto;" name="Kiwi" src="ig/kiwi.jpg" alt="" />
        <p>Fresh Kiwi<br>₹ 849</p></a>
        <span style="color: orange;" class="fa fa-star checked"></span>
        <span style="color: orange;"class="fa fa-star checked"></span>
        <span style="color: orange;" class="fa fa-star checked"></span><!-- -->
        <span style="color: orange;" class="fas fa-star-half-alt"></span>
        <span style="color: orange;" class="far fa-star"></span><br>
        <!--<a href="#"><button type='submit' style="font-size: 30px; color: #030a4d; float: right; padding-right:20px; border: none;background-color: #ffffff;" type='submit' class="fa fa-cart-plus buy"></button></a>-->
      </div>
    </div>

<!-- 3rd row-->
  <h1 style="font-family: 'Abril Fatface', cursive;
font-family: 'Fjalla One', sans-serif;
font-family: 'Maven Pro', sans-serif;text-align:left;padding-left: 30px;">TRENDING IN FOOTWEAR </h1>
    <div class="image-section">
      <div class="section-style">
        <a style="text-decoration: none; color: #121240;" href="productpg3.php" target="_blank"><img style="width: auto;" name="T-rock" src="ig/t-rock.jpg" alt="" />
        <p>T-Rock    <br>₹599.99</p></a>
        <span style="color: orange;" class="fa fa-star checked"></span>
        <span style="color: orange;"class="fa fa-star checked"></span>
        <span style="color: orange;" class="fa fa-star checked"></span><!-- -->
        <span style="color: orange;" class="fas fa-star-half-alt"></span>
        <span style="color: orange;" class="far fa-star"></span><br>
        <!--<a href="#"><button type='submit' style="font-size: 30px; color: #030a4d; float: right; padding-right:20px; border: none;background-color: #ffffff;" type='submit' class="fa fa-cart-plus buy"></button></a>-->
      </div>
      <div class="section-style">
        <a style="text-decoration: none; color: #121240;" href="#"><img style="width: auto;" name="Sleeper" src="ig/sleeper.jpg" alt="" />
        <p>BATA Sleeper<br>₹ 199</p></a>
        <span style="color: orange;" class="fa fa-star checked"></span>
        <span style="color: orange;"class="fa fa-star checked"></span>
        <span style="color: orange;" class="fa fa-star checked"></span><!-- -->
        <span style="color: orange;" class="fas fa-star-half-alt"></span>
        <span style="color: orange;" class="far fa-star"></span><br>
        <!--<a href="#"><button type='submit' style="font-size: 30px; color: #030a4d; float: right; padding-right:20px; border: none;background-color: #ffffff;" type='submit' class="fa fa-cart-plus buy"></button></a>-->
      </div>
      <div class="section-style">
        <a style="text-decoration: none; color: #121240;" href="#"><img style="width: auto;" name="Ajio-women-heel" src="ig/ajio-heel.jpg" alt="" />
        <p>AJIO women's heels<br>₹ 1059</p></a>
        <span style="color: orange;" class="fa fa-star checked"></span>
        <span style="color: orange;"class="fa fa-star checked"></span>
        <span style="color: orange;" class="fa fa-star checked"></span><!-- -->
        <span style="color: orange;" class="fas fa-star-half-alt"></span>
        <span style="color: orange;" class="far fa-star"></span><br>
        <!--<a href="#"><button type='submit' style="font-size: 30px; color: #030a4d; float: right; padding-right:20px; border: none;background-color: #ffffff;" type='submit' class="fa fa-cart-plus buy"></button></a>-->
      </div>
      <div class="section-style">
        <a style="text-decoration: none; color: #121240;" href="#"><img style="width: auto;" name="Kolapuri-chappal" src="ig/kolapuri-chappal.jpg" alt="" />
        <p>Kolhapuri Chappal<br>₹ 269</p></a>
        <span style="color: orange;" class="fa fa-star checked"></span>
        <span style="color: orange;"class="fa fa-star checked"></span>
        <span style="color: orange;" class="fa fa-star checked"></span><!-- -->
        <span style="color: orange;" class="fas fa-star-half-alt"></span>
        <span style="color: orange;" class="far fa-star"></span><br>
        <!--<a href="#"><button type='submit' style="font-size: 30px; color: #030a4d; float: right; padding-right:20px; border: none;background-color: #ffffff;" type='submit' class="fa fa-cart-plus buy"></button></a>-->
      </div>
    </div>
<!-- 4th row-->
  <h1 style="font-family: 'Abril Fatface', cursive;
font-family: 'Fjalla One', sans-serif;
font-family: 'Maven Pro', sans-serif;text-align:left;padding-left: 30px;">Up to 60% off | Most loved electronics & accessories</h1>
    <div class="image-section">
      <div class="section-style">
        <a style="text-decoration: none; color: #121240;" href="productpg44.php" target="_blank"><img style="width: auto;" name="HP-laptop" src="ig/hp-laptop.jpg" alt="" />
        <p>HP gaming laptop<br>₹62000.99</p></a>
        <span style="color: orange;" class="fa fa-star checked"></span>
        <span style="color: orange;"class="fa fa-star checked"></span>
        <span style="color: orange;" class="fa fa-star checked"></span><!-- -->
        <span style="color: orange;" class="fas fa-star-half-alt"></span>
        <span style="color: orange;" class="far fa-star"></span><br>
        <!--<a href="#"><button type='submit' style="font-size: 30px; color: #030a4d; float: right; padding-right:20px; border: none;background-color: #ffffff;" type='submit' class="fa fa-cart-plus buy"></button></a>-->
      </div>
      <div class="section-style">
        <a style="text-decoration: none; color: #121240;" href="#"><img style="width: auto;" name="Writing-tab" src="ig/writing-tab.jpg" alt="" />
        <p>Digital Writing Tab<br>₹ 4000</p></a>
        <span style="color: orange;" class="fa fa-star checked"></span>
        <span style="color: orange;"class="fa fa-star checked"></span>
        <span style="color: orange;" class="fa fa-star checked"></span><!-- -->
        <span style="color: orange;" class="fas fa-star-half-alt"></span>
        <span style="color: orange;" class="far fa-star"></span><br>
        <!--<a href="#"><button type='submit' style="font-size: 30px; color: #030a4d; float: right; padding-right:20px; border: none;background-color: #ffffff;" type='submit' class="fa fa-cart-plus buy"></button></a>-->
      </div>
      <div class="section-style">
        <a style="text-decoration: none; color: #121240;" href="#"><img style="width: auto;" name="G-shock" src="ig/g-shock.jpg" alt="" />
        <p>G-Shock<br>₹1999</p></a>
        <span style="color: orange;" class="fa fa-star checked"></span>
        <span style="color: orange;"class="fa fa-star checked"></span>
        <span style="color: orange;" class="fa fa-star checked"></span><!-- -->
        <span style="color: orange;" class="fas fa-star-half-alt"></span>
        <span style="color: orange;" class="far fa-star"></span><br>
        <!--<a href="#"><button type='submit' style="font-size: 30px; color: #030a4d; float: right; padding-right:20px; border: none;background-color: #ffffff;" type='submit' class="fa fa-cart-plus buy"></button></a>-->
      </div>
      <div class="section-style">
        <a style="text-decoration: none; color: #121240;" href="#"><img style="width: auto;" name="Weight-scale" src="ig/weight-scale.jpg" alt="" />
        <p>Body weight scale<br>₹150</p></a>
        <span style="color: orange;" class="fa fa-star checked"></span>
        <span style="color: orange;"class="fa fa-star checked"></span>
        <span style="color: orange;" class="fa fa-star checked"></span><!-- -->
        <span style="color: orange;" class="fas fa-star-half-alt"></span>
        <span style="color: orange;" class="far fa-star"></span><br>
        <!--<a href="#"><button type='submit' style="font-size: 30px; color: #030a4d; float: right; padding-right:20px; border: none;background-color: #ffffff;" type='submit' class="fa fa-cart-plus buy"></button></a>-->
      </div>
    </div>
<!-- 5th row-->
  <h1 style="font-family: 'Abril Fatface', cursive;
font-family: 'Fjalla One', sans-serif;
font-family: 'Maven Pro', sans-serif;text-align:left;padding-left: 30px;">TRENDING IN SPORTS WEAR</h1>
    <div class="image-section">
      <div class="section-style">
        <a style="text-decoration: none; color: #121240;" href="productpg55.php" target="_blank"><img style="width: auto;" name="Fenzy-style-wear" src="ig/style-wear.jpg" alt="" />
	<p>Fenzy Styles Active Wear<br>₹660</p></a>
        <span style="color: orange;" class="fa fa-star checked"></span>
        <span style="color: orange;"class="fa fa-star checked"></span>
        <span style="color: orange;" class="fa fa-star checked"></span><!-- -->
        <span style="color: orange;" class="fas fa-star-half-alt"></span>
        <span style="color: orange;" class="far fa-star"></span><br>
        <!--<a href="#"><button type='submit' style="font-size: 30px; color: #030a4d; float: right; padding-right:20px; border: none;background-color: #ffffff;" type='submit' class="fa fa-cart-plus buy"></button></a>-->
        
      </div>
      <div class="section-style">
        <a style="text-decoration: none; color: #121240;" href="#"><img style="width: auto;" name="Women-legings" src="ig/women-legings.jpg" alt="" />
        <p>Women legings<br>₹ 400</p></a>
        <span style="color: orange;" class="fa fa-star checked"></span>
        <span style="color: orange;"class="fa fa-star checked"></span>
        <span style="color: orange;" class="fa fa-star checked"></span><!-- -->
        <span style="color: orange;" class="fas fa-star-half-alt"></span>
        <span style="color: orange;" class="far fa-star"></span><br>
        <!--<a href="#"><button type='submit' style="font-size: 30px; color: #030a4d; float: right; padding-right:20px; border: none;background-color: #ffffff;" type='submit' class="fa fa-cart-plus buy"></button></a>-->
      </div>
      <div class="section-style">
        <a style="text-decoration: none; color: #121240;" href="#"><img name="Elastic-socks" src="ig/elastic-socks.jpg" alt="" />
        <p>Elastic Shocks<br>₹ 200</p></a>
        <span style="color: orange;" class="fa fa-star checked"></span>
        <span style="color: orange;"class="fa fa-star checked"></span>
        <span style="color: orange;" class="fa fa-star checked"></span><!-- -->
        <span style="color: orange;" class="fas fa-star-half-alt"></span>
        <span style="color: orange;" class="far fa-star"></span><br>
        <!--<a href="#"><button type='submit' style="font-size: 30px; color: #030a4d; float: right; padding-right:20px; border: none;background-color: #ffffff;" type='submit' class="fa fa-cart-plus buy"></button></a>-->
      </div>
      <div class="section-style">
        <a style="text-decoration: none; color: #121240;" href="#"><img style="width: auto;" name="Skinny-wear" src="https://m.media-amazon.com/images/I/51gNcZ70pGL._AC_UL320_.jpg" alt="" />
        <p>Skinny wear<br>₹370</p></a>
        <span style="color: orange;" class="fa fa-star checked"></span>
        <span style="color: orange;"class="fa fa-star checked"></span>
        <span style="color: orange;" class="fa fa-star checked"></span><!-- -->
        <span style="color: orange;" class="fas fa-star-half-alt"></span>
        <span style="color: orange;" class="far fa-star"></span><br>
        <!--<a href="#"><button type='submit' style="font-size: 30px; color: #030a4d; float: right; padding-right:20px; border: none;background-color: #ffffff;" type='submit' class="fa fa-cart-plus buy"></button></a>-->
      </div>
    </div>
<!-- ads
//6th row-->
  <h1 style="font-family: 'Abril Fatface', cursive;
font-family: 'Fjalla One', sans-serif;
font-family: 'Maven Pro', sans-serif;text-align:left;padding-left: 30px;">Fresh Grocery | Up to 40% off + ₹500 back</h1>
<div class="image-section">
      <div class="section-style">
        <a style="text-decoration: none; color: #121240;" href="#"><img style="width: auto;" name="TATA-salt" src="ig/tata-salt.jpeg" alt="" />
        <p>TATA Salt<br>₹129</p></a>
        <span style="color: orange;" class="fa fa-star checked"></span>
        <span style="color: orange;"class="fa fa-star checked"></span>
        <span style="color: orange;" class="fa fa-star checked"></span><!-- -->
        <span style="color: orange;" class="fas fa-star-half-alt"></span>
        <span style="color: orange;" class="far fa-star"></span><br>
        <!--<a href="#"><button type='submit' style="font-size: 30px; color: #030a4d; float: right; padding-right:20px; border: none;background-color: #ffffff;" type='submit' class="fa fa-cart-plus buy"></button></span></a>-->
      </div>      <div class="section-style">
        <a style="text-decoration: none; color: #121240;" href="#"><img style="width: auto;" name="Safola-gold-oil" src="ig/gold-oil.jpg" alt="" />
        <p>Safola Gold Oil<br>₹169</p></a>
        <span style="color: orange;" class="fa fa-star checked"></span>
        <span style="color: orange;"class="fa fa-star checked"></span>
        <span style="color: orange;" class="fa fa-star checked"></span><!-- -->
        <span style="color: orange;" class="fas fa-star-half-alt"></span>
        <span style="color: orange;" class="far fa-star"></span><br>
        <!--<a href="#"><button type='submit' style="font-size: 30px; color: #030a4d; float: right; padding-right:20px; border: none;background-color: #ffffff;" type='submit' class="fa fa-cart-plus buy"></button></a>-->
      </div>
      <div class="section-style">
        <a style="text-decoration: none; color: #121240;" href="#"><img style="width: auto;" name="OAT" src="ig/oats.jpg" alt="" />
        <p>Oats<br>₹ 180</p></a>
        <span style="color: orange;" class="fa fa-star checked"></span>
        <span style="color: orange;"class="fa fa-star checked"></span>
        <span style="color: orange;" class="fa fa-star checked"></span><!-- -->
        <span style="color: orange;" class="fas fa-star-half-alt"></span>
        <span style="color: orange;" class="far fa-star"></span><br>
        <!--<a href="#"><button type='submit' style="font-size: 30px; color: #030a4d; float: right; padding-right:20px; border: none;background-color: #ffffff;" type='submit' class="fa fa-cart-plus buy"></button></a>-->
      </div>
      <div class="section-style">
        <a style="text-decoration: none; color: #121240;" href="#"><img style="width: auto;" name="Moog-dal" src="ig/moog-dal.jpg" alt="" />
        <p>Moog Daal<br>₹220</p></a>
        <span style="color: orange;" class="fa fa-star checked"></span>
        <span style="color: orange;"class="fa fa-star checked"></span>
        <span style="color: orange;" class="fa fa-star checked"></span><!-- -->
        <span style="color: orange;" class="fas fa-star-half-alt"></span>
        <span style="color: orange;" class="far fa-star"></span><br>
        <!--<a href="#"><button type='submit' style="font-size: 30px; color: #030a4d; float: right; padding-right:20px; border: none;background-color: #ffffff;" type='submit' class="fa fa-cart-plus buy"></button></a>-->
      </div>
    </div>
</form>
  <br>
            <div class="center">
            <div class="pagination">
            <a href="#">&laquo;</a>
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a> 
            <a href="#">5</a>
            <a href="#">6</a>
            <a href="#">&raquo;</a>
          </div>
          </div>
  <br>
  <div class="foot" id="about">
    <h2 style="font-size:35px;font-family: 'Lemonada', cursive; padding-bottom: 0px;">Creators / About Us</h2>
 <div class="flex-container">
  <div class="flex-item-left"><p> Ashik Prakash  <br> TE IT A<br>Batch 1<br>Roll no.: 02</p></div>
  <div class="flex-item-right"><p> Beryl Coutinho  <br> TE IT A<br>Batch 1<br>Roll no.: 04</p></div>
    <div class="flex-item-middle"><p> Dylan  Coelho  <br> TE IT A<br>Batch 1<br>Roll no.: 08</p></div>
  </div><p style="font-size: 20px; color: #121240; padding-bottom:20px;">The product images are taken from Amazon website.</p>
</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {/*using js creating a function to infinitely countinue slideshow*/
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {/*for slideshow*/
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {/*for changing dots as per the slide*/
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000); 
}
  
  	$('#header').prepend('<div id="menu-icon"><span class="first"></span><span class="second"></span><span class="third"></span></div>');
	
	$("#menu-icon").on("click", function(){
    $("nav").slideToggle();
    $(this).toggleClass("active");
});
</script>
<br>
</body>
</html>