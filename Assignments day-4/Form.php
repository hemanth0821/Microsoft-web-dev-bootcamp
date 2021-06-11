<?php
	
	
	$name=$_POST['name'];
	$emailid=$_POST['email'];
	$subject=$_POST['phone'];

	
	$server="localhost:3306";
	$dbname="develop";
	$username="root";
	$password="";

	$sFlag=0;

	
	$conn=mysqli_connect($server,$username,$password,$dbname);
	if(!$conn) {
		echo 'Server Connection Failure';
		$sFlag=0;
	} else {
		echo 'Server Connection Authorised';
		$sFlag=1;
	}
	echo '<br/>';

	
	if($sFlag==1) {

		
		$sql="INSERT INTO contact_form (name,email_id,phone) VALUES('".$name."','".$email."','".$phone."');

		
		$a=mysqli_query($conn,$sql);

		if($a) {
			echo "data success;
		} else {
			echo $conn->error;
		}

	}

?>