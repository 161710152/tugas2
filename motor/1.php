<?php
require_once '2.php';
$motor = new motor ('honda','hitam','2006','14jt','260cc');
echo"<h3>motor</h3>";
echo"<h5>hati hatilah saat berkendara</h5>";
echo "nama :".$motor->get_nama().'<br>';
echo "warna :".$motor->get_warna().'<br>';
echo "keluaran :".$motor->get_keluaran().'<br>';
echo "harga_motor :".$motor->get_harga_motor().'<br>';
echo "kelas :".$motor->get_kelas().'<br>';
?>