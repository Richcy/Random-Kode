<?php include 'koneksi.php';?>

<!DOCTYPE html>
<html>
<head>
  <title>Data Kode</title>
</head>
<body>

<h3>Data Kode</h3>
 <table cellpadding="5" cellspacing="0" border="1">
  <tr bgcolor="#CCCCCC">
   <th>Id</th>
   <th>Kode</th>
  </tr>
  <?php 
 
  $query = 'SELECT * FROM randomkode';
  $tampil = mysqli_query($sql, $query);
  while($data = mysqli_fetch_array($tampil)){
    echo '<tr>';
    echo '<td>'.$data['id'].'</td>'; 
    echo '<td>'.$data['randomkode'].'</td>'; 
    echo '</tr>';
  }
  ?>
  
    </table>
 </form>

<br>
<a href="coba.php"><button>Kembali!</button></a>

 


</body>
</html>


