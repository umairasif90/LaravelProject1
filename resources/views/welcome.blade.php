@include('header')
        <!--Slider-->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{URL::to('images/slider1.jpg')}}" class="slide d-block w-100" style="height: 500px;"
                        alt="">
                </div>
                <div class="carousel-item">
                    <img src="{{URL::to('images/slider2.jpg')}}" class="slide d-block w-100" style="height: 500px;"
                        alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{URL::to('images/slider3.jpg')}}" class="slide d-block w-100" style="height: 500px;"
                        alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!--Slider Ends-->

        <!--Hotel Offers heading-->
        <div class="container align-text-center">
            <h4 class="h4 text-center py-4">HOTELS OFFERS</h4>
            <p class="bottom-bor mx-auto"></p>
        </div>
        <!--Hotel Offers heading Ends-->

       <!--Hotel offers cards-->

 <!--Hotel Offers cards-->
 <section id="top-sale">
    <div class="container py-5">
        <!--owl carousel-->
        <div class="owl-carousel owl-theme">
        @foreach ($data1 as $item)
            <div class="item py-2 px-2">
                <div class="product font-rale">
                    <td><img src="images/{{$item['image']}}" style="height: 200px;" class="image-fluid"></td>

                    <div class="text-center">
                        <td><h6><input type="hidden" name="hotelname" value="{{$item['hotelname']}}">{{$item['hotelname']}}</h6></td>
                        <div class="price py-2">
                            <span>Avg. price/night: <br></span>
                           <span><td> <input type="hidden" name="priceofhotel" value="{{$item['priceofhotel']}}">{{$item['priceofhotel']}}</td></span>
                        </div>
                        <button type="submit" class="btn btn-warning font-size-12">Reservation</button>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
        <!--owl carousel ends-->
        <a href="hotel" class="btn btn-secondary btn-lg viewall" role="button" aria-pressed="true">View all</a>
    </div>
</section>
<!--Hotel Offers cards Ends-->

        <!--Details-->
        <div class="container-fluid details py-4 ">
          <div class="row">
            <div class="col">
          <p class="text-center"><i class="sym fas fa-dollar-sign"></i></p>
          <h5 class="text-center details-p">Best Price Guarantee</h5>
          <p class="text-center details-p">Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
            </div>
            <div class="col">
          <p class="text-center"><i class="sym fas fa-lock"></i></p>
          <h5 class="text-center details-p">Safe and Secure</h5>
          <p class="text-center details-p">Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
            </div>
            <div class="col">
          <p class="text-center"><i class="sym fas fa-thumbs-up"></i></p>
          <h5 class="text-center details-p">Best Travel Agents</h5>
          <p class="text-center details-p">Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
            </div>
          </div>
        </div>
        <!--Details Ends-->

        <!--Tourist Spots Heading-->
                <div class="container align-text-center">
            <h4 class="h4 text-center py-4">Tourists Spots</h4>
            <p class="bottom-bor mx-auto"></p>
        </div>
        <!--Tourist Spots heading Ends-->

                <!--Tourists Spots Offers cards-->
                <section id="top-sale">
    <div class="container py-5">
        <!--owl carousel-->
        <div class="owl-carousel owl-theme">
        @foreach ($data2 as $item)
            <div class="item py-2 px-2">
                <div class="product font-rale">
                    <td><img src="images/{{$item['timage']}}" style="height: 200px;" class="image-fluid"></td>

                    <div class="text-center">
                        <td><h6><input type="hidden" name="tname" value="{{$item['tname']}}">{{$item['tname']}}</h6></td>
                        <div class="price py-2">
                           <span><td> <input type="hidden" name="tdesc" value="{{$item['tdesc']}}">{{$item['tdesc']}}</td></span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
        <!--owl carousel ends-->
        <a href="#" class="btn btn-secondary btn-lg viewall" role="button" aria-pressed="true">View all</a>
    </div>
</section>
        <!--Tourists Spots Cards Ends-->

        <!--Quotes-->
        <div class="container-fluid aa">
        <div class="media container">
  <img src="images/umair.jpg" style="height: 150px; width: 110px;" class="align-self-center mr-3" alt="...">
  <div class="media-body">
  <blockquote class="blockquote mb-0">
      <p>Created this website from scratch using HTML5, Bootstrap, CSS, JQuery, Laravel, MySql</p>
      <footer class="blockquote-footer">Umair Asif <cite title="Source Title"><br>Full Stack Developer</cite></footer>
    </blockquote>
  </div>
        </div><br>
        <div class="media container">
  <img src="images/umair.jpg" style="height: 150px; width: 110px;" class="align-self-center mr-3" alt="...">
  <div class="media-body">
  <blockquote class="blockquote mb-0">
      <p>Created this website from scratch using HTML5, Bootstrap, CSS, JQuery, Laravel, MySql</p>
      <footer class="blockquote-footer">Umair Asif <cite title="Source Title"><br>Full Stack Developer</cite></footer>
    </blockquote>
  </div>
        </div>
</div>
<!--Quotes Ends-->

<!--NewsLetter-->
<div class="card text-center py-4">
  <div class="card-body">
    <h5 class="card-title">Subscribe to offers & updates</h5>
    <p class="card-text">Offers on hotel rooms delivered directly to your inbox.</p>
    <input type="text" placeholder="@Email Address">
    <a href="#"><button class="btn btn-warning">Sign Up</button></a>
  </div>
</div>
<!--NewsLetter Ends-->

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