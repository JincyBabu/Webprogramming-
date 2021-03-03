 <?php
$servername = "localhost";
$username = "20mca030";
$password = "2544";
$dbname = "20mca030";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO STUDENT (Name,Branch,Mark)
VALUES ( 'Anu', 'MCA','78');";
$sql .= "INSERT INTO STUDENT(Name,Branch,Mark)
VALUES ('Jeena','MCA','98');";
$sql .= "INSERT INTO STUDENT (Name,Branch,Mark)
VALUES ('Grace','MCA','80');";
$sql .= "INSERT INTO STUDENT (Name,Branch,Mark)
VALUES ('Rahul','MCA','56');";
$sql .= "INSERT INTO STUDENT (Name,Branch,Mark)
VALUES ('Anandhu','MCA','65');";


if (mysqli_multi_query($conn, $sql)) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 