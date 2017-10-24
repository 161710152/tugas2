<?php
class sekolah{

	public $guru;
	public $murid;
	public $kepalasekolah;
	public $kelas;
	public $alamat;
//konstraktor
public function __construct($guru,$murid,$kepalasekolah,$kelas,$alamat){
	$this->guru = $guru;
	$this->murid = $murid;
	$this->kepalasekolah = $kepalasekolah;
	$this->kelas = $kelas;
	$this->alamat = $alamat;
}
public function get_guru()
	{
	return	$this->guru;
	}
public function get_murid()
	{
	return	$this->murid;
	}
	public function get_kepalasekolah()
	{
	return	$this->kepalasekolah;
	}
	public function get_kelas()
	{
	return	$this->kelas;
	}
	public function get_alamat()
	{
	return	$this->alamat;
	}
}
 
?>