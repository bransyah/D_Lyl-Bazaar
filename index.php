<?php

require_once("config.php");

if(isset($_POST['login'])){

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM userss WHERE username=:username";
    $stmt = $db->prepare($sql);
    
    // bind parameter ke query
    $params = array(
        ":username" => $username
        
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);
  
    
   
    session_start();
    $_SESSION["user"] = $user;
    if($user) {
        header("Location: input.php");
    }
    else {
        echo '<script language="javascript">';
        echo 'alert("Akun belum terdaftar atau salah input")';
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
    <title>Login </title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
   
        <h4> Selamat datang</h4>
        <p>Belum punya akun? <a href="daftar.php">Daftar di sini</a></p>
        

        <form action="" method="POST">

          
            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" type="text" name="username" placeholder="Username" />
            </div>
            
             

            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Password" />
            </div>

            <input type="submit" class="btn btn-success btn-block" name="login" value="Masuk" />

        </form>
            
        </div>

        <div class="col-md-6">
            <img class="img img-responsive" src="ya.jpeg" />
        </div>

    </div>
</div>

</body>
</html>