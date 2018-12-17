<?php 
  include 'koneksi.php';
  session_start();
  if($_SESSION['status']!="login"){
    header('Location: login.php');
  }
?>


<!DOCTYPE html>
<html>
<head>
  <title>Edit Profil</title>

</head>
<body>

<?php
$id = $_SESSION["id"];
$query1 = "SELECT * FROM user WHERE id = '$id'";
$result1 = mysqli_query($sql,$query1);
$row = mysqli_fetch_assoc($result1);

  ?>

<p>Id : <?php echo $row["id"];?></p>
<p>Username : <?php echo $row["username"];?></p>
<p>Password : <?php echo $row["password"];?></p>
<p>Alamat : <?php echo $row["alamat"];?></p>
<p>Nomor HP : <?php echo $row["nomor_hp"];?></p>

<form action="" method="post">
    <input type="text" name="username" placeholder="Username Baru">
    <input type="password" name="password" placeholder="Password Baru">
    <input type="text" name="alamat" placeholder="alamat baru">
    <input type="text" name="nomorhp" placeholder="nomor hp baru">
    <input type="submit" value="Edit" name="edit">
</form>

<?php
if (isset($_POST['edit'])) {
	$id = $_SESSION['id'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$alamat = $_POST['alamat'];
	$nomorhp = $_POST['nomorhp'];
    // Getting submitted user data from database
    
    $query2 = "UPDATE user SET username = '$username', password = '$password', alamat = '$alamat', nomor_hp = '$nomorhp' WHERE id = '$id'";
    $result2 = mysqli_query($sql,$query2);
}
?>

<br>
<a href="coba.php"><button>Kembali!</button></a>

</body>
</html>


