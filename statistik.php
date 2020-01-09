<?php


require_once("config.php");


if(!isset($_SESSION)){
 	session_start();
}
if (empty($_SESSION['user'])) {
 	header('Location:login.php');
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
        <p><?php echo  $_SESSION["user"]["name"] ?></p>

        <form action="" method="">

        
<table id="tabel"  border="1" cellpadding="3" >
			<tr>
				<th style="width: 20px;">No</th>
				<th style="width: 50px;">Waktu</th>
				<th>Jumlah Pelanggan</th>
				<th>Daerah</th>
				

			</tr>
			<?php require_once("conn.php"); 
			$sql = "SELECT *, SUM(jumlah) FROM transaksi GROUP BY daerah";
			$hasil=mysqli_query($conn,$sql) or die(mysqli_error());
			$no=1;
			while ($data = mysqli_fetch_array ($hasil)){
				$id=$data['id'];
				?>
				<tr>

					<td><?php echo $no++?></td>
					<td><?php echo $data['waktu'];?></td>
					<td><?php echo $data['jumlah']; ?></td>
					<td><?php echo $data['daerah']; ?></td>

				</tr>
				<?php } ?>
			</table>
        </form>
            
        </div>

        <div class="col-md-6">
            <img class="img img-responsive" src="ya.jpeg" />
        </div>

    </div>
    <p>&larr; <a href="logout.php">Log Out</a>
    <p>&larr; <a href="input.php">Input</a>
    
</div>

</body>
</html>