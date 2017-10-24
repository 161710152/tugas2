<?php
class mobil{

	public $nama;
	public $warna;
	public $keluaran;
	public $harga_mobil;
	public $jalan;
//konstraktor
public function __construct($nama,$warna,$keluaran,$harga_motor,$jalan){
	$this->nama = $nama;
	$this->warna = $warna;
	$this->keluaran = $keluaran;
	$this->harga_motor = $harga_motor;
	$this->jalan = $jalan;
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
	public function get_harga_mobil()
	{
	return	$this->harga_motor;
	}
	public function get_jalan()
	{
	return	$this->jalan;
	}
}
 
?>