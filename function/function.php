<?php

// require './config/conection.php';
$connect = mysqli_connect("localhost", "root", "", "topup");


function query($query)
{
    global $connect;
    $result = mysqli_query($connect, $query);
    $row = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function regis($data)
{
    global $connect;

    $username = strtolower(stripslashes($data["username"]));
    $email = $data["email"];
    $gender = $data["gender"];
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
    }  elseif (mysqli_fetch_assoc($result2)) {
        echo "<script>
                alert('Email sudah terdaftar')    
            </script>";
        return false;
        
    }



    //Enskripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan user baru
    mysqli_query($connect, "INSERT INTO users VALUES ('', '$username', '$password', '$gender', '$email')");

    return mysqli_affected_rows($connect);

    





}

