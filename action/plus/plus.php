<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="../../assets/css/style.css"> -->
    
</head>

<style>
   .title-topup {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 20vh;
}

.form-topup {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    height: 70vh;
}
</style>

<body>
    <div class="title-topup">
        <h1>Top Up</h1>
    </div>

    <div class="form-topup">
        <form action="" method="post">
            <table>
                <tr>
                    <td><label for="id_game">ID Game</label></td>
                    <td>:</td>
                    <td><input type="number" placeholder="isi id game..." name="id_game" id="id_game" require class="form-control"></td>
                </tr>
                <tr>
                    <td><label for="username">Username Game</label></td>
                    <td>:</td>
                    <td><input type="text" placeholder="isi username....." name="username" id="username" require class="form-control"></td>
                </tr>
                <tr>
                    <td><label for="jurusan">Jurusan</label></td>
                    <td>:</td>
                    <td><input type="text" placeholder="isi jurusan" name="jurusan" id="jurusan" require class="form-control"></td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td>:</td>
                    <td><input type="email" placeholder="isi email" name="email" id="email" require class="form-control"></td>
                </tr>
                <tr>
                    <td><label for="gambar">Gambar</label></td>
                    <td>:</td>
                    <td><input type="text" placeholder="isi gambar" name="gambar" id="gambar" require class="form-control"></td>
                </tr>
                <tr>
                    <td><a href="index.php" class=" btn-primary"><i class="fa-solid fa-backward"></i></a></td>
                    <td></td>
                    <td><button type="submit" name="submit" class="btn btn-primary">Tambah data</button></td>
                </tr>
            </table>
        </form>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>