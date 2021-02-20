<html>
<head>

</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "retail_supermarket_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id']; // get id through query string

$del = mysqli_query($conn,"delete from item where id = '$id'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:index.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>


</body>



</html>