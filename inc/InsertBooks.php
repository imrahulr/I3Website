<!DOCTYPE HTML>
<html>
<head>
<style>
body{
  background-image: url("https://thumbs.dreamstime.com/z/library-books-background-isolated-white-33423844.jpg");
  background-size: 1920px 1080px;
}

</style>
</head>
<body >
<center><h2>Simple Library Management System</h2></center>
<br>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "books";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
$sec=$_POST["sec"];
$title=$_POST["title"];
$author=$_POST["author"];
$edition=$_POST["edition"];
$publication=$_POST["publication"];
$status=$_POST["status"];

$query = " INSERT INTO  book_info (Section,title,author,edition,publication,status) values ('$sec','$title','$author','$edition','$publication','$status')";
if (mysqli_query($conn,$query))
{
    echo "New record created successfully";
} else
{
    echo "Error: " . $query . "<br>" . mysql_error($conn);
}
?>

</body>
</html>
