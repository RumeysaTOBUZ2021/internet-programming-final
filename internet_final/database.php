<?php
	$text = $_POST['text'];
	$email = $_POST['email'];
	$subjectDropdown = $_POST['subjectDropdown'];
	$message = $_POST['message'];

/*try {
  $conn = new PDO("mysql:host=127.0.0.1;dbname=iletisimform;charset=utf8", 'root', 'secret');
}catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  die();
}
$conn
	->prepare("INSERT INTO mesajlar(text, email, subjectDropdown, message) VALUES (?, ?, ?, ?)")
	->execute([$text, $email, $subjectDropdown, $message]);*/

  $conn = new mysqli('localhost','root','secret','iletisimform');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt =$conn->prepare("INSERT INTO mesajlar('text','email','subjectDropdown','message') VALUES(?, ?, ?, ?)")
		$stmt->->bind_param("ssbs", $text, $email, $subjectDropdown, $message)
		$execval = $stmt->execute();
		echo $execval;
		$stmt->close();
		$conn->close();
	}
?>