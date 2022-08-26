<?php 

class Products_model {
  private $table = 'products';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllProducts() // menampilkan seluruh datanya
  {
    $this->db->query("SELECT * FROM " . $this->table);
    return $this->db->resultSet();
  }

  public function getProductById($id) // detail
  {
    $this->db->query("SELECT * FROM " . $this->table . ' WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }

  public function tambahDataProduct($data)
  {
    $query = "INSERT INTO products
                VALUES
                (null, :nama, :produsen, :kategori, :harga)";

    $this->db->query($query); // jalankan query
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('produsen', $data['produsen']);
    $this->db->bind('kategori', $data['kategori']);
    $this->db->bind('harga', $data['harga']);

    $this->db->execute();

    return $this->db->rowCount();
  }

  public function hapusDataProduct($id)
  {
    $query = "DELETE FROM products WHERE id=:id";
    $this->db->query($query); // jalankan query
    $this->db->bind('id', $id); // dibind

    $this->db->execute();

    return $this->db->rowCount();
  }

  public function ubahDataProduct($data)
  {
    $query = "UPDATE products SET
                nama = :nama,
                produsen = :produsen,
                kategori = :kategori,
                harga = :harga
              WHERE id = :id";

    $this->db->query($query); // jalankan query
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('produsen', $data['produsen']);
    $this->db->bind('kategori', $data['kategori']);
    $this->db->bind('harga', $data['harga']);
    $this->db->bind('id', $data['id']);

    $this->db->execute();

    return $this->db->rowCount();
  }

  public function cariDataProduct()
  {
    $keyword = $_POST['keyword'];
    $query = 'SELECT * FROM products WHERE nama LIKE :keyword';
    $this->db->query($query);
    $this->db->bind('keyword', "%$keyword%");
    return $this->db->resultSet();
  }

}

?>