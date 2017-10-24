<?php
require_once '2.php';
$kucing = new kucing ('rawis','ada 2','ada 4','majumundur');
echo "bulu:".$kucing->get_bulu().'<br>';
echo "mata :".$kucing->get_mata().'<br>';
echo "kaki :".$kucing->get_kaki().'<br>';
echo "maju :".$kucing->get_maju().'<br>';
?>