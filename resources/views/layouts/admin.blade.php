<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Bleautech Admin DashBoard</title>
  <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css ') }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
    <div class="container">
      <a href="index.html" class="navbar-brand"><img src="{{ asset('images/bleau8.png') }}" alt=""></a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        @guest
            <li class="nav-item px-2">
                <a href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item px-2">
                <a href="{{ route('register') }}">Register</a>
            </li>
        @else
          <li class="nav-item px-2">
            <a href="/admin" class="nav-link active">Dashboard</a>
          </li>
          <li class="nav-item px-2">
            <a href="{{ route('feedback') }}" class="nav-link active">FeedBacks</a>
          </li>
          <li class="nav-item px-2">
            <a href="{{ route('viewBlog') }}" class="nav-link active">Posts</a>
          </li>
          
          <li class="nav-item px-2">
            <a href="{{ route('viewTeam') }}" class="nav-link active">Members</a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown mr-3">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-user"></i> {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu">
              <a href="" class="dropdown-item">
                <i class="fa fa-user-circle"></i> Profile
              </a>
              <a href="" class="dropdown-item">
                <i class="fa fa-gear"></i> Settings
              </a>
            </div>
          </li>
          <li class="nav-item">
              <a href="{{ route('logout') }}" class="nav-link"
              
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class="fa fa-user-times"></i>
                Logout
            

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                </form>
            </a>
          </li>
          @endguest
        </ul>
      </div>
    </div>
  </nav>

  <header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1><i class="fa fa-gear"></i> Dashboard</h1>
        </div>
      </div>
    </div>
  </header>

  @yield('content')

  <footer id="main-footer" class="bg-dark text-white mt-5 p-5">
    <div class="conatiner">
      <div class="row">
        <div class="col">
          <p class="lead text-center">Copyright &copy; 2020 Bleautech</p>
        </div>
      </div>
    </div>
  </footer>
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{asset('js/popper.min.js') }}"></script>
  <script src="{{asset('js/bootstrap.min.js') }} "></script>
  
  <script>
      CKEDITOR.replace( 'editor1' );
  </script>
</body>
</html>
