@extends('layouts.admin')

@section('content')
<!-- ACTIONS -->
<section id="action" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ml-auto">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search">
            <span class="input-group-btn">
              <button class="btn btn-primary">Search</button>
            </span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- POSTS -->
  <section id="posts">
    <div class="container">
      <div class="row">
        <div class="col">
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
      <td><a href='{{ url("/edit/{$blog->id}") }}' class="btn btn-primary">
        <i class="fa fa-angle-double-right"></i> Edit
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
      </div>
    </div>
  </section>

  @endsection