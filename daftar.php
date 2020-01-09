<?php

require_once("config.php");

if(isset($_POST['register'])){

    // filter data yang diinputkan
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $company = filter_input(INPUT_POST, 'company', FILTER_SANITIZE_STRING);
    $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    // menyiapkan query
    $sql = "INSERT INTO userss (username, phone, company, address, password) 
            
            VALUES (:username, :phone, :company, :address, :password)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
  

     $params = array(
        ":username" => $username,
        ":phone" => $phone,
        ":company" => $company,
        ":address" => $address, 
        ":password" => $password

    );
  
    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);
    

    // eksekusi query untuk menyimpan ke database
    

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) {
        header("Location: index.php");
       
       
    }
    else {
        echo '<script language="javascript">';
        echo 'alert("akun tidak dapat di daftar, coba lagi")';
        echo '</script>';

    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register </title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">

       

    
        <p>Sudah punya akun? <a href="index.php">Login di sini</a></p>

        <form action="" method="POST">

          
            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" type="text" name="username" placeholder="Username" />
            </div>
            
             <div class="form-group">
                <label for="phone">Nomer Hp </label>
                <input class="form-control" type="number" name="phone" placeholder="phone" />
            </div>


            <div class="form-group">
                <label for="company">Company</label>
                <input class="form-control" type="text" name="company" placeholder="Nama Usaha" />
            </div>
            
            <div class="form-group">
                <label for="address">Alamat</label>
                <input class="form-control" type="text" name="address" placeholder="alamat" />
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Password" />
            </div>

            <input type="submit" class="btn btn-success btn-block" name="register" value="Daftar" />

        </form>
            
        </div>

        <div class="col-md-6">
            <img class="img img-responsive" src="ya.jpeg" />
        </div>

    </div>
</div>

</body>
</html>