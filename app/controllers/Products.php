<?php 

class Products extends Controller {
  public function index()
  {
    $data['judul'] = "Products List";
    $data['product'] = $this->model("Products_model")->getAllProducts();

    // merangkai view
    $this->view('templates/header', $data);
    $this->view('products/index', $data);
    $this->view('templates/footer');
  }
  
  public function detail($id)
  {
    $data['judul'] = "Product Detail";
    $data['product'] = $this->model("Products_model")->getProductById($id);
    
    $this->view('templates/header', $data);
    $this->view('products/detail', $data);
    $this->view('templates/footer');
  }

  public function tambah()
  {
    if($this->model('Products_model')->tambahDataProduct($_POST) > 0) {
      Flasher::setFlash('berhasil', 'ditambahkan', 'success');
      header('Location: ' . BASEURL . '/products');
      exit;
    } else {
      Flasher::setFlash('gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASEURL . '/products');
      exit;
    }
  }

  public function hapus($id)
  {
    if($this->model('Products_model')->hapusDataProduct($id) > 0) {
      Flasher::setFlash('berhasil', 'dihapus', 'success');
      header('Location: ' . BASEURL . '/products');
      exit;
    } else {
      Flasher::setFlash('gagal', 'dihapus', 'danger');
      header('Location: ' . BASEURL . '/products');
      exit;
    }
  }

  public function getubah()
  {
    echo json_encode($this->model('Products_model')->getProductById($_POST['id']));
  }

  public function ubah()
  {
    if($this->model('Products_model')->ubahDataProduct($_POST) > 0) {
      Flasher::setFlash('berhasil', 'diubah', 'success');
      header('Location: ' . BASEURL . '/products');
      exit;
    } else {
      Flasher::setFlash('gagal', 'diubah', 'danger');
      header('Location: ' . BASEURL . '/products');
      exit;
    }
  }

  public function cari()
  {
    $data['judul'] = "Products List";
    $data['product'] = $this->model('Products_model')->cariDataProduct();
    $this->view('templates/header', $data);
    $this->view('products/index', $data);
    $this->view('templates/footer');
  }


}

?>