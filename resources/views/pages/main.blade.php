@extends('layouts.app')
@section('content')
@include('layouts.includes.carousel')
<div class="container-fluid">
      <!-- carousel -->

      <!-- START THE FEATURETTES -->
      <!-- under fold -->
      	<div class="row featurette">
      	  <div class="col-md-7 col-md-push-5">
      	  	<div class="embed-responsive embed-responsive-16by9" id="yt-player">
      	  	  <iframe class="embed-responsive-item" width="100%" height="100%" src="https://www.youtube.com/embed/6555xkqgfpQ" allowfullscreen></iframe>  
      	  	</div>
      	  </div>
      	  <div class="col-md-5 col-md-pull-7">
      	    <h2 class="featurette-heading">Watch the trailer. <span class="text-muted">See for yourself.</span></h2>
      	    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            <p><a class="btn btn-lg btn-warning" href="http://erectus.wiki/videos.html" target="_blank" role="button">Watch more videos &hellip;</a></p>
      	  </div>
      	</div>
      <!-- end under fold -->

      <!-- about -->
      <div class="row featurette section-about has-bg ta-center">
        <div class="col-md-12">
          <h2 class="featurette-heading">What is Erectus The Game?</h2>
          <div class="text-container">
            <p class="lead">
            The game is about building and expanding your empire in a pre-historic world that existed 130,000 years ago. Back then Homo sapiens weren’t alone on this planet. Next to Homo sapiens there was also another type of humans, called Homo erectus. Where the development of the Homo sapiens was mainly technology driven, the development of the Homo erectus was based on a symbiosis with nature. The Homo erectus worked together with animals and lived on our planet for 1.5 million years.
            In the game, you play as a white, brown, black or yellow individual of the Homo sapiens. Together with thousands of other players, you explore the dynamics of working together, trading and forming alliances. The common enemy that you encounter in the game, is the Erectus people.
           </p>
          </div>
			     <p><a class="btn btn-lg btn-warning" href="#" role="button">Learn more &raquo;</a></p>
        </div>        
      </div>
      <!-- end about -->

      <!-- Fours concepts -->
      <div class="row screenshots">
        <div class="col-lg-3">
          <img class="img-circle" src="{{ asset('assets/images/scbuild.png') }}" alt="">
          <h2 class="featurette-heading">Build</h2>
          <p>Build your own empire, start with a village, build your city, and strengthen your forces.</p>
        </div><!-- /.col-lg-3 -->
        <div class="col-lg-3">
          <img class="img-circle" src="{{ asset('assets/images/scupgrade.png') }}" alt="">
          <h2 class="featurette-heading">Upgrade</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
        </div><!-- /.col-lg-3 -->
        <div class="col-lg-3">
          <img class="img-circle" src="{{ asset('assets/images/scdefend.png') }}" alt="">
          <h2 class="featurette-heading">Defend</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        </div><!-- /.col-lg-3 -->
        <div class="col-lg-3">
          <img class="img-circle" src="{{ asset('assets/images/scattack.png') }}" alt="">
          <h2 class="featurette-heading">Attack</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        </div><!-- /.col-lg-3 -->
      </div><!-- /.row -->
      <!-- end of concepts -->

      <!-- rag -->
      <div class="row featurette section-rag has-bg">
        <div class="col-md-12">
          <h2 class="featurette-heading ta-center">Tournament Rules and Guidelines</h2>
          
          <div class="text-container">
            <ol class="lead">
              <li>In the game, you play as a white, brown, black or yellow individual of the Homo sapiens. Together with thousands of other players, you explore the dynamics of working together, trading and forming alliances. The common enemy that you encounter in the game, is the Erectus people.</li>
              <li>In the game, you play as a white, brown, black or yellow individual of the Homo sapiens. Together with thousands of other players, you explore the dynamics of working together, trading and forming alliances. The common enemy that you encounter in the game, is the Erectus people.</li>
              <li>In the game, you play as a white, brown, black or yellow individual of the Homo sapiens. Together with thousands of other players, you explore the dynamics of working together, trading and forming alliances. The common enemy that you encounter in the game, is the Erectus people.</li>
            </ol>
            
          </div>
          	
			       <p class="ta-center"><a class="btn btn-lg btn-warning" href="#" role="button">Learn more &raquo;</a></p>
        </div>
      </div>
      <!-- end rag -->

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="{{ asset('assets/images/Erectus Speer.jpg') }}" alt="Generic placeholder image">
        </div>
      </div>

      <div class="row featurette has-bg">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="{{ asset('assets/images/Erectus Speer.jpg') }}" alt="Generic placeholder image">
        </div>
      </div>
      <!-- /END THE FEATURETTES -->
     
</div><!-- /.container -->
    
    <footer>
    <div class="container-fluid">
      <p>&copy; 2016 Maata, Inc</p>
    </div>
     
    </footer>

@endsection