<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          
          <div class="container slider-size slider1">
            <div class="carousel-caption">
              <img src="{{ asset('assets/images/interUlogo.png') }}" class="interUlogo" alt="">
               <h1>Join Now!</h1>
              <p>Get a chance to win awesome prizes!</p>
              <p>
                <a class="btn btn-lg btn-warning" href="#" role="button">How to Join</a>
              </p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="container slider-size slider2">
            <div class="carousel-caption">
              <div class="row">
                <div class="col-xs-12 col-md-12">
                  <h1>In partnership with:</h1>
                </div>
              </div>
              <div class="row sponsors-container">
                <div class="col-xs-4 col-md-4 icon-container">
                  <img class="sponsor-pic" src="{{ asset('assets/images/sponsors/asus.png') }}" alt="">
                </div>
                <div class="col-xs-4 col-md-4 icon-container">
                  <img class="sponsor-pic" src="{{ asset('assets/images/sponsors/intel.png') }}" alt="">
                </div>
                <div class="col-xs-4 col-md-4 icon-container">
                  <img class="sponsor-pic" src="{{ asset('assets/images/sponsors/microsoft.png') }}" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">       
          <div class="container slider-size slider3">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-warning" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->