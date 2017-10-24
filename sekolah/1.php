<?php
require_once '2.php';
$sekolah = new sekolah ('ada 14','176 murid','rizal','13 kelas','TCI');
echo "guru:".$sekolah->get_guru().'<br>';
echo "murid :".$sekolah->get_murid().'<br>';
echo "kepalasekolah :".$sekolah->get_kepalasekolah().'<br>';
echo "kelas :".$sekolah->get_kelas().'<br>';
echo "alamat:".$sekolah->get_alamat().'<br>';
?>