<?php include('server.php') ?> 
<!DOCTYPE html> 
<html>
  <head>
        <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="loginstyle.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,700&display=swap" rel="stylesheet">
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
	background-image: linear-gradient(120deg, #4CA9DF 0%, #292E91 100%);
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
        border-radius: 4px;
        margin: 5px 0;
        opacity: 0.85;
        display: inline-block;
        font-size: 17px;
        line-height: 20px;
        text-decoration: none; /* remove underline from anchors */
      }

      input:hover,
      .btn:hover {
        opacity: 9;
      }

      /* style the submit button */
      input[type="submit"] {
        background-color: #4c66af;
        color: white;
        cursor: pointer;
      }

      input[type="submit"]:hover {
        background-color: #4a45a0;
      }
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
      .firstname, .lastname{/*adding two input flied side by side*/
        float: left;
        width: 50%;
      }
      .firstname{
        padding-right: 12px;
      }
      
      /* hide some text on medium and large screens */
      .hide-md-lg {
        display: none;
      }
      /* bottom container */
      .bottom-container {
        text-align: center;
        background-color: #4c5caf;
        border-radius: 0px 0px 4px 4px;
      }
      .content {
        max-width: 500px;
        margin: auto;
        background: white;
        padding: 10px;
      }
      /* Responsiveness */
      @media screen and (max-width: 650px) {
        .col {
          width: 100%;
          margin-top: 0;
        }
        @media screen and (max-width: 650px){
          .form-inline input{
            margin: 10px 0;
          }
        }
        /* hide the vertical line */
        .vl {
          display: none;
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
        width: 90%;padding-bottom:4px; padding-top:4px;color:#858383;
      }
      .showpwdbox{
       width: 10%; padding-top:15px;
        padding-bottom:5px;
      }
      /*Styling for errors on form*/

.form_error input {
  border: 1px solid #D83D5A;
}

.form_success input {
  border: 1px solid green;
}
#error_msg {
  color: red;
  text-align: center;
  margin: 10px auto;
}
#register_form input {
  width: 80%;
  height: 35px;
  margin: 5px 10%;
  font-size: 1.1em;
  padding: 4px;
  font-size: .9em;
}
    </style>
  </head>
  <body>
	    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">

<form action="signupage.php" autocomplete="on" method="post" class="sign-in-form" id="register_form">
            <h2 class="title">Sign up</h2>
	    <div id="error_msg"></div>
	    <div class="input-field">
              <i class="far fa-user"></i>
              <input type="text" placeholder="Username" name="username" id="username" required />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email" id="email" required />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Firstname" name="firstname" minlength="3" maxlength="10" id="firstname" required />
            </div>
	    <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Lastname" name="lastname"  minlength="3" maxlength="10" id="lastname" required />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password1" id="password1" autocomplete="none" required />
            </div>
	    <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Repeat Password" name="password2" id="password2" autocomplete="none" required />
            </div>
            <input type="submit" class="btn" name="signin" value="Sign up" id="reg_btn" />
            
          </form>
        </div>
      </div>

      <div class="panels-container">
        
        <div class="panel left-panel">
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
  </body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="jquery-3.2.1.min.js"></script>
<script src="script.js"></script>