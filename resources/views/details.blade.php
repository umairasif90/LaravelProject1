@include('header')

<br><br>
<!--Details and Payment-->
        <!--Hotel and Room info-->
        <div class="container hr align-text-center">
        <div class="card hr2 py-4">
    <div class="card-body" style="text-align: center;">
    <label style="font-weight: bold;" for="">Hotel Name</label>  
    <p class="card-text"><input type="hidden" name="hotelname" value="{{$hotelname}}" id=""><i class="px-2 fas fa-hotel"></i>{{$hotelname}}</p>
    <label style="font-weight: bold;" for="">Room Name</label>  
    <p class="card-text"><input type="hidden" name="roomname" value="{{$roomname}}" id=""><i class="px-2 fas fa-bed"></i>{{$roomname}}</p>
    <label style="font-weight: bold;" for="">Room Price</label>  
    <p class="card-title"><input type="hidden" name="roomprice" value="{{$roomprice}}"><i class="px-2 fas fa-money-check"></i>{{$roomprice}}</p>
      
    </div>
    </div>
  </div>
          </div>
        <!--Hotel and room info after selection Ends-->
<br><br><br>

<!--Details of Clients-->
<div class="container">
<h5>Get Ready For Your Next Day</h5>
<p>When you book direct on hyatt.com, you’re getting our best rate guaranteed.</p>
<p><small>*All fields are required</small></p>
<form class="needs-validation" action="/clientdetails" method="post" enctype="multipart/form-data" novalidate>
@csrf
<p class="card-text"><input type="hidden" name="hotelname" value="{{$hotelname}}" id=""></p>
<p class="card-text"><input type="hidden" name="hotelroom" value="{{$roomname}}" id=""></p>
<p class="card-title"><input type="hidden" name="roomprice" value="{{$roomprice}}"></p>
  <div class="form-row">
  <h5>Name</h5>
  <div class="col-md-3 mb-3">
     <br><br> <label for="validationCustom04">Prefix</label>
      <select class="custom-select" name="clientprefix" id="validationCustom04" name="clientprefix" required>
        <option selected disabled value="">-</option>
        <option>Dr.</option>
        <option>Miss.</option>
        <option>Mr.</option>
        <option>Mrs.</option>
      </select>
  </div>
    <div class="col-md-4 mb-3">
    <br><br> <label for="validationCustom01">First name</label>
      <input type="text" class="form-control" name="clientfirstname" id="validationCustom01" value="" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
    <br><br> <label for="validationCustom02">Last name</label>
      <input type="text" class="form-control" name="clientlastname" id="validationCustom02" value="" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>    
  <!--contact info-->
  <div class="">
  <h5>Contact Information</h5>
  <div class="col-md-4 mb-3">
     <label for="validationCustom03">Email</label>
      <input type="email" name="clientemail" class="form-control" id="validationCustom03" value="" required>
    </div>
    <div class="col-md-4 mb-3">
     <label for="inputEmail4">Phone</label>
      <input type="text" name="clientphone" class="form-control" id="inputEmail4" value="" required>
    </div>
  </div>
<!--Check in and Check out-->
<h5>Check in and Check out details</h5>
<div class="form-row">
<div class="col-md-4 mb-3">
     <label for="validationCustom03">Check in date:</label>
      <input type="date" name="checkindate" class="form-control" id="validationCustom03" value="" required>
    </div>
    <div class="col-md-4 mb-3">
     <label for="validationCustom03">Check out date:</label>
      <input type="date" name="checkoutdate" class="form-control" id="validationCustom03" value="" required>
    </div>
</div>
<!--Address information-->
<h5>Address Information</h5>
<div class="col-md-4 mb-3">
     <label for="validationCustom03">Country</label>
      <input type="text" name="clientcountry" class="form-control" id="validationCustom03" value="" required>
    </div>

    <div class="col-md-4 mb-3">
     <label for="validationCustom03">Address</label>
      <input type="text" name="clientaddress" class="form-control" id="validationCustom03" value="" required>
    </div>
    <div class="col-md-4 mb-3">
     <label for="validationCustom03">City</label>
      <input type="text" name="clientcity" class="form-control" id="validationCustom03" value="" required>
    </div>

  <div class="form-row">
  <div class="col-md-4 mb-3">
     <label for="validationCustom03">State</label>
      <input type="text"  name="clientstate" class="form-control" id="validationCustom03" value="" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">Zip</label>
      <input type="text" name="clientzip" class="form-control" id="validationCustom05" required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
</div>
<!--Details of clients ends-->
<br><br><br>
       

        <!--footer-->
        @include('footer')
        <!--footer ends-->

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