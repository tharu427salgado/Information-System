<?php 
    $db_name = "grama_niladhari";
    $username = "root";
    $password = "";
    $servername = "127.0.0.1";
    $con = mysqli_connect($servername,$username,$password,$db_name);
    
if (isset($_POST['submit'])) {
    $User_Name = $_POST["username"];
    $Email = $_POST["email"];
    $Password =$_POST["password"];

    $sql = "INSERT INTO register_user(User_Name,Email,Password) VALUES('$User_Name','$Email','$Password')";
    $result = mysqli_query($con,$sql);
    
    if($result) {
        echo "registered successfully";
    }
    else {
        echo "some error occured";
    }
}
?>