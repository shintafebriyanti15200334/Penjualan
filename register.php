<?php

require_once("config.php");

if(isset($_POST['register'])){

    // filter data yang diinputkan
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    // enkripsi password
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $alamat = filter_input(INPUT_POST, 'alamat', FILTER_SANITIZE_STRING);


    // menyiapkan query
    $sql = "INSERT INTO users (name, username, email, password, alamat) 
            VALUES (:name, :username, :email, :password, :alamat)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":name" => $name,
        ":username" => $username,
        ":password" => $password,
        ":email" => $email,
        ":alamat" => $alamat
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
   
 <style>

body {
    background-image: url(gambar/bggg.jpg);
}

h2 {
    font-size: 35px;
    font-family: Algerian;
    text-align: center;
}

h3 {
    font-size: 25px;
}


</style>
</head>
<body >
<form action="" method="POST"> 
<p>&larr; <a href="login.php">Home</a>
<h2>Selamat Datang</h2> <pre>
<h3>    Registrasi</h3> <pre><font size="4">
    <label for="name">Nama Lengkap</label><br>
    <input class="form-control" type="text" name="name" placeholder="Nama kamu" />

    <label for="name">Alamat </label><br>
    <input class="form-control" type="text" name="alamat" placeholder="Alamat" />
        
        
    <label for="username">Username</label><br>
    <input class="form-control" type="text" name="username" placeholder="Username" />
            
    <label for="email">Email</label><br>
    <input class="form-control" type="email" name="email" placeholder=" Email" />
            
    <label for="password">Password</label><br>
    <input class="form-control" type="password" name="password" placeholder="Password" />
           
    <input type="submit" class="btn btn-success btn-block" name="register" value="Daftar" />
    <p>Sudah punya akun? <a href="login.php">Login di sini</a></p></font><center> <font size="4">

</form>
</body>
</html>
