<?php
// child dari Class Controller yang ada di core
class Home extends Controller  {
    public function index() //memangil controller index home untuk tampilan utama
    {
        $data['judul'] = 'KonsolKU';
        $data['nama'] = $this->model('User_model')->getUser();  //memangil data dari User_model
        $this->view('templates/header',$data);  // memanngil view header yang di gabung
        $this->view('home/index',$data); // menampilkan home sembari mengirimkan data 
                                            //user dari user model
        $this->view('templates/footer'); // memanngil view footer yang di gabung
    }
}