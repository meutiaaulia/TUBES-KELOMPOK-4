<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;700;800&display=swap" rel="stylesheet">

    <title>KIDDY BANK - Dashboard</title>
</head>
<style>
    body {
        font-family: 'Nunito';
        font-size: 20px;
    }

    nav {
        font-size: 20px;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white">
        <img src="logo.svg" height="50" class="d-inline-block align-center" alt="" loading="lazy" style="margin-top: -20px">
        <a class="navbar-brand" href=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav" style="margin-left: 0.5rem;">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="aboutus.php" style="color: rgba(227, 224, 243, 1);"><b>About Us</b><span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="home.php" style="color: rgba(227, 224, 243, 1);"><b>Home</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="belanja.php" style="color: #252525;"><b>Shopping</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tracking.php" style="color: rgba(227, 224, 243, 1);"><b>Tracking</b></a>
                </li>
            </ul>
            <div class="collapse navbar-collapse justify-content-end">
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="ewallet.php">
                                <img src="wallets.svg" alt="" height="40">
                            </a>
                        </li>
                        <li class="nav-item" style="outline-color: #252525;">
                            <a class="nav-link btn btn-outline-dark btn-lg" href="signup.php" style="background-color: #26E0AC; margin-left: 1rem;"><b>Sign In</b></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3">
            <div class="col mb-4">
                <div class="card shadow bg-white rounded">
                    <img src="2.jpeg" class="card-img-top" alt="..." height="200">
                    <div class="card-body">
                        <h5 class="card-title">Voucher Belanja Gramedia Rp100.000</h5>
                        <p class="card-text"><i>75 points</i></p>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-outline-dark btn-block" name="btn-add-to-cart" style="color:white; background-color: #26E0AC;"><b>Tambahkan ke keranjang</b></button>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card shadow bg-white rounded">
                    <img src="1.jpeg" class="card-img-top" alt="..." height="225">
                    <div class="card-body">
                        <h5 class="card-title">Voucher Timezone Rp50.000</h5>
                        <p class="card-text"><i>100 points</i></p>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-outline-dark btn-block" name="btn-add-to-cart" style="color:white; background-color: #26E0AC;"><b>Tambahkan ke keranjang</b></button>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card shadow bg-white rounded">
                    <img src="3.jpeg" class="card-img" alt="..." height="225">
                    <div class="card-body">
                        <h5 class="card-title">Voucher Toys Kingdom Rp200.000</h5>
                        <p class="card-text"><i>300 points</i></p>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-outline-dark btn-block" name="btn-add-to-cart" style="color:white; background-color: #26E0AC;"><b>Tambahkan ke keranjang</b></button>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card shadow bg-white rounded">
                    <img src="4.jpeg" class="card-img" alt="..." height="224">
                    <div class="card-body">
                        <h5 class="card-title">Cashback Transtudio Rp100.000</h5>
                        <p class="card-text"><i>200 points</i></p>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-outline-dark btn-block" name="btn-add-to-cart" style="color:white; background-color: #26E0AC;"><b>Tambahkan ke keranjang</b></button>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card shadow bg-white rounded">
                    <img src="5.jpeg" class="card-img" alt="..." height="225">
                    <div class="card-body">
                        <h5 class="card-title">Cashback Dufan Rp150.000</h5>
                        <p class="card-text"><i>250 points</i></p>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-outline-dark btn-block" name="btn-add-to-cart" style="color:white; background-color: #26E0AC;"><b>Tambahkan ke keranjang</b></button>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card shadow bg-white rounded">
                    <img src="6.jpeg" class="card-img" alt="..." height="225">
                    <div class="card-body">
                        <h5 class="card-title">Cashback Tokopedia Rp100.000</h5>
                        <p class="card-text"><i>75 points</i></p>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-outline-dark btn-block" name="btn-add-to-cart" style="color:white; background-color: #26E0AC;"><b>Tambahkan ke keranjang</b></button>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card shadow bg-white rounded">
                    <img src="6.jpeg" class="card-img" alt="..." height="225">
                    <div class="card-body">
                        <h5 class="card-title">Cashback Tokopedia Rp100.000</h5>
                        <p class="card-text"><i>75 points</i></p>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-outline-dark btn-block" name="btn-add-to-cart" style="color:white; background-color: #26E0AC;"><b>Tambahkan ke keranjang</b></button>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card shadow bg-white rounded">
                    <img src="2.jpeg" class="card-img-top" alt="..." height="200">
                    <div class="card-body">
                        <h5 class="card-title">Voucher Belanja Gramedia Rp100.000</h5>
                        <p class="card-text"><i>75 points</i></p>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-outline-dark btn-block " name="btn-add-to-cart" style="color:white; background-color: #26E0AC;"><b>Tambahkan ke keranjang</b></button>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card shadow bg-white rounded">
                    <img src="4.jpeg" class="card-img" alt="..."height="224">
                    <div class="card-body">
                        <h5 class="card-title">Cashback Transtudio Rp100.000</h5>
                        <p class="card-text"><i>200 points</i></p>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-outline-dark btn-block" name="btn-add-to-cart" style="color:white; background-color: #26E0AC;"><b>Tambahkan ke keranjang</b></button>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>