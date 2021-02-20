<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>

<script>
function myFunction() {
    <?php
        /* Attempt MySQL server connection. Assuming you are running MySQL
        server with default setting (user 'root' with no password) 
        $link = mysqli_connect("localhost", "root", "", "retail_supermarket_db");
        
        // Check connection
        if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        // Attempt insert query execution
        $sql = "INSERT INTO item (id, nama_item, deskripsi, harga_jual, harga_beli) VALUES (0,'asd','contoh', 2000.0, 3000.0)";
        if(mysqli_query($link, $sql)){
            echo "Records added successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
        
        // Close connection
        mysqli_close($link);*/
        //Refresh the page
    ?>
}
</script>

<h1>Retail Supermarket</h1>

<form action="create.php" method="" enctype="multipart/form-data">
<input type="submit" value="Create" name="submit">
</form>

<p id="demo">The tr element defines a row in a table:</p>

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

$sql = "SELECT * FROM item";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>Nama</th><th>Deskripsi</th><th>Harga Jual</th><th>Harga Beli</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>".$row["id"]."</td>
        <td>".$row["nama_item"]."</td>
        <td>".$row["deskripsi"]."</td>
        <td>".$row["harga_jual"]."</td>
        <td>".$row["harga_beli"]."</td>
        <td><a href='update.php?id=".$row["id"]."'>Edit</a></td>
        <td><a href='delete.php?id=".$row["id"]."'>Delete</a></td>
    </tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?> 


</body>



</html>