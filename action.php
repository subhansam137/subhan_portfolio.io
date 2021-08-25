<?php
	
	if ($_SERVER['REQUEST_METHOD']=='POST') {
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
	
	$conn=new mysqli('localhost','root','','portfolio');


	if (empty($name) || empty($phone) || empty($subject) || empty($message)) {
		echo "Please fill all the fields.";

	}

	else if ($conn) {
		//echo "connection successful";
		$sql="insert into `contact`(FULLNAME,PHONE,SUBJECT,MESSAGE) values('$name','$phone','$subject','$message')";
		$result=mysqli_query($conn,$sql);
		if ($result) {
			echo "Data has been submited successfully";
		}
		else
		{
			die(mysql_error($conn));
		}
	}
	
}

?>