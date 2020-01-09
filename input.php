<?php // menggunakan bahas php dan database mysql

// memanggil program config.php, jika tidak ada maka akan menampilkan error
require_once("config.php"); 

// memulai eksekusi session pada server dan kemudian menyimpannya ke dalam browser
if(!isset($_SESSION)){
 	session_start();
}
if (empty($_SESSION['user'])) {
 	header('Location:login.php');
}

if(isset($_POST['register'])){

   $waktu = filter_input(INPUT_POST, 'waktu', FILTER_SANITIZE_STRING);
   $jumlah = filter_input(INPUT_POST, 'jumlah', FILTER_SANITIZE_STRING);
   $pemasukan = filter_input(INPUT_POST, 'pemasukan', FILTER_SANITIZE_STRING);
   $daerah = filter_input(INPUT_POST, 'daerah', FILTER_SANITIZE_STRING);
    


    // menyiapkan query /perintah (memanipulasi data baik itu menambah, menghapus dan mengubah data )
    $sql = "INSERT INTO transaksi (waktu, jumlah, pemasukan, daerah) 
            VALUES (:waktu, :jumlah, :pemasukan, :daerah)";
    $stmt = $db->prepare($sql); // prepare yaitu mempersiapkan query yang akan di jalankan

    // bind (mengirim data yang telah di tandai)  parameter ke query
    $params = array(
        ":waktu" => $waktu,
        ":jumlah" => $jumlah,
        ":pemasukan" => $pemasukan,
        ":daerah" => $daerah
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);
   
    

    

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
  
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Input</title>

        <link rel="stylesheet" href="css/bootstrap.min.css" />
    </head>

    <body class="bg-light">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">

        

                    <p>Selamat Datang</p>    
                    <p><?php echo  $_SESSION["user"]["username"] ?></p>

                    <form action="" method="POST">

        

                        <!-- divisi ini untuk input jumlah pelanggan yang ditampikan ke dalam browser dan disimpan kedalam mysql-->
                        <div class="form-group">
                            <label for="jumlah">Jumlah Pelanggan</label>
                            <input class="form-control" type="number" name="jumlah" placeholder="Jumlah Pelanggan" />
                        </div>

                        <!-- divisi ini untuk input pemasukan yang ditampikan ke dalam browser dan disimpan kedalam mysql-->
                        <div class="form-group">
                            <label for="pemasukan">Pemasukan</label>
                            <input class="form-control" type="number" name="pemasukan" placeholder="Pemasukan Rp." />
                        </div>

                        <!-- divisi ini untuk input waktu yang ditampikan ke dalam browser dan disimpan kedalam mysql-->
                        <div class="form-group">
                            <label for="waktu">Waktu</label>
                            <input type = "text" list = "waktu" name="waktu"> 
                                <datalist id = "waktu">
                                    <option value = "Pagi">
                                    <option value = "Siang">
                                    <option value = "Sore">
                                    <option value = "Malam">
                                </datalist>
 
                        </div>  

                        <!-- divisi ini untuk input lokasi yang ditampikan ke dalam browser dan disimpan kedalam mysql-->
                        <div class="form-group">
                            <label for="daerah">Lokasi</label>
                            <input type = "text" list = "daerah" name="daerah"> 
                                <datalist id = "daerah">
                                    <option value = "Lamglumpang">
                                    <option value = "Lamteh">
                                    <option value = "Rukoh">
                                    <option value = "Jeulingke">
                                </datalist>
 
                        </div>

                        <input type="submit" class="btn btn-success btn-block" name="register" value="Submit" />
        
                    </form>
            
                </div>

                <!--menampilkan gambar-->
                <div class="col-md-6">
                    <img class="img img-responsive" src="ya.jpeg" />
                </div>

                <!-- menampilkan button -->
            </div>
                <p>&larr; <a href="logout.php">Log Out</a>
                <p>&larr; <a href="statistik.php">statistik</a>
    
        </div>

    </body>
</html>