<?php session_start();
if(!isset($_SESSION['id'])){
	//echo '<script>windows: location="env.html"</script>';

	
	}
		
?>
<?php
//session_start();
include 'db.php';
if(isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$result = mysqli_query($conn,"SELECT * FROM users where username= '$username'");
	$row = mysqli_fetch_array($result);
	$uid=$row['user_id'];
	$use=$row['username'];
	$pass=$row['password'];
	if($username == $use && $password == $pass) {
		$_SESSION['username'] = $username;
		$_SESSION['uid'] = $uid;
		header('Location: account.php');
		exit;
	} else {
		echo '<p>Invalid username or password. Please try again.</p>';
	}
}
?>





