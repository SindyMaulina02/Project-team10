<?php

// require '../config/conection.php';
$connect = mysqli_connect("localhost", "root", "", "topup");


function query($query) {
    global $connect;
    $result = mysqli_query($connect, $query);
    $row = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function regis($data) {
    global $connect;

    $username = strtolower(stripslashes($data["username"]));
    $email = $data["email"];
    $gender = $data["jenis_kelamin"];
    $password = mysqli_real_escape_string($connect, $data["password"]);
    $confirm_password = mysqli_real_escape_string($connect, $data["confirm-password"]);

    //cek konfirmasi password
    if ($password !== $confirm_password) {
        echo "<script>
                    alert('Password tidak sesuai')    
                </script>";
        return false;
    }

    //cek username sudah ada atau belum
    $result = mysqli_query($connect, "SELECT username_login FROM users WHERE username_login = '$username' ");
    $result2 = mysqli_query($connect, "SELECT email FROM users WHERE email = '$email' ");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Username sudah terdaftar')    
            </script>";
        return false;
    } elseif (mysqli_fetch_assoc($result2)) {
        echo "<script>
                alert('Email sudah terdaftar')    
            </script>";
        return false;
    }  



    //Enskripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan user baru
    mysqli_query($connect, "INSERT INTO users VALUES ('', '$username', '$password', '$gender', '$email', '')");

    return mysqli_affected_rows($connect);
}

function tambah($data) {
    global $connect;

    $game = $data["game"];
    $username_game = $data["username_game"];
    $id_game = $data["id_game"];
    $diamond = $data["jumlah_diamond"];
    $pembayaran = $data["harga"];
    $tanggal = $data["tanggal"];

    $query = "INSERT INTO pengelola  VALUES ('', '$game' ,'$username_game' , '$id_game', '$diamond', '$pembayaran', '$tanggal')";
    mysqli_query($connect, $query);

    return mysqli_affected_rows($connect);
}

function cari($keyword) {
    $query = "SELECT * FROM pengelola
                WHERE 
            username LIKE '%$keyword%' OR 
            id_game LIKE '%$keyword%' 
            ";

    return query($query);
}

function hapus($id) {
    global $connect;
    mysqli_query($connect, "DELETE FROM pengelola WHERE id = $id");

    return mysqli_affected_rows($connect);
}

function ubah($data) {
    global $connect;

    $id      = $data["id"];
    $game = $data["game"];
    $username_game = $data["username_game"];
    $id_game = $data["id_game"];
    $tanggal = $data["tanggal"];

    //query insert
    $query = "UPDATE pengelola SET 
                game     = '$game',
                username    = '$username_game',
                id_game = '$id_game',
                tanggal_pembayaran  = '$tanggal'

              WHERE id = $id  
    
            ";
    mysqli_query($connect, $query);

    return mysqli_affected_rows($connect);
}