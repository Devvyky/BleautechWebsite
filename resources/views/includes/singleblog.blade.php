@extends('layouts.user')

@section('content')

  
     
    <div class="overlay" 
    style="background-color:blue" data-aos="fade">
      <div class="container">
        <div class="row align-items-center justify-content-center">

          
              <div class="col-md-6 mt-lg-5 text-center" style="color:white">
                <h1>{{ $blog->blog_title }}</h1>
                <p class="post-meta">{{$blog->created_at}} &bull; Posted by <a href="#">Admin</a> in <a href="#">Events</a></p>
                
              </div>
            
        </div>
      </div>
    </div>  

    
    
    <section class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-8 blog-content">
            <div class="row mb-5">
              <div class="col-lg-6">
                <figure><img src="{{ asset('$blog->image_Url')}}" alt="Image" class="img-fluid">
                  <figcaption>{{$blog->blog_title}}</figcaption></figure>
              </div>
              <!-- <div class="col-lg-6">
                <figure><img src="images/img_4.jpg" alt="Image" class="img-fluid">
                  <figcaption>This is an image caption</figcaption></figure>
              </div> -->
            </div>
            <p class="lead">{{$blog->story}}</p>
            <div class="pt-5">
              <!-- <p>Categories:  <a href="#">Design</a>, <a href="#">Events</a>  Tags: <a href="#">#html</a>, <a href="#">#trends</a></p> -->
            </div>


           
              
             

          </div>
          <div class="col-md-4 sidebar">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon fa fa-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            <div class="sidebar-box">
              <div class="categories">
                <h3>Categories</h3>
                <li><a href="#">Creatives <span>(12)</span></a></li>
                <li><a href="#">News <span>(22)</span></a></li>
                <li><a href="#">Design <span>(37)</span></a></li>
                <li><a href="#">HTML <span>(42)</span></a></li>
                <li><a href="#">Web Development <span>(14)</span></a></li>
              </div>
            </div>
            <!-- <div class="sidebar-box">
              <img src="images/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4">
              <h3>About The Author</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
              <p><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
            </div>

            <div class="sidebar-box">
              <h3>Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div> -->
          </div>
        </div>
      </div>
    </section>

    
    @endsection