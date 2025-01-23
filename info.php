<?php
//Retrieve the username from the POST request, set it to empty string if not provided"
$username = isset($_POST['username']) ? $_POST['username'] : '';

//Check if the username matches the string 'abc'
if ($username === 'abc'){
  echo 'Verified'; //output "Verified" if matched
}else{
  echo 'Error'; //else output "Error" 
}

?>