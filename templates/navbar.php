  <!-- navbar -->
  <nav class="navbar navbar-expand-sm bg-Warning"> 
    <div class="container">
      <ul class="nav navbar-nav">
        <li><a href="index.php"><b>Beranda</b></a></li>
        <li><a href="keranjang.php"><b>Keranjang</b></a></li>
         <li><a href="checkout.php"><b>Checkout</b></a></li>
        <!-- Jika sudah login (ada login pelanggan) -->
        <?php if(isset($_SESSION["pelanggan"])): ?>
          <li><a href="logout.php"><b>Logout</b></a></li>
          <li><a href="riwayat.php"><b>Riwayat Belanja</b></a></li>
        <!-- Selain itu (belum login / belum ada session pelanggan) -->
        <?php else: ?>
          <li><a href="login.php"><b>Login</b></a></li>
          <li><a href="daftar.php"><b>Daftar</b></a></li>
        <?php endif; ?>
      </ul>

      <form action="pencarian.php" method="get" class="navbar-form navbar-right">
        <input type="text" class="form-control" name="keyword">
        <button class="btn btn-warning">Cari</button>
      </form>
    </div>
  </nav>