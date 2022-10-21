<?php
include("connect.php");
$id=0;
$_email=$_POST["email"];
$sql="SELECT * from user where email='$_email'";
  $result = $conn->query($sql);
		  if ($result->num_rows > 0) {			  
  		 $row = $result->fetch_assoc();
			 $name=$row["name"];
			 $id=$row["user_id"];
			 $email=$row["email"];
			 $mok=md5($email);
			 $link="http://bhub.lk/check.php?id=$id&&user=$mok";
			 $to      = $email;
$subject = 'Reset Password';
$message = $link;
$headers = 'From: bhub@reset.com' . "\r\n" .
    'Reply-To: bhub@reset.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $message, $headers)){
    
			     echo "Check Your Mail Or Spam Thank you!";
			 }
			 else{
			      echo "Sorry!"; 
			 }
		  }else{
			header('Location:resetPassword');
			 }
 ?>
<?php

?> 