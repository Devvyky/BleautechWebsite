@extends('layouts.admin')

@section('content')
<!-- ACTIONS -->
<section id="action" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a href="{{ route('blog') }}" class="btn btn-primary btn-block" >
            <i class="fa fa-plus"></i> Create Post
          </a>
        </div>
        <div class="col-md-3">
          <a href="{{ route('addMember') }}" class="btn btn-success btn-block" >
            <i class="fa fa-plus"></i> Add Team Member
          </a>
        </div>
        <div class="col-md-3">
          <a href="{{ route('viewBlog') }}" class="btn btn-warning btn-block" >
            <i class="fa fa-plus"></i>View Blog Posts
          </a>
        </div>
      </div>
      @if(count($errors) > 0)
                    @foreach($errors->all as $error)
                        <div class="alert alert-danger"><li>{{$error}}</li></div>
                    @endforeach
                @endif
                @if (session('response'))
                        <div class="alert alert-success">
                            {{ session('response') }}
                        </div>
                    @endif
    </div>
   
  </section>


  <!-- POSTS -->
  <section id="posts">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="card">
            <div class="card-header">
              <h4>Latest Posts</h4>
            </div>
            @if(count($blogs) > 0) 

            @foreach($blogs->all() as $blog)
            <table class="table table-striped">
              <thead class="thead-inverse">
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Date Posted</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row">{{$blog->id}}</td>
                  <td>{{$blog->blog_title}}</td>
                  <td>Web Development</td>
                  <td>{{$blog->created_at}}</td>
                  <td><a href='{{ url("/view/{$blog->id}") }}' class="btn btn-secondary">
                    <i class="fa fa-angle-double-right"></i> Details
                  </a></td>
                  <td><a href='{{ url("/delete/{$blog->id}") }}' class="btn btn-danger">
                    <i class="fa fa-angle-double-right"></i> Delete
                  </a></td>
                </tr>
                
              </tbody>
            </table>
            @endforeach
                @else
                <h2>NO BLOCK POST</h2>

                @endif
                {{$blogs->links("pagination::bootstrap-4")}}
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-center bg-primary text-white mb-3">
            <div class="card-body">
              <h3>Posts</h3>
              <h1 class="display-4">
                <i class="fa fa-pencil"></i> 6
              </h1>
              <a href="{{ route('viewBlog') }}" class="btn btn-outline-light btn-sm">View</a>
            </div>
          </div>

          <div class="card text-center bg-success text-white mb-3">
            <div class="card-body">
              <h3>FeedBacks</h3>
              <h1 class="display-4">
                <i class="fa fa-folder-open-o"></i> 4
              </h1>
              <a href="{{ route('feedback') }}" class="btn btn-outline-light btn-sm">View</a>
            </div>
          </div>

          <div class="card text-center bg-warning text-white mb-3">
            <div class="card-body">
              <h3>Members</h3>
              <h1 class="display-4">
                <i class="fa fa-users"></i> 2
              </h1>
              <a href="{{ route('viewTeam') }}" class="btn btn-outline-light btn-sm">View</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
