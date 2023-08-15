<?php
session_start();
if (!isset($_SESSION['id'])) {
    //header('Location: env.html');
    //exit();
}

include 'db.php';
if (isset($_POST['submit'])) {
    $username = $_SESSION['username'];
    $title = $_POST['title'];
    
    $result2 = mysqli_query($conn, "SELECT user_id FROM users WHERE username='$username'");
    $row2 = mysqli_fetch_row($result2);
    $uid = $row2[0];
    
    $result = mysqli_query($conn, "SELECT MAX(slno) FROM articles");
    $row = mysqli_fetch_row($result);
    $slno1 = $row[0];
    $slno = $slno1 + 1;

    $content2 = $_POST['content'];
    $content = mysqli_real_escape_string($conn, $content2);

    mysqli_query($conn, "INSERT INTO articles (slno, user_id, Title, content) VALUES ('$slno', '$uid', '$title', '$content')");

    $imageData = file_get_contents($_FILES['image']['tmp_name']);
    $stmt = $conn->prepare("UPDATE articles SET image = ? WHERE slno = ?");
    $stmt->bind_param("bi", $imageData, $slno);
    $stmt->send_long_data(0, $imageData);
    $stmt->execute();
}

header('Location: login.html');
exit();
?>
