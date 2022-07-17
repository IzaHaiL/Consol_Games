<?php
// child dari Class Controller yang ada di core
class Feature extends Controller{ //memangil controller index feature
    public function index($nama= 'Farhan')
    {
        $data['nama']=$nama;
        $data['judul']='Feature Me';
        $this->view('templates/header',$data);
        $this->view('feature/index',$data);
        $this->view('templates/footer');
    }
    public function page()
    {
        $data['judul']='Daftar Konsol';
        $data['kons']=$this->model('Konsol_model')->getAllKonsol();
        $this->view('templates/header',$data);
        $this->view('feature/page',$data);
        $this->view('templates/footer');
    }
}

// WORK IN PROGRESS UNTUK FEATURE BELUM BERESSS