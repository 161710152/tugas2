<?php
require_once '2.php';
$mobil = new mobil ('toyota','hitam','2005','30jt','majumundur');
echo"<h3>mobil</h3>";
echo"<h5>hati hatilah saat berkendara</h5>";
echo "nama :".$mobil->get_nama().'<br>';
echo "warna :".$mobil->get_warna().'<br>';
echo "keluaran :".$mobil->get_keluaran().'<br>';
echo "harga_motor :".$mobil->get_harga_mobil().'<br>';
echo "jalan:".$mobil->get_jalan().'<br>';
?>