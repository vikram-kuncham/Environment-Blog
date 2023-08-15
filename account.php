
<?php session_start();
//session_start();
include 'db.php';
if(!isset($_SESSION['id'])){
	//echo '<script>windows: location="env.html"</script>';

	
	}
		
?>
<!DOCTYPE html>
<html>
<head>
	<title>Environment Blog</title>
</head>
<body>
	<header>
        <style>

        body {
            /*background-image: url("https://i.pinimg.com/564x/f8/f1/80/f8f18021b4706fc0de8b5ed1f450d1fd.jpg");
            background-repeat: no-repeat;
            background-size: cover;*/

            }
        
            .image-container {
                text-align: left;
                display: inline;
                float: left; /* Float the image to the left */
                margin: 0 10px 10px 0; 
            }

            .image-container img {
                display: inline-block;
                max-width: 250px;
                max-height:250px;
                height: auto;
                /*vertical-align: top;
                margin-right: 20px;*/
            }

            /*.image-container:hover {
                transform: scale(1.2);
            }*/

        header {
            background-color: #090840;
            color: #fff;
            padding: 2px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-family:cursive;
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
          
          h1 {
            font-size: 40px;
            margin: 0;
            font-family:cursive;
            text-align: center;
            font-weight: 100;
          }

          h3 {
            font-size: 20px;
            margin: 0;
            font-family:cursive;
            text-align: left;
            font-weight: 100;
            background-color: rgba(105, 104, 104,0.5);
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

          ul {
            margin: 0;
            padding: 0;
            list-style: none;
            display: flex;
            font-style: italic;
          }
          
          li {
            margin: 0 10px;
            background-color: #090840s;
            color: white;
            font-size:30px;
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

          p {
            font-size: 20px;
            line-height: 1.5;
            margin: 1em 0;
            text-align: justify;
            padding: 0.5cm;
            
            
            }
        
            article {background-color: rgba(105, 104, 104,0.5);
                    color: white;
            }

            p:first-of-type {
             margin-top: 0;
            }

            p:last-of-type {
                 margin-bottom: 0;
            }

            p  {
                 color:black;
                text-decoration: none;
                font-style: italic;
                }

            p:hover {
                 text-decoration: underline;
            }
        </style>
		<h1>Environment Blog</h1>
		<nav>
			<ul>
				<li><a href="env.html">Home</a></li>
				<li><a href="login.html">Your Blogs</a></li>
        <li><a href="sign.html">Sign Up</a></li>
				<li><a href="search.html">Search</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</nav>
	</header>
        </br>
    <?php
//session_start();
include 'db.php';

	$username = $_SESSION['username'];
    $_SESSION['username']=$username ;
    $uid = $_SESSION['uid'];
    $result = mysqli_query($conn,"SELECT * FROM articles where user_id= '$uid'");

?>
<h1><?php echo 'welcome ', $username; ?> </h1>
            <div>
			<ul>
				<li><a href="write2.php">Write Blog</a></li>
			</ul></div>
<?php
//session_start();
include 'db.php';
    while($row = mysqli_fetch_array($result))
  {
    $content = $row[3];
    $title = $row[2];
    $im = 0;
    if ($row[4]) {
        $img = $row[4];
        $base64Data = base64_encode($img);
        $src = 'data:image/jpeg;base64,' . $base64Data;
        $im = 1;
    }?>
    </br>
    <h3><?php echo $title; ?></h3>
    </br>
    <?php
    if ($im) {
        echo "<div class=image-container>";
        echo "<img src=".$src." alt=''/>";
        echo "</br>";
        echo "</div>";
    }?>
    <h3><?php echo $content; ?></h3>
    <?php
  }

?>
</br>

	<footer style="bottom:0px;">
		<p class="foot">&copy; 2023 Environment Blog. All rights reserved.</p>
	</footer>
</body>
</html>