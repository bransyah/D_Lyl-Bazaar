<?php
        
include('conn.php');

$waktu = $_POST['waktu']; //untuk menyimpan data waktu yang baru ditambahkan ke waktu ditabel database
$daerah=$_POST['daerah']; //untuk menyimpan data daerah yang baru ditambahkan ke daerah ditabel database
$jumlah=$_POST['jumlah']; //untuk menyimpan data jumlah yang baru ditambahkan ke jumlah ditabel database

$update = mysqli_query ($db,"UPDATE tempat SET jumlah = jumlah + '$jumlah' WHERE waktu='$waktu' AND tempat=$daerah ") or die (mysqli_error());
        
var_dump($waktu); // var_dump untuk menampilkan hasil variabel dan juga memperlihatkan jenis tipe dari variabel tersebut
var_dump($daerah); // var_dump untuk menampilkan hasil variabel dan juga memperlihatkan jenis tipe dari variabel tersebut
var_dump($waktu); // var_dump untuk menampilkan hasil variabel dan juga memperlihatkan jenis tipe dari variabel tersebut
var_dump($update); // var_dump untuk menampilkan hasil variabel dan juga memperlihatkan jenis tipe dari variabel tersebut

//jika query update sukses dilakukan

if($update){

	// Fungsi echo digunakan untuk menampilkan hasil output sebanyak satu atau lebih data dipisahkan dengan tanda koma (,) pada browser.
    echo '<br/><br/>Data berhasil di Update! ';  
	
	//akan  ditampilkan jika proses simpan sukses.
	
}
else{

  echo 'Gagal  menyimpan data! ';  //akan ditampilkan jika proses simpan gagal
 
}
   
?>