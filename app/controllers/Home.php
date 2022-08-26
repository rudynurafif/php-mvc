<?php 

class Home extends Controller { // controller home

  public function index() // method index
  {
    $data['judul'] = "Home";
    $data['nama'] = $this->model('User_model')->getUser();
    
    $this->view('templates/header', $data);
    $this->view('home/index', $data);
    $this->view('templates/footer');
  }
  
}

?>