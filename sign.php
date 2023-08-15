<?php session_start();
if(!isset($_SESSION['id'])){
	echo '<script>windows: location="env.html"</script>';

	
	}
		
?>
<?php
//session_start();
include 'db.php';
if(isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
    $email=$_POST['email'];
	$repassword = $_POST['repassword'];
    if($password!=$repassword){
        header('Location: error1.html');
        exit;}
    $result2 = mysqli_query($conn,"SELECT username FROM users where username='$username'");
    $row2= mysqli_fetch_column($result2);
    if($row2==$username){
        header('Location: error2.html');
        exit;}
        
	$result = mysqli_query($conn,"SELECT MAX(user_id) FROM users");
	$row = mysqli_fetch_column($result);
	$uid=$row+1111;
	$use=$username;
	$pass=$password;
    mysqli_query($conn,"INSERT INTO users values ('$uid','$use','$pass','$email')");
    header('Location: login.html');
	/*if($username == $use && $password == $pass) {
		$_SESSION['username'] = $username;
		$_SESSION['uid'] = $uid;
		header('Location: account.php');
		exit;
	} else {
		echo '<p>Invalid username or password. Please try again.</p>';
	}*/

}
?>





