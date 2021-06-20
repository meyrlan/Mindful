<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial scale=1.0"charset="utf-8">
    <title>Career test</title>
    <link rel="stylesheet" href="../css/addpost.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Roboto+Slab&display=swap" rel="stylesheet">
<body>
<?php
$conn = mysqli_connect("localhost", "root", "root", "mindfuledu-db");
$title = $_POST['title'];
$author = $_POST['author'];
$content = $_POST['content'];
$content = addslashes($content);
$date =  $_POST['date'];
$link = $_POST['link'];
$sql = "INSERT INTO articles (title, author, content, link)
VALUES ('$title','$author','$content','$link')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

 ?>
 <a style="color:black" href="profile.php">Go back</a>
</body>
  </html>
