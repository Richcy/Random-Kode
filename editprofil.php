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

<p>Id : <?php echo $_SESSION["id"];?></p>
<p>Username : <?php echo $_SESSION["username"];?></p>
<p>Password : <?php echo $_SESSION["password"];?></p>
<p>Alamat : <?php echo $_SESSION["alamat"];?></p>
<p>Nomor HP : <?php echo $_SESSION["nomorhp"];?></p>

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
    
    $query = "UPDATE user SET username = '$username', password = '$password', alamat = '$alamat', nomor_hp = '$nomorhp' WHERE id = '$id'";
    $result = mysqli_query($sql,$query);
}
?>

<br>
<a href="coba.php"><button>Kembali!</button></a>

</body>
</html>


