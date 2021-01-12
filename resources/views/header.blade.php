<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap CDN-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!--Custom CSS Link-->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <!--Font awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <!--Owl CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" />
    <title>Sky Travel</title>
</head>

<body>
      <!--Top header-->
      <header id="header">
        <div class="top-head d-flex justify-content-btween px-4 py-1">
            <p class="px-3 top-head font-size-12 m-0"><i class="fas fa-map-marker-alt"></i> 29 Land St, Lorem City, CA
            </p>
            <p class="px-3 top-head font-size-12 m-0"><i class="fas fa-phone-alt"></i> +00 123 4567</p>
            <div class="top-head font-rale font-size-14 ml-auto">
                <a href="#" class="px-3 border-right border-left top-head"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="px-3 border-right top-head"><i class="fab fa-twitter"></i></a>
                <a href="#" class="px-3 border-right top-head"><i class="fab fa-instagram"></i></a>
                <a href="#" class="px-3 border-right top-head"><i class="fab fa-pinterest-p"></i></a>
                <a href="/adminform" class="px-3 border-right top-head">Admin Login</a>
                <a href="/loginform" class="px-3 border-right top-head">User Login</a>
                <a href="/userform" class="px-3 border-right top-head">Signup</a>
            </div>
        </div>
      </header>
      <!--Top header ends-->

      <!--Primary Navigation-->
        <nav class="primary-nav navbar navbar-expand-lg navbar-light color-primary-bg">
            <a class="navbar-brand color-white" href="#">Sky Travel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
                            href="#">Our Services
                            <div class="dropdown-menu top-head" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Tourist Spots</a>
                                <a class="dropdown-item" href="#">Travel Information</a>
                                <a class="dropdown-item" href="#">Hotels Information</a>
                                <a class="dropdown-item" href="#">Resturants Information</a>
                                <a class="dropdown-item" href="#">Resorts Information</a>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
                <div class="form__group field">
                    <input type="input" class="form__field" placeholder="Name" name="name" id='name' required />
                    <label for="name" class="form__label">Search</label>
                </div>
            </div>
        </nav>
      <!--End of Primary Navigation-->
</body>
</html>