<div class="container mt-5">

  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><?= $data['product']['nama']; ?></h5>
      <h6 class="card-subtitle mb-2 text-muted"><?= $data['product']['produsen']; ?></h6>
      <p class="card-text"><?= $data['product']['kategori']; ?></p>
      <p class="card-text"><?= $data['product']['harga']; ?></p>
      <a href="<?= BASEURL; ?>/products" class="card-link badge bg-primary text-decoration-none" >Kembali</a>
    </div>
  </div>

</div>