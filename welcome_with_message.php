<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?><br>
Your phone number is: <?php echo $_POST["phone"]; ?><br>
Your message is: <?php echo $_POST["message"]; ?><br>
<br>
<br>

</body>
</html>

<?php

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];

$hostname="Localhost";
$username="enigmadesigns";
$password="nvku6Mbn";
$dbname="DougWebsiteDatabase";


// Create connection
$conn = mysqli_connect($hostname, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else{

	echo "Enter kind sir";
}

$sql = "INSERT INTO contactformtable (name, email, phone, message)
VALUES ('$name', '$email', '$phone', '$message')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


//Close Connection
mysqli_close($conn);
?>