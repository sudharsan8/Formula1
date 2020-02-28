<?php
//session_start();
$servername = "localhost";
$username = "root";
$password = "";


// Create connection
$conn = new mysqli($servername, $username, $password);
mysqli_select_db($conn,"official_f1");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
	echo "Connected";
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(isset($_POST['user'])){
		$name = $_POST["user"];
		$email = $_POST["email"];
		$phoneno = $_POST["mobile"];
		$gallery = $_POST["gallery"];

		$stmt = "INSERT INTO users SET 
			name = '".$name."',
			email = '".$email."',
			mobile = '".$phoneno."',
			gallery = '".$gallery."'";
		
		if(mysqli_query($conn,$stmt))
		{	
			header("Location: page7.html"); 
			//echo "EXECUTED";
			//exit();
		}else{
			echo "NOT EXCECUTED";
			echo $stmt;
		}
		

	}
	
}
else{
	echo "Nothing Found";
}
	