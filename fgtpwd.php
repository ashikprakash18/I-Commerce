<?php 
  $to = "coutinhoberyl7@gmail.com"; 
  $sub = "Forgot password"; 
  $msg="Click on the link below to access your account"; 
  if (mail($to,$sub,$msg)) 
      echo "Your Mail is sent successfully."; 
  else
      echo "Your Mail is not sent. Try Again."; 
?>