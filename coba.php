<?php include 'randomkode.php';  ?>

<!DOCTYPE html>
<html>
<head>
	<title>Coba Random Kode</title>

</head>
<body>


<form method = "POST">
  Kode: <?php echo $hasil_1;?>
  <br>
  <input type="submit" value="Submit" name="input">
  <input type="submit" value ="Ganti" name="ganti">
</form> 

</body>
</html>

<?php

$sql = mysqli_connect('localhost', 'root', '', 'coba') or die ("Koneksi gagal");



if(isset($_POST['input'])) {
    
    $kode = $hasil_1;
    $query = "INSERT INTO randomkode (randomkode) VALUES('$kode')";
    mysqli_query($sql, $query);
   }

?>