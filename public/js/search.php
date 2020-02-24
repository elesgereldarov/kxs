<?php
$servername = "localhost";
$username = "user1";
$password = "password";
$dbname = "kxsautocomp.movies";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
} 
$id = $_GET['q'];
$sql = "select movie_name from movies where movie_name like '%".$id."%' limit 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
 echo $row["movie_name"]. "\n";
 }
} else {
 echo "0 results";
}
$conn->close();
?>