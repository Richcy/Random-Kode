<?php 
	include 'randomkode.php';
	include 'koneksi.php';
  session_start();  
?>


<!DOCTYPE html>
<html>
<head>
	<title>Coba Random Kode</title>

</head>
<body>

<p><?php echo $_SESSION["username"];?> telah login!</p>
<p><?php echo $_SESSION["alamat"];?> : ini alamat anda</p>
<p><?php echo $_SESSION["nomorhp"];?> : ini nomor hp anda</p>

<form method = "POST">
  Kode: 
  <?php echo $hasil_1;?>
  <br>
  <input type="submit" value="Submit" name="input">
  <input type="submit" value ="Ganti" name="ganti">
</form> 

<br>
<a href="datakode.php"><button>Lihat Data Kode!</button></a>
<a href="logout.php"><button>Logout</button></a>

</body>
</html>

<?php

if(isset($_POST['input'])) {
    
    $kode = $hasil_1;
    $query = "INSERT INTO randomkode (randomkode) VALUES('$kode')";
    mysqli_query($sql, $query);
   }
?>