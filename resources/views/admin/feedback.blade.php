@extends('layouts.admin')

@section('content')


<section id="posts">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="card">
            <div class="card-header">
              <h4>Latest Posts</h4>
            </div><hr><hr>
            @if(count($feedbacks) > 0) 

            @foreach($feedbacks->all() as $feedback)
            <table class="table table-striped">
              <thead class="thead-inverse">
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Subject</th>
                  <th>Message</th>
                  <th>Date Sent</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row">{{$feedback->id}}</td>
                  <td>{{$feedback->feedback_firstname}}</td>
                  <td>{{$feedback->email}}</td>
                  <td>{{$feedback->subject}}</td>
                  <td>{{$feedback->message}}</td>
                  <td>{{$feedback->created_at}}</td>
                  
                </tr>
                
              </tbody>
            </table>
            @endforeach
                @else
                <h2>NO FEEDBACK POST</h2>

                @endif
                {{$feedbacks->links("pagination::bootstrap-4")}}
          </div>
        </div>
       
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection