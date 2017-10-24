<?php
class motor{

	public $nama;
	public $warna;
	public $keluaran;
	public $harga_motor;
	public $kelas;
//konstraktor
public function __construct($nama,$warna,$keluaran,$harga_motor,$kelas){
	$this->nama = $nama;
	$this->warna = $warna;
	$this->keluaran = $keluaran;
	$this->harga_motor = $harga_motor;
	$this->kelas = $kelas;
}
public function get_nama()
	{
	return	$this->nama;
	}
public function get_warna()
	{
	return	$this->warna;
	}
	public function get_keluaran()
	{
	return	$this->keluaran;
	}
	public function get_harga_motor()
	{
	return	$this->harga_motor;
	}
	public function get_kelas()
	{
	return	$this->kelas;
	}
}
 
?>