<?php 
	include 'randomkode.php';
	include 'koneksi.php';  
?>


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

<br>
<a href="datakode.php"><button>Lihat Data Kode!</button></a>

</body>
</html>

<?php

if(isset($_POST['input'])) {
    
    $kode = $hasil_1;
    $query = "INSERT INTO randomkode (randomkode) VALUES('$kode')";
    mysqli_query($sql, $query);
   }
else if(isset($_POST['datakode'])) {

}
?>