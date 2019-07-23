<?php 
if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$password=$_POST['password']; 


	$conn= mysqli_connect('localhost','root','','user');

	

	if ($conn) {
		echo "we are connected";

		}
		else{
			die("Database connected failed");
		}


$query="INSERT INTO test(username,password)";

$query .="VALUES  ('$username','$password')";

$result= mysqli_query($conn, $query); 

if(!$result){
	die('Quary Failed' .mysqli_error());
}


}


else{
	header("Location:login.php");
}

