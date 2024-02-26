<?php
session_start();
//koneksi ke database
include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Toko Motor Antik</title>
  <link rel="stylesheet" href="admin/assets/css/bootstrap.css">
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include 'templates/navbar.php'; ?>

<!-- konten   -->
<section class="content">
  <div class="container">

  <!-- carousel start -->
  <div class="container">
            <div class="col-md-12">  
                  <div class="carousel slide" id="contoh-carousel" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#contoh-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#contoh-carousel" data-slide-to="1"></li>
                            <li data-target="#contoh-carousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="img/slider.png">
                                <div class="carousel-caption">
                                </div>
                            </div>
                            <div class="item">
                                <img src="img/slider.png">
                                <div class="carousel-caption"> 
                                </div>
                            </div>
                            <div class="item">
                                <img src="img/slider.png">
                                <div class="carousel-caption"> 
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#contoh-carousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Prev</span>
                        </a>
                        <a class="right carousel-control" href="#contoh-carousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- carousel end -->

            <center><h1><b>~~~~~Produk Toko~~~~~</b></h1></center>

    <div class="row">
      <?php
      $ambil = $koneksi->query("SELECT * FROM produk");
      while($perproduk = $ambil->fetch_assoc()):
      ?>
      <div class="col-md-3">
        <div class="thumbnail">
          <img src="foto_produk/<?= $perproduk['foto_produk']; ?>">
          <div class="caption">
            <h3><?= $perproduk['nama_produk']; ?></h3>
            <h5>Rp. <?= number_format($perproduk['harga_produk']); ?>,-</h5>
            <a href="beli.php?id=<?= $perproduk['id_produk']; ?>" class="btn btn-success">Beli sekarang</a>
            <a href="detail.php?id=<?= $perproduk['id_produk']; ?>" class="btn btn-info">Detail produk</a>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>
  
<script src="bootstrap/js/jQuery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</body>
</html>