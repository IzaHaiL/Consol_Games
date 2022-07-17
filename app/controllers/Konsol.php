<?php
// child dari Class Controller yang ada di core
class Konsol extends Controller{
    public function index() //memangil controller index konsol_lust
    {
        $data['judul']='Daftar Konsol';
        $data['kons']=$this->model('Konsol_model')->getAllKonsol(); //mengambil data dari konsol model
        $this->view('templates/header',$data); // memanngil view header yang di gabung
        $this->view('konsol_list/index',$data); //memanngil view konsol_list serta mengirim data dari konsol_model
        $this->view('templates/footer'); // memanngil view footer yang di gabung
    }

    
}