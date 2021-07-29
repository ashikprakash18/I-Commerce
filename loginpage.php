<?php include('server.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="loginstyle.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <style>
      body, html {
        font-family: Arial, Helvetica, sans-serif;
         width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        display:table;
      }
      body {
        width: auto;
        display:table-cell;
        vertical-align:middle;
        background-image: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }
    form {
        display:table;/* shrinks to fit conntent */
        margin:auto;
      width: 450px;
    }

      * {
        box-sizing: border-box;
      }

      /* style the container */
      .container {
        position: relative;
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px 0 30px 0;
      }

      /* style inputs and link buttons */
      input,
      .btn {
        width: 100%;
        padding: 12px;
        border: none;
         border-radius:50px;
        margin: 5px 0;
        opacity: 0.85;
        display: inline-block;
        font-size: 17px;
        line-height: 20px;
        text-decoration: none; /* remove underline from anchors */
      }

      input:hover,
      .btn:hover {
        opacity: 1;
      }

      /* style the submit button */
      input[type="submit"] {
        background-color: #4c66af;
        color: white;
        cursor: pointer;
         border-radius:50px;
      }

      input[type="submit"]:hover {
        background-color: #4a45a0;
      }
      /* input[type="text"]:hover{
         border-bottom: 1px solid blue;
      } */
      /* Clear floats after the columns */
      .row:after {
        content: "";
        display: table;
        clear: both;
      }

      /* vertical line */
      .vl {
        position: absolute;
        left: 50%;
        transform: translate(-50%);
        border: 2px solid #ddd;
        height: 175px;
      }

      /* text inside the vertical line */
      .vl-innertext {
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%);
        background-color: #f1f1f1;
        border: 1px solid #ccc;
        border-radius: 60%;
        padding: 8px 10px;
      }

      /* hide some text on medium and large screens */
      .hide-md-lg {
        display: none;
      }

      /* bottom container */
      .bottom-container {
        text-align: center;
        background-color: #4c5caf;
        border-radius: 25px 25px 25px 25px;
        
      }
      .content {perspective: 1000px;
        max-width: 500px;
        margin: auto;
        background: white;
        padding: 10px;
        box-shadow: 5px 10px 18px #141040;
        border-radius: 25px;
      }
      /* Responsiveness */
      @media screen and (max-width: 650px) {
        .col {
          width: 100%;
          margin-top: 0;
        }
        
        @media (max-width: 1024px){
          .content{
            width: 100%;
          margin-top: 0;
           
          }
}
/*responsiveness*/
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}.row{
            border-radius: 50px;
        }
        /* hide the vertical line */
        .vl {
          display: none;
        }
        .btn{
           border-radius:100px;
        }
        /* show the hidden text on small screens */
        .hide-md-lg {
          display: block;
          text-align: center;
        }
      }
      .showpwdtxt, .showpwdbox{
        float:left;
        
      }
      .showpwdtxt{
        width: 90%;padding-bottom:4px; padding-top:5px;color:#858383;
      }
      .showpwdbox{
       width: 10%; padding-top:15px;
        padding-bottom:5px;
      }
    </style>
  </head>
  
  <body>

	<div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="loginpage.php" method = "post" class="sign-in-form">
            <h2 class="title">Login</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Username" required />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password1" placeholder="Password" required/>
            </div>
            <input type="submit" value="Login" class="btn solid" name="login" />
            
          </form>

	</div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
         <!--  <div class="content">
            <h3>I-commerce</h3>
            <p>
              New to i-commerce ?
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>-->
          <img src="img/login.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <!-- <div class="content">
            <h3>I-commerce</h3>
            <p>
              Already have an account ?
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>-->
          <img src="img/log.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  

    <!-- 
	<div class="content">
      
	<fieldset style="border-radius: 15px; color: #141040;">
      <legend style="font-size: 15px; color: #141040;">Login</legend>
          <div class="container">
      <form action="loginpage.php" method = "post">
	<?php include('errors.php'); ?> 
        <div class="row">
          <h2 style="text-align: center; font-style:italic; color: #060061; font-size:45px; font-family: 'Playfair Display', serif;   background: -webkit-linear-gradient(#0d1773, #2936a6);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;">Icommerce</h2>
          
          <div class="col">
            <input style="border: none;"
              type="text"
              name="username"
              placeholder="Username"
              required
            />
            <input style="border: none;"
              type="password"
              name="password1"  id="password"
              placeholder="Password"
              required
            />
            
            <div>
              <input class="showpwdbox" type="checkbox" id="showpwd" name="showpwd">
  <label class="showpwdtxt" for="showpwd"> Show Password</label><br>
            </div>

            <input type="submit" name="login" value="Login" />
          </div>
        </div>
      </form>
    </div>

    <div class="bottom-container">
      <div class="row">
        <div class="col">
          <a href="signupage.php" style="color: white;" class="btn">Sign up</a>
        </div>
        <div class="col">
          <button style="color: white;background-color: #4c5caf;" onclick="myFunction()" class="btn">Forgot password?</button>
        </div>
      </div>
    </div>
        <div style="font-size: 20px; float:left;" id="fgtpwd">
        <p style="text-align:center;padding-left: 10px;">You will receive an email to reset your password</p>
          <input style="width:95%;"
              type="email"
              name="email"
              placeholder="Email"
              required
            />
 <a href="fgtpwd.php"  style="width:5%; float:right;padding-left:10px;padding-top:18px;text-decoration:none;" class="fa fa-send-o"></a>
        </div>
    </fieldset>
    </div>
      -->  
    <script>
function showPassword() {
  var x = document.getElementById("showpwd");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
function myFunction() {
  var x = document.getElementById("fgtpwd");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
    
  </body>
</html>