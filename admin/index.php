<?php
session_start();
$koneksi = new mysqli("localhost", "root", "", "database_toko");

if(!isset($_SESSION['admin'])){
	header('location:login.php');
}

?>

<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Antiq Motor</title>

	<link href="assets/css/bootstrap.css" rel="stylesheet" />
	<link href="assets/css/font-awesome.css" rel="stylesheet" />
	<link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
	<link href="assets/css/custom.css" rel="stylesheet" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	<script src="assets/js/jquery-1.10.2.js"></script>
</head>
<body>

<div id="wrapper">
	<nav class="navbar navbar-default navbar-cls-top" role="navigation" style="margin-bottom:0">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div style="color: white;
		padding: 15px 50px 5px 50px;
		float: right;
		font-size: 16px;">Terakhir dilihat : 07 januari 2023 &nbsp; <a href="index.php?halaman=logout" class="btn btn-danger">Logout</a> 
		</div>
	</nav>

    <nav class="navbar-default navbar-side" role="navigation">
			<div class="sidebar-collapse">
				<ul class="nav" id="main-menu">
					<li class="text-center">
					</li>
					<li>
						<a href="index.php"><i class="fa fa-dashboard"></i>Halaman Utama Admin</a>
					</li>
					<li>
						<a href="index.php?halaman=produk"><i class="fa fa-cube"></i> Produk Motor</a>
					</li>
					<li>
						<a href="index.php?halaman=pembelian"><i class="fa fa-shopping-cart"></i>Pembelian Produk</a>
					</li>
					<li>
						<a href="index.php?halaman=laporan_pembelian"><i class="fa fa-file"></i>Laporan Toko</a>
					</li>
					<li>
						<a href="index.php?halaman=pelanggan"><i class="fa fa-user"></i>Pelanggan Motor Antiq</a>
					</li>
					<li>
						<a href="index.php?halaman=logout"><i class="fa fa-sign-out"></i>Logout</a>
					</li>      
				</ul>
			</div>   
    </nav>  
    
    <div id="page-wrapper" >
			<div id="page-inner">
				<?php
					if(isset($_GET["halaman"])){
						if($_GET["halaman"] == "produk"){
							include 'produk.php';
						}
						elseif($_GET["halaman"] == "kategori"){
							include 'kategori.php';
						}
						elseif($_GET["halaman"] == "pembelian"){
							include 'pembelian.php';
						}
						elseif($_GET["halaman"] == "pelanggan"){
							include 'pelanggan.php';
						}
						elseif($_GET["halaman"] == "detail"){
							include 'detail.php';
						}
						elseif($_GET["halaman"] == "tambahproduk"){
							include 'tambahproduk.php';
						}
						elseif($_GET["halaman"] == "hapusproduk"){
							include 'hapusproduk.php';
						}
						elseif($_GET["halaman"] == "ubahproduk"){
							include 'ubahproduk.php';
						}
						elseif($_GET["halaman"] == "detailproduk"){
							include 'detailproduk.php';
						}
						elseif($_GET["halaman"] == "hapusfotoproduk"){
							include 'hapusfotoproduk.php';
						}
						elseif($_GET["halaman"] == "pembayaran"){
							include 'pembayaran.php';
						}
						elseif($_GET["halaman"] == "laporan_pembelian"){
							include 'laporan-pembelian.php';
						}
						elseif($_GET["halaman"] == "logout"){
							include 'logout.php';
						}

					}
					else{
						include 'home.php';
					}
				?>                        
			</div>
    </div>

</div>
	
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.metisMenu.js"></script>
	<script src="assets/js/morris/raphael-2.1.0.min.js"></script>
	<script src="assets/js/morris/morris.js"></script>
	<script src="assets/js/custom.js"></script>
    
</body>
</html>
