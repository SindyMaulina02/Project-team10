<?php



?>



<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Game Store</title>
    <link rel="stylesheet" href="assets/css/landingpage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="
    sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <nav id="home">
        <div class="container ">
            <h1><a href="#home">Mobile Game Store</a></h1>
            <div></div>
            <ul class="ms-auto">
                <li><a href="#home">Home</a></li>
                <li><a href="#tentang">Produk</a></li>
                <li><a href="customer/profile.php">Profile</a></li>
                <li><a href="contactUs1.php">Contact Us</a></li>
                <!-- <button class="btn-login"><a href="login/login.php">Login</a></button> -->
                <a href="index.php" class="btn btn-danger mt-3 p-2"><i class="fa-solid fa-backward"></i></a>
            </ul>
        </div>
    </nav>
    <div id="home">
        <div class="home">

            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/images/game/game.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/game/game3.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/game/game2.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="tentang">
        <div class="tentang">
            <div class="container text-center">

                <div class="link">

                    <h2>Game popular</h2>
                    <div class="produk">

                        <div class="row row-cols-auto">

                            <a href="#harga-valo">
                                <div class="col"><img src="assets/images/game/valorant.jpg" alt="">
                                    <div class="judul-produk">Valorant</div>
                                </div>
                            </a>

                            <a href="#harga-pubg">
                                <div class="col"><img src="assets/images/game/pubgm.jpg" alt="">
                                    <div class="judul-produk">PUBG</div>
                                </div>
                            </a>
                            <a href="#harga-mlbb">
                                <div class="col"><img src="assets/images/game/ml.jpg" alt="">
                                    <div class="judul-produk">Mobile Legends</div>
                                </div>
                            </a>
                            <a href="#harga-aov">
                                <div class="col"><img src="assets/images/game/aov.jpg" alt="">
                                    <div class="judul-produk">Arena Of Valor</div>
                                </div>
                            </a>
                            <a href="#harga-genshin">
                                <div class="col"><img src="assets/images/game/GenshinImpact.jpg" alt="">
                                    <div class="judul-produk">Genshin Impact</div>
                                </div>
                            </a>
                            <a href="#harga-ff">
                                <div class="col"><img src="assets/images/game/ff.png" alt="">
                                    <div class="judul-produk">Free Fire</div>
                                </div>
                            </a>




                        </div>
                    </div>


                </div>
            </div>
            <div class="overlay title-popup" id="harga-valo">
                <div class="popup">
                    <a class="close" href="#populer">&times;</a>

                </div>
                <div class="title-popup d-flex justify-content-center align-items-center">
                    <h2 class="text-center text-dark">COMING SOON :)</h2>
                </div>

            </div>
            <div class="overlay" id="harga-pubg">

                <div class="popup">
                    <h2>Harga UC PUBM</h2>
                    <a class="close" href="#populer">&times;</a>
                    <br>
                    <div class="content">
                        <div class="harga">
                            <p>29 <i class="fa-solid fa-money-bill"></i></i></p>
                            <span>Rp 10.000</span>
                            <a href="diamonds/pubg/29.php" class="btn-primary btn mt-1">Beli</a>
                        </div>
                        <br>
                        <div class="harga">
                            <p>40 <i class="fa-solid fa-money-bill"></i></p>
                            <span>Rp 12.000</span>
                            <a href="diamonds/pubg/40.php" class="btn-primary btn mt-1">Beli</a>
                        </div>
                        <br>
                        <div class="harga">
                            <p>70 <i class="fa-solid fa-money-bill"></i></p>
                            <span>Rp 14.000</span>
                            <a href="diamonds/pubg/70.php" class="btn-primary btn mt-1">Beli</a>
                        </div>
                        <br>
                        <div class="harga">
                            <p>125 <i class="fa-solid fa-money-bill"></i></p>
                            <span>Rp 25.000</span>
                            <a href="diamonds/pubg/125.php" class="btn-primary btn mt-1">Beli</a>
                        </div>
                        <br>
                        <div class="harga">
                            <p>
                                250 <i class="fa-solid fa-money-bill"></i>
                            </p>
                            <span>Rp 50.000</span>
                            <a href="diamonds/pubg/250.php" class="btn-primary btn mt-1">Beli</a>
                        </div>
                        <br>
                        <div class="harga">
                            <p>
                                500 <i class="fa-solid fa-money-bill"></i>
                            </p>
                            <span>Rp 100.000</span>
                            <a href="diamonds/pubg/500.php" class="btn-primary btn mt-1">Beli</a>
                        </div>
                        <br>
                        <div class="harga">
                            <p>
                                1250 <i class="fa-solid fa-money-bill"></i>
                            </p>
                            <span>Rp 250.000</span>
                            <a href="diamonds/pubg/1250.php" class="btn-primary btn mt-1">Beli</a>
                        </div>
                        <br>
                        <div class="harga">
                            <p>
                                2500 <i class="fa-solid fa-money-bill"></i>
                            </p>
                            <span>Rp 500.000</span>
                            <a href="diamonds/pubg/2500.php" class="btn-primary btn mt-1">Beli</a>
                        </div>


                    </div>
                </div>

            </div>
            <div class="overlay" id="harga-mlbb">

                <div class="popup">
                    <h2>Harga Diamond MLBB</h2>
                    <a class="close" href="#populer">&times;</a>
                    <br>
                    <div class="content">
                        <div class="harga">
                            <p>25 <i class="fa-solid fa-gem"></i></i></p>
                            <span>Rp 10.000</span>
                            <a href="" class="btn-primary btn mt-1">Beli</a>
                        </div>
                        <br>
                        <div class="harga">
                            <p>40 <i class="fa-solid fa-gem"></i></p>
                            <span>Rp 12.000</span>
                            <a href="" class="btn-primary btn mt-1">Beli</a>
                        </div>
                        <br>
                        <div class="harga">
                            <p>53 <i class="fa-solid fa-gem"></i></p>
                            <span>Rp 20.000</span>
                            <a href="" class="btn-primary btn mt-1">Beli</a>
                        </div>
                        <br>
                        <div class="harga">
                            <p>77 <i class="fa-solid fa-gem"></i></p>
                            <span>Rp 30.000</span>
                            <a href="" class="btn-primary btn mt-1">Beli</a>
                        </div>
                        <br>
                        <div class="harga">
                            <p>
                                217 <i class="fa-solid fa-gem"></i>
                            </p>
                            <span>Rp 68.000</span>
                            <a href="" class="btn-primary btn mt-1">Beli</a>
                        </div>
                        <br>
                        <div class="harga">
                            <p>
                                256 <i class="fa-solid fa-gem"></i>
                            </p>
                            <span>Rp 84.000</span>
                            <a href="" class="btn-primary btn mt-1">Beli</a>
                        </div>
                        <br>
                        <div class="harga">
                            <p>
                                503 <i class="fa-solid fa-gem"></i>
                            </p>
                            <span>Rp 158.000</span>
                            <a href="" class="btn-primary btn mt-1">Beli</a>
                        </div>
                        <br>
                        <div class="harga">
                            <p>
                                1708 <i class="fa-solid fa-gem"></i>
                            </p>
                            <span>Rp 527.000</span>
                            <a href="" class="btn-primary btn mt-1">Beli</a>
                        </div>


                    </div>
                </div>

            </div>
            <div class="overlay title-popup" id="harga-aov">
                <div class="popup">
                    <a class="close" href="#populer">&times;</a>

                </div>
                <div class="title-popup d-flex justify-content-center align-items-center">
                    <h2 class="text-center text-dark">COMING SOON :)</h2>
                </div>

            </div>

            <div class="overlay" id="harga-genshin">

                <div class="popup">
                    <h2>Harga Diamond Genshin</h2>
                    <a class="close" href="#populer">&times;</a>
                    <br>
                    <div class="content">
                        <div class="harga">
                            <p>60 <i class="fa-solid fa-gem"></i></i></p>
                            <span>Rp 16.000</span>
                            <a href="" class="btn-primary btn mt-1">Beli</a>
                        </div>
                        <br>
                        <div class="harga">
                            <p>300 <i class="fa-solid fa-gem"></i></p>
                            <span>Rp 79.000</span>
                            <a href="" class="btn-primary btn mt-1">Beli</a>
                        </div>
                        <br>
                        <div class="harga">
                            <p>980 <i class="fa-solid fa-gem"></i></p>
                            <span>Rp 249.000</span>
                            <a href="" class="btn-primary btn mt-1">Beli</a>
                        </div>
                        <br>
                        <div class="harga">
                            <p>1980 <i class="fa-solid fa-gem"></i></p>
                            <span>Rp 479.000</span>
                            <a href="" class="btn-primary btn mt-1">Beli</a>
                        </div>
                        <br>
                        <div class="harga">
                            <p>
                                3280 <i class="fa-solid fa-gem"></i>
                            </p>
                            <span>Rp 799.000</span>
                            <a href="" class="btn-primary btn mt-1">Beli</a>
                        </div>
                        <br>
                        <div class="harga">
                            <p>
                                6480 <i class="fa-solid fa-gem"></i>
                            </p>
                            <span>Rp 1.599.000</span>
                            <a href="" class="btn-primary btn mt-1">Beli</a>
                        </div>
                        <br>
                        <div class="harga">
                            <p>
                                Blessing Welkin <i class="fa-solid fa-gem"></i>
                            </p>
                            <span>Rp 79.000</span>
                            <a href="" class="btn-primary btn mt-1">Beli</a>
                        </div>
                        <br>


                    </div>
                </div>

            </div>
            <div class="overlay title-popup" id="harga-ff">
                <div class="popup">
                    <a class="close" href="#populer">&times;</a>
                </div>
                <div class="title-popup d-flex justify-content-center align-items-center">
                    <h2 class="text-center text-dark">COMING SOON :)</h2>
                </div>

            </div>
        </div>
        <div id="contact">
            <div class="wrapper">
                <div class="footer">
                    <div class="footer-section text-white">
                        <h3>Mobile Game Store</h3>
                        <p>Mobilegamestore.id adalah Platform webisite top up game termurah, tercepat, dan
                            terpercaya di Indonesia. Proses cepat membuat Anda nyaman Top Up disini. Dengan
                            Menyediakan berbagai macam pembayaran Transfer Bank,
                            E-Wallet, Scan QR, Alfamart, & Indomart dan pasti memudahkan anda untuk Top Up akun
                            games kalian.</p>
                    </div>
                    <div class="footer-section">
                        <h3>Menu</h3>
                        <ul>
                            <li><a class="text-white" href="#home">Home</a></li>
                            <li><a class="text-white" href="#tentang">Produk</a></li>
                            <li><a class="text-white" href="http://wa.me/6295379114998">Join reseller</a></li>
                            <li><a class="text-white" href="#joincomunitas">Join comunitas</a></li>
                            <li><a class="text-white" href="contactus.html">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="footer-section">
                        <h3>Partnership</h3>
                        <ul>
                            <li><a class="text-white" href="https://www.ulbi.ac.id/">Universitas Logistik dan Bisnis
                                    Internasional</a></li>
                            <li><a class="text-white" href="https://if.ulbi.ac.id/">Prodi Teknik Informatika</a></li>
                            <li><a class="text-white"
                                    href="https://www.instagram.com/himatifpoltekpos_/?hl=id">HIMATIF</a></li>
                            <li><a class="text-white" href="https://www.instagram.com/logic_coffeee/?hl=id">Logic
                                    Coffee</a></li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
    </section>
    </div>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
        crossorigin="anonymous"></script>


</body>

</html>