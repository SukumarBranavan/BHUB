<?php
include("connect.php");
//Get the user table Data
$id=$_POST["id"];
$_pass=$_POST["pass"];
$_conform=$_POST["conform"];
if($_pass==$_conform){
   $pas=md5($_pass);
$sql = "UPDATE user SET password='$pas' WHERE user_id=$id";

if ($conn->query($sql) === TRUE) {
    header('Location:actions/logout.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else{
	echo "Please Conform Password";
	}
$conn->close();
?>
