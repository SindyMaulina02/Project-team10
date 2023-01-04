<?php 
    session_start();

    require '../function/function.php';
    query("SELECT * FROM pengelola");

   // $username = $_POST["username"];
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="slider" id="sliders">
        <div class="slider-head">
            <div class="d-block pt-4 pb-3 px-3">
                <img src="../assets/images//user/user.png" alt="user" class="slider-img-user mb-2">
                <p class="fw-bold mb-0 lh-1 text-white">Halo </p>
                <small class="text-white">YourAccount@gmail.com</small>
            </div>
        </div>
        <div class="slider-body px-1">
            <nav class="nav flex-column ">
                <a class="nav-link px-3 active text-white" href="home.php">
                    <i class="fa fa-home fa-lg box-icon" aria-hidden="true"></i>Home
                </a>
                <hr class="soft my-1 bg-white">
                <a class="nav-link px-3 text-white" href="profile.php">
                    <i class="fa fa-user fa-lg box-icon" aria-hidden="true"></i>Profile
                </a>
                <hr class="soft my-1 bg-white">
                <a class="nav-link px-3 text-white" href="../dashboard/dashboard.php">
                    <i class="fa fa-gem fa-lg box-icon" aria-hidden="true"></i>Diamond
                </a>
                <hr class="soft my-1 bg-white">
                <a class="nav-link px-3 text-white" href="../../index.php">
                    <i class="fa fa-sign-out fa-lg box-icon" aria-hidden="true"></i>LogOut
                </a>
            </nav>
        </div>
    </div>


    <div class="main-pages">


        <div class="row g-2">
            <div class="col-12 col-lg-6 w-100">
                <div class="d-block rounded shadow bg-white p-3">
                    <div>
                        <div class="d-flex justify-content-between gap-5 title-table w-100">
                            <h1>Halo Admin</h1>
                        </div>
                        <div class="admin-description mt-5">
                            <p>Jangan lupa untuk selalu <b>Logout</b> halaman ini setelah menggunakan fasilitas administrasi ini</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 w-50">
                <div class="card p-2 shadow">
                    <div class="d-flex align-items-center px-2">
                        <img src="../assets/images//user/user.png" alt="">
                        <div class="card-body text-end">
                            <ul class="card-title text-center navbar-nav">
                                <li>Admin</li>
                                <li>Project Tugas Besar</li>
                                <li>23 Desember 2022</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-footer bg-white">
                        <small class="text-start fw-bold">Admin Profile</small>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 w-50">
                <div class="card p-2 shadow">
                    <div class="d-flex align-items-center px-2">
                        <div class="card-body">
                            <h5 class="card-title">My Team</h5>
                            <ol>
                                <li>
                                    <p class="card-text">M. Fachriza Farhan (714220005) </p>
                                </li>
                                <li>
                                    <p class="card-text">Sindy Maulina (714220018) </p>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="card-footer bg-white">
                        <small class="text-start fw-bold">Team-10</small>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>