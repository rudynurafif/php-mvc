<?php 
if(!session_id()) session_start(); // menjalankan session untuk Flash Message
require_once '../app/init.php'; // bootstraping, memanggil satu file untuk memanggil semua aplikasi mvcnya

$app = new App;

?>