<?php

require '../../function/function.php';




//Cek apakah tombol sudah ditekan atau belom
if (isset($_POST["submit"])) {

    if(tambah($_POST) > 0) {
        echo
        "<script>
            alert('Top Up berhasil');
            window.location.href = '../../homepage.php';
        </script>";
    } else {
        echo
        "<script>
            alert('Data gagal ditambahkan :( ');
        </script>";
    }
}


?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
    <style>
       table td {
        padding: .3em;
       }
    </style>


<body>
    <div class="header">

        <!--Content before waves-->
        <div class="inner-header flex">
            <!--Just the logo.. Don't mind this-->
            <!-- <svg version="1.1" class="logo" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500" xml:space="preserve"> -->
            <path fill="#FFFFFF" stroke="#000000" stroke-width="10" stroke-miterlimit="10" d="M57,283" />
            <g>
                <path fill="#fff" d="M250.4,0.8C112.7,0.8,1,112.4,1,250.2c0,137.7,111.7,249.4,249.4,249.4c137.7,0,249.4-111.7,249.4-249.4
            C499.8,112.4,388.1,0.8,250.4,0.8z M383.8,326.3c-62,0-101.4-14.1-117.6-46.3c-17.1-34.1-2.3-75.4,13.2-104.1
            c-22.4,3-38.4,9.2-47.8,18.3c-11.2,10.9-13.6,26.7-16.3,45c-3.1,20.8-6.6,44.4-25.3,62.4c-19.8,19.1-51.6,26.9-100.2,24.6l1.8-39.7		c35.9,1.6,59.7-2.9,70.8-13.6c8.9-8.6,11.1-22.9,13.5-39.6c6.3-42,14.8-99.4,141.4-99.4h41L333,166c-12.6,16-45.4,68.2-31.2,96.2	c9.2,18.3,41.5,25.6,91.2,24.2l1.1,39.8C390.5,326.2,387.1,326.3,383.8,326.3z" />
            </g>
            </svg>
            <div class="title-form text-center mt-5">
                <h1>Pembayaran</h1>


            </div>


            <form action="" method="post" class="mt-5 d-flex flex-column justify-content-center align-items-center">
                <table>
                    <tr>
                        <td><label for="game">Game</label></td>
                        <td>:</td>
                            <td><input type="text" placeholder="isi id game....." value="Genshin Impact"  name="game" id="game" required class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="id_game">ID Game</label></td>
                        <td>:</td>
                        <td><input type="number" placeholder="isi id game....." maxlength="8" name="id_game" id="id_game" required class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="username">Username Game</label></td>
                        <td>:</td>
                        <td><input type="text" placeholder="isi username ......" name="username_game" id="username" required class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="jumlah_diamond">Jumlah Diamond</label></td>
                        <td>:</td>
                        <td><input type="text" placeholder="isi jumlah_diamond..." value="3280"  name="jumlah_diamond" id="jumlah_diamond" require class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="harga">Harga</label></td>
                        <td>:</td>
                        <td><input type="harga" placeholder="isi harga...."  value="799000" name="harga" id="harga" required class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="tanggal">Tanggal Pembayaran</label></td>
                        <td>:</td>
                        <td><input type="date" placeholder="isi tanggal.." name="tanggal" id="tanggal" required class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <!-- <td><a href="index.php" class=" btn-primary"><i class="fa-solid fa-backward"></i></a></td> -->
                        <td></td>
                        <td><button type="submit" name="submit" class="btn btn-dark">BUY</button></td>
                    </tr>
                </table>
            </form>
            </form>

        </div>

        <!--Waves Container-->
        <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7)" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                </g>
            </svg>
        </div>
        <!--Waves end-->
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>