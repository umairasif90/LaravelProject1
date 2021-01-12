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
    <title>footer</title>
</head>
<body>
    <div class="container-fluid footer py-4 d-flex justify-content-around">
    <div class="container">
    <h5>Sky Travel</h5>
    <p>+00 123 4567</p>
    <p>29 Land St, Lorem City, CA</p>
    </div>

    <div class="container">
    <h5>Customer Services</h5>
    <p><a href="#">FAQs</a></p>
    <p><a href="#">Modify / Cancel Reservations</a></p>
    <p><a href="#">Retrieve Hotel Bill</a></p>
    <p><a href="#">Customer Service</a></p>
    </div>

    <div class="container">
    <h5>Connect with us</h5>
    <div class="d-flex">
    <p><a href="#"><i class="fab fa-facebook-f px-4"></i></a></p>
    <p><a href="#"><i class="fab fa-twitter px-4"></i></a></p>
    <p><a href="#"><i class="fab fa-instagram px-4"></i></a></p>
    </div>
    </div>
    </div>

    <!--Secondary footer-->
    <div class="container-fluid sec-footer">
    <div class="container p-1">
    <p class="mb-1">Copyright &copy; Sky Travel 2021. All rights reserved.</p>
    </div>
    </div>
</body>
</html>