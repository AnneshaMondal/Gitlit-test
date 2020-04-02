<?php
session_start(); // Starting Session
$error = ''; //varaibles to store the error message

if (isset($_POST['submit'])) {
if (empty($_post['username']) || empty($_POST['password'])) {
$error= "Username or Password is invalid";
}
else
{
// Define he $username and $password
$username = $_POST['username'];
$password = $_POST['password'];

//mysqli_connect() funciton opens a new conneciton to the MySQL server
$conn = mysqli_connect("localhost", "root", "", "company");

// SQL query to fetch information of registered users and finds user match
$query = "SELECT username, password from login where username=? AND password=? LIMIT 1";

// To protect MySQL injection for security purposes
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$stmt->bind_result($username, $password);
$stmt->store_result();

if($stmt->fetch()) // fetching the contents of the row
	{
		$_SESSION['login_user'] = $username; // Initializing Session
		header("location: profile.php"); // redirecting To Profile Page
	}
else {
		$error = "Username or Password is invalid";
	}
mysqli_close($conn); // Clossing Connection
}
}
?>
