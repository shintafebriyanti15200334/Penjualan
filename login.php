<?php 

require_once("config.php");

if(isset($_POST['login'])){

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM users WHERE username=:username OR email=:email";
    $stmt = $db->prepare($sql);
    
    // bind parameter ke query
    $params = array(
        ":username" => $username,
        ":email" => $username
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
            // login sukses, alihkan ke halaman produk
            header("Location: http://localhost/Kelompok%20WP1/produc.php");
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
<style>

body {
    background-image: url(gambar/background.jpg);
}

</style>
</head>
<body>
<p>&larr; <a href="home.php">Home</a>
<form action="" method="POST">
            <div class="akseslogin">
<pre> <center>
    <img src="gambar/design1.png" width="325" height="325">
    <font size="5">
    Username : <input type="text" name="username" required=""> <br>
   Password : <input type="password" name="password" required=""><br>
    <input type="submit" class="btn btn-success btn-block" name="login" value="Login" />

<p>Belum punya akun?  <a href="register.php">Daftar di sini</a> </div> <div class="medsos"> <center> <font size="5">

</div>
</form>    
</body>
</html>
