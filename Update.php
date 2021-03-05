<?php
$servername = "localhost";
$username = "20mca030";
$password = "2544";
$dbname = "20mca030";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
die("Connection failed; " . mysqli_connect_error());
}
$sql = "UPDATE Student1 SET Mark='81' WHERE ID='03'";
if (mysqli_query($conn, $sql)) {
echo "Record updated successfully";
} else {
echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>