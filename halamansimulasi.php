<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

     <title>Sistem Pom Bensin Online </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">SISTEM POM BENSIN ONLINE</div>
    <div class="address-bar">Penjualan Bensin Online -  Pembayaran Online -  Pengisian Bahan Bakar Otomatis </div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.php">Business Casual</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                     <li>
                        <a href="bahanbakar.php">Bahan Bakar</a>
                    </li>

                    <li>
                        <a href="pembayaran.php">Pembayaran</a>
                    </li>
                    <li>
                          <a href="halamansimulasi.php">Halaman Simulasi</a>
                    </li>
                    <li>
                         <a href="contact.php">Contact </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        

                        <!-- Wrapper for slides -->
                        
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>SELAMAT DATANG DIHALAMAN SIMULASI </small> <br><br>
               
                    </h2>
                    <h1 class="brand-name">Masukkan Kode Transaksi Anda</h1>
                    <hr class="tagline-divider">
                     <form method="post">
                        <div class="row">
                            <center>
                                <div class="form-group col-lg-4">
                                <label>Kode Transaksi</label>
                                <input type="text" class="form-control" name="kode">
                            </div>
                           
                            <div class="form-group col-lg-12">
                                <input class="btn btn-primary" type="submit" value="Submit" name="cek">
                            </div>
                            </center>
                        </div>
                    </form>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"><strong> SISTEM POM BENSIN ONLINE</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="img/background.png" width="200" height="10" frameborder="0" style="border:0" >
                    <hr class="visible-xs">
                    <span align="justify">
                    <p>Halaman Simulasi adalah sebuah halaman yang diperuntukan bagi pelanggan dan pembeli yang ingin mencoba kode transaksi yang telah didapat dari transaksi yang telah dilakukan sebelum memasukkan kode tersebut di pom bensin online 
                       
                       

            </span>          
                    
            </div>
        </div>
        <div class="clearfix"></div>
            </div>
        </div>

    </div>
    <!-- /.container -->

  <footer>  
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright 2018 Sipbo.com | Penjualan Bahan Bakar Online · Pembayaran Online | Pengisian Bahan Bakar Mandiri  </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>

<?php

if (isset($_POST['cek'])) {
    $kode = $_POST['kode'];
    // Getting submitted user data from database
    
    $query = "SELECT * FROM randomkode WHERE randomkode='$kode'";
    $result = mysqli_query($sql,$query);
    $check = mysqli_num_rows($result);
    if($check > 0) {

        $row = mysqli_fetch_assoc($result);
        echo "<script>alert('Kode transaksi tersebut ada di database');</script>";
    }
 else
    {
        // anda gagal login
        echo "<script>alert('Maaf, Kode transaksi tersebut tidak ada di database');</script>";
    }
}



  ?>
