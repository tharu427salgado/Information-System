<?php 
	$db_name = "grama_niladhari";
	$username = "root";
	$password = "";
	$servername = "127.0.0.1";
	$con = mysqli_connect($servername,$username,$password,$db_name);
	
	if (isset($_POST['submit'])) {
		$email = $_POST["email"];
		$password = $_POST["password"];

		$sql = "SELECT * FROM user WHERE  email = '$email' AND password = '$password'";
		$result = mysqli_query($con,$sql);
		
		if($result->num_rows > 0){
			echo "logged in successfully" ;
		}
		else{
  			 echo "user not found";
		}
}
?>