<!DOCTYPE html>
<html>
<head>
	<title>Write Page</title>

	<!--<link rel="stylesheet" type="text/css" href="style.css">-->
    <style>
    .login-form {
		width: 400px;
		margin: 50px auto;
		padding: 20px;
		background-color: #4ae75c;
		border-radius: px;
        align-content: center;
	}
	
	.login-form h2 {
		text-align: center;
	}
	
	.login-form label {
		display: block;
		margin-bottom: 10px;
	}
	
	.login-form input[type="text"],
	.login-form input[type="password"] {
		width: 100%;
		padding: 10px;
		margin-bottom: 20px;
		border-radius: 5px;
		border: none;
	}
	
	.login-form input[type="submit"] {
		background-color: #4CAF50;
		color: rgb(6, 6, 6);
		padding: 10px;
		border: none;
		border-radius: 5px;
		cursor: pointer;
	}
	
	.login-form input[type="submit"]:hover {
		background-color: #0a0a0a;
        color: white;
	}
    body {
            background-image: url("https://png.pngtree.com/png-clipart/20201118/ourmid/pngtree-hand-drawn-earth-clipart-png-image_2458788.jpg");
            background-repeat:space;
            background-size:35%;
            }
    header {
        background-color: #090840;
        color: #fff;
        padding: 2px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-family:cursive;
       }
       h1 {
            font-size: 40px;
            margin: 0;
            font-family:cursive;
            text-align: center;
            font-weight: 100;
          }
          .foot {
            font-size: small;
            background-color: #090840;
            color: #fff;
            padding: 2px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-family:cursive;
          }
          nav ul {
            margin: 0;
            padding: 0;
            list-style: none;
            display: flex;
            font-style: italic;
          }
          
          nav li {
            margin: 0 10px;
          }
          
          nav a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            transition: all 0.3s ease;
          }
          
          nav a:hover {
            color: #f1c40f;
          }

          nav a:hover {
            color: #836d15;
          }
</style>
</head>
<?php
//session_start();
include 'db.php';
if(isset($_POST['submit'])) {
	$username = $_POST['username'];?>
<body>
    <header>
    <h1>Environment Blog</h1>
		<nav>
			<ul>
				<li><a href="env.html">Home</a></li>
				<li><a href="login.html">Your Blogs</a></li>
        <li><a href="sign.html">Sign Up</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</nav>
    </header>
	<div class="login-form">
		<h2>Enter the Credentials</h2>
		<form method="POST" action="write.php">
			<label for="title">Title:</label>
			<input type="text" name="title" required>

			<label for="content">Start Writing:</label>
			<!--<input type="textarea" name="content" required>-->
            <textarea rows="20" cols="53" name="content"> </textarea>

			<input type="submit" name="submit" value="Submit">
		</form>
	</div>
    </br>
    <footer>
		<p class="foot">&copy; 2023 Environment Blog. All rights reserved.</p>
	</footer>
</body>
</html>