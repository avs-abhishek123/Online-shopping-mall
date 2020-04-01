<?php
require 'connect.php';
if(isset($_POST) & !empty($_POST)){
	$Username =$connection->real_escape_string($_POST['Username']);
	$Email address = $connection->real_escape_string($_POST['Email address']);
        $Phone number =$connection->real_escape_string($_POST['Phone number']);
        $Password =$connection->real_escape_string($_POST['Password']);
        $Confirm password =$connection->real_escape_string($_POST['Confirm password']);
    

 $sql = "INSERT into login (username ,email ,psw) VALUES ('$username', '$email','$psw')";	
	
	$result = $connection->query($sql);
	
	if(!$result)
	{
die("couldn't enter data: ".$connection->error);
echo  "User Registration Failed";} 
	
	echo "User Registration Successful";
	header("Location:item1.html");
	$connection->close();
}

?>
