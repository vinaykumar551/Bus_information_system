<?php
	$s=$_POST['feed'];
	$ds = $_POST['feed1'];
	$Name = $_POST['Name'];
	$roll = $_POST['roll'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$feed = $_POST['feedback'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','bustransport');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into feedback(service, driverservice, name,roll, email,phone,feedback) values(?, ?, ?, ?, ?,?, ?)");
		$stmt->bind_param("sssssis", $s, $ds, $Name,$roll, $email, $number,$feed);
		$execval = $stmt->execute();
		echo $execval;
		echo "<script>alert('Thank you for your feedback......!')</script>";
		$stmt->close();
		$conn->close();
		
	}
?>