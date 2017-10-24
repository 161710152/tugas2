<?php
class kucing{

	public $bulu;
	public $mata;
	public $kaki;
	public $maju;
//konstraktor
public function __construct($bulu,$mata,$kaki,$maju){
	$this->bulu = $bulu;
	$this->mata = $mata;
	$this->kaki = $kaki;
	$this->maju = $maju;
}
public function get_bulu()
	{
	return	$this->bulu;
	}
public function get_mata()
	{
	return	$this->mata;
	}
	public function get_kaki()
	{
	return	$this->kaki;
	}
	public function get_maju()
	{
	return	$this->maju;
	}
}
 
?>