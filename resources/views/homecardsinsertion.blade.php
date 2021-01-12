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
    <title>Admin DashBoard</title>
</head>
<body>
<h1 class="h1 adminhead text-center">Admin DashBoard</h1>

<div class="all">
<div class="hotelinsertion container">
<h2>Insertion of Hotel Info to Homepage</h2>
<form action="/insertdata" method="post" enctype="multipart/form-data">
@csrf
    <label for="">Hotel Name</label>
    <input type="text" name="hotelname">
<br>
<label for="">Hotel Price</label>
    <input type="text" name="priceofhotel">
<br>
<label for="">Hotel Image</label>
    <input type="file" name="image">
<br>
<input class="btn btn-warning" type="submit" value="submit">
</form>
<br>
<br>
</div>

<div class="touristinsertion container">
<h2>Insertion of Tourists Spots Info to Homepage</h2>
<form action="/inserttouristspotshomepage" method="post" enctype="multipart/form-data">
@csrf
    <label for="">Tourist Spot Name</label>
    <input type="text" name="tname">
<br>
<label for="">Tourist Spot Description</label>
    <input type="text" name="tdesc">
<br>
<label for="">Tourist Spot Image</label>
    <input type="file" name="timage">
<br>
    <input class="btn btn-secondary" type="submit" value="submit">
</form>
<br>
<br>
</div>

<div class="hotelsub container">
<h2>Insertion of all the Hotels</h2>
<form action="/insertionofhotels" method="post" enctype="multipart/form-data">
@csrf
    <label for="">Hotel Name</label>
    <input type="text" name="hotelname">
<br>
<label for="">Hotel Price</label>
    <input type="text" name="hotelprice">
<br>
<label for="">Hotel Image</label>
    <input type="file" name="hotelimage">
<br>
    <input class="btn btn-warning" type="submit" value="submit">
</form>
<br>
<br>
</div>

<div class="rooms container">
<h2>Avari Hotel Rooms Insertion</h2>
<form action="/insertionofrooms" method="post" enctype="multipart/form-data">
@csrf
    <label for="">Room Name</label>
    <input type="text" name="roomname">
<br>
<label for="">Room Description</label>
    <input type="text" name="roomdesc">
<br>
<label for="">Room Price</label>
    <input type="text" name="roomprice">
<br>
<label for="">Room image</label>
    <input type="file" name="roomimage">
<br>
    <input class="btn btn-secondary" type="submit" value="submit">
</form>
</div>

<!--Registered Users Data-->
<br><br>
<h2>Registered Users</h2>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>

<!--Reservations of clients-->
<br><br>
<h2>Reservation of Clients</h2>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Hotel Name</th>
      <th scope="col">Room Name</th>
      <th scope="col">Price</th>
      <th scope="col">Client Name</th>
      <th scope="col">Client Phone Number</th>
      <th scope="col">Check-In Date</th>
      <th scope="col">Check-out Date</th>
      <th scope="col">Client Country</th>

    </tr>
  </thead>
  <tbody>
  @foreach ($data5 as $item)
    <tr>
    <form action="/userdetails" method="get">
      <td><input type="hidden" name="ID" value="{{$item['id']}}"> {{$item['id']}}</td>
      <td><input type="hidden" name="hotelname" value="{{$item['hotelname']}}"> {{$item['hotelname']}}</td>
      <td><input type="hidden" name="hotelroom" value="{{$item['hotelroom']}}"> {{$item['hotelroom']}}</td>
      <td><input type="hidden" name="roomprice" value="{{$item['roomprice']}}"> {{$item['roomprice']}}</td>
      <td><input type="hidden" name="clientname" value="{{$item['clientname']}}"> {{$item['clientname']}}</td>
      <td><input type="hidden" name="clientphone" value="{{$item['clientphone']}}"> {{$item['clientphone']}}</td>
      <td><input type="hidden" name="checkindate" value="{{$item['checkindate']}}"> {{$item['checkindate']}}</td>
      <td><input type="hidden" name="checkoutdate" value="{{$item['checkoutdate']}}"> {{$item['checkoutdate']}}</td>
      <td><input type="hidden" name="clientcountry" value="{{$item['clientcountry']}}"> {{$item['clientcountry']}}</td>
    </tr>
    @endforeach
  </tbody>
  
</table>

</div>
       <!--Js Bootstrap CDN-->
       <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>

        <!--custom JS Link-->
        <script src="{{ asset('custom.js')}}"></script>

        <!--Owl Js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
            integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
            crossorigin="anonymous"></script>
</body>
</html>