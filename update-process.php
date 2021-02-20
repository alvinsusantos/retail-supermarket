<?php
include_once 'database.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE item set nama_item='" . $_POST['first_name'] . "', deskripsi='" . $_POST['last_name'] . "', harga_jual='" . $_POST['city_name'] . "' , harga_beli='" . $_POST['email'] . "' WHERE id='" . $_POST['userid'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM item WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Employee Data</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="retrieve.php">Employee List</a>
</div>
Username: <br>
<input type="hidden" name="userid" class="txtField" value="<?php echo $row['id']; ?>">
<input type="text" name="userid"  value="<?php echo $row['id']; ?>">
<br>
First Name: <br>
<input type="text" name="first_name" class="txtField" value="<?php echo $row['nama_item']; ?>">
<br>
Last Name :<br>
<input type="text" name="last_name" class="txtField" value="<?php echo $row['deskripsi']; ?>">
<br>
City:<br>
<input type="text" name="city_name" class="txtField" value="<?php echo $row['harga_jual']; ?>">
<br>
Email:<br>
<input type="text" name="email" class="txtField" value="<?php echo $row['harga_beli']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>