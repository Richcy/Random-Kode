<?php include 'koneksi.php';?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
</head>
<body>

	<form action="" method="post">
    <input type="text" name="username" placeholder="Enter your username" required>
    <input type="password" name="password" placeholder="Enter your password" required>
    <input type="submit" value="Login" name="login">



</form>

<a href="daftar.php"><button>Daftar!</button></a>


</body>
</html>

<?php
// Always start this first
session_start();
if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
    // Getting submitted user data from database
    
    $query = "SELECT * FROM user WHERE username='$username' and password='$password'";
    $result = mysqli_query($sql,$query);
    $check = mysqli_num_rows($result);
	if($check > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['id'] = $row['id'];
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $row['password'];
		$_SESSION['alamat'] = $row['alamat'];
		$_SESSION['nomorhp'] = $row['nomor_hp'];
		$_SESSION['status'] = "login";
		header('Location: coba.php');
    }
}
?>