<?php 
// isi nama host, username mysql, dan password mysql anda
$host = mysql_connect("localhost","root","");

// isikan dengan nama database yang akan di hubungkan
$db = mysql_select_db("mahasiswa");

//testing koneksi dengan database
/*
if($db){
	echo "koneksi database berhasil.";
}else{
	echo "koneksi database gagal.";
}
*/
?>