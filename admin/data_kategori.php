<?php
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

  // Redirect atau tampilkan pesan keberhasilan
  header("Location: nama_file_ini.php"); // Ganti dengan nama file ini
  exit();
}
?>

<!-- Konten HTML Anda -->

<h3>Data Kategori</h3>
<hr>

<!-- Formulir untuk menambahkan data baru -->
<form method="post" action="">
  <div class="form-group">
    <label for="nama_kategori">Nama Kategori:</label>
    <input type="text" name="nama_kategori" class="form-control" required>
  </div>
  <button type="submit" class="btn btn-primary">Tambah Data</button>
</form>

<table class="table table-bordered">
  <!-- Header tabel -->
  <thead>
    <tr>
      <th>No</th>
      <th>Kategori</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <!-- Tampilkan data yang sudah ada -->
    <?php foreach($semuadata as $key => $value): ?>
      <tr>
        <td><?= $key+1; ?>.</td>
        <td><?= $value['nama_kategori']; ?></td>
        <td>
          <a href="edit_kategori.php?id=<?= $value['id_kategori']; ?>" class="btn btn-warning btn-xs">Ubah</a>
          <a href="hapus_kategori.php?id=<?= $value['id_kategori']; ?>" class="btn btn-danger btn-xs">Hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
