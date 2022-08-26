<div class="container mt-5">

  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>

  <!-- Button -->
  <div class="row mb-3">
    <div class="col-lg-6">
    <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
      Tambah Data Produk
    </button>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-lg-6">
      <form action="<?= BASEURL; ?>/products/cari" method="post">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Cari produk.." name="keyword" id="keyword" autocomplete="off">
          <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
        </div>
      </form>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6">
      <h2>Daftar Produk</h2>
      <ul class="list-group">
          <?php foreach($data['product'] as $product) : ?>  
          <li class="list-group-item">
            <?= $product['nama']; ?>
            <a href="<?= BASEURL; ?>/products/hapus/<?= $product['id']; ?>" class="badge bg-danger float-end ms-1 text-decoration-none" onclick="return confirm('Yakin?')">Hapus</a>
            <a href="<?= BASEURL; ?>/products/ubah<?= $product['id']; ?>" class="badge bg-warning float-end ms-1 tampilModalUbah text-decoration-none" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $product['id']; ?>">Ubah</a>
            <a href="<?= BASEURL; ?>/products/detail/<?= $product['id']; ?>" class="badge bg-primary float-end ms-1 text-decoration-none">Detail</a>
          </li>
          <?php endforeach; ?>
        </ul>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Produk</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form action="<?= BASEURL; ?>/products/tambah" method="post">

          <input type="hidden" name="id" id="id">

          <div class="mb-3">
            <label for="nama" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
          </div>

          <div class="mb-3">
            <label for="produsen" class="form-label">Produsen</label>
            <input type="text" class="form-control" id="produsen" name="produsen" required>
          </div>

          <label for="kategori" class="mb-2">Kategori</label>
          <select class="form-select mb-3" id="kategori" name="kategori">
            <option selected value="Smartphone">Smartphone</option>
            <option value="Laptop">Laptop</option>
            <option value="Wearables">Wearables</option>
            <option value="Audio">Audio</option>
            <option value="Smart Office">Smart Office</option>
            <option value="Home Appliances">Home Appliances</option>
          </select>

          <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="text" class="form-control" id="harga" name="harga" placeholder="(Contoh: IDR 1.000.000)" required>
          </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>

    </div>
  </div>
</div>