
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
        <li style="font-style: italic; font-weight: bold;font-size: 30px; padding-bottom: 15px; color: #070252;">Icommerce</li>
        <li style="padding-left: 120px;  padding-right:10px; color: #070252;padding-top: 5px;"><input style="border-radius: 25px; width: 600px; height: 30px; float: left; border: none; background-color: #d9dbdb;" type="text" placeholder="   Search...." name="search" class="searchbar"><button class="search-btn" style="border-radius: 25px; float: left; height: 30px;  padding-left: 10px; border: none; background-color: white;font-size: 1.4rem;" type="submit"><span class="fas fa-search"></span></button></li>
        <li style="float: right; padding-right: 20px; color: #0d1124;padding-top: 5px;"><a style="text-decoration: none; color: #070252;font-size: 20px;" href="#about">About</a></li>
        <li style="float: right; padding-right: 20px; color: #0d1124;padding-top: 5px;"><a style="text-decoration: none; color: #070252;font-size: 20px;" href="signupage.php">SignUp</a></li>
        <li style="float: right; padding-right: 20px; color: #203078;padding-top: 5px;"><a style="text-decoration: none; color: #070252;font-size: 20px;" href="loginpage.php">Login</a></li>
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
  <div class="numbertext"></div><a href="#">
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
<!-- ads
//1st row-->
<h1 style="font-family: 'Abril Fatface', cursive;
font-family: 'Fjalla One', sans-serif;
font-family: 'Maven Pro', sans-serif;text-align:left;padding-left: 30px;">TRENDING IN ELECTRONICS </h1>
<div class="image-section">
      <div class="section-style">
        <a style="text-decoration:none;color:#121240;" href="productPage1.html"><img style="width: auto;" src="https://assets.myntassets.com/f_webp,h_560,q_90,w_420/v1/assets/images/12333774/2020/8/24/226e9b32-1bfa-439f-b4bf-470330a909851598249685015-Infinity-JBL-Tranz-700-Wireless-Headphones-with-20-Hours-Pla-1.jpg" alt="" /> 
        <p>Headphones   <span class="current">₹1444.99</span></p></a>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span><br>
        <a href="loginpage.php"><span style="font-size: 30px; color: #030a4d; float: right; padding-right:20px;" class="fa fa-cart-plus"></span></a><br>
      </div>
      <div class="section-style">
        <a style="text-decoration: none; color: #121240;" href="#"><img style="width: auto;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSlk37gBsPb1tFrSmWFv12yMzYJqT-x7uoCDg&usqp=CAU" alt="" />
        <p>Foldable laptop</p></a>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span><br>
        <a href="loginpage.php"><span style="font-size: 30px; color: #030a4d; float: right; padding-right:20px;" class="fa fa-cart-plus"></span></a>
      </div>
      <div class="section-style">
        <a style="text-decoration: none; color: #121240;" href="#"><img style="width: auto;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSlCZNZeztJ5KP90PS88wdSUTEgS1skE9ksLYOBbIIQNYl2BAHuQUEXOmFGOJRZ4c97FneG3yk&usqp=CAc" alt="" />
        <p>Samsung tablet</p></a>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span><br>
        <a href="loginpage.php"><span style="font-size: 30px; color: #030a4d; float: right; padding-right:20px;" class="fa fa-cart-plus"></span></a>
      </div>
      <div class="section-style">
        <a style="text-decoration: none; color: #121240;" href="#"><img style="width: auto;" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxIQEhUQEBIVFRUWFRcXFRUVEBcVFhYQFRUXGBUVFRUYHSgiGBolGxUWITEhJSkrMi4uGCAzODMvNygtLisBCgoKDg0OGhAQGTYfHR0rLS0tLy0tNy0tLS0tLS0tLS0tKy8tNy0tLS0tLS0tLS0tLS0tKy0tLS0tKy0tLS0tLf/AABEIANsA5gMBIgACEQEDEQH/xAAcAAEAAQUBAQAAAAAAAAAAAAAABwIDBQYIAQT/xABMEAACAQIDBAYFBwcKBQUAAAABAgMAEQQSIQUGMUEHEyJRYXEUMoGRsSMzQlJyocEkNEOCkrLCFVNic4Ois8PR4TVjo9LwFkRkdJP/xAAYAQEBAQEBAAAAAAAAAAAAAAAAAgEDBP/EACIRAQEAAgICAgMBAQAAAAAAAAABAhEDMRIhE0EyUWGRcf/aAAwDAQACEQMRAD8AnGlKUClKUClKUClKUClKollVFLOQqgXJJAAA4kk8BQV0qPN4uljCwXTCqcS4+kDkiH65BLfqix76j3a/SLtHE3HX9Sp+jAuT+/q9/wBaqmFrNugJ8QkYzSMqjvZgo95rC4nfbZ0frYyE/YkEh9yXrnGeRpGzyMzt9Z2LN+02teAVfxs8k+S9J+zF0Ezt9nDy/EqK+ZulfZ/ITnyhH4tUHgVdSK9b4RnkmxelbZ55Tj+xH4NX2YfpK2a+hmZftQSj7wpFQU2VeNWWx6DhTwht0vs7eDCYg2gxETn6qyLm/Zvf7qyVcqenodCAa2TYW++LwtuqnYr/ADcpMiW7gCbqPskVN4/03ydD0rSd1ukbD4oiKcCCU6C7Xic8gr8ifqt32BNbtUWaUUpSsClKUClKUClKUClKUClKUClKUClK17fXeuLZkHWP2pGuIYr2LuOZ7kFxdvLmQCF3evenD7Oi6ydrs1+rjX15GHcOQFxdjoL95AMEb1b34raTfLNljBusCE9WvcT9dv6R9gHCsZtfak2LmbEYh88jc+ACjgiD6Ki+g+JJJ+QV3xw0i0r2le1THoqpRXgr6II70FUUXM18uM2gB2U18akvo43NGLIxeJX5BT8mh4TOp1Zu+MEWt9Ig30FmvdJPRiCGxmzks2rS4dRo3MvCBwbvQaHlY6NPlN6bpDMjs3E1Rar1uYqkrWi3aq0lIpavLVrH34fF8j7qk3cDpCbDlcPi2LwcFkNy0PcCeLR/evloIi4V9mFxFZZtu3WyOGAZSCCLgg3BB4EHmKqqIeijfDIy4GduwxtAxPqSH9ET9Vvo9x05i0vVws0qUpSlY0pSlApSlApSlApSlApXhNYzF7bjW6oVLeLAD3cT7BWW6bJas717yw7OgM0xuTpHGD2pJPqr+J5Cud9v7amx07Ymc3ZtAB6qIPVRByAv7SSeJqS9sbqRY2Y4jHY92fgFVMiIv1EUqco9tzzJNWU3G2WOMzn9Yj/SrxzxhcLftFQr2pXG6GyRxZz/AGx/76qXdzYy8Qx/tL/5lV80/TPj/qJ69FS4mxtjfU95H4tV3+Rdin1gieLEAe1gSB7az5v434/6iBay2xsCcRLFApsZZFS4+iGIDN7Bc+ypB2tuFg7XjJW40KuTpyIvcfdWq7Ni/k3aGGeUgxrIDn4Dq2ujMe7LmufLxrceXHL1O2ZcWWPu9J6weGSGNIo1CoihVUcAqiwHuFXqClcxCfTFuWIGO0cMto3b8oQDRJWOkoHIMTY/0iD9I2i5hXW2OwiTRvDKoZHUq6ngUYWI91cvby7EfAYqXCPc9W3YYj14W1jf2gi9uYI5V1wy36TYw9q8tVwiqbV0SptVPDWq7V4RQffhJ+4+42PsNdFdHm8fp+FDOflo+xL4kDsyfrDXzzDlXNED2Nb/ANF+3fRcagY2jmtE/ddj8m3sew8AzVGc3GyugKUpXFZSlKBSlKBSlKBSlYLffaZwuBnmQ2cIQhHEO2gYeIuW9lBFPSr0nSGdsFgmtHG2WaRTYySD1kRh6qKdCeJIPIa6F/6xkAsAf2/9q1+YXawFyTYAakk8ABzNZmHd5ZMB6YjgyBpGZDIB8jEUV1RAhzOOtjckuvZYABidA9fe2U8j+3/tVpt6Jf8AxjWP2ZsifFHLBEz24kaKv2nOg8r023siTBydTNlzZQ3Za4s17cQNdDWj623kl8PeatNvDL3j7/8AWvNj7DbFKxVspDqouhK9oG5ZhwtpoASbk2ABNWNpbExOHAaaFkUgWbQrrwBZbgHwOtBdO3pvrW9lfJi8bJKLO7Ed19PdW24TdOGXAYd1B9IxMqJHKWcRrJLLLHHFYKQ4ywSFrXYM8fK9adjsI8LlHHiCPVdLmzo30kNrhhoRQbn0ebxSxn0Z3JiJ7IJv1bf0e5TzHLj33kHbWw3misw8Va3qt4+B4H/aoa3YltMPf7j/AL109u6FmwqEi5y2N+Jykrc+Jtf21xzx1fKO/HnueNY/ov2xO8bYPFKweDKI3YaPCb2AbgxW1rjkRzBreq0vBjqphbkb+zn9163Srxz8kcmHjSop6ddh5ooseg1jYRSnvikPYJ8nNh/WmpWrHbx7LGMws2Gb9LGyg/VYjst5hrH2Vcuq5VyswqgiroUgWYWYaMDxDDQg+R0qkivQhbtXhFVkV5agtkVkMK9xXwsKv4NuVB1Buhtb0zBw4gm7Mln/AK1Dlk/vKazFRj0I7RzRYjDE+o6yL5SDKwHkYwf16k6vPlNVcKUpWNKUpQKUpQK0LpmmtgCvewPsGn8Vb7UddNp/IwPE/FKCBt39qthMVHOhVSGALMGORGIDsuQhgcuYXXWxI51s0aRTda7MYNns4bq4zKnpswIu3Vl2NusN1X1rMov2bjWNi4GOWTNOwWGMgym5zFLMcqgam4Q3trYG2tTXubu+JGXaOIjykgeiwkWEMFgFkK8BK6hfsqFHLRbpuM3XwbI3XxWJResJwGGt2IIQoxBXvd7WhJ45QCdTfWshj90Nn4KB50wEc7LZm6+RmJFwGdncPYAXY2Xl7azO2d4Idnxl8XJc3kaNUXNJJGCWssY+qpALcOzckXqP9pdMRz5IYolXNYvJnl06wKSVQqLZLsCGbgBzqPddp4Y9tvwu52z8TCkkmAjhZ1zWiZo2XNws6BDqLaEDjYisVtHdHFYVScHIcXDazYXEkGTJrcRTWs3IBHFrDiawWyemRiVGJhiNyMxjLxBQc9yM5fNYBeYuX8KkLY234doIr4WW1jG8qN2ZUjZc6gqL2zHIL3IIzC96e4y+OXSF8ThmTPi9m3ARZlkw7hw+FkderkdFv2JLZ/s5Li9hbSMXi5JcvWOWyIqLc+rGgsqjwFdG74bvMW9Pwa/lKD5SMaDFQDjG3/MAHZbwsbi1oQ3z2XFG0eKwtuoxCl0A+gykB1t9EXYacjccqqXbnljqsTsNrTJ7fhXUG4b5sKfBgP8ApR/iTXLux/nk8z8DXQGwsWBhFhJIEsl3ykXMSxpmAv3nKD4E1mfTeP3WaOKRprq1xcgsLlb31GYaX9tbth3uqnvA+FaZHjAqKyDLcdgadmMaDhwJtf3DlWQ3e2oTJ1TH1rkeYrlhdV25ZbN/ps9KUru8zmjf/Z/o+0sXGBZTJ1q+ImAkNvDM7D2VrxFSP044PJjoZv53D5f1ona590i+6o7YV6MekVbIry1VkVSRWsUEV7Ada9NUpxFBIvRDjer2giX0ljkj9oAkH+GffU71zTufiuqxmFkHKeMH7LuEb+6xrpauPJ2rEpSlQopSlApSlAqOOm8/ki+bfFKkeo36b/zRPNvjHQRj0dbOXHSphiG6mI9diQ1sj2YdWnjmcJoRcBGGZgQFmHefbseBw74iQFrXyIOLvYmw8AFZieQUnlWmdFO74OzzNcK805cNlJIjhzRoBYjUN1jC9x2tQawG+OAlx2Mi2Ph2T5LMbtCY4wTd5JlYFuyD8mR9ZDbjpN910luM/wCvg3e2RNvHiMQ88+RI8jMwjzHOesWMRox+TSwJK3+iOZuKOjrCwYLbL4fGtHeLrY42ewT0lXUKwLaAlM9r8yBxr5x/KW7c8mURlXAQtbPFJoWQ2uGVhdrXtwfiAa0vF4h5XeWRszyMzuxt2nYksTbvJNUhu282y4No7cbDYJkVJXUNIgBTOseed0ANm9VvNr996ub07Ml3excBw87GNgzxsUBdCWQThlUqJLqiix0sbaEZq0fZuOkw0qTwtkkjYMjDkR4cxyI5g1tMs2J2xMmKxt3HzcMMQCGVl7TRxX0RBctJK1wg465RRiY9k77QTQYeVrpJOwQRDtsJAoZz2f0aqQ5c6KpGax0qN+knZ2Hwss0q5TDi0dkKBT+Uow61A4BsBIsbZbgdp73yhTkt3nWDaPoM6fKPEI2ZYrRxxsqvCsNzeOAOQoUjM7tnc5sqjYOk3d4NsmRVJZsOUlUmwOWMCNhp/wAq/mVvU+pXT3lED7I+eTz/AANTG7lIIH5dsajmQlvhUObI+eTz/A10BsfZHpWAyjRlYMhP1gtrHwIJB86zl/FvD+SmLGXihbvjy93aUkH4j319+67l8UgHK5PkKw2z1Avh5UZSTopBIzcLrIoNvaBfwqQd1thLh1z6ZmHfeynXUnifhXLCbrvyZSYtgpSleh40U9PWGBTCTc1kkT9tVb/KqImFTb05w5sDE31MUh9hilX4kVCjiu2HSL2tWqk1WRXhFWxQaoNXCKoagyMEpTtjipzDzXUfCuqUa4BHMXrlSPUeyun9hy58NA/1oY296A1z5FYvtpSlclFKUoFKUoFRt04H8kTzb4pUk1GnTp+Zr+v8UoMtulhhBgcLGfo4eLN9ooGc+8moA2bvVJhdottCNUYs7s6BmyyLKLv2jcgknNfkRwtpXQDvKISAidWMNcP1rdZ1nV6L1XV2y+Of2VHHRTsXATw41sWiSOshEnXxJG0eHyA5glyIe11mqnTKOFqmOmf01rEb5jH4iQ4mOOMSAKlyer6sWtBiGFiVLDMJR2o3Nx2dBru3dhtA10DGNnyANbrI5Tr1MttM1tQw7Lr2l5hcVJa5yklbnKTxK30J8bVsGwduFsmFxIR4SVClltJHImbqCsqgtlVmIykMAsj6cLV0iTd0+bd/YnXWllB6u7ZVDBGlZBdwHOkcSjV5Too7zYVmMHvv6JiVkgjjlRVyPdSiugN1jgB1hhQ6qDqxu73JAXD7c20GBwuGATDJ2Eso6yWJXLK00pAZszkyZNFBIsoyi2JwKoZYxKSIy6iQjiIywzkey9GMxtDeeTFbQG0JAiuHVlBL5I+rA6u2XtaZQfE8RraulNo4dcRBJFxWWJ0/VkQj4Gou6Xdj4HDpg2w8aRSGWydRCjM8IW4bq7gS9vIASdcx43qStjvNlw4CIYzDGWczMJA+QaCLqyGHDXOOJ001jJ14/ty3sj55PP8AA10z0f8A5ofZ8K5n2VbrktwzG3lY10vuB+aH2fCtz6Tx/k+bFzIuJjQkZnJyixuQtsx05C418akDB+ov2R8K0PEIDiFYgXB0NtRfjY8rit8wfqL9kfCuXF3Xbn6i9SlK7vM0XpnW+zWPdLEf71vxqCmqeOmP/hcv9ZD/AIq1A7V24+kZdrZqmqzXhq2KDVDVcNUNQfZBw9ldK7ntfAYQ9+Gh/wAJa5qw/LyrpLcn/h+D/wDrQ/4a1z5OlYs1SlK5KKUpQKUpQKjbpxH5Inm3xSpJqN+m/wDNE82+KUGV3ZnE+Cwzn9Jh4ifMxrm++9c54fdybEY04GFAZczLYvdVyC7s78rWN+YOlr6VMfRRttW2aEcm8ErRW4kq7Z0IHcA5HgIz3Vq28WOOy9prtSKJmjmzEoVSMZHuJVLC5MpkvICeAKjUerM9OmXuRHu8OxJsDO2GxAAdbG6m6srC4ZTYXH4gjlXx4H52P+sT94VtG3cRitv415cNhmJWNQI1YHJCl7F3NhcsxPtsL2rWcLGVmRWBVhKoIIIIYOAQQeBB5VSJ2+Ssnu5sCfaEww+GUF8pYlmyqqLa7MeQuQPMivgw8DSMscalnYhVVRdmYmwAA4kmtt3V2nNsDHFsXh3BaIo6GwbqnZWDofVbtRjnbQi4NBg5thTYfGehSpaVXC5RKqXJF0KSG41BBGlzcC19K6fxEi4eJnvZYoy1+5Y1Jv7hUPbv4obU2q21JY3SKK0mUwdYohhCiIrIBfrBIoY2HAML2BB3bpL26key8QyNrJbDrcEXaUAta/EdUWYHmLVOXteHqWufdkfPJ5/ga6Y3A/ND7PhXM+yfnk8/wNdMbgfmh8x8KZ9M4/yfP1bGTOGN3HZuNEU+rZeF+dzrryFhW/YFrxoe9VP3CtJ+nH9lP3RW6bN+Zj+wv7ornxd125+o+mlKV2eZo3TM1tmOO+WIf3wfwqCmqa+nCbLgI1+viUHsEcrfwioVeu2HSL2tmvDVRqmrYpNUNVw1Q1B9eH/Cuk9zltgMIP8A40P+Etc2wcPZXTewIsmFgT6sMQ9yKK58isX30pSuSilKUClKUCo36bx+SL5t8Y6kio66bR+Rg+J+KUEadGE8cEo62zxYgrHKrRqyRzCRxh2JJNmzC2oGk6ngL1Ju+G6ceOwhw6hUdMzQsVuEkYEMLHkQx8jY8VFQNsPFKHMEoBjl7Niq2Ds8epY2KqQtiQdLK1iVFTN0a75rjo/R5mIxMY+mMrTQD1ZgL+tltmAJ11Gh0nKfbphZ1Wg7gbeXYk+KTGRSBXyKSoVnjlTrGSNxcC7KWOh5DkdPl3Rhg2ptbETzJZWE+Jjjva8mcFA1uJAYsbcSvdepW3m3Sg2ohaVTFKpkSOUKC2UXTM6MLMDYkcwCCCL1HWL6LcZhpRNAVZUbMDHNlYL1mos9iAIyR6zEkeNNwmNljH7VbD7G26rxLmhiKMYwblBLDZ1W51K5ywBPcPGq+kbbKbZxeHXBxyMir1Yfq7PKzOucRIxGfLmXS44sTYa1f2b0T42Zg+IshY5pDJMGY3z5zeMsWb1DckfSvUk7s7p4fZaoUBkkYqjykWylkCZkj1CBmWMG2pzXJIFNxkwte7nboR4LBjDyAdY5R52jZ0vLHlygMpDWGUc7EljYBrVFnTNthHxC4GD5uAlpO0SDiXCgjU8ERVUDl2hyqUd/N7PQYxDAOsxcwIgiGpH/ADWH1RrbvI7gSIF3i2hG6xxRHrAuZzK92lzOzMVZyovxzHS12IubXLH9tz1PUY/ZHzyef4GumdwR+SHz/hH+tcz7H+eTzPwNdMbhfmZ+3/lofxpn0zj/ACefTj+yn7ordNm/Mx/YX90VoqTglGv6os3gydlx7CpHsrfMCto0Hcij7hXPi7rrzdRfpSldnnRd07TfJYSL60rv+wmX/MqJHqQ+m7FBsZh4f5uAv/8Aq5H+SKjxq74dIva2a8qo14apig1QRVw1SBrQfZChYEDidB5nQV1NEmUBRyAHurm3dbDGXFYaMfSxEV/sCRS390GulK5cisSlKVzUUpSgUpSgVoPTRFfAZu5re/X+Gt+rXekHZ5xGz8Qii7BC6i175NSAOZy3t40HLOA2dJipkw8IBdyQoZgo0BJJY6AAAn2VnsGvoUz4OWRRNGysmIhlzKpKo6dU4W91zuQBYMXdTxBrD7OmhjaVpus/N5li6sKbzyIY16y/BMruTbW4FfPtvFxzTNJDEYYyEVIzIZCqRxqgBcgZjZb+2tEybB6ScnyO0V1Fh6TAvWRPdI2uyILj51BmUFSWFrXFbRjsfBjYCMJiYXNw10nUkZddQLm/Kxtx0KmxHOuzdtTYf5srwa2ZA1swUEg8f0aaXt2RpVna+MWeQSCMJ2QpA1uVuAb21OXLc94NTcXScljpfD46HCQqMTiIY7X1acW1YkAM9i3GtV3l6SQkTts6JpyqseuZGWEBSAxQWzS5bi+gUXuTyqAytZPH7bklPHL2CrG92YMiI2ZjxuI1HkNbm5LxZeS/TIbT2uZVmjcied3YyYkMSGyOpSRLjuzIAALC2X1mB+DeXdyfZ8gjnA7Qujrco66XtmAIIuNGAOoNrEE/fuXgIsU0uGZ1jldQYXe+Ust80VhzYMDwJ7GgJspz/SpibQ4TCzOsmJjUmYhiSpyqLtdQQ0h7RBAN0v2gQx1DSNiLedPb8K6X3P7GD82B/wCnHXOO68Oace72k/7V0HhMUI8Kig8r+wm4+63uqOW6jrwzeT2GJOvYhR2/WGtiRYZsvC9gATzA1qQoBZV8h8Kj/YcZdwe82HtNSGKji+1896hSlfHtfHrhoJcQ/qxRs58Qqk2HibWrs86AukLHdftPFODdUYRL4dWoVh+2H99a41e9YzXdzd3Yux72Y3Y+8mqTXonpzUmvDXteGtFJpGNaGrkC0G79FWD6zaER5RJJKf2erH3yD3VO9Rd0KYD84xJ70hX2DO/70fuqUa4532udFKUqGlKUoFKUoFKUoOcOlbcB8DO2IgQnCysSuUfMyHVo27lvcqe7TlrH7YNhyrsvEQLIpR1DKwsVYXBHiK0zafR3hzdokU9yPca9wcfiD51ltjZJXMZw7d1UGBu6pZxy7NilaDEwzQSKbMjLqPaFIIPIgkHkapEOxz+kI8yo/hFPL+VXh/Z/qJjCe6qTEe6pc9A2Qf06e11/1r0bD2U3DEp71P8AFWecb8dRAYz3VTkqZBuns5v/AHK/sj/vr68PudspdXlz+BcKD521++s+SN+LJHe4mz2kkzBTkU9puV/qg9/w491SRj9odWhkk9UaADizclH/AJyNfZLtXZ2GXIkkYCjREsbfqrWuQzfyrjsPh7FYWky24EoO1ITbgxVSB3aVkxvJlu9OlynFj67SH0WwYiVHxmI0R7DDx5bWQXDSDmQb2BPGxPAit/qmKMKAqgAAAAAWAAFgAOQqqunr6ee23sqN+mzbPV4aPBqe1O928IIiGPDvfIPEBqkaWQKCzEAAEkk2AA1JJ7q5s3v28doYuTFa5PUhB5QJfLpyJJZj4uRV4TdTaxDGqDQmvCa7IK8NL1STQK+qAW1PKvnjFbXuFsT0zGRREXRT1svd1SEHKftNlW3cT3VluhM+4myjhMDDEws5XO45iSQ5iD5XC/q1n6UrzuhSlKBSlKBSlKBSlKBSlKDV9+9zYtpxWNknQHqpbcD9R+9D3cuIrnfaOBkw0rwToUkQ2ZT38iDzBFiDzBFdYVpvSNuQm04s8dkxMY+Tc6B149VJ/RJ4H6JN+BIN4Za9Msc9Ur3FQPC7RSoySIcrowsysOR+N+BBBGhq3mrshXYd1e5R3VRmr0NQXBWb3Z2l6LiYcTyjkBbmerOj28cpasEDV+GS1KOrYpAwDKQQQCCNQQRcEGqqivoq3yAC7PxLW5YdydCOUJPf9Xv9XkL5XpD6QUwYbDYVg+JIsTxWC/NuRk7l5cTpYHh43el7Ynph3uAU7NgbtMB6SwPqxnUQ+baE/wBHT6WkSXr2RyxLMSWYlmYm5ZiblieZJ1vVFdpNRNr29eV5Xl61j0mvBSrsaUFyFe/gOJqeOi/d04TDdbItpZ7MwI1SIfNoe42JYjvYjlWidGO6XpcoxMy/IRNoCNJZl4KO9FOp7zYa9q03Vyzy+lSFKUrmopSlApSlApSlApSlApSlApSlBqO/m4kG01z6R4hRZJgL3HJJB9Jb+0X04kGAdvbDxGAl6nFRlG1ynijqPpRvwYcPEXFwK6sr49q7LhxUZhxESyIeKuLi/IjuI7xqKvHLTLHJ169vUubydDJuX2fNp/Mzk6eCygE+xgftVHG2d2cZg7+k4aVAPp5c0dv6xLr9966TKVOmMBqtWqyrA6g16DVMfdFLyNJI76jnqfM8a+QNV1JrUAm1eXq/1gPGnVr30Fi9egVe6od9fbsnZU2KbJhYXmbgci9kH+k57KfrEUHwxx1uW4m5Mm0GDvmTDA9qS1jIRxSLv7i3AeJ0G27q9FQUiXaDByNRAhOT+0fi/wBkWHeWFSdFGFAVQFUAAACwAHAADgK55Z/pUi3gsIkKLFEoREAVVA0CjgKvUpXJRSlKBSlKBSlKBSlKBSlKBSlKBSlKBSlKBSlKDDbS3TwGJOabCQO31uqUP+2LH7613FdEuy3vljljv9TEOfcJCwre6Vu6Iwk6FcJ9DFYkfa6lvhGtfM/QpH9HGuPOBT8GFSxSt8qzSKI+hSP6WNc+UCj4sa+zD9DOEBBfE4lvAGJQfP5Mn76kulPKmo1LZ3RvsyE39GEh75naUfsMcv3VtMEKooRFCqOCqoUAeAHCrlKy3bSlKVgUpSgUpSgUpSgUpSg//9k=" alt="" />
        <p>Apple watch</p></a>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span><br>
        <a href="loginpage.php"><span style="font-size: 30px; color: #030a4d; float: right; padding-right:20px;" class="fa fa-cart-plus"></span></a>
      </div>
    </div>
<!-- 2nd row--><h1 style="font-family: 'Abril Fatface', cursive;
font-family: 'Fjalla One', sans-serif;
font-family: 'Maven Pro', sans-serif;text-align:left;padding-left: 30px;">FRESH FRUITS</h1>
    <div class="image-section">
      <div class="section-style">
        <a style="text-decoration:none;color:#121240;" href="productPage2.html"><img style="width: auto;" src="https://images-na.ssl-images-amazon.com/images/I/81aRkv2DltL._SL1500_.jpg" alt="" />
        <p>Fresh RED Apple  <span class="current"> ₹144.99</span></p></a>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span><br>
        <a href="loginpage.php"><span style="font-size: 30px; color: #030a4d; float: right; padding-right:20px;" class="fa fa-cart-plus"></span></a>
      </div>
      <div class="section-style">
        <a style="text-decoration: none; color: #121240;" href="#"><img style="width: auto;" src="https://img.dmart.in/images/rwd/products/K/F/R/KFRESHFRUITS4pcs97XX141018_3_P.jpg" alt="" />
        <p>Juicy pomegranate</p></a>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span><br>
        <a href="loginpage.php"><span style="font-size: 30px; color: #030a4d; float: right; padding-right:20px;" class="fa fa-cart-plus"></span></a>
      </div>
      <div class="section-style">
        <a style="text-decoration: none; color: #121240;" href="#"><img style="width: auto;" src="https://www.bigbasket.com/media/uploads/p/mm/40094039_7-fresho-orange-nagpur-small.jpg" alt="" />
        <p>Oranges</p></a>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span><br>
        <a href="loginpage.php"><span style="font-size: 30px; color: #030a4d; float: right; padding-right:20px;" class="fa fa-cart-plus"></span></a>
      </div>
      <div class="section-style">
        <a style="text-decoration: none; color: #121240;" href="#"><img style="width: auto;" src="data:image/jpeg;base64,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" alt="" />
        <p>Fresh Kiwi</p></a>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span><br>
        <a href="loginpage.php"><span style="font-size: 30px; color: #030a4d; float: right; padding-right:20px;" class="fa fa-cart-plus"></span></a>
      </div>
    </div>
<!-- 3rd row-->
  <h1 style="font-family: 'Abril Fatface', cursive;
font-family: 'Fjalla One', sans-serif;
font-family: 'Maven Pro', sans-serif;text-align:left;padding-left: 30px;">TRENDING IN FOOTWEAR </h1>
    <div class="image-section">
      <div class="section-style">
        <a style="text-decoration: none; color: #121240;" href="productPage3.html"><img style="width: auto;" src="https://m.media-amazon.com/images/I/51pt7rpfMCL._AC_UL320_.jpg" alt="" />
        <p>T-Rock    ₹599.99</p></a>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span><br>
        <a href="loginpage.php"><span style="font-size: 30px; color: #030a4d; float: right; padding-right:20px;" class="fa fa-cart-plus"></span></a>
      </div>
      <div class="section-style">
        <a style="text-decoration: none; color: #121240;" href="#"><img style="width: auto;" src="https://m.media-amazon.com/images/I/7159hX7WvIL._AC_UL320_.jpg" alt="" />
        <p>BATA Sleeper</p></a>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span><br>
        <a href="loginpage.php"><span style="font-size: 30px; color: #030a4d; float: right; padding-right:20px;" class="fa fa-cart-plus"></span></a>
      </div>
      <div class="section-style">
        <a style="text-decoration: none; color: #121240;" href="#"><img style="width: auto;" src="https://m.media-amazon.com/images/I/71f5TNvXpNL._AC_UL320_.jpg" alt="" />
        <p>AJIO women's heels</p></a>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span> 
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span><br>
        <a href="loginpage.php"><span style="font-size: 30px; color: #030a4d; float: right; padding-right:20px;" class="fa fa-cart-plus"></span></a>
      </div>
      <div class="section-style">
        <a style="text-decoration: none; color: #121240;" href="#"><img style="width: auto;" src="data:image/jpeg;base64,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" alt="" />
        <p>Kolhapuri Chappal</p></a>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span><br>
        <a href="loginpage.php"><span style="font-size: 30px; color: #030a4d; float: right; padding-right:20px;" class="fa fa-cart-plus"></span></a>
      </div>
    </div>
<!-- 4th row-->
  <h1 style="font-family: 'Abril Fatface', cursive;
font-family: 'Fjalla One', sans-serif;
font-family: 'Maven Pro', sans-serif;text-align:left;padding-left: 30px;">Up to 60% off | Most loved electronics & accessories</h1>
    <div class="image-section">
      <div class="section-style">
        <a style="text-decoration: none; color: #121240;" href="productPage4.html"><img style="width: auto;" src="https://m.media-amazon.com/images/I/81pezrPSgOL._AC_UL320_.jpg" alt="" />
        <p>HP gaming laptop</p></a>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span><br>
        <a href="loginpage.php"><span style="font-size: 30px; color: #030a4d; float: right; padding-right:20px;" class="fa fa-cart-plus"></span></a>
      </div>
      <div class="section-style">
        <a style="text-decoration: none; color: #121240;" href="#"><img style="width: auto;" src="https://m.media-amazon.com/images/I/61Pg1H7U15L._AC_UL320_.jpg" alt="" />
        <p>Digital Writing Tab</p></a>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span><br>
        <a href="loginpage.php"><span style="font-size: 30px; color: #030a4d; float: right; padding-right:20px;" class="fa fa-cart-plus"></span></a>
      </div>
      <div class="section-style">
        <a style="text-decoration: none; color: #121240;" href="#"><img style="width: auto;" src="https://m.media-amazon.com/images/I/71qQFnEDc0L._AC_UL320_.jpg" alt="" />
        <p>G-Shock</p></a>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span><br>
        <a href="loginpage.php"><span style="font-size: 30px; color: #030a4d; float: right; padding-right:20px;" class="fa fa-cart-plus"></span></a>
      </div>
      <div class="section-style">
        <a style="text-decoration: none; color: #121240;" href="#"><img style="width: auto;" src="https://m.media-amazon.com/images/I/31NG-MLQbiL._AC_UL320_.jpg" alt="" />
        <p>Body weight scale</p></a>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span><br>
        <a href="loginpage.php"><span style="font-size: 30px; color: #030a4d; float: right; padding-right:20px;" class="fa fa-cart-plus"></span></a>
      </div>
    </div>
<!-- 5th row-->
  <h1 style="font-family: 'Abril Fatface', cursive;
font-family: 'Fjalla One', sans-serif;
font-family: 'Maven Pro', sans-serif;text-align:left;padding-left: 30px;">TRENDING IN SPORTS WEAR</h1>
    <div class="image-section">
      <div class="section-style">
        <a style="text-decoration: none; color: #121240;" href="productPage5.html"><img style="width: auto;" src="https://m.media-amazon.com/images/I/61-j2GQ1+DL._AC_UL320_.jpg" alt="" /><p>Fenzy Styles Active Wear</p></a>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span><br>
        <a href="loginpage.php"><span style="font-size: 30px; color: #030a4d; float: right; padding-right:20px;" class="fa fa-cart-plus"></span></a>
        
      </div>
      <div class="section-style">
        <a style="text-decoration: none; color: #121240;" href="#"><img style="width: auto;" src="https://m.media-amazon.com/images/I/71nZCNlB5XL._AC_UL320_.jpg" alt="" />
        <p>Women legings</p></a>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span><br>
        <a href="loginpage.php"><span style="font-size: 30px; color: #030a4d; float: right; padding-right:20px;" class="fa fa-cart-plus"></span></a>
      </div>
      <div class="section-style">
        <a style="text-decoration: none; color: #121240;" href="#"><img src="https://m.media-amazon.com/images/I/81ZfbZpei1L._AC_UL320_.jpg" alt="" />
        <p>Elastic Shocks</p></a>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span><br>
        <a href="loginpage.php"><span style="font-size: 30px; color: #030a4d; float: right; padding-right:20px;" class="fa fa-cart-plus"></span></a>
      </div>
      <div class="section-style">
        <a style="text-decoration: none; color: #121240;" href="#"><img style="width: auto;" src="https://m.media-amazon.com/images/I/51gNcZ70pGL._AC_UL320_.jpg" alt="" />
        <p>Skinny wear</p></a>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span><br>
        <a href="loginpage.php"><span style="font-size: 30px; color: #030a4d; float: right; padding-right:20px;" class="fa fa-cart-plus"></span></a>
      </div>
    </div>
<!-- ads
//6th row-->
  <h1 style="font-family: 'Abril Fatface', cursive;
font-family: 'Fjalla One', sans-serif;
font-family: 'Maven Pro', sans-serif;text-align:left;padding-left: 30px;">Fresh Grocery | Up to 40% off + ₹500 back</h1>
<div class="image-section">
      <div class="section-style">
        <a style="text-decoration: none; color: #121240;" href="#"><img style="width: auto;" src="https://www.jiomart.com/images/product/150x150/490000073/tata-iodised-salt-1-kg-0-20200621.jpeg" alt="" />
        <p>TATA Salt</p></a>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span><br>
        <a href="loginpage.php"><span style="font-size: 30px; color: #030a4d; float: right; padding-right:20px;" class="fa fa-cart-plus"></span></a>
      </div>      <div class="section-style">
        <a style="text-decoration: none; color: #121240;" href="#"><img style="width: auto;" src="https://www.bigbasket.com/media/uploads/p/s/147491_7-saffola-gold-pro-healthy-lifestyle-edible-oil.jpg" alt="" />
        <p>Safola Gold Oil</p></a>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span><br>
        <a href="loginpage.php"><span style="font-size: 30px; color: #030a4d; float: right; padding-right:20px;" class="fa fa-cart-plus"></span></a>
      </div>
      <div class="section-style">
        <a style="text-decoration: none; color: #121240;" href="#"><img style="width: auto;" src="https://m.media-amazon.com/images/I/71JRvM2PITL._AC_UL320_.jpg" alt="" />
        <p>Oats</p></a>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span><br>
        <a href="loginpage.php"><span style="font-size: 30px; color: #030a4d; float: right; padding-right:20px;" class="fa fa-cart-plus"></span></a>
      </div>
      <div class="section-style">
        <a style="text-decoration: none; color: #121240;" href="#"><img style="width: auto;" src="https://m.media-amazon.com/images/I/91mcCz5-jmL._AC_UL320_.jpg" alt="" />
        <p>Moog Daal</p></a>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span><br>
        <a href="loginpage.php"><span style="font-size: 30px; color: #030a4d; float: right; padding-right:20px;" class="fa fa-cart-plus"></span></a>
      </div>
    </div>
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