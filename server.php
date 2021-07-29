<?php 

// Starting the session, necessary 
// for using session variables 
session_start(); 

// Declaring and hoisting the variables 
$username = "";
$firstname = "";
$lastname = ""; 
$email    = "";
$password_1 = "";
$password_2 = ""; 
$errors = array();  
$_SESSION['success'] = ""; 

// DBMS connection code -> hostname, 
// username, password, database name 
$db = mysqli_connect('sql109.epizy.com', 'epiz_27262790', 'XxyEv5l0FHbKHIh', 'epiz_27262790_registration'); 

// Registration code 
/* if (isset($_POST['signin'])) { 

	    // Receiving the values entered and storing 
    // in the variables 
    // Data sanitization is done to prevent 
    // SQL injections 
if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['password1']) && isset($_POST['password2']) && isset($_POST['username'])){
    $firstname = mysqli_real_escape_string($db, $_POST['firstname']); 
    $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
    $email = mysqli_real_escape_string($db, $_POST['email']); 
    $password_1 = mysqli_real_escape_string($db, $_POST['password1']); 
    $password_2 = mysqli_real_escape_string($db, $_POST['password2']);
    $username = mysqli_real_escape_string($db, $_POST['username']); 
   }
    // Ensuring that the user has not left any input field blank 
    // error messages will be displayed for every blank input 
    if (empty($firstname)) { array_push($errors, "Firstname is required"); } 
    if (empty($lastname)) { array_push($errors, "Lastname is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); } 
    if (empty($password_1)) { array_push($errors, "Password is required"); } 
    if (empty($username)) { array_push($errors, "Username is required"); }
    if ($password_1 != $password_2) { 
        array_push($errors, "The two passwords do not match"); 
        // Checking if the passwords match 
    } 
   
    // If the form is error free, then register the user 
    if (count($errors) == 0) { 
         
          
        // Inserting data into table 
        $query = "INSERT INTO registrationinfo (firstname, lastname, email, password, username)  
                  VALUES('$firstname', '$lastname', '$email', '$password_1', '$username')";  
          
        mysqli_query($db, $query); 
   
        // Storing username of the logged in user, 
        // in the session variable 
        $_SESSION['username'] = $username; 
          
        // Welcome message 
        $_SESSION['success'] = "You have logged in"; 
          
        // Page on which the user will be  
        // redirected after logging in 
        header('location: homepg.php');  
    } 
} 
*/
// User login 
if (isset($_POST['login'])) { 
	
	// Data sanitization to prevent SQL injection 
	$username = mysqli_real_escape_string($db, $_POST['username']); 
	$password = mysqli_real_escape_string($db, $_POST['password1']); 

	// Error message if the input field is left blank 
	if (empty($username)) { 
		array_push($errors, "Username is required"); 
	} 
	if (empty($password)) { 
		array_push($errors, "Password is required"); 
	} 

	// Checking for the errors 
	if (count($errors) == 0) { 
		 
		
		$query = "SELECT * FROM registrationinfo WHERE username= 
				'$username' AND password='$password'"; 
		$results = mysqli_query($db, $query); 

		// $results = 1 means that one user with the 
		// entered username exists 
		if (mysqli_num_rows($results) == 1) { 
			
			// Storing username in session variable 
			$_SESSION['username'] = $username; 
			
			// Welcome message 
			$_SESSION['success'] = "You have logged in!"; 
			
			// Page on which the user is sent 
			// to after logging in 
			header('location: homepg.php'); 
		} 
		else { 
			
			// If the username and password doesn't match 
			array_push($errors, "Username or password incorrect"); 
		} 
	} 
} 
 if (isset($_POST['username_check'])) {
  	$username = $_POST['username'];
  	$sql = "SELECT * FROM registrationinfo WHERE username='$username'";
  	$results = mysqli_query($db, $sql);
  	if (mysqli_num_rows($results) > 0) {
  	  echo "taken";	
  	}else{
  	  echo 'not_taken';
  	}
  	exit();
  }
  if (isset($_POST['email_check'])) {
  	$email = $_POST['email'];
  	$sql = "SELECT * FROM registrationinfo WHERE email='$email'";
  	$results = mysqli_query($db, $sql);
  	if (mysqli_num_rows($results) > 0) {
  	  echo "taken";	
  	}else{
  	  echo 'not_taken';
  	}
  	exit();
  }
  if (isset($_POST['save'])) {
	$firstname = $_POST['firstname']; 
    	$lastname = $_POST['lastname'];
  	$email = $_POST['email'];
  	$password = $_POST['password1'];
  	$username = $_POST['username'];
  	$sql = "SELECT * FROM registrationinfo WHERE username='$username'";
  	$results = mysqli_query($db, $sql);
  	if (mysqli_num_rows($results) > 0) {
  	  echo "exists";	
  	  exit();
  	}else{
  	  $query = "INSERT INTO registrationinfo (firstname, lastname, email, password, username)  
                  VALUES('$firstname', '$lastname', '$email', '$password1', '$username')";
  	  $results = mysqli_query($db, $query);
  	  echo 'Saved!';
  	  exit();
  	}
  }


?> 
