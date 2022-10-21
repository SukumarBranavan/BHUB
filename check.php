<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>BHUB.LK</title>
</head>

<body>
<?php
include("connect.php");
$_id=$_GET["id"];
$name="";
$id="";
$sql="SELECT * from user where user_id='$_id'";
  $result = $conn->query($sql);
		  if ($result->num_rows > 0) {			  
  		 $row = $result->fetch_assoc();
			 $name=$row["name"];
			 $id=$row["id"];		 
		  }
 ?>
<h1 align="center"><b>BHUB.LK</b></h1>
<h2 align="center"><b>Reset Password</b></h2>
<h3 align="center"><b>Wellcome to <?php echo $name; ?></b></h3>
<h3 align="center">
<form action="resetSave.php" method="post">
<input type="text" name="id" value="<?php echo $_id ?>" hidden="">
New Password:<input type="password" name="pass"><br><br>
Con Password:<input type="password" name="conform"><br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="submit">Submit</button>
</form>
</h3>
</body>
</html>