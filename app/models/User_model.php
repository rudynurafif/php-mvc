<?php 

class User_model {
  private $nama = ""; // bisa diambil dari db, api, atau service lainnya

  public function getUser()
  {
    return $this->nama;
  }
}

?>