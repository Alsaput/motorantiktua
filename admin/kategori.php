<?php
// File: kategori.php

session_start(); // Panggil session_start() di awal file

$semuadata = [];
$ambil = $koneksi->query("SELECT * FROM kategori");
while($tiap = $ambil->fetch_assoc()){
  $semuadata[] = $tiap;
}

// Tangani pengiriman formulir untuk menambahkan data baru
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nama_kategori = $_POST['nama_kategori'];

  // Lakukan validasi jika diperlukan

  // Masukkan data ke dalam database
  $query_insert = $koneksi->prepare("INSERT INTO kategori (nama_kategori) VALUES (?)");
  $query_insert->bind_param("s", $nama_kategori);
  $query_insert->execute();

  // Set variabel sesi untuk menyimpan pesan keberhasilan
  $_SESSION['success_message'] = 'Data berhasil ditambahkan';
}
?>

<!-- Konten HTML Anda -->

<!-- Tampilkan pesan alert jika variabel sesi ada -->
<?php if (isset($_SESSION['success_message'])): ?>
  <div class="alert alert-success">
    <?php echo $_SESSION['success_message']; ?>
  </div>
  <?php
  // Hapus variabel sesi setelah ditampilkan
  unset($_SESSION['success_message']);
endif;
?>

<!-- ... -->
