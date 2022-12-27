



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
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
                        <img src="../../assets/images//user/user.png" alt="user" class="img-user">
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
                        <a class="dropdown-item" href="#">
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
                <a class="nav-link px-3 text-white" href="#">
                    <i class="fa fa-sign-out fa-lg box-icon" aria-hidden="true"></i>LogOut
                </a>
            </nav>
        </div>
    </div>

    <!-- Sidebar end -->

    <div class="main-pages">


        <div class="row g-2">
            <div class="col-12 col-lg-6 w-100">
                <div class="d-block rounded shadow bg-white p-3">
                    <div>
                        <div class="d-flex justify-content-between gap-5 title-table w-100">
                            <h1>Halo Admin</h1>
                            <form class="d-flex " role="search">
                                <table>
                                    <tr>
                                        <td>
                                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                        </td>
                                        <td>
                                            <button class="btn btn-outline-success" type="submit">Search</button>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                        <div class="admin-description mt-5">
                            <p>Jangan lupa untuk selalu <b>Logout</b> halaman ini setelah menggunakan fasilitas administrasi ini</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 w-100 ">
                <div class="d-block rounded shadow bg-white p-3 ">
                    <div class="w-100 ps-5">
                        <div class="d-flex justify-content-between align-items-center gap-5 title-table w-100">
                            <div class="admin-description mt-5">
                                <div id="carouselExampleIndicators" class="carousel slide">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="../../assets/images/carousel/carousel-1.jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="../../assets/images/carousel/carousel-1.jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="../../assets/images/carousel/carousel-1.jpg" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
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