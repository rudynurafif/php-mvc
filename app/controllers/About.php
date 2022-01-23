<?php 

class About extends Controller { // controller about
  public function index($nama = "Rudy", $pekerjaan = "Junior Web Dev", $umur = 23)
  {
    $data['nama'] = $nama;
    $data['pekerjaan'] = $pekerjaan;
    $data['umur'] = $umur;
    $data['judul'] = "About Me";
    $this->view('templates/header', $data);
    $this->view('about/index', $data);
    $this->view('templates/footer');
  }
  public function page() // method page
  { 
    $data['judul'] = "Pages";
    $this->view('templates/header', $data);
    $this->view('about/page');
    $this->view('templates/footer');
  }
}

?>