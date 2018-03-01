<?php
	$servername="localhost:8082";
	$username="root";
	$password="";
	$dbname="change password";
	
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	
	if(!$conn){
		die("Connection lost!");
	}
	$sql="SELECT * FROM `pass`";
	$result=mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result)){
		
	}
	else{
		echo "Connection Lost!";
	}
	mysqli_close();
	
	
?>

<form action="#" method="POST">
	<fieldset>
		<legend>CHANGE PASSWORD</legend>
		Current Password:<input type="text" name="Current Password" value="" ><br/>
		New Password:<input type="text" name="New Password" value="" ><br/>
		Retype New Password:<input type="text" name="Retype New Password" value="" ><br/>
		<hr>
		<input type="submit" name="submit" value="Submit" >
	</fieldset>
</form>