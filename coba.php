<?php 
  include 'randomkode.php';
  include 'koneksi.php';
  session_start();
  if($_SESSION['status']!="login"){
    header('Location: login.php');
  }
?>


<!DOCTYPE html>
<html>
<head>
  <title>Coba Random Kode</title>

</head>
<body>

<?php
$id = $_SESSION["id"];
$query1 = "SELECT * FROM user WHERE id = '$id'";
$result1 = mysqli_query($sql,$query1);
$row = mysqli_fetch_assoc($result1);
?>

<p><?php echo $row["username"];?> telah login!<a href="editprofil.php"><button>Edit Profil Anda</button></a></p>


<form method = "POST">
  Kode: 
  <?php echo $hasil_1;?>
  <br>
  <input type="submit" value="Submit" name="input">
  <input type="submit" value="Ganti" name="ganti">
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