<section class="site-section border-bottom" id="team-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-8 text-center">
            <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">Our Team</h2>
            <p class="lead" data-aos="fade-up" data-aos-delay="100">Meet our great team of experts that help you get .</p>
          </div>
        </div>
        <div class="row">
          
            @if(count($teams) > 0)

            @foreach($teams->all() as $team)
          <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="{{$team->facebook}}"><span class="icon-facebook"></span></a></li>
                  <li><a href="{{$team->twitter}}"><span class="icon-twitter"></span></a></li>
                  <li><a href="{{$team->linkedin}}"><span class="icon-linkedin"></span></a></li>
                  <li><a href="{{$team->instagram}}"><span class="icon-instagram"></span></a></li>
                </ul>
                <img src="{{$team->image_Url}}" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3>{{$team->name}}</h3>
                <span class="position">{{$team->title}}</span>
              </div>
            </div>
          </div>

          @endforeach
                @else
                <h2>NO TEAM FOR NOW</h2>

                @endif

                {{$teams->links("pagination::bootstrap-4")}}
           
          
        </div>
      </div>
    </section>