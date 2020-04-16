<?php
session_start(); // Starting Session
$error = ''; //varaibles to store the error message

if (isset($_POST['Sign In'])) {
if (empty($_post['email']) || empty($_POST['password'])) {
$error= "Email or Password is invalid";
}
else
{
// Define he $username and $password
$username = $_POST['email'];
$password = $_POST['password'];
$adminkey = $_POST['adminkey']

if ($adminkey!='' && email!='' && password!=''){
	header("Location:admin.html");
}
else{
	header("Location:index.html");
}
/*
//mysqli_connect() funciton opens a new conneciton to the MySQL server
$conn = mysqli_connect("localhost", "root", "", "company");

// SQL query to fetch information of registered users and finds user match
$query = "SELECT username, password from login where username=? AND password=? AND adminkey=? LIMIT 1";

// To protect MySQL injection for security purposes
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $username, $password, $adminkey);
$stmt->execute();
$stmt->bind_result($username, $password, $adminkey);
$stmt->store_result();



if ()
if($stmt->fetch()) // fetching the contents of the row
	{
		$_SESSION['login_user'] = $username; // Initializing Session
		header("location: profile.php"); // redirecting To Profile Page
	}
else {
		$error = "Username or Password is invalid";
	}
mysqli_close($conn); // Clossing Connection
}*/
}
}
?>
