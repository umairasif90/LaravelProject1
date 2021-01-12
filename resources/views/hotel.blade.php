@include('header')

<br><br>
<!--Complete Hotels List-->
        <!--Hotel Offers heading-->
        <div class="container align-text-center">
            <h4 class="h4 text-center py-4">Our Hotels</h4>
            <p class="bottom-bor mx-auto"></p>
        </div>
        <!--Hotel Offers heading Ends-->

        <!--Hotel offers cards-->
        <div class="container-fluid">
        <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="py-4">
        @foreach ($data3 as $item)
  <div class="card">
    <img src="images/{{$item['hotelimage']}}" style="height: 200px;" class="card-img-top" alt="...">
    <div class="card-body" style="text-align: center;">
      <h5 class="card-title"><input type="hidden" name="hotelname" value="{{$item['hotelname']}}">{{$item['hotelname']}}</h5>
      <p class="card-text">
        <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
        </p>
      <p class="card-text"><small class="text-muted"><i class="fas fa-coffee px-1"></i>
        <i class="fas fa-utensils px-1"></i>
        <i class="fas fa-dumbbell px-1"></i>
        <i class="fas fa-swimmer px-1"></i></small>
      </p>
      <p class="card-text"><small class="text-muted">Avg/Night</small></p>
        <p class="card-text"><input type="hidden" name="hotelprice" value="{{$item['hotelprice']}}">{{$item['hotelprice']}}</p>
    </div>
    <div class="card-footer" style="text-align: center;">
    <a href="awariroomsview"><p class="card-text"><small class="text-muted" ><button style="width: 300px;" class="btn btn-warning">SELECT</button></small></p></a>
    </div>
  </div>
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