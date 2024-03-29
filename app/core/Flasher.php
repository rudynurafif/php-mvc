<?php 

// Kelas yang bertugas untuk mengelola Flash Message dan menampilkannya

class Flasher {

  // static method, agar ketika method dijalankan kelasnya tidak perlu diinstansiasi

  public static function setFlash($pesan, $aksi, $tipe)
  {
    $_SESSION['flash'] = [
      'pesan' => $pesan,
      'aksi' => $aksi,
      'tipe' => $tipe
    ];
  }

  public static function flash() // untuk menampilkan pesan
  {
    if(isset($_SESSION['flash'])) {
        echo '<div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show" role="alert">
                Data Produk <strong>' . $_SESSION['flash']['pesan'] . '</strong> ' . $_SESSION['flash']['aksi'] . '
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
        unset($_SESSION['flash']);
    }
  }

}

?>