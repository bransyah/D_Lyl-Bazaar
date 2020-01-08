<?php 
//fungsi untuk menghubungkan ke database
require_once("config.php");
//
if(isset($_POST['login'])){

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $company = filter_input(INPUT_POST, 'company', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM users WHERE username=:username";
    $stmt = $db->prepare($sql);
    
    // bind parameter ke query
    $params = array(
        ":username" => $username
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // jika user terdaftar
    if($user){
        // verifikasi password
        if(password_verify($password, $user["password"])){
            // buat Session
            session_start();
            $_SESSION["user"] = $user;
            // login sukses, alihkan ke halaman timeline
            header("Location: timeline.php");
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
</head>
<!--<p> penanda bahwa ini bagian login <P>-->
<body class="login">
    <div>
        <a class="hiddenanchor" id="signup"></a> <!--<p> hidden anchor berfungsi sebagai link ke database dengan penanda signup <P>-->
        <a class="hiddenanchor" id="signin"></a> <!--<p> hidden anchor berfungsi sebagai link ke database dengan penanda signin <P>-->

        <div class="login_wrapper"> <!--<p> wrapper disini digunakan untuk mebuat kotak pada bagian login <P>-->
            <div class="animate form login_form"> <!--<p> membuat efek pada tombol login <P>-->
                <section class="login_content"> <!--<p> menandakan bahwa hanya login yang dapat di tekan <P>-->
                    <form> <!--<p> untuk menampung banyak elemen pada login <P>-->
                        <h1>Login Form</h1> <!--<p> heading h1 sebagai penanda pencarian login form <P>-->

                        <div class="form-group"> <!--<p> membuat kolom masukan untuk username, form group digunakan untuk membalut semua fungsi di bawah menjadi kolom masukan<P>-->
                            <label for="username">Username</label> <!--<p> melabelkan bahwa kotak tersebut adalah untuk username <P>-->
                            <input type="text" class="form-control" placeholder="Username" required="" /> <!--<p> fungsi ini berisi tipe masukan dan jenis tulisan pada kotak username <P>-->
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" placeholder="Password" required="" />
                        </div>


                        <div>
                            <a class="btn btn-default submit" href="index.html">Log in</a> <!--<p> fungsi tombol tuisan login <P>-->

                        </div>

                        <div class="clearfix"></div> <!--<p> mengosongkan kedua kolom username dan password apabila data tidak di temukan <P>-->

                        <div class="separator">
                            <p class="change_link">New to site?
                                <a href="#signup" class="to_register"> Create Account </a>
                            </p>

                            <div class="clearfix"></div>
                            <br />


                        </div>
                    </form>
                </section>
            </div>

            <div id="register" class="animate form registration_form">
                <section class="login_content">
                    <form>
                        <h1>Create Account</h1>
                        <div>
                            <input type="text" class="form-control" placeholder="Username" required="" />
                        </div>
                        <div>
                            <input type="tel" class="form-control" placeholder="Phone" required="" />
                        </div>
                        <div>
                            <input type="text" class="form-control" placeholder="Company Name" required="" />
                        </div>
                        <div>
                            <input type="text" class="form-control" placeholder="Address" required="" />
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Password" required="" />
                        </div>
                        <div>
                            <a class="btn btn-default submit" href="index.html">Submit</a>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">Already a member ?
                                <a href="#signin" class="to_register"> Log in </a>
                            </p>

                            <div class="clearfix"></div>
                            <br />


                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</body>

</html>