<?php
// child dari Class Controller yang ada di core
class Dashboard extends Controller{

    public function index() //memangil controller index dashboard
    {   
        $data['judul']='Dashboard';
        $data['kons']=$this->model('Konsol_model')->getAllKonsol(); // mengambil data dari konsol model
        $this->view('templates/headerdh',$data);
        $this->view('dashboard/index',$data);
        $this->view('templates/footer');//menampilkan dashboard dengan mengirimkan data dari konsol_model
    }

    public function page($id) //memangil controller index dashboard
    {   
        $data['judul']='Detail';
        $data['kons']=$this->model('Konsol_model')->getKonsolById($id); // mengambil data dari konsol model
        $this->view('templates/headerdh',$data);
        $this->view('dashboard/page',$data);
        $this->view('templates/footer');//menampilkan dashboard dengan mengirimkan data dari konsol_model
    }

    public function tambah() // melakukan aksi tambah data
    {
        if( $this->model('Konsol_model')->tambahDataKonsol($_POST) > 0 ) {
            header('Location: ' . BASEURL . '/Dashboard'); // setelah di tambah kembali ke tampilan dashboard
            exit;
        } 
    }

    public function hapus($id) // melakukan aksi hapus data yang memanngil id untu data yang akan di hapus
                            
    {
    {
        if( $this->model('Konsol_model')->hapusDataKonsol($id) > 0 ) {
            header('Location: ' . BASEURL . '/Dashboard'); // setelah di hapus kembali ke tapilan dasboard
            exit;
        } 
    }
    }

    public function getUbah()
    {
    
    echo json_encode($this->model('Konsol_model')->getKonsolById($_POST['id']));//mengambil data konsol_model yang di ambil id di lempar ke js
    
    }

    public function ubah()
    {
        if( $this->model('Konsol_model')->ubahDataKonsol($_POST) > 0 ) {
            header('Location: ' . BASEURL . '/Dashboard'); // setelah di ubah kembali ke tampilan dashboard
            exit;
        } 
    }
}