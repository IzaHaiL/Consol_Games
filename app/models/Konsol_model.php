<?php
class Konsol_model{
	private $table = 'konsol';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	//fungsi mengambil  data konsol dari table konsol kemdian di taruh di resusltset
	public function getAllKonsol()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
	}
	//fungsi untuk mencari id
	public function getKonsolById($id)
	{
		$this->db->query('SELECT * FROM ' .$this->table.' WHERE id=:id');

		$this->db->bind('id', $id);
		return $this->db->single();
		
	}
	//fungsi menabah data
	public function tambahDataKonsol($data)
    {
        $query = "INSERT INTO konsol VALUES (' ', :namakonsol, :tipekonsol, :deskripsi, :harga)";
        
        $this->db->query($query);
        $this->db->bind('namakonsol', $data['namakonsol']);
        $this->db->bind('tipekonsol', $data['tipekonsol']);
		$this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('harga', $data['harga']);
        

        $this->db->execute(); //di eksekusi

        return $this->db->rowCount(); // cek table apakah ada perubahan
    }
	
	//fungsi hapus data
	public function hapusDataKonsol($id)
	{
		$query = "DELETE FROM konsol WHERE id = :id";
		$this->db->query($query);
		$this->db->bind('id',$id);

		$this->db->execute();

		return $this->db->rowCount();

	}
	//fungsi ubah data
	public function ubahDataKonsol($data)
    {
        $query = "UPDATE konsol SET namakonsol = :namakonsol, 
		tipekonsol = :tipekonsol, deskripsi = :deskripsi, harga = :harga WHERE id =:id";
        
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('namakonsol', $data['namakonsol']);
        $this->db->bind('tipekonsol', $data['tipekonsol']);
		$this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('harga', $data['harga']);
        

        $this->db->execute();

        return $this->db->rowCount();
    }




}
