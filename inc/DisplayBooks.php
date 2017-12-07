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
<body>
<center><h2>Simple Library Management System</h2></center>
<br>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="books";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
$search = $_POST["search"];

$result = mysqli_query($conn,"SELECT Sl_no,Section,Title,Author,Edition,Publication,status from book_info where Title like '%$search%'");

if(mysqli_num_rows($result)>0)
      {
?>
        <table border="2" align="center" cellpadding="5" cellspacing="5">
          <tr>
            <th> sl.no </th>
            <th> section </th>
            <th> Title </th>
            <th> Author </th>
            <th> Edition </th>
            <th> Publication </th>
            <th> status </th>

          </tr>
<?php
           while($row = mysqli_fetch_assoc($result))
            {
?>
              <tr>
              <td><a href="mailto:harshal1908.hr@gmail.com?subject=Issue%20of%20Books&body=<?php echo $row["Section"]?>%20<?php echo $row["Title"]?>%20<?php echo $row["Author"]?>%20<?php echo $row["Edition"]?>%20<?php echo $row["Publication"]?>%20<?php echo $row["status"]?>"<?php echo $row["Sl_no"];?></a> </td>
              <td><?php echo $row["Section"];?> </td>
              <td><?php echo $row["Title"];?> </td>
              <td><?php echo $row["Author"];?> </td>
              <td><?php echo $row["Edition"];?> </td>
              <td><?php echo $row["Publication"];?> </td>
              <td><?php echo $row["status"];?> </td>

              </tr>
<?php
           }
      }
else
echo "<center>No books found in the library by the name $search </center>" ;
?>
</table>
<h3> For Issue Of Books</h3>
<h4>Please Click The Link Highlightted</h4>


</body>
</html>
