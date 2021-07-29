<?php 
if (isset($_POST['submit'])){ 

$link = mysqli_connect("sql109.epizy.com", 
			"epiz_27262790", "XxyEv5l0FHbKHIh", "epiz_27262790_chat_app"); 

// Check connection 
if($link === false){ 
	die("ERROR: Could not connect. "
		. mysqli_connect_error()); 
} 

// Escape user inputs for security 
$un= mysqli_real_escape_string( 
	$link, $_REQUEST['uname']); 
$m = mysqli_real_escape_string( 
	$link, $_REQUEST['msg']); 
date_default_timezone_set('Asia/Kolkata'); 
$ts=date('y-m-d h:ia'); 

// Attempt insert query execution 
$sql = "INSERT INTO chats (uname, msg, dt) 
		VALUES ('$un', '$m', '$ts')"; 
if(mysqli_query($link, $sql)){ 
	; 
} else{ 
	echo "ERROR: Message not sent!!!"; 
} 
// Close connection 
mysqli_close($link); 
} 
?> 
<html> 
<head> 
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

<style> 
*{ 
	box-sizing:border-box; 
} 
body{ 
	background: linear-gradient(-45deg, #5094d4, #264199, #170c4f, #751c46);
	background-size: 400% 400%;
	animation: gradient 15s ease infinite;
}

@keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
    
	font-family: 'Roboto', sans-serif;
} 
#container{ 
  box-shadow: 5px 10px 8px #040324;
	width:500px; 
	height:600px; 
	margin:0 auto; 
	font-size:0; 
	border-radius:50px; 
	overflow:hidden; 
} 
main{ 
	width:500px; 
	height:700px; 
	display:inline-block; 
	font-size:15px; 
	vertical-align:top; 
} 
main header{ 
	height:70px; 
	padding:15px; 
  padding-left: 50px;
	background-color:#110c45; 
} 
main header > *{ 
	display:inline-block; 
	vertical-align:top; 
} 
main header img:first-child{ 
	width:24px; 
	margin-top:8px; 
} 
main header img:last-child{ 
	width:24px; 
	margin-top:8px; 
} 
main header div{ 
	margin-left:90px; 
	margin-right:90px; 
} 
main header h2{ 
	font-size:27px; 
	margin-top:5px; 
	text-align:center; 
	color:#FFFFFF; 
} 
main .inner_div{ 
	padding-left:0; 
	margin:0; 
	list-style-type:none; 
	position:relative; 
	overflow:auto; 
	height:450px; 
  
background-color: #3430ff;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25'%3E%3Cdefs%3E%3ClinearGradient id='a' gradientUnits='userSpaceOnUse' x1='0' x2='0' y1='0' y2='100%25' gradientTransform='rotate(240)'%3E%3Cstop offset='0' stop-color='%233430ff'/%3E%3Cstop offset='1' stop-color='%23710fff'/%3E%3C/linearGradient%3E%3Cpattern patternUnits='userSpaceOnUse' id='b' width='540' height='450' x='0' y='0' viewBox='0 0 1080 900'%3E%3Cg fill-opacity='0.1'%3E%3Cpolygon fill='%23444' points='90 150 0 300 180 300'/%3E%3Cpolygon points='90 150 180 0 0 0'/%3E%3Cpolygon fill='%23AAA' points='270 150 360 0 180 0'/%3E%3Cpolygon fill='%23DDD' points='450 150 360 300 540 300'/%3E%3Cpolygon fill='%23999' points='450 150 540 0 360 0'/%3E%3Cpolygon points='630 150 540 300 720 300'/%3E%3Cpolygon fill='%23DDD' points='630 150 720 0 540 0'/%3E%3Cpolygon fill='%23444' points='810 150 720 300 900 300'/%3E%3Cpolygon fill='%23FFF' points='810 150 900 0 720 0'/%3E%3Cpolygon fill='%23DDD' points='990 150 900 300 1080 300'/%3E%3Cpolygon fill='%23444' points='990 150 1080 0 900 0'/%3E%3Cpolygon fill='%23DDD' points='90 450 0 600 180 600'/%3E%3Cpolygon points='90 450 180 300 0 300'/%3E%3Cpolygon fill='%23666' points='270 450 180 600 360 600'/%3E%3Cpolygon fill='%23AAA' points='270 450 360 300 180 300'/%3E%3Cpolygon fill='%23DDD' points='450 450 360 600 540 600'/%3E%3Cpolygon fill='%23999' points='450 450 540 300 360 300'/%3E%3Cpolygon fill='%23999' points='630 450 540 600 720 600'/%3E%3Cpolygon fill='%23FFF' points='630 450 720 300 540 300'/%3E%3Cpolygon points='810 450 720 600 900 600'/%3E%3Cpolygon fill='%23DDD' points='810 450 900 300 720 300'/%3E%3Cpolygon fill='%23AAA' points='990 450 900 600 1080 600'/%3E%3Cpolygon fill='%23444' points='990 450 1080 300 900 300'/%3E%3Cpolygon fill='%23222' points='90 750 0 900 180 900'/%3E%3Cpolygon points='270 750 180 900 360 900'/%3E%3Cpolygon fill='%23DDD' points='270 750 360 600 180 600'/%3E%3Cpolygon points='450 750 540 600 360 600'/%3E%3Cpolygon points='630 750 540 900 720 900'/%3E%3Cpolygon fill='%23444' points='630 750 720 600 540 600'/%3E%3Cpolygon fill='%23AAA' points='810 750 720 900 900 900'/%3E%3Cpolygon fill='%23666' points='810 750 900 600 720 600'/%3E%3Cpolygon fill='%23999' points='990 750 900 900 1080 900'/%3E%3Cpolygon fill='%23999' points='180 0 90 150 270 150'/%3E%3Cpolygon fill='%23444' points='360 0 270 150 450 150'/%3E%3Cpolygon fill='%23FFF' points='540 0 450 150 630 150'/%3E%3Cpolygon points='900 0 810 150 990 150'/%3E%3Cpolygon fill='%23222' points='0 300 -90 450 90 450'/%3E%3Cpolygon fill='%23FFF' points='0 300 90 150 -90 150'/%3E%3Cpolygon fill='%23FFF' points='180 300 90 450 270 450'/%3E%3Cpolygon fill='%23666' points='180 300 270 150 90 150'/%3E%3Cpolygon fill='%23222' points='360 300 270 450 450 450'/%3E%3Cpolygon fill='%23FFF' points='360 300 450 150 270 150'/%3E%3Cpolygon fill='%23444' points='540 300 450 450 630 450'/%3E%3Cpolygon fill='%23222' points='540 300 630 150 450 150'/%3E%3Cpolygon fill='%23AAA' points='720 300 630 450 810 450'/%3E%3Cpolygon fill='%23666' points='720 300 810 150 630 150'/%3E%3Cpolygon fill='%23FFF' points='900 300 810 450 990 450'/%3E%3Cpolygon fill='%23999' points='900 300 990 150 810 150'/%3E%3Cpolygon points='0 600 -90 750 90 750'/%3E%3Cpolygon fill='%23666' points='0 600 90 450 -90 450'/%3E%3Cpolygon fill='%23AAA' points='180 600 90 750 270 750'/%3E%3Cpolygon fill='%23444' points='180 600 270 450 90 450'/%3E%3Cpolygon fill='%23444' points='360 600 270 750 450 750'/%3E%3Cpolygon fill='%23999' points='360 600 450 450 270 450'/%3E%3Cpolygon fill='%23666' points='540 600 630 450 450 450'/%3E%3Cpolygon fill='%23222' points='720 600 630 750 810 750'/%3E%3Cpolygon fill='%23FFF' points='900 600 810 750 990 750'/%3E%3Cpolygon fill='%23222' points='900 600 990 450 810 450'/%3E%3Cpolygon fill='%23DDD' points='0 900 90 750 -90 750'/%3E%3Cpolygon fill='%23444' points='180 900 270 750 90 750'/%3E%3Cpolygon fill='%23FFF' points='360 900 450 750 270 750'/%3E%3Cpolygon fill='%23AAA' points='540 900 630 750 450 750'/%3E%3Cpolygon fill='%23FFF' points='720 900 810 750 630 750'/%3E%3Cpolygon fill='%23222' points='900 900 990 750 810 750'/%3E%3Cpolygon fill='%23222' points='1080 300 990 450 1170 450'/%3E%3Cpolygon fill='%23FFF' points='1080 300 1170 150 990 150'/%3E%3Cpolygon points='1080 600 990 750 1170 750'/%3E%3Cpolygon fill='%23666' points='1080 600 1170 450 990 450'/%3E%3Cpolygon fill='%23DDD' points='1080 900 1170 750 990 750'/%3E%3C/g%3E%3C/pattern%3E%3C/defs%3E%3Crect x='0' y='0' fill='url(%23a)' width='100%25' height='100%25'/%3E%3Crect x='0' y='0' fill='url(%23b)' width='100%25' height='100%25'/%3E%3C/svg%3E");
background-attachment: fixed;
background-size: cover;
  
	position: relative; 
	
} 
main .triangle{ 
	width: 0; 
	height: 0; 
	border-style: solid; 
	border-width: 0 8px 8px 8px; 
	border-color: transparent transparent 
	#ffffff transparent; 
	margin-left:20px; 
	clear:both; 
} 
main .message{ 
	padding:10px; 
	color:#000; 
	margin-left:15px; 
	background-color:#ffffff; 
	line-height:20px; 
	max-width:90%; 
	display:inline-block; 
	text-align:left; 
	border-radius:5px; 
	clear:both; 
} 
main .triangle1{ 
	width: 0; 
	height: 0; 
	border-style: solid; 
	border-width: 0 8px 8px 8px; 
	border-color: transparent 
	transparent #6fbced transparent; 
	margin-right:20px; 
	float:right; 
	clear:both; 
} 
main .message1{ 
	padding:10px; 
	color:#000; 
	margin-right:15px; 
	background-color:#6fbced; 
	line-height:20px; 
	max-width:90%; 
	display:inline-block; 
	text-align:left; 
	border-radius:5px; 
	float:right; 
	clear:both; 
} 

main footer{ 
	height:80px; 
	padding:10px 10px; 
	background-color:#110c45; 
} 
main footer .input1{ 
	resize:none; 
	border:none; 
	display:block; 
	width:120%; 
	height:40px; 
	border-radius:20px; 
	padding:20px; 
	font-size:13px; 
	margin-bottom:13px; 
}
  
main footer textarea{ 
	resize:none; 
	border:100%; 
	display:block; 
	width:140%; 
	height:35px; 
	border-radius:5px; 
	padding:20px; 
	font-size:13px; 
	margin-bottom:13px; 
	margin-left:20px; 
} 
main footer .input2{ 
	resize:none; 
	border:100%; 
	display:block; 
	width:40%; 
	height:45px; 
	border-radius:20px; 
	padding:10px; 
	font-size:13px; 
	margin-bottom:13px; 
	margin-left:100px; 
	color:white; 
	text-align:center; 
	background-color:#110c45;  
	border: 2px solid white; 
} 
} 
main footer textarea::placeholder{ 
	color:#939399; 
} 

</style> 
<body onload="show_func()"> 

<div id="container"> 
	<main> 
		<header> 
			<div> 
				<h2>Feedback Chatbox</h2> 
			</div> 
		</header> 

<script> 
function show_func(){ 

var element = document.getElementById("chathist"); 
	element.scrollTop = element.scrollHeight; 

} 
</script> 

<form id="myform" action="msg.php" method="POST" > 
<div class="inner_div" id="chathist"> 
<?php 
$host = "sql109.epizy.com"; 
$user = "epiz_27262790"; 
$pass = "XxyEv5l0FHbKHIh"; 
$db_name = "epiz_27262790_chat_app"; 
$con = new mysqli($host, $user, $pass, $db_name); 

$query = "SELECT * FROM chats"; 
$run = $con->query($query); 
$i=0; 

while($row = $run->fetch_array()) : 
if($i==0){ 
$i=5; 
$first=$row; 
?> 
<div id="triangle1" class="triangle1"></div> 
<div id="message1" class="message1"> 
<span style="color:white;float:right;"> 
<?php echo $row['msg']; ?></span> <br/> 
<div> 
<span style="color:white;float:left; 
font-size:10px;clear:both;"> 
	<?php echo $row['uname']; ?>, 
		<?php echo $row['dt']; ?> 
</span> 
</div> 
</div> 
<br/><br/> 
<?php 
} 
else
{ 
if($row['uname']!=$first['uname']) 
{ 
?> 
<div id="triangle" class="triangle"></div> 
<div id="message" class="message"> 
<span style="color:black;float:left;"> 
<?php echo $row['msg']; ?> 
</span> <br/> 
<div> 
<span style="color:black;float:right; 
		font-size:10px;clear:both;"> 
<?php echo $row['uname']; ?>, 
		<?php echo $row['dt']; ?> 
</span> 
</div> 
</div> 
<br/><br/> 
<?php 
} 
else
{ 
?> 
<div id="triangle1" class="triangle1"></div> 
<div id="message1" class="message1"> 
<span style="color:white;float:right;"> 
<?php echo $row['msg']; ?> 
</span> <br/> 
<div> 
<span style="color:black;float:left; 
		font-size:10px;clear:both;"> 
<?php echo $row['uname']; ?>, 
	<?php echo $row['dt']; ?> 
</span> 
</div> 
</div> 
<br/><br/> 
<?php 
} 
} 
endwhile; 
?> 
</div> 
	<footer> 
		<table> 
		<tr> 
		<th> 
			<input class="input1" type="text"
					id="uname" name="uname"
					placeholder="From"> 
		</th> 
		<th> 
			<textarea id="msg" name="msg"
				rows='3' cols='50'
				placeholder="Type your message"> 
			</textarea></th> 
		<th> 
			<input class="input2" type="submit"
			id="submit" name="submit" value="send"> 
		</th>				 
		</tr> 
		</table>				 
	</footer> 
</form> 
</main>	 
</div> 

</body> 
</html> 