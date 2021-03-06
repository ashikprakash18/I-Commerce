<?php
   include('connect.php');
   session_start();
   
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/e3e6d0d7c2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/e3e6d0d7c2.js" crossorigin="anonymous"></script>
<style>
body {font-family: 'Work Sans', sans-serif;
 }
* {box-sizing: border-box;}
  .image-section{
    margin: 0;
  padding: 0;
  }
  * {box-sizing: border-box;}
/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #1F3C88;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}
  .chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
   box-shadow: 5px 10px 10px #888888; 
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 300px;
}

/*textarea gets focus */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the send button */
.form-container .btn {
  background-color: #4c98af;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Adding background color to the cancel button */
.form-container .cancel {
  background-color: #4c60af;
}
  
  img{
    width: 50%;
    height: auto;
  }
/* Adding some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 9;
}
.image-section {
  display: flex;
  float: left;
  width: 50%;
  height: 100%;
}
  .container {
  max-width: 1100px;
  margin: auto;
  overflow: hidden;
  padding: 0 2rem;
}

.navbar {
  font-size: 1.2rem;
}

.navbar .container {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-gap: 2rem;
}

.navbar .logo {
  font-size: 2rem;
}

.navbar ul {
  justify-self: flex-end;
  display: flex;
  align-items: center;
  justify-content: center;
}

.navbar a {
  padding: 0 1rem;
}

.navbar a:hover {
  color: #555;
}
  .container img{
    width: 75%;
  }
.section-a {
  margin: 2rem 0;
  justify-content: center;
  box-shadow: 5px 10px 18px #888888;
}

.section-a .container {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap: 3rem;
  align-items: center;
  justify-content: center;
}

.section-a h1 {
  font-size: 3rem;
  color: var(--primary-color);
}

.section-a p {
  margin: 1rem 0;
}
    .price{
      font-weight: 700;
      margin-top: 5px;
      font-size: 18px;
      .current{
        color: $discount;
        margin-left: 6px;
      }
    }
  .navbar ul{
    list-style-type: none;
  }
  * {box-sizing: border-box;}

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #1F3C88;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  left: 28px;
  width: 280px;
}
  .chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  float:left;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 300px;
}

/*textarea gets focus */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the send button */
.form-container .btn {
  background-color: #4c98af;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Adding background color to the cancel button */
.form-container .cancel {
  background-color: #4c60af;
}

/* Adding some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  box-shadow: 5px 10px 18px #888888;
}
  .navbar{
    padding-top: 0px;
    box-shadow: 8px 15px 20px #888888;
    border-radius: 35px;
  }
  .section-a{
    border-radius: 20px;
  }
  /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
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
</style>
</head>
<body>
  <div class="navbar">
    <nav>
      <ul>
        <li style="font-style: italic; font-weight: bold;font-size: 40px; padding-bottom: 15px; color: #070252; padding-right: 280px; padding-top:0px;float: left;"><a style="text-decoration: none; color: #070252;font-size: 26px;" href="homePage.html">I-commerce</a></li>
        <li style="color: #070252; padding-right:30px; padding-bottom:10px;"><input style="border-radius: 25px; width: 600px; height: 35px; float: left; border: none; background-color: #d9dbdb;" type="text" placeholder="   Search...." name="search"><button class="search-btn" style="border-radius: 25px; height: 40px; border: none; background-color: white;font-size: 1.4rem;" type="submit"><span class="fas fa-search"></span></button></li>
        <!-- <li><a href="#"><i style="float: right; color: #070252; font-size: 28px;" class="fas fa-shopping-cart"></i></a></li> -->
        <li><a href="#"><div class="far fa-user tooltip">
    <div class="bottom">
        <?php echo $_SESSION['username']; ?>
        <i></i>
    </div>
</div></a></li>
      </ul>
    </nav>
  </div>
    <!-- Showcase -->
    <section class="section-a">
      <div class="container">
        <div>
          <h1 style="font-family: 'Work Sans', sans-serif;">T- Rock Men's Running Shoes</h1>
          <p style="font-family: 'Work Sans', sans-serif;">Ships from and sold by Boot Maker, Vasai west.<br> <br>  <span style="color: orange;" class="fa fa-star checked"></span>
        <span style="color: orange;"class="fa fa-star checked"></span>
        <span style="color: orange;" class="fa fa-star checked"></span>
        <span style="color: orange;" class="fa fa-star checked"></span>
        <span class="fa fa-star"></span><br> <br>
        <span class="current" style="font-family: 'Work Sans', sans-serif;">??? 599.99</span>    
            <br><br>
            
<!--<button style="border-radius:25px; border:none; width: 200px; height: 50px; background-color: #3b5ad4; color: white; position: static; font-size: 20px;box-shadow: 5px 5px 5px #b5b7ba; opacity: 0.9; :hover: box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);" id=AddtoCart>Add to Cart</button> -->
<a href="msg.php" target="_blank">
	<button style="border-radius:25px; border:none; width: 200px; height: 50px; background-color: #3b5ad4; color: white; position: static;margin:15px; font-size: 20px;box-shadow: 5px 5px 5px #b5b7ba; opacity: 0.9;" class="open-button" onclick="openForm()">
		Chat
	</button>
</a>
            
 
<div class="chat-popup" id="myForm">
  <form action="msg.php" class="form-container">
  <!-- -->
    <i style="float: right; font-size: 25px;" class="fas fa-times" onclick="closeForm()"></i>
    <h1 style="font-size: 25px; text-align: center;">I-commerce  <br>Chat-box</h1>
    <div class="scrollbar-thin">
    <div class="messages"><!-- -->
  <!--<p style="font-family: 'Work Sans', sans-serif; font-size: 17px;text-align: right;" class="msgtext">Hey bro</p>-->
      
        <div class="msgcontainer">
          <p style="font-family: 'Work Sans', sans-serif; font-size: 17px;text-align: left; color: #ffffff;" class="msgtext">Hey bro</p>
        </div>
      
    </div>
      </div>
<!-- -->
    <label for="msg"></label>
    <textarea style="width: 88%; float: left;" placeholder="Type a message.." name="msg" required></textarea>
<!-- -->
	<i style="border-radius: 25px; font-size: 30px; float: right; padding-top: 20px;" type="submit" name"chat" class="far fa-paper-plane"></i>
    <button style="border-radius: 30px; font-size: 15px;" type="button" class="fas fa-times btn cancel" onclick="closeForm()">  Close</button>
  </form>
</div>


          </p>
        </div>
        <img style="width: 108%; " src="https://images-na.ssl-images-amazon.com/images/I/51pt7rpfMCL._UL1000_.jpg" alt="" />
      </div>
   
  </section>

<div>


<script>
function openForm() {
  document.getElementById("myForm").style.display = "none";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</div>
</body>
</html>
