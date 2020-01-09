<?php
        
include('conn.php');
$waktu = $_POST['waktu'];
$daerah=$_POST['daerah'];
$jumlah=$_POST['jumlah'];
$update = mysqli_query ($db,"UPDATE tempat SET jumlah = jumlah + '$jumlah' WHERE waktu='$waktu' AND tempat=$daerah ") or die (mysqli_error());
        
var_dump($waktu);
var_dump($daerah);
var_dump($waktu);
var_dump($update);

//jika query update sukses
if($update){

    echo '<br/><br/>Data berhasil di Update! ';  //Pesan jika proses simpan sukses
        
}
else{

  echo 'Gagal  menyimpan data! ';  //Pesan jika proses simpan gagal
 
}
   
?>

