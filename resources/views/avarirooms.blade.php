@include('header')

<br><br>
<!--Avari Rooms Selection List-->
        <!--Hotel info after selection-->
        <div class="container align-text-center">
            <h4 class="h4 text-center py-4"><input type="hidden" name="hotelnamee" value="avarihotelname">Avari Hotel Name</h4>
            <p class="text-center mx-auto"><input type="hidden" name="address" value="hoteladdress"> Address: 242-244 Fatima Jinnah Rd, Karachi Cantonment, Karachi, Karachi City, Sindh 75530</p>
            <p class="text-center mx-auto"><input type="hidden" name="phone" value="phone">Phone: (021) 111 282 747</p>
          </div>
        <!--Hotel info after selection Ends-->

       <!--Rooms of avari hotel cards-->
       <div class="container-fluid">
        <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="py-4">
        @foreach ($data4 as $item)
        <form action="/details" method="post">
        @csrf
  <div class="card">
    <img src="images/{{$item['roomimage']}}" style="height: 200px;" class="card-img-top" alt="...">
    <div class="card-body" style="text-align: center;">
      <p class="card-text"><input type="hidden" name="hotelname" value="Avari Hotel" id=""></p>
      <h5 class="card-title"><input type="hidden" name="roomname" value="{{$item['roomname']}}">{{$item['roomname']}}</h5>
      <p class="card-text">
      <input type="hidden" name="roomdesc" value="{{$item['roomdesc']}}">{{$item['roomdesc']}}
        </p>
      <p class="card-text"><small class="text-muted">Avg/Night</small></p>
        <p class="card-text"><input type="hidden" name="roomprice" value="{{$item['roomprice']}}">{{$item['roomprice']}}</p>
    </div>
    <div class="card-footer" style="text-align: center;">
    <a class="btn btn-warning btn-lg" role="button" aria-pressed="true"><input type="submit" name="select" value="Select"></a>
    </div>
  </div>
        </form>
  @endforeach
            </div>
            </div>
            </div>
</div>
        <!--hotel ends-->

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