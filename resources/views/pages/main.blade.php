@extends('layouts.app')
@section('content')
@include('layouts.includes.carousel')
<div class="container-fluid">
      <!-- carousel -->

      <!-- START THE FEATURETTES -->
      <!-- under fold -->
      <section class="no-bg">
        <div class="row featurette">
          <div class="col-md-7 col-md-push-5">
            <div class="embed-responsive embed-responsive-16by9" id="yt-player">
              <iframe class="embed-responsive-item" width="100%" height="100%" src="https://www.youtube.com/embed/6555xkqgfpQ" allowfullscreen></iframe>  
            </div>
          </div>
          <div class="col-md-5 col-md-pull-7">
            <h2 class="featurette-heading">Watch the trailer. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Imagine the existence of a time machine that could instantly transport you 130,000 years into the past. But what exactly would you see when you take your first step outside the time machine? You would bear witness to the event to which we all thank our lives; The great confrontation between Homo Sapiens and Homo Erectus. The confrontation 130,000 years ago greatly influenced our destiny. In the end, we, the Homo Sapiens just barely made it. If we hadn't, the world would have looked entirely different.</p>
             <p><a class="btn btn-lg btn-warning" href="http://erectus.wiki/videos.html" target="_blank" role="button">Watch more videos &hellip;</a></p>
          </div>
        </div> 
      </section>
      	
      <!-- end under fold -->

      <!-- about -->
      <section class="has-bg">
        <div class="row featurette section-about ta-center">
          <div class="col-md-12">
            <h2 class="featurette-heading">What is Erectus The Game?</h2>
            <div class="text-container">
              <p class="lead">
              The game is about building and expanding your empire in a pre-historic world that existed 130,000 years ago. Back then Homo sapiens weren’t alone on this planet. Next to Homo sapiens there was also another type of humans, called Homo erectus. Where the development of the Homo sapiens was mainly technology driven, the development of the Homo erectus was based on a symbiosis with nature. The Homo erectus worked together with animals and lived on our planet for 1.5 million years.
              In the game, you play as a white, brown, black or yellow individual of the Homo sapiens. Together with thousands of other players, you explore the dynamics of working together, trading and forming alliances. The common enemy that you encounter in the game, is the Erectus people.
             </p>
            </div>
             <p><a class="btn btn-lg btn-warning" href="http://erectus.wiki/story.html" target="_blank" role="button">The Story of Erectus &hellip;</a></p>
          </div>        
        </div>
      </section>
      
      <!-- end about -->

      <!-- Fours characters -->
      <section class="no-bg">
        <h1 class="featurette-heading ta-center">Characters</h1>
        <div class="row screenshots">
          <div class="col-lg-3 col-sm-3">
            <img class="img-character" src="{{ asset('assets/images/race-assura.png') }}" alt="">
            <h2 class="featurette-heading">Assura</h2>
            <p>A well rounded civilization with no overly weak or strong attributes, a good civilization for beginners.</p>
          </div><!-- /.col-lg-3 -->
          <div class="col-lg-3 col-sm-3">
            <img class="img-character" src="{{ asset('assets/images/race-ikari.png') }}" alt="">
            <h2 class="featurette-heading">Ikari</h2>
            <p>Powerful because of their skills with technology, but slow. A suitable race for strategic players.</p>
          </div><!-- /.col-lg-3 -->
          <div class="col-lg-3 col-sm-3">
            <img class="img-character" src="{{ asset('assets/images/race-ngane.png') }}" alt="">
            <h2 class="featurette-heading">Ngane</h2>
            <p>This civilization is fast, strong and built for aggressive playstyles.</p>
          </div><!-- /.col-lg-3 -->
          <div class="col-lg-3 col-sm-3">
            <img class="img-character" src="{{ asset('assets/images/race-okiteng.png') }}" alt="">
            <h2 class="featurette-heading">Okiteng</h2>
            <p> Complex and economically sound, well suited for defensive players.</p>
          </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->
      </section>
      
      <!-- end of characters -->

      <!-- rag -->
      <section class="has-bg">
            <div class="row featurette section-rag">
              <div class="col-md-12">
                <h2 class="featurette-heading ta-center">Tournament Rules and Guidelines</h2>
                
                <div class="text-container-dark">
                  <ol class="lead">
                    <li>
                      All contestants must be bona fide students of their respective institution and currently enrolled in the second semester of current academic year.
                    </li>
                    <li>
                      Each team shall consist of a minimum of five (5) to a maximum of twenty (20) members only. An institution can have more than one team.
                    </li>
                    <li>
                      Each member of a team should represent the same department.
                    </li>
                    <li>
                      The team should compose of unique members. If a team member is found to be registered to another team, the latter team will either find another member or they will not be able to register the tournament.
                    </li>
                    <li>
                      A team should have a team leader or coordinator
                    </li>
                    <li>
                      To apply for registration, the student must approach their respective Dean’s office for application. A recommendation letter from the said office will follow which includes the names of all the participants per team to be passed to the organizers of this tournament
                    </li>
                    <li>
                      Upon registration, the applicant will be given a beta key to access the official game website for the tournament. The website will post details and updates on the game tournament
                    </li>
                    <li>
                      Each beta key is unique and will be given individually
                    </li>
                    <li>
                      The tournament will start on November 21, 2016 and will cover whole Mindanao Region
                    </li>
                    <li>
                      Deadline of registration of entries will be on November 7, 2016. Late entries will not be accommodated
                    </li>
                  </ol>      
            </div>
      </section>      
      <!-- end rag -->

      <!-- how to join -->
      <section class="no-bg">
        <h1 class="featurette-heading ta-center">What are the rewards for winning?</h1>
        <div class="col-md-12">
           <div class="text-container-light">
                  <ol class="lead">
                    <li>In the game, you play as a white, brown, black or yellow individual of the Homo sapiens. Together with thousands of other players, you explore the dynamics of working together, trading and forming alliances. The common enemy that you encounter in the game, is the Erectus people.</li>
                    <li>In the game, you play as a white, brown, black or yellow individual of the Homo sapiens. Together with thousands of other players, you explore the dynamics of working together, trading and forming alliances. The common enemy that you encounter in the game, is the Erectus people.</li>
                    <li>In the game, you play as a white, brown, black or yellow individual of the Homo sapiens. Together with thousands of other players, you explore the dynamics of working together, trading and forming alliances. The common enemy that you encounter in the game, is the Erectus people.</li>
                  </ol>      
            </div>
        </div>
      </section>
      <!-- end how to join -->

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