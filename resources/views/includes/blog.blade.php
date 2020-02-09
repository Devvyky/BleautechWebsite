<section class="site-section" id="blog-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Our Blog</h2>
            <p class="lead" data-aos="fade-up" data-aos-delay="100">Current Trends In Tech</p>
          </div>
        </div>

        <div class="row">
        @if(count($blogs) > 0) 

                @foreach($blogs->all() as $blog)
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="">
            <div class="h-entry">
              <a href="single.html">
                <img src="{{$blog->image_Url}}" alt="Image" class="img-fluid">
              </a>
              <h2 class="font-size-regular"><a href="#">{{$blog->blog_title}}</a></h2>
              <div class="meta mb-4">Published<span class="mx-2">&bullet;</span> {{$blog->created_at}}<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>{{$blog->story}}</p>
              <p><a href='{{url("/readmore/{$blog->id}")}}' class="btn btn-primary">More</a></p>
            </div> 
          </div>

          @endforeach
                @else
                <h2>NO BLOG FOR NOW</h2>

                @endif
                {{$blogs->links("pagination::bootstrap-4")}}
           
         
        </div>
      </div>
    </section>