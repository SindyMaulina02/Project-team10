<?php 

    require '../../function/function.php';
    $pengelola = query("SELECT * FROM pengelola ORDER BY id DESC");

// $pengelola = query("SELECT * FROM pengelola c");  



    if (isset($_POST["search"])) {
        $pengelola = cari($_POST["keyword"]);
    }
    
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>

<body>


    <nav class="navbar navbar-expand-md navbar-light bg-light py-1">
        <div class="container-fluid">
            <button class="btn btn-default" id="btn-slider" type="button">
                <i class="fa fa-bars fa-lg" aria-hidden="true"></i>
            </button>
            <a class="navbar-brand me-auto text-danger" href="#">Dash<span class="text-warning">Board</span></a>
            <ul class="nav ms-auto">
                <li class="nav-item dropstart">
                    <a class="nav-link text-dark ps-3 pe-1" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                        <img src="../../assets/images/user/user.png" alt="user" class="img-user">
                    </a>
                    <div class="dropdown-menu mt-2 pt-0" aria-labelledby="navbarDropdown">
                        <div class="d-flex p-3 border-bottom mb-2">
                            <img src="../../assets/images//user/user.png" alt="user" class="img-user me-2">
                            <div class="d-block">
                                <p class="fw-bold m-0 lh-1">YourName</p>
                                <small>YourAccount@gmail.com</small>
                            </div>
                        </div>
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-user fa-lg me-3" aria-hidden="true"></i>Profile
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-cog fa-lg me-3" aria-hidden="true"></i>Setting
                        </a>
                        <hr class="dropdown-divider">
                        <a class="dropdown-item" href="../../index.php">
                            <i class="fa fa-sign-out fa-lg me-2" aria-hidden="true"></i>LogOut
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Sidebar -->


    <div class="slider" id="sliders">
        <div class="slider-head">
            <div class="d-block pt-4 pb-3 px-3">
                <img src="../../assets/images//user/user.png" alt="user" class="slider-img-user mb-2">
                <p class="fw-bold mb-0 lh-1 text-white">YourName</p>
                <small class="text-white">YourAccount@gmail.com</small>
            </div>
        </div>
        <div class="slider-body px-1">
            <nav class="nav flex-column ">
                <a class="nav-link px-3 active text-white" href="../home/home.php">
                    <i class="fa fa-home fa-lg box-icon" aria-hidden="true"></i>Home
                </a>
                <a class="nav-link px-3 text-white" href="../profile/profile.php">
                    <i class="fa fa-user fa-lg box-icon" aria-hidden="true"></i>Profile
                </a>
                <hr class="soft my-1 bg-white">
                <a class="nav-link px-3 text-white" href="../dashboard/dashboard.php">
                    <i class="fa fa-dashboard fa-lg box-icon" aria-hidden="true"></i>Dashboard
                </a>
                <a class="nav-link px-3 text-white" href="../customer/customer.php">
                    <i class="fa fa-users fa-lg box-icon" aria-hidden="true"></i>Customer
                </a>
                <hr class="soft my-1 bg-white">
                <a class="nav-link px-3 text-white" href="../../index.php">
                    <i class="fa fa-sign-out fa-lg box-icon" aria-hidden="true"></i>LogOut
                </a>
            </nav>
        </div>
    </div>

    <!-- Sidebar end -->

    <div class="main-pages">
            <div class="container-fluid">
                <div class="row g-2 mb-3">
                    <div class="col-12">
                        <div class="d-block bg-white rounded shadow p-3">
                            <h2>hello world</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum labore maiores facilis
                                optio illo tempora quod omnis veniam dolores. Est porro omnis, quae numquam velit
                                accusantium perferendis inventore sint consectetur.</p>
                        </div>
                    </div>
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="card p-2 shadow">
                            <div class="d-flex align-items-center px-2">
                                <i class="fa fa-plane float-start fa-3x py-auto" aria-hidden="true"></i>
                                <div class="card-body text-end">
                                    <h5 class="card-title">122</h5>
                                    <p class="card-text">Pleanning</p>
                                </div>
                            </div>
                            <div class="card-footer bg-white">
                                <small class="text-start fw-bold">Your Planning</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="card p-2 shadow">
                            <div class="d-flex align-items-center px-2">
                                <i class="fa-solid fa-money-bill-wave float-start fa-3x py-auto"></i>
                                <div class="card-body text-end">
                                    <h5 class="card-title">$ 123.05</h5>
                                    <p class="card-text">Money</p>
                                </div>
                            </div>
                            <div class="card-footer bg-white">
                                <small class="text-start fw-bold">Your Money</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="card p-2 shadow">
                            <div class="d-flex align-items-center px-2">
                                <i class="fa fa-calendar float-start fa-3x py-auto" aria-hidden="true"></i>
                                <div class="card-body text-end">
                                    <h5 class="card-title">122</h5>
                                    <p class="card-text">Pleanning</p>
                                </div>
                            </div>
                            <div class="card-footer bg-white">
                                <small class="text-start fw-bold">Your Schedule</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="card p-2 shadow">
                            <div class="d-flex align-items-center px-2">
                                <i class="fa fa-users float-start fa-3x py-auto" aria-hidden="true"></i>
                                <div class="card-body text-end">
                                    <h5 class="card-title">122</h5>
                                    <p class="card-text">Customer</p>
                                </div>
                            </div>
                            <div class="card-footer bg-white">
                                <small class="text-start fw-bold">Your Customer</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-2">
                    <div class="col-12 col-lg-6 w-100">
                        <div class="d-block rounded shadow bg-white p-3">
                            <div class="cust-table">
                                <div class="d-flex justify-content-between flex-wrap gap-5 title-table w-100">
                                    <h1>Pelanggan Terbaru</h1>
                                    <form class="d-flex " role="search" method="post">
                                        <table>
                                            <tr>
                                                <td>
                                                    <input class="form-control me-2" name="keyword" type="search" placeholder="Search"
                                                        aria-label="Search">
                                                </td>
                                                <td>
                                                    <button class="btn btn-outline-success"
                                                         name="search">Search</button>
                                                </td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>
                                <div class="table mt-5">
                                    <table class="table ms-0">
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Username</th>
                                            <th scope="col">ID Game</th>
                                            <th scope="col">Jumlah Diamond</th>
                                            <th scope="col">Pembayaran</th>
                                            <th scope="col">Tanggal Pembayaran</th>
                                        </tr>
                                        <?php $i = 1; ?>
                                        <?php foreach($pengelola as $admin) : ?>
                                        <tr>
                                        <td scope="row"><?= $i; ?></td>
                                            <td><?= $admin["username"]; ?></td>
                                            <td><?= $admin["id_game"]; ?></td>
                                            <td><?= $admin["diamond"]; ?></td>
                                            <td>Rp. <?= $admin["pembayaran"]; ?> </td>
                                            <td><?= $admin["tanggal_pembayaran"]; ?></td>
                                        </tr>
                                        <?php $i++; ?>
                                        <?php endforeach; ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>