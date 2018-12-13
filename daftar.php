<?php include 'koneksi.php';?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Daftar</title>
</head>
<body>

<form action="" method="post">
    <input type="text" name="username" placeholder="Enter your username" required>
    <input type="password" name="password" placeholder="Enter your password" required>
    <input type="text" name="alamat" placeholder="masukan alamat" required>
    <input type="text" name="nomorhp" placeholder="masukan nomor hp" required>
    <input type="submit" value="Daftar" name="daftar">
</form>

 <br>
    
    <a href="coba.php"><button>Kembali!</button></a>


</body>
</html>

<?php
if (isset($_POST['daftar'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$alamat = $_POST['alamat'];
	$nomorhp = $_POST['nomorhp'];
    // Getting submitted user data from database
    
    $query = "INSERT INTO user (username,password,alamat,nomor_hp)
    values ('$username','$password','$alamat','$nomorhp')";
    $result = mysqli_query($sql,$query);
}
?>