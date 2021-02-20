<html>
<head>

</head>
<body>

<title>Add Record Form</title>
</head>
<body>

<script>
function myFunction() {
  <?php
      /* Attempt MySQL server connection. Assuming you are running MySQL
      server with default setting (user 'root' with no password) */
      $link = mysqli_connect("localhost", "root", "", "retail_supermarket_db");
      
      // Check connection
      if($link === false){
          die("ERROR: Could not connect. " . mysqli_connect_error());
      }

      // Escape user inputs for security
      $nama_item = mysqli_real_escape_string($link, $_REQUEST['nama_item']);
      $deskripsi = mysqli_real_escape_string($link, $_REQUEST['deskripsi']);
      $harga_jual = mysqli_real_escape_string($link, $_REQUEST['harga_jual']);
      $harga_beli = mysqli_real_escape_string($link, $_REQUEST['harga_beli']);

      // Attempt insert query execution
      $sql = "INSERT INTO item (id, nama_item, deskripsi, harga_jual, harga_beli) VALUES (0,'$nama_item','$deskripsi', $harga_jual, $harga_beli)";
      if(mysqli_query($link, $sql)){
          echo "Records added successfully.";
      } else{
          echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
      }
      
      // Close connection
      mysqli_close($link);
      //Move the page,after done submit
      //header("location:index.php"); // redirects to all records page
      //exit;	

  ?>
}
</script>



<form action="create.php" method="post">
    <p>
        <label for="nama_item">Nama Item:</label>
        <input type="text" name="nama_item" id="nama_item">
    </p>
    <p>
        <label for="deskripsi">Deskripsi:</label>
        <input type="text" name="deskripsi" id="deskripsi">
    </p>
    <p>
        <label for="harga_jual">Harga Jual:</label>
        <input type="text" name="harga_jual" id="harga_jual">
    </p>
    <p>
        <label for="harga_beli">Harga Beli:</label>
        <input type="text" name="harga_beli" id="harga_beli">
    </p>
    <input type="submit" value="Submit">
</form>


</body>



</html>